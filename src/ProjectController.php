<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 01/04/2016
 * Time: 23:53
 */
/**
 * project controller
 */
namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ProjectController
 * @package Itb
 * Class project methods
 */
class ProjectController
{
    /**
     * render projects
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function projectsAction(Request $request, Application $app)
    {
        $projects = Project::getAll();

        $argsArray = [
            'projects' => $projects,
        ];

        $templateName = 'projects';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * detail action of table
     * @param Request $request
     * @param Application $app
     * @param $id
     * @return mixed
     */
    public function projectDetailAction(Request $request, Application $app, $id)
    {
        $projectRow = Project::getOneById($id);

        $argsArray = [
            'projects' => $projectRow,
        ];

        $template = 'projectDetail';
        return $app['twig']->render($template . '.html.twig', $argsArray);
    }
}
