<?php

namespace FP\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FP\CMSBundle\Entity\Utilisateur;
use FP\CMSBundle\Form\UtilisateurType;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\User;

class UtilisateurController extends Controller
{
    public function indexuserAction()
    {
        if ($this->getUser() === null) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:Utilisateur');
        $users = $repository->findAll();
        return $this->render('FPCMSBundle:utilisateur:index.html.twig', [
            'utilisateurs' => $users,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    }

    public function ajoutAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        if ($this->getUser() === null) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        // $user = new User();
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::Class, $utilisateur);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('indexuser');
        }

        return $this->render('FPCMSBundle:utilisateur:ajout.html.twig', [
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    }

    public function editAction(Request $request, Utilisateur $utilisateur)
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        if ($this->getUser() === null) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $form = $this->createForm(UtilisateurType::Class, $utilisateur);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('indexuser');
        }
        return $this->render('FPCMSBundle:utilisateur:ajout.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    } 

}
