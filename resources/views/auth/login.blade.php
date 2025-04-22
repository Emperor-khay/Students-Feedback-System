<x-guest-layout>
    <div class="px-2 flex lg:flex-row flex-col-reverse lg:justify-center lg:items-center lg:h-screen">

        <!-- Start Page Content here -->
        <div class="bg-white p-8 rounded-lg shadow-lg md:mx-auto lg:mx-0 mb-8 lg:w-[25%] md:w-[60%] w-[100%]">
            <form class=" grid gap-4">
                <h2 class="text-xl font-bold text-primary text-center hidden lg:block">Welcome Back!</h2>

                <div class="grid gap-2">
                    <label for="email" class="font-medium">Email</label>
                    <input type="email" name="email" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300" required>
                </div>

                <div class="grid gap-2">
                    <label for="password" class="font-medium">Password</label>
                    <input type="password" name="password" class="form-input rounded-lg border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300" required>
                </div>

                <div class="form-check">
                    <input class="form-checkbox text-green-500 rounded border-gray-300 focus:outline-none focus:ring-0  focus:border-gray-300" type="checkbox" value="" id="invalidCheck2"  required>
                    <label class="ms-1.5" for="invalidCheck2">
                        Remember Me
                    </label>
                </div>

                {{-- <button class="btn bg-primary text-white">Login</button> --}}
                <a href="{{ route('dashboard') }}" class="btn bg-primary text-white">Login</a>

                <p>Don't have an account? <a href="{{ route('register') }}" class="text-dark hover:text-primary">Register</a></p>
                <p class="text-end"> <a href="{{ route('password-reset') }}" class="text-dark hover:text-primary">Forgot Password?</a></p>
            </form>
        </div>
        <!-- End Page content -->

        <div class="bg-primary p-8 rounded-tr-lg rounded-tl-lg lg:rounded-tl-none lg:rounded-tr-lg lg:rounded-br-lg shadow-lg md:mx-auto lg:mx-0 mt-8 lg:w-[25%] md:w-[60%] w-[100%] animate-bounce-custom">

            <h1 class="text-white text-2xl font-semibold">Access Your World</h1>
            <p class="text-white text-sm mt-2">Login in to continue your journey!</p>
        </div>
    </div>
</x-guest-layout>
