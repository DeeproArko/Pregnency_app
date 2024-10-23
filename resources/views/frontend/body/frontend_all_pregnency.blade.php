<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                    <div class="text-center">
                        <h3 class="mt-3"  style="justify-content: center;">আমাদের সম্পর্কে মায়েদের মতামত</h3>
                    </div>
                    <div class="recent-articles mt-5" >
                        <div class="container">
                         
        
                           <div class="recent-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="recent-active2 dot-style d-flex dot-style">
                                            @foreach ($feedbacks as $populars)
                                            <div class="single-recent mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('uploads/feedback/'. $populars->image) }}" alt="" width="100%" >
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
    </div>
</div>