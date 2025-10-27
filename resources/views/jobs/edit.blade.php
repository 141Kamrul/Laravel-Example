<x-layout>
    <x-slot name="heading">
        Edit Job: {{ $job->title }}
    </x-slot>

    <form method="POST" action="/jobs/{{ $job['id'] }}" class="max-w-md mx-auto mt-8 space-y-6">
        @csrf
        @method('PATCH')
        
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-700">
                Job Title
            </label>
            <input
                type="text"
                id="title"
                name="title"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Enter job title"
                value="{{ old('title', $job->title) }}"
                required
            >
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="salary" class="block mb-2 text-sm font-medium text-gray-700">
                Salary ($ per year)
            </label>
            <input
                type="number"
                id="salary"
                name="salary"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Enter salary amount"
                value="{{ old('salary', $job->salary) }}"
                min="0"
                step="1000"
                required
            >
            @error('salary')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4 pt-4">
            <button
                type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
            >
                Update Job
            </button>
            
            <a 
                href="/jobs/{{ $job->id }}"
                class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition-colors"
            >
                Cancel
            </a>
        </div>
    </form>

    @if ($errors->any())
        <div class="max-w-md mx-auto mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
            <h3 class="text-red-800 font-medium mb-2">Please fix the following errors:</h3>
            <ul class="list-disc list-inside text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>