<?php
/**
 * supervisor controller
 */
/**
 * Created by PhpStorm.
 * User: James
 * Date: 01/05/2016
 * Time: 14:22
 */

namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SupervisorController
 * @package Itb
 */
class SupervisorController
{
    /**
     * render supervior page
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function supervisorPageAction(Request $request, Application $app)
    {
        $user = $app['session']->get('user');

        $supervisors = Supervisor::getAll();


        $argsArray = array(
            'supervisors' => $supervisors,
            'username' => $user['username']

        );

        $templateName = 'supervisor';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * edit supervisor page
     * @param Request $request
     * @param Application $app
     * @param $id
     * @return mixed
     */
    public function editSupervisorDisplayAction(Request $request, Application $app, $id)
    {
        $supervisorRow = Supervisor::getOneById($id);


        $argsArray = [
            'studentRow' => $supervisorRow,
        ];

        // $app['session']->set('user', array('id' => $id));


        $templateName = 'editSupervisorRow';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * supervisor details
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function editSupervisorDetailsAction(Request $request, Application $app)
    {
        $user = $app['session']->get('user');
        //$id = $user['id'];
        // $username = $user['username'];

        $paramsPost = $request->request->all();
        $id = $paramsPost['id'];
        $studentId = $paramsPost['studentId'];
        $project = $paramsPost['project'];
        $status = $paramsPost['status'];
        $pastPresent = $paramsPost['pastPresent'];
        $name = $paramsPost['name'];
        $publications = $paramsPost['publications'];

        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $studentId  = filter_var($studentId, FILTER_SANITIZE_STRING);
        $project = filter_var($project, FILTER_SANITIZE_STRING);
        $status = filter_var($status, FILTER_SANITIZE_STRING);
        $pastPresent = filter_var($pastPresent, FILTER_SANITIZE_STRING);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $publications = filter_var($publications, FILTER_SANITIZE_STRING);



        $supervisor = new Supervisor();
        $supervisor->setId($id);
        $supervisor->setStudentId($studentId);
        $supervisor->setProject($project);
        $supervisor->setStatus($status);
        $supervisor->setPastPresent($pastPresent);
        $supervisor->setName($name);
        $supervisor->setPublication($publications);



        $succesfullUpdate = Supervisor::update($supervisor);



        $supervisor = Supervisor::getAll();

        $argsArray = [
            'username'=> '',
            'supervisors' => $supervisor,
        ];


        $templateName = 'supervisor';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * display the form to create a new student/supervisor
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function supervisorCreateAction(Request $request, Application $app)
    {
        $argsArray = [

        ];


        $templateName = 'supervisorCreate';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * create a new member in supervisor page
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function newSupervisorAction(Request $request, Application $app)
    {
        //$user = $app['session']->get('user');

        $paramsPost = $request->request->all();
        $id = $paramsPost['id'];
        $studentId = $paramsPost['studentId'];
        $project = $paramsPost['project'];
        $status = $paramsPost['status'];
        $pastPresent = $paramsPost['pastPresent'];
        $name = $paramsPost['name'];
        $publication = $paramsPost['publication'];
       
       
       
        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $studentId = filter_var($studentId, FILTER_SANITIZE_STRING);
       // $supervisorId = filter_var($supervisorId, FILTER_SANITIZE_STRING);
        $project = filter_var($project, FILTER_SANITIZE_STRING);
        $status = filter_var($status, FILTER_SANITIZE_STRING);
        $pastPresent = filter_var($pastPresent, FILTER_SANITIZE_STRING);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $publication = filter_var($publication, FILTER_SANITIZE_STRING);
        
       
       
        $supervisor = new Supervisor();
       // $supervisor->setId($id);
        $supervisor->setStudentId($studentId);
        $supervisor->setProject($project);
        //$supervisor->setPassword($password);
        $supervisor->setStatus($status);
        $supervisor->setPastPresent($pastPresent);
        $supervisor->setName($name);
        $supervisor->setPublication($publication);

        // print "Test";
        // die();

       /* $succesfullUpdate = Member::insert($member);

        $member = Member::getAll();

        $argsArray = [
            'text' => 'Insert was succesfull',
            'members' => $member,
        ];

        $templateName = 'admin';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);  */



      //  $succesfullUpdate =  Supervisor::insert($supervisor);

        $supervisor = Supervisor::getAll();

        $argsArray = [
            'text' => 'Insert was succesfull',
            'supervisors' => $supervisor,
        ];

        $templateName = 'supervisor';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }
}
