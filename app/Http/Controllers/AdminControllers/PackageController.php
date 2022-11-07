<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;
use App\Packages_catogeries;

use Session;

class PackageController extends Controller
{
    public function index()
    {
         $Packages = Package::all();
        return view('packages.index',compact('Packages'));
    }

   
    public function create()
    {
        $pc = Packages_catogeries::all();
        return view('packages.add',compact("pc"));
    }
    public function store(Request $request)
    {
            //dd($request->all());
            $this->validate($request,[
                'title'=> 'required',
                'catogery_id' => 'required', 
                'price'=> 'required',
                'duration' => 'required'
            ]);
            
            $saveResult = Package::create([
                'title' => $request->title,
                'price' => $request->price,
                'type' => $request->type,
                'catogery_id' => $request->catogery_id,
                'duration' => $request->duration,
                'spotlights' => $request->spotlights,
                'lovenotes' => $request->lovenotes,
                'options' => json_encode($request->options),
                'description' => $request->description,
              ]);
            session::flash('success','Record Uploaded Successfully');
            return redirect('admin/packages')->with('success','Record Uploaded Successfully');
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $pc = Packages_catogeries::all();
        $package = Package::find($id);
        //dd($package);
        return view('packages.edit')->with(['package'=> $package,"pc" => $pc]);
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'catogery_id' => 'required', 
            'price'=> 'required',
            'duration' => 'required'
        ]);
        $product = Package::find($id);
        $updateProduct = Package::where('id', '=', $id)->update(
            [
                'title' => $request->title,
                'type' => $request->type,
                'price' => $request->price,
                'catogery_id' => $request->catogery_id,
                'duration' => $request->duration,
                'spotlights' => $request->spotlights,
                'lovenotes' => $request->lovenotes,
                'options' => json_encode($request->options),
                'description' => $request->description,
            ]
        );
        
        if($updateProduct){
            return back()
                ->with('success','Record Updated Successfully');
            }else{
            return back()
                ->with('error','Record is not Updated');         	
            }
    }

   
    public function destroy($id)
    {
        Package::find($id);
        $package->delete();
        session::flash('success','Record has been deleted Successfully');
        return redirect('admin/packages');
    }
}
