<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased flex flex-col h-screen">
        <header>
            @include('layouts.navigation')
        </header>

        <section>
            <div class="container">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-vector/flat-horizontal-sale-banner-template-with-photo_23-2149000923.jpg?w=996&t=st=1698266144~exp=1698266744~hmac=8168d6b6bfd89a22dc78ea951eb3918cb192b3fe81cf0057a8f2b35e0a650edb" class="" alt="..." style="height: 500px; width: 100%;">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-psd/online-shopping-concept-banner-template_23-2148559464.jpg?w=826&t=st=1698266758~exp=1698267358~hmac=2d15d1b414e6877fb5d48cf79878c2ef3b7e94e1c2f601f8ff065b5e96cc0ffd" class="" alt="..." style="height: 500px; width: 100%;">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-vector/online-shopping-banner-template_23-2148764706.jpg?w=740&t=st=1698266820~exp=1698267420~hmac=4165983ccf9771b95a1045ed09b06562923f6e0554e5353995f7b002001cef6b" class="" alt="..." style="height: 500px; width: 100%;">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>


        <main class="grow">
            {{ $slot }}
        </main>

<!-- =========================Contact section start===========================  -->
        <div class="container mx-auto py-8" id>
            <h2 class="text-4xl text-center font-semibold mb-4">Contact Us</h2>              
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <!-- Contact Details Section -->
             
              <div class="bg-white p-4 rounded shadow-md">
                @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <form action="{{ url('/contact/store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter your name" required>
                          </div>
                          <div class="mb-4">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                            <input type="number" id="phone" name="phone" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter your phone" required>
                          </div>
                       </div>
                    <div class="mb-4">
                      <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                      <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter your email" required>
                    </div>
                      <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                        <textarea name="address" id=""  rows="2" class="w-full border-gray-300 p-2 rounded"placeholder="Enter your address" required ></textarea>
                      </div>
                      <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <textarea name="message" id=""  rows="3" class="w-full border-gray-300 p-2 rounded" placeholder="Enter your message" required></textarea>
                      </div>
                
                    <div class="mb-6">
                      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </div>
                  </form>                
              </div>        
              <!-- Location Map Section -->
              <div class="bg-white p-4 rounded shadow-md">             
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1456907382235!2d90.35838317413737!3d23.777825787725074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13c78093063%3A0x9e9b2648d118dc05!2sKalyanpur%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1699904164155!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>                       
            </div>
          </div>
           <!-- =========================Contact section ends===========================  -->

           <!-- =========================Footer section start===========================  -->
         <footer class="">
            <section id="footers" class=" py-5 text-gray-800 bg-sky-400 text-center max-w-container max-auto w-full">
                <div class="container mx-auto">
                    <div class=" gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
 <!-- =========================Column-01===========================  -->
                    <div class="">
                        <h2 class="text-xl font-bold pb-3">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">TV, Audio</a></li>
                            <li><a href="#">SmartPhone</a></li>
                            <li><a href="#">Washing Machines</a></li>
                            <li><a href="#">Refrigerators</a></li>
                        </ul>
                    </div>
 <!-- =========================Column-02===========================  -->
            <div class="m-auto">
                <h2 class="text-xl font-bold pb-3">Quick Links</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Faqs</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
 <!-- =========================Column-03===========================  -->
             <div class="m-auto">
                <h2 class="text-xl font-bold pb-3">Get in Touch</h2>
                <ul>
                    <li>
                        <i class="fas fa-map-marker"></i> Mkc, 123 Sebastian, USA.</li>
                    <li>
                        <i class="fas fa-mobile"></i><a href="tel:+12 23456790"> 12 2345 6790</a> </li>
                    <li>
                        <i class="fas fa-phone"></i><a href="tel:+11 36721890">+11 3672 1890</a> </li>
                    <li>
                        <i class="fa-solid fa-envelope-open"></i> <a href="mailto:example@mail.com"> mail 1@example.com</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i><a href="mailto:example@mail.com"> mail 2@example.com</a>
                    </li>
                </ul>
            </div>
 <!-- =new========================Column-03===========================  -->
             <div class="">
                <h2 class="text-xl font-bold pb-3">My Account</h2>
                <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Recommended</a></li>
                    <li><a href="#">Payments</a></li>
                </ul>
            </div>
              </section>
              <div class="bg-sky-500 text-gray-800 text-center p-3">
                <p>&Copf; 2023. Jahid hasan | All Rights Reserved </p>
            </div>
        </footer>
        <!-- =========================Footer section ends===========================  -->
    </body>
</html>
