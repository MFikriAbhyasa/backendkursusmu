<?php

namespace App\Http\Controllers;

use App\Models\User;    
use Illuminate\Http\Request;
use App\Models\Kursus;  
class AdminController extends Controller
{
    public function storeKursus(Request $request)
    {
        // Validasi apakah pengguna adalah admin
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized');
        }

        // Validasi form input di sini sesuai kebutuhan

        // Simpan kursus ke dalam database
        $kursus = new Kursus();
        $kursus->title = $request->input('title');
        $kursus->description = $request->input('description');
        $kursus->youtube_link = $request->input('youtube_link');
        // Setelah atribut kursus lainnya

        $kursus->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses

        // ...
    }

    public function createCourse()
{
    // Mengambil jumlah pengguna dari model User
    $userCount = User::withCount();

    // Menampilkan halaman create course dengan data jumlah pengguna
    return view('courses.create', compact('userCount'));
}
}
