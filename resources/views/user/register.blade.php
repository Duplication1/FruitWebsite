<x-layout>
    <form action="/user/register" method="POST" class="mx-auto bg-green-500  w-4/5  sm:w-3/5 md:w-1/3 flex flex-col p-5 gap-5">
        @csrf 
        <h1 class="text-2xl font-bold text-green-900 text-center">User Register</h1>
        <x-form-input type="email" name="email" placeholder="Email" class="w-4/5 mx-auto mt-5 h-10"/>
        @error('email')
            <p class="text-red-500 text-center">{{ $message }}</p>
        @enderror
        <x-form-input type="text" name="name" placeholder="Name" class="w-4/5 mx-auto mt-5 h-10"/>
        @error('name')
            <p class="text-red-500 text-center">{{ $message }}</p>
        @enderror
        <x-form-input type="password" name="password" placeholder="Password" class="w-4/5 mx-auto mt-5 h-10"/>
        @error('password')
            <p class="text-red-500 text-center">{{ $message }}</p>
        @enderror
        <button type="submit" class="bg-green-300 w-[100px] mx-auto">Register</button>
    </form>
</x-layout>