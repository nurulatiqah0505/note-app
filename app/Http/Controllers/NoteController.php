<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
   // Show all notes
   public function index()
   {
       $notes = Note::all();
       return view('notes.index', compact('notes'));
   }

   // Show create note form
   public function create()
   {
       return view('notes.create');
   }

   // Store new note
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|max:255',
           'description' => 'required',
       ]);

       Note::create($request->all());

       return redirect()->route('notes.index');
   }

   // Show edit form
   public function edit(Note $note)
   {
       return view('notes.edit', compact('note'));
   }

   // Update existing note
   public function update(Request $request, Note $note)
   {
       $request->validate([
           'name' => 'required|max:255',
           'description' => 'required',
       ]);

       $note->update($request->all());

       return redirect()->route('notes.index');
   }

   // Delete a note
   public function destroy(Note $note)
   {
       $note->delete();
       return redirect()->route('notes.index');
   }
}
