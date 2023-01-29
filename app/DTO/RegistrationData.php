<?php

namespace App\DTO;

use Atwinta\DTO\DTO;
use Illuminate\Support\Facades\Hash;

class RegistrationData extends DTO
{
    public function __construct(
        public string $email,
        public string $name,
        public string $password,
    ) {
        $this->password = Hash::make($this->password);
    }
}
