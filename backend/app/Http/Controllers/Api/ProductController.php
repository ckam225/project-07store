<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductSize;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductFeature;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public $successStatus = 200;
    
    /* get all categories with products */
    public function getCatalog(){
        $response=Category::with('products')->get();
        return response()->json($response, $this-> successStatus); 
    }

    

    /* get list categories */
    public function getCategories(){
        $response=Category::all();
        return response()->json($response, $this-> successStatus); 
    }

    /* get all products by category */
    public function getProductByCategory($id){
        if (Category::where('id', $id)->first()) { 
            $response= Product::where('category_id', $id)->take(10)->get();     
            return response()->json($response, $this-> successStatus);         
        }
        return response()->json(['error'=> "Not found"], 401);     
    }

    /* get  products by id */ 
    public function getProductById($id){
       $product = Product::with(['category','colors','sizes','features'])->find($id);
       if ($product) { 
           return response()->json($product, $this->successStatus); 
        }
        else{
          return response()->json(['error'=> "Not found"], 401);    
        }
    }

    public function getProductByUId($uid){
        $product = Product::with(['category','colors','sizes','features'])->where('uid',$uid);
        if ($product) { 
            return response()->json($product, $this->successStatus); 
         }
         else{
           return response()->json(['error'=> "Not found"], 401);    
         }
     }
     public function search($keyword){
        $products = Product::where('name', 'LIKE', '%'.$keyword.'%')
                            ->orWhere('description', 'LIKE', '%'.$keyword.'%')
                            ->get();
     }


}
