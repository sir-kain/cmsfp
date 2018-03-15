<?php

namespace FP\CMSBundle\Controller;

use CMSFP\TagBundle\Entity\TypeExamen;
use Doctrine\DBAL\DBALException;
use FP\CMSBundle\Entity\Champstypeexam;
use FP\CMSBundle\Entity\Consultation;
use FP\CMSBundle\Entity\Examen;
use FP\CMSBundle\Entity\Patient;
use FP\CMSBundle\Form\PatientExamenType;
use FP\CMSBundle\Form\PatientType;
use FP\CMSBundle\Repository\ExamenRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Examan controller.
 *
 *
 * @Route("examen")
 */
class ExamenController extends Controller
{
    /**
     * Lists all examan entities.
     *
     * @Route("/lastest", name="examen_lastest")
     * @Method("GET")
     */
    public function indexlastestAction()
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $examens = $this->getDoctrine()->getManager()->getRepository('FPCMSBundle:Examen')
            ->findAll();

        $tabconsul = $this->getDoctrine()->getManager()->getRepository(Examen::class)
            ->getHistoriqueExamenByConsult();

        $groupByconsul = [];

        foreach ($tabconsul as $item) {
//            dump($item['consultation_id']);
            if ($item['consultation_id'] != null) {
                $groupByconsul[] = $this->getDoctrine()->getRepository(Examen::class)
                    ->getTypeExamIdByIdConsult($item['consultation_id']);

            }
        }


        dump($groupByconsul);

