<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class CyrillicValidator extends AbstractValidator
{

    protected string $message = 'Field :field consists of Cyrillic and latin';

    public function rule(): bool
    {
        return preg_match('/^[а-я]++$/ui',$this->value);
    }
}