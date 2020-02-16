<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teachers;

class TeachersController extends Controller
{
    public function show()
    {
    	$teach= teachers::paginate(5);
    	return view('/teacher',['teachers'=>$teach]);
    }

    public function create()
    {
    	return view('addteacher');
    }

    public function store()
    {
         // request()->validate([
         //        'name' => ['required','max:40'],
         //        'address' => 'required',
         //        'contact' => 'required',
         //        'username' => ' required',
         //        'password' => 'required',
               
          // ]);

        $teach = new teachers;
        $teach->name = request('name');
        $teach->address = request('address');
        $teach->contact = request('contact');
        $teach->username = request('username');
        $teach->password = request('pwd');

        if ($teach->save()) {

              return redirect("/teacher")->with('success','inserted teacher succesfully');
        }

    }

    public function edit($id)
    {
    $teach = teachers::find($id);
    return view('editteacher',['teacher'=>$teach]);
    }

    public function update($id)
    {

    	 $teach = teachers::find($id);
        $teach->name = request('name');
        $teach->address = request('address');
        $teach->contact = request('contact');
        $teach->username = request('username');
        $teach->password = request('pwd');
        
        $teach->save();

        return redirect('/teacher');

          
    }

    public function destroy($id)
    {
     teachers::where('id',$id)->delete();
     return redirect('/teacher');
     


    }
}


