<?php

namespace FP\CMSBundle\Controller;

use FP\CMSBundle\Entity\Medicament;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Medicament controller.
 *
 * @Route("medicament")
 */
class MedicamentController extends Controller
{
    /**
     * Lists all medicament entities.
     *
     * @Route("/", name="medicament_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        if ($this->getUser() === null) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $em = $this->getDoctrine()->getManager();

        $medicaments = $em->getRepository('FPCMSBundle:Medicament')->findAll();

        return $this->render('FPCMSBundle:medicament:index.html.twig', array(
            'medicaments' => $medicaments,
            'rdvUser' => $rdvuser,
            'currentDate' => $currentDate,
            'demain' => $demain,
        ));
    }

    /**
     * Creates a new medicament entity.
     *
     * @Route("/new", name="medicament_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $new = true;
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $medicament = new Medicament();
        $form = $this->createForm('FP\CMSBundle\Form\MedicamentType', $medicament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($medicament);
            $em->flush();
            $this->get('session')->getFlashBag()->add('medicament', "La création du medicament s'est bien passée");
            return $this->redirectToRoute('medicament_index');
        }

        return $this->render('FPCMSBundle:medicament:new.html.twig', array(
            'medicament' => $medicament,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'currentDate' => $currentDate,
            'demain' => $demain,
            'new' => $new
        ));
    }

    /**
     * Finds and displays a medicament entity.
     *
     * @Route("/{id}", name="medicament_show")
     * @Method("GET")
     */
    public function showAction(Medicament $medicament)
    {
        $deleteForm = $this->createDeleteForm($medicament);

        return $this->render('FPCMSBundle:medicament:show.html.twig', array(
            'medicament' => $medicament,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing medicament entity.
     *
     * @Route("/{id}/edit", name="medicament_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Medicament $medicament)
    {
        $new = false;
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $editForm = $this->createForm('FP\CMSBundle\Form\MedicamentType', $medicament);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('medicament', "La modification du medicament s'est bien passée");
            return $this->redirectToRoute('medicament_index');
        }

        return $this->render('FPCMSBundle:medicament:new.html.twig', array(
            'medicament' => $medicament,
            'form' => $editForm->createView(),
            'rdvUser' => $rdvuser,
            'currentDate' => $currentDate,
            'demain' => $demain,
            'new' => $new
        ));
    }

    /**
     * Deletes a medicament entity.
     *
     * @Route("/{id}", name="deletemedicament")
     * @Method("DELETE")
     */
    public function deletemedicamentAction(Request $request, Medicament $medicament)
    {
        if($request->request->get('action') == 'deletemedicament'){
            
                $arrData = ['output' => 'ok'];
                // $form = $this->createForm(ServiceType::Class, $service);
                // $form->handleRequest($request);
                
                // if ($form->isSubmitted()) {
                    // var_dump($request);die();
                
                $em = $this->getDoctrine()->getManager();
                $em->remove($medicament);
                $em->flush();
                $this->get('session')->getFlashBag()->add('medicament', "La suppression du medicament s'est bien passée");
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
