
<section class="whats-news-area pt-50 pb-20">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                 
                  <div class="col-md-5">
                      <div class="row g-0" >
                         
                        
                              <div class="col-12 col-md-12 col-lg-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h4>FAQ</h4>
                                    </div>
                                    @foreach ($faqs as $faq)
                                    <div class="card-body">
                                      <div id="accordion">


                                        <div class="accordion">
                                          <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-{{ $faq->id}}"
                                            aria-expanded="true">
                                            <p class="mb-0">{!! $faq->question !!}</p>    
                                          </div>
                                    
                                          <div class="accordion-body collapse show" id="panel-body-{{ $faq->id}}" data-parent="#accordion">
                                              
                                              <p class="mb-0">{!! $faq->answer !!}</p>
                                            </div> 
                                      
                                          
                                        </div>
                                      
                                      </div>
                                    </div>
                                    @endforeach
                                  </div>
                                </div>
                          

                         
                         
                      </div>
                  </div>







                  <div class="col-md-5">
                      <div class="card border-0">
                          <div class="card-header border-0">
                              <h4>হেলথ টুলস</h4>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <a href="{{ route('bmi') }}">
                                  <div class="col-md-6 text-center">
                                  <svg fill="none" height="150px" viewBox="0 0 24 24" width="150" xmlns="http://www.w3.org/2000/svg"><path d="M14 22.75H10C4.57 22.75 2.25 20.43 2.25 15V9C2.25 3.57 4.57 1.25 10 1.25H14C19.43 1.25 21.75 3.57 21.75 9V15C21.75 20.43 19.43 22.75 14 22.75ZM10 2.75C5.39 2.75 3.75 4.39 3.75 9V15C3.75 19.61 5.39 21.25 10 21.25H14C18.61 21.25 20.25 19.61 20.25 15V9C20.25 4.39 18.61 2.75 14 2.75H10Z" fill="black"/><path d="M15.0701 12.54C14.8901 12.54 14.7101 12.47 14.5701 12.35C13.1101 11.05 10.8901 11.05 9.43011 12.35C9.27011 12.5 9.05011 12.56 8.82011 12.53C8.60011 12.5 8.41011 12.37 8.29011 12.18L6.11011 8.68001C5.92011 8.37001 5.98011 7.97001 6.25011 7.72001C9.53011 4.81001 14.4701 4.81001 17.7501 7.72001C18.0201 7.96001 18.0801 8.37001 17.8901 8.68001L15.7101 12.18C15.5901 12.37 15.4001 12.49 15.1801 12.53C15.1401 12.53 15.1001 12.54 15.0701 12.54ZM12.0001 9.87001C13.0001 9.87001 13.9901 10.15 14.8601 10.7L16.2601 8.45001C13.7301 6.57001 10.2601 6.57001 7.73011 8.45001L9.13011 10.7C10.0101 10.14 11.0001 9.87001 12.0001 9.87001Z" fill="black"/></svg>
                                      <h6 class="mt-3 text-center"><a>বিএমআই ক্যালকুলেটর</a></h6>
                                  </div>
                                  </a>
                                  <a href="{{ route('pregnency') }}">
                                  <div class="col-md-6 text-center">
                                  <svg id="Icons_Baby" overflow="hidden" version="1.1" height="150px" width="150px" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="48" cy="20.5" r="12.5"/><path d=" M 57 62.5 C 57 62.6 57 62.7 57 62.8 C 53.5 63.1 50.9 66 51 69.5 C 51 70.5 51.3 71.5 51.8 72.3 C 50.7 72.7 49.3 72.9 47.8 72.9 C 46.2 72.9 44.9 72.7 43.9 72.3 C 45.4 70.1 45.4 67.1 43.8 64.8 C 42.6 63.2 40.9 62.2 39 62 L 39 60 L 57 60 L 57 62.5 Z M 76.2 44.2 L 59 35.2 C 58.6 35.1 58.2 35 57.8 35 L 39 35 C 38.5 35 38.1 35.1 37.6 35.2 L 19.6 45.2 C 17.5 46 16.5 48.3 17.2 50.3 C 17.8 52 19.4 53 21 53 C 21.5 53 21.9 52.9 22.4 52.8 L 35 46.2 C 35 46.2 35 62.7 35 63 C 34.8 63.1 26.8 68.7 26.8 68.7 C 25.1 69.9 24.6 72.3 25.7 74.1 L 32.7 85.1 C 33.9 87 36.4 87.5 38.2 86.3 C 40 85.1 40.6 82.6 39.4 80.8 L 36 75.3 L 38.2 75.3 C 38.9 75.3 39.6 75.2 40.3 75 C 42.1 76.2 44.5 76.9 47.7 76.9 C 50.7 76.9 53.1 76.2 55 75.2 C 55.8 75.6 56.8 75.7 57.8 75.7 L 59.6 75.6 L 56 80.6 C 54.7 82.4 55.1 84.9 56.9 86.2 C 58.7 87.5 61.2 87.1 62.5 85.3 L 70.5 74.3 C 70.6 74.2 70.7 74.1 70.7 73.9 C 71.8 72 71.1 69.5 69.2 68.4 L 61 63.8 C 61 63.4 61 45.8 61 45.8 L 73.8 51.9 C 74.2 52 74.6 52.1 75 52.1 C 76.7 52.1 78.3 51 78.8 49.3 C 79.5 47.1 78.3 44.9 76.2 44.2 Z"/></svg>
                                      <h6 class="mt-3"><a>প্রেগন্যান্সি ক্যালকুলেটর</a></h6>
                                  </div>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>





                  <div class="col-md-2 mt-4">
                      <div class="card">
                          <div class="card-body">
                              <ul class="text-center">
                                  <a href="{{ route('doctorInfo') }}"><li style="color: #222;">Doctor List</li></a>
                                  <a href="{{ route('hospitalInfo') }}"><li style="color: #222;">Hospital List</li></a>
                                  <a href="{{ route('bloodBankInfo') }}"><li style="color: #222;">Blood Bank</li></a>
                                  <a href="{{ route('ambulanceInfo') }}"><li style="color: #222;">Ambulance </li></a>
                                  <!-- Add more list items as needed -->
                                </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>    
  </section>
  
  
  <style>
      /* Custom CSS */
      .col-md-2 ul {
        list-style-type: none;
        padding: 0;
      }
      .col-md-2 ul li {
        margin-bottom: 10px;
        background-color: #f0f0f0;
        padding: 10px;
        border-radius: 5px;
      }
      .col-md-2 ul li:hover {
        background-color: #e0e0e0;
      }
    </style>

  
  