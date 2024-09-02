<?php declare(strict_types=1);

namespace AlanVdb\Entity\Validator;

use AlanVdb\Entity\Validator\Definition\ValidatorInterface;
use AlanVdb\Entity\Validator\Exception\InvalidValidatorParamProvided;

class SlugValidator implements ValidatorInterface
{
    public function isValid(string $value, bool $nullable = false) : bool
    {
        if ($value === null) {
            return $nullable;
        }
        $pattern = '/^[a-z0-9]+(-[a-z0-9]+)*$/';

        return (bool) preg_match($pattern, $value);
    }

    public function getErrorMessage(string $label) : string
    {
        return "$label must be a valid slug (only lowercase letters, numbers, and hyphens are allowed).";
    }
}
