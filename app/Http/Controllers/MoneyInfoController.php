<?php

namespace App\Http\Controllers;

use App\Models\MoneyInfo;
use Illuminate\Http\Request;

class MoneyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return MoneyInfo[] \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return MoneyInfo::orderBy('month')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $money = new MoneyInfo([
            'month' => $request->input('month'),
            'money' => $request->input('money'),
            'category' => $request->input('category'),
            'detail' => $request->input('detail'),
            'memo' => $request->input('memo'),   
        ]);
        $money->save();

        return redirect('/test');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MoneyInfo  $moneyInfo
     * @return \Illuminate\Http\Response
     */
    public function show(MoneyInfo $moneyInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MoneyInfo  $moneyInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(MoneyInfo $moneyInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MoneyInfo  $moneyInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MoneyInfo $moneyInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MoneyInfo  $moneyInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MoneyInfo $moneyInfo)
    {
        //
    }
}
