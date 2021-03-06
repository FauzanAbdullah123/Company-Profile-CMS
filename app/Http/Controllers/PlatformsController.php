<?php

namespace App\Http\Controllers;

use App\Platforms;
use Validator;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use DataTables;

class PlatformsController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:platforms-page', ['only' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            return Datatables()->of(Platforms::latest()->get())
                    ->addColumn('action', function($data){
                        $btn = '<button type="button" name="edit" class="edit btn btn-primary btn-sm" id="'.$data->id.'"><i class="fa fa-edit"></i></button>';
                        $btn = $btn.' <button type="button" name="delete" class="delete btn btn-danger btn-sm" id="'.$data->id.'"><i class="fa fa-trash-o"></i></button>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.platforms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'platforms'  =>  'required',
            'percentage'   =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'platforms' =>  $request->platforms,
            'percentage'  => $request->percentage
        );

        Platforms::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Platforms::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {        
        $rules = array(
            'platforms'  =>  'required',
            'percentage'   =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'platforms' =>  $request->platforms,
            'percentage'  => $request->percentage
        );
        Platforms::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Platforms::findOrFail($id);
        $data->delete();
    }
}
