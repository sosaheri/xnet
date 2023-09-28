<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Role;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function create(Request $request)
    {
        $this->authorize('create-notes');

        if ( Auth::user()->department->id != \App\Models\Department::DEPT_ATC ){
            abort(403, 'Acceso denegado, no tiene permisos');
        }

        $departments = Department::all();

        return view('notes.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'description' => 'required|max:3000',
            'customer_name' => 'required',
            'customer_company' => 'required',
            'customer_phone' => 'required',
        ]);

        Note::create(
            [
                'user_id' => Auth::user()->id,
                'department_id' => $request->department_id,
                'description' => $request->description,
                'customer_name' => $request->customer_name,
                'customer_company' => $request->customer_company,
                'customer_phone' => $request->customer_phone,
            ]
        );

        if(Auth::user()->department->id == Department::DEPT_ATC || Auth::user()->role->id == Role::ROLE_JEFE) {
            $notes = Note::all();
        } else {
            $notes = Note::where('department_id', Auth::user()->department->id)->get();
        }

        return redirect()->route('home')
            ->with('notes', $notes )
            ->with('success', 'La nota se ha guardado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);

        if ( Auth::user()->department->id != $note->department_id && (Auth::user()->role->id != Role::ROLE_JEFE || Auth::user()->role->id != Role::ROLE_RESPONSABLE) ){
            abort(403, 'Acceso denegado, no tiene permisos');
        }

        $note = Note::findOrFail($id); 
        $departments = Department::all();

        return view('notes.edit', compact('departments', 'note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {        
        $note = Note::findOrFail($id);
        $note->delete();

        if(Auth::user()->department->id == Department::DEPT_ATC || Auth::user()->role->id == Role::ROLE_JEFE) {
            $notes = Note::all();
        } else {
            $notes = Note::where('department_id', Auth::user()->department->id)->get();
        }

        return redirect()->route('home')
            ->with('notes', $notes )
            ->with('success', 'La nota se ha sido eliminada exitosamente.');
    }
}
