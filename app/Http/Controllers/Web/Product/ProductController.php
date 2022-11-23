<?php

namespace App\Http\Controllers\Web\Product;

use DataTables;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	public function index()
    {
        return view('pages.welcome');
    }

    public function getListing(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="products/'.$row['id'].'" class="view btn btn-success btn-sm">View</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

	public function show(Product $product)
    {
		$category_product = CategoryProduct::select('category_id')->where('product_id' , $product->id)->first();
		if ($category_product) {
			$category = Category::where('id' , $category_product->category_id)->first();
		} else {
			$category = [];
		}
        return view('pages.single_product', [
			'category' => $category,
			'product' => $product
		]);
    }
}
