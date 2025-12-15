<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PatientHistory;

class ProfileController extends Controller
{
    /**
     * Halaman profile user
     */
    public function index()
    {
        $user = Auth::user(); // user yang sedang login

        // ✅ Ambil riwayat pasien HANYA milik user ini
        $histories = PatientHistory::where('user_id', $user->id)
            ->orderBy('visit_date', 'desc')
            ->get();

        return view('profile.index', compact('user', 'histories'));
    }

    /**
     * Update data profile user (TANPA ubah password)
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email',
            'address' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();

        $user->update([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'email'   => $request->email,
            'address' => $request->address,
        ]);

        return back()->with('success', 'Profil berhasil diperbarui');
    }
}
