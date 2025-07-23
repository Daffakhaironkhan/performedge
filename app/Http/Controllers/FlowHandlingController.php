<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlowHandling;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class FlowHandlingController extends Controller
{
    public function index(): View
    {
        $flowHandlings = FlowHandling::latest()->paginate(10);
        return view('flow_handlings.index', compact('flowHandlings'));
    }

    public function create(): View
    {
        return view('flow_handlings.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'program'          => 'required|string',
            'user'             => 'required|string',
            'category1'       => 'required|string',
            'category2'       => 'required|string',
            'category3'       => 'required|string',
            'issue'            => 'required|string',
            'sample_inquiry'   => 'required|string',
            'flow_handling_name' => 'required|string',
            'link'             => 'required|url',
        ]);

        FlowHandling::create([
            'program'            => $request->program,
            'user'               => $request->user,
            'category1'         => $request->category1,
            'category2'         => $request->category2,
            'category3'         => $request->category3,
            'issue'              => $request->issue,
            'sample_inquiry'     => $request->sample_inquiry,
            'flow_handling_name' => $request->flow_handling_name,
            'link'               => $request->link,
        ]);

        return redirect()->route('flow_handlings.index')->with('success', 'Flow Handling created successfully.');
    }

    public function show(FlowHandling $flowHandling): View
    {
        return view('flow_handlings.show', compact('flowHandling'));
    }

    public function edit(FlowHandling $flowHandling): View
    {
        return view('flow_handlings.edit', compact('flowHandling'));
    }

    public function update(Request $request, FlowHandling $flowHandling): RedirectResponse
    {
        $request->validate([
            'program'          => 'required|string',
            'user'             => 'required|string',
            'category1'       => 'required|string',
            'category2'       => 'required|string',
            'category3'       => 'required|string',
            'issue'            => 'required|string',
            'sample_inquiry'   => 'required|string',
            'flow_handling_name' => 'required|string',
            'link'             => 'required|url',
        ]);

        $flowHandling->update([
            'program'            => $request->program,
            'user'               => $request->user,
            'category1'         => $request->category1,
            'category2'         => $request->category2,
            'category3'         => $request->category3,
            'issue'              => $request->issue,
            'sample_inquiry'     => $request->sample_inquiry,
            'flow_handling_name' => $request->flow_handling_name,
            'link'               => $request->link,
        ]);

        return redirect()->route('flow_handlings.index')->with('success', 'Flow Handling updated successfully.');
    }

    public function destroy(FlowHandling $flowHandling): RedirectResponse
    {
        $flowHandling->delete();
        return redirect()->route('flow_handlings.index')->with('success', 'Flow Handling deleted successfully.');
    }
}

