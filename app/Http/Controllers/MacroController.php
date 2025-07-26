<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Macro;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MacroController extends Controller
{
    public function index(): View
    {
        $macros = Macro::latest()->paginate(10);
        return view('macros.index', compact('macros'));
    }

    public function create(): View
    {
        return view('macros.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'program'          => 'required|string',
            'users'             => 'required|string',
            'category1'        => 'required|string',
            'category2'        => 'required|string',
            'category3'        => 'required|string',
            'issue'            => 'required|string',
            'sample_inquiry'   => 'required|string',
            'action'           => 'required|string',
            'macro_name'       => 'required|string',
            'macro'            => 'required|string',
            'template'         => 'required|string',
        ]);

        Macro::create([
            'program'          => $request->program,
            'users'             => $request->user,
            'category1'        => $request->category1,
            'category2'        => $request->category2,
            'category3'        => $request->category3,
            'issue'            => $request->issue,
            'sample_inquiry'   => $request->sample_inquiry,
            'action'           => $request->action,
            'macro_name'       => $request->macro_name,
            'macro'            => $request->macro,
            'template'         => $request->template,
        ]);

        return redirect()->route('macros.index')->with('success', 'Macro created successfully.');
    }

    public function show(Macro $macro): View
    {
        return view('macros.show', compact('macro'));
    }

    public function edit(Macro $macro): View
    {
        return view('macros.edit', compact('macro'));
    }

    public function update(Request $request, Macro $macro): RedirectResponse
    {
        $request->validate([
            'program'          => 'required|string',
            'users'             => 'required|string',
            'category1'        => 'required|string',
            'category2'        => 'required|string',
            'category3'        => 'required|string',
            'issue'            => 'required|string',
            'sample_inquiry'   => 'required|string',
            'action'           => 'required|string',
            'macro_name'       => 'required|string',
            'macro'            => 'required|string',
            'template'         => 'required|string',
        ]);

        $macro->update([
            'program'          => $request->program,
            'users'             => $request->user,
            'category1'        => $request->category1,
            'category2'        => $request->category2,
            'category3'        => $request->category3,
            'issue'            => $request->issue,
            'sample_inquiry'   => $request->sample_inquiry,
            'action'           => $request->action,
            'macro_name'       => $request->macro_name,
            'macro'            => $request->macro,
            'template'         => $request->template,
        ]);

        return redirect()->route('macros.index')->with('success', 'Macro updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $macro = Macro::findOrFail($id);
        $macro->delete();

        return redirect()->route('macros.index')->with('success', 'Macro deleted successfully.');
    }
}

