<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class StudentController extends Controller
{

    public function delete_student(string $id)
    {
        $student = Students::where('student_id', '=', $id)
            ->delete();

        return redirect('/students')
            ->with('success', 'Successfully deleted.');
    }

    public function generate_report_student()
    {
        $students = Students::query()
            ->select('*')
            ->limit('360')
            ->get();

        $pdf = Pdf::loadView('students_report', compact('students'));
        return $pdf->download(date('Y-m-d') . 'STUDENT_REPORT.pdf');
        // return view('student_report', compact('students'));
    }


    public function edit_student(Request $r, string $id)
    {
        $students = Students::where('student_id', '=', $id)
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'birthdate' => $r->input('birthdate'),
                    'year_level' => $r->input('year_level'),
                    'gender' => $r->input('gender'),
                    'mobile_number' => $r->input('mobile_number'),
                    'email_address' => $r->input('email_address'),
                ]
            );
        return redirect('/students')
            ->with('success', 'Successfully edited.');
    }
    public function edit_student_form(string $id)
    {
        $students = Students::query()
            ->select('*')
            ->where('student_id', '=', $id)
            ->get()
            ->first();

        return view('students_edit', compact('students'));
    }

    public function add_student(Request $r)
    {
        $student = new Students;
        $student->first_name = $r->input('first_name');
        $student->last_name = $r->input('last_name');
        $student->birthdate = $r->input('birthdate');
        $student->year_level = $r->input('year_level');
        $student->gender = $r->input('gender');
        $student->mobile_number = $r->input('mobile_number');
        $student->email_address = $r->input('email_address');
        $student->province = $r->input('province');
        $student->save();

        return redirect("/students")
            ->with('success', 'Successfully added');
    }


    public function add_student_form()
    {
        return view('students_create');
    }

    public function student_show(string $id)
    {
        $students = Students::query()
            ->select('*')
            ->where('student_id', '=', $id)
            ->get()
            ->first();

        return view('student_show', compact('students'));
    }

    public function view_account(Request $request)
    {
        $students = Students::query()
            ->select('*')
            ->where('student_id', '=', Session::get('student_id'))
            ->get()
            ->first();

        $classes = Students::query()
            ->select('c.class_id', 'name', 'schedule', 'room')
            ->join('student_classes AS sc', 'sc.student_id', '=', 'students.student_id')
            ->join('classes AS c', 'c.class_id', '=', 'sc.class_id')
            ->join('subjects AS su', 'su.subject_id', '=', 'c.subject_id')
            ->where('students.student_id', '=', Session::get('student_id'))
            ->get();

        $profile_picture = Students::query()
            ->select('image')
            ->join('students_photos', 'students.student_id', '=', 'students_photos.student_id')
            ->where('students.student_id', '=', Session::get('student_id'))
            ->get()
            ->last();

        return view('user_account', compact('students', 'classes', 'profile_picture', 'request'));
    }

    public function index()
    {
        $total_students = DB::select("SELECT COUNT(*) AS total FROM students");
        $students = DB::select("SELECT student_id, last_name, first_name, year_level, date_enrolled, email_address FROM students ORDER BY student_id DESC LIMIT 10");

        return view('students', compact('total_students', 'students'));
    }
}
