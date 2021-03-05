@extends('template.base')

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="page-content_banner my-4">
                @include('components.carousel-apjs',[
                    'id' => 'carouselNovo'
                ])
            </div>

            <div x-data="{ open: false }">
                <button class="bg-gray-600 hover:bg-gray-800 rounded-md p-3 text-white inline-flex justify-center focus:outline-none m-3" @click="open = true">Open Modal</button>
                @include('components.modal-apjs')
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
@endsection
