<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Role;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $this->authorize('view-notes');

        if (Auth::user()->department->id == Department::DEPT_ATC || Auth::user()->role->id == Role::ROLE_JEFE ) {

            $search = $request->input('search');

            if ($search) {
                $notes = Note::where(
                    function ($query) use ($search) {
                        $query->where('customer_name', 'like', '%' . $search . '%')
                            ->orWhere('description', 'like', '%' . $search . '%');
                    }
                )->get();

            } else { 
                $notes = Note::all();
            }
        } else {
            $notes = Note::where('department_id', Auth::user()->department->id)->get();
        }

        

        return view('home', compact('notes', 'search'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        if (Auth::user()->department->id == Department::DEPT_ATC || Auth::user()->role->id == Role::ROLE_JEFE ) {
            $notes = Note::all();
        } else {
            $notes = Note::where('department_id', Auth::user()->department->id)->get();
        }

        return !Auth::check() ? view('auth.login') : view('home', compact('notes'));
    }
}
