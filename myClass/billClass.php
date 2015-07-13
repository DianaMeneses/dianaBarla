<?php

namespace Barla\billSystem {

  /**
   * Description of billClass
   *
   * @author DIANA
   */
  class billClass {

    private $Tonic = 0;
    private $Soap = 0;
    private $Oil = 0;
    private $Kit = 0;
    private $Treatment = 0;

    public function __construct($Tonic = 0, $Soap = 0, $Oil = 0, $Kit = 0, $Treatment = 0) {
      $this->Tonic = $Tonic;
      $this->Soap = $Soap;
      $this->Oil = $Oil;
      $this->Kit = $Kit;
      $this->Treatment = $Treatment;
    }

    public function getTonic() {
      return $this->Tonic;
    }

    public function getSoap() {
      return $this->Soap;
    }

    public function getoil() {
      return $this->Oil;
    }

    public function getkit() {
      return $this->Kit;
    }

    public function getTreatment() {
      return $this->Treatment;
    }

    public function setTonic($Tonic) {
      $this->Tonic = $Tonic;
    }

    public function setSoap($Soap) {
      $this->Soap = $Soap;
    }

    public function setOil($Oil) {
      $this->Oil = $Oil;
    }

    public function setKit($Kit) {
      $this->Kit = $Kit;
    }

    public function setTreatment($Treatment) {
      $this->Treatment = $Treatment;
    }

    public function reportTonic($Tonic) {
      $this->Tonic = $this->Tonic + $Tonic;
    }

    public function reportSoap($Soap) {
      $this->Soap = $this->Soap + $Soap;
    }

    public function reportOil($oil) {
      $this->Oil = $this->Oil + $Oil;
    }

    public function reportKit($kit) {
      $this->Kit = $this->Kit + $Kit;
    }
    public function reportTreatment($Treatment){
      $this->Treatment= $this->Treatment + $Treatment;
    }

    public function __sleep() {
      return array('Tonic', 'Soap', 'Oil', 'Kit', 'Treatment');
    }

  }

}