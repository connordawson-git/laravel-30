<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1>Hello from home</h1>
    <ul>
        @foreach($jobs as $job)
            <li>
                {{ $job['title'] . " " .  $job['salary']}}
            </li>
        @endforeach
    </ul>

</x-layout>
