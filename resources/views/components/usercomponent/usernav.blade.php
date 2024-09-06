<nav class="flex items-center justify-between h-16 px-4 cursor-pointer bg-navcolor">
    <div class="flex items-center space-x-2 rightnav">
        <a wire:navigate href="{{ url('/jobpost') }}"><x-heroicon-s-chevron-double-left class="size-6"/></a>
        <h1 class=" text-[15px]">Return to Store</h1>
    </div>
    <div class="flex items-center space-x-2 leftnav">
        <h1 class="text-xl font-bold">Job Search</h1>
    </div>
    <div>
        <a wire:navigate href="{{ url('/dashboard') }}">HOME</a>
    </div>
</nav>