<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profil()
    {
        $nrp = '5025241162';        
        $regexPattern = '/^[0-9]{10}$/';
        $isValidNRP = preg_match($regexPattern, $nrp) === 1;

        return view('profil', [
            'nrp' => $nrp,
            'isValidNRP' => $isValidNRP,
            'nama' => 'Felix Aldorino',
            'tanggalLahir' => '26 Juli 2006',
            'tempatLahir' => 'Jakarta',
            'departemen' => 'Teknik Informatika',
            'fakultas' => 'FTEIC - Fakultas Teknik Elektro dan Informatika',
            'email' => '5025241162@student.its.ac.id',
        ]);
    }

    public function ideAgent(Request $request)
    {
        $mode = $request->query('mode', 'light');
        return view('ide-agent', compact('mode'));
    }

    public function storeIde(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        return redirect()
            ->route('ide-agent', ['mode' => $request->query('mode')])
            ->with('success', 'Ide berhasil dikumpulkan! Terima kasih.');
    }
}