        return $this->render('examen/indexlastest.html.twig', array(
            'examens' => $examens,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'examsbyconsult' => $groupByconsul
        ));
    }

    /**
     * Liste des examens en attente.
     *
     * @Route("/", name="examen_index")
     * @Method("GET")
     * @throws DBALException
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $examens = $this->getDoctrine()->getRepository(Examen::class)
            ->getexamens();

        if ($this->getUser()->getTypeUser()->getProfil() == 'Secretaire') {

            $tabconsul = $this->getDoctrine()->getRepository(Examen::class)
                ->getexamensByConsult();
        } else {
            $tabconsul = $this->getDoctrine()->getRepository(Examen::class)
                ->getexamensActifByConsult();
        }

        $groupByconsul = [];

        $j = 1;
        foreach ($tabconsul as $item) {
//            $groupByconsul[$j] = [];
            for ($i = 0; $i < sizeof($examens); $i++) {

                if ($item['numeroconsultation'] == $examens[$i]['numeroconsultation']) {
                    $groupByconsul[$j][$i] =
                        $examens[$i];
                }
            }
            $j++;
        }

//        dump($groupByconsul);


        return $this->render('examen/index.html.twig', array(
            'examens' => $examens,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'examsByConsult' => $groupByconsul,
            'tabconsult' => $tabconsul
        ));
    }

    /**
     * Creates a new examan entity.
     *
     * @Route("/new/1/consultation={consultationid}/typeexamen={typeexamenid}", name="examen_new1")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param int $consultationid
     * @param int $typeexamenid
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @internal param Consultation $consultation
     * @internal param TypeExamen $typeexamen
     * @internal param TypeExamen $typeexam
     */
    public function new1Action(Request $request, int $consultationid, int $typeexamenid)
    {
        $consultation = $this->getDoctrine()->getRepository(Consultation::class)
            ->find($consultationid);
        $typeexamen = $this->getDoctrine()->getRepository(TypeExamen::class)
            ->find($typeexamenid);
        $champsTE = $this->getDoctrine()->getRepository(Champstypeexam::class)
            ->findBy(['typeexamen' => $typeexamenid]);

        $data = [
            'consultation' => $consultation,
            'typeexam' => $typeexamen,
            'champsTE' => $champsTE
        ];
        return $this->json($data);

    }

    /**
     * Creates a new examan entity.
     *
     * @Route("/new/consultation={consultationid}&typeexamen={typeexamenid}", name="examen_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param int $consultationid
     * @param int $typeexamenid
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @internal param Consultation $consultation
     * @internal param TypeExamen $typeexamen
     * @internal param TypeExamen $typeexam
     */
    public function newAction(Request $request, int $consultationid, int $typeexamenid)
    {
        if ($consultationid != 0) {
            $consultation = $this->getDoctrine()->getRepository(Consultation::class)
                ->find($consultationid);
            $patient = $consultation->getPatient();
        } else {
            $consultation = null;
            $patient = $this->getDoctrine()->getRepository(Patient::class)
                ->findOneBy(['numerodossier' => $request->request->get('matriculepatient')]);
        }
        $typeexamen = $this->getDoctrine()->getRepository(TypeExamen::class)
            ->find($typeexamenid);
        $champsTE = $this->getDoctrine()->getRepository(Champstypeexam::class)
            ->findBy(['typeexamen' => $typeexamen->getId()]);

        $prix = $typeexamen->getPrix();
        if ($patient->getTypePatient() == $this->getDoctrine()->getRepository(Champstypeexam::class)->find(1)) {
            $montantaretiter = $prix * 0.8;
            $prix = $prix - $montantaretiter;
        }


        if ($request->request->get('action') == 'new') {
            $champtypeexamen = $this->getDoctrine()->getRepository(Champstypeexam::class)
                ->find($request->request->get('champid'));
            $examToAd = new Examen();
            if ($consultationid != 0) {
                $examToAd->setConsultation($consultation);
            }
            $examToAd->setTypeexamen($typeexamen);
            $examToAd->setResultat($request->request->get('resultat'));
            $examToAd->setDateprelevement(new \DateTime($request->request->get('datepre')));
            $examToAd->setChampstypeexam($champtypeexamen);
            $examToAd->setPatient($patient);
            $examToAd->setDateAjout(new \DateTime('now'));
            $examToAd->setUtilisateur($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($examToAd);
            $em->flush();

            $output = ['output' => $examToAd->getId()];
            return new JsonResponse($output);
        }

        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $examan = new Examen();
        $examan->setDateAjout(new \DateTime('now'));
        $form = $this->createForm('FP\CMSBundle\Form\ExamenType', $examan);
        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {
//            $examan->setPrix($prix);
//            $examan->setConsultation($consultation);
//            $examan->setTypeexamen($typeexamen);
//            $examan->setPatient($consultation->getPatient());
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($examan);
//            $em->flush();
//
//            return $this->redirectToRoute('examen_show', array('id' => $examan->getId()));
//        }

//        les autres examens du patient de meme type
        $otherexam = $this->getDoctrine()->getRepository('FPCMSBundle:Examen')
            ->findBy(['patient' => $consultation->getPatient(), 'typeexamen' => $typeexamen], ['dateAjout' => 'DESC']);
        return $this->render('examen/new.html.twig', array(
            'newpatient' => false,
            'examen' => $examan,
            'prix' => $prix,
            'consultation' => $consultation,
            'typeexam' => $typeexamen,
            'otherexam' => $otherexam,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'champsTE' => $champsTE,
            'champsnb' => sizeof($champsTE)
        ));
    }

    /**
     * Creates a new newest examan entity.
     *
     * @Route("/newest/", name="examen_newest")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newestAction(Request $request)
    {
//
//        $prix = $typeexamen->getPrix();
//        if ($consultation->getPatient()->getTypePatient()->getType() == 'Ayant droit') {
//            $montantaretiter = $prix * 0.8;
//            $prix = $prix - $montantaretiter;
//        }
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $examan = new Examen();
        $examan->setUtilisateur($this->getUser());
        $examan->setDateAjout(new \DateTime('now'));
        $form = $this->createForm('FP\CMSBundle\Form\ExamenNewType', $examan);
        $form->handleRequest($request);
        $formpatient = $this->createForm(PatientExamenType::class, new Patient());
        $formpatient->handleRequest($request);

        if ($request->request->get('action') == 'new') {
            $champtypeexamen = $this->getDoctrine()->getRepository(Champstypeexam::class)
                ->find($request->request->get('champid'));
            $typeexamen = $this->getDoctrine()->getRepository(TypeExamen::class)
                ->find($request->request->get('tpid'));
            $patient = $this->getDoctrine()->getRepository(Patient::class)
                ->findOneBy(['matricule' => $request->request->get('matriculepatient')]);
            $examToAd = new Examen();
            $examToAd->setConsultation(null);
            $examToAd->setTypeexamen($typeexamen);
            $examToAd->setResultat($request->request->get('resultat'));
            $examToAd->setChampstypeexam($champtypeexamen);
            if ($request->request->get('datepre') !== '') {
                $examToAd->setDateprelevement(new \DateTime($request->request->get('datepre')));
            }
            $examToAd->setPatient($patient);
            $examToAd->setPrix($request->request->get('prix'));
            $examToAd->setDateAjout(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($examToAd);
            $em->flush();
            $output = ['output' => $examToAd->getId()];
            return new JsonResponse($output);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $numerodossier = $formpatient['numerodossier']->getData();
            $patient = $this->getDoctrine()->getRepository('FPCMSBundle:Patient')
                ->findOneBy(['numerodossier' => $numerodossier]);
//            dump($patient);
            if ($patient == null) {
                $this->get('session')->getFlashBag()->add('examennewest', "Le numero de dossier n'existe pas");
                return $this->redirectToRoute('examen_newest');
            }
            $typeexamen = $form['typeexamen']->getData();
            $examan->setPatient($patient);
            $examan->setTypeexamen($typeexamen);
            $em = $this->getDoctrine()->getManager();
            $em->persist($examan);
            $em->flush();

            return $this->redirectToRoute('examen_show', array('id' => $examan->getId()));
        }

        return $this->render('examen/new.html.twig', array(
            'newpatient' => true,
            'examen' => $examan,
//            'prix'  =>  $prix,
//            'consultation'  =>  $consultation,
//            'typeexam'  =>  $typeexamen,
            'form' => $form->createView(),
            'formpatient' => $formpatient->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ));
    }

    /**
     * Finds and displays a examan entity.
     *
     * @Route("/{id}", name="examen_show")
     * @Method("GET")
     * @param Examen $examan
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Examen $examan)
    {
        $canUpdate = false;
        if (date_diff(new \DateTime('now'), $examan->getDateAjout())->days == 0) {
            $canUpdate = true;
        }


        if ($examan->getConsultation() != null) {

            $resultats = $this->getDoctrine()->getRepository('FPCMSBundle:Examen')
                ->findBy(['consultation' => $examan->getConsultation(), 'typeexamen' => $examan->getTypeexamen()]);
        } else {
            if ($examan->getTypeexamen()->getNomTypeExamen() == 'NFS') {
                $listexam = $this->getDoctrine()->getRepository('FPCMSBundle:Examen')
                    ->findBy(['typeexamen' => $examan->getTypeexamen(), 'patient' => $examan->getPatient()]);
                foreach ($listexam as $exam) {
                    if (date_diff($exam->getDateAjout(), $examan->getDateAjout())->days == 0) {
                        $resultats[] = $exam;
                    }
                }
            } else {
                $resultats[] = $examan;
            }
        }


        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        dump($resultats);
        return $this->render('examen/show.html.twig', array(
            'examan' => $examan,
            'resultats' => $resultats,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'canUpdate' => $canUpdate
        ));
    }

    /**
     * Displays a form to edit an existing examan entity.
     *
     * @Route("/edit/{id}", name="examen_edit")
     * @Method({"GET", "POST", "PUT"})
     * @param Request $request
     * @param Examen $examan
     * @return JsonResponse
     */
    public function editAction(Request $request, Examen $examan)
    {
        if ($request->request->get('action') === 'update') {
            $examan->setResultat($request->request->get('value'));
            $this->getDoctrine()->getManager()->flush();
            $arrData = ['output' => 'ok'];
        } else {
            $arrData = ['output' => 'ko'];
        }

        return new JsonResponse($arrData);

//        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
//        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
//        $currentDate = new \DateTime();
//        $demain = $currentDate->modify('+1 day');
//        $consulation = $examan->getConsultation();
//        $typeexam = $examan->getTypeexamen();
//        $editForm = $this->createForm('FP\CMSBundle\Form\ExamenType', $examan);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isSubmitted() && $editForm->isValid()) {
//            $this->getDoctrine()->getManager()->flush();
//
//            return $this->redirectToRoute('examen_edit', array('id' => $examan->getId()));
//        }
//
//        return $this->render('examen/edit.html.twig', array(
//            'newpatient'    =>  false,
//            'consultation'  =>  $consulation,
//            'typeexam'  =>  $typeexam,
//            'examan' => $examan,
//            'otherexam' =>  null,
//            'form' => $editForm->createView(),
//            'rdvUser' => $rdvuser,
//            'demain' => $demain,
//            'currentDate' => $currentDate,
//        ));
    }

    /**
     * Deletes a examan entity.
     *
     * @Route("/{id}", name="examen_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Examen $examan)
    {
        $form = $this->createDeleteForm($examan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($examan);
            $em->flush();
        }

        return $this->redirectToRoute('examen_index');
    }

    /**
     * Creates a form to delete a examan entity.
     *
     * @param Examen $examan The examan entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Examen $examan)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examen_delete', array('id' => $examan->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @Route("/gettypeexamen", name="gettypeexamen")
     * @param Request $request
     * @return JsonResponse
     */
    public function gettypeexamenAction(Request $request)
    {
        if ($request->request->get('action') == 'gettypeexamen') {

            $em = $this->getDoctrine()->getManager();
            $typeexamen = $em->getRepository('TagBundle:TypeExamen')
                ->find($request->request->get('te'));
            $leschamps = $em->getRepository('FPCMSBundle:Champstypeexam')
                ->findBy(['typeexamen' => $typeexamen]);

            if ($typeexamen != null) {
                $arrData = ['output' => 'ok', 'prix' => $typeexamen->getPrix(), 'champs' => $leschamps];
            } else {
                $arrData = ['output' => 'ko'];
            }

            // $this->get('session')->getFlashBag()->add('ordonnance', "L'ajout du medicament dans l'ordonnance s'est bien passée");

            return $this->json($arrData, 200, []);
        }
    }

    /**
     * @Route("/oneresultexam/{idconsult}/{idresult}/{idte}", name="oneresultexamen")
     * @param Request $request
     * @param int $idconsult
     * @param int $idte
     * @param int $idresult
     * @return JsonResponse
     */
    public function oneResultExamAction(Request $request, int $idconsult, int $idresult, int $idte)
    {
        $em = $this->getDoctrine()->getManager();
        $champstypexam = $em->getRepository(Champstypeexam::class)->find($idresult);
        $consultation = $em->getRepository(Consultation::class)->find($idconsult);
        $typeexam = $em->getRepository(TypeExamen::class)->find($idte);

        if ($idconsult != 0) {
            $oneresultexam = $em->getRepository(Examen::class)
                ->findOneBy([
                    'consultation' => $consultation,
                    'champstypeexam' => $champstypexam,
                    'typeexamen' => $typeexam
                ]);
        } else {
            $oneresultexam = $em->getRepository(Examen::class)
                ->findOneBy([
                    'champstypeexam' => $champstypexam,
                    'typeexamen' => $typeexam,
                ], ['dateAjout' => 'DESC']);
        }
        if ($oneresultexam != null) {
            $arrData = [
                'id' => $oneresultexam->getId(),
                'libelle' => $oneresultexam->getChampstypeexam()->getLibelle(),
                'resultat' => $oneresultexam->getResultat(),
            ];
        } else {
            $arrData = ['output' => 'ko'];
        }

        // $this->get('session')->getFlashBag()->add('ordonnance', "L'ajout du medicament dans l'ordonnance s'est bien passée");

        return new JsonResponse($arrData);
    }

    /**
     * @Route("/createexams/{numeroconsult}", name="createexams")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param $numeroconsult
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createexamensAction(Request $request, string $numeroconsult)
    {
        $consultation = $this->getDoctrine()->getRepository(Consultation::class)
            ->findOneBy(['numeroconsultation' => $numeroconsult]);

        foreach ($consultation->getTypeexamen() as $item) {
            $champsTE = $this->getDoctrine()->getRepository(Champstypeexam::class)
                ->findBy(['typeexamen' => $item->getId()]);
            $item->champs = $champsTE;
        }

        if ($request->request->get('action') == 'new') {

            $champtypeexamen = $this->getDoctrine()->getRepository(Champstypeexam::class)
                ->find($request->request->get('champid'));
            $typeexamen = $this->getDoctrine()->getRepository(TypeExamen::class)
                ->find($request->request->get('idte'));
            $examToAd = new Examen();
            $examToAd->setConsultation($consultation);
            $examToAd->setTypeexamen($typeexamen);
            $examToAd->setResultat($request->request->get('resultat'));
            $examToAd->setDateprelevement(new \DateTime($request->request->get('datepre')));
            $examToAd->setChampstypeexam($champtypeexamen);
            $examToAd->setPatient($consultation->getPatient());
            $examToAd->setDateAjout(new \DateTime('now'));
            $examToAd->setUtilisateur($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($examToAd);
            $em->flush();
            $output = ['output' => $examToAd->getConsultation()->getId()];
            return new JsonResponse($output);
        }

        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        $examan = new Examen();
        $examan->setDateAjout(new \DateTime('now'));
        $form = $this->createForm('FP\CMSBundle\Form\ExamenType', $examan);
        $form->handleRequest($request);

        $tabconsul = $this->getDoctrine()->getManager()->getRepository(Examen::class)
            ->getHistoriqueExamenByConsultForPatient($consultation->getPatient()->getId());

        $groupByconsul = [];

        foreach ($tabconsul as $item) {
            if ($item['consultation_id'] != null) {
                $groupByconsul[] = $this->getDoctrine()->getRepository(Examen::class)
                    ->getTypeExamIdByIdConsult($item['consultation_id']);

            }
        }

        dump($tabconsul);

        return $this->render('examen/new2.html.twig', array(
            'newpatient' => false,
            'examen' => $examan,
            'consultation' => $consultation,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'examsbyconsultforpatient' => $groupByconsul
        ));
    }

    /**
     * Finds and displays a examan entity.
     *
     * @Route("/consultation/{id}", name="examen_show_all")
     * @Method("GET")
     * @param Consultation $consultation
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAllAction(Consultation $consultation)
    {

        $examens = $this->getDoctrine()->getRepository(Examen::class)
            ->findBy(['consultation' => $consultation]);
//        $canUpdate = false;
//        if (date_diff(new \DateTime('now'), $examan->getDateAjout())->days == 0) {
//            $canUpdate = true;
//        }


//        if ($examan->getConsultation() != null) {
//
//            $resultats = $this->getDoctrine()->getRepository('FPCMSBundle:Examen')
//                ->findBy(['consultation' => $examan->getConsultation(), 'typeexamen' => $examan->getTypeexamen()]);
//        } else {
//            if ($examan->getTypeexamen()->getNomTypeExamen() == 'NFS') {
//                $listexam = $this->getDoctrine()->getRepository('FPCMSBundle:Examen')
//                    ->findBy(['typeexamen' => $examan->getTypeexamen(), 'patient' => $examan->getPatient()]);
//                foreach ($listexam as $exam) {
//                    if (date_diff($exam->getDateAjout(), $examan->getDateAjout())->days == 0) {
//                        $resultats[] = $exam;
//                    }
//                }
//            } else {
//                $resultats[] = $examan;
//            }
//        }


        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        dump($examens);
        $hasNFS = false;
        foreach ($examens as $item) {
            if ($item->getTypeexamen()->getId() == 16) {
                $hasNFS = true;
            }
        }
        return $this->render('examen/showall.html.twig', array(
            'consultation' => $consultation,
            'examens' => $examens,
//            'resultats' => $resultats,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
            'hasNFS' => $hasNFS
        ));
    }

    /**
     * Finds and displays a examan entity.
     *
     * @Route("/approuver/{numeroconsult}", name="examen_approuver")
     * @Method("POST")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function approuverExamAction($numeroconsult)
    {
        $consultation = $this->getDoctrine()->getRepository(Consultation::class)
            ->findOneBy(['numeroconsultation' => $numeroconsult]);
        $list = $this->getDoctrine()->getRepository(Examen::class)
            ->getlistExambyConsul($consultation->getId());


        foreach ($list as $item) {
            try {
                $this->getDoctrine()->getRepository(Examen::class)
                    ->approuverExam($consultation->getId(), (int)$item['id'], $item['prix']);

            } catch (DBALException $e) {
            }
        }
        $arrData = ['output' => 'ok', 'numconsult' => $consultation->getNumeroconsultation()];

        return $this->json($arrData, 200, [], []);
    }

    /**
     * Finds and displays a examan entity.
     *
     * @Route("/desapprouver/{numeroconsult}", name="examen_desapprouver")
     * @Method("POST")
     * @param $numeroconsult
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function desapprouverExamAction($numeroconsult)
    {
        $consultation = $this->getDoctrine()->getRepository(Consultation::class)
            ->findOneBy(['numeroconsultation' => $numeroconsult]);
        $approuver = $this->getDoctrine()->getRepository(Examen::class)
            ->desapprouverExam($consultation->getId());


        if ($approuver) {
            $arrData = ['output' => 'ok'];
        } else {
            $arrData = ['output' => 'ko'];
        }
        return new JsonResponse($arrData);
    }

    public function printRecuExamAction($numconsult)
    {
        $consultation = $this->getDoctrine()->getRepository(Consultation::class)
            ->findOneBy(['numeroconsultation' => $numconsult]);
        $montant = $this->getDoctrine()->getRepository(Examen::class)
            ->getMontantExamInConsul($consultation->getId());

        $montantEnLettre = $this->getDoctrine()->getRepository(Examen::class)
            ->int2str($montant);

        $html = $this->renderView('FPCMSBundle:patient:printrecuexam.html.twig', array(
            'consultation' => $consultation,
            'montant' => $montant,
            'montantenlettre' => $montantEnLettre
        ));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'Recu_pour_' . $consultation->getPatient()->getPrenomPatient() . '.pdf'
        );
    }
}
