<?php declare(strict_types=1);

namespace AlanVdb\Entity\Validator;

use AlanVdb\Entity\Validator\Definition\ValidatorInterface;
use AlanVdb\Entity\Validator\Exception\InvalidValidatorParamProvided;

class stringLengthValidator implements ValidatorInterface
{
    protected int $min;
    protected int $max;

    public function __construct(int $min, ?int $max = null)
    {
        if ($min < 0) {
            throw new InvalidValidatorParamProvided("String length minimum cannot be lower than 0. Value provided : '$min'.");
        }
        if ($max !== null && $max < 0) {
            throw new InvalidValidatorParamProvided("String length maximum cannot be lower than 0. Value provided : '$max'.");
        }
        if ($max !== null && $max < $min) {
            throw new InvalidValidatorParamProvided("String length maximum cannot be lower than minimum. Value provided : max provided: '$max', min provided '$min'.");
        }
        $this->min = $min;
        $this->max = $max;
    }

    public function isValid(string $value, bool $nullable = false) : bool
    {
        if ($value === null) {
            return $nullable;
        }
        $length = strlen($value);
        return $this->min <= $length && $length <= $this->max;
    }

    public function getErrorMessage(string $label) : string
    {
        return "$label length must be from $min to $max characters.";
    }
}
