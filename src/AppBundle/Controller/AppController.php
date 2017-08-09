<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Image;
use AppBundle\Entity\Trick;
use AppBundle\Form\CommentType;
use AppBundle\Form\TrickType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
     * @Route("/tricks/add", name="add")
     */
    public function addAction(Request $request){

       $trick = new Trick();
        $form = $this->createForm(TrickType::class, $trick);


        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trick);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Trick has been successfully added');
            return $this->redirectToRoute('view', array('slug' => $trick->getSlug()));
        }
        return $this->render('AppBundle:pages:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/tricks/{id}", name="view")
     */
    public function viewAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $trick = $em->getRepository('AppBundle:Trick')->find($id);

        if (empty($trick)) {
            throw new NotFoundHttpException("This trick ". $slug ." doesn't exist ! Want to add it ?");
        }

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $comment->setTrick($trick);
            $em->persist($comment);
            $em->flush();

        }

            // On récupère la liste des candidatures de cette annonce
            $listComments = $em
                ->getRepository('AppBundle:Comment')
                ->findAll();
            return $this->render('AppBundle:pages:view.html.twig', array(
                'trick' => $trick,
                'listComments' => $listComments,
                'form' => $form->createView()
            ));
        }



        /**
         * @Route("/tricks/edit/{id}", name="edit")
         */
        public function editAction($id, Request $request){
            $em = $this->getDoctrine()->getManager();
            $trick = $em->getRepository('AppBundle:Trick')->find($id);
            if (null === $trick) {
                throw new NotFoundHttpException("This trick ". $id ." doesn't exist !");
            }

            $form = $this->createForm(TrickType::class, $trick);

            if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
                // Inutile de persister ici, Doctrine connait déjà notre annonce
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Trick has been updated');
                return $this->redirectToRoute('view', array('id' => $trick->getId()));
            }
            return $this->render('AppBundle:pages:edit.html.twig', array(
                'trick' => $trick,
                'form'   => $form->createView(),
            ));
        }

    /**
     * @Route("/tricks/delete/{id}", name="delete")
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $trick = $em->getRepository('AppBundle:Trick')->find($id);

        if (null === $trick) {
            throw new NotFoundHttpException("This trick ". $id ." doesn't exist !");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($trick);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "This trick has been successfully deleted");

            return $this->redirectToRoute('homepage');
        }

        return $this->render('AppBundle:pages:delete.html.twig', array(
            'trick' => $trick,
            'form'   => $form->createView(),
        ));
    }

}
