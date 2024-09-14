<?php

use Livewire\Volt\Component;

new class extends Component {
    
    public $first_name;

    public function submit()
    {
        $this->validate([
            'first_name' => ['required'],
        ]);
    }
    
}; ?>

<div>
    <div class="flex flex-col items-center justify-center h-full p-3 text-md">
        <h1 class="self-center m-0 text-2xl font-bold">Application Form</h1>
    <form wire:submit="submit">   <!-- FORM INPUT -->
        <fieldset class="flex p-4 border-2 w-fit"><!-- FIELD -->
            <legend>PERSONAL DETAILS</legend>
            <div><!-- MAIN DIV OF INPUTS -->
                <div class="items-center space-y-4 lg:space-x-5 lg:flex lg:flex-row sp">
                    <div class="space-y-4 md:flex rightform sp md:flex-col"><!-- FROM NAME TO CONTACTS -->
                        <div>
                            <label for="first_name">First Name</label>
                            <input wire:model="first_name" type="text" id="first_name" name="first_name" class="inputs" placeholder="First Name" />
                            <x-input-error name="first_name" />
                        </div>
                        <div>
                            <label for="middle_name">Middle Name</label>
                            <input wire:model="first_name" type="text" id="middle_name" name="middle_name" class="inputs w-[50%]" placeholder="Middle Name" />
                            <x-input-error name="first_name" />
                        </div>
                        <div>
                            <label for="last_name">Last Name</label>
                            <input wire:model="first_name" type="text" id="last_name" name="last_name" class="inputs" placeholder="Last Name" />
                            <x-input-error name="first_name" />
                        </div>
                    </div>
                    <div class="space-y-4 leftform sp">
                        <div>
                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender" class="drop">
                                {{-- <option value="" disabled selected>Gender</option> --}}
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <x-input-error name="first_name" />
                        </div>
                        <div>
                            <label for="birthday">Birthday:</label>
                            <input wire:model="first_name" id="birthday" name="birthday" type="date" class="placeholder-gray-500 inputs" placeholder="Enter your birthday" />
                            <x-input-error name="first_name" />
                        </div>
                        
                        <div>
                            <label for="contact">Contact:</label>
                            <input wire:model="first_name" id="contact" name="contact" type="tel" pattern="[0-9]{11}" placeholder="09XXXXXXXXX" class="inputs w-[70%]" />
                            <x-input-error name="first_name" />
                        </div>
                    </div>
                </div>
                <div class="space-y-4 sp">
                    <!-- ADDRESS TO EMAIL -->
                    <div class="space-y-4">
                        <div>
                            <label for="address">Address:</label>
                            <input wire:model="first_name" type="text" id="address" name="address" class="inputs" placeholder="123 Main St" />
                            <x-input-error name="first_name" />
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input wire:model="first_name" type="email" id="email" name="email" class="inputs" placeholder="example@example.com" />
                            <x-input-error name="first_name" />
                        </div>
                    </div>
                </div>
                <div class="flex space-x-3 lg:flex-row">
                    <!-- NATIONALITY TO CIVIL -->
                    <div class="flex-1">
                        <label for="national">Nationality</label>
                        <input wire:model="first_name" type="text" id="national" name="national" class="inputs w-[50%]" placeholder="Your Nationality" />
                        <x-input-error name="first_name" />
                    </div>
                    <div class="flex-1">
                        <label for="civil">Civil Status</label>
                        <select wire:model="first_name" id="civil" name="civil" class="drop">
                            <option value="" disabled selected>Civil Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                        </select>
                        <x-input-error name="first_name" />
                    </div>
                </div>
                <div class="flex flex-col space-x-3 lg:flex-row">
                    <!-- RELIGION TO RESUME -->
                    <div class="flex-1">
                        <label for="religion">Religion</label>
                        <select id="religion" name="religion" class="drop">
                            <option value="" disabled selected>Religion</option>
                            <option value="catholic">Catholic</option>
                            <option value="muslim">Muslim</option>
                            <option value="inc">Iglesia ni Cristo</option>
                            <option value="bornagain">Born Again</option>
                            <option value="atheist">Atheist</option>
                        </select>
                    </div>    
                    <div class="flex-1 md:mt-3">
                        <label for="resume">Resume:</label>
                        <input type="file" wire:model="first_name"e="file" id="resume" name="resume" />
                            <x-input-error name="first_name" />
                    </div>      
                </div>
                <div>
                    <label for="referred_by">Referred by:</label>
                    <!-- REFERRED -->
                    <input wire:model="first_name" type="text" id="referred_by" name="referred_by" class="inputs" placeholder="Referred Person" />
                    <x-input-error name="first_name" />
                </div>
            </div>
        </fieldset>
        <div class="flex items-center justify-between mt-2">
            <!-- LAST CONTAINER -->
            <div class="flex items-center">
                <input wire:model="first_name" type="checkbox" id="terms" name="terms" class="" />
                <!-- LAST INPUT -->
                <label for="terms">TERM AND CONDITION</label>
                <x-input-error name="first_name" />
            </div>
            <button type="submit" class="p-2 text-black rounded-lg bg-slate-300 w-[15%] h-fit">Submit</button>
        </div>
    </form>
</div>

</div>
