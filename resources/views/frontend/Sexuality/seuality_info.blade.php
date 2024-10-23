
@extends('frontend.master')
@section('content')
<section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-tittle mb-30 text-center">
                            <h1>যৌন স্বাস্থ্য</h1>
                        </div>
                    </div>
                   
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($health as $healths)
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <a href="{{ url('/sexuality/des/' . $healths->id ) }}">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('uploads/health/'. $healths->image) }}" alt="">
                                                </div>
                                                <div class="what-cap">
                                          
                                                    <h4>{{ $healths->title }}</h4>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                    @endforeach
                                   
                                       
                                </div>
                            </div>
                    </div>
                </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
          
            </div>
        </div>
</section>
@endsection