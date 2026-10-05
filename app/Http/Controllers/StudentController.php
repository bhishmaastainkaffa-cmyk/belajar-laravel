<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['nis' => '1001', 'name' => 'Bhishma', 'class' => '11 PPLG 2'],
            ['nis' => '1002', 'name' => 'Dani', 'class' => '11 PPLG 2'],
            ['nis' => '1003', 'name' => 'Giga', 'class' => '11 PPLG 1'],
            ['nis' => '1004', 'name' => 'Iyan', 'class' => '11 PPLG 1'],
            ['nis' => '1005', 'name' => 'Abdillah', 'class' => '11 PPLG 2'],
            ['nis' => '1006', 'name' => 'Pandu', 'class' => '11 PPLG 1'],
            ['nis' => '1007', 'name' => 'Rafif', 'class' => '11 PPLG 2'],
            ['nis' => '1008', 'name' => 'Dika', 'class' => '11 PPLG 1'],
            ['nis' => '1009', 'name' => 'Haqi', 'class' => '11 PPLG 2'],
            ['nis' => '1010', 'name' => 'Abel', 'class' => '11 PPLG 1'],
        ];

        return view('admin.student', [
            'title' => 'Students',
            'students' => $students,
        ]);
    }
}
