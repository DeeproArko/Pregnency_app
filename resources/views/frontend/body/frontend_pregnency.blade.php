<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <h4>Why Us?</h4>
                        @foreach ($chosse as $ch)
                        <img src="{{ asset('uploads/choose/'. $ch->image) }}" alt="" width="100%" height="200px">
                        <p style="margin-top: 20px;">{!! $ch->description !!}</p>
                        @endforeach
                        
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-center">Facebook page</h6>
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPregnancy.Ratnabati&tabs=timeline&width=350&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>


                </div>
                <div class="col-md-3">
                        <h6 class="text-center">Facebook page</h6>
                    </div>
            </div>
        </div>
    </div>
</section>


