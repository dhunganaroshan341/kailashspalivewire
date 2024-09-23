<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait MediaHandler
{
    /**
     * Delete a single image or multiple images stored in a JSON array.
     *
     * @param  mixed  $oldMedia  The old media (single string or JSON array).
     * @param  mixed  $newMedia  The new media (single string or JSON array).
     * @param  string  $disk  The disk to delete from (default: public).
     */
    public function deleteMedia($oldMedia, $newMedia, $disk = 'public')
    {
        // If oldMedia is JSON, decode it into an array
        if (is_string($oldMedia) && $this->isJson($oldMedia)) {
            $oldMediaArray = json_decode($oldMedia, true);
            $newMediaArray = is_string($newMedia) && $this->isJson($newMedia)
                ? json_decode($newMedia, true)
                : [];

            // Loop through old media array and remove those that are not in the new media array
            foreach ($oldMediaArray as $oldItem) {
                if (! in_array($oldItem, $newMediaArray)) {
                    Log::info('Deleting old image: '.$oldItem);
                    $this->deleteFile($oldItem, $disk); // Delete old image if removed
                }
            }
        } elseif (is_string($oldMedia)) {
            // For a single image
            if ($oldMedia !== $newMedia) {
                // Only delete if the new image is different from the old one
                Log::info('Deleting old image: '.$oldMedia);
                $this->deleteFile($oldMedia, $disk);
            }
        }
    }

    /**
     * Delete the actual file from storage.
     *
     * @param  string  $filePath
     * @param  string  $disk
     */
    private function deleteFile($filePath, $disk = 'public')
    {
        // Add the correct path if it's in a subfolder (e.g., public/images/)
        $fullPath = 'images/'.$filePath;

        Log::info('Attempting to delete file: '.$fullPath);

        if (Storage::disk($disk)->exists($fullPath)) {
            Storage::disk($disk)->delete($fullPath);
            Log::info('File deleted: '.$fullPath);
        } else {
            Log::warning('File not found: '.$fullPath);
        }
    }

    /**
     * Check if a string is JSON.
     *
     * @param  string  $string
     * @return bool
     */
    private function isJson($string)
    {
        json_decode($string);

        return json_last_error() == JSON_ERROR_NONE;
    }
}
