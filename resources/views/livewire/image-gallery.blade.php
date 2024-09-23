<div class="grid grid-cols-3 gap-4">
    @foreach ($images as $image)
        <div>
            <img src="{{ Storage::url($image) }}" alt="Image" class="w-full h-auto" />
        </div>
    @endforeach
</div>
