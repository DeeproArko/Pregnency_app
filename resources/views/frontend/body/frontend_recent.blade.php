


<div class="container">
    <div class="row mt-4">
      <div class="col-md-6" style="margin-top: 120px;">
          <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                  <span class="input-group-text border-0" id="search-addon" style="background: #222;">
                      <a href="#" style="text-decoration: none;"><i class="fas fa-search"></i></a>
                  </span>
          </div>
          <div class="div" style="margin-top: 120px;">
             
                  <div class="row">
                    
                    @foreach ($sectionLead as $skip)
                    <div class="col-md-4">
                    <a href="{{ url('/details/' . $skip->slug ) }}">
                    <div class="row" style="justify-content:center;">
                        <img src="{{ asset('uploads/disease/'. $skip->image) }}" alt="" width="80%" >
                        <p style="font-size: 15px; " class="text-center">{{ $skip->title }}</p>
                    </div>
                  
                    
                    </a>
                </div> 
                    @endforeach
                           
                  </div>
             
          </div>
      </div>
  
  
      <div class="col-md-3">
            @foreach ($recentNews as $recent)
            <div class="row g-0" style="border-bottom: dotted; margin-top:10px;color: #B2BEB5; justify-content:center;">
                <a href="{{ url('/details/' . $recent->slug ) }}" class="d-flex">
                <div class="col-sm-6 col-md-6">
                <img src="{{ asset('uploads/disease/' . $recent->image) }}" alt="" width="100%" height="100px">
                </div>
                <div class="col-6 col-md-6">
                <p style="font-size: 12px;" class="text-center mt-4">{{ $recent->title }}</p>
                </div>
                </a>
            </div>
            @endforeach
         

  
      </div>
  
  
  
      <div class="col-md-3">
     
            <h4 class="text-center">Most Popular</h4>
         
            <div class="recent-articles mt-5" >
                <div class="container">
                 

                   <div class="recent-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="recent-active dot-style d-flex dot-style">
                                    @foreach ($popular as $populars)
                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img src="{{ asset('uploads/doctor/'. $populars->image) }}" alt="" width="100%" >
                                        </div>
                                        <div class="what-cap">
                                        
                                            <h6>{{ $populars->name }}</h6>
                                          
                                            
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                   </div>
               
                </div>
            </div>
 
            <h4 class="text-center">Quick Tips</h4>
         
            <div class="recent-articles mt-5" >
                <div class="container">
                 

                   <div class="recent-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="recent-active1 dot-style d-flex dot-style">
                                    @foreach ($tips as $tip)
                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img src="{{ asset('uploads/tip/'. $tip->image) }}" alt="" width="100%" height="70">
                                        </div>
                                        <div class="what-cap">
                                        
                                            <h6>{{ $tip->title }}</h6>
                                         
                                      
                                            
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                   </div>
               
                </div>
            </div>
          
      
          
          
      </div>
    </div>
  </div>