<div class="weekly-news-area pt-50">
    <div class="container">
       <div class="weekly-wrapper">
            <!-- section Tittle -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>{{ $skip_2->name }}</h3>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">

                        @foreach ($sublead as $pregnencys)
                        <a href="{{ url('/details/' . $pregnencys->slug ) }}">
                        <div class="weekly-single">
                            <div class="weekly-img">
                                <img src="{{ asset('uploads/disease/'. $pregnencys->image) }}" alt=""  width="100%" height="300px">
                            </div>
                            <div class="weekly-caption">
                                <h4>{{ $pregnencys->title }}</h4>
                            </div>
                        </div> 
                        </a>
                        @endforeach
                       
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>  