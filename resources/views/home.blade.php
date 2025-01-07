<x-layout>
    <div class="grid lg:grid-cols-2 container mx-auto w-full h-4/5 mt-10">
        <div class="col flex flex-col justify-center items-center">
            <h1 class="text-7xl font-bold text-green-700">Welcome</h1>
            <h2 class="text-2xl text-green-700/90 mb-10">We sell fruits and meats!</h2>
            <a href="/store/" class="text-green-700 bg-green-300 py-3 px-5 border-2 border-solid border-green-700 rounded-lg mb-20 hover:bg-green-700 hover:text-green-300">Go to Store <i class="fa-solid fa-store"></i></a>

            <div class="text-green-700 mt-5 flex flex-col gap-2">
            <h1 class="text-2xl font-medium">Contact Us:</h1>
            <p class="border-2 border-solid border-green-700 w-fit py-2 px-3 rounded-lg"><i class="fa-solid fa-phone"></i> 09263627274</p>
            <p class="border-2 border-solid border-green-700 w-fit py-2 px-3 rounded-lg"><i class="fa-regular fa-envelope"></i> gamot.kim.fernandez@gmail.com</p>
            </div>
        </div>
        <div class="col flex justify-center items-center">
            <img src="{{Vite::asset('resources/images/stall.svg')}}" alt="Fruit Background" class="w-full h-5/6">
        </div>
   </div>
</x-layout>