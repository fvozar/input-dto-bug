<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Link;
use ApiPlatform\Metadata\Post;
use App\ApiResource\CustomInput;
use App\ApiResource\CustomOutput;
use App\Repository\FooRepository;
use App\State\CustomProcessor;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FooRepository::class)]
#[ApiResource(
	operations: [
		new Get(),
		new GetCollection(),
		new Post(),
		new Post(
			uriTemplate: '/foo/{id}/validate',
			uriVariables: ['id' => new Link(fromClass: Foo::class)],
			status: 200,
			input: CustomInput::class,
			output: CustomOutput::class,
			processor: CustomProcessor::class,
		),
	]
)]
class Foo
{
	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $id = null;

	#[ORM\Column(length: 255)]
	private ?string $title = null;


	public function getId(): ?int
	{
		return $this->id;
	}


	public function getTitle(): ?string
	{
		return $this->title;
	}


	public function setTitle(string $title): static
	{
		$this->title = $title;

		return $this;
	}
}
