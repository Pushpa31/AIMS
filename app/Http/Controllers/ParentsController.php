<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parents;

class ParentsController extends Controller
{
    public function show(){
    	$parent=parents::paginate(5);
    	return view('parents',['parents'=>$parent]);
    }

    public function create()
    {
    	return view('addparents');
    }
    public function store()
    {
        $teach = new parents;
        $teach->name = request('name');
        $teach->address = request('address');
        $teach->contact = request('contact');
        $teach->student = request('student');       
        $teach->username = request('username');
        $teach->password = request('pwd');
        

        if ($teach->save()) {

              return redirect("/parents")->with('success','inserted parents succesfully');

        }
}

    public function edit($id)
    {
    $teach = parents::find($id);
    return view('editparents',['parents'=>$teach]);
    }

     public function update($id)
    {
    	 $teach = parents::find($id);
        $teach->name = request('name');
        $teach->address = request('address');
        $teach->contact = request('contact');
        $teach->student = request('student');
        $teach->username = request('username');
        $teach->password = request('pwd');
        $teach->save();

        return redirect('/parents');
    }
 public function destroy($id)
    {
     parents::where('id',$id)->delete();
     return redirect('/parents');
     
    }
}