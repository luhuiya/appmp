<?php

namespace onestopcore\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use onestopcore\Product;
use onestopcore\ProductImage;
use onestopcore\Prdposition;
use onestopcore\Category;
use onestopcore\SubCategory;
use onestopcore\Http\Controllers\Controller;

class ApiHomeController extends Controller
{
    /**
     * Show all products.
     * 
     * @return Response
     */
    public function getHome(){

        $categories = Category::all();
        foreach($categories as $category){

            $products = Product::where('category_id', $category->id)->get();
            foreach($products as $product){
                foreach($product->images as $image){
                    $source = url('/').'/storage/'.$image->image;
                    $default = url('/').'/storage/default.png';
                    $filename = public_path().'/storage/'.$image->image;
                    
                    if (file_exists($filename)) {
                        $image->image_url = $source;
                    } else {
                        $image->image_url = $default;
                    }
                }                
                $images = $product->images;
                $positions = $product->positions;
                $subcategory =  $product->subcategory;
                $reviews = $product->reviews;
                $rating = $product->rating;
                $preview = $product->previews;
                // foreach($reviews as $review){
                //     $rating += $review->rating;
                // }
                
            }
            $category->products = $products;
        }

        return $categories;
    }

    /**
     * Show all products in specific category.
     * 
     * @return Response
     */
    public function getCategoryProducts($id, $page = 0){

        $subcategories = SubCategory::where('category_id', $id)->get();

        foreach($subcategories as $subcategory){

            $products = Product::where('sub_category_id', $subcategory->id)->get();
            foreach($products as $product){
                foreach($product->images as $image){
                    $source = url('/').'/storage/'.$image->image;
                    $default = url('/').'/storage/default.png';
                    $filename = public_path().'/storage/'.$image->image;
                    
                    if (file_exists($filename)) {
                        $image->image_url = $source;
                    } else {
                        $image->image_url = $default;
                    }
                }                
                $images = $product->images;
                $images = $product->images;
                $positions = $product->positions;
                //$subcategory =  $product->subcategory;
            }
            $subcategory->products = $products;
        }

        return $subcategories;
    }
}