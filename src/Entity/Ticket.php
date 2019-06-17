<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    /**
     * @Assert\NotBlank(message = "Veuillez indiquer votre prénom.")
     */
    /**
     * @Assert\Length(
     *     min = 1,
     *     max = 50,
     *     minMessage = "Veuillez indiquer un prénom correct.",
     *     maxMessage = "Vous avez dépassé 50 caractères, un seul prénom s'il vous plaît."
     * )
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
        /**
     * @Assert\NotBlank(message = "Veuillez indiquer votre nom de famille.")
     */
    /**
     * @Assert\Length(
     *     min = 1,
     *     max = 50,
     *     minMessage = "Veuillez indiquer un nom de famille correct.",
     *     maxMessage = "Vous avez dépassé 50 caractères, un seul nom de famille s'il vous plaît."
     * )
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="datetime")
     */
    /*
    * @Assert\NotBlank(message = "Veuillez indiquez votre date de naissance.")
    * @var string A "Y-m-d" formatted value
    */
    private $birthday;

    /**
     * @ORM\Column(type="boolean")
     */
    private $discount;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Booking", inversedBy="tickets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $booking;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getDiscount(): ?bool
    {
        return $this->discount;
    }

    public function setDiscount(bool $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getBooking(): ?Order
    {
        return $this->booking;
    }

    public function setBooking(?Order $booking): self
    {
        $this->booking = $booking;

        return $this;
    }
}
