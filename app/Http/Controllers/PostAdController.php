<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostAdRequest;
use App\Models\PostAd;
use Exception;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;

class PostAdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = PostAd::all();

        return view('admin.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.ads.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostAdRequest $request)
    {
        $data = $request->validated();
        $data['Image'] = $request->file('Image')->store('Image');
        PostAd::create($data);
        return redirect()->back()->with('message', 'Ad requested successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.ads.index');
    }


    public function approve(Request $request, PostAd $ad)
    {

        $ad->update(['approval' => true]);

        return redirect()->back()->with('success', 'Ad approved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostAd $postAd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostAd $postAd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostAd $ad)
    {
        Storage::delete($ad->Image);
        $ad->delete();
        return redirect('admin/Ads')->with('success','Deleted successfully!');
    }

    
}