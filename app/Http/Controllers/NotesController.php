<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {
    	
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	$card->addNote(new Note($request->all()));
    	
    	return back();
    }

    public function edit(Note $note) {
    
    	return view('notes.edit', compact('note'));
    	
    }

    public function update(Request $request, Note $note) {
    	
    	// update note with all form data requested upon update trigger
    	// need to do validation first in a real situation...this was just from lesson
    	$note->update($request->all()); 

    	return  back();
    	
    }
}
