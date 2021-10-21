@extends('layout.layout')
@section('title', 'About')

@section('about')
    
    <section class="bg-gray-100">
        <div class="mt-15 container md:mx-auto">
            
            <div class="flex flex-col md:flex-row md:space-x-7 space-y-3 pt-10">

                <div class="md:w-1/2 p-10">
                    <h1 class="text-4xl font-bold">About Creative Solutions & Co (PVT) LTD.</h1>
                    <p class="text-lg font-light leading-relaxed my-10 text-justify">Creative Solution is a tech-enabled design company that delivers beautiful design at scale to scale-ups and enterprise teams — from everyday production work to large-scale strategic design solutions.</p>
                    <p class="text-lg font-light leading-relaxed my-10 text-justify">Companies that put technology at the center of their outlook will get success in the future. We at Creative Solutions & Co (PVT) LTD are a professional team having extensive experience in Business Development & Management.</p>
                </div>

                <div class="md:w-1/2 p-10">
                    <img src="https://picsum.photos/id/140/1200/700" alt="card" class="object-cover">
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="mt-15 container md:mx-auto">
            
            <div class="flex flex-col md:flex-row md:space-x-7 space-y-3 pt-10">

                <div class="md:w-1/2 p-10">
                    <img src="https://picsum.photos/id/141/1200/700" alt="card" class="object-cover">
                </div>

                <div class="md:w-1/2 p-10">
                    <h1 class="text-4xl font-bold text-center">Our Mission</h1>

                    <p class="text-lg font-light leading-relaxed my-5 font-bold">our mission is to meet the needs and requirements of your business. We have an increasing number of clients to skyrocket their business.</p>
                    <p class="text-lg font-light leading-relaxed my-5">Companies that put technology at the center of their outlook will get success in the future. We at Creative Solutions & Co (PVT) LTD are a professional team having extensive experience in Business Development & Management.</p>
                
                    <p class="text-lg font-light leading-relaxed my-5">Creative Solution is a tech-enabled design company that delivers beautiful design at scale to scale-ups and enterprise teams — from everyday production work to large-scale strategic design solutions.</p>
                    <p class="text-lg font-light leading-relaxed my-5">Companies that put technology at the center of their outlook will get success in the future. We at Creative Solutions & Co (PVT) LTD are a professional team having extensive experience in Business Development & Management.</p>
                
                </div>


            </div>

        </div>
    </section>

    <section class="bg-gray-100">

        <h1 class="text-3xl font-bold p-10">We are Featured in:</h1>

        <div class="flex flex-col md:flex-row p-10 my-5 space-y-4 md:space-x-7 pb-24">

            <div class="bg-white p-5 md:w-1/2 rounded">
                <img src="https://picsum.photos/id/141/1200/700" alt="card" class="object-cover w-28 h-28 mx-auto rounded">
                <p class="my-5 text-xl">Today, with the immense growth of freelance and e-commerce online market, everyone is turning .</p>
                <div class="text-center">
                    <button class="p-3 border-2 border-black hover:bg-black hover:text-white ">Read Full Article</button>
                </div>
            </div>

            <div class="bg-white p-5 md:w-1/2 rounded">
                <img src="https://picsum.photos/id/142/1200/700" alt="card" class="object-cover w-28 h-28 mx-auto rounded">
                <p class="my-5 text-xl">Today, with the immense growth of freelance and e-commerce online market, everyone is turning .</p>
                <div class="text-center">
                    <button class="p-3 border-2 border-black hover:bg-black hover:text-white ">Read Full Article</button>
                </div>
            </div>


        </div>

    </section>

    <section>

        <div class="p-8">

            <div class="p-2">
                <h1 class="text-3xl font-bold">Leadership team</h1>
                <p>The people who help the people who make things happen!</p>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-10 space-y-3 justify-center my-10">

                <div  class="flex flex-row space-x-7">

                    <div>
                        <img src="https://picsum.photos/id/144/1200/700" alt="card" class="object-cover w-28 h-28 mx-auto rounded">
                    </div>

                    <div>
                        <p class="text-black text-xl my-2">Abdul Hanan Channa</p>
                        <p class="text-black text-xl my-2">Co-Founder | Director</p>
                        <p class="my-1">abd.hanan.c@gmail.com</p>
                        <p class="my-1">tel:+92 303 2975527</p>
                    </div>

                </div>

                <div  class="flex flex-row space-x-7">

                    <div>
                        <img src="https://picsum.photos/id/143/1200/700" alt="card" class="object-cover w-28 h-28 mx-auto rounded">
                    </div>
                    
                    <div>
                        <p class="text-black text-xl my-2">Abdul Hanan Channa</p>
                        <p class="text-black text-xl my-2">Co-Founder | Director</p>
                        <p class="my-1">abd.hanan.c@gmail.com</p>
                        <p class="my-1">tel:+92 303 2975527</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection