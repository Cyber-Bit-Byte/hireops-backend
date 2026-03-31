<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // 📄 Show all companies
    public function index()
    {
        $companies = Company::latest()->get();
        return view('admin.companies.index', compact('companies'));
    }

    // ➕ Show create form (optional)
    public function create()
    {
        return view('admin.companies.create');
    }

    // 💾 Store new company
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Company::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.companies.index')
                         ->with('success', 'Company added successfully');
    }

    // 👁 View single company
    public function show(string $id)
    {
        $company = Company::findOrFail($id);
        return view('admin.companies.show', compact('company'));
    }

    // ✏️ Edit form
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view('admin.companies.edit', compact('company'));
    }

    // 🔄 Update company
    public function update(Request $request, string $id)
    {
        $company = Company::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $company->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.companies.index')
                         ->with('success', 'Company updated successfully');
    }

    // ❌ Delete company
    public function destroy(string $id)
    {
        Company::findOrFail($id)->delete();

        return redirect()->route('admin.companies.index')
                         ->with('success', 'Company deleted successfully');
    }
}
