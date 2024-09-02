<?php declare(strict_types=1);

namespace AlanVdb\Entity\Validator;

use AlanVdb\Entity\Validator\Definition\ValidatorInterface;
use AlanVdb\Entity\Validator\Exception\InvalidValidatorParamProvided;

class IntegerStringValidator implements ValidatorInterface
{
    public function isValid(string $value, bool $nullable = false) : bool
    {
        return ($value === null) ? $nullable : (bool) preg_match('`^[0-9]+$`', $value);
    }

    public function getErrorMessage(string $label) : string
    {
        return "$label must be an integer number.";
    }
}
