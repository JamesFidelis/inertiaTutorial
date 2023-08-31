<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use function Spatie\Ignition\Solutions\OpenAi\delete;

class EmployeesController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth')->except(['index','show']);

    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       return Inertia::render('Employees/Index',[
           'employees'=>Employees::orderByDesc('created_at')->paginate(5)
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return Inertia::render('Employees/Create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData= $request->validate([
            'names' => ['required', 'max:50'],
            'position' => ['required', 'max:50'],
        ]);



        if ($validateData) {
            Employees::create([
                'name'=>$request->names,
                'position'=>$request->position,
                'created_at'=>Carbon::now()
            ]);
            return to_route('employees.index')->with('Success','Employee Added');
        }

        return redirect()->back()->with('Failed','Error adding Employee');





    }

    /**
     * Display the specified resource.
     */
    public function show(Employees $employee)
    {

        return Inertia::render('Employees/Show',[
            'employee'=>$employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employees $employee)
    {


        return Inertia::render('Employees/Edit',[
            'employee'=>$employee
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employees $employee)
    {

        $validateData= $request->validate([
            'name' => ['required','max:50'],
            'position' => [ 'required','max:50'],
        ]);



        if ($validateData) {
            $employee->update([
                'name'=>$request->name,
                'position'=>$request->position,
                'updted_at'=>Carbon::now()
            ]);
            return to_route('employees.index')->with('Success','Employee Updated');
        }

        return redirect()->back()->with('Failed','Error updating Employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $user =DB::table('employees')->where('id',$id)->delete();
        return to_route('employees.index')->with('Success','Employee Deleted');

    }
}
