<x-layout>
    <h1>{{ $category['name'] }}</h1>
    <hr>
    <img src="{{ asset($category['image']) }}" alt="{{ $category['name'] }}" width="300" height="auto">
    <p>{{ $category['description'] }}</p>
</x-layout>
