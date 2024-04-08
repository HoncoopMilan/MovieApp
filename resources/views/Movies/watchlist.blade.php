<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movie Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white-900 flex">
                    <div class="container">
                        <h1>Mijn Watchlist</h1>
                        <div class="row">
                            @foreach($watchlist as $item)
                                <div class="col-md-3" style="float: left; width: 25%;"> <!-- Adjust width to 25% to fit 4 items per row -->
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <a href="{{ route('movies.show', $item->film->id) }}">
                                                <img src="{{ asset('posters/' . $item->film->poster) }}" alt="{{ $item->film->title }}" class="object-cover object-center w-64 h-auto">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div style="clear: both;"></div> <!-- Clear floating elements to ensure proper layout -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


    
