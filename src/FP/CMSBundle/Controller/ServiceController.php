<?php

namespace FP\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FP\CMSBundle\Entity\Service;
use FP\CMSBundle\Form\ServiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ServiceController extends Controller
{
    public function indexserviceAction()
    {
        if ($this->getUser() === null) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:Service');
        $services = $repository->findAll();
        return $this->render('FPCMSBundle:service:indexservice.html.twig', [
            'services' => $services,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    } 

    public function ajoutserviceAction(Request $request)
    {
        if ($this->getUser() === null) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $service = new Service();
        $form = $this->createForm(ServiceType::Class, $service);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();
            $this->get('session')->getFlashBag()->add('ajoutService', "La création du service s'est bien passée");
            return $this->redirectToRoute('indexservice');
        }

        return $this->render('FPCMSBundle:service:ajoutservice.html.twig', [
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    } 

    public function editserviceAction(Request $request, Service $service)
    {
        if ($this->getUser() === null) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $form = $this->createForm(ServiceType::Class, $service);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('modifService', "La modification du service s'est bien passée");
            return $this->redirectToRoute('indexservice');
        }
        return $this->render('FPCMSBundle:service:ajoutservice.html.twig', [
            'service' => $service,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    } 


    public function deleteserviceAction(Request $request, Service $service)
    {
        if($request->request->get('action') == 'deleteservice'){

            $arrData = ['output' => 'ok'];
            // $form = $this->createForm(ServiceType::Class, $service);
            // $form->handleRequest($request);
            
            // if ($form->isSubmitted()) {
                // var_dump($request);die();
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($service);
            $em->flush();
            return new JsonResponse($arrData);
        }
            
        //     return $this->redirectToRoute('indexservice');
        // // }
        // return $this->render('FPCMSBundle:service:ajoutservice.html.twig', [
        //     'service' => $service,
        //     'form' => $form->createView()
        // ]);
 
    } 

}