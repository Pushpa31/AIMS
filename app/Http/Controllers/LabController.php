<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lab;

class LabController extends Controller
{
    public function show(){
    	$labreport=lab::paginate(5);
    	return view('lab',['lab'=>$labreport]);
    }

 public function create()
    {
    	return view('addlab');
    }
    public function store()
    {
    	$fileName = request('name') . rand(0,99) . '.' .request()->file('file')->getClientOriginalExtension();

        $file = request()->file('file')->storeAs('upload/file/', $fileName);
        $la=new lab;
        $la->subject = request('subject');
        $la->title = request('title');
        $la->class = request('class');
        $la->number = request('number');       
        $la->teacher= request('teacher');
        $la->filebrowser=$fileName;

        $la->save();
        return redirect('/lab');

    }
     public function edit($id)
    {
    $la = lab::find($id);
    return view('editlab',['lab'=>$la]);
    }

     public function update($id)
    {
         $la = lab::find($id);

        $fileName = request('name') . rand(0,99) . '.' .request()->file('file')->getClientOriginalExtension();

        $file = request()->file('file')->storeAs('upload/file/', $fileName);
        
        $la->subject = request('subject');
        $la->title = request('title');
        $la->class = request('class');
        $la->number = request('number');       
        $la->teacher= request('teacher');
        $la->filebrowser=$fileName;
        $la->save();
        return redirect('/lab');
    }

 public function destroy($id)
    {
     lab::where('id',$id)->delete();
     return redirect('/lab');
     
    }
}
