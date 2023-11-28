<div x-data="{ menuOpen: false }">
    <div x-menu x-model="menuOpen">
        {{ $slot }}
    </div>
</div>