<?php

declare(strict_types=1);

namespace App\ApiResource;

use App\Entity\Bar;
use Symfony\Component\Validator\Constraints\NotBlank;

class CustomInput
{

	#[NotBlank]
	public Bar $bar;
}
