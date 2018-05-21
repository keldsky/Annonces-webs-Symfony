<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\CategorieAnnonce;
use AppBundle\Entity\TypeAnnonce;
use AppBundle\Form\AnnonceForm_;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Class AdminController extends Controller
{
    /**
     *@Route("/")
     */
    public function flowAction()
    {

//return new Response('<html><body>Hello World</body></html>');
        return $this->render('layout_login.html.twig');


    }
    /**
     *@Route("/newannonce",name="deposer_annonce")
     */
    public function formAction(Request $request)
    {


        // 1) build the form
        $annonce = new Annonce();


        $categ = $this->getDoctrine()
            ->getRepository(CategorieAnnonce::class)
            ->findAllCategorie();

        $type = $this->getDoctrine()
            ->getRepository(TypeAnnonce::class)
            ->findAllTypeAnnonce();

        $form = $this->createForm(AnnonceForm_::class, $annonce,array(
            'type' => $type,'categ' => $categ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('annonce_show');
        }

             return $this->render(
                 'membres/ajoutannonce.html.twig', array('form' => $form->createView(),'categ' => $categ ,'type' => $type)
             );


    }
    /**
     *@Route("/show",name="annonce_show")
     */
    public function show_annoncAction()
    {

        $annonc = $this->getDoctrine()
            ->getRepository(Annonce::class)
            ->findAll_Annonce();

        return $this->render(
            'membres/listannonce.html.twig', array('annonc' => $annonc)
        );


    }
    /**
     *@Route("/infos",name="user")
     */
    public function show_userInfos()
    {

        $userinfo = null;

        return $this->render(
            'membres/infosuser.html.twig', array('userinfo' => $userinfo )
        );


    }

    /**
     * @Route("/home",name="dashboard")
     */
    public function homeAction()
    {

//return new Response('<html><body>Hello World</body></html>');
        $annonc = $this->getDoctrine()
            ->getRepository(Annonce::class)
            ->findAll_Annonce();

        return $this->render(
            'membres/listannonce.html.twig', array('annonc' => $annonc)
        );



    }


    public function listAction()
    {

    }

    /**
     * @Route("/forgot",name="forgot_password")
     */
    public function forgotPasswordAction()
    {

//return new Response('<html><body>Hello World</body></html>');
        return $this->render('layout.html.twig');


    }



}

?>