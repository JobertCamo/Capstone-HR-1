


    <ul class="flex flex-col bg-[#0F0F0F] bg-opacity-[65%] lg:w-[110%] md:w-[95%] sg:w-[90%] tb:w-[90%] xl:w-[120%] 2xl:w-[10%] h-screen">

        <div class="m-3 text-2x">
            <label for="menu">Menu</label>
        </div>

            <label for="">ONBOARDING MANAGEMENT</label>

        <li class="flex-nowrap">
            <a wire:navigate href="{{ url('/dashboard') }}">Document Management</a>
        </li>

        <li>
            <a wire:navigate href="{{ url('/onboard') }}">Task Management</a>
        </li>

        <label for="EMPLOYEE ENGANEMENT">EMPLOYEE ENGANEMENT</label>

        <li>
            <a wire:navigate href="{{ url('/onboard') }}">Feedback and Surveys</a>
        </li>

        <li>
            <a wire:navigate href="{{ url('/onboard') }}">Task Completion</a>
        </li>

        <li>
            <a wire:navigate href="{{ url('/onboard') }}">Recogniton Center</a>
        </li>

        <li>
            <a wire:navigate href="{{ url('/onboard') }}">Access Learning</a>
        </li>

    </ul>

