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
                    <!-- Movie Poster -->
                    <div class="card card-side bg-base-100 ">
                        <figure>
                            <img src="{{ asset('posters/' . $film->poster) }}" alt="Movie" class="w-64 h-auto" />
                        </figure>
                        <div class="card-body">
                            <h2 class="stat-value">{{$film->title}}</h2>
                            <h3>Directed by: <strong>{{$film->director}}</strong></h3>
                            <p>{{$film->description}}</p>
                            <p class="stat-value">IMDB: {{$film->imdb_rating}}</p>
                            <div class="container">
                                <h2>Watched by:</h2>
                                <p class="stat-value">{{$film->views}}</p>
                                <div class="card-actions justify-end">
                                    <a href="{{ route('movies.review.create', ['film' => $film->id]) }}" class="btn btn-secondary text-white">Review</a>
                                    <form method="POST" action="{{ $inWatchlist ? route('watchlist.remove', ['filmId' => $film->id]) : route('watchlist.add', ['filmId' => $film->id]) }}">
                                        @csrf
                                        @if($inWatchlist)
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-accent text-white">Verwijder uit watchlist</button>
                                        @else
                                            <button type="submit" class="btn btn-accent text-white">Voeg toe aan watchlist</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>