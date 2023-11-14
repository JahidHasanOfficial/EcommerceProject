
<x-guest-layout>


    

   

    <section id="categories">
        <div class="container mx-auto">
            <h1 class="text-center text-lg font-bold m-4">Feacture Categories</h1>
            <div class="gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
              @foreach ($categories as $category)
              <div class="shadow-xl hover:bg-yellow-400 text-center bg-sky-300 rounded-xl py-6">
               <span class=""><i class="fa-solid fa-laptop text-6xl"></i></span>
                <div class="p-4">
                   <a href="{{ route('category.products', ['category' => $category]) }}">{{ $category->name }}</a>
                </div>
               </div>
              @endforeach
            </div>
        </div>
    </section>
  {{-- ======================product section======================= --}}
  <section id="products" class="py-6">
    <div class="container mx-auto">
        <h1 class="text-center text-lg font-bold pb-3">Feacture Product</h1>
        <div class=" gap-4 mb-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
          @foreach ($products as $product)
          <div class="shadow-xl rounded-lg hover:bg-sky-100 m-auto">
            <img class="w-40 h-40 m-auto text-2xl rounded-lg" src="image/{{ $product->image }}" alt="">
            <div class="p-4">
                <h3>{{ $product->name }}</h3>
                <p class="mt-2 mb-2">${{ $product->price }}</p>
                <a href="{{ route('product-details',['product' =>$product] ) }}" class="bg-sky-400 rounded-sm px-5 py-1">Details</a>
            </div>
           </div>
          @endforeach
        </div>
        {{ $products->links() }}
    </div>
  </section>
   </x-guest-layout>

