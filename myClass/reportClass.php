<?php

namespace Barla\reportSystem {

  /**
   * Description of reportClass
   *
   * @author DIANA
   */
  class reportClass {

    private $Tonic = 0;
    private $Snowy = 0;
    private $Oil = 0;
    private $Kit = 0;
    private $Treatment = 0;

    public function getTonic() {
      return $this->Tonic;
    }

    public function getSoap() {
      return $this->Soap;
    }

    public function getOil() {
      return $this->Oil;
    }

    public function getKit() {
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
        public function reportOil($Oil) {
      $this->Oil = $this->Oil + $Oil;
    }
        public function reportKit($Kit) {
      $this->Kit = $this->Kit + $Kit;
    }
        public function reportTreatment($Treatment) {
      $this->Treatment = $this->Treatment + $Treatment;
    }

  }

}