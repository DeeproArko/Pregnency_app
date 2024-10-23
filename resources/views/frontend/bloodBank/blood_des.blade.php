@extends('frontend.master')
@section('content')


<section class="blog_area single-post-area section-padding">
      <div class="container">
         
   <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Blood Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Company Name</th>
                        <th>Location</th>
                        <th>Phone</th>
                      </tr>
                    </thead>
                    @foreach ($blooddes as $blood)
                    <tbody>
                      <tr>
                        <td>{{ $blood->name }}</td>
                        <td>{{ $blood->location }}</td>
                        <td>{{ $blood->name }}</td>
                        
                      </tr>
                    </tbody>
                    @endforeach
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      </div>
</section>




@endsection