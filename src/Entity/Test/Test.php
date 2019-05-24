<?php

namespace App\Entity\Test;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Test\TestRepository")
 */
class Test
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
    private $title;

    /**
     * @ORM\Column(type="boolean")
     */
    private $boolean = false;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Test\Test2", mappedBy="test")
     */
    private $test2s;

    public function __construct()
    {
        $this->dateCreate = new \DateTime();
        $this->test2s = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBoolean(): ?bool
    {
        return $this->boolean;
    }

    public function setBoolean(bool $boolean): self
    {
        $this->boolean = $boolean;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->dateCreate;
    }

    public function setDateCreate(\DateTimeInterface $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * @return Collection|Test2[]
     */
    public function getTest2s(): Collection
    {
        return $this->test2s;
    }

    public function addTest2(Test2 $test2): self
    {
        if (!$this->test2s->contains($test2)) {
            $this->test2s[] = $test2;
            $test2->setTest($this);
        }

        return $this;
    }

    public function removeTest2(Test2 $test2): self
    {
        if ($this->test2s->contains($test2)) {
            $this->test2s->removeElement($test2);
            // set the owning side to null (unless already changed)
            if ($test2->getTest() === $this) {
                $test2->setTest(null);
            }
        }

        return $this;
    }
}
