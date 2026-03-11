<?php
namespace Attendances\Controllers;
use Attendances\Models\Student;

class StudentController
{
  static  function index(){
        require MODELS_PATH . '/Student.php';
        $title = 'Tous les étudiants';
        $students = Student::all();
        view('students.index', compact('title', 'students'));
    }
}

