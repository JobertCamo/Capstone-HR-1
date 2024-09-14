<?php

use Carbon\Carbon;
use App\Models\Job;
use App\Models\Tag;
use Livewire\Volt\Component;
use Livewire\WithPagination;


new class extends Component {
    use WithPagination;

    public $test;
    public $results;
    public $q = '';
    public $qr = [];

    

    public function update(Job $job)
    {
        $this->test = $job;
    }

    public function viewTag(Tag $tag)
    {
        $this->results = $tag->jobs;
    }

    public function with(): Array
    {
        if(!empty($this->q)){
            $jobs = Job::where('title', 'LIKE', '%'.$this->q.'%')
                        ->orWhere('description', 'LIKE', '%'.$this->q.'%')
                        ->latest()->Paginate(5);
        }else{
            $jobs = Job::latest()->simplePaginate(5);
        }

        return [
            'jobs' => $jobs,
        ];

    }
    

}; ?>

<div class="flex items-center justify-center w-full h-screen text-black">
    <div class="lg:w-[90%] h-full bg-gray-600 flex overflow-hidden md:w-[85%] sm:w[80%] w-[90%]">
        <!-- Left Column -->
        <div class="flex-1 h-full p-5 space-y-5 overflow-auto bg-gray-500 scrollbar-custom overflow-y-scroll">
            <div class="flex items-center justify-center mx-2 lg:justify-start">
                <!-- Job Category Title -->
                @if ($results)
                    <div class="flex justify-between w-full text-xl font-bold lg:text-2xl">
                        <h1>Job Category</h1>
                        <x-button wire:navigate href="/jobpost" white icon="arrow-left" label="back" />
                    </div>
                @else
                    <div class="text-xl font-bold lg:text-2xl">
                        <h1>Job Category</h1>
                    </div>
                @endif
            </div>

            <x-input wire:model.live='q' right-icon="magnifying-glass" placeholder="Search something..." />

            <!-- Responsive Job Details Card -->

            @if ($results)
                @foreach ($results as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            @else
                @foreach ($jobs as $job)
                <x-job-card :$job></x-job-card>
                @endforeach
            @endif
            
            <div>{{ $jobs->links() }}</div>
        </div>

        <!-- Right Column for Sorting Component (Responsive) -->
        <div class="flex-1 hidden bg-gray-400 lg:basis-52 md:basis lg:flex md:flex sm:hidden">
            {{-- <x-usercomponent.jobsorting /> --}}
            @if ($test)
                <div class="flex flex-col">
                    <p>{{ $test->title }}</p>
                    <p>{{ $test->description }}</p>
                    <p>{{ $test->salary }}</p>
                    <p>{{ $test->location }}</p>
                </div>
            @else
                <p>Default Details</p>
            @endif
        </div>
    </div>
</div>
