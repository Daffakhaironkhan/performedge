<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EmployeeController extends Controller
{
    public function index(): View
    {
        $employees = Employee::latest()->paginate(10);
        return view('employees.index', compact('employees'));
    }

    public function create(): View
    {
        return view('employees.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_finger'    => 'required',
            'foto'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'         => 'required|min:3',
            'team_leader'  => 'required',
            'supervisor'   => 'required',
            'level'        => 'required',
            'program'      => 'required',
            'email'        => 'required|email',
            'gender'       => 'required',
            'age'          => 'required|numeric',
            'alamat'       => 'required|min:5',
            'ttl'          => 'required|date',
            'join_date'    => 'required|date',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('employees', $foto->hashName());

        Employee::create([
            'id_finger'    => $request->id_finger,
            'foto'         => $foto->hashName(),
            'nama'         => $request->nama,
            'team_leader'  => $request->team_leader,
            'supervisor'   => $request->supervisor,
            'level'        => $request->level,
            'program'      => $request->program,
            'email'        => $request->email,
            'gender'       => $request->gender,
            'age'          => $request->age,
            'alamat'       => $request->alamat,
            'ttl'          => $request->ttl,
            'join_date'    => $request->join_date,
            'tenure'       => (int) round($this->calculateTenure($request->join_date)),
        ]);

        return redirect()->route('employees.index')->with('success', 'employees created successfully.');
    }

    public function show(Employee $employee): View
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee): View
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee): RedirectResponse
    {
        $request->validate([
            'foto'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama'         => 'required|min:3',
            'team_leader'  => 'required',
            'supervisor'   => 'required',
            'level'        => 'required',
            'program'      => 'required',
            'email'        => 'required|email',
            'gender'       => 'required',
            'age'          => 'required|numeric',
            'alamat'       => 'required|min:5',
            'ttl'          => 'required|date',
            'join_date'    => 'required|date',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            Storage::delete('employees/'.$employee->foto);

            // Upload foto baru
            $foto = $request->file('foto');
            $foto->storeAs('employees', $foto->hashName());

            // Update dengan foto baru
            $employee->update([
                'foto'         => $foto->hashName(),
                'nama'         => $request->nama,
                'team_leader'  => $request->team_leader,
                'supervisor'   => $request->supervisor,
                'level'        => $request->level,
                'program'      => $request->program,
                'email'        => $request->email,
                'gender'       => $request->gender,
                'age'          => $request->age,
                'alamat'       => $request->alamat,
                'ttl'          => $request->ttl,
                'join_date'    => $request->join_date,
                'tenure'       => (int) round($this->calculateTenure($request->join_date)),
            ]);
        } else {
            // Update tanpa foto
            $employee->update([
                'nama'         => $request->nama,
                'team_leader'  => $request->team_leader,
                'supervisor'   => $request->supervisor,
                'level'        => $request->level,
                'program'      => $request->program,
                'email'        => $request->email,
                'gender'       => $request->gender,
                'age'          => $request->age,
                'alamat'       => $request->alamat,
                'ttl'          => $request->ttl,
                'join_date'    => $request->join_date,
                'tenure'       => (int) round($this->calculateTenure($request->join_date)),
            ]);
        }

        return redirect()->route('employees.index')->with('success', 'employees updated successfully.');
    }
    /**
     * remove
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $employee = Employee::findOrFail($id);

        //delete foto
        Storage::delete('employees/'. $employee->foto);

        //delete product
        $employee->delete();

        //redirect to index
        return redirect()->route('employees.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    private function calculateTenure($joinDate)
    {
        $join = \Carbon\Carbon::parse($joinDate);
        $now = now();

        if ($join->greaterThan($now)) {
            return 0;
        }

        return $join->diffInMonths($now);
    }
}

