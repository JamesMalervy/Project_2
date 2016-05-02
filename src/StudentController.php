<?php
/**
 * student controller
 */
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


    /**
     * methods to upload picture
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
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

    $extensions = array('jpeg','jpg','png');

    if (in_array($file_ext, $extensions)===false) {
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

    /**
     * render the student display action
     * @param Request $request
     * @param Application $app
     * @param $id
     * @return mixed
     */
    public function editStudentDisplayAction(Request $request, Application $app, $id)
    {
        //print "Test";
       // die();

        $studentRow = Student::getOneById($id);


        $argsArray = [
            'studentRow' => $studentRow,
        ];

       // $app['session']->set('user', array('id' => $id));


        $templateName = 'editStudentRow';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * student details action
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function editStudentDetailsAction(Request $request, Application $app)
    {
        $user = $app['session']->get('user');
        //$id = $user['id'];
        // $username = $user['username'];

        $paramsPost = $request->request->all();
        $id = $paramsPost['id'];
        $studentNumber = $paramsPost['studentNumber'];
        $supervisor = $paramsPost['supervisor'];
        $project = $paramsPost['project'];
        $status = $paramsPost['status'];
        $grade = $paramsPost['grade'];
        $name = $paramsPost['name'];

        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $studentNumber  = filter_var($studentNumber, FILTER_SANITIZE_STRING);
        $supervisor = filter_var($supervisor, FILTER_SANITIZE_STRING);
        $project = filter_var($project, FILTER_SANITIZE_STRING);
        $status = filter_var($status, FILTER_SANITIZE_STRING);
        $grade = filter_var($grade, FILTER_SANITIZE_STRING);
        $name = filter_var($name, FILTER_SANITIZE_STRING);



        $student = new Student();
        $student->setId($id);
        $student->setStudentNumber($studentNumber);
        $student->setSupervisor($supervisor);
        $student->setProject($project);
        $student->setStatus($status);
        $student->setGrade($grade);
        $student->setName($name);

        $succesfullUpdate = Student::update($student);



        $student = Student::getAll();

        $argsArray = [
            'username'=> '',
            'students' => $student
        ];


        $templateName = 'editStudentRow';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }
}
