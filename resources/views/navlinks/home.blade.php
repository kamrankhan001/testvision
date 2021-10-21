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



@endsection