@extends('qawalb.layout')
@section('title','Home Page Qawalb')

@section('content')
    <!-- Main Banner 1 Area Start Here -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="inner-banner-wrapper">
                <h1>{{$templet->templet_name}}</h1>
                <p>Premium WordPress Themes, Web Templates and Many More ...</p>

            </div>
        </div>
    </div>
    <!-- Main Banner 1 Area End Here -->
    <!-- Inner Page Banner Area Start Here -->
    <div class="pagination-area bg-secondary">
        <div class="container">
            <div class="pagination-wrapper">
                <ul>
                    <li><a href="/">Home</a><span> -</span></li>
                    <li>{{$templet->templet_name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Product Details Page Start Here -->
    <div class="product-details-page bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="inner-page-main-body">
                        <div class="single-banner">
                            <img src="{{Storage::url($templet->templet_img)}}" alt="product" class="img-responsive">
                        </div>
                        <p class="para-inner-default">
                            {{$templet->description}}

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="fox-sidebar">
                        <div class="sidebar-item">
                            <div class="sidebar-item-inner">
                                <h3 class="sidebar-item-title">Product Price</h3>
                                <ul class="sidebar-product-price">
                                    <li class="free_price_brodact" >free</li>
                                    <li>
                                        <form id="personal-info-form">
                                            <div class="custom-select">

                                            </div>
                                        </form>
                                    </li>
                                </ul>
                                <ul class="sidebar-product-btn">

                                    <li><a href="#" class="add-to-favourites-btn" id="favourites-button"><i
                                                class="fa fa-eye" aria-hidden="true"></i>Live View</a></li>
                                    <li><a href="{{$templet->templet_file}}" class="buy-now-btn" id="buy-button" download="download">
                                            <i class="fa fa-download"></i>
                                            Download
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <div class="sidebar-item-inner">
                                <h3 class="sidebar-item-title">Product Information</h3>
                                <ul class="sidebar-product-info">
                                    {{-- <li>Author :<span>{{$user_name}}</span></li> --}}
                                    <li>Released On:<span>{{$templet->templet_creating_time}}</span></li>
                                    <li>last Update:<span>{{$templet->updated_at}}</span></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Page End Here -->
@endsection
