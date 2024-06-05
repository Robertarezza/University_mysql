<?php

class Department {
  private $id;
  private $name;
  private $address;
  private $phone;
  private $website;
  private $headOfDepartment;

  public function __construct($_id, $_name)
  {
    $this->id = $_id;
    $this->name = $_name;
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Get the value of address
   */ 
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */ 
  public function setAddress($address)
  {
    $this->address = $address;

    return $this;
  }

  /**
   * Get the value of phone
   */ 
  public function getPhone()
  {
    return $this->phone;
  }

  /**
   * Set the value of phone
   *
   * @return  self
   */ 
  public function setPhone($phone)
  {
    $this->phone = $phone;

    return $this;
  }

  /**
   * Get the value of website
   */ 
  public function getWebsite()
  {
    return $this->website;
  }

  /**
   * Set the value of website
   *
   * @return  self
   */ 
  public function setWebsite($website)
  {
    $this->website = $website;

    return $this;
  }

  /**
   * Get the value of headOfDepartment
   */ 
  public function getHeadOfDepartment()
  {
    return $this->headOfDepartment;
  }

  /**
   * Set the value of headOfDepartment
   *
   * @return  self
   */ 
  public function setHeadOfDepartment($headOfDepartment)
  {
    $this->headOfDepartment = $headOfDepartment;

    return $this;
  }
}