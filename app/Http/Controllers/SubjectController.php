<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teacher')->get();

        return view('admin.subject.index', [
            'title' => 'Subjects',
            'subjects' => $subjects,
        ]);
    }
}
