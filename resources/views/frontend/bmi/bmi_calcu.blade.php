@extends('frontend.master')
@section('content')



<div class="container" style="width: 800px;">
    <div class="row mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h4>বিএমআই ক্যালকুলেটর</h4>
                
            </div>
            <div class="card-body text-center">
                <p >বিএমআই এর পূর্ণরূপ হলো ‘বডি ম্যাস ইনডেক্স’। এটি একটি আন্তর্জাতিক সূচক—যার মাধ্যমে নারী-পুরুষ নির্বিশেষে একজন পূর্ণবয়স্ক মানুষের ওজন কম, স্বাভাবিক না কি বাড়তি—সেটি নির্ণয় করা হয়।</p>
                

                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="weight">ওজন(কেজি)</label>
                                <input type="numbers"  class="form-control" id="weight" required>
                            </div>
                    </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="height">উচ্চতা(ইঞ্চি)</label>
                                    <input type="numbers" class="form-control" id="height" required>
                                </div>
                        </div>
                      
                        <div class="form-group" style="justify-content:center;">
                            <a class="btn btn-sm btn-primary" onclick='calculateBmi()' style="margin-right: 20px; border-radius:50px;"> Submit </a>
                            <button  class="btn btn-sm btn-primary"  style="margin-right: 20px; border-radius:50px;" onclick='reload()'> Clear </button>
                        </div>
                        <div>
                     
                        <h4 id="heading"></h4>
              
                        <p id="bmi-output"></p>
                       
                        <p id="message"></p>
                        </div>
                    </div>
            </div>
                    <div class="card-footer text-center">
                        *ভারতীয় উপমহাদেশের ব্যক্তিদের ক্ষেত্রে
                    </div>
                </form>

                
            </div>
        </div>
    </div>
</div>

<script>
    function calculateBmi(){
        let height = document.getElementById('height').value;
        let weight = document.getElementById('weight').value;
        

        let bmi = (weight / (height * height) * 703) ;
            
        document.getElementById('heading').innerHTML = 'Your BMI is: '  + bmi.toFixed(2) ;


        if(bmi <= 24.9 ){
            document.getElementById('message').innerHTML = 'You are Underweight ';
        }else if(bmi >= 25 && bmi <=29.9){
            document.getElementById('message').innerHTML = 'You are healthy weight ';
        }else{
            document.getElementById('message').innerHTML = 'You are overweight ';
        }
    }

  
</script>
<script>
      function reload(){
        window.location.reload()
    }
</script>

@endsection