@extends('layout.layout')
@section('title', 'Book a Call')

@section('contect')
<header class="my-1">
    <div style="background-image:url('{{asset('images/parallex/parallex.jpg')}}')" class="bg-cover h-screen ">
        <div class="absolute right-0 left-0 my-10">
           
            <div class="flex flex-col md:flex-row md:space-x-7 space-y-3 justify-center container md:mx-auto text-white items-start">
                
                <div>
                    <h1>Frictionless, delightful work starts here</h1>
                    <p>Book a consultation and discovery call to get a look at:</p>
                    <ul>
                        <li>How Creative Solutions & Co. works</li>
                        <li>How Creative Solutions & Co. works</li>
                        <li>How Creative Solutions & Co. works</li>
                        <li>How Creative Solutions & Co. works</li>
                        <li>How Creative Solutions & Co. works</li>
                    </ul>
                </div>

                <div class="bg-gray-900 p-6 md:w-1/2 bg-opacity-50 rounded">
                    <h1 class="text-4xl">Book a Free Consultation Call</h1>
                    <form action="" method="get" class="my-3">

                        <div class="my-3 flex space-x-3 items-start">
                            <input type="text" name="name" id="name" autocomplete="off" placeholder="Name" class="h-9 p-5 bg-black outline-none bg-opacity-50 border-2 border-white md:w-1/2">
                            <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" class="h-9 p-5 bg-black outline-none bg-opacity-50 border-2 border-white md:w-1/2">
                        </div>

                        <div class="my-3">
                            <input type="text" name="phone" id="phone" autocomplete="off" placeholder="Phone Number" class="w-full h-9 p-5 bg-black outline-none bg-opacity-50 border-2 border-white">
                        </div>

                        <div class="my-3">
                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Message" class="w-full p-5 bg-black outline-none bg-opacity-50 border-2 border-white"></textarea>
                        </div>

                        <div class="my-3">
                            <input type="submit" value="Submit" class="bg-yellow-500 p-2 rounded text-black cursor-pointer">
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</header>

<div class="bg-gray-100 pt-10">
    <section class="flex flex-wrap flex-col md:flex-row justify-center container md:mx-auto md:space-x-4 space-y-7">

        <img src="{{asset('images/brands/shopify_logo.png')}}" alt="shopify" class="w-56 h-24 filter grayscale">
        <img src="{{asset('images/brands/google_ads-removebg-preview.png')}}" alt="google" class="w-52 h-24 filter grayscale">
        <img src="{{asset('images/brands/facebook-logo_1_-removebg-preview.png')}}" alt="facebook" class="w-52 h-24 filter grayscale">
        <img src="{{asset('images/brands/insta-logo.png')}}" alt="insta" class="w-52 h-24 filter grayscale">
        
    </section>

    <section class="flex flex-wrap flex-col md:flex-row justify-center container md:mx-auto my-3 md:space-x-7 space-y-3">

        
        <img src="{{asset('images/brands/WordPress-Logo-1536x505.png')}}" alt="wordpress" class="w-52 h-20 filter grayscale">
        <img src="{{asset('images/brands/amazon_PNG61.png')}}" alt="amazon" class="w-52 h-20 filter grayscale">
        
    </section>
</div>

<section class="bg-white p-3">

    <div class="flex md:flex-row flex-col container md:mx-auto justify-between space-x-10">

        <div class="md:w-1/2 p-3">
            <h1 class="text-black text-6xl my-6">Creative Minds with Creative Ideas</h1>
            <p class="text-justify text-lg font-light leading-relaxed my-3">
                Here in Creative Solutions & Co (PVT) LTD, our prime mission is to matches up to the needs and requirements of your business. We will be the first step to your success.
            </p>
            <p class="text-justify text-lg font-light leading-relaxed my-6"> 
                Globally, we have tailored to meet 1100+ corporate business requirements with rave reviews. We give high priority to each client in attaining maximum results.
            </p>
            <button class="bg-yellow-500 p-3 rounded hover:bg-yellow-400 font-bold mt-10">Why Choose Us</button>
        </div>

        <div class="md:w-1/2 p-3">
            <img src="https://picsum.photos/id/100/1200/700" alt="section-pic" class="object-cover">
        </div>

    </div>

</section>
@endsection