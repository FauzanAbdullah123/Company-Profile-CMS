<?php

namespace App\Http\Controllers;

use App\OtherService;
use Validator;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use DataTables;

class OtherServiceController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:other-page', ['only' => ['index','show']]);
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
            return Datatables()->of(OtherService::latest()->get())
                    ->addColumn('action', function($data){
                        $btn = '<button type="button" name="edit" class="edit btn btn-primary btn-sm" id="'.$data->id.'"><i class="fa fa-edit"></i></button>';
                        $btn = $btn.' <button type="button" name="delete" class="delete btn btn-danger btn-sm" id="'.$data->id.'"><i class="fa fa-trash-o"></i></button>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.otherservice.index');
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
         $rules = array(
            'image'    =>  'required|image|max:2048',
            'title'     =>  'required',
            'desc'         =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('/assets/img/otherservice/'), $new_name);

        $form_data = array(
            'image'        =>  $new_name,
            'title'         =>  $request->title,
            'slug'          => str_slug($request->title),
            'desc'          => $request->desc
        );

        OtherService::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OtherService  $otherService
     * @return \Illuminate\Http\Response
     */
    public function show(OtherService $otherService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OtherService  $otherService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         if(request()->ajax())
        {
            $data = OtherService::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OtherService  $otherService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $rules = array(
                'image'         =>  'image|max:2048',
                'title'    =>  'required',
                'desc'     =>  'required'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/img/otherservice/'), $image_name);
        }
        else
        {
            $rules = array(
                'title'    =>  'required',
                'desc'     =>  'required'
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }

        $form_data = array(
            'image'            =>   $image_name,
            'title'       =>   $request->title,
            'slug'        =>   str_slug($request->title),
            'desc'        =>   $request->desc
        );
        OtherService::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OtherService  $otherService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $otherservice = OtherService::withCount('Service')->get();
        foreach($otherservice as $row){
            if(($row->id == $id) && $row->service_count > 0){
                $response = [
                    'error' => 'error',
                    'type' => 'error',
                    'message' => 'Other Service cannot be deleted<br>because it still has active services'
                ];
                return response()->json($response, 200);
            }
        }
        \DB::table('other_services')->delete($id);
        $response = [
            'success' => 'success',
            'type' => 'success',
            'title' => 'success',
            'message' => 'category service successfully deleted'
        ];
        return response()->json($response, 200);
    }
}