<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Image;
use AppBundle\Entity\Trick;
use AppBundle\Form\Type\CommentType;
use AppBundle\Form\Type\TrickType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AppController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $tricks = $this->getDoctrine()->getRepository('AppBundle:Trick')->findAll();
        // replace this example code with whatever you need
        return $this->render('AppBundle:pages:home.html.twig', array(
            'tricks'=>$tricks
        ));
    }

    /**
     * @Route("/tricks/add", name="add")
     * @Security("has_role('ROLE_USER')")
     */
    public function addAction(Request $request){
            $trick = new Trick();
        $form = $this->createForm(TrickType::class, $trick);


        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $security = $this->container->get('security.token_storage');
            $manager = $this->container->get('app_bundle.manager');
            $user = $security->getToken()->getUser();
            $trick->setAuthor($user);
            $manager->save($trick);
            $request->getSession()->getFlashBag()->add('info', 'Trick has been successfully added');
            return $this->redirectToRoute('view', array('slug' => $trick->getSlug()));
        }
        return $this->render('AppBundle:pages:add.html.twig', array(
            'form' => $form->createView()
        ));
    }


        /**
         * @Route("/tricks/edit/{id}", name="edit")
         * @Security("has_role('ROLE_USER')")
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
                return $this->redirectToRoute('view', array('slug' => $trick->getSlug()));
            }
            return $this->render('AppBundle:pages:edit.html.twig', array(
                'trick' => $trick,
                'form'   => $form->createView(),
            ));
        }

    /**
     * @Route("/tricks/delete/{id}", name="delete")
     * @Security("has_role('ROLE_USER')")
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

    /**
     * @Route("/tricks/{slug}/{page}", name="view", requirements={"page": "\d+"})
     */
    public function viewAction($slug, Request $request, $page = 1)
    {
        $trick = $this->getDoctrine()->getManager()->getRepository('AppBundle:Trick')->findOneBy(array('slug' => $slug));
        if (empty($trick)) {
            throw new NotFoundHttpException("This trick ". $slug ." doesn't exist !");
        }
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        if ($page < 1) {
            throw $this->createNotFoundException("This page ".$page." doesn't exist !");
        }
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            // On récupère le service
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $comment->setAuthor($user)->setTrick($trick);
            $this->container->get('app_bundle.manager')->save($comment);
        }
        // Ici je fixe le nombre d'annonces par page à 10
        // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
        $nbPerPage = 10;
        // On récupère notre objet Paginator
        $listComments = $this->getDoctrine()->getManager()->getRepository('AppBundle:Comment')->getComments($page, $nbPerPage, $trick->getId());
        // On calcule le nombre total de pages grâce au count($listComment) qui retourne le nombre total d'annonces
        $nbPages = ceil(count($listComments) / $nbPerPage);

        $nbPages === 0.0 ? $nbPages = 1 :$nbPages;
       /*if($nbPages === 0.0){
            $nbPages = 1;
        }*/
        // Si la page n'existe pas, on retourne une 404
        if ($page > $nbPages) {
            throw $this->createNotFoundException("This ".$page." doesn't exist !");
        }
        return $this->render('AppBundle:pages:view.html.twig', array(
            'trick' => $trick,
            'form' => $form->createView(),
            'listComments' => $listComments,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'slug'        => $slug
        ));
    }

}
