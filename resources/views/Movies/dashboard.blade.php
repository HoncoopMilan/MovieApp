<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Popular right now!") }}
                    <div class="carousel w-full">
                        @foreach($films->chunk(5) as $index => $chunk)
                        <div id="slide{{ $index + 1 }}" class="carousel-item relative w-full">
                            <div class="flex justify-between">
                                @foreach($chunk as $film)
                                <div class="w-1/5 p-4">
                                    <div>
                                        <a href="{{ route('movies.show', $film->id) }}">
                                            <img src="{{ asset('posters/' . $film->poster) }}" alt="{{ $film->title }}" class="object-cover object-center w-full h-auto">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="absolute flex justify-between items-center transform -translate-y-1/2 left-5 right-5 top-1/2">
                        @foreach($films->chunk(5) as $index => $chunk)
                            @if($index > 0)
                            <a href="#slide{{ $index }}" class="btn btn-circle absolute left-0">❮</a>
                            @endif
                            @if($index < count($films->chunk(5)) - 1)
                            <a href="#slide{{ $index + 2 }}" class="btn btn-circle absolute right-0">❯</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>