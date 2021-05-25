<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kakeibo;

class KakeiboController extends Controller
{
    public function create(Request $request){
        $money_info = new Kakeibo([
            'month' => $request->input('month'),
            'money' => $request->input('money'),
            'category' => $request->input('category'),
            'detail' => $request->input('detail'),
            'memo' => $request->input('memo'),   
        ]);
        // dd($month);
        $money_info->save();

        return redirect('/test');
    }
}
