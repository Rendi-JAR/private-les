<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generatePdf()
    {
        // Ambil data dari database
        $students = Student::all();

        // Load view untuk PDF
        $pdf = Pdf::loadView('reports.student_report', compact('students'));

        // Mengunduh file PDF
        return $pdf->download('students_report.pdf');
    }
}
