<?php
/**
 * publication summary
 */
/**
 * Created by PhpStorm.
 * User: James
 * Date: 23/03/2016
 * Time: 16:16
 */

namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PublicationController
 * @package Itb
 * publication method
 */
class PublicationController
{
    /**
     * render publications
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function publicationsAction(Request $request, Application $app)
    {
        $publications = Publication::getAll();

        $argsArray = [
            'publications' => $publications,
        ];

        $templateName = 'publications';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }
}
