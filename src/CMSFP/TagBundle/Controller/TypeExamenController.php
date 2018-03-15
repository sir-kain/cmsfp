<?php

namespace CMSFP\TagBundle\Controller;

use CMSFP\TagBundle\Entity\TypeExamen;
use FP\CMSBundle\Entity\Champstypeexam;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Typeexaman controller.
 *
 * @Route("typeexamen")
 */
class TypeExamenController extends Controller
{
    /**
     * Lists all typeExaman entities.
     *
     * @Route("/", name="typeexamen_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $em = $this->getDoctrine()->getManager();

        $typeExamens = $em->getRepository('TagBundle:TypeExamen')->findAll();

        return $this->render('typeexamen/index.html.twig', array(
            'typeExamens' => $typeExamens,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ));
    }

    /**
     * Creates a new typeExaman entity.
     *
     * @Route("/new", name="typeexamen_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $typeExaman = new TypeExamen();
        $champs = new Champstypeexam();
        $form = $this->createForm('CMSFP\TagBundle\Form\TypeExamenType', $typeExaman);
        $formChamps = $this->createForm('FP\CMSBundle\Form\ChampstypeexamType', $champs);
        $form->handleRequest($request);
        $formChamps->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeExaman);
            $champs->setLibelle($typeExaman->getNomTypeExamen());
            $champs->setTypeexamen($typeExaman);
            $em->persist($champs);
            $em->flush();

            $this->get('session')->getFlashBag()->add('typeexam', "La création du type d'examen s'est bien passée");
            return $this->redirectToRoute('typeexamen_index');
        }

        return $this->render('typeexamen/new.html.twig', array(
            'typeExaman' => $typeExaman,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'champs'    =>  $formChamps->createView()
        ));
    }

    /**
     * Finds and displays a typeExaman entity.
     *
     * @Route("/{id}", name="typeexamen_show")
     * @Method("GET")
     */
    public function showAction(TypeExamen $typeExaman)
    {
        $deleteForm = $this->createDeleteForm($typeExaman);

        return $this->render('typeexamen/show.html.twig', array(
            'typeExaman' => $typeExaman,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeExaman entity.
     *
     * @Route("/{id}/edit", name="typeexamen_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeExamen $typeExaman)
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $champs = $this->getDoctrine()->getRepository(Champstypeexam::class)
            ->findOneBy(['typeexamen' => $typeExaman]);
        $deleteForm = $this->createDeleteForm($typeExaman);
        $editForm = $this->createForm('CMSFP\TagBundle\Form\TypeExamenType', $typeExaman);
        $formChamps = $this->createForm('FP\CMSBundle\Form\ChampstypeexamType', $champs);
        $editForm->handleRequest($request);
        $formChamps->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $champs->setLibelle($typeExaman->getNomTypeExamen());
            $champs->setTypeexamen($typeExaman);
//            $this->getDoctrine()->getManager()->persist($champs);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typeexamen_edit', array('id' => $typeExaman->getId()));
        }

        return $this->render('typeexamen/edit.html.twig', array(
            'typeExaman' => $typeExaman,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'champs'    =>  $formChamps->createView()
        ));
    }

    /**
     * Deletes a typeExaman entity.
     *
     * @Route("/{id}", name="typeexamen_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeExamen $typeExaman)
    {

        $form = $this->createDeleteForm($typeExaman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeExaman);
            $em->flush();
        }

        return $this->redirectToRoute('typeexamen_index');
    }

    /**
     * Creates a form to delete a typeExaman entity.
     *
     * @param TypeExamen $typeExaman The typeExaman entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeExamen $typeExaman)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeexamen_delete', array('id' => $typeExaman->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
