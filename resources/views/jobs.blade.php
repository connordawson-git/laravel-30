<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Hello from Jobs</h1>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>{{ $job['title'] . " " .  $job['salary']}}</div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
