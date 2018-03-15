<?php

namespace FP\CMSBundle\Controller;

use FP\CMSBundle\Entity\Consultation;
use FP\CMSBundle\Entity\Examen;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FP\CMSBundle\Entity\Patient;
use FP\CMSBundle\Form\PatientType;
use FP\CMSBundle\Form\UtilisateurType;
use FP\CMSBundle\Entity\Utilisateur;
use FP\CMSBundle\Entity\RDV;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;


class DefaultController extends Controller
{
     public function indextemplateAction()
    {

        $nbpatients = $this->getDoctrine()->getRepository(Patient::class)
            ->nombreTotalPatients();

        $nbpatientM = $this->getDoctrine()->getRepository(Consultation::class)
            ->nbPatientDuMedecin($this->getUser()->getId());

        $nbconsultations = $this->getDoctrine()->getRepository(Consultation::class)
            ->nbConsultation();

        $nbconsultationM = $this->getDoctrine()->getRepository(Consultation::class)
            ->nbConsultationByMedecin($this->getUser()->getId());

        $nbexam= $this->getDoctrine()->getRepository(Examen::class)
            ->nombreTotalExamen();

        $nbpatientexamen = $this->getDoctrine()->getRepository(Examen::class)
            ->nbpatientexamen();

        $examattent = $this->getDoctrine()->getRepository(Examen::class)
            ->getexamens();

        $groupexambyconsult = $this->getDoctrine()->getRepository(Examen::class)
            ->groupconsul();
        $nbexamenatente = sizeof($examattent);

        $nbrdvM = $this->getDoctrine()->getRepository(RDV::class)
            ->nbRdvByMedecin($this->getUser()->getId());

        $nbrdv = $this->getDoctrine()->getRepository(RDV::class)
            ->nbRdv();

        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDat1 = new \DateTime();
        $currentDat2 = new \DateTime();
        $demain = $currentDat1->modify('+1 day');

        $rdvavenir = [];
        $hier = $currentDat2->modify('-1 day')->format('Y-m-d');
        foreach ($rdvuser as $rdv) {
            if($rdv->getDateRDV()->format('Y-m-d') > $hier) {
                $rdvavenir[] = $rdv;
            }
        }
        return $this->render('FPCMSBundle:template:index.html.twig', [
//            'form' => $form->createView(),
            'rdv' => $rdvavenir,
            'rdvUser' => $rdvuser,
            'currentDate' => $currentDat1,
            'demain' => $demain,
            'data'  => [
                'groupexam' =>  $groupexambyconsult,
                'nbexamattente' => $nbexamenatente,
                'nbexamens' =>  $nbexam,
                'nbpatients'    => $nbpatients,
                'nbpatientexam' => $nbpatientexamen,
                'nbpatientM' => $nbpatientM,
                'nbconsultationM' => $nbconsultationM,
                'nbconsultations' => $nbconsultations,
                'nbrdvM'     => $nbrdvM,
                'nbrdv'     => $nbrdv,
            ],
        ]);
    }

 }

