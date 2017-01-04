<?php

namespace App\Http\Controllers;

use App\add;
use Illuminate\Http\Request;

class home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$datas = add::getAllorg();

   $list = new add();
        $datas = $list::paginate(5);
        //print_r($datas);die();
        return view('org_list',compact('datas'));
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

        {
            $add = new add();
            $name = $request['name'];
            $add->name = $name;
            $add->category = $request['category'];
            $add->detail = $request['detail'];
            $add->location = $request['location'];
            $add->contact = $request['contact'];
            $add->created_at = time();
            $add->updated_at = time();

            $image1 = $request->file('image');

//            print_r($image1);die();
            if($image1->isValid()){
                $ext = $image1->getClientOriginalExtension(); //jpg
                $path1 = public_path() .'/uploads/pic/';
                $filename1 = $name.rand(111,999).'.'.$ext;
                $image1->move($path1 , $filename1);
            }
            $add->image = $filename1;

            $add->save();

            if($add->save()){
                return redirect()->route('org_list')->with('message', 'Your oraganization has been successfully added');
            }else{
                return view('error.503');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $orgview1 = add::find($id);
        //print_r($orgview1);die();
        return view('orgview',compact('orgview1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = add::find($id);
//        print_r($viewproduct);die();
        return view('edit',compact('view'));
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
        {
            //
            $update = add::find($id);
            $update->name = $request['name'];
            $update->category = $request['category'];
            $update->detail = $request['detail'];
            $update->location = $request['location'];
            $update->contact = $request['contact'];
            $update->updated_at = time();

//        print_r($updateproduct);die();

            $image = $request->file('image');

            if($image->isValid()){
                $ext = $image->getClientOriginalExtension(); //jpg.png.gif
                $path = public_path().'/uploads/pic/';
                $filename = $request['name'].rand(111,999).'.'.$ext;
                $image->move($path , $filename);
            }
            $update->image = $filename;

            $update->save();

            if($update->save()){
                return redirect()->route('org_list')->with('message', 'Your post is been successfully updated');
            }else{
                return view('error.503');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = add::find($id);

        $delete->delete();
        //print_r($delete);die();
        return redirect()->route('org_list')->with('delete', ''.$delete->name.' is been deleted Successfully.');
    }

}
