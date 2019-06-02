<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($product = Product::create($request->all())) {
            Product::where('product_id', $product->product_id)
            ->update(['photo' => $request->image->storeAs('photos', $product->product_id.'/product-'.$product->product_id.'.jpg', 'uploads')]);
            return 'true';
        }

        return 'false';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // http://localhost:8000/api/products?page=1&orderColumn=created_at&orderBy=desc&perPage=3

    public function products(Request $request)
    {
        $products = Product::orderBy($request->orderColumn, $request->orderBy)->get();
        $data = [];
        foreach ($products as $value) {
            $data[] = $value;
        }
        $currentPage = $request->page;
        $perPage = $request->perPage;
        $currentItems = array_slice($data, $perPage * ($currentPage - 1), $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($data), $perPage, $currentPage);
        return $paginator->appends('filter', request('filter'));
    }

    // http://localhost:8000/api/products/1

    public function product($id)
    {
        return Product::where('product_id', $id)->first();
    }
}
