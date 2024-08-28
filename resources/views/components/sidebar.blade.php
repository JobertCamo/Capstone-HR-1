


    <ul class="flex flex-col bg-[#0F0F0F] bg-opacity-[65%] h-full">
        <div class="m-3 text-2xl">
            <label for="menu">Menu</label>
        </div>
        <label for="">ONBOARDING MANAGEMENT</label>
        <li class="flex-nowrap"><a wire:navigate href="{{ url('/dashboard') }}">Document Management</a></li>
        <li><a wire:navigate href="{{ url('/onboard') }}">Task Management</a></li>
        <label for="EMPLOYEE ENGANEMENT">EMPLOYEE ENGANEMENT</label>
        <li><a wire:navigate href="{{ url('/onboard') }}">Feedback and Surveys</a></li>
        <li><a wire:navigate href="{{ url('/onboard') }}">Task Completion</a></li>
        <li><a wire:navigate href="{{ url('/onboard') }}">Recogniton Center</a></li>
        <li><a wire:navigate href="{{ url('/onboard') }}">Access Learning</a></li>
    </ul>

