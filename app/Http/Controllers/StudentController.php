<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $classrooms = Classroom::all();

        return view('admin.student.index', [
            'title' => 'Students',
            'students' => $students,
            'classrooms' => $classrooms,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|string|max:20|unique:students,nis',
            'name' => 'required|string|max:255',
            'classroom_id' => 'required|exists:classrooms,id',
        ], [
            'nis.required' => 'NIS wajib diisi.',
            'nis.unique' => 'NIS sudah digunakan.',
            'name.required' => 'Nama siswa wajib diisi.',
            'classroom_id.required' => 'Kelas wajib dipilih.',
            'classroom_id.exists' => 'Kelas tidak ditemukan.',
        ]);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
