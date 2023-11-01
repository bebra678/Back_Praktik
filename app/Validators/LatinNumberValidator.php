<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class LatinNumberValidator extends AbstractValidator
{

    protected string $message = 'Field :field consists of latin letters and numbers';

    public function rule(): bool
    {
        return preg_match('/^[а-я0-9]++$/ui',$this->value);
    }
}