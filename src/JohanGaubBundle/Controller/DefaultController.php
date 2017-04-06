<?php

namespace JohanGaubBundle\Controller;

use JohanGaubBundle\JohanGaubBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}/{lastName}", name="home")
     */
    public function indexAction($name, $lastName)
    {
        return $this->render('JohanGaubBundle:Default:index.html.twig',
        ["firstname" => $name, "lastName" => $lastName]
    );
    }

    /**
     * @Route("/bye/{name}", name="bye man")
     */
    public function byeAction()
    {
        return $this->render('JohanGaubBundle:Default:bye.html.twig',
            ["firstname" => "Johan"]
        );
    }
}
