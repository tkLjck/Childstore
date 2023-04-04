<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('trending', '1')->take(16)->get();
        $trending_category = Category::where('popular', '1')->take(8)->get();
        return view('frontend.index',compact('featured_products', 'trending_category'));
    }

    public function category()
    {
        $category = Category::where('status','1')->get();
        return view('frontend.category',compact('category'));
    }

    public function viewcategory($slug)
    {
        if(Category::where('slug', $slug)->exists())
        {
           $category =  Category::where('slug', $slug)->first();
           $products = Product::where('cate_id', $category -> id)->where('status', '1')->get();
           return view('frontend.products.index', compact('category','products'));
        }
        else{
            return redirect('/')->with('status',"Slug không tồn tại");
        }
    }
    public function productview($cate_slug, $prod_slug)
    {
        if(Category::where('slug', $cate_slug)->exists())
        {
            if(Product::where('slug', $prod_slug)->exists())
            {
                $products = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.view', compact('products'));
            }
            else
            {
                return redirect('/')->with('status',"Trang không tồn tại");
            }
        }
        else
        {
            return redirect('/')->with('status',"Danh mục không tồn tại");
        }

    }
}
