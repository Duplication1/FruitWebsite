<x-layout>
    <form action="" method="POST" class="mx-auto w-96 bg-green-500 p-5 flex flex-col g-5">
    <h1 class="text-2xl text-green-900 font-bold text-center">{{$stores->fruit_name}}</h1>
    <img src="{{asset($stores->fruit_image)}}" class="h-54 mt-5"/>
    <h1>P{{$stores->fruit_price}}</h1>
    <label for="fruit_quantity">Quantity</label>
    <input type="number" id="fruit_quantity" name="fruit_quantity" value="{{$stores->fruit_quantity}}"/>
    <button class="px-3 py-1 bg-green-300 w-20 ml-auto mt-5 rounded-md">Buy</button>
    </form>
</x-layout>