<?php

namespace CMSFP\TagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class TagController extends Controller
{
    /**
     * @Route("/tags.json", name="tag.index")
     * @param Request $request
     * @return JsonResponse
     */
    public function indexAction(Request $request) {
        $pathologies = $this->getDoctrine()->getRepository('TagBundle:Pathologies')->findAll();

        return $this->json($pathologies, 200, [], ['groups' => ['name']]);
    }

    /**
     * @Route("/typeexam.json", name="tag.indexexam")
     * @param Request $request
     * @return JsonResponse
     */
    public function indexexamAction(Request $request) {
        $typeexam = $this->getDoctrine()->getRepository('TagBundle:TypeExamen')->findAll();

        return $this->json($typeexam, 200, [], ['groups' => ['type']]);
    }

    /**
     * @Route("/medicaments.json", name="cmx.index")
     * @param Request $request
     * @return JsonResponse
     */
    public function medicAction(Request $request) {
        $medicaments = $this->getDoctrine()->getRepository('FPCMSBundle:Medicament')->findAll();

        return $this->json($medicaments, 200, [], ['groups' => ['medic']]);
    }
}
