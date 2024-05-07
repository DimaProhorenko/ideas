<div style="width: {{ $size ?? '120px' }};" class="avatar-sm rounded-circle ratio ratio-1x1 overflow-hidden">
    <img class="w-full" src="{{ $path ?? $user->getImageUrl() }}" alt="Mario Avatar">
</div>
