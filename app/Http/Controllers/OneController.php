<?php
/**
 * Created by PhpStorm.
 * User: 15770
 * Date: 2018/2/6
 * Time: 9:45
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Helpers\Err;
use App\Helpers\Util;
use Exception;
use Illuminate\Support\Facades\DB;
use Log;

class OneController extends BaseController
{
    public function index(){
        try {
//            $res = DB::table('user')->get();
            $res = [
                [
                    "id" => 716,
                    "price" => "96.000000",
                    "FK_product_id" => 521,
                    "stock" => 34,
                    "sales_amount" => 19,
                    "FK_sale_product_id" => 716,
                    "image" => "http =>//opd99zf54.bkt.clouddn.com/image/sale_product/2410100022/1516341587996.jpg,http =>//opd99zf54.bkt.clouddn.com/image/sale_product/2410100022/1516341588234.jpg",
                    "base_image" => "",
                    "priority" => 0,
                    "limit_buy" => 100,
                    "sale_price" => 96,
                    "spec_box" => "32.0",
                    "settlement_uom" => "斤",
                    "second_price" => 3,
                    "subtitle" => "",
                    "is_show_price" => 1,
                    "product_name" => "陕西膜袋富士80-85#塑箱毛重32-33斤",
                    "sale_uom" => "筐",
                    "spec_uom" => "斤",
                    "is_std" => 1,
                    "sale_qty_std" => 1,
                    "sale_qty" => "1.0",
                    "is_score" => 1,
                    "barcode" => "2410100022",
                    "amount" => "96.000000",
                    "thumbnail" => "http://opd99zf54.bkt.clouddn.com/image/sale_product/2410100022/1516341587996.jpg?imageView2/1/w/256/h/256/ignore-error/1/"
                ],
                [
                    "id"  =>  379,
                    "price"  =>  "104.000000",
                    "FK_product_id"  =>  160,
                    "stock"  =>  17,
                    "sales_amount"  =>  1,
                    "FK_sale_product_id"  =>  379,
                    "image"  =>  "http  => //opd99zf54.bkt.clouddn.com/image/sale_product/5410100001/1515835914717.jpg,http  => //opd99zf54.bkt.clouddn.com/image/sale_product/5410100001/1515835914905.jpg",
                    "base_image"  =>  "",
                    "priority"  =>  0,
                    "limit_buy"  =>  25,
                    "sale_price"  =>  104,
                    "spec_box"  =>  "28.0",
                    "settlement_uom"  =>  "斤",
                    "second_price"  =>  3.71,
                    "subtitle"  =>  "佳沃香蕉、品质保证",
                    "is_show_price"  =>  1,
                    "product_name"  =>  "佳沃菲律宾香蕉 4-6把 28斤",
                    "sale_uom"  =>  "箱",
                    "spec_uom"  =>  "斤",
                    "is_std"  =>  1,
                    "sale_qty_std"  =>  1,
                    "sale_qty"  =>  "1.0",
                    "is_score"  =>  1,
                    "barcode"  =>  "5410100001",
                    "amount"  =>  "104.000000",
                    "thumbnail"  =>  "http://opd99zf54.bkt.clouddn.com/image/sale_product/5410100001/1515835914717.jpg?imageView2/1/w/256/h/256/ignore-error/1/"
                ]
            ];
            Log::info('     '.__method__.'() line:'.__line__.'       $res= '.print_r($res, true));
            $this->ApiResponse($res, Err::$SUCCESS, '1', '数据获取成功');
        } catch (Exception  $e) {
            $this->ApiResponse('', Err::$ERROR, 0, Util::getExceptionMessage($e));
        }


    }
}