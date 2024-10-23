@extends('frontend.master')
@section('content')


<section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">
  @foreach($description as $description)
               <div class="single-post">
                  <div class="feature-img">
                     <h2>
                        {{ $description->title }}
                     </h2>
                     <img  src="{{ asset('uploads/disease/'. $description->image) }}" alt="" width="100%"  height="300px">      
                  </div>
                  <div class="blog_details">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-2" >
                              <div class="div" style="text-align: right; margin-right:30px;">
                                 <h3><a href="#">সুচিপত্র</a></h3>
                              <p><a href="#">চামড়ার ফুসকুড়ি</a></p>
                              <p><a href="#">চিকিৎসা</a></p>
                              <p><a href="#">প্রতিরোধ</a></p>
                              <p><a href="#">সাধারণ জিজ্ঞাসা</a></p>
                              </div>
                              
                           </div>
                           <div class="col-md-10">
                             
                                 <p>
                                    {!! $description->description !!}
                                 </p>
                           </div>
                        </div>
                     </div>
                 
                     
                  </div>
               </div>
              @endforeach  
            
         </div>
      </div>
</section>




@endsection