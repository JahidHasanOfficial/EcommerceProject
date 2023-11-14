
<x-guest-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Product Details</title>
</head>
<body>
    <div class="container mx-auto p-8 mt-6">
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="max-w-md mx-auto zoomless">
                <img src="{{ asset('image/' .$product->image) }}" alt="Product Image" height="100" class="w-full h-80">
            </div>
            <div>
                <h1 class="text-3xl font-semibold">{{ $product->name }}</h1>
                <div class="flex justify-between">
                    <div class="text-sky-400">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>(Reviews)</p>
                    </div>
                    <div class="bg-sky-400 px-1 rounded-2xl">
                        <p>In stock</p>
                    </div>
                </div>


                <div class="bg-sky-400 px-1 inline-block rounded-2xl">
                    <p>Regular</p>
                </div>
                <hr class="mt-3">
                <div>
                    <p class="mt-4">price: ${{$product->price}}</p>
                    <p>Brand: Lenovo</p>
                    <div class="flex">
                        <div class="pt-3 pr-2">
                            <p>Quantity:</p>
                        </div>
                       <div >
                        <form action="">
                            <input type="number" id="quantity" class="w-28 mb-5 border border-gray-400 rounded-md mt-2">

                        </form>
                       </div>
                       <div class="pt-3 pl-1">
                        <p>(Available)</p>
                       </div>
                    </div>
                    <hr>
                   <div class="py-6">
                    <button class="bg-sky-400 text-white px-4 py-2 shadow-sm rounded-md"><i class="fa-solid fa-cart-plus"></i>Add to Cart</button>
                    <button class="bg-sky-400 text-white px-4 py-2 shadow-sm rounded-md"><i class="fa-brands fa-buysellads"></i>Buy Now</button>
                   </div>

                   <div class="">
                    <ul class="flex py-8">
                        <li><p>Share:</p></li>
                        <li>
                            <a class="px-3 ml-2 rounded-md py-1 text-xl text-white bg-sky-400" href="#"><i class="fa-regular fa-envelope"></i></a>
                        </li>
                        <li>
                            <a class="px-3 ml-2 rounded-md py-1 text-xl text-white bg-sky-400" href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="px-3 ml-2 rounded-md py-1 text-xl text-white bg-sky-400" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="px-3 ml-2 rounded-md py-1 text-xl text-white bg-sky-400" href="$"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li class="grap-2">
                            <a class="px-3 py-1 ml-2 rounded-md text-xl text-white bg-sky-400" href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                        </li>
                    </ul>
                   </div>
                </div>
            </div>


           <div>
            <div class="shadow-xl rounded-lg bg-gray-200 hover:bg-sky-100 p-6">
                <h2 class=" text-2xl mb-6">Delivery Option</h2>
                 <p class="text-sm"><i class="fa-solid fa-location-dot pr-6"></i>Your are not login</p>
                 <p class="pb-7 text-sm pl-8">(You may change in order time)</p>
                <h5 class="py-3"><i class="fa-solid fa-handshake-angle pr-6"></i>Home Delivary</h5>
                <h5 class="pb-3"><i class="fa-regular fa-money-bill-1 pr-6"></i>Cash Delivery</h5>
                <h2>Return & Warranty</h2>
                <p><i class="fa-solid fa-shield-halved pr-6"></i>No warrenty policy</p>
                <p><i class="fa-solid fa-screwdriver-wrench pr-6"></i>no return policy</p>
            </div>
           </div>

        </div>
<hr>
        <div class="shadow-2xl">
            <nav class="">
                <div class="container mx-auto flex justify-between items-center text-black">
                    <ul class="flex space-x-4 p-8">
                        <li><a href="{{ $product->description }}">Description</a></li>
                        <li><a href="#">Products</a></li>

                    </ul>
                </div>
            </nav>
            <hr>
        </div>
    </div>
</body>
</html>

  </x-guest-layout>

