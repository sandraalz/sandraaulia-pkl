<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Fungsi untuk menampilkan daftar tugas
    public function index()
    {
        // Data dummy untuk tugas
        $tasks = [
            ['id' => 1, 'title' => 'Belajar Laravel', 'description' => 'Membuat API dengan Laravel', 'completed' => false],
            ['id' => 2, 'title' => 'Belajar ReactJS', 'description' => 'Membuat aplikasi frontend dengan React', 'completed' => true],
        ];
        return response()->json($tasks);
    }

    // Fungsi untuk menambahkan tugas
    public function store(Request $request)
    {
        // Menambahkan tugas baru (dummy data)
        $newTask = [
            'id' => rand(3, 1000),  // Menggunakan ID acak
            'title' => $request->title,
            'description' => $request->description,
            'completed' => false,
        ];
        return response()->json($newTask, 201);
    }
}
