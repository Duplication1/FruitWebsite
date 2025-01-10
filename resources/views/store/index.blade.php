<x-layout>
    <h1 class="">Stores</h1>
<div class="flex bg-green-500 flex-col sm:w-full md:w-5/6 lg:w-[1000px]  mx-auto p-5 rounded-lg">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-4 mx-auto">
        @foreach ($stores as $store)
            <div class="fruit-card width-1/3">
                <img src="{{ asset($store->fruit_image)}}" alt="{{ $store->fruit_name }}" class="h-64 w-full rounded-lg">
                <h2 class="text-center font-bold text-2xl text-green-950">{{ $store->fruit_name }}</h2>
                <p class="text-center text-sm text-green-950/70">₱{{ $store->fruit_price }} | {{ $store->fruit_quantity }} pcs.</p>
                <p class="text-center text-sm text-green-950/70">{{ $store->fruit_description }}</p>
                <button>Buy</button>
            </div>
        @endforeach
    </div>
    <div>
        {{$stores->links()}}
    </div>
    
</div>
</x-layout>