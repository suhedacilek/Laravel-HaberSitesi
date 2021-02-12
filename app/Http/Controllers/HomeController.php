<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Faq;
use App\Models\Haber;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //

    public static function categorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }


    public static function getsetting()
    {
        return setting::first();

    }
    public static function countreview($id){

        return Review::where('product_id', $id)->count();
    }
    public static function avrgreview($id){

        return Review::where('product_id', $id)->average('rate');
    }



    public function index()
    {
        $setting = Setting::first();

        $slider1 = Haber::where('id', 41)->select('id','title','image','type','slug','description')->first();
        $slider2 = Haber::where('id', 42)->select('id','title','image','type','slug','description')->first();
        $slider3 = Haber::where('id', 43)->select('id','title','image','type','slug','description')->first();
        $slider4 = Haber::where('id', 44)->select('id','title','image','type','slug','description')->first();

        $popular = Haber::select('id','title','image','type','slug')->limit(6)->inRandomOrder()->get();
        $last = Haber::select('id','title','image','type','slug')->limit(6)->orderByDesc('id')->get();
        $news = Haber::select('id','title','image','type','slug','description')->limit(10)->inRandomOrder()->get();



        $data = [
            'setting'=>$setting,
            'slider1'=>$slider1,
            'slider2'=>$slider2,
            'slider3'=>$slider3,
            'slider4'=>$slider4,
            'popular'=>$popular,
            'last'=>$last,
            'news'=>$news,
            'page'=>'home'

        ];

        return view('home.index',$data);
    }

    public function haber($id)
    {
        $data = Haber::find($id);
        $datalist = Image::where('product_id', $id)->get();
        $reviews = \App\Models\Review::where('haber_id', $id)->get();
        return view('home.haber_detail',['data'=> $data,'datalist'=>$datalist, 'reviews' => $reviews]);
    }

    public function gethaber(Request $request)
    {
        $search = $request->input('search');
        $count = Haber::where('title','like','%'.$search.'%')->get()->count();
        if ($count == 1)
        {
            $data = Haber::where('title','like','%'.$search.'%')->first();
            return redirect()->route('haber',['id'=>$data->id, 'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('haberlist',['search'=>$search]);
        }

    }

    public function haberlist($search)
    {
        $datalist = Haber::where('title','like','%'.$search.'%')->get();

        return view('home.search_haber',['search'=>$search, 'datalist'=>$datalist] );
    }

    public function categoryhaber($id, $slug)
    {
        $datalist = Haber::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_haber',['data'=> $data,'datalist'=>$datalist]);
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();
        return redirect(route('contact'))->with('success', 'Mesajınız Kaydedilmiştir');
    }



    public function login()
    {
        return view('admin.login');
    }


    public function logincheck(Request $request)
    {
        if( $request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
