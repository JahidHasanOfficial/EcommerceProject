
<x-guest-layout>
    <section id="products" class="py-6">
        <div class="container mx-auto">
            <h1 class="text-center text-lg font-bold pb-3">Feacture Product</h1>
            <div class=" gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
              @foreach ($products as $product)
              <div class="shadow-xl m-auto rounded-lg hover:bg-sky-100">
                <img class="w-40 h-50 m-auto text-2xl rounded-lg" src="{{ asset('image/' .$product->image) }}" alt="">
                <div class="p-4">
                    <h3>{{ $product->name }}</h3>
                    <p class="mt-2 mb-2">${{ $product->price }}</p>
                    <a href="{{ route('product-details', ['product'=> $product]) }}" class="bg-sky-400 rounded-sm px-5 py-1">Details</a>
                </div>
               </div>
              @endforeach
            </div>
        </div>
      </section>
   </x-guest-layout>