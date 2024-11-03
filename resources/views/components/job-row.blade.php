@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-400 ">{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-600 transition-colors duration-300">{{$job->title}}</h3>

        <p class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>

    <div class="flex flex-col justify-between align-bottom">
        <div class="flex gap-3 justify-end">
            <x-detail>Tag</x-detail>
        </div>
        <div class="flex gap-3">
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>
    </div>
</x-panel>
