<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Faq;
use App\Models\Side;
use App\Models\Choose;
use App\Models\Doctor;
use App\Models\Health;
use App\Models\Navbar;
use App\Models\Slider;
use App\Models\Disease;
use App\Models\Stomach;
use App\Models\Articles;
use App\Models\Blood;
use App\Models\Feedback;
use App\Models\Hospital;
use App\Models\Trending;
use App\Models\Pregnency;
use App\Models\SexualHealth;
use App\Models\Tps;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('./');
    }
    public function home()
    {
        $sliders = Slider::all();
        $sides = Side::all();
        $trendings = Trending::skip(0)->take(2)->get();
        $pregnency = Pregnency::all();
            
        $skip_0 = Navbar::skip(0)->take(1)->first();
         $skip_0_details=Disease::where('category_slug',$skip_0->slug)->where('sectionLead','on')->take(1)->get();
         $skip_1_details=Disease::where('category_slug',$skip_0->slug)->take(4)->get();
        $skipCategoryArticle_0=Disease::where('category_slug',$skip_0->slug)->where('subLead','=','on')->orderby('id','desc')->limit('4')->get();
         $MainLead=Disease::where('MainLead','=','on')->orderby('id','desc')->limit(1)->get();
         $sublead=Disease::where('subLead','=','on')->orderby('id','desc')->limit(4)->get();
         $sectionLead=Disease::where('sectionLead','=','on')->orderby('id','desc')->limit(3)->get();
         $tips=Disease::where('tips','=','on')->orderby('id','desc')->limit(1)->get();
         $recentNews=Disease::orderby('id','desc')->limit(4)->get();

         $popular=Doctor::where('popular','=','on')->orderby('id','desc')->limit(5)->get();
         
        $skip_2 = Navbar::skip(1)->take(1)->first();
    
         $skip_2_details=Disease::where('category_slug',$skip_2->slug)->take(1)->get();
         $skip_3_details=Disease::where('category_slug',$skip_2->slug)->take(4)->get();
          $skipCategoryArticle_1=Disease::where('category_slug',$skip_2->slug)->where('subLead','=','on')->orderby('id','desc')->limit('4')->get();
        $skip_3 = Navbar::skip(2)->take(1)->first();
         $skip_3_details=Disease::where('category_slug',$skip_3->slug)->take(1)->get();
         $skip_4_details=Disease::where('category_slug',$skip_3->slug)->take(4)->get();
        $skipCategoryArticle_2=Disease::where('category_slug',$skip_3->slug)->where('subLead','=','on')->orderby('id','desc')->limit('4')->get();
        $skip_4 = Navbar::skip(1)->take(1)->first();
         $skip_4_details=Disease::where('category_slug',$skip_4->slug)->take(1)->get();
     
 $skipCategoryArticle_3=Disease::where('category_slug',$skip_4->slug)->where('subLead','=','on')->orderby('id','desc')->limit('4')->get();
       
        

        
        $chosse = Choose::skip(0)->take(1)->get();
        $faqs = Faq::skip(0)->take(2)->get();


        $videos = Video::skip(0)->take(1)->get();
        $tips = Tps::skip(0)->take(5)->get();
        $feedbacks = Feedback::all();
        
        return view('frontend.index', compact('feedbacks','tips','popular','videos','faqs','tips','sectionLead','skip_4','skip_4_details','skip_3','recentNews','skipCategoryArticle_0','skipCategoryArticle_1','skipCategoryArticle_2','skipCategoryArticle_3','sublead','skip_3_details','skip_2_details','skip_2','MainLead','skip_0','skip_0_details','skip_1_details','chosse'));
    }
   

    public function categoryArticle($slug)
    {
       
         
          $article=Disease::where('category_slug','=',$slug)->orderby('id','desc')->get();
        return view('frontend.disease.deases_info', compact('article'));
    }
    
    public function diseasInfo()
    {
        $disease = Disease::all();
        return view('frontend.disease.deases_info', compact('disease'));
    }
    public function diseasDes($slug)
    {
           $description=Disease::where ('slug',$slug)->get();
        return view('frontend.disease.disease_des', compact('description'));
    }
    public function sexualityInfo()
    {
        $health = SexualHealth::all();
        return view('frontend.Sexuality.seuality_info', compact('health'));
    }
    public function sexualityDes($id)
    {
        $healthDes = SexualHealth::find($id);
        return view('frontend.Sexuality.sexuality_des', compact('healthDes'));
    }
    public function stomachInfo()
    {
        $stomachs = Stomach::all();
        return view('frontend.stomach.stomach_info', compact('stomachs'));
    }
    public function stomachDes($id)
    {
        $stomachdes = Stomach::find($id);
        return view('frontend.stomach.stomach_des', compact('stomachdes'));
    }
    public function pregnencyInfo()
    {
        $pregnencyInfo = Pregnency::all();
        return view('frontend.pregnency.pregnency_info', compact('pregnencyInfo'));
    }
    public function pregnencyDes($id)
    {
        $pregnencydes = Pregnency::find($id);
        return view('frontend.pregnency.pregnency_des', compact('pregnencydes'));
    }
    public function doctorInfo()
    {
        $doctors = Doctor::all();
        return view('frontend.doctor.doctor_info', compact('doctors'));
    }
    public function hospitalInfo()
    {
        $hospitals = Hospital::all();
        return view('frontend.hospital.hospital_info', compact('hospitals'));
    }
    public function ambulanceInfo()
    {
        $ambulances = Ambulance::all();
        return view('frontend.ambulance.ambulance_info', compact('ambulances'));
    }
    public function bloodBankInfo()
    {
        $bloods = Blood::all();
        return view('frontend.bloodBank.blood_info', compact('bloods'));
    }
    public function bloodBankDes($slug)
    {
        $blooddes = Blood::where ('slug',$slug)->get();
        return view('frontend.bloodBank.blood_des', compact('blooddes'));
    }
    public function bmi()
    {

        return view('frontend.bmi.bmi_calcu');
    }
    public function pregnency()
    {

        return view('frontend.bmi.pregnency_calcu');
    }
 
}

   
    

