<?php

namespace App\Http\Controllers\Api;

use App\ProductReturn;
use App\WechatOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReturnController extends Controller
{
    //
    public function storeReturn(Request $request,$id)
    {
        $follow = session()->get('wechat.oauth_user');
        $order = WechatOrder::findOrFail($id);
        $openid = $follow->id;
        $reason_return = new ProductReturn();
        $reason_return->openid = $openid;
        $reason_return->order_id = $id;
        $reason_return->order_amount = $order->order_amount;
        $reason_return->reason_return = $request->reason_return;
        $reason_return->content = $request->cause;
        $reason_return->ship_name = $request->ship_name;
        $reason_return->ship_number = $request->ship_number;
        if ($reason_return->save()){
            return response()->json([
                'code' => 0,
                'message' => '申请售后成功！'
            ]);
        }else{
            return response()->json([
                'code' => -1,
                'message' => '申请售后失败！'
            ]);
        }
    }
}
