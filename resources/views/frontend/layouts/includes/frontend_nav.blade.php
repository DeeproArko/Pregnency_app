<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
           
            <div class="header-mid d-none d-md-block">
               <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        
                    </div>
               </div>
            </div>
           <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 header-flex">
                            <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            <!-- Main-menu -->
                            @php
                            $categories = App\Models\Navbar::orderBy('id', 'ASC')->get();
                        @endphp
                        
                            <div class="main-menu d-none d-md-block">
                                <nav>                  
                                    <ul id="navigation">    
                                        <li><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""></a></li>
                                        @foreach ($categories as $nav)
                                        <li><a href="{{ url('/category/'  . $nav->slug) }}">{{ $nav->name }}</a></li>
                                        @endforeach
                 
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>