@foreach ($rooms as $room)
    <a href="{{ route('roomDetails', $room->id) }}" class="w-full  sm:w-1/2 flex h-24">
        <div class="w-4/12 h-full">
            <img src="{{ $room->getFirstMediaUrl('rooms') }}" class="object-cover" alt="" />
        </div>
        <div class="px-4">
            <h4 class="text-sm font-bold">{{ $room->name }}</h4>
            <p class="text-xs">Tala, a radiant star guiding with inner strength, illuminating your
                path towards vast horizons, limitless possibilities and eternal love.</p>
        </div>
    </a>
@endforeach
