@extends('qawalb.layout')
@section('title','Home Page Qawalb')

@section('content')
    <!-- Main Banner 1 Area Start Here -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="inner-banner-wrapper">
                <h1>Shop</h1>
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
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
            <!-- Product Page Grid Start Here -->

            <div class="category-product-list bg-secondary section-space-bottom">
                <div class="container">
                    <div class="inner-page-main-body">
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                                <div class="product-grid-view padding-narrow">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="single-item-grid">
                                                <div class="item-img">
                                                    <img src="img/product/43.jpg" alt="product" class="img-responsive">
                                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <h3><a href="#">Team Component Pro</a></h3>
                                                        <span>Joomla Component</span>
                                                        <div class="price">free</div>
                                                    </div>
                                                    <div class="item-profile">
                                                        <div class="profile-title">
                                                            <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                            <span>PsdBosS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($templets as $templet)
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-item-grid">
                                                    <div class="item-img">
                                                        <img src="img/product/43.jpg" alt="product" class="img-responsive">
                                                        <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="item-info">
                                                            <h3><a href="#">{{$templet->templet_name}}</a></h3>
                                                            <span>{{$templet->category_id}}</span>
                                                            <div class="price">free</div>
                                                        </div>
                                                        <div class="item-profile">
                                                            <div class="profile-title">
                                                                <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile" class="img-responsive img-circle"></div>
                                                                <span>{{$user_id}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <ul class="pagination-align-center">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Page Grid End Here -->
           @endsection
