<?php

namespace FP\CMSBundle\Controller;

use FP\CMSBundle\Entity\Consultation;
use FP\CMSBundle\Entity\Examen;
use FP\CMSBundle\Entity\Ordonnance;
use FP\CMSBundle\Entity\Patient;
use FP\CMSBundle\Entity\RDV;
use FP\CMSBundle\Entity\Soustypeconsultation;
use FP\CMSBundle\Entity\Utilisateur;
use FP\CMSBundle\Form\ConsultationGeneraleType;
use FP\CMSBundle\Form\DentisteType;
use FP\CMSBundle\Form\InfirmierType;
use FP\CMSBundle\Form\MaterniteType;
use FP\CMSBundle\Form\OrdonnanceType;
use FP\CMSBundle\Form\SecretaireFactureType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ConsultationController extends Controller
{
    public function ajoutconsultationAction(Request $request, Patient $patient)
    {
        $current = new \Datetime('now');
        $toomorowDate = $current->modify('+1 day');
        $toomorowDateFormat = $toomorowDate->format('Y-m-d');
        $currentDateF = date('Y-m-d');
        $consultationwithlastRP = $this->getDoctrine()->getRepository(Consultation::class)
            ->consultationWithLastRP($patient->getId());
        if ($consultationwithlastRP !== null) {
            $currentDateF = $consultationwithlastRP->getFinRP()->format('Y-m-d');
            $toomorowDateFormat = $consultationwithlastRP->getFinRP()->modify('+1 day')->format('Y-m-d');
        }


        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $userconnected = $this->getUser();


        $consultation = new Consultation();
        $code = $this->getDoctrine()->getRepository(Consultation::class)->generateCode();
        $consultation->setNumeroconsultation($code);
        $ordonnance = new Ordonnance();

        $typeuser = $this->getUser()->getTypeuser();
        if ($typeuser->getProfil() == 'Sage femme') {
            $form = $this->createForm(MaterniteType::Class, $consultation, ['user_id' => $typeuser->getId()]);
        } elseif ($typeuser->getProfil() == 'Medecin') {
            $form = $this->createForm(ConsultationGeneraleType::Class, $consultation,
                ['user_id' => $typeuser->getId()]);
        } elseif ($typeuser->getProfil() == 'Infirmier') {
            $form = $this->createForm(ConsultationGeneraleType::Class, $consultation,
                ['user_id' => 1]);
        } elseif ($typeuser->getProfil() == 'Chirurgie dentaire') {
            $form = $this->createForm(DentisteType::Class, $consultation,
                ['user_id' => $typeuser->getId()]);
        }

        $formOrdonnance = $this->createForm(OrdonnanceType::Class, $ordonnance);

        $consultation->setDateConsultation(new \DateTime());
        $consultation->setUtilisateur($userconnected);
        $consultation->setPatient($patient);
        $form->handleRequest($request);
        $formOrdonnance->handleRequest($request);
        if ($form['r_d_v']['dateRDV']->getData() != null) {
            $rdv = new RDV();
            $rdv->setDateRDV($form['r_d_v']['dateRDV']->getData());
            $rdv->setUtilisateur($userconnected);
            $rdv->setPatient($patient);
            $consultation->setRDV($rdv);
        }
        if ($form->isSubmitted() && $form->isValid()) {
//            dump((int)$request->request->get('nbjrrepos'));
//            die();
            $nbjrep = (int)$request->request->get('nbjrrepos');
            if ($nbjrep != "") {
                if (!$this->getDoctrine()->getRepository(Consultation::class)
                    ->CanTakeRepos($nbjrep, $patient->getId(), date('Y'))) {
                    $this->get('session')->getFlashBag()->add('consultation', "La durée du repos medical a dépassé six (6) mois dans l'année");
                }
                $consultation->setDebutRP(new \DateTime('now'));
                $fin = new \DateTime('now');
                $fin = $fin->modify('+' . $nbjrep . 'day');
                $consultation->setFinRP($fin);

            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);

            $ordonnanceUpdate = $this->getDoctrine()->getRepository('FPCMSBundle:Ordonnance')
                ->findBy(['forupdateuser' => $this->getUser()->getId(), 'forupdatepatient' => $consultation->getPatient()->getId()]);
            foreach ($ordonnanceUpdate as $value) {
                $value->setConsultation($consultation);
                $value->setForupdatepatient(0);
                $value->setForupdateuser(0);
            }
            $em->flush();
            // $this->get('session')->getFlashBag()->add('ajoutPatient', "La création du patient s'est bien passée");
            return $this->redirectToRoute('detailpatient', ['id' => $patient->getId()]);

        }

        return $this->render('FPCMSBundle:consultation:ajoutconsultation.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
            'formOrdonnance' => $formOrdonnance->createView(),
            'currentDateF' => $currentDateF,
            'toom' => $toomorowDateFormat,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'prescrit' => false,
            'inf' => false
        ]);
    }

    public function ajoutconsultationinfAction(Request $request, Patient $patient)
    {
        $current = new \Datetime('now');
        $toomorowDate = $current->modify('+1 day');
        $toomorowDateFormat = $toomorowDate->format('Y-m-d');
        $currentDateF = date('Y-m-d');


        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $userconnected = $this->getUser();


        $consultation = new Consultation();
        $code = $this->getDoctrine()->getRepository(Consultation::class)->generateCode();
        $consultation->setNumeroconsultation($code);
        $ordonnance = new Ordonnance();

        $typeuser = $this->getUser()->getTypeuser();
        if ($typeuser->getProfil() == 'Secretaire') {
            $form = $this->createForm(SecretaireFactureType::Class, $consultation, ['user_id' => $typeuser->getId()]);
        } else {
            $form = $this->createForm(InfirmierType::Class, $consultation, ['user_id' => $typeuser->getId()]);
        }


        $formOrdonnance = $this->createForm(OrdonnanceType::Class, $ordonnance);

        $consultation->setDateConsultation(new \DateTime());
        $consultation->setUtilisateur($userconnected);
        $consultation->setPatient($patient);
        $consultation->setObservation('Cette cosultation est créee par la secretaire juste pour prescrire un examen');
        $consultation->setSoustypeconsultation(
            $this->getDoctrine()->getRepository(Soustypeconsultation::class)
                ->find(16)
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);
            $em->flush();
            // $this->get('session')->getFlashBag()->add('ajoutPatient', "La création du patient s'est bien passée");
            if ($typeuser->getProfil() == 'Secretaire') {
                return $this->redirectToRoute('examen_index');
            } else {
                return $this->redirectToRoute('detailpatient', ['id' => $patient->getId()]);
            }

        }

        return $this->render('FPCMSBundle:consultation:ajoutconsultation.html.twig', [
            'inf' => true,
            'patient' => $patient,
            'form' => $form->createView(),
            'formOrdonnance' => $formOrdonnance->createView(),
            'currentDateF' => $currentDateF,
            'toom' => $toomorowDateFormat,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'prescrit' => false
        ]);
    }

    public function editconsultationinfAction(Request $request, Consultation $consultation)
    {
        $current = new \Datetime('now');
        $toomorowDate = $current->modify('+1 day');
        $toomorowDateFormat = $toomorowDate->format('Y-m-d');
        $currentDateF = date('Y-m-d');


        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $userconnected = $this->getUser();

        $ordonnance = new Ordonnance();

        $typeuser = $this->getUser()->getTypeuser();
        $form = $this->createForm(InfirmierType::Class, $consultation, ['user_id' => $typeuser->getId()]);


        $formOrdonnance = $this->createForm(OrdonnanceType::Class, $ordonnance);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);
            $em->flush();
            // $this->get('session')->getFlashBag()->add('ajoutPatient', "La création du patient s'est bien passée");
            return $this->redirectToRoute('detailpatient', ['id' => $consultation->getPatient()->getId()]);

        }

        return $this->render('FPCMSBundle:consultation:ajoutconsultation.html.twig', [
            'inf' => true,
            'patient' => $consultation->getPatient(),
            'form' => $form->createView(),
            'formOrdonnance' => $formOrdonnance->createView(),
            'currentDateF' => $currentDateF,
            'toom' => $toomorowDateFormat,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'prescrit' => false,
            // 'formAntecedent' => $formAntecedent->createView()
        ]);
    }

    public function editconsultationAction(Request $request, Consultation $consultation)
    {
        dump($consultation);
        $userconnected = $this->getUser();
        if ($userconnected->getId() != $consultation->getUtilisateur()->getId()) {
            $this->get('session')->getFlashBag()->add('droitConsultation', "Vous n'avez pas crée la consultation que vous tentez de modifier");
            return $this->redirectToRoute('detailpatient', ['id' => $consultation->getPatient()->getId()]);
        }
        $current = new \Datetime('now');
        $toomorowDate = $current->modify('+1 day');
        $toomorowDateFormat = $toomorowDate->format('Y-m-d');
        $currentDateF = date('Y-m-d');
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $ordonnance = new Ordonnance();
        $ordonnancePrescrits = $this->getDoctrine()->getRepository('FPCMSBundle:Ordonnance')->findBy(['consultation' => $consultation]);

        $typeuser = $this->getUser()->getTypeuser();
        if ($typeuser->getProfil() == 'Sage femme') {
            $form = $this->createForm(MaterniteType::Class, $consultation, ['user_id' => $typeuser->getId()]);
        } elseif ($typeuser->getProfil() == 'Medecin' || $typeuser->getProfil() == 'Infirmier') {
            $form = $this->createForm(ConsultationGeneraleType::Class, $consultation, ['user_id' => $typeuser->getId()]);
        } elseif ($typeuser->getProfil() == 'Chirurgie dentaire') {
            $form = $this->createForm(DentisteType::Class, $consultation, ['user_id' => $typeuser->getId()]);
        }

        $formOrdonnance = $this->createForm(OrdonnanceType::Class, $ordonnance);
        $form->handleRequest($request);
        $formOrdonnance->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nbjrep = (int)$request->request->get('nbjrrepos');
            if ($nbjrep != "") {
                $consultation->setDebutRP(new \DateTime());
                $fin = new \DateTime('now');
                $fin = $fin->modify('+' . $nbjrep . 'day');
                $consultation->setFinRP($fin);
                if (!$this->getDoctrine()->getRepository(Consultation::class)
                    ->CanTakeRepos($nbjrep, $consultation->getPatient()->getId(), date('Y'))) {
                    $this->get('session')->getFlashBag()->add('consultation', "La durée du repos medical a dépassé six (6) mois dans l'année");
                }
            }
            $em = $this->getDoctrine()->getManager();
            if ($form['r_d_v']['dateRDV']->getData() == null) {
                $rdvtodelete = $consultation->getRDV();
                if ($rdvtodelete != null) {
                    $consultation->setRDV(null);
                    $em->remove($rdvtodelete);
                }
            } else {
                $rdvConsult = $consultation->getRDV();
                $rdvConsult->setPatient($consultation->getPatient());
                $rdvConsult->setUtilisateur($consultation->getUtilisateur());
            }
            $ordonnanceUpdate = $this->getDoctrine()->getRepository('FPCMSBundle:Ordonnance')
                ->findBy(['forupdateuser' => $userconnected, 'forupdatepatient' => $consultation->getPatient()]);
            foreach ($ordonnanceUpdate as $value) {
                $value->setConsultation($consultation);
                $value->setForupdateUser(0);
                $value->setForupdatePatient(0);
            }
//            dump($consultation->getTypeexamen()[0]->getId());
            $em->flush();
//            dump($consultation->getTypeexamen()[0]->getId());
//            die();
            $this->get('session')->getFlashBag()->add('consultview', "Modification complete");
            return $this->redirectToRoute('consultationview', ['id' => $consultation->getId()]);
        }

        return $this->render('FPCMSBundle:consultation:ajoutconsultation.html.twig', ['patient' => $consultation->getPatient(),
            'form' => $form->createView(),
            'formOrdonnance' => $formOrdonnance->createView(),
            'currentDateF' => $currentDateF,
            'toom' => $toomorowDateFormat,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'prescrit' => $ordonnancePrescrits,
            'inf' => false// 'formAntecedent' => $formAntecedent->createView()
        ]);
    }

    public function consultationviewAction(Consultation $consultation)
    {
        $tptab = [];
        foreach ($consultation->getTypeexamen() as $tp) {
            $tptab[] = $tp->getNomTypeExamen();
        }
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $examens = $this->getDoctrine()->getRepository('FPCMSBundle:Examen')
            ->findBy(['consultation' => $consultation->getId()]);
        dump($examens);

        $tabtypeexam = [];
        foreach ($examens as $exam) {
            $tabtypeexam[] = [
                'typeexam' => $exam->getTypeexamen()->getId(),
                'resultat' => $exam->getChampstypeexam()->getId()
            ];
        }


        $repositoryO = $this->getDoctrine()->getRepository('FPCMSBundle:Ordonnance');
        $ordonnanceConsult = $repositoryO->findBy(['consultation' => $consultation]);
        if ($consultation->getFinRP() != null) {
            $repos = date_diff($consultation->getFinRP(), $consultation->getDebutRP())->days;
        } else {
            $repos = false;
        }
        return $this->render('FPCMSBundle:consultation:consultationview.html.twig', [
            'consultation' => $consultation,
            'examens' => $examens,
            'ordoConsult' => $ordonnanceConsult,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'dureerepos' => $repos,
            'tptab' => $tptab
        ]);
    }

    /**
     *
     * @return JsonResponse
     */
    public function consultAction()
    {
        if ($this->getUser()->getTypeUser()->getProfil() == 'Administrateur') {
            $arrData = $nbconsultations = $this->getDoctrine()->getRepository(Consultation::class)
                ->getnbConsultByPeriod();
        } elseif ($this->getUser()->getTypeUser()->getProfil() == 'Laborantin') {
            $arrData = $this->getDoctrine()->getRepository(Examen::class)
                ->getnbExamenByPeriodandUser($this->getUser()->getId());
        } else {
            $arrData = $nbconsultations = $this->getDoctrine()->getRepository(Consultation::class)
                ->getnbConsultByPeriodandUser($this->getUser()->getId());
        }

        return new JsonResponse($arrData);
    }

    public function printrpAction(Consultation $consultation)
    {
        $nbjrour = date_diff($consultation->getFinRP(), $consultation->getDebutRP())->days;
        $html = $this->renderView('FPCMSBundle:patient:printrp.html.twig', array(
            'consultation' => $consultation,
            'nbjour' => $nbjrour
        ));

        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'reposmedical_pour_' . $consultation->getPatient()->getPrenomPatient() . '.pdf'
        );
    }

    /**
     * @param Consultation $consultation
     * @return PdfResponse
     */
    public function printexamAction(Consultation $consultation)
    {
        $examens = $this->getDoctrine()->getRepository(Examen::class)
            ->findBy(['consultation' => $consultation]);

        $age = date_diff(new \DateTime('now'), $consultation->getPatient()->getDateNaiss())->y;
        $html = $this->renderView('FPCMSBundle:patient:printexam.html.twig', array(
            'consultation' => $consultation,
            'exam' => $examens[0],
            'examens' => $examens,
            'age' => $age
        ));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'resultat_examen_pour_' . $consultation->getPatient()->getPrenomPatient() . '.pdf'
        );
    }

    /**
     * @param Examen $examen
     * @return PdfResponse
     */
    public function printexamwithoutconsultAction(Examen $examen)
    {

        $examens = $this->getDoctrine()->getRepository(Examen::class)
            ->findBy(['patient' => $examen->getPatient(), 'typeexamen' => $examen->getTypeexamen()]);
        $tabexam = [];
        foreach ($examens as $exam) {
            if (date_diff($exam->getDateAjout(), $examen->getDateAjout())->days == 0) {
                $tabexam[] = $exam;
            }
        }

        $age = date_diff(new \DateTime('now'), $examen->getPatient()->getDateNaiss())->y;
        $html = $this->renderView('FPCMSBundle:patient:printexam.html.twig', array(
            'consultation' => null,
            'exam' => $tabexam[0],
            'examens' => $tabexam,
            'age' => $age,
            'laborantin' => $this->getUser(),
        ));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'resultat_examen_pour_' . $examen->getPatient()->getPrenomPatient() . '.pdf'
        );
    }

    public function printordonnanceAction(Consultation $consultation)
    {
        $repositoryO = $this->getDoctrine()->getRepository('FPCMSBundle:Ordonnance');
        $ordonnanceConsult = $repositoryO->findBy(['consultation' => $consultation]);
        $html = $this->renderView('FPCMSBundle:patient:printordonnance.html.twig', array(
            'consultation' => $consultation,
            'ordonance' => $ordonnanceConsult
        ));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'ordonnance_pour_' . $consultation->getPatient()->getPrenomPatient() . '.pdf'
        );
    }


    public function printbulletinexamAction(Consultation $consultation)
    {
//        $consultation = $this->getDoctrine()->getRepository(Consultation::class)
//            ->findBy(['consultation' => $consultation]);
        $html = $this->renderView('FPCMSBundle:patient:printexamprescription.html.twig', array(
            'consultation' => $consultation
        ));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'bulletin_examen_pour_' . $consultation->getPatient()->getPrenomPatient() . '.pdf'
        );
    }


}
