<?php

class FormatedDate {

  private function type0() {
    return date('Ymd His');
  }

  private function type1() {
    return date('Y/m/d H:i:s');
  }

  private function type2() {
    return date('m/d/Y H:i:s');
  }

  public function fDate($format) {
    if($format === '0'){
      echo $this->type0();
    } else if($format === '1') {
      echo $this->type1();
    } else if($format == '2') {
      echo $this->type2();
    } else {
      echo "You must appoint an argument (format type 0-2).";
    }
    echo "\n";
  }
}