<x-layout>
    <x-slot name="heading">Detailed Jobs Page</x-slot>
    <h2 class="text-lg font-bold">{{ $job['title'] }}</h2>
    <p>This job pays ${{ $job['salary'] }} per year.</p>
    <p>This is employed by {{ $employer['name'] }}</p>
    <p>Tags for this job</p>
    <ul>
        @foreach ($tags as $tag)
        <li>
            <a href="/tags/{{$tag['id']}}" class="text-blue-500 hover:underline">
            <strong>{{ $tag['name'] }}</strong>
        </li>
        @endforeach
    </ul>
</x-layout>