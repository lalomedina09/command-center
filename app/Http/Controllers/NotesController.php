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
        $pageDescription = 'lorem note extra';
        $notes = Auth::user()->notes;
        //$date = Carbon::now();
        //dd($date);
        return view('applications.notes.index', compact('pageTitle', 'pageDescription', 'notes'));
    }

    public function store(Request $request)
    {
        #DB::beginTransaction();
        #DB::commit();
        //dd('llego a la linea 31');
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
}
