<x-layout>
    <x-slot name="heading">Detailed Employer Page</x-slot>
    <h2 class="text-lg font-bold">{{ $employer['name'] }}</h2>
    <p>This employer has jobs </p>
    <ul>
        @foreach ($jobs as $job)
        <li>
            id: {{$job['id']}}. Title: {{ $job['title'] }}. Salary: {{ $job['salary'] }}.
        </li>
        @endforeach
    </ul>
</x-layout>