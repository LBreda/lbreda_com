<div class="flex flex-col box-content my-4 shadow-lg rounded-b-xl ">
    <div class="flex items-center bg-primary text-white px-4 rounded-t-xl h-12">
        <h3 class="text-xl">{{ $title }}</h3>
    </div>
    @if($image ?? false)
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-full">
    @endif
    <div class="flex-grow p-4">
        {{ $slot }}
    </div>
</div>