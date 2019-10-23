<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service;
use App\Catservice;
use App\OtherService;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class ServiceController extends Controller

{
    function __construct()
    {
         $this->middleware('permission:service-page', ['only' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $service = Service::all();
        $cari = $request->cari;
        if ($cari) {
            $service = Service::where('title', 'LIKE', "%$cari%")->paginate(5);
        }
        return view('admin.service.index', compact('service'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catservice = Catservice::all();
        $otherservice = OtherService::all();
        return view('admin.service.create', compact('catservice', 'otherservice'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $service = new Service();
       if ($request->hasFile('image')){
           $file = $request->file('image');
           $path = public_path().
                           '/assets/img/service/';
           $filename = str_random(6).'_'
                       .$file->getClientOriginalName();
           $uploadSuccess = $file->move(
               $path,
               $filename
           );
           $service->image = $filename;
       }
       $service->title = $request->title;
       $service->desc = $request->desc;
       $service->catservice_id = $request->catservice;
       $service->save();
       Session::flash("flash_notification", [
        "level" => "success",
        "message" => "<b>$service->title</b> Service Saved Successfully!"
    ]);
       $service->otherservice()->attach($request->otherservice);
       return redirect()->route('service.index');    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $catservice = Catservice::all();
        $otherservice = OtherService::all();
        $selected = $service->otherservice->pluck('id')->toArray();
        return view('admin.service.edit', compact('service', 'selected', 'catservice', 'otherservice'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $service = Service::findOrFail($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '/assets/img/service';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus image lama jika ada
            if ($service->image) {
                $old_image = $service->image;
                $filepath = public_path() .
                    '/assets/img/service/' .
                    $service->image;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $service->image = $filename;
        }
        $service->title = $request->title;
        $service->desc = $request->desc;
        $service->catservice_id = $request->catservice;
        $service->save();
        $service->otherservice()->sync($request->otherservice);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Edited Service Successfully became <b>$service->title</b>!"
        ]);
        return redirect()->route('service.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $service = Service::findOrFail($request->id);
        if ($service->image) {
            $old_image = $service->image;
            $filepath = public_path() . '/assets/img/service/' . $service->image;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }
        $service->otherservice()->detach($service->id);
        $service->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Deleted service Successfully!"
        ]);
        return redirect()->route('service.index');
    }
}