<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Product;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::paginate(10);
        return view('product',compact('data'));
    }

    public function create(Request $req)
    {
        $validated = $req->validate([
            //fields to validate
            'code'=> 'required|unique:products|max:5',
            'name'=> 'required|max:255',
            'category' => 'required'
        ], [
            'code.required' => 'Product code is required',
            'name.required' => 'Product name is required',
            'category.required' => 'Product category is required'
        ]);

        $prod = new Product;

        $prod->code = $req->code;
        $prod->name = $req->name;
        $prod->category = $req->category;
        $prod->brand = $req->brand;
        $prod->type = $req->type;
        $prod->description = $req->description;

        if ($prod->save()) {
             return redirect ('/')->with('success', 'Successfully create new product');
        }
        else
        {
            return redirect('/')->with('error','Failed to create product. Code existed.');
        }
    }

    function getprod(Request $req, $id)
    {
        $data = Product::where('id', $id)->firstOrFail();


        return view('editproduct',['product'=>$data]); //product = variable
    }

    function editprod(Request $req)
    {
        DB::table('products')->where('id', $req->rid)
        ->update(array(
            'code' => $req->code,
            'name' => $req->name,
            'category' => $req->category,
            'brand' => $req->brand,
            'type' => $req->type,
            'description' => $req->description
        ));

        return redirect ('/')->with('success', 'Successfully Updated');
    }
}