<?php
/**
 * summary for main
 */
namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * for method objects
 * Class MainController
 * @package Itb
 */
class MainController
{

    /**
     * render member object
     * @param Request $request
     * @param Application $app
     * @return mixed
     *
     */
    public function membersAction(Request $request, Application $app)
    {
        $member = Member::getAll();


        $argsArray = [
            'members' => $member,
        ];

        $templateName = 'members';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * render the Index page template
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function indexAction(Request $request, Application $app)
    {
        $argsArray = [];

        $templateName = 'index';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    /**
     *  log in action
     * @param Request $request
     * @param Application $app
     * @return RedirectResponse
     *
     */
    public function logAction(Request $request, Application $app)
    {
        // $argsArray = [];
        $paramsPost = $request->request->all();
        $id = $paramsPost['id'];
        $password = $paramsPost['password'];


        $sanitId = filter_var($id, FILTER_SANITIZE_STRING);
        $sanitPassword = filter_var($password, FILTER_SANITIZE_STRING);

        $users = Log::searchByColumn('position', $sanitId);
        $user = $users[0];

        if (!password_verify($password, $user->getPassword())) {
            return $app->redirect("/");
        }


        // $user = \Itb\Log::getOneById($sanitId);
       // $password = $user->getPassword();
        $position = $user->getPosition();

        // authenticate! the administrator
        if ('admin' ===  $position) {
            // store username in 'user' in 'session'
          $app['session']->set('user', array('username' => $sanitId));

            // success - redirect to the secure admin home page
            return $app->redirect('/admin');
        }
        // authenticate! the student
        if ('student' === $position) {
            // store username in 'user' in 'session'
            $app['session']->set('user', array('username' => $sanitId));

            // success - redirect to the secure admin home page
            return $app->redirect('/student');
        }
        if ('supervisor' === $position) {
            // store username in 'user' in 'session'
            $app['session']->set('user', array('username' => $sanitId));

            // success - redirect to the secure admin home page
            return $app->redirect('/supervisor');
        }

        // login page with error message
        // ------------
        $templateName = 'index';
        $argsArray = array(
            'errorMessage' => 'bad username or password - please re-enter'
        );

        //$templateName = 'members';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * render the admin page
     * @param Request $request
     * @param Application $app
     * @return mixed
     *
     */
    public function adminPageAction(Request $request, Application $app)
    {
        $user = $app['session']->get('user');

        $members = Member::getAll();


        $argsArray = array(
            'members' => $members,
            'username' => $user['username']

    );

        $templateName = 'admin';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * render the student page
     * @param Request $request
     * @param Application $app
     * @return mixed
     *
     */
    public function studentPageAction(Request $request, Application $app)
    {
        $user = $app['session']->get('user');

        $students = Student::getAll();


        $argsArray = array(
            'students' => $students,
            'username' => $user['username']

        );

        $templateName = 'student';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * render supervisor page
     * @param Request $request
     * @param Application $app
     * @return mixed
     *
     */
 /*   public function supervisorPageAction(Request $request, Application $app)
    {
        $user = $app['session']->get('user');

        $supervisors = Supervisor::getAll();


        $argsArray = array(
        'supervisors' => $supervisors,
           'username' => $user['username']

       );


      //  $argsArray = array(
      //      'username' => $user['username']

      // );

        $templateName = 'supervisor';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }  */


    // action for route:    /logout
    /**
     * logout action
     * @param Request $request
     * @param Application $app
     * @return mixed
     *
     */
    public function logoutAction(Request $request, Application $app)
    {
        // logout any existing user
        $app['session']->set('user', null);

        // redirect to home page
//        return $app->redirect('/');

        // render (draw) template
        // ------------
        $templateName = 'index';
        return $app['twig']->render($templateName . '.html.twig', []);
    }

    /**
     * render detail page
     * @param Request $request
     * @param Application $app
     * @param $id
     * @return mixed
     *
     */
    public function detailAction(Request $request, Application $app, $id)
    {
        $memberRow = Member::getOneById($id);

        $argsArray = [
            'members' => $memberRow,
        ];

        $template = 'detail';
        return $app['twig']->render($template . '.html.twig', $argsArray);
    }







    /**
     * not found error page
     * @param \Silex\Application $app
     * @param             $message
     * deal with the error
     * @return mixed
     */
    public static function error404(Application $app, $message)
    {
        $argsArray = [
            'name' => 'Fabien',
        ];
        $templateName = '404';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     *
     * if (!isset($blogPosts[$id])) {
     *  // generate a 404 error from within a controller...
     *  $app->abort(404, "Post $id does not exist.");
     * }
     */
    /**
     *  Find Matching Username And Password
     * @param $username
     * @param $password
     * @return bool
     *
     */
     public static function canFindMatchingUsernameAndPassword($username, $password)
     {
         $user = Log::getOneByUsername($username);
        // var_dump($user);
        //die();
        // if no record has this username, return FALSE
        if (null == $user) {
            return false;
        }

        // hashed correct password
        $hashedStoredPassword = $user->getPassword();

         return password_verify($password, $hashedStoredPassword);
     }

    /**
     * find the role
     * @param $username
     * @return bool
     * find the user role
     */
    public static function FindingRole($username)
    {
        $user = Login::getOneByUsername($username);

        if (null == $user) {
            return false;
        }

        // hashed correct password
        //$hashedStoredPassword = $user->getPassword();

        return $user->getPosition();
    }

    /**
     * if record exists with $username, return User object for that record
     * otherwise return 'null'
     *
     * @param $username
     *
     * @return mixed|null
     */
    /**
     * get the user name
     * @param $username
     * @return null
     * get one user by name
     */
    public static function getOneByUsername($username)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = 'SELECT * FROM logins WHERE username=:username';
        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, __CLASS__);
        $statement->execute();

        if ($object = $statement->fetch()) {
            return $object;
        } else {
            return null;
        }
    }
}
