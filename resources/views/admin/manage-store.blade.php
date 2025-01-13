<x-admin-layout>
    <div class="flex bg-green-500 flex-col sm:w-full md:w-5/6 lg:w-[1000px]  mx-auto p-5 rounded-lg">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-4 mx-auto">
            @foreach ($stores as $store)
                <div class="fruit-card width-1/3">
                    <img src="{{ asset($store->fruit_image)}}" alt="{{ $store->fruit_name }}" class="h-64 w-full rounded-lg">
                    <h2 class="text-center font-bold text-2xl text-green-950">{{ $store->fruit_name }}</h2>
                    <p class="text-center text-sm text-green-950/70">₱{{ $store->fruit_price }} | {{ $store->fruit_quantity }} pcs.</p>
                    <p class="text-center text-sm text-green-950/70">{{ $store->fruit_description }}</p>
                    <div class="flex justify-end">
                    <a href="{{url('admin/show', $store->id)}}" class="bg-green-300 mr-2 ml-auto rounded-sm px-2 py-1 mt-5">Edit</a>
                    <button form="delete-form" class="bg-red-300 w-25 rounded-sm px-2 py-1 mt-5 ">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            {{$stores->links()}}
        </div>
        <form action="/admin/delete/{{$store->id}}" class="hidden" method="POST" id="delete-form">
            @method('DELETE')
            @csrf
        </form>
    </div>

</x-admin-layout>