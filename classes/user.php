<?php

class User
{
  private $fname;
  private $lname;
  public $age;

  function __construct($fname, $lname, $age)
  {
    $this->fname = $fname;
    $this->lname = $lname;
    $this->age = $age;
  }

  function getFullName()
  {
    return "{$this->fname} {$this->lname}";
  }

  function getAge()
  {
    return $this->age;
  }

  function getFName()
  {
    return $this->fname;
  }

  function getLName()
  {
    return $this->lname;
  }
}

class Friend extends User
{
  private $description;

  function __construct($fname, $lname, $age, $description)
  {
    parent::__construct($fname, $lname, $age);
    $this->description = $description;
  }

  function getDescription()
  {
    return $this->description;
  }
}
