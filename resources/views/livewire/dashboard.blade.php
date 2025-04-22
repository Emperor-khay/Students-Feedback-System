
<main>
    <div class="card m-5 p-5">
        {{-- <h3 class="font-medium text-lg">Dashboard</h3> --}}
        <h3 class="font-medium text-2xl text-center lg:text-start">Dashboard</h3>
    </div>

    <div class="grid lg:grid-cols-2">
        <div class="lg:cols-span-1">
            <div class="m-5 grid grid-cols-2 gap-3">
                <button wire:click="openModal">
                    <div class="card border border-primary text-center shadow-lg rounded-lg p-5 hover:p-2 group hover:bg-primary transition-all duration-500">
                        <div class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]" >
                            <i class="bi bi-plus-lg"></i>
                        </div>
                        <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >New Complaint</h3>
                    </div>
                </button>

                <div class="card border border-primary text-center shadow-lg rounded-lg p-5 hover:p-2 group hover:bg-primary transition-all duration-500">
                    <div class="flex items-center justify-center gap-5">
                        <div>
                            <h3 class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]">0</h3>
                            <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >Complaints</h3>
                        </div>

                        <div>
                            <h3 class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]">0</h3>
                            <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >Resolved</h3>
                        </div>
                    </div>
                </div>
                <br>
                <a href="{{ route('log') }}" wire:navigate class="card border border-primary text-center shadow-lg rounded-lg p-5 hover:p-2 group hover:bg-primary transition-all duration-500 col-span-2">
                    <div class="group-hover:text-[white] group-hover:animate-pulse group-hover:font-bold text-[20px] group-hover:text-[30px]" >
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="group-hover:text-[white] group-hover:font-bold group-hover:text-lg" >Students Complaint Log</h3>
                </a>

            </div>
        </div>
    </div>


    <x-custom.complaints-modal :showModal="$showModal"/>

</main>
