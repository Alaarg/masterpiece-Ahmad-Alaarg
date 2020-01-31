@extends('qawalb.layout')
@section('title','Home Page Qawalb')

@section('content')
    <!-- Main Banner 1 Area Start Here -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="inner-banner-wrapper">
                <h1>Create new Prodact</h1>
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
                    <li><a href="index.html">Home</a><span> -</span></li>
                    <li>Create new Prodact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Product Upload Page Start Here -->
    <div class="product-upload-page-area bg-secondary section-space-bottom">
        <div class="container">
            <h3 class="title-section">Upload Your item</h3>
            <form id="personal-info-form" method="post" action="/" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="product-upload-wrapper inner-page-padding">
                    <div class="form-group upload-info-item">
                        <div class="upload-info-title">
                            <h4>Product Name<span>*</span></h4>
                        </div>
                        <div class="upload-info-field">
                            <input class="profile-heading" placeholder="Enter your product name here ..." value=""
                                   name="templet_name" type="text">
                        </div>
                    </div>
                    <div class="form-group upload-info-item">
                        <div class="upload-info-title">
                            <h4>Product Description<span>*</span></h4>
                        </div>
                        <div class="upload-info-field">
                            <textarea class="profile-heading" name="description" rows="5"
                                      placeholder="&lt;h1&gt; Type your text  here &lt;/h1/&gt;"></textarea>
                        </div>
                    </div>
                    <div class="form-group upload-info-item">
                        <div class="upload-info-title">
                            <h4>Select Categories<span>*</span></h4>
                        </div>
                        <div class="upload-info-field">
                            <div class="custom-select">
                                <select id="categories" name="category_id" class='select2'>
                                    <option value="0" selected readonly="">Select</option>
                                    <option value="1">wordpress</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group upload-info-item">
                        <div class="upload-info-title">
                            <h4>Upload Templet File<span>*</span></h4>
                        </div>
                        <div class="upload-info-field">
                            <div class="file-upload-area">
                                <input type="file" name="templet_file"  accept=".zip , .rar">
                            </div>
                        </div>
                    </div>
                    <div class="form-group upload-info-item">
                        <div class="upload-info-title">
                            <h4>Upload Screenshots<span>*</span></h4>
                        </div>
                        <div class="upload-info-field">
                            <div class="file-upload-area">
                                <input type="file" name="templet_img"  accept="image/png, image/jpeg">
                               </div>
                        </div>
                    </div>
                    <div class="form-group upload-info-item">
                        <div class="upload-info-title">
                            <h4>Live View Link<span>*</span></h4>
                        </div>
                        <div class="upload-info-field">
                            <input class="profile-heading" placeholder="Example -> www.domain.com" value=""
                                   name="templet_liveview_link" type="text">
                        </div>
                    </div>
                </div>
                <div class="product-upload-wrapper inner-page-padding">

                    <button type="submit" class="update-btn">Upload File</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Product Upload Page End Here -->
    <!-- Footer Area Start Here -->
@endsection
