<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
class ProductController extends Controller
{
    public function index()
    {
        return view('Admin.product');
    }

    public function create( )
    {
       
        return view('Admin.productcreate');
    }

    public function store(ProductRequest $req)
    {
        if($req->isMethod('POST')){
            $orginalNameImage = $req->file('photo')->getClientOriginalName();
                    $imageName = explode('.', $orginalNameImage);
                    $imageFormat = $imageName['1'];
                    $firstPart = substr($imageName['0'], 0, 5);
                    $folderName = 'images/';
                    $newName = $folderName.time().'-'. $firstPart.'samgeeks'.'.'.$imageFormat;
                    $req->file('photo')->move(public_path('images'), $newName);

            $validatedData = $req->validated();

            $product = Product::create([
                'title' => $validatedData['title'],
                'slug' =>  $validatedData['slug'],
                
                'summary' =>  $validatedData['summary'],
                'description' =>  $validatedData['description'],
            // 'photo' => $validatedData['photo'],
                'stock' => $validatedData['stock'],
                'photo' => $newName,
                'price' =>  $validatedData['price'],
                'discount' =>  $validatedData['discount'],
                'is_featured' =>  '1',
            ]);

            if ($product) {
                return back()->with('success', 'Product created successfully');
            } else {
                return back()->with('failed', 'Product could not be created');
            }

        }

    }
}















        /*
        // Validation passed at this point
        // Access validated data from the $request
        $validatedData = $request->validated();

        $product = Product::create([
            'title' => $validatedData['title'],
            'slug' =>  $validatedData['slug'],
            
            'summary' =>  $validatedData['summary'],
            'description' =>  $validatedData['description'],
           // 'photo' => $validatedData['photo'],
            'stock' => $validatedData['stock'],
            'photo' => $validatedData['photo'],
            'price' =>  $validatedData['price'],
            'discount' =>  $validatedData['discount'],
        ]);

        if ($product) {
            return back()->with('success', 'Product created successfully');
        } else {
            return back()->with('failed', 'Product could not be created');
        }
        */