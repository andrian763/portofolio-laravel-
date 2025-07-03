<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        // Simpan data ke database
        Contact::create($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan kamu berhasil dikirim!');
    }
}
