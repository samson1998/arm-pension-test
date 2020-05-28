@extends('layouts.app')

@section('content')
<div class="section h-50v" role="main">
    <div class="position-relative" style="margin-top: -35px;">
        {{-- <iframe width="600" height="0" frameborder="0" allowfullscreen="allowfullscreen"  style="border: 0px;" --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6103904826923!2d3.4350286!3d6.4440453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf52f7cf6ae13%3A0x3e76cad67a7e5f3c!2sARM%20Pension%20Managers%20(PFA)%20Ltd!5e0!3m2!1sen!2sng!4v1590548898260!5m2!1sen!2sng" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100 h-25v opacity-75 d-sm-none d-lg-inline-block lazyLoad isLoaded"></iframe>
    </div> 
    <div class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-lg-4">
                    <div class="pb-2">
                        <h3 class="text-catalina">Give us a call</h3> 
                        <div class="h5 font-body font-weight-semibold">
                            01-2715000 or 0700CALLARM(0700 2255 276)
                        </div>
                    </div> 
                    <div class="py-2">
                        <h3 class="text-catalina">Leave us a message</h3> 
                        <form method="POST" action="{{ route('contact-us.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label> 
                                <input type="text" name="email" required="required" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label for="name">Name</label> 
                                <input type="text" name="name" required="required" class="form-control">
                            </div> <div class="form-group">
                            <label for="phonenumber">Phone Number</label> 
                            <input type="text" name="phone_number" placeholder="+234" required="required" class="form-control"></div> 
                            <div class="form-group">
                                <label for="message">Message</label> 
                                <textarea name="message" rows="3" required="required" class="form-control"></textarea>
                            </div> 
                            <button type="submit" class="btn btn-block bg-claret text-white btn-lg px-5 shadow">Submit <i class="fa"></i></button> 
                                    <!---->
                        </form>
                        @include('inc.message')
                    </div> 
                    <div class="py-2">
                        <h3 class="text-catalina my-3">More ways to reach us</h3> 
                        <div class="w-75 m-0">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="mailto:info@armpension.com?Subject=Hello">
                                    <div class="d-flex flex-column text-center">
                                        <object width="50" height="50" data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAA39JREFUeF7t2zFy00AUBuC3HUMlt658BCpqaLgCZZyZ4KGy1yfAnMB7ApKcBI6QI+QI0DEUmNkZNCOvbUUr/Vo97/4uk+j56f/8JGclGeFLVQJGVTdsRgii7ENAEIIoS0BZO5wQgihLQFk7nBCCKEtAWTucEIIoS0BZO5wQgihLQFk7nBCCKEtAWTucEIIoS0BZO5wQgihLQFk7nBCCKEtAWTucEIIoS0BZO5wQgihLQFk7nBCCKEtAWTucEIIoS0BZO5wQgihLQFk7ySdku93eHA6HhbIczrZjjHne7/ePKXtNDmKtXYrIfcqdHPBet865hwHbR2+aBGS5XL5aLBZ/drvdX9/hlaAcYVhrK+fcz+iEIzdIArLZbD4aYz5UVfXpSlBCDD8lP1JMSxIQa+1ORL6IyLcrQDmHcSMiX51zfj9GfaUCcSKy+b8nmlEuYfjWswXxO6cRpQ0jexBtKC9hFAGiBaULRjEgU6N0xSgKZCqUGIziQFKjxGIUCZIKpQ9GsSBjo/TFKBpkLJQhGMWDoFGGYhAEuMyCwCBIYwVvyDILCoMgwZJqHxQkBkHaQPzvXrjIdXKlz1rrr2n4ZfS+r6xXe2NCOZqO5oYXUC5edh2IQpAzy/Rv/KfcObetYRoov/zgNK/qWWv3IvLonHtq/H3fSSkeJDxveIzvIlKJyINz7jZAeQqC9zdS+Bsq/HXw9wCUokHaMGqHI5TgUFZj1D9GoBQL0gXjIoq1NsRAoRQJEoNxgtKCgUApDqQPRh20P2n7c0uXOyL7Hr6KAhmCEfMVesikFAOSGqMvShEgU2H0QckeZGqMWJSsQbRgxKBkC6INoytKliBaMbqg5AOyXq8/G2Pezmazu8bjCM21qT5fXcfa5tL/Kfk8jrBarV7P5/PfV4DRNin5PLATLPxpnYxw4k4mZayRbNZN8nxIAOIfenmXYucA7+EPU6M/pDMpCCCkrEskn5Cs0wTsHEEAISJLEASZJqAWQQAhIksQBJkmoBZBACEiSxAEmSagFkEAISJLEASZJqAWQQAhIksQBJkmoBZBACEiSxAEmSagFkEAISJLEASZJqAWQQAhIksQBJkmoBZBACEiSxAEmSagFkEAISJLEASZJqAWQQAhIksQBJkmoBZBACEiSxAEmSagFkEAISJLEASZJqAWQQAhIksQBJkmoBZBACEiS/wDvsZkg95jJswAAAAASUVORK5CYII=" class="bg-light rounded-circle my-2 mx-auto"></object> 
                                        <small class="text-dark">Email</small>
                                    </div>
                                </a> 
                                <a href="https://wa.me/2348121859148" target="_blank">
                                    <div class="d-flex flex-column text-center">
                                        <object width="50" height="50" data="/_nuxt/img/7c0ccaf.png" class="bg-light rounded-circle my-2 mx-auto"></object> 
                                        <small class="text-dark">Chat on Whatsapp</small>
                                    </div>
                                </a> 
                                <a href="https://www.facebook.com/JaneByArm/" target="_blank">
                                <div class="d-flex flex-column text-center">
                                    <object width="50" height="50" data="/_nuxt/img/11d4fc5.png" class="bg-light rounded-circle my-2 mx-auto"></object> 
                                    <small class="text-dark">Chat Bot</small></div></a> <a href="https://twitter.com/armengage" target="_blank">
                                        <div class="d-flex flex-column text-center">
                                            <object width="50" height="50" data="/_nuxt/img/f12f003.png" class="bg-light rounded-circle my-2 mx-auto"></object> 
                                            <small class="text-dark">Social Media</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div> 
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="bg-stone border rounded-lg shadow p-4 h-100">
                            <h3 class="text-catalina mb-3">Branch Locator</h3> 
                            <div class="form-group">
                                <input type="text" placeholder="Search Branch by State, Street or LGA" required="required" class="form-control">
                            </div> 
                            <button class="btn btn-block bg-claret text-white btn-lg shadow">Search</button>
                            <!----> <!----> 
                            <h2 class="small font-body font-weight-semibold mt-4">HEAD QUARTERS</h2> 
                            <hr class="m-0"> 
                            <div class="location d-flex my-2">
                                <span class="fa-stack align-self-center">
                                    <i class="fa fa-circle fa-stack-2x text-claret"></i> 
                                    <i class="fa fa-map-marker-alt fa-stack-1x text-white fa-sm"></i>
                                </span> 
                                <p class="small align-self-center ml-2 mb-0">
                                    <br>5, Mekunwen Rd Off Oyinkan Abayomi Drive <br>Ikoyi, Lagos</p>
                            </div> 
                            <div class="phonenumber d-flex my-2">
                                <span class="fa-stack align-self-center">
                                    <i class="fa fa-circle fa-stack-2x text-claret"></i> 
                                    <i class="fa fa-phone fa-stack-1x text-white fa-sm fa-flip-horizontal"></i>
                                </span> 
                                <p class="small align-self-center ml-2 mb-0">
                                    01-2715000, 0700CALLARM(0700 2255 276)
                                </p>
                            </div> 
                            <h2 class="small font-body font-weight-semibold mt-4">LAGOS OPERATIONS OFFICE</h2> 
                            <hr class="m-0"> 
                            <div class="location d-flex my-2">
                                <span class="fa-stack align-self-center">
                                    <i class="fa fa-circle fa-stack-2x text-claret"></i> 
                                    <i class="fa fa-map-marker-alt fa-stack-1x text-white fa-sm"></i>
                                </span> 
                                <p class="small align-self-center ml-2 mb-0">SURULERE <br>86, Adeniran Ogunsanya Street <br>Surulere, Lagos</p>
                            </div> 
                            <div class="phonenumber d-flex my-2">
                                <span class="fa-stack align-self-center">
                                    <i class="fa fa-circle fa-stack-2x text-claret"></i> 
                                    <i class="fa fa-phone fa-stack-1x text-white fa-sm fa-flip-horizontal"></i>
                                </span> 
                                <p class="small align-self-center ml-2 mb-0">01-2715005 ; 01-2715000; 01-4608350-379</p>
                            </div>
                        </div>
                    </div>
            </div> 
<div class="row py-4">
    <div class="col-md-9 mx-auto">
        <hr> 
        <h3 class="text-catalina my-4 text-center">Frequently Asked Questions</h3> 
        <div id="accordion">
            <div class="card">
                <div id="headingOne" class="card-header">
                    <h5 class="font-body mb-0">
                        <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link text-catalina">
                            What are the requirements for Micro Pension registration?
                        </button>
                    </h5>
                </div> 
                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                    <div class="card-body">
                        You will have to complete a registration form with a PFA
                        providing basic personal details and stating Nature of
                        business. An RSA PIN is issued afterwards
                    </div>
                </div>
            </div> 
            <div class="card">
                <div id="headingTwo" class="card-header">
                    <h5 class="font-body mb-0">
                        <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-link text-catalina collapsed">
                            How do I register for Micro Pension Plan?
                        </button>
                    </h5>
                </div> 
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                    <div class="card-body">
                        You can register by opening a Retirement Savings Account
                        with your preferred pension fund managers
                    </div>
                </div>
            </div> 
            <div class="card">
                <div id="headingThree" class="card-header">
                    <h5 class="font-body mb-0">
                        <button data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="btn btn-link text-catalina collapsed">
                            Can a contributor under MPP convert to CPS?
                        </button>
                    </h5>
                </div> 
                <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                    <div class="card-body">
                        Yes, a contributor under Micro-Pension Plan can convert to
                        Contributory Pension Scheme (CPS) where he/she secures
                        employment in the formal sector with an organization that
                        has three or more employees.
                    </div>
                </div>
            </div> 
            <div class="card">
                <div id="headingFour" class="card-header">
                    <h5 class="font-body mb-0">
                        <button data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="btn btn-link text-catalina collapsed">
                            How much will I be charged for administrative fee?
                        </button>
                    </h5>
                </div> 
                <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion" class="collapse">
                    <div class="card-body">
                        A monthly maximum administration fees of eighty naira for
                        contributions of four thousand naira and above; and a
                        maximum administration fees of twenty naira charged for
                        contributions below the sum of four thousand naira,
                        irrespective of the number of remittances that makes up the
                        limits stated above.
                    </div>
                </div>
            </div>
        </div> 
        <div class="my-3">
            <a href="/contact-us/faq" class="text-catalina">
                <button type="button" class="btn bg-claret text-white py-2 px-4 shadow">
                    Learn More <i class="fa"></i>
                </button>
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection