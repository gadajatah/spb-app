<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $rules = array(
            'nama' => 'required',
            'email' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'username' => 'required',
            'password' => 'required',
           );

           $validated = $request->validate($rules);
           $student = new Student();
           $student->nama = $validated['nama'];
           $student->email = $validated['email'];
           $student->jenkel = $validated['jenkel'];
           $student->alamat = $validated['alamat'];
           $student->no_hp = $validated['no_hp'];
           $student->username = $validated['username'];
           $student->password = $validated['password'];
           
           if (!$student->save()) {
               return redirect()->route('admin.create')->with('error', 'Siswa gagal mendaftar!');
           }
           return redirect()->route('admin.show')->with('success', 'Siswa berhasil mendaftar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::get()->all();
        return view('admin.datasiswa', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::findOrFail($id);
        return view('admin.edit', compact($students));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::findOrFail($id);
        $students->delete();

        return redirect()->route('admin.create');
    }
}
