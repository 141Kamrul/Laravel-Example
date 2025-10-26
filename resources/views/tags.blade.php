<x-layout>
    <x-slot name="heading">Tags Page</x-slot>
    <ul>
        @foreach ($tags as $tag)
        <li>
            <a href="/tags/{{$tag['id']}}" class="text-blue-500 hover:underline">
            {{$tag['id']}} id: {{ $tag['name'] }}
        </li>
        @endforeach
    </ul>
</x-layout>
