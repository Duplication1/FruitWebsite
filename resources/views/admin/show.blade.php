<x-admin-layout>
<form method="POST" action="{{url('/admin/update', $stores->id)}}" enctype="multipart/form-data">
    @csrf
 <input type="text" name="fruit_name" id="fruit_name" value="{{$stores->fruit_name}}" />
 <input type="number" name="fruit_price" id="fruit_price" value="{{$stores->fruit_price}}" />
 <input type="number" name="fruit_quantity" id="fruit_quantity" value="{{$stores->fruit_quantity}}" />
 <input type="text" name="fruit_description" id="fruit_description" value="{{$stores->fruit_description}}" />
 <img src="{{ asset($stores->fruit_image)}}" alt="{{ $stores->fruit_name }}" class="h-64 w-full rounded-lg" />
 <input type="file" name="fruit_image"  id="fruit_image" value="{{$stores->fruit_image}}" />
 <button type="submit">Update</button>
</form>
</x-admin-layout>