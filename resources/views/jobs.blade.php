<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Hello from Jobs</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id']}}">
                    {{ $job['title'] . " " .  $job['salary']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
