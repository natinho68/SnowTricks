<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Trick;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        return $this->render('AppBundle:pages:home.html.twig',
            array('tricks'=>$tricks));
    }

    /**
     * @Route("/tricks/{slug}", name="view")
     */
    public function viewAction($slug, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $trick = $em->getRepository('AppBundle:Trick')->findBySlug($slug);
        if (null === $trick) {
            throw new NotFoundHttpException("This trick ". $slug ." doesn't exist ! Want to add it ?");
        }
        return $this->render('AppBundle:pages:view.html.twig', array('trick' => $trick));
    }

}
