<x-layout>
    <x-slot name="heading">Detailed Jobs Page</x-slot>
    
    <h2 class="text-lg font-bold">{{ $job->title }}</h2>
    <p>This job pays ${{ number_format($job->salary) }} per year.</p>
    
    @if($tags->count() > 0)
        <p class="mt-4 font-semibold">Tags for this job:</p>
        <ul class="list-disc list-inside mt-2">
            @foreach ($tags as $tag)
                <li class="mb-1">
                    <a href="/tags/{{ $tag->id }}" class="text-blue-500 hover:underline">
                        <strong>{{ $tag->name }}</strong>
                    </a> 
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-gray-500 mt-4">No tags assigned to this job.</p>
    @endif

    <div class="mt-6 flex space-x-4">
        <a href="/jobs/{{ $job->id }}/edit" class="text-green-500 hover:underline"> 
            Edit Job
        </a>
        
        <form method="POST" action="/jobs/{{ $job->id }}"> 
            @csrf
            @method('DELETE') 
            <button
                type="submit"
                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" {{-- Fixed: hover color to red --}}
                onclick="return confirm('Are you sure you want to delete this job?')"
            >
                Delete
            </button>
        </form>
    </div>
</x-layout>