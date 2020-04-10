@extends('layouts.app')

@section('content')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header shop-detail-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-5 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Build Your</h2>
                    <h2 class="font-bold">Best Shopping Page</h2>
                    <h2 class="font-xlight">In Market</h2>
                    <h3 class="font-light pt-2">The Best Multipurpose Parallax Template</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Shop Detail</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item hover-light">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!--Shop details-->
<section id="shop" class="padding">
    <div class="container">
        <div class="row">
            <!-- NOTE: The Id of both of below tags should be same as below-->
            <!-- shop-dual-carousel -->
            <div class="col-lg-5 col-md-5 col-sm-12 wow fadeInLeft heading-space" id="shop-dual-carousel" data-wow-delay="20ms" data-wow-duration="1100ms">
                <!-- syncCarousel -->
                <div class="owl-carousel carousel-shop-detail owl-theme" id="syncCarousel">
                    <!--Item 1-->
                    <div class="item">
                        <a href="/images/shop-1.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-1.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 2-->
                    <div class="item">
                        <a href="/images/shop-2.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-2.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 3-->
                    <div class="item">
                        <a href="/images/shop-3.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-3.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 4-->
                    <div class="item">
                        <a href="/images/shop-4.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-4.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 5-->
                    <div class="item">
                        <a href="/images/shop-5.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-5.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 6-->
                    <div class="item">
                        <a href="/images/shop-6.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-6.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 7-->
                    <div class="item">
                        <a href="/images/shop-7.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-7.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 8-->
                    <div class="item">
                        <a href="/images/shop-8.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-8.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 9-->
                    <div class="item">
                        <a href="/images/shop-9.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-9.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 10-->
                    <div class="item">
                        <a href="/images/shop-10.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-10.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 11-->
                    <div class="item">
                        <a href="/images/shop-11.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-11.jpg" alt="Latest News">
                        </a>
                    </div>
                    <!--Item 12-->
                    <div class="item">
                        <a href="/images/shop-12.jpg" data-fancybox="gallery" title="Zoom In">
                            <img src="/images/shop-12.jpg" alt="Latest News">
                        </a>
                    </div>
                </div>
                <!-- The second carousel will be created dynamically using JS Based upon the items added in upper carousel -->
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 shop_info heading-space wow fadeInRight" data-wow-delay="20ms" data-wow-duration="1100ms">
                <!--Shop detail-->
                <h2 class="heading darkcolor font-light2 bottom15"><span>Classic</span> Shoes <span class="divider-left"></span></h2>
                <span class="text-warning heading">
                        <a href="#." class="hover-underline" title="4.4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>&nbsp;
                        <span class="text-grey"><span class="font-bold">4.4 </span>(21)</span>
                        </a>
                        </span>
                <h3 class="py-3">$230.00</h3>
                <p class=" bottom10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                <p class="bottom15">Lorem Ipsum is simply dummy text of the printing and typesetting industry a book. Lorem Ipsum is simply dummy text of the printing and typesetting industry a book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul style="list-style: disc;" class="pl-3">
                            <li>
                                <p class="my-1"><span>Color : </span><span class="font-light">Black.</span></p>
                            </li>
                            <li>
                                <p class="my-1"><span>Available : </span><span class="font-light">In Stock.</span></p>
                            </li>
                            <li>
                                <p class="my-1"><span>Category : </span><span class="font-light">Shoes.</span> </p>
                            </li>
                            <li>
                                <p class="my-1"><span>Shipping Area : </span><span class="font-light">All over the World.</span> </p>
                            </li>
                            <li>
                                <p class="mt-1 bottom10"><span>Shipping Fee : </span><span class="font-light">Free</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mt-1 mb-4">
                        <div class="quote">
                            <label for="quantity" class="d-none"></label>
                            <input type="number" placeholder="Quantity" min="1" max="100" value="1" class="quote pl-4" id="quantity">
                            <a href="javascript:void(0)" class="btn-common gradient-btn">Add to Cart <i class="fa fa-cart-plus"></i></a>
                        </div>
                        <div class="quote ml-0 ml-sm-2 mt-3">
                            <a href="#." class="btn-common btn-dark">Compare With</a>
                        </div>
                    </div>
                </div>
                <div class="share-on-it">
                    <ul class="social-icons black">
                        <li><span class="pr-2">Share At: </span></li>
                        <li><a class="facebook" href="javascript:void(0)" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="javascript:void(0)" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="insta" href="javascript:void(0)" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="whatsapp" href="javascript:void(0)" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="javascript:void(0)" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row top40">
            <!--Shop detail tabs-->
            <div class="col-md-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="tab-to-accordion heading_space">
                    <ul class="tabset-list">
                        <li><a href="#tab1">Description</a></li>
                        <li class="active"><a href="#tab2">Detail</a></li>
                        <li><a href="#tab3">Review</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab1">
                            <p class="pb-3">If you are a small business and you are interested in small rebranding then this is a perfect plan for you,
                                having Five years experience in Blogging, photographing, Disgning and love to cycling,Writting,Singing and Traveling around the world
                            </p>
                        </div>
                        <div id="tab2">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Part Number</td>
                                    <td>60-MCTE</td>
                                    <td>some other info</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Product Dimensions</td>
                                    <td> 92.8 inches</td>
                                    <td>some other info</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Item Weight</td>
                                    <td>69 pounds</td>
                                    <td>some other info</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Item Color</td>
                                    <td>Black, Red, Blue</td>
                                    <td>some other info</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab3">
                            <div class="profile_bg bottom30">
                                <div class="profile">
                                    <div class="p_pic"><img src="/images/profile4.jpg" alt="instructure"></div>
                                    <div class="profile_text">
                                        <h5><strong>JOHN PARKER</strong> - <span>Awesome Quality</span></h5>
                                        <ul class="comment">
                                            <li><a href="javascript:void(0)" class="text-warning-hvr"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-alt"></i></a></li>
                                        </ul>
                                        <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="profile_bg bottom30">
                                <div class="profile">
                                    <div class="p_pic"><img src="/images/profile3.jpg" alt="instructure"></div>
                                    <div class="profile_text">
                                        <h5><strong>JANE MILLER</strong> - <span>Awesome Quality</span></h5>
                                        <ul class="comment">
                                            <li><a href="javascript:void(0)" class="text-warning-hvr"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-alt"></i></a></li>
                                        </ul>
                                        <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="add-review">
                                <h3 class="heading darkcolor font-light2 bottom25">Add Your Review<span class="divider-left"></span></h3>
                                <h5 class="pb-1">Your Rating : <span id="ratingText" class="text-warning">Please Select</span></h5>
                                <ul class="comment bottom15 top10">
                                    <li><a href="javascript:void(0)" id="rattingIcon">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </a>
                                    </li>
                                </ul>
                                <form class="findus" id="contact-form" onSubmit="return false">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="result1"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="name" class="d-none"></label>
                                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="email1" class="d-none"></label>
                                                <input type="email" class="form-control" placeholder="Email *" name="email" id="email1" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 mb-4">
                                            <label for="message" class="d-none"></label>
                                            <textarea placeholder="Comment *" name="message" id="message"></textarea>
                                            <button class="button gradient-btn" id="btn_submit">Add Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 wow fadeInDown text-center text-md-left">
                <h3 class="heading darkcolor font-light heading_space mt-md-0 mt-3"><span>Related</span> Products<span class="divider-left"></span></h3>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
                <div class="shopping-box top20">
                    <div class="image sale" data-sale="30">
                        <img src="/images/shop-1.jpg" alt="shop">
                        <div class="overlay center-block">
                            <a class="opens" href="shop-cart.html" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="shop-content text-center">
                        <h4 class="darkcolor"><a href="shop-detail.html">Classic Shoe</a></h4>
                        <p>We offer the most complete in the country</p>
                        <h4 class="price-product">$230.00</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="400ms">
                <div class="shopping-box top20">
                    <div class="image">
                        <img src="/images/shop-10.jpg" alt="shop">
                        <div class="overlay primary center-block">
                            <a class="opens" href="shop-cart.html" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="shop-content text-center">
                        <h4 class="darkcolor"><a href="shop-detail.html">Jogging Shoe</a></h4>
                        <p>We offer the most complete in the country</p>
                        <h4 class="price-product">$230.00</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="500ms">
                <div class="shopping-box top20">
                    <div class="image">
                        <img src="/images/shop-5.jpg" alt="shop">
                        <div class="overlay danger center-block">
                            <a class="opens" href="shop-cart.html" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="shop-content text-center">
                        <h4 class="darkcolor"><a href="shop-detail.html">Red Shoe</a></h4>
                        <p>We offer the most complete in the country</p>
                        <h4 class="price-product">$230.00</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="600ms">
                <div class="shopping-box top20">
                    <div class="image sale" data-sale="20">
                        <img src="/images/shop-2.jpg" alt="shop">
                        <div class="overlay danger center-block">
                            <a class="opens" href="shop-cart.html" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="shop-content text-center">
                        <h4 class="darkcolor"><a href="shop-detail.html">Sneaker Shoe</a></h4>
                        <p>We offer the most complete in the country</p>
                        <h4 class="price-product">$230.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Shop Deails-->

@endsection

@section('extra-js') 

@endsection