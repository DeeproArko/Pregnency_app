
@extends('frontend.master')
@section('content')
<section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-tittle mb-30 text-center">
                           
                        </div>
                    </div>
                   
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($article as $diseases)
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <a href="{{ url('/details/' . $diseases->slug ) }}">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('uploads/disease/'. $diseases->image) }}" alt="">
                                                </div>
                                                <div class="what-cap">
                                          
                                                    <h4>{{ $diseases->title }}</h4>
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