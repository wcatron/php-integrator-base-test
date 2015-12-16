<?php 

namespace PHPIntegrator\Models;

use DateTime;

class Person {
  /**
   * Person's first name.
   * @var string
   */
  private $first_name;
  /**
   * Person's last name.
   * @var string
   */
  private $last_name;
  
  
  /**
   * Date of Person's birth.
   * @var DateTime
   */
  var $date_of_birth;
  
  
  /**
   * Create Person setting name and date of birth.
   * @param string $first_name    First name.
   * @param string $last_name     Last name.
   * @param DateTime $date_of_birth Date of birth.
   */
  function __construct ($first_name, $last_name, $date_of_birth) {
    $this->setName($first_name, $last_name);
  }
  
  /**
   * Get the first and last name with a space in between.
   * @return string Full name.
   */
  function getFullname() {
    return $this->first_name.' '.$this->last_name;
  }
  
  /**
   * Set first and last name of person.
   * @param string $first First name.
   * @param string $last  Last name.
   */
  function setName($first_name, $last_name) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }

  
  
}

 ?>
