<?php
namespace App\Entity;

use App\Entity\Property;
use Symfony\Component\Validator\Constraints as Assert;

class Contact{

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $firstname;

	public function getFirstname() {
		return $this->firstname;
	}

	public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
	}

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $lastname;

	public function getLastname() {
		return $this->lastname;
	}

	public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
	}


    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     *  pattern="/[0-9]{10}/"
     * )
     */
    private $phone;

	public function getPhone() {
		return $this->phone;
	}

	public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
	}


    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $mail;

	public function getMail() {
		return $this->mail;
	}

	public function setMail($mail) {
        $this->mail = $mail;
        return $this;
	}

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=10)
     */
    private $message;

	public function getMessage() {
		return $this->message;
	}

	public function setMessage($message) {
        $this->message = $message;
        return $this;
    }
    
    /**
     * @var Property|null
     */
    private $property;

	public function getProperty() {
		return $this->property;
	}

	public function setProperty(Property $property) {
        $this->property = $property;
        return $this;
	}
}