@extends('layouts.layout-2')

@section('styles')
    <style>
        /* clearfix */
    
        .masonry-grid:after {
            content: '';
            display: block;
            clear: both;
        }
    
        /* ---- masonry-grid-item ---- */
    
        .masonry-grid-item {
            width: 160px;
            height: 120px;
            float: left;
            border-width: 2px !important;
            border-radius: 5px;
        }
    
        .masonry-grid-item--width2 {
            width: 320px;
        }
    
        .masonry-grid-item--width3 {
            width: 480px;
        }
    
        .masonry-grid-item--width4 {
            width: 640px;
        }
    
        .masonry-grid-item--height2 {
            height: 200px;
        }
    
        .masonry-grid-item--height3 {
            height: 260px;
        }
    
        .masonry-grid-item--height4 {
            height: 360px;
        }
    </style>
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/masonry/masonry.js') }}"></script>
    
    <script src="{{ mix('/js/misc_masonry.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Miscellaneous /</span> Masonry
    </h4>

    <hr class="container-m-nx border-light mt-0 mb-4">

    <div class="masonry-grid">
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--width2 masonry-grid-item--height2"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height3"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height2"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--width3"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height2"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--width2 masonry-grid-item--height3"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height2"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--width2 masonry-grid-item--height2"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--width2"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height2"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height3"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height2"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item"></div>
        <div class="bg-light border masonry-grid-item masonry-grid-item--height2"></div>
    </div>
@endsection