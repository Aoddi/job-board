<x-card class="mb-4">
    <div class="mb-4 flex justify-between">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">${{ number_format($job->salary) }}</div>
    </div>

    <div class="mb-4 flex items-center justify-between trxt-sm text-slate-500">
        <div class="flex space-x-4">
            <div class="">{{ $job->employer->company_name }}</div>
            <div class="">{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-sm">
            <x-tag>
                <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
                    {{ \Illuminate\Support\Str::ucfirst($job->experience) }}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                </a>
            </x-tag>
        </div>
    </div>

    {{ $slot }}
</x-card>
