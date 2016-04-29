<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 12/04/2016
 * Time: 00:17
 */

namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class StudentController
 * @package Itb
 */
class StudentController
{
    /**
     * detail action render
     * @param Request $request
     * @param Application $app
     * @param $id
     * @return mixed
     */
    public function studentDetailAction(Request $request, Application $app, $id)
    {
        $studentRow = Student::getOneById($id);

        $argsArray = [
            'students' => $studentRow,
        ];

        $template = 'studentDetail';
        return $app['twig']->render($template . '.html.twig', $argsArray);
    }

    public function changePictureAction(Request $request, Application $app)
    {
        $parametrsPost =$request->request->all();
        $id =  $parametrsPost["id"];


        $studentRow = Student::getOneById($id);
        $studentNumber = $studentRow->getStudentNumber();
        $supervisor = $studentRow->getSupervisor();
        $project = $studentRow->getProject();
        $status = $studentRow->getStatus();
        $grade = $studentRow->getGrade();
        $name = $studentRow->getName();

        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_ext=strtolower(end(explode('.', $_FILES['image']['name'])));

        $expensions = array('jpeg','jpg','png');

        if (in_array($file_ext, $expensions)===false) {
            $errors[] = "This extensions is incorrect";
        }

        if ($file_size > 4000000) {
            $errors[] = "File must be not bigger then 4 mb";
        }


        if (empty($errors)==true) {
            move_uploaded_file($file_tmp, "images/".$file_name);

            //$student = Student::getOneById($id);
            $student = new Student();
            $student->setId($id);
            $student->setStudentNumber($studentNumber);
            $student->setSupervisor($supervisor);
            $student->setProject($project);
            $student->setStatus($status);
            $student->setGrade($grade);
            $student->setName($name);
            $student->setImage($file_name);

            $studentUpdate = Student::update($student);
        } else {
            print_r($errors);
        }



        $studentRow = Student::getOneById($id);


        $argsArray = [
            'students' => $studentRow,
        ];

        $template = 'studentDetail';
        return $app['twig']->render($template . '.html.twig', $argsArray);
    }
}
