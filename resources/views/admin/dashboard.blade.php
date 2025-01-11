<x-admin-layout>
    <form action="/admin/dashboard" method="POST" enctype="multipart/form-data" class="flex flex-col w-96 mx-auto gap-5 bg-green-700 p-5">
        @csrf
        <input type="text" name="fruit_name" id="fruit_name" placeholder="fruit's name"/>
        @error('fruit_name')
            <p class="text-red-900">{{$message}}</p>
        @enderror
        <input type="number" name="fruit_price" id="fruit_price" placeholder="fruit's price"/>
        @error('fruit_price')
            <p class="text-red-900">{{$message}}</p>
        @enderror
        <input type="number" name="fruit_quantity" id="fruit_quantity" placeholder="fruit's quantity"/>
        @error('fruit_quantity')
            <p class="text-red-900">{{$message}}</p>
        @enderror
        <input type="file" name="fruit_image" id="fruit_image" placeholder="fruit's image"/>
        @error('fruit_image')
            <p class="text-red-900">{{$message}}</p>
        @enderror
        <input type="text" name="fruit_description" id="fruit_description" placeholder="fruit's description"/>
        @error('fruit_description')
            <p class="text-red-900">{{$message}}</p>
        @enderror
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Add Fruit</button>
    </form>
    
</x-admin-layout>