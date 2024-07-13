<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BarRepository::class)]
#[ApiResource]
class Bar
{
	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $id = null;

	private string $title = '';


	public function getId(): ?int
	{
		return $this->id;
	}


	public function getTitle(): string
	{
		return $this->title;
	}


	public function setTitle(string $title): void
	{
		$this->title = $title;
	}
}
