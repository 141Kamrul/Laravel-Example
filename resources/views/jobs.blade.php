<ul>
    @foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
        {{$job['id']}} id: {{ $job['title'] }}: <strong>${{ $job ['salary'] }}</strong>per year
    </li>
    @endforeach
</ul>
