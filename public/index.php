<?php
use Itb\MainController;
use Itb\PublicationControlle;

// do out basic setup
// ------------
require_once __DIR__ . '/../app/configureDatabase.php';
require_once __DIR__ . '/../app/setup.php';


//$mainController = new MainController();
//$publicationController= new PublicationController();

// get publication GET parameter (if it exists)
//$publications = filter_input(INPUT_GET, 'publications', FILTER_SANITIZE_STRING);


// use our static controller() method...
$app->get('/',      \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/index',  \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/members', \Itb\Utility::controller('Itb', 'main/members'));
$app->get('/projects', \Itb\Utility::controller('Itb', 'project/projects'));
$app->get('/publications', \Itb\Utility::controller('Itb', 'publication/publications'));

$app->post('/log', \Itb\Utility::controller('Itb', 'main/log'));
$app->get('/admin', \Itb\Utility::controller('Itb', 'main/adminPage'));
$app->get('/student', \Itb\Utility::controller('Itb', 'main/studentPage'));
//$app->get('/supervisor', \Itb\Utility::controller('Itb', 'main/supervisorPage'));
$app->get('/logout', \Itb\Utility::controller('Itb', 'main/logout'));
$app->get('/detail/{id}', \Itb\Utility::controller('Itb', 'main/detail'));
$app->get('/projectDetail/{id}', \Itb\Utility::controller('Itb', 'project/projectDetail'));


$app->get('/editMemberTableDisplay', \Itb\Utility::controller('Itb', 'member/editMemberTableDisplay'));
$app->get('/editMember/{id}', \Itb\Utility::controller('Itb', 'member/editMemberDisplay'));
$app->post('/editMemberDetails', \Itb\Utility::controller('Itb', 'member/editMemberDetails'));

$app->get('/createMember', \Itb\Utility::controller('Itb', 'member/createMember'));
$app->post('/newMember', \Itb\Utility::controller('Itb', 'member/newMember'));
$app->get('/deleteMemberTableDisplay', \Itb\Utility::controller('Itb', 'member/deleteMemberTableDisplay'));
$app->get('/deleteMember/{id}', \Itb\Utility::controller('Itb', 'member/deleteMember'));
$app->get('/matt/{id}', \Itb\Utility::controller('Itb', 'main/matt'));

$app->get('/studentDetail/{id}', \Itb\Utility::controller('Itb', 'student/studentDetail'));
$app->get('/editStudent/{id}', \Itb\Utility::controller('Itb', 'student/editStudentDisplay'));
$app->post('/editStudentDetails', \Itb\Utility::controller('Itb', 'student/editStudentDetails'));

$app->post('/changePicture', \Itb\Utility::controller('Itb', 'student/changePicture'));

$app->get('/supervisor', \Itb\Utility::controller('Itb', 'supervisor/supervisorPage'));
$app->get('/editSupervisor/{id}', \Itb\Utility::controller('Itb', 'supervisor/editSupervisorDisplay'));
$app->post('/editSupervisorDetails', \Itb\Utility::controller('Itb', 'supervisor/editSupervisorDetails'));
$app->get('/supervisorCreate', \Itb\Utility::controller('Itb', 'supervisor/supervisorCreate'));
$app->post('/newSupervisor', \Itb\Utility::controller('Itb', 'supervisor/newSupervisor'));


  /*switch ($action){
    case 'processLogin':
        $mainController->processLoginAction();
        break;

    default:
        $mainController->indexAction();
}  */

// 404 - Page not found
$app->error(function (\Exception $e, $code) use ($app) {
    switch ($code) {


        case 404:
            $message = 'The requested page could not be found.';
            return \Itb\MainController::error404($app, $message);

        default:
          //  $message = 'We are sorry, but something went terribly wrong.';
           // return \Itb\MainController::error404($app, $message);
    }
});

// run Silex front controller
// ------------

$app->run();
