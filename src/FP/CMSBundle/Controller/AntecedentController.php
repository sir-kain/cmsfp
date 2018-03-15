<?php

namespace FP\CMSBundle\Controller;

use FP\CMSBundle\Entity\Antecedent;
use FP\CMSBundle\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Antecedent controller.
 *
 * @Route("antecedent")
 */
class AntecedentController extends Controller
{
    /**
     * Lists all antecedent entities.
     *
     * @Route("/", name="antecedent_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $antecedents = $em->getRepository('FPCMSBundle:Antecedent')->findAll();

        return $this->render('FPCMSBundle:antecedent:index.html.twig', array(
            'antecedents' => $antecedents,
        ));
    }

    public function newAction(Request $request, Patient $patient)
    {
        $antecedent = new Antecedent();
        $form = $this->createForm('FP\CMSBundle\Form\AntecedentType', $antecedent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $antecedent->setPatient($patient);
            $em->persist($antecedent);
            $em->flush();

            return $this->redirectToRoute('detailpatient', array('id' => $patient->getId()));
        }

        return $this->render('FPCMSBundle:antecedent:new.html.twig', array(
            'antecedent' => $antecedent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a antecedent entity.
     *
     * @Route("/{id}", name="antecedent_show")
     * @Method("GET")
     */
    public function showAction(Antecedent $antecedent)
    {
        $deleteForm = $this->createDeleteForm($antecedent);

        return $this->render('FPCMSBundle:antecedent:show.html.twig', array(
            'antecedent' => $antecedent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing antecedent entity.
     *
     * @Route("/edit/{id}", name="antecedent_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Patient $patient
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editPAction(Request $request, Patient $patient)
    {
        $antecedent = $this->getDoctrine()->getRepository(Antecedent::class)
            ->findOneBy(['patient'  =>  $patient]);
        $editForm = $this->createForm('FP\CMSBundle\Form\AntecedentType', $antecedent);

        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');


        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('detailpatient',
                array('id' => $antecedent->getPatient()->getId()));
        }

        return $this->render('FPCMSBundle:antecedent:editP.html.twig', array(
            'antecedent' => $antecedent,
            'edit_form' => $editForm->createView(),
            'rdvUser' => $rdvuser,
            'currentDate' => $currentDate,
            'demain' => $demain
        ));
    }

    /**
     * Deletes a antecedent entity.
     *
     * @Route("/{id}", name="antecedent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Antecedent $antecedent)
    {
        $form = $this->createDeleteForm($antecedent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($antecedent);
            $em->flush();
        }

        return $this->redirectToRoute('antecedent_index');
    }

    /**
     * Creates a form to delete a antecedent entity.
     *
     * @param Antecedent $antecedent The antecedent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Antecedent $antecedent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('antecedent_delete', array('id' => $antecedent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
