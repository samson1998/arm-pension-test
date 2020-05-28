@extends('layouts.app')

@section('content')
<div class="h-50v" role="main">
    <div class="overflow-hidden position-relative h-50v" style="margin-top: 75px; padding: 87px 0;">
        <div class="landing-slider landing-image lazyLoad isLoaded" style="background-image: url('https://image.shutterstock.com/image-photo/confidence-that-can-only-grow-260nw-102463487.jpg');"></div> 
            <div class="container p-0">
                <div class="row h-50v">
                    <div class="col-md-5 col-8 ml-lg-0 ml-3 align-self-center text-white">
                        <div class="my-1 text-white"></div> 
                        <h1 class="text-white">
                            <span>Retirement planning isn’t one-size-fits-all.</span>
                        </h1> 
                    <!----> 
                        <a type="button" href="https://wit.armpension.com/" target="_blank" class="btn px-5 py-2 my-1 bg-claret text-white py-2 px-4 shadow">
                            Explore 
                            <i class="fa"></i>
                        </a>
                    </div>
                </div>
            </div>
    </div> 
    <div class="section position-relative py-5">
        <div class="container">
            <div class="section-header mb-3">
                <h2 class="text-catalina">
                    Hi, how may we assist you today?
                </h2>
            </div> 
            <div class="section-body row mx-0">
                <div class="col-md-3 col-6 px-2 mt-2 mt-lg-0">
                    <div class="category-item">
                        <div class="gradient-overlay-special d-inline-block cursor-pointer w-100">
                            <img class="w-100 object-cover d-block position-relative lazyLoad ls-is-cached lazyloaded isLoaded" src="https://images.pexels.com/photos/3206079/pexels-photo-3206079.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                            <div class="position-absolute bottom-lg mx-3">
                                <div class="h6 text-white small"></div>  
                                <div class="h6 font-weight-bold text-white">Benefit Payment</div> 
                                <a href="/retirement-plans/benefits-payment" class="text-white" target="">
                                    Learn More <i class="fas ml-1 fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-6 px-2 mt-2 mt-lg-0">
                    <div class="category-item">
                        <div class="gradient-overlay-special d-inline-block cursor-pointer w-100">
                            <img class="w-100 object-cover d-block position-relative lazyLoad ls-is-cached lazyloaded isLoaded" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                            <div class="position-absolute bottom-lg mx-3"><div class="h6 text-white small"></div>  
                                <div class="h6 font-weight-bold text-white">Voluntary Contributions</div> 
                                <a href="/retirement-plans/voluntary-contribution" class="text-white" target="">
                                    Learn More <i class="fas ml-1 fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
            <div class="col-md-3 col-6 px-2 mt-2 mt-lg-0">
                <div class="category-item">
                    <div class="gradient-overlay-special d-inline-block cursor-pointer w-100">
                        <img class="w-100 object-cover d-block position-relative lazyLoad ls-is-cached lazyloaded isLoaded" src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        <div class="position-absolute bottom-lg mx-3">
                            <div class="h6 text-white small"></div>  
                            <div class="h6 font-weight-bold text-white">Account Maintenance</div> 
                            <a href="/https://employers.armpension.com:8444/" class="text-white" target="_blank">
                                Learn More <i class="fas ml-1 fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 col-6 px-2 mt-2 mt-lg-0">
                <div class="category-item">
                    <div class="gradient-overlay-special d-inline-block cursor-pointer w-100">
                        <img class="w-100 object-cover d-block position-relative lazyLoad ls-is-cached lazyloaded isLoaded" src="https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"> 
                        <div class="position-absolute bottom-lg mx-3">
                            <div class="h6 text-white small"></div> 
                            <div class="text-white">
                                <div class="h6 font-weight-bold text-white">
                                    Price History
                                </div> 
                                <div class="small">
                                    <p class="mb-2 font-italic">
                                        May 21, 2020
                                    </p> 
                                    <small class="mb-1 d-block">
                                        RSA FUND I: <span class="font-weight-bold">1.1959</span>
                                    </small>
                                    <small class="mb-1 d-block">
                                        RSA FUND II:
                                        <span class="font-weight-bold">4.5753</span>
                                    </small>
                                    <small class="mb-1 d-block">
                                        RSA FUND III:
                                        <span class="font-weight-bold">1.2211</span>
                                    </small>
                                    <small class="mb-1 d-block">
                                        RETIREE FUND:
                                        <span class="font-weight-bold">3.9422</span>
                                    </small>
                                    <small class="mb-1 d-block">
                                        MICRO PENSION FUND:
                                        <span class="font-weight-bold">1.0505</span>
                                    </small>
                                </div>
                            </div> 
                            <div class="h6 font-weight-bold text-white"></div> 
                                <a href="/price-history" class="text-white" target="">
                                    Learn More 
                                    <i class="fas ml-1 fa-arrow-right"></i>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="section bg-yellow py-5 solicit">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 align-self-center text-center pb-3 pt-0 py-lg-3 px-0 px-lg-5">
                <img alt="soliciting notice" class="col-lg-12 col-4 pb-3 lazyLoad ls-is-cached lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/bbbd5c9.png"> 
                <h2 class="text-catalina d-block d-lg-none">No Soliciting</h2>
            </div> 
            <div class="col-lg-6 align-self-center px-3 mb-0">
                <div class="d-none d-lg-flex align-items-center pb-3">
                    <h2 class="text-catalina">No Soliciting</h2> 
                    <span class="ml-auto cursor-pointer">
                        <i class="fa fa-1x fa-times-circle"></i>
                    </span>
                </div> 
                <p class="text-justify">
                    ARM Pension Managers (PFA) Limited does not solicit nor request for
                    payment as a condition to processing your retirement benefits or
                    providing you with information in relation to your retirement
                    savings account with us. Please disregard any request for cash or
                    gift from any employee or agent or organization as a condition for
                    accessing your benefits
                </p> 
                <div class="text-center pt-2">
                    <a href="#" class="ml-2 d-inline d-lg-none cursor-pointer text-catalina font-weight-semibold">
                        <u>Close Caveat</u>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> 
    <div class="section bg-stone py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="gallery-grid mb-5 mb-lg-0">
                        <div class="gallery-item gallery-item-1">
                            <img alt="Image 1" class="gallery-img rounded-lg object-pos-top lazyLoad ls-is-cached lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/0046516.jpg">
                        </div> 
                        <div class="gallery-item gallery-item-2">
                            <img alt="Image 2" class="gallery-img rounded-lg object-pos-top lazyLoad lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/0d8f8b8.jpg">
                        </div> 
                        <div class="gallery-item gallery-item-3">
                            <img alt="Image 3" class="gallery-img rounded-lg object-pos-top lazyLoad lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/7965f57.jpg">
                        </div> 
                        <div class="gallery-item gallery-item-4">
                            <img alt="Image 4" class="gallery-img rounded-lg object-pos-bottom lazyLoad lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/20b0646.jpg">
                        </div> 
                        <div class="gallery-item gallery-item-5">
                            <img alt="Image 5" class="gallery-img rounded-lg object-pos-bottom lazyLoad lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/1ff6e3a.jpg">
                        </div>
                    </div>
                </div> 
                <div class="col-md-5">
                    <div class="d-flex h-100 ml-lg-5 ml-0">
                        <div class="align-self-center">
                            <h2 class="text-catalina">
                                Tomorrow is looking good.
                            </h2> 
                            <p> Retirement is supposed to be enjoyable and stress-free, so we created our planning experience to be that way too.</p> 
                            <p>This isn’t a typical retirement planning experience. It’s delightful, research-backed, and focuses on what’s most important: you.</p> 
                            <a type="button" href="https://wit.armpension.com/" target="_blank" class="btn bg-claret text-white px-5 shadow">
                                Make it happen <i class="fa"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="text-catalina">Plan your retirement with us</h2> 
                    <div class="py-3 border-bottom">
                        <h4 class="font-body">Can I buy my dream house at retirement?</h4> 
                        <p>When you have accumulated enough money in your retirement savings account (RSA) during your working years, you can buy your dream house and enjoy a comfortable retirement with the ones you love.</p>
                    </div> 
                    <div class="py-3 border-bottom">
                        <h4 class="font-body">Can I continue to pay my child’s fees at retirement?</h4> 
                        <p>With the right plans in place, you can continue to pay child's school fees even at retirement. Talk to us today to make sure your pension plan lives up to the retirement you deserve.</p>
                    </div> 
                    <div class="py-3">
                        <h4 class="font-body">Can I buy my dream car at retirement?</h4> 
                        <p>Retirement is an adventure in itself and you can totally enjoy the ride in your brand-new dream car. With Voluntary Contributions made to your RSA today, your tomorrow will be filled with making your dreams come true.</p>
                    </div> 
                    <a type="button" href="https://register.armpension.com/" target="_blank" class="btn bg-claret text-white mb-5 mb-lg-2 py-2 px-4 shadow">
                        Start Now <i class="fa"></i>
                    </a>
                </div> 
                <div class="col-md-2"></div> 
                    <div class="col-md-5">
                        <div class="bg-stone shadow rounded-lg p-4 d-flex flex-column justify-content-center h-100 border mt-3 mt-lg-0">
                            <div id="retirement-benefits-calculator" class="mb-3 header-fix anchor-fix">
                                <h2 class="text-catalina">Retirement Benefit Calculator</h2>
                            </div> 
                            <div class="mb-3">
                                <p class="small m-0">TOTAL RETURNS</p> 
                                <h2 class="font-body font-weight-semibold">₦ 0.00</h2>
                            </div> 
                            <form id="benefitCalculatorForm" action="#">
                                <div class="form-group">
                                    <label for="">Current RSA Balance</label> 
                                    <input type="number" min="0" required="required" class="form-control border-top-0 border-right-0 border-left-0 border-primary rounded-0">
                                </div> 
                                <div class="form-group">
                                    <label for="">Total Monthly Contribution (in Naira)*</label> 
                                    <input type="number" min="0" required="required" class="form-control border-top-0 border-right-0 border-left-0 border-primary rounded-0">
                                </div> 
                                <div class="form-group">
                                    <label for="">Monthly Voluntary Contribution (in Naira)</label> 
                                    <input type="number" min="0" class="form-control border-top-0 border-right-0 border-left-0 border-primary rounded-0">
                                </div> 
                                <div class="form-group">
                                    <label for="">Expected Retirement Date*</label> 
                                    <input type="text" required="required" class="form-control border-top-0 border-right-0 border-left-0 border-primary rounded-0" data-tail-datetime="tail-1">
                                </div> 
                                <button type="submit" class="btn btn-block bg-claret text-white py-2 px-4 shadow">
                                    Calculate <i class="fa"></i>
                                </button> 
                                <div class="mt-5 small">
                                    <p class="mb-2">You will have <span class="text-catalina font-weight-bold">N 0.00</span> at the time of retirement. Use our retirement planner to help you plan and achieve this goal</p> 
                                    <a href="https://wit.armpension.com/" target="_blank" class="font-weight-bold text-claret">Try our advanced retirement planning tool<i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div> 
    <div class="section bg-stone pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center h-100 my-auto">
                        <h2 class="text-catalina mx-auto">Manage your account from anywhere</h2> 
                        <p>With the ARM Engage app, you take your retirement account with you everywhere. Download the app today from the Google playstore or iOS App store to enjoy easy access.</p> 
                        <div class="d-flex my-4">
                            <a href="https://apps.apple.com/us/app/arm-engage/id1482935426" target="_blank">
                                <img alt="Apple App Store Download Link" width="120" class="object-contain mr-2 lazyLoad ls-is-cached lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/7364c59.png">
                            </a> 
                            <a href="https://play.google.com/store/apps/details?id=com.arm.engage" target="_blank">
                                <img alt="Google Play Store Download Link" width="120" class="object-contain ml-2 lazyLoad ls-is-cached lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/7364c59.png">
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center">
                        <img alt="engage screenshot" class="w-100 lazyLoad ls-is-cached lazyloaded isLoaded" src="https://armpension.com/_nuxt/img/d15f696.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection