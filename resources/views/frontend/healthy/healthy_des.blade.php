@extends('frontend.master')
@section('content')


<section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">

               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{ asset('uploads/healths/'. $healthyDes->image) }}" alt="" width="70%" height="500px">
                  </div>
                  <div class="blog_details">
                     <h2>
                        {{ $healthyDes->title }}
                     </h2>
                     
                     <p>
                        {{ $healthyDes->description }}
                     </p>
                     
                  </div>
               </div>
              
            
         </div>
      </div>
</section>




@endsection