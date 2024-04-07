<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{  
    public function index()
    {
        $featured_products = Product::where('trending','1')->take(15)->get();
        $trending_category = Category::where('popular','1')->take(15)->get();
        return view('frontend.index', compact('featured_products', 'trending_category'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact_us');
    }

    public function category()
    {
        $category = Category::where('status','0')->get();
        return view('frontend.category', compact('category'));
    }

    public function viewcategory($slug)
    {
        if(Category::where('slug', $slug)->exists())
        {
            $category = Category::where('slug', $slug)->pluck('id','name');
            $products = Product::select('products.*', 'category.name as category_name')
                ->join('category', 'category.id', '=', 'products.cate_id')
                ->whereIn('products.cate_id', $category)
                ->get();

            $categoryNames = $products->pluck('category_name')->unique()->toArray();
            return view('frontend.products.index', compact('category','products','categoryNames'));
        }
        else
        {
            return redirect('/')->with('status',"Slug does not exists");
        }
    }

    public function productview($cate_slug, $id)
    {
        if(Category::where('slug', $cate_slug)->exists())
        {
            if(Product::where('id',$id)->exists())
            {
                $products = Product::where('id', $id)->first();
                return view('frontend.products.view', compact('products'));
            }
            else{
                return redirect('/')->with('status',"The link was broken");
            }
        }
        else{
            return redirect('/')->with('status',"No such category found");
        }
    }

}
