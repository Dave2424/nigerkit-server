<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;

class BannersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(BannerRequest $request)
    {
//        dd($request->file('files'));
        if ($request->validated()) {
            $banner = $request->validated();
            if (!is_null($banner['files'])) {
                    //upload image and add link to array
                    $path = '/storage'.HelperController::processImageUpload($banner['files'],  'image','banners',840,395);
                $banner['pictures'] = $path;
            }
            Banners::create($banner);
        }
        return back()->withStatus(__('Uploaded successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function show(Banners $banners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function edit(Banners $banners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banners $banners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banners $banners)
    {
        //
    }
}
