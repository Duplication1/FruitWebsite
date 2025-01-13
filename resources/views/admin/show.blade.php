<x-admin-layout>
<form method="POST" action="{{url('/admin/update', $stores->id)}}" enctype="multipart/form-data" class="flex flex-col gap-2 w-96 bg-green-500 p-5 rounded-lg mx-auto">
    @csrf
<label for="fruit_name" class="text-green-900">Fruit Name:</label>
 <input type="text" name="fruit_name" id="fruit_name" value="{{$stores->fruit_name}}" class="rounded-sm p-2"/>
 <label for="fruit_price" class="text-green-900">Fruit price:</label>
 <input type="number" name="fruit_price" id="fruit_price" value="{{$stores->fruit_price}}" class="rounded-sm p-2" />
 <label for="fruit_quantity" class="text-green-900">Fruit quantity:</label>
 <input type="number" name="fruit_quantity" id="fruit_quantity" value="{{$stores->fruit_quantity}}" class="rounded-sm p-2" />
 <label for="fruit_description" class="text-green-900">Fruit description:</label>
 <input type="text" name="fruit_description" id="fruit_description" value="{{$stores->fruit_description}}" class="rounded-sm p-2" />
 <label for="fruit_image" class="text-green-900">Fruit image:</label>
 <img src="{{ asset($stores->fruit_image)}}" alt="{{ $stores->fruit_name }}" class="h-64 w-full rounded-lg" class="rounded-sm p-2" />
 <input type="file" name="fruit_image"  id="fruit_image" value="{{$stores->fruit_image}}" class="rounded-sm p-2" />
 <button type="submit" class="bg-green-300 w-32 ml-auto rounded-lg px-2 py-3">Update</button>
</form>
</x-admin-layout>