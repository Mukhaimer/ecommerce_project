<?php

namespace App\Http\Controllers\Enduser;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('enduser.wishlist', compact('wishlist'));
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
        //
        $prod_id = $request->input('product_id');
        if (Product::find($prod_id)) {
            $wish = new Wishlist();
            $wish->prod_id = $prod_id;
            $wish->user_id = Auth::id();
            $wish->save();
            return redirect(route('wishlist.index'))->with('status', 'product added to wishlist');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($prod_id)
    {
        //
        if (Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
            $Wishlistitem = Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
            $Wishlistitem->delete();
            return redirect()->back();
        }
    }
}
