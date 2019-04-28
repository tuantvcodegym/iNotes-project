<?php

namespace App\Http\Controllers;

use App\Note;
use App\Note_type;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // lấy ra danh sach các notes
    public function listNote(){
        $notes = Note::all();
        return view('note.list', compact('notes'));
    }
    // thêm mới một note
    public function store(){
        $type = Note_type::all();
        return view('note.store', compact('type'));
    }
    public function create(Request $request){
        $note = new Note();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->note_id = $request->input('note_id');
        $note->save();
        return redirect()->route('note.list');
    }
    // deatil một note
    public function detail($id){
        $note = Note::find($id);
        return view('note.detail', compact('note'));
    }
    // Xóa một note
    public function destroy($id){
        $note = Note::find($id);
        $note->delete();
        return redirect()->route('note.list');
    }
    // sửa một note
    public function edit($id){
        $type = Note_type::all();
        $note = Note::find($id);
        return view('note.edit', compact('note', 'type'));
    }
    public function update(Request $request, $id){
        $note = Note::find($id);
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->note_id = $request->input('note_id');
        $note->save();
        return redirect()->route('note.list');
    }
    public function search(Request $request){
        $note = Note::where('title', 'like', '%'. $request->search . '%' )->get();
        return view('note.search', compact('note'));
    }
}
