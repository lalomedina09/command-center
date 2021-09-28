<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Note;
use Carbon\Carbon;
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
        $pageDescription = 'Generacion de notas personales por usuario';
        $notes = Auth::user()->notes;
        //$date = Carbon::now();
        //dd($date);
        return view('applications.notes.index', compact('pageTitle', 'pageDescription', 'notes'));
    }

    public function store(Request $request)
    {
        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->label = $request->label;
        $note->user_id = Auth::user()->id;
        $note->created_by = Auth::user()->id;
        $note->updated_by = Auth::user()->id;
        $note->save();

        $notes = Auth::user()->notes;

        $view = view('applications.notes.components.notes', compact('notes'))->render();

        return response()->json(['view' => $view]);
    }

    public function delete(Request $request)
    {
        $note = Note::findorfail($request->id);    
        
        $view = view('applications.notes.components.delete.content', compact('note'))->render();

        return response()->json(['view' => $view]);
    }

    public function destroy($id)
    {
        $note = Note::findorfail($id);
        $note->delete();

        $notes = Auth::user()->notes;
        
        $view = view('applications.notes.components.notes', compact('notes'))->render();

        return response()->json(['view' => $view]);
    }
}
