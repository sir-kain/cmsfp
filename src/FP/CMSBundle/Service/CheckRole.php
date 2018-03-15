<?php


namespace FP\CMSBundle\Service;

class CheckRole {
    /**
   * Vérifie si le role est Role_user ou non
   *
   * @return bool
   */
  public function isMedecin()
  {
      return $this->container->get('security.authorization_checker')->isGranted('ROLE_MEDECIN');
  }

  public function redirectIfFirstConnexion(bool $firstConnexion){
      if (!$firstConnexion){
          return $this->redirectToRoute('fos_user_change_password');
      }
  }
}