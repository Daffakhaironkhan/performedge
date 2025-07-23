<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::latest()->paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'request_date' => 'required|date',
            'layanan'      => 'required|string',
            'role'         => 'required|string',
            'category1'    => 'required|string',
            'category2'    => 'required|string',
            'category3'    => 'required|string',
            'category4'    => 'required|string',
            'sla'          => 'required|numeric',
            'request_by'   => 'required|string',
        ]);

        Category::create([
            'request_date' => $request->request_date,
            'layanan'      => $request->layanan,
            'role'         => $request->role,
            'category1'    => $request->category1,
            'category2'    => $request->category2,
            'category3'    => $request->category3,
            'category4'    => $request->category4,
            'sla'          => $request->sla,
            'request_by'   => $request->request_by,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show(Category $category): View
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $request->validate([
            'request_date' => 'required|date',
            'layanan'      => 'required|string',
            'role'         => 'required|string',
            'category1'    => 'required|string',
            'category2'    => 'required|string',
            'category3'    => 'required|string',
            'category4'    => 'required|string',
            'sla'          => 'required|numeric',
            'request_by'   => 'required|string',
        ]);

        $category->update([
            'request_date' => $request->request_date,
            'layanan'      => $request->layanan,
            'role'         => $request->role,
            'category1'    => $request->category1,
            'category2'    => $request->category2,
            'category3'    => $request->category3,
            'category4'    => $request->category4,
            'sla'          => $request->sla,
            'request_by'   => $request->request_by,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}

