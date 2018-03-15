<?php

namespace FP\CMSBundle\Controller;

use FP\CMSBundle\Entity\Diagnostic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Diagnostic controller.
 *
 * @Route("diagnostic")
 */
class DiagnosticController extends Controller
{
    /**
     * Lists all diagnostic entities.
     *
     * @Route("/", name="diagnostic_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $diagnostics = $em->getRepository('FPCMSBundle:Diagnostic')->findAll();

        return $this->render('diagnostic/index.html.twig', array(
            'diagnostics' => $diagnostics,
        ));
    }

    /**
     * Creates a new diagnostic entity.
     *
     * @Route("/new", name="diagnostic_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
//        $diagnostic = new Diagnostic();
//        $form = $this->createForm('FP\CMSBundle\Form\DiagnosticType', $diagnostic);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($diagnostic);
//            $em->flush();
//
//            return $this->redirectToRoute('diagnostic_show', array('id' => $diagnostic->getId()));
//        }
//
//        return $this->render('diagnostic/new.html.twig', array(
//            'diagnostic' => $diagnostic,
//            'form' => $form->createView(),
//        ));

        if($request->request->get('action') == 'new'){


            $em = $this->getDoctrine()->getManager();

            $pathologie = $em->getRepository('FPCMSBundle:Pathologie')->find($request->request->get('idMedoc'));
            $diagnostic = new Diagnostic();
            $diagnostic->setPathologie($pathologie);
            $diagnostic->setChronique($request->request->get('chronique'));
            $diagnostic->setForupdate($this->getUser()->getId());


            $pathologies = $em->getRepository('FPCMSBundle:Diagnostic')->findBy(['forupdate' => $this->getUser()->getId()]);


            $em->persist($diagnostic);
            $em->flush();

            $newMedic = [
                'ordonnance_id' => $diagnostic->getId(),
                'medic' => $pathologie->getNomPathologie(),
                'quantite' => $request->request->get('quantite'),
                'indication' => $request->request->get('indication')
            ];

            $arrData = ['output' => 'ok', 'newMedic' => $newMedic];

            // $this->get('session')->getFlashBag()->add('ordonnance', "L'ajout du medicament dans l'ordonnance s'est bien passée");

            return new JsonResponse($arrData);
        }
    }

    /**
     * Finds and displays a diagnostic entity.
     *
     * @Route("/{id}", name="diagnostic_show")
     * @Method("GET")
     */
    public function showAction(Diagnostic $diagnostic)
    {
        $deleteForm = $this->createDeleteForm($diagnostic);

        return $this->render('diagnostic/show.html.twig', array(
            'diagnostic' => $diagnostic,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing diagnostic entity.
     *
     * @Route("/{id}/edit", name="diagnostic_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Diagnostic $diagnostic)
    {
        $deleteForm = $this->createDeleteForm($diagnostic);
        $editForm = $this->createForm('FP\CMSBundle\Form\DiagnosticType', $diagnostic);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('diagnostic_edit', array('id' => $diagnostic->getId()));
        }

        return $this->render('diagnostic/edit.html.twig', array(
            'diagnostic' => $diagnostic,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a diagnostic entity.
     *
     * @Route("/{id}", name="diagnostic_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Diagnostic $diagnostic)
    {
        $form = $this->createDeleteForm($diagnostic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($diagnostic);
            $em->flush();
        }

        return $this->redirectToRoute('diagnostic_index');
    }

    /**
     * Creates a form to delete a diagnostic entity.
     *
     * @param Diagnostic $diagnostic The diagnostic entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Diagnostic $diagnostic)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('diagnostic_delete', array('id' => $diagnostic->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
