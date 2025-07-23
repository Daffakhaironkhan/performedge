<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sampling;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SamplingController extends Controller
{
    public function index(): View
    {
        $samplings = Sampling::latest()->paginate(10);
        return view('samplings.index', compact('samplings'));
    }

    public function create(): View
    {
        return view('samplings.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'namaQA'          => 'required|string',
            'levelAgent'      => 'required|string',
            'namaAgent'       => 'required|string',
            'teamLeader'      => 'required|string',
            'program'         => 'required|string',
            'kanal'           => 'required|string',
            'ticketID'        => 'required|string',
            'category'        => 'required|string',
            'eventDateTime'   => 'required|date',
            'konten'          => 'required|string',
        ]);

        Sampling::create([
            'namaQA'          => $request->namaQA,
            'levelAgent'      => $request->levelAgent,
            'namaAgent'       => $request->namaAgent,
            'teamLeader'      => $request->teamLeader,
            'program'         => $request->program,
            'kanal'           => $request->kanal,
            'ticketID'        => $request->ticketID,
            'category'        => $request->category,
            'eventDateTime'   => $request->eventDateTime,
            'konten'          => $request->konten,
        ]);

        return redirect()->route('samplings.index')->with('success', 'Data sampling berhasil disimpan.');
    }

    public function show(Sampling $sampling): View
    {
        return view('samplings.show', compact('sampling'));
    }

    public function edit(Sampling $sampling): View
    {
        return view('samplings.edit', compact('sampling'));
    }

    public function update(Request $request, Sampling $sampling): RedirectResponse
    {
        $request->validate([
            'namaQA'          => 'required|string',
            'levelAgent'      => 'required|string',
            'namaAgent'       => 'required|string',
            'teamLeader'      => 'required|string',
            'program'         => 'required|string',
            'kanal'           => 'required|string',
            'ticketID'        => 'required|string',
            'category'        => 'required|string',
            'eventDateTime'   => 'required|date',
            'konten'          => 'required|string',
        ]);

        $sampling->update([
            'namaQA'          => $request->namaQA,
            'levelAgent'      => $request->levelAgent,
            'namaAgent'       => $request->namaAgent,
            'teamLeader'      => $request->teamLeader,
            'program'         => $request->program,
            'kanal'           => $request->kanal,
            'ticketID'        => $request->ticketID,
            'category'        => $request->category,
            'eventDateTime'   => $request->eventDateTime,
            'konten'          => $request->konten,
        ]);

        return redirect()->route('samplings.index')->with('success', 'Data sampling berhasil diperbarui.');
    }

    public function destroy(Sampling $sampling): RedirectResponse
    {
        $sampling->delete();
        return redirect()->route('samplings.index')->with('success', 'Data sampling berhasil dihapus.');
    }
}
