<div class="w-full h-full bg-no-repeat bg-cover headsearch text-slate-50">
    <div class="flex items-center justify-center w-full h-full bg-black bg-opacity-55">
        <div class="flex w-[40%] h-[40%] items-center justify-end flex-col space-y-10">
            
            <div class="text-3xl font-bold">
                <h1>JOB SEARCH</h1>
            </div>
            <div class="flex items-center space-x-4">
                <div>
                    <input wire:model.debounce.300ms='q' type="search" class=" bg-cb border-[3px] rounded-lg h-[40px] w-[300px] text-black">
                </div>
                <div class="px-3 py-2 font-bold bg-orange-400 rounded-lg w-fit h-fit hover:ring-1 ring-cb hover:bg-pink-500 bg-opacity-90 bg-gradient-to-t from-orange-500 to-pink-500">
                    <button>Search</button>
                </div>
            </div>
        </div>
    </div>
</div>