<?php include 'includes/header.php';?>
<div class="ticket-wrap credit-wrap">
<!-- Banner Section-1 Start Here -->
<section class="mainBanner inner-banner">
    <div class="container">
        <div class="credit-content">
            <p class="about-text1">Buy Ticket</p>
        </div>
        <div class="about-banner-image">
            <img src="assets/images/win-img.png" class="img-fluid">
        </div>
    </div>
    <img src="./assets//images/airplane.png" class="credit-plane img-fluid">
</section>
<!-- Credit Packages  -->
<section class="ticket-price-st">
    <div class="container">
        <div class="tkt-customrow">
            <div class="ticket-price-wrap">
                <!-- Swiper -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper mySwiper2" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./assets/images/watch-img.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/images/Android-Mobile.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/images/black-watch.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/images/gift-img.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/images/gift-img2.png" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="ticket-price-slider">
                                <img src="./assets/images/watch-img.png" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ticket-price-slider">
                                <img src="./assets/images/Android-Mobile.png" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ticket-price-slider">
                                <img src="./assets/images/black-watch.png" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ticket-price-slider">
                                <img src="./assets/images/gift-img.png" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ticket-price-slider">
                                <img src="./assets/images/gift-img2.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="competition-wrap">
                <p class="boldTitle">The Competition Ends In:</p>
                <div class="comp-timer">
                    <div class="example">
                        <div id="flipdown" class="flipdown"></div>
                        <div class="buttons"></div>
                    </div>
                    <div class="countewr-bar-wrap">
                        <div class="counter-progress-bar">
                            <p>0</p>
                            <p>400</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="total-people-wrap">
                            <img src="assets/images/tickets-icon.png" class="img-fluid" alt="">
                            <p>Number Of People Enter</p>
                        </div>
                    </div>
                    <div class="credit-price-bg">
                        <span>
                            <img src="assets/images/coin-img.png" class="img-fluid" alt="">
                            <p>10 Credits</p>
                        </span>
                        <p class="boldTitle">Per Tickets</p>
                    </div>
                </div>
                <div class="rate-form-wrap">
                    <form>
                        <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                        <input type="number" id="number" value="0" />
                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                    </form>
                    <div class="donateNow">
                        <a href="#!">Donate Now</a>
                    </div>
                </div>
                <p class="boldTitle">$239.99 Buy Now</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="note-desc-sect">
                    <p class="title">Description </p>
                    <p class="boldTitle">The Right Karma</p>
                    <p class="title-2">Investments LLC</p>
                    <p class="small-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsam aperiam eius ratione, ex harum earum provident sit aut magni, perspiciatis, quaerat accusantium laborum ullam.</p>
                </div>
            </div>
        </div>
    </div>
    <img src="./assets/images/lifestyle-img.png" class="img-fluid lifestyle" alt="">
    <img src="assets/images/profession-img.png" class="img-fluid profession-img" alt="">
</section>


<!-- Show Case Section-3 Ends Here -->
<section class="newsletter-sect">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
               <div class="form-wrap">
                    <form>
                        <p class="boldTitle mb-2">Contact US</p>
                        <p class="light-title mb-3">Join in Now</p>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <input class="contact-input" type="text" placeholder="Full Name">   
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <input class="contact-input" type="text" placeholder="Email Address">   
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mb-2">
                                <textarea class="contact-textarea form-control" placeholder="Message"></textarea>  
                            </div>
                            <div class="donateNow text-center mt-4">
                                <a href="#!">Send Now</a>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
    <img src="assets/images/sb-img-1.png" alt="blog-mobileImg" class="img-fluid sb-img-1">
    <img src="assets/images/sb-img-2.png" alt="blog-mobileImg" class="img-fluid sb-img-2">
</section>
</div>
<?php include 'includes/footer.php';?>