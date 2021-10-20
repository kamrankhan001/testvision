@extends('layout.layout')
@section('title', 'home')

@section('home')
    
    <header class="my-1">
        <div style="background-image:url('{{asset('images/hero/hero.jpg')}}')" class="bg-cover h-screen">
            <div class="absolute right-0 left-0 my-40">
                <h1 class="text-5xl text-yellow-500 font-bold my-5 mx-auto line">Welcome to Vision Marketing & Productions</h1>
                <p class="text-4xl text-white w-96 mx-auto">We have more than 17 years of experience</p>
                <form action="" method="get" class="my-9 w-96 mx-auto">
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" class="block w-full p-2 h-10 rounded outline-none">
                    <input type="submit" value="See In Action" class="w-full bg-yellow-500 p-2 my-3 cursor-pointer hover:bg-black hover:opacity-50 hover:text-white rounded">
                </form>
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

    <section class="px-5 py-10 white my-12">

        <div class="flex md:flex-row flex-col justify-center items-end md:space-x-4 container md:mx-auto space-y-4">

            <div class=" bg-gray-100 rounded md:w-1/3">

                <div class="px-3">
                    <div class="inline-block text-2xl text-yellow-500">/</div>
                    <div class="inline-block text-2xl text-yellow-500">/</div>
                </div>

                <div class="p-3">
                    <p>
                        I never knew branding could turn out that easy. Team helped me out by providing several options related to my work. ​ – Umar Shehzad
                    </p>
                </div>

                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>

            </div>

            <div class=" bg-gray-100 rounded md:w-1/3">

                <div class="px-3">
                    <div class="inline-block text-2xl text-yellow-500">/</div>
                    <div class="inline-block text-2xl text-yellow-500">/</div>
                </div>

                <div class="p-3">
                    <p>
                        I never knew branding could turn out that easy. Team helped me out by providing several options related to my work. ​ – Umar Shehzad
                    </p>
                </div>

                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
            </div>

            <div class=" bg-gray-100 rounded md:w-1/3">

                <div class="px-3">
                    <div class="inline-block text-2xl text-yellow-500">/</div>
                    <div class="inline-block text-2xl text-yellow-500">/</div>
                </div>

                <div class="p-3">
                    <p>
                        I never knew branding could turn out that easy. Team helped me out by providing several options related to my work. ​ – Umar Shehzad
                    </p>
                </div>

                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
            </div>


        </div>

    </section>

    <section class="bg-gray-100 mb-7">

        <h1 class="text-4xl w-1/2 mx-auto text-center py-10">Made to tackle your organization’s digital needs end-to-end</h1>

        <div class="p-10 container md:mx-auto flex md:flex-row flex-col md:space-x-7 space-y-7 items-end">

            <div>
                <div>
                    <img src="https://picsum.photos/id/80/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

            <div>
                <div>
                    <img src="https://picsum.photos/id/81/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

            <div>
                <div>
                    <img src="https://picsum.photos/id/82/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

            <div>
                <div>
                    <img src="https://picsum.photos/id/83/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

        </div>

        <div class="p-10 container md:mx-auto flex md:flex-row flex-col md:space-x-7 space-y-7 items-end">

            <div>
                <div>
                    <img src="https://picsum.photos/id/85/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

            <div>
                <div>
                    <img src="https://picsum.photos/id/186/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

            <div>
                <div>
                    <img src="https://picsum.photos/id/156/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

            <div>
                <div>
                    <img src="https://picsum.photos/id/87/1200/700" alt="card" class="object-cover md:h-72 md:w-72">
                </div>
                <div>
                    <a href="#" class="bg-gray-900 hover:gray-bg-800 text-gray-300 p-2 block">Graphic Design</a>
                </div>
            </div>

        </div>

        <h1 class="text-2xl w-1/2 mx-auto text-center py-10">To Know More About Our Services and Quality That We Provide</h1>

        <div class="md:w-1/2 mx-auto pb-6">
            <button class="p-2 block bg-yellow-500 mx-auto w-1/2 rounded text-2xl">Check Our Company Profile</button>
        </div>

    </section>

    <section class="bg-white my-10 pb-5">

        <h1 class="text-black text-center py-5 text-4xl">YOUR BRAND. YOUR STORY.</h1>

        <div class="flex flex-col md:flex-row justify-between container md:mx-auto md:space-x-7 space-y-3">

            <div>
                <img src="https://picsum.photos/id/80/1200/700" alt="card" class="object-cover">
            </div>

            <div>
               
                <div class="flex justify-between space-x-3 my-7">
                    <div>
                        image
                    </div>
                    <p>
                        We look to communicate with you to understand your brand, present team structure, existing expertise, and ongoing layout designs
                    </p>
                </div>

                <div class="flex justify-between space-x-3 my-7">
                    <div>
                        image
                    </div>
                    <p>
                        We look to communicate with you to understand your brand, present team structure, existing expertise, and ongoing layout designs
                    </p>
                </div>

                <div class="flex justify-between space-x-3 my-7">
                    <div>
                        image
                    </div>
                    <p>
                        We look to communicate with you to understand your brand, present team structure, existing expertise, and ongoing layout designs
                    </p>
                </div>

                <div class="flex justify-between space-x-3 my-7">
                    <div>
                        image
                    </div>
                    <p>
                        We look to communicate with you to understand your brand, present team structure, existing expertise, and ongoing layout designs
                    </p>
                </div>

                <div class="my-7">
                    <button class="bg-yellow-500 hover:bg-black hover:text-white p-3 rounded">Fix Call Meeting</button>
                </div>

            </div>

    </section>

    <section>
        <div style="background-image:url('{{asset('images/parallex/parallex.jpg')}}');" class="bg-cover bg-fixed h-screen">
            <div class="absolute right-0 left-0 my-8">
                <h1 class="text-3xl text-gray-100 text-center my-5 mx-auto">YOUR GO-TO STOP FOR DIGITAL SERVICES</h1>
                <h1 class="text-3xl text-gray-100 text-center my-5 mx-auto">Become the part of more than 1100+ companies which are growing without stop
                    Email
                    </h1>
                <form action="" method="get" class="my-12 w-96 mx-auto">
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" class="block w-full p-2 h-10 rounded outline-none">
                    <input type="submit" value="See In Action" class="font-bold w-full bg-yellow-500 p-2 my-3 cursor-pointer hover:bg-black hover:opacity-50 hover:text-white rounded">
                </form>

                <div class="container md:mx-auto flex md:flex-row flex-col md:space-x-7 items-end justify-center text-gray-100 my-24">

                    <div class="flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="inline">
                            <p class="text-xl">
                                Flexible and energetic
                            </p>
                            <p class="text-xl">
                                professional team
                            </p>
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="inline">
                            <p class="text-xl">
                                Flexible and energetic
                            </p>
                            <p class="text-xl">
                                professional team
                            </p>
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div class="inline">
                            <p class="text-xl">
                                Flexible and energetic
                            </p>
                            <p class="text-xl">
                                professional team
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 p-10">

        <h1 class="text-black text-4xl my-6 text-center">Creative Minds with Creative Ideas</h1>

        <div class="flex flex-col md:flex-row justify-center md:space-x-7 space-y-3 my-10">

            <div class="md:w-1/3 rounded">

                <div class="my-2">
                    <img src="https://picsum.photos/id/90/1200/700" alt="card" class="object-cover">
                </div>

                <div class="bg-white p-6">
                    <div class="my-2">
                        <h1 class="text-xl">Social Media Design Tips to Increase Engagement</h1>
                    </div>
    
                    <div class="my-2">
                        <a href="" class="text-red-600 hover:underline">Design</a>
                        <a href="" class="text-red-600 hover:underline">Social Media</a>
                    </div>
                        
                    <div class="my-2">
                        <p>
                            What is Social Media Design? Social media design encompasses any graphics associated with your social media accounts. From your social media’s banner image...
                        </p>
                    </div>
                </div>

            </div>

            <div class="md:w-1/3 rounded">

                <div class="my-2">
                    <img src="https://picsum.photos/id/91/1200/700" alt="card" class="object-cover">
                </div>

                <div class="bg-white p-6">
                    <div class="my-2">
                        <h1 class="text-xl">Social Media Design Tips to Increase Engagement</h1>
                    </div>
    
                    <div class="my-2">
                        <a href="" class="text-red-600 hover:underline">Design</a>
                        <a href="" class="text-red-600 hover:underline">Social Media</a>
                    </div>
                        
                    <div class="my-2">
                        <p>
                            What is Social Media Design? Social media design encompasses any graphics associated with your social media accounts. From your social media’s banner image...
                        </p>
                    </div>
                </div>

            </div>

            <div class="md:w-1/3 rounded">

                <div class="my-2">
                    <img src="https://picsum.photos/id/92/1200/700" alt="card" class="object-cover">
                </div>

                <div class="bg-white p-6">
                    <div class="my-2">
                        <h1 class="text-xl">Social Media Design Tips to Increase Engagement</h1>
                    </div>
    
                    <div class="my-2">
                        <a href="" class="text-red-600 hover:underline">Design</a>
                        <a href="" class="text-red-600 hover:underline">Social Media</a>
                    </div>
                        
                    <div class="my-2">
                        <p>
                            What is Social Media Design? Social media design encompasses any graphics associated with your social media accounts. From your social media’s banner image...
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap md:text-left text-center order-first">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
              <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
                <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                  <label for="footer-field" class="leading-7 text-sm text-gray-600">Placeholder</label>
                  <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
              </div>
              <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
                <br class="lg:block hidden">waistcoat green juice
              </p>
            </div>
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <img src="{{asset('images/logo/logo.png')}}" alt="logo" class="w-8 h-8">
              <span class="ml-3 text-xl">Vision Marketing & Productions</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 Tailblocks —
              <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </footer>


@endsection