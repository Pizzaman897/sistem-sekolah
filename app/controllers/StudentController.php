<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

use App\Core\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
        {
            $studentModel = new Student();
            $students = $studentModel->getStudents();
            print_r($students);
            $this->view('Students.index');
        }
 
    public function create()
        {
            $this->view('Students.create');
        }

    public function show(string $id)
        {
            $this->view('Students.show');
        }

    public function edit(string $id)
        {
            $this->view('Students.edit');
        }
}

   