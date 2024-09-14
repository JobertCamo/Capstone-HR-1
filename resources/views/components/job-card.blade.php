@props(['job'])
@php
use Carbon\Carbon;
    $date = $job->created_at;
    $date = Carbon::parse($date);
@endphp
<a wire:click='update({{ $job->id }})'>
    <div class="cursor-pointer mt-6 flex flex-col p-4 space-y-2 bg-gray-400 rounded-lg card sm:p-3 md:p-4 lg:p-5 sm:text-sm md:text-base lg:text-lg md:">
        <h1 class="text-lg font-semibold jobtype sm:text-base md:text-lg lg:text-xl">{{ $job->title }}</h1>
        <span class="text-gray-700 dept sm:text-sm md:text-base">{{ $job->location }}</span>
        <p class="text-sm text-gray-600 smoldesc sm:text-xs md:text-sm lg:text-base mb-6">
            {{ Str::limit($job->description, 200) }}
        </p>
        <div class="flex justify-between items-center">
                <div class="flex wrap space-x-4">
                    @foreach ($job->tags as $tag)
                    <div class="px-5 py-1 bg-white/10 hover:bg-white/25  rounded-xl font-bold transition-colors duration-300">
                        <p wire:click='viewTag({{ $tag->id }})' class="text-white text-sm">{{ $tag->name }}</p>
                    </div>
                    @endforeach
                </div>
            <time class="text-gray-500 time sm:text-xs md:text-sm lg:text-xs">{{ $date->diffForHumans() }}</time>
        </div>
    </div>
</a>