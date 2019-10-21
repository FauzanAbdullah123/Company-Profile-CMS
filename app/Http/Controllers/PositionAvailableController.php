<?php

namespace App\Http\Controllers;

use App\PositionAvailable;
use Illuminate\Http\Request;
use Session;
use Spatie\Activitylog\Models\Activity;

class PositionAvailableController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:positionavailable-page', ['only' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $positionavailable = PositionAvailable::all();
        $cari = $request->cari;
        if ($cari) {
            $positionavailable = PositionAvailable::where('judul', 'LIKE', "%$cari%")->paginate(5);
        }
        return view('admin.positionavailable.index', compact('positionavailable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.positionavailable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $positionavailable = new PositionAvailable();
        $positionavailable->title = $request->title;
        $positionavailable->desc = $request->desc;
        $positionavailable->save();
         Session::flash("flash_notification", [
        "level" => "success",
        "message" => "Saved Position Available Successfully <b>$positionavailable->title</b>!"
        ]);
        
       return redirect()->route('positionavailable.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PositionAvailable  $positionAvailable
     * @return \Illuminate\Http\Response
     */
    public function show(PositionAvailable $positionAvailable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PositionAvailable  $positionAvailable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positionavailable = PositionAvailable::findOrFail($id);
        return view('admin.positionavailable.edit', compact('positionavailable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PositionAvailable  $positionavailableAvailable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $positionavailable = PositionAvailable::findOrFail($id);
        $positionavailable->title = $request->title;
        $positionavailable->desc = $request->desc;
        $positionavailable->save();
         Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Edited Position Available Successfully <b>$positionavailable->title</b>!"
        ]);
        return redirect()->route('positionavailable.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PositionAvailable  $positionAvailable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $positionavailable = PositionAvailable::findOrFail($request->id);
        $positionavailable->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Deleted Position Available Successfully!"
        ]);
         return redirect()->route('positionavailable.index');  
    }
}
