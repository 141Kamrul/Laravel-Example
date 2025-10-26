<x-layout>
    <x-slot name="heading">Jobs Page</x-slot>
    <ul>
        @foreach ($employers as $employer)
        <li>
            <a href="/employers/{{$employer['id']}}" class="text-blue-500 hover:underline">
            {{$employer['id']}} id: {{ $employer['name'] }}
        </li>
        @endforeach
    </ul>
</x-layout>
