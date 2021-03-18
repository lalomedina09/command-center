<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class NotesController extends Controller
{
    /**
     * Display a note of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  index(){

        $pageTitle = 'Mis Notas '.Auth::user()->name;
        $pageDescription = 'lorem note extra';
        $notes = Auth::user()->notes;

        return view('applications.notes.index', compact('pageTitle', 'pageDescription', 'notes'));
    }
}
