<?php 

namespace PHPIntegrator\Controllers;

use PHPIntegrator\Models\Person;
use PHPIntegrator\Models\Relationship;
use PHPIntegrator\Models\RelationshipType;

class PersonController {
  /**
   * All people in controller.
   * @var array[wcatron\Models\Person]
   */
  var $persons = [];
  
  var $relationships = [];
  
  /**
   * Create a new person and add them to the controller.
   * @param  string $first_name First name.
   * @param  string $last_name  Last name.
   * @param  DateTime $birth_date Date of birth.
   * @return wcatron\Models\Person             Person created.
   */
  function createPerson($first_name, $last_name, $birth_date) {
    $person = new Person($first_name, $last_name, $birth_date);
    $this->persons[] = $person;
    return $person;
  }
  
  function setFather(Person $father, Person $child) {
    $relationship = new Relationship(RelationshipType::Child, $child, $parent);
    $inverse = new Relationship(RelationshipType::Father, $parent, $child);
    $this->relationships[] = $relationship;
    $this->relationships[] = $inverse;
  }
  
  function setMother(Person $mother, Person $child) {
    $relationship = new Relationship(RelationshipType::Child, $child, $parent);
    $inverse = new Relationship(RelationshipType::Mother, $parent, $child);
    $this->relationships[] = $relationship;
    $this->relationships[] = $inverse;
  }
  
  function setParents(Person $mother, Person $father, Person $child) {
    $this->setFather($father, $child);
    $this->setMother($mother, $child);
  }
}

 ?>
