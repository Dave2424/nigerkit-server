<?php

namespace App\Http\Controllers;

use App\Banner_sr;
use App\Banners;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\PhoneRequest;
use App\Phone;
use Illuminate\Http\Request;
use Storage;

class BannersController extends Controller
{

    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $banners = Banners::paginate(10);
        return view('settings.banner.index', ['banners' =>$banners]);
    }
    
    public function create(){
        return view('settings.banner.create');
    }

    public function store(BannerRequest $request){
        // dd($request);
        if ($request->validated()) {
            $banner = $request->validated();
            if (!is_null($banner['files'])) {
                $path = 'storage'.HelperController::processImageUpload($banner['files'],  'image','banners',395,840);
                $banner['pictures'] = $path;
            }
            Banners::create([
                "title"=>$request['title'],
                "pictures"=>$banner['pictures'],
                "details"=>$request['details'],
            ]);
        }
        return redirect()->route('banner.index')->withStatus(__('Uploaded successfully.'));
    }

    public function edit($banner_id){
        $banner = Banners::findOrFail($banner_id);
        return view('settings.banner.edit', compact('banner'));
    }
    
    public function update(Request $request, $banner_id){
        $banner = Banners::findOrFail($banner_id);
        $file = $request->file('files');

        if (!is_null($file)) {
            $path = 'storage'.HelperController::processImageUpload($file,  'image','banners',395,840);
            $banner['pictures'] = $path;
            Storage::delete($banner->pictures);
        }

        $banner->update([
            "title"=>$request['title'],
            "pictures"=>$banner['pictures'],
            "details"=>$request['details'],
        ]);

        return redirect()->route('banner.index')->withStatus(__('Banner successfully updated.'));
    }
    
    public function destroy($banner_id){
        $banner = Banners::findOrFail($banner_id);
        Storage::delete($banner->pictures);
        $banner->delete();
        return redirect()->route('banner.index')->withStatus(__('Banner successfully deleted.'));
    }



    public function store_other(BannerRequest $request){
        if ($request->validated()) {
            $banner = $request->validated();
            if (!is_null($banner['files'])) {
                    //upload image and add link to array
                    $path = 'storage'.HelperController::processImageUpload($banner['files'],  'image','banners',170,1110);
                $banner['pictures'] = $path;
            }
            Banner_sr::create($banner);
        }
        return back()->withStatus(__('Uploaded successfully.'));
    }




    public function addphone(PhoneRequest $request)
    {
        //        dd($request->file('files'));add-phone
        if ($request->validated()) {
            $phone = $request->validated();
            Phone::create($phone);
        }
        return back()->withStatus(__('Uploaded successfully.'));
    }
}
