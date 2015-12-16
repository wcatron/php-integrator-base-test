<?php 

namespace PHPIntegrator\Models;

class Relationship {
  
  var $type;
  var $from;
  var $to;
  
  function __construct ($type, $from, $to) {
    $this->type = $type;
    $this->from = $from;
    $this->to = $to;
  }
  
  function version5dot6(...$values) {
    return null;
  }
  
  
}

?>
