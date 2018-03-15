<?php

namespace FP\CMSBundle\Controller;

use CMSFP\TagBundle\Form\Type\MedicamentsType;
use FP\CMSBundle\Entity\Medicament;
use FP\CMSBundle\Entity\Ordonnance;
use FP\CMSBundle\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Ordonnance controller.
 *
 */
class OrdonnanceController extends Controller
{
    /**
     * Lists all ordonnance entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnances = $em->getRepository('FPCMSBundle:Ordonnance')->findAll();

        return $this->render('ordonnance/index.html.twig', array(
            'ordonnances' => $ordonnances,
        ));
    }

    /**
     * Creates a new ordonnance entity.
     * @param Request $request
     * @return JsonResponse
     */
    public function newAction(Request $request)
    {
        if($request->request->get('action') == 'new'){

            $em = $this->getDoctrine()->getManager();
            $medicament = $em->getRepository('FPCMSBundle:Medicament')
                ->findOneBy(['nomMedicament' => $request->request->get('idMedoc')]);

            if ($medicament == null) {
                $medicament = new Medicament();
                $medicament->setNomMedicament($request->request->get('idMedoc'));
                $em->persist($medicament);
            }
            $ordonnance = new Ordonnance();
            $ordonnance->setMedicament($medicament);
            $ordonnance->setQuantite($request->request->get('quantite'));
            $ordonnance->setNombreunite($request->request->get('unite'));
            $ordonnance->setIndication($request->request->get('indication'));
            $ordonnance->setForupdateuser($this->getUser()->getId());
            $ordonnance->setForupdatepatient($request->request->get('id'));

            
            $medicaments = $em->getRepository('FPCMSBundle:Ordonnance')->findBy(['forupdateuser' => $this->getUser()->getId()]);
            
            
            $em->persist($ordonnance);
            $em->flush();

            $newMedic = [
                'ordonnance_id' => $ordonnance->getId(),
                'medic' => $medicament->getNomMedicament(),
                'quantite' => $request->request->get('quantite'),
                'unite' => $request->request->get('unite'),
                'indication' => $request->request->get('indication')
            ];
            
            $arrData = ['output' => 'ok', 'newMedic' => $newMedic];

            return new JsonResponse($arrData);
        }
    }

    /**
     * Finds and displays a ordonnance entity.
     * @param Ordonnance $ordonnance
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Ordonnance $ordonnance)
    {
        $deleteForm = $this->createDeleteForm($ordonnance);

        return $this->render('ordonnance/show.html.twig', array(
            'ordonnance' => $ordonnance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ordonnance entity.
     *
     */
    public function editAction(Request $request, Ordonnance $ordonnance)
    {
        $deleteForm = $this->createDeleteForm($ordonnance);
        $editForm = $this->createForm('FP\CMSBundle\Form\OrdonnanceType', $ordonnance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ordonnance_edit', array('id' => $ordonnance->getId()));
        }

        return $this->render('ordonnance/editP.html.twig', array(
            'ordonnance' => $ordonnance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ordonnance entity.
     *
     */
    public function deleteAction(Request $request, Ordonnance $ordonnance)
    {
        if($request->request->get('action') == 'deletemedic'){

            $arrData = ['output' => 'ok'];
            // $form = $this->createForm(ServiceType::Class, $service);
            // $form->handleRequest($request);
            
            // if ($form->isSubmitted()) {
                // var_dump($request);die();
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($ordonnance);
            $em->flush();
            return new JsonResponse($arrData);
        }
        // $form = $this->createDeleteForm($ordonnance);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $em = $this->getDoctrine()->getManager();
        //     $em->remove($ordonnance);
        //     $em->flush();
        // }

        // return $this->redirectToRoute('ordonnance_index');
    }

    /**
     * Creates a form to delete a ordonnance entity.
     *
     * @param Ordonnance $ordonnance The ordonnance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ordonnance $ordonnance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordonnance_delete', array('id' => $ordonnance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
