<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{

    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('front/about.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction() {
        return $this->render('front/contact.html.twig');

    }

}
