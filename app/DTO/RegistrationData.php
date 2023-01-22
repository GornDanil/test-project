<?php

namespace App\DTO;

use Atwinta\DTO\DTO;

class RegistrationData extends DTO
{
    public function __construct(
        public string $email,
        public string $name,
        public string $phone,
        public string $password,
    ) {}
}
