<x-layout>
    <x-slot name="heading">Jobs Page</x-slot>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
            {{$job['id']}} id: {{ $job['title'] }}: <strong>${{ $job ['salary'] }}</strong>per year
            <p>
                @if($job->employer)
                    {{ $job->employer->name }}
                @else
                    No employer assigned
                @endif
            </p>
        </li>
        @endforeach
    </ul>
</x-layout>
