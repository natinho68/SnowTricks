<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AppController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tricks = $em->getRepository('AppBundle:Trick')->findAll();
        // replace this example code with whatever you need
        return $this->render('AppBundle:pages:home.html.twig', array('tricks'=>$tricks));
    }

    /**
     * @Route("/view", name="view")
     */
    public function viewAction(Request $request)
    {
        return $this->render('AppBundle:pages:view.html.twig');
    }

}
