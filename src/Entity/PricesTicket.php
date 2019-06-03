<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PricesTicketRepository")
 */
class PricesTicket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceNormal;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceChild;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceSenior;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceLow;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceBaby;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPriceNormal(): ?int
    {
        return $this->priceNormal;
    }

    public function setPriceNormal(int $priceNormal): self
    {
        $this->priceNormal = $priceNormal;

        return $this;
    }

    public function getPriceChild(): ?int
    {
        return $this->priceChild;
    }

    public function setPriceChild(int $priceChild): self
    {
        $this->priceChild = $priceChild;

        return $this;
    }

    public function getPriceSenior(): ?int
    {
        return $this->priceSenior;
    }

    public function setPriceSenior(int $priceSenior): self
    {
        $this->priceSenior = $priceSenior;

        return $this;
    }

    public function getPriceLow(): ?int
    {
        return $this->priceLow;
    }

    public function setPriceLow(int $priceLow): self
    {
        $this->priceLow = $priceLow;

        return $this;
    }

    public function getPriceBaby(): ?int
    {
        return $this->priceBaby;
    }

    public function setPriceBaby(int $priceBaby): self
    {
        $this->priceBaby = $priceBaby;

        return $this;
    }
}
