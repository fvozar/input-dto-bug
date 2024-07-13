<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\ApiResource\CustomOutput;

class CustomProcessor implements ProcessorInterface
{
	public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): CustomOutput
	{
		return new CustomOutput();
	}
}
