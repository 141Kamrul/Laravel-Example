<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>

    <form method="POST" action="/jobs" class="max-w-md mx-auto mt-8 space-y-4">
        @csrf

        <div>
            <label class="block mb-1 text-sm font-medium">Title</label>
            <input
                type="text"
                name="title"
                class="w-full border rounded p-2"
                placeholder="Job title"
            >
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium">Salary</label>
            <input
                type="number"
                name="salary"
                class="w-full border rounded p-2"
                placeholder="Salary"
            >
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
            Save
        </button>
    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</x-layout>
