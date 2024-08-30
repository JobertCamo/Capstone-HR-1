


    <div class="flex flex-col bg-[#0F0F0F] bg-opacity-[60%] lg:w-[95%] md:w-[90%] sg:w-[85%] tb:w-[90%] xl:w-[120%] 2xl:w-[10%] h-screen overflow-y-auto p-2 max-w-[120%] shadow-right-light">

            <ul class="flex flex-col gap-2 p-2 bg-opacity-0">
                <label for="menu" class="title">Menu</label>
                <div class="flex items-center ">
                    <label for="EMPLOYEE ENGANEMENT" class="title">Onboarding</label>
                    <div class="border-[1px] w-[100%] h-[0] right-0"></div>
                </div>
                <li class="side"> <a wire:navigate href="{{ url('/dashboard') }}" >Document Management</a></li>
                <li class="side"><a wire:navigate href="{{ url('/onboard') }}">Task Management</a></li>
                <div class="flex items-center ">
                    <label for="EMPLOYEE ENGANEMENT" class="title">Engagement</label>
                    <div class="border-[1px] w-[100%] h-[0] right-0"></div>
                </div>
            
                <li class="side"><a wire:navigate href="{{ url('/onboard') }}">Feedback and Surveys</a></li>
                <li class="side"><a wire:navigate href="{{ url('/onboard') }}">Task Completion</a></li>
                <li class="side"><a wire:navigate href="{{ url('/onboard') }}">Recogniton Center</a></li>
                <li class="side"><a wire:navigate href="{{ url('/onboard') }}">Access Learning</a></li>
            </ul>
        </div>

