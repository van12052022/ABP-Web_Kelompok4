<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;

class PreferenceController extends Controller
{
    // Method untuk menampilkan formulir
    public function index()
    {
        return view('preferences');
    }

    // Method untuk menyimpan preferensi makanan
    public function store(Request $request)
    {
        // Buat objek preference baru
        $preference = new Preference();
        // Isi field-field dalam objek preference
        $preference->indonesian_food_id = $request->indonesian_food_id;
        $preference->italian_food_id = $request->italian_food_id;
        $preference->japanese_food_id = $request->japanese_food_id;
        $preference->western_food_id = $request->western_food_id;
        // Simpan objek preference ke dalam database
        $preference->save();

        // Kembalikan respon ke halaman formulir dengan pesan sukses
        return redirect('/dashboard');
    }
}
