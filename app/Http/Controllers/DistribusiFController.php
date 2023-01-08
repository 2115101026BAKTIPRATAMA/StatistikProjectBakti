<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DistribusiF;

class DistribusiFController extends Controller
{
    public function index(Request $request)
    {

        $katakunci = $request->katakunci;
        $jumlah=5;
        if(strlen($katakunci)){
        $data = DistribusiF::where('data','like',"%$katakunci%")
        ->paginate($jumlah);

        }else{
            $data = DistribusiF::orderBy('data')->paginate($jumlah);
        
        }
        return view('admin.DistribusiFrekwensi')->with('data',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createF');
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
            'data'=>$request->data,
            'Frekuensi'=>$request->frekuensi
        ];
        DistribusiF::create($data);
        return redirect()->to('DistribusiF');
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
        $data = DistribusiF::where('data',$id)->first();
        return view('admin.editF')->with('data',$data);
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
            'data'=>$request->data,
            'Frekuensi'=>$request->frekuensi
        ];
       DistribusiF::where('data',$id)->update($data);
        return redirect()->to('DistribusiF');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //    DistribusiF::where('data',$id)->delete();
    //     return redirect()->to('DistribusiF');
    // }
}
