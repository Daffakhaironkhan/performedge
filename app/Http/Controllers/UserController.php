<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all(); // atau User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(): View
    {
        return view('users.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
//            'id_finger'    => 'required',
//            'foto'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'         => 'required|min:3',
            'email'        => 'required|email',
            'password'       => 'required',
        ]);

//        $foto = $request->file('foto');
//        $foto->storeAs('users', $foto->hashName());

        User::create([
//            'id'           => $request->id,
//            'foto'         => $foto->hashName(),
            'name'     => $request->nama, // fix ini
            'email'    => $request->email,
            'password' => bcrypt($request->password), // lebih aman untuk hash password

        ]);

        return redirect()->route('users.index')->with('success', 'users created successfully.');
    }
//
//    public function show(Employee $employee): View
//    {
//        return view('employees.show', compact('employee'));
//    }
//
    public function edit(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'nullable|min:6',
    ]);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('users.index')->with('success', 'Data user berhasil diperbarui.');
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
        $user = User::findOrFail($id);

        //delete foto
//        Storage::delete('employees/'. $employee->foto);

        //delete product
        $user->delete();

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
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

