{{-- 
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 ">
                      
                       
                            <div class="card border-0">
                                <div class="card-header border-0">
                                    <h5>{{ $skip_3->name }}</h5>
                                </div>
                                @foreach ($skip_4_details as $diseases)
                                <a href="{{ url('/disease/des/' . $diseases->id ) }}">
                                <div class="card-body border-0">
                                    <img src="{{ asset('uploads/disease/' .$diseases->image) }}" alt="" width="100%" height="200px">
                                    <p class="mt-4">{{ $diseases->title }}</p>
                                </div>
                                </a>
                                @endforeach
                            </div>
                        </a>
                     
                    </div>
                    <div class="col-md-4">

     
                        <div class="card border-0">
                            <div class="card-header border-0">
                                
                                <h5>{{ $skip_5->name }}</h5>
                            </div>
                            @foreach ($skip_5_details as $stomach)
                            <a href="{{ url('/disease/des/' . $stomach->id ) }}">
                            <div class="card-body border-0">
                                <img src="{{ asset('uploads/disease/'. $stomach->image) }}" alt="" width="100%" height="200px">
                                <p class="mt-4">{{ $stomach->title }}</p>
                            </div>
                            </a>
                            @endforeach
                        </div>
                        </a>
                    </div>
                  
                    
                    <div class="col-md-4">
                      
                    
                            <div class="card border-0">
                            <div class="card-header border-0">
                                <h5>{{ $skip_6->name }}</h5>
                            </div>
                            @foreach ($skip_6_details as $health)
                            <a href="{{ url('/disease/des/' . $health->id ) }}">
                            <div class="card-body border-0">
                                <img src="{{ asset('uploads/disease/'.$health->image) }}" alt="" width="100%" height="200px">
                                <p class="mt-4">{{ $health->title }}</p>
                            </div>
                            </a>
                            @endforeach  
                            </div>
                  
                       
                    </div>
                </div>
               
            </div>
        </div>
    </div>      
</section> --}}
