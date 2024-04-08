<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movie Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white-900 flex">
                    <div class="stats stats-vertical shadow">

                        <div class="stat">
                            <div class="stat-value">{{ $film->title }}</div>
                        </div>

                        <form method="POST" action="{{ route('movies.review.submit', ['film' => $film->id]) }}">
                            @csrf
                            <div class="stat">
                                <label for="rating" class="block mb-2">Rating:</label>
                                <input type="range" id="rating" name="rating" min="1" max="10" value="1" class="range" step="1" />
                            </div>
                            <div class="stat">
                                <label for="review" class="block mb-2">Review:</label>
                                <textarea id="review" name="description" class="textarea textarea-bordered" placeholder="Schrijf jouw review..."></textarea>
                            </div>
                            <div class="stat flex justify-center">
                                <button type="submit" class="btn btn-wide">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>