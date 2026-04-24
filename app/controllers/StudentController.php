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
            
            $this->view('Students.index', [
                'students' => $students
            ]);
        }
 
    public function create()
        {
            $this->view('Students.create');
        }

    public function show(string $id)
        {
            $id = intval($id);
            $studentmodel = new Student();
            $student = $studentmodel->getStudent($id);
            $this->view('Students.show', [
                'student' => $student
            ]);
        }

    public function edit(string $id)
        {
            $id = intval($id);
            $studentModel = new Student();
            $student = $studentModel->getStudent($id);

            $this->view('Students.edit', [
                'student' => $student
            ]);
        }

        public function store()
        {
            $studentModel = new Student();
            $studentModel->insert($_POST);
        }

        public function update(string $id)
        {
            $id = intval($id);
            $studentModel = new Student();
            $studentModel->update($_POST, $id);
        }

        public function destroy(string $id)
        {
            $id = intval($id);
            $studentModel = new Student();
            $studentModel->delete($id);
        }
}

   