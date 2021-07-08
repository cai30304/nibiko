<?php

namespace App\Http\Controllers;

use App\Banners;
use App\ContactUs;
use App\News;
use App\Products;
use App\ProductsType;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        $banners = Banners::orderBy('sort','desc')->get();
        $all_news = News::orderBy('sort','desc')->take(4)->get();
        $productTypes = ProductsType::orderBy('sort','desc')->get();
        return view('front.index',compact('banners','all_news','productTypes'));
    }

    public function news($id) {
        $news = News::find($id);
        return view('front.news',compact('news'));
    }

    public function Types($id) {
        $type = ProductsType::find($id);
        $products = Products::where('type',$type->id)->orderBy('sort','desc')->get();
        return view('front.product',compact('type','products'));
    }

    public function Products($id) {
        $product = Products::find($id);
        return view('front.productDetail',compact('product'));
    }

    public function contact_us(Request $request) {
        // $validate = Validator::make(Input::all(), [
        //     'g-recaptcha-response' => 'required|captcha'
        // ]);
        ContactUs::create($request->all());
        return redirect('/');
    }
}
