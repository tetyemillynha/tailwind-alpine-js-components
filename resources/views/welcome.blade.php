@extends('template.base')

@section('content')

    <header class="header bg-white border-b border-indigo-100 sticky top-0 z-10">
        <div class="xl:container lg:container md:container sm:container container">
            @include('components.navbar-apjs', [
                'menu' => [
                    'link_class' => 'text-indigo-800 hover:text-indigo-900 uppercase',
                    'dropdown' => [
                        'class'      => 'bg-indigo-600',
                        'link_class' => 'text-white hover:text-indigo-200'
                    ] 
                ]
            ])
        </div>
    </header>

    <section class="page-content">
        <div class="container">
            <div class="page-content_banner my-4">
                @include('components.carousel-apjs',[
                    'id' => 'carouselNovo'
                ])
            </div>

            <div x-data="{ open: false }">
                <button class="bg-gray-600 hover:bg-gray-800 rounded-md p-3 text-white inline-flex justify-center focus:outline-none my-3" @click="open = true">Open Modal</button>
                @include('components.modal-apjs')
            </div>

            <div class="page-content_gallery my-4">
                @include('components.gallery-apjs')
            </div>

            <div class="page-content_slider-carousel my-4">
                @include('components.slider-carousel-apjs')
            </div>

            <div class="page-content_pane my-4">
                @include('components.tabs-apjs')
            </div>

            <div class="page-content_collapse my-4">
                @include('components.collapse-apjs')
            </div>

            <div class="page-content_accordion my-4">
                @include('components.accordion-apjs')
            </div>
        </div>
    </div>


    {{--<div class="section-tabs bg-gray-300 py-4">
        <div class="container">
            <h2 class="font-bold text-3xl mb-2 text-blue-900">Só Musicão</h2>
            @include('components.tabs')
        </div>
    </div> --}}

    {{-- @include('components.carousel',[
      'id' => 'carouselNovo'
    ]) --}}

    {{-- <div class="flex flex-col h-screen">
        <div class="my-auto relative">
            <div class="shadow-lg bg-gradient-to-br from-indigo-500 to-purple-600 h-full rounded-2xl absolute transform -rotate-2 z-30" style="left: -15px; top: 25px; width: 90%;"></div>
            <div class="shadow-lg bg-purple-800 h-full rounded-2xl absolute transform rotate-1" style="left: -7px; top: 19px; width: 91%;"></div>
            <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-col sm:flex-col items-center relative z-40">
                <div class="w-2/5 xl:w-2/5 lg:w-2/5 md:w-full sm:w-full px-5">
                    <img class="w-full h-auto rounded-2xl shadow-lg z-20" src="/images/minha-foto-2.jpeg" alt="Minha Foto">
                </div
                <div class="w-3/5 xl:w-3/5 lg:w-3/5 md:w-full sm:w-full px-4"> 
                    <div class="w-full">
                        <h1 class="text-7xl text-white font-arvo-bold leading-snug">
                            <span class="text-2xl text-white font-arvo-regular bg-indigo-800 p-2 rounded">< Desenvolvedora Front-End /></span></br>
                            Olá, meu </br> nome é Stefhany.
                        </h1>
                    </div>
                </div>
                
            </div>
        </div>
    </div> --}}
@endsection
