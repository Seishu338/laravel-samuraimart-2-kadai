<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required'
        ]);

        $review=new Review();
        $review->content=$request->input('content');
        $review->user_id=Auth::user()->id;
        $review->product_id=$request->input('product_id');
        $review->score=$request->input('score');
        $review->save();

        return back();
    }


}
