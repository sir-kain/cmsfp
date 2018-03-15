<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'supertypeexamen_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supertypeexamen/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supertypeexamen_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supertypeexamen/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supertypeexamen_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supertypeexamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supertypeexamen_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/supertypeexamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supertypeexamen_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supertypeexamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_lastest' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::indexlastestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/examen/lastest',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/examen/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_new1' => array (  0 =>   array (    0 => 'consultationid',    1 => 'typeexamenid',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::new1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'typeexamenid',    ),    1 =>     array (      0 => 'text',      1 => '/typeexamen',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'consultationid',    ),    3 =>     array (      0 => 'text',      1 => '/examen/new/1/consultation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_new' => array (  0 =>   array (    0 => 'consultationid',    1 => 'typeexamenid',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'typeexamenid',    ),    1 =>     array (      0 => 'text',      1 => '&typeexamen',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]+',      3 => 'consultationid',    ),    3 =>     array (      0 => 'text',      1 => '/examen/new/consultation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_newest' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::newestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/examen/newest/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/examen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/examen/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/examen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gettypeexamen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::gettypeexamenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/examen/gettypeexamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oneresultexamen' => array (  0 =>   array (    0 => 'idconsult',    1 => 'idresult',    2 => 'idte',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::oneResultExamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idte',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idresult',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idconsult',    ),    3 =>     array (      0 => 'text',      1 => '/examen/oneresultexam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'createexams' => array (  0 =>   array (    0 => 'numeroconsult',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::createexamensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numeroconsult',    ),    1 =>     array (      0 => 'text',      1 => '/examen/createexams',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_show_all' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::showAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/examen/consultation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_approuver' => array (  0 =>   array (    0 => 'numeroconsult',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::approuverExamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numeroconsult',    ),    1 =>     array (      0 => 'text',      1 => '/examen/approuver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'examen_desapprouver' => array (  0 =>   array (    0 => 'numeroconsult',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::desapprouverExamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numeroconsult',    ),    1 =>     array (      0 => 'text',      1 => '/examen/desapprouver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tag.index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TagController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tags.json',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tag.indexexam' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TagController::indexexamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/typeexam.json',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cmx.index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TagController::medicAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medicaments.json',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'typeexamen_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/typeexamen/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'typeexamen_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/typeexamen/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'typeexamen_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/typeexamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'typeexamen_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/typeexamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'typeexamen_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/typeexamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diagnostic_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diagnostic/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diagnostic_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diagnostic/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diagnostic_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/diagnostic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diagnostic_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/diagnostic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'diagnostic_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/diagnostic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'antecedent_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/antecedent/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'antecedent_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/antecedent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'antecedent_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::editPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/antecedent/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'antecedent_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/antecedent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medicament_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medicament/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medicament_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medicament/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medicament_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medicament',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medicament_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/medicament',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletemedicament' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::deletemedicamentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medicament',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ordonnance/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ordonnance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ordonnance/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ordonnance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ordonnance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\DefaultController::indextemplateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'indexservice' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::indexserviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/service/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutservice' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::ajoutserviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/service/ajoutservice',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editservice' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::editserviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteservice' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::deleteserviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/service/id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'indexuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\UtilisateurController::indexuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\UtilisateurController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edituser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\UtilisateurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'indexpatient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::indexpatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/patient/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detailpatient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::detailpatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detailpatient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutpatient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::ajoutpatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/patient/ajoutpatient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editpatient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::editpatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editpatient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getterrain' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::getterrainAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getterrain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getpatient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::getpatientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getpatient/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutconsultation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::ajoutconsultationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/patient/consultation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutconsultationinf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::ajoutconsultationinfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/patient/consultation/new/infirmier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editconsultation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::editconsultationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/patient/consultation/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editconsultationinf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::editconsultationinfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/patient/consultation/edit/infirmier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultationview' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::consultationviewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/patient/consultation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'apiconsultation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::consultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getresultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'printRP' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printrpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/rp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'printexam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printexamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'printexamwithoutconsult' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printexamwithoutconsultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/examwithoutconsul',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'printbulletinexam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printbulletinexamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bulletinexam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'printrecuexam' => array (  0 =>   array (    0 => 'numconsult',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::printRecuExamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numconsult',    ),    1 =>     array (      0 => 'text',      1 => '/recuexam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'printordonnance' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printordonnanceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/printordonnance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
