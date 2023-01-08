<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DataTunggal;

class DataTunggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlah=5;
        if(strlen($katakunci)){
        $data = DataTunggal::where('data','like',"%$katakunci%")
        ->paginate($jumlah);

        }else{
            $data = DataTunggal::orderBy('data')->paginate($jumlah);
        }
       
        return view('admin.DataTunggal')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'data'=>$request->data
        ];
        DataTunggal::create($data);
        return redirect()->to('DataTunggal');
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
        $data = DataTunggal::where('data',$id)->first();
        return view('admin.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'data'=>$request->data
        ];
        DataTunggal::where('data',$id)->update($data);
        return redirect()->to('DataTunggal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataTunggal::where('data',$id)->delete();
        return redirect()->to('DataTunggal');
    }
}
