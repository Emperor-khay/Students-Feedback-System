<section>
    <!-- Modal -->
    @if($showModal)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg lg:w-1/3 w-full relative">
            <button wire:click="closeModal" class="absolute top-2 right-2 text-[40px] text-gray-500 hover:text-red-500 hover:scale-125">
                &times;
            </button>
            <h2 class="text-xl font-bold mb-4">Make Complaint</h2>
            <p class="text-sm text-gray-600 mb-4">
                If you have any issues related to academics, facilities, or general concerns, kindly describe them below and we’ll look into it.
            </p>
            <form action="" class=" grid gap-4">
                <div class="grid gap-2">
                    <label for="" class="text-gray-800 text-sm font-medium inline-block mb-2">Complaint Title:</label>
                    <input type="text" name="" id="" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg">
                </div>
                <div class="grid gap-2">
                    <label for="" class="text-gray-800 text-sm font-medium inline-block mb-2">Complaint:</label>
                    <textarea name="complaint" id="" cols="30" rows="10" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn bg-primary text-white w-full cursor-pointer hover:bg-green-800">
            </form>
        </div>
    </div>
    @endif
</section>