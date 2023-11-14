<x-guest-layout>
    <section id="categories" class="m-5">
        <div class="container mx-auto">
            <h1 class="text-center text-lg font-bold m-4">Feacture Categories</h1>
            <div class="gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
              @foreach ($categories as $category)
              <div class="shadow-xl hover:bg-yellow-400 text-center bg-sky-300 rounded-xl py-6">
               <span class=""><i class="fa-solid fa-laptop text-6xl"></i></span>
                <div class="p-4">
                   <a href="{{ route('category.products', ['category' => $category]) }}" class="
                    fs-1">{{ $category->name }}</a>
                </div>
               </div>
              @endforeach
            </div>
        </div>
    </section>
  </x-guest-layout>
