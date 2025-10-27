<x-layout>
    <x-slot name="heading">Detailed Tags Page</x-slot>
    <h2 class="text-lg font-bold">{{ $tag['name'] }}</h2>
    <p>Jobs for this tag</p>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
            <strong>{{ $job['title'] }}</strong>
        </li>
        @endforeach
    </ul>
</x-layout>