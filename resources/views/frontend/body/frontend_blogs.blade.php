<style>
    
    a, button {
            color: #000 !important;
    }
</style>

<div class="trending-area fix">
    <div class="container mt-3">
        <div class="trending-main">
            <div class="row">
                <div class="col-md-6">
                         <!-- Start Youtube -->
                            <div class="youtube-area">
                                <div class="container">
                                    <!-- Hot Aimated News Tittle-->
                                <h5 class="text-center">Video Article</h5>
                                @foreach ($videos as $video)
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="video-items-active">
                                                <div class="video-items text-center" style="width: 100%">
                                   
                                           
                                                    {!! $video->video !!}
                                             
                                           
                                            </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div> 
                             <!-- End Start youtube -->
                
                
                
                </div>
                <div class="col-md-6" style="margin-top: 50px">
                    <div class="row">
                          <div class="col-md-6">
                        <h5 ><b>{{$skip_0->name}}</b></h5>
                         @foreach ($skipCategoryArticle_0 as $skipCategoryArticle_0)
                      <p style="border-bottom: dotted;color: #B2BEB5;"><a href="{{ url('/details/' . $skipCategoryArticle_0->slug ) }}">{{$skipCategoryArticle_0->title}}</a></p>
                       @endforeach
                      </div>
                      
                      
                        <div class="col-md-6">
                        <h5 ><b>{{$skip_2->name}}</b></h5>
                         @foreach ($skipCategoryArticle_1 as $skipCategoryArticle_1)
                      <p style="border-bottom: dotted;color: #B2BEB5;"><a href="{{ url('/details/' . $skipCategoryArticle_1->slug ) }}">{{$skipCategoryArticle_1->title}}</a></p>
                       @endforeach
                    
                      </div>
                      
                      <div class="col-md-6">
                         <h5 ><b>{{$skip_3->name}}</b></h5>
                      @foreach ($skipCategoryArticle_2 as $skipCategoryArticle_2)
                      <p style="border-bottom: dotted;color: #B2BEB5;"><a href="{{ url('/details/' . $skipCategoryArticle_2->slug ) }}">{{$skipCategoryArticle_2->title}}</a></p>
                       @endforeach
                      </div>
                      
                      
                      
                      <div class="col-md-6">
                        <h5 ><b>{{$skip_4->name}}</b></h5>
                         @foreach ($skipCategoryArticle_3 as $skipCategoryArticle_3)
                      <p style="border-bottom: dotted;color: #B2BEB5;"><a href="{{ url('/details/' . $skipCategoryArticle_3->slug ) }}">{{$skipCategoryArticle_3->title}}</a></p>
                       @endforeach
                      </div>
                      
                      
                    </div>
                  
                </div>
                
                
            </div>
        </div>
    </div>
</div>
