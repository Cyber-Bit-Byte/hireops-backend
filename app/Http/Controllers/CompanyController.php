<?php

namespace App\Http\Controllers;


use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Admin only
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
        ]);

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'message' => 'Company created successfully',
            'data' => $company
        ], 201);
    }

    // Admin only – list companies (optional but useful)
    public function index()
    {
        return response()->json(Company::latest()->get());
    }
}
