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


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request, Shopify $shopify)
    {
        $shopify = app('shopify');
        $metafield = $shopify->getMetafields();
        $product = $shopify->getProducts();

        //blackdress
        $productId ='7155516997808';
        // $metafield = $shopify->getProductMetafields($productId);
        // $createmetafield = $shopify->createProductMetafield($productId,[

        //         'name' => 'testB',
        //         'namespace' => 'testB',
        //         'key'       => 'testB',
        //         'value'     => 'testB',
        //         'type'      => 'multi_line_text_field',
        //         'ownerType' =>'PRODUCT'

        // ]);
        // $getMetafield = $shopify->getProductMetafields($productId);
        $metafieldID = '21845395734704'; //testB
        // $deleteMetafield = $shopify->deleteMetafield($metafieldID);
        $updateMetafield = $shopify->updateMetafield($metafieldID,[

            'value'     => 'testC',
            'type'      => 'single_line_text_field'
    ]);
        return $updateMetafield;
	}
}
