<?php

namespace FP\CMSBundle\Controller;

use FP\CMSBundle\Form\ConsultationGeneraleType;
use FP\CMSBundle\Form\InfirmierType;
use FP\CMSBundle\Form\MaterniteType;
use FP\CMSBundle\FPCMSBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FP\CMSBundle\Entity\Patient;
use FP\CMSBundle\Form\PatientType;
use FP\CMSBundle\Entity\Utilisateur;
use FP\CMSBundle\Entity\Consultation;
use FP\CMSBundle\Form\ConsultationType;
use FP\CMSBundle\Entity\RDV;
use FP\CMSBundle\Entity\Ordonnance;
use FP\CMSBundle\Form\OrdonnanceType;
use FP\CMSBundle\Entity\Antecedent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Upload\UploadBundle\Annotation\Uploadable;

class PatientController extends Controller
{

    // Action pour la logique de la liste
    public function indexpatientAction()
    {

//      Recuperer la liste des patients
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:Patient');
        $patients = $repository->findAll();

//        Recuperer la liste des RDV du user connecté
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');

        /*Injecter l'age calculé dans chaque objet patient*/
        foreach ($patients as $patient) {
            $age = date_diff(new \DateTime(), $patient->getDateNaiss())->y;
            $patient->age = $age;
        }


        return $this->render('FPCMSBundle:patient:indexpatient.html.twig', [
            'patients' => $patients,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    }

//    Page dossier patient
    public function detailpatientAction(Patient $patient)
    {

        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $repositoryP = $this->getDoctrine()->getRepository('FPCMSBundle:Patient');
        $repositoryRDV = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $repositoryConsult = $this->getDoctrine()->getRepository('FPCMSBundle:Consultation');

        // recuperation des RDV du patient courant
        $rdvPatientActif = $repositoryRDV->findBy(['patient' => $patient], ['dateRDV' => 'ASC']);
        $patientFamille = $repositoryP->findBy(['matricule' => $patient->getMatricule()]);
        $hier = new \DateTime('-1 day');

        // recuperation de ttes les consultations du patient courant
        $consultations = $repositoryConsult->findBy(['patient' => $patient], ['dateConsultation' => 'DESC']);

        $repositoryAntecedent = $this->getDoctrine()->getRepository('FPCMSBundle:Antecedent');
        // recuperation antecedents
        $antecedent = $repositoryAntecedent->findOneBy(['patient' => $patient]);

        return $this->render('FPCMSBundle:patient:detailpatient.html.twig', [
            'patient' => $patient,
            'rdvPatientActif' => $rdvPatientActif,
            'patientFamille' => $patientFamille,
            'hier' => $hier,
            'antecedent' => $antecedent,
            'consultations' => $consultations,
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,

        ]);
    }

//    Page ajout patient
    public function ajoutpatientAction(Request $request)
    {

//        Génération du numéro dossier pour le nouveau patient
        $code = $this->getDoctrine()->getRepository(Patient::class)->generateCode();
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        //Initialisation du nouveau patient à ajouter
        $patient = new Patient();
        $patient->setNumerodossier($code);

//        creation d'une ligne antecedent pour le patient
        $antecedant = new Antecedent();
        $antecedant->setMedicaux(null);
        $antecedant->setChurirgicaux(null);


        $patient->setDateAjout(new \DateTime());
        // creer le form d'ajout
        $form = $this->createForm(PatientType::Class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transaction = $this->getDoctrine()->getConnection();
            $transaction->beginTransaction();
            $em = $this->getDoctrine()->getManager();
            if ($patient->getTypePatient()->getId() == 2) {
                $patient->setMatricule('neant');
                $patient->setStatut('neant');
            }

            $em->persist($patient);

            $antecedant->setPatient($patient);
            $em->persist($antecedant);
            $em->flush();
            $transaction->commit();
            $this->get('session')->getFlashBag()->add('ajoutPatient', "La création du patient s'est bien passée");
            return $this->redirectToRoute('indexpatient');
        }

        return $this->render('FPCMSBundle:patient:ajoutpatient.html.twig', [
            'dateToday' => date('Y-m-d'),
            'newPatient' => true,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    }

    public function editpatientAction(Request $request, Patient $patient)
    {
        $repository = $this->getDoctrine()->getRepository('FPCMSBundle:RDV');
        $rdvuser = $repository->findBy(['utilisateur' => $this->getUser()], ['dateRDV' => 'ASC']);
        $currentDate = new \DateTime();
        $demain = $currentDate->modify('+1 day');
        $authChecker = $this->container->get('security.authorization_checker');
        $router = $this->container->get('router');
        if ($authChecker->isGranted('ROLE_SECRETAIRE')) {
            // return new RedirectResponse($router->generate('fos_user_security_login'), 307);
            $this->get('session')->getFlashBag()->add('droitConsultation', "Votre profil ne vous permet pas d'acceder à cette page !");
            return $this->redirectToRoute('indexpatient');
        }
        $form = $this->createForm(PatientType::Class, $patient);
        $form->handleRequest($request);
        $patient->setDateAjout(new \DateTime());

        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('modifPatient', "La modification s'est bien passée");
            return $this->redirectToRoute('indexpatient');
        }
        return $this->render('FPCMSBundle:patient:ajoutpatient.html.twig', [
            'newPatient' => false,
            'dateToday' => date('Y-m-d'),
            'patient' => $patient,
            'form' => $form->createView(),
            'rdvUser' => $rdvuser,
            'demain' => $demain,
            'currentDate' => $currentDate,
        ]);
    }

    public function getterrainAction(Request $request, Patient $patient)
    {
//        if($request->request->get('action') == 'getterrain'){
//            dump($request->request->get('action'));

        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('FPCMSBundle:Patient')
            ->find($patient->getId());
        $terrain = $patient->getTerrainparticulier();

        $arrData = ['output' => 'ok', 'terrain' => $terrain];

//            return $this->json($arrData);
        return new JsonResponse($arrData);
//        }
    }


    /**
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getpatientAction(Request $request)
    {
        if ($request->request->get('action') == 'getpatient') {

            $em = $this->getDoctrine()->getManager();
            $patient = $em->getRepository('FPCMSBundle:Patient')
                ->findOneBy(['numerodossier' => $request->request->get('numerodossierpatient')]);
            if ($patient != null) {
                $arrData = ['output' => 'ok', 'typepatient' => $patient->getTypePatient()->getType(),
                    'nom' => $patient->getPrenomPatient() . ' ' . $patient->getNomPatient()];
            } else {
                $arrData = ['output' => 'ko'];
            }

            // $this->get('session')->getFlashBag()->add('ordonnance', "L'ajout du medicament dans l'ordonnance s'est bien passée");

            return new JsonResponse($arrData);
        }
    }
}
