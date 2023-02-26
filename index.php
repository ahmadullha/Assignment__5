<?php
class Person {
    private $name;
    private $email;
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setEmail($email) {
      $this->email = $email;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getEmail() {
      return $this->email;
    }
  }
  // Create a new instance of the Person class
  $person = new Person();

  // Set the name and email properties
  $person->setName("John Smith");
  $person->setEmail("john.smith@example.com");

  // Display the name and email properties
  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail() . "<br>";
//.................

  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Include the Person class file
    include 'Person.php';

    // Create a new Person object and set the name and email properties
    $person = new Person();
    $person->setName($name);
    $person->setEmail($email);

    // Display the name and email properties on the webpage
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";
}
