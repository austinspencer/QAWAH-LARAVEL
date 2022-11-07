<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Packages_catogeries;
use Session;
use Illuminate\Support\Str;

class Package_catogeriesController extends Controller
{
    //
    public function index()
    {
        $list = Packages_catogeries::all();
        return view('Package_catogeries.index',compact('list'));
    }

    public function add()
    {
        return view('Package_catogeries.add');
    }
    
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|min:3',
        ]);
        $request["slug"] = Str::slug($request->title,"_");
        Packages_catogeries::create($request->except("_token"));
        return back()->with('success','Record Created Successfully');
    }
    public function edit($id)
    {
        $row = Packages_catogeries::find($id);
        return view('Package_catogeries.edit',compact('row'));
    }
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required|min:3',
        ]);
        Packages_catogeries::create($request->except("_token"));
        Packages_catogeries::where("id",$id)->update($request->except("_token"));
        return back()->with('success','Record Updated Successfully');
    }
    public function destroy($id)
    {
        Packages_catogeries::where("id",$id)->delete();
        Session::flash('success','Record has been deleted Successfully');
        return redirect('admin/packages-catogeries');
    }


}
