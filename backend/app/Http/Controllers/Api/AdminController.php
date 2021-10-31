<?php

namespace App\Http\Controllers\Api;

use App\User;
use Validator;
use Carbon\Carbon;
use App\Helpers\Utils;
use App\Models\Product;
use Faker\Provider\Image;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public $successStatus = 200;
        /** 
    * get list of users - only administrator 
    * @return \Illuminate\Http\Response 
    */
    public function getUsers() 
    { 
       $user = Auth::user(); 
       if($user['role'] == 5){
         return response()->json(['ok' => User::all()], $this-> successStatus); 
       }else{
         return response()->json(['error'=>'Unauthorised'], 401); 
       }
    } 

        /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function createUser(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'role' => 'required', 
        ]);
        
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['password'] = bcrypt(Utils::randomString()); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
       return response()->json(['success'=>$success], $this-> successStatus); 
    }

    

    /* create product  */ 
    public function createProduct(Request $request) {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'category_id' => 'required|numeric',
        ]);
        
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
    	else{

          $product = $request->all();
          $product['uid'] = substr(sha1($product['category_id']), 0, 8).'_'. substr(md5(uniqid()), 0, 15);
          $product['image'] = $product['uid'].'.'.$request->image->getClientOriginalExtension();
          $product['store_uid'] = 'TEST';
          
          $product=Product::create($product);
          if($product->id > 0){
            Utils::uploadFile($request->image, 'images/products', $product->image);
          }
         
          return response()->json(['success'=>$product], $this-> successStatus); 
        }
       
    }
    public function createProducts(Request $request) {
         $products=  $request['products'];
         $records= 0 ; $duplicates= 0;  $warnings= 0;

        foreach ($products as $data) {

            $validator = Validator::make($data, [ 
                'name' => 'required',
                'description' => 'required',
                'regular_price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'category_id' => 'required|numeric',
            ]);
            
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 401);            
            }
            else{
    
              $product = $data;
              $product['uid'] = substr(sha1($product['category_id']), 0, 8).'_'. substr(md5(uniqid()), 0, 15);
              $product['image'] = $product['uid'].'.'.$request->image->getClientOriginalExtension();
              $product['store_uid'] = 'TEST';
              
              $product=Product::create($product);
              if($product->id > 0){
                Utils::uploadFile($request->image, 'images/products', $product->image);
              }
              $records++;
            }

        }
        return response()->json(['records'=>$records.' / '.$products->count()], $this-> successStatus); 
       
    }

    public function addProductColor(Request $request) {
        $validator = Validator::make($request->all(), [ 
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'product_id' => 'required|numeric',
            'title' => 'required',
            'content' => 'required',
            'price' => 'required|numeric',
        ]);
        
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
    	else{
            $product= Product::find($request['product_id']);
            if($product){
                $data =  $request->all();
                $data['image'] = $product->uid.'_'. substr(md5(uniqid()), 0, 12).'.'.$request->image->getClientOriginalExtension();
                $data['type'] = 'image';
                $color = ProductColor::create($data);
               if ($color) {
                 $request->image->move(public_path('images/products/'.$product->uid), $data['image']);
               }
               return response()->json(['success'=> 'Ok', 'product'=>$product, 'color'=>$color ], $this-> successStatus);
            }else{
                return response()->json(['error'=>'Not found'], 401);  
            }
        }
       
    }

    public function addProductColors(Request $request) {
        $colors=  $request['colors'];
        $success = 0;
        $error = 0;
        foreach ($colors as $color) {
           

            $validator = Validator::make($color, [ 
                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'product_id' => 'required|numeric',
                'title' => 'required',
                'content' => 'required',
                'price' => 'required|numeric',
            ]);
            
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 401);            
            }
            else{
                $product= Product::find($color['product_id']);
                if($product){
                    $data =  $color;
                    $data['image'] = $product->uid.'_'. substr(md5(uniqid()), 0, 12).'.'.$request->image->getClientOriginalExtension();
                    $data['type'] = 'image';
                    $color = ProductColor::create($data);
                   if ($color) {
                     $request->image->move(public_path('images/products/'.$product->uid), $data['image']);
                   }
                   $success++;
                }else{
                   $error++;
                }
            }

        }
      
        return response()->json(['success'=> $success, 'error'=>$error], $this-> successStatus);
       
    }


    public function test(Request $request){
        $response =[];
        $colors=  $request['colors'];
        foreach ($colors as $color) {
            $response[] = $color['name'];
        }
        return $response;
    }
    public function createProductColors(Request $request)
    {
       $files = $request->file('uploads');
       if(!empty($files)) {
           foreach($files as $file) {
               Storage::put($file-getClientOriginalName(),file_get_contents($file));
           }
        }
    }


    // public function createProduct2(Request $request){
    //     if($request->image){
    //         //$filename = substr( md5( $student->id . '-' . time() ), 0, 15) . '.' . $request->file('image')->getClientOriginalExtension();
    //         $filename = $student->id.'-'.substr( md5( $student->id . '-' . time() ), 0, 15) . '.jpg'; // for now just assume .jpg : \
    //         $path = public_path('images/products/' . $filename);
    //         Image::make($request->image)->orientate()->fit(500)->save($path);

    //         // now update the photo column on the student record
    //         $student->photo = $filename;
    //         $student->save();
    //     }
    // }


    
}
