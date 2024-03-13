<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $belajar = Belajar::all();
        
        return view('index', compact('belajar'));
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $belajar = Belajar::create($request->except('_token'));
        
        return redirect('index');
    }

    public function edit($id)
    {
        $belajar = Belajar::find($id);
        
        return view('update/edit', compact('belajar'));
    }

    public function update($id, Request $request)
    {
        $belajar = Belajar::find($id);
        $belajar->update($request->all());

        return redirect('index');
    }

    public function destroy($id)
    {
        $belajar = Belajar::find($id);
        $belajar->delete();

        return redirect('index');
    }    
}
