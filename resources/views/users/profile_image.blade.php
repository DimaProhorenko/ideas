<div style="width: {{ $size ?? '110px' }};" class="avatar-sm rounded-circle ratio ratio-1x1 overflow-hidden p-3">
    <img class="object-fit-cover d-block w-100" src="{{ $path ?? $user->getImageUrl() }}" alt="Mario Avatar">
</div>
