@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    About Us
                </h1>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="/images/about.jpg" width="700" alt="About Us">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Our Mission
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Our Expertise
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Our Team
        </span>

        <h2 class="text-4xl font-bold py-10">
            Meet the Team
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Team Member 1
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="Team Member 1">
        </div>
    </div>
@endsection
