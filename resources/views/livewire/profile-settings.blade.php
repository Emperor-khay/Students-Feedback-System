<main class="m-5 p-5">
    <div class="card p-2">
        <div class="text-center">
            <h3 class="font-medium text-2xl">Profile Settings</h3>
        </div>
    </div>
    <div class="lg:flex lg:justify-around">
        <section class="lg:w-[45%] py-6 w-[100%]">

            <div>
                <div class="flex items-center gap-3 text-sm font-semibold">
                    <span class="text-sm font-medium text-slate-700">Profile Settings</span>
                    <i class="material-symbols-rounded text-xl flex-shrink-0 text-slate-500">chevron_right</i>
                    <span class="text-sm font-medium text-slate-700" aria-current="page">profile</span>
                </div>
            </div>

            <form class="my-5 grid gap-4">
                <div class="grid gap-2">
                    <label for="firstName" class="text-gray-800 text-sm font-medium inline-block mb-2">First Name</label>
                    <input type="text" name="firstName" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                </div>

                <div class="grid gap-2">
                    <label for="lastName" class="font-medium">Last Name</label>
                    <input type="text" name="lastName" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                </div>

                <div class="grid gap-2">
                    <label for="email" class="font-medium">Email</label>
                    <input type="email" name="email" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                </div>

                <div class="grid gap-2">
                    <label for="phone" class="font-medium">Phone Number</label>
                    <input type="text" name="phone" class="form-input border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 rounded-lg" required>
                </div>


                <button class="btn bg-primary text-white">Save</button>
            </form>
        </section>


        <section id="security" class="lg:w-[45%] w-[100%] section py-6 rounded-lg transition-opacity duration-500 opacity-100">
            <div class="space-y-5">
                <div>
                    <div class="flex items-center gap-3 text-sm font-semibold">
                        <span class="text-sm font-medium text-slate-700">Profile Settings</span>
                        <i class="material-symbols-rounded text-xl flex-shrink-0 text-slate-500">chevron_right</i>
                        <span class="text-sm font-medium text-slate-700" aria-current="page">Security</span>
                    </div>
                </div>
                <div class="flex items-center p-5 bg-white rounded-lg shadow-md">
                    <input class=" text-green-500 rounded border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300 mr-2" type="checkbox">
                    <label>Enable Two-Factor Authentication</label>
                </div>
                <div class="p-5 bg-white rounded-lg shadow-md">
                    <label class="block font-medium">Login Activity</label>
                    <button class="text-green-500 hover:underline">View Recent Logins</button>
                </div>
                <div class="p-5 bg-white rounded-lg shadow-md">
                    <label class="block font-medium">Connected Devices</label>
                    <button class="text-green-500 hover:underline">Manage Devices</button>
                </div>
            </div>
        </section>
    </div>


</main>
