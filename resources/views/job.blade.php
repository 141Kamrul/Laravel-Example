<x-layout>
    <x-slot name="heading">Detailed Jobs Page</x-slot>
    <h2 class="text-lg font-bold">{{ $job['title'] }}</h2>
    <p>This job pays ${{ $job['salary'] }} per year.</p>
</x-layout>