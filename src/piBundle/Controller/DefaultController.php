<?php

namespace piBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function homeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $usr= $this->get('security.token_storage')->getToken()->getUser()->getRole();
        //die($usr);
        if ($usr == 'ROLE_ADMIN'){
            return $this->redirectToRoute('admin_home');
        }elseif ($usr == 'ROLE_USER'){
            return $this->redirectToRoute('user_home');
        }


    }

    public function homeAdminAction(Request $request)
    {
            $em = $this->getDoctrine()->getManager();
            $users = $em->getRepository('piBundle:User')->findAll();

            return $this->render('piBundle:Default:homeAdmin.html.twig', array(
                'users' => $users));
        
    }

    public function homeUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('piBundle:User')->findAll();

        return $this->render('piBundle:Default:homeUser.html.twig', array(
            'users' => $users));
    }
    public function profileUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('piBundle:Default:profileUser.html.twig', array(
            'users' => $users));
    }
    public function profileAdminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('piBundle:Default:profileAdmin.html.twig', array(
            'users' => $users));
    }

}