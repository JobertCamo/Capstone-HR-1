<div class="flex items-center justify-center w-full h-screen text-black">
    <div class="w-[85%] h-full bg-gray-600 flex overflow-hidden">
        <!-- Left Column -->
        <div class="flex-1 h-full p-5 space-y-5 overflow-auto bg-gray-500">
            <div class="flex items-center justify-between mx-2">
                <!-- Job Category Title -->
                <div class="text-2xl font-bold">
                    <h1>Job Category</h1>
                </div>
                <!-- Sorting Dropdown -->
                <div>
                    <label for="sorted">Sorted By:</label>
                    <select name="sorting" id="sort" class="p-1 text-black rounded-xl">
                        <option value="date">Date</option>
                        <option value="relevance">Relevance</option>
                    </select>
                </div>
            </div>

            <!-- Responsive Job Details Card -->
            <div class="flex flex-col p-4 space-y-2 bg-gray-400 rounded-lg card sm:p-3 md:p-4 lg:p-5 sm:text-sm md:text-base lg:text-lg">
                <h1 class="text-lg font-semibold jobtype sm:text-base md:text-lg lg:text-xl">Sales Associate</h1>
                <span class="text-gray-700 dept sm:text-sm md:text-base">Sales Marketing</span>
                <p class="text-sm text-gray-600 smoldesc sm:text-xs md:text-sm lg:text-base">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minima, doloribus fugiat repellendus iste error consequuntur temporibus architecto veniam ipsa odio nostrum sapiente? Quas, dolorem similique distinctio minima veritatis eveniet? Lore
                </p>
                <time class="text-gray-500 time sm:text-xs md:text-sm lg:text-base">10h ago</time>
            </div>
        </div>

        <!-- Right Column for Sorting Component (Responsive) -->
        <div class="flex-1 hidden bg-gray-400 basis-52 lg:flex md:flex">
            <x-jobsorting />
        </div>
    </div>
</div>
