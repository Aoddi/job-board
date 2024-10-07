<x-layout>
    @foreach($jobs as $job)
        <div class="">{{ $job->title }}</div>
    @endforeach
</x-layout>
