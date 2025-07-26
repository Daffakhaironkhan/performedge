<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sampling;
use App\Models\Employee;
use App\Models\Category;
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
//    public function pick()
//    {
//        $randomParticipant = Employee::inRandomOrder()->first();
//
//        return view('samplings.create', compact('randomParticipant'));
//    }

//    public function create(): View
//    {
//        $randomParticipant = Employee::inRandomOrder()->first();
//        return view('samplings.create', compact('randomParticipant'));
//    }
    public function create(Request $request): View
    {
        $qaList = Employee::where('level', 'Quality Assurance')->get();
        $agents = Employee::whereIn('level', ['Agent', 'Senior Agent'])->get();

        $randomParticipant = null;
        if ($request->has('pick')) {
            $randomParticipant = Employee::inRandomOrder()->first();
        }

        return view('samplings.create', compact('qaList', 'agents', 'randomParticipant'));
    }
    public function getAgentsByLevel($level)
    {
        $agents = Employee::where('level', $level)->pluck('nama', 'id'); // Sesuaikan nama kolom
        return response()->json($agents);
    }
    public function getAgentDetail($id)
    {
        $agent = Employee::find($id);

        if (!$agent) {
            return response()->json(['message' => 'Agent not found'], 404);
        }

        return response()->json([
            'team_leader' => $agent->team_leader,
            'program' => $agent->program,
        ]);
    }
    public function getCategoriesByProgram($program)
    {
        $categories = Category::where('program', $program)->pluck('category2', 'id');
        return response()->json($categories);
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
            'ticketID' => ['required', 'not_in:Choose a ticket'],
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
