<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Signifly\Shopify\Shopify;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $shopify = new Shopify(
    //         env('e39be36f220f401f30f6cf36169d9b93'),
    //         env('1489e1e95cd5c746c2ccc8f33a9fe0f1'),
    //         env('https://editions-demo.myshopify.com'),
    //         env('2021-01')
    //     );
    //     return $shopify;

    // }
    public function index(Request $request, Shopify $shopify)
    {
        $shopify = app('shopify');
        $test = $shopify->get('metafields.json');
        return $test;
	}
}
