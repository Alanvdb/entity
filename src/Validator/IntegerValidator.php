<?php declare(strict_types=1);

namespace AlanVdb\Entity\Validator;

use AlanVdb\Entity\Validator\Definition\ValidatorInterface;
use AlanVdb\Entity\Validator\Exception\InvalidValidatorParamProvided;

class IntegerValidator implements ValidatorInterface
{
    public function __construct(int $min, int $max, bool $unsigned = false, bool $strict = false)
    {
        if ($min < 0) {
            throw new InvalidValidatorParamProvided("Minimum cannot be lower than 0. Value provided: '$min'.");
        }
        if ($max < 0) {
            throw new InvalidValidatorParamProvided("Maximum cannot be lower than 0. Value provided: '$max'.");
        }
        if ($max < $min) {
            throw new InvalidValidatorParamProvided("Maximum cannot be lower than minimum. Minimum provided : '$min', Maximum provided : '$max'.");
        }
        $this->min = $min;
        $this->max = $max;
        $this->unsigned = $unsigned;
        $this->strict = $strict;
    }

    public function isValid(mixed $value, bool $nullable = false) : bool
    {
        return ($value === null) ? $nullable : (bool) preg_match('`^[0-9]+$`', $value);
    }

    public function getErrorMessage(string $label) : string
    {
        return "$label must be an integer number.";
    }
}
