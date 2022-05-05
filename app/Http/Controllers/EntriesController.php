<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use Illuminate\Support\Facades\Input;

class EntriesController extends Controller
{
    //
    public function index(){
        $entries = Entry::all();
        // var_dump($entries);
        foreach($entries as $entry){
            var_dump($entry->title);
        }

    }
}
