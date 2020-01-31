@extends('qawalb.layout')
@section('title','Home Page Qawalb')

@section('content')
    <!-- Main Body Area Start Here -->

    <!-- Main Banner 1 Area Start Here -->
    <div class="main-banner2-area">
        <div class="container">
            <div class="main-banner2-wrapper">
                <h1>Welcome To Qawalb Market Place!</h1>
                <p>Premium Html, Css Themes, Web Templates and Many More ...</p>
                <div class="banner-search-area input-group">
                    <input class="form-control" placeholder="Search Your Keywords . . ." type="text">
                    <span class="input-group-addon">
                                <button type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Banner 1 Area End Here -->

    <!-- Newest Products Area Start Here -->
    <div class="newest-products-area section-space-default">
        <div class="container">
            <h2 class="title-default">Let's Check Out Our Newest Release Prodcuts</h2></div>
        <div class="container" id="isotope-container">
            <div class="isotope-classes-tab isotop-box-btn">
                <a href="#" data-filter="*" class="current">All</a>
                <a href="#" data-filter=".wordpress">WordPress</a>
                <a href="#" data-filter=".html_css">Html Css</a>

            </div>
            <div class="row featuredContainer">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 joomla plugins wordpress">
                    <div class="single-item-grid">
                        <div class="item-img"><img src="img/product/4.jpg" alt="product" class="img-responsive">
                            <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt"
                                                                               aria-hidden="true"></i></div>
                        </div>
                        <div class="item-content">
                            <div class="item-info">
                                <h3><a href="#">Team Component Pro</a></h3> <span>Joomla Component</span>
                                <div class="price">free</div>
                            </div>
                            <div class="item-profile">
                                <div class="profile-title">
                                    <div class="img-wrapper"><img src="img/profile/1.jpg" alt="profile"
                                                                  class="img-responsive img-circle"></div>
                                    <span>PsdBosS</span></div>
                                <div class="profile-rating">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($templets as $templet)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 joomla plugins wordpress">
                        <div class="single-item-grid">
                            <div class="item-img"
                                 style="background-image: url('{{Storage::url($templet->templet_img)}}') ">
                                <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt"
                                                                                   aria-hidden="true"></i></div>
                            </div>
                            <div class="item-content">
                                <div class="item-info">
                                    <h3><a href="/{{$templet->id}}">{{$templet->templet_name}}</a></h3>
                                    <span>catagury</span>
                                    {{-- <span>{{$catagury}}</span> --}}
                                    <div class="price">free</div>
                                </div>
                                <div class="item-profile">
                                    <div class="profile-title">
                                        <div class="img-wrapper">
                                            <img src="img/profile/1.jpg" alt="profile"
                                                 class="img-responsive img-circle"></div>
                                                 <span>user name</span>
                                                 {{-- <span>{{$user_name}}</span> --}}
                                    </div>
                                    <div class="profile-rating">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>
    <!-- Newest Products Area End Here -->
    <!-- Why Choose Area Start Here -->
    <div class="why-choose-area bg-primaryText section-space-default">
        <div class="container">
            <h2 class="title-textPrimary">Why You Choose Qawalb Market Place?</h2></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="why-choose-box"><a href="#"><i class="fa fa-gift" aria-hidden="true"></i></a>
                        <h3><a href="#">Easily Buy & Sell </a></h3>
                        <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standaum.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="why-choose-box"><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                        <h3><a href="#">Quality Products</a></h3>
                        <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standaum.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="why-choose-box"><a href="#"><i class="fa fa-lock" aria-hidden="true"></i></a>
                        <h3><a href="#">100% Secure Payment</a></h3>
                        <p>Dorem Ipsum is simply dummy text of the pring and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standaum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Area End Here -->
    <!-- Money Back Area Start Here -->
    <div class="money-back-area">
        <div class="container">
            <div class="money-back">
                <div class="money-back-img"><img src="img/banner/moneyback.png" alt="moneyback"
                                                 class="img-responsive">
                </div>
                <div class="money-back-content">
                    <h3><span>30 Days</span> Money Back Guarantee</h3></div>
            </div>
        </div>
    </div>
    <!--  Money Back Area End Here -->



    <!-- Main Body Area End Here -->



@endsection
