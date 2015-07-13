<?php


namespace Barla\securitySystem {

  /**
   * Description of securityClass
   *
   * @author DIANA 
   */
  class securityClass {

    public function login() {
      $_SESSION['user'] = true;
    }

    public function logout() {
      unset($_SESSION['user']);
    }
    
    public function validate() {
      $answer = false;
      if (isset($_SESSION['user']) === true and $_SESSION['user'] === true) {
        $answer = true;
      }
      return $answer;
    }

  }

}