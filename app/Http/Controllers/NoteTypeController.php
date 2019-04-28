<?php

namespace App\Http\Controllers;

use App\Note_type;
use Illuminate\Http\Request;

class NoteTypeController extends Controller
{
    public function store(){
        return view('Note_type.create');
    }
    public function create(Request $request){
        $type = new Note_type();
        $type->name = $request->input('name');
        $type->description = $request->input('description');
        $type->save();
        return redirect()->route('note.list');
    }
}
