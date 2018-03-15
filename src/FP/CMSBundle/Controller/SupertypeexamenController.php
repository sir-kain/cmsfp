<?php

namespace FP\CMSBundle\Controller;

use FP\CMSBundle\Entity\Supertypeexamen;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Supertypeexaman controller.
 *
 * @Route("supertypeexamen")
 */
class SupertypeexamenController extends Controller
{
    /**
     * Lists all supertypeexaman entities.
     *
     * @Route("/", name="supertypeexamen_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $em = $this->getDoctrine()->getManager();

        $supertypeexamens = $em->getRepository('FPCMSBundle:Supertypeexamen')->findAll();

        return $this->render('supertypeexamen/index.html.twig', array(
            'supertypeexamens' => $supertypeexamens,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ));
    }

    /**
     * Creates a new supertypeexaman entity.
     *
     * @Route("/new", name="supertypeexamen_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $supertypeexaman = new Supertypeexamen();
        $form = $this->createForm('FP\CMSBundle\Form\SupertypeexamenType', $supertypeexaman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($supertypeexaman);
            $em->flush();

            return $this->redirectToRoute('supertypeexamen_show', array('id' => $supertypeexaman->getId()));
        }

        return $this->render('supertypeexamen/new.html.twig', array(
            'supertypeexaman' => $supertypeexaman,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ));
    }

    /**
     * Finds and displays a supertypeexaman entity.
     *
     * @Route("/{id}", name="supertypeexamen_show")
     * @Method("GET")
     */
    public function showAction(Supertypeexamen $supertypeexaman)
    {
        $deleteForm = $this->createDeleteForm($supertypeexaman);

        return $this->render('supertypeexamen/show.html.twig', array(
            'supertypeexaman' => $supertypeexaman,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing supertypeexaman entity.
     *
     * @Route("/{id}/edit", name="supertypeexamen_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Supertypeexamen $supertypeexaman)
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $deleteForm = $this->createDeleteForm($supertypeexaman);
        $editForm = $this->createForm('FP\CMSBundle\Form\SupertypeexamenType', $supertypeexaman);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('supertypeexamen_edit', array('id' => $supertypeexaman->getId()));
        }

        return $this->render('supertypeexamen/edit.html.twig', array(
            'supertypeexaman' => $supertypeexaman,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ));
    }

    /**
     * Deletes a supertypeexaman entity.
     *
     * @Route("/{id}", name="supertypeexamen_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Supertypeexamen $supertypeexaman)
    {
        $form = $this->createDeleteForm($supertypeexaman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($supertypeexaman);
            $em->flush();
        }

        return $this->redirectToRoute('supertypeexamen_index');
    }

    /**
     * Creates a form to delete a supertypeexaman entity.
     *
     * @param Supertypeexamen $supertypeexaman The supertypeexaman entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Supertypeexamen $supertypeexaman)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('supertypeexamen_delete', array('id' => $supertypeexaman->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
