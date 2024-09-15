<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FileDeletionHelper
{
    /**
     * Delete files that are no longer in the new list.
     *
     * @param  array|string  $originalFiles  JSON-encoded string or array of original file paths
     * @param  array|string  $newFiles  JSON-encoded string or array of new file paths
     * @param  string  $disk  Storage disk name (e.g., 'public')
     * @param  string  $directory  Directory within the storage disk
     */
    public static function deleteOldFiles($originalFiles, $newFiles, $disk = 'public', $directory = '')
    {
        // Decode the file paths if they are JSON strings
        $originalFiles = is_string($originalFiles) ? json_decode($originalFiles, true) : $originalFiles;
        $newFiles = is_string($newFiles) ? json_decode($newFiles, true) : $newFiles;

        // Default to empty arrays if decoding fails
        $originalFiles = $originalFiles ?? [];
        $newFiles = $newFiles ?? [];

        // Determine which files have been removed
        $removedFiles = array_diff($originalFiles, $newFiles);

        // Delete the removed files from storage
        foreach ($removedFiles as $filePath) {
            $fullPath = $directory ? "{$directory}/{$filePath}" : $filePath;

            if ($filePath && Storage::disk($disk)->exists($fullPath)) {
                Storage::disk($disk)->delete($fullPath);
            }
        }
    }
}
