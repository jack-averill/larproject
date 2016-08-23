<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Card;

class CardsController extends Controller
{
    public function index() {
    	$cards = Card::all();

   		return view('cards.index', compact('cards')); 	
    }

    public function show(Card $card) {

    	$card = Card::with('notes.user')->find(1);

    	return $card;
    
    	return view('cards.show', compact('card'));	
    	
    }
}
