<?php declare(strict_types=1);

namespace AlanVdb\Entity\Factory;

use AlanVdb\Entity\Validator\StringLengthValidator;
use AlanVdb\Entity\Validator\SlugValidator;
use AlanVdb\Entity\Validator\IntegerValidator;

class ValidatorFactory
{
    public function createStringLengthValidator(int $min, int $max) : StringLengthValidator
    {
        return new StringLengthValidator($min, $max);
    }

    public function createSlugValidator() : SlugValidator
    {
        return new SlugValidator();
    }

    public function createIntegerValidator(int $min, int $max, bool $unsigned = false, bool $strict = false) : IntegerValidator
    {
        return new IntegerValidator($min, $max, $unsigned, $strict);
    }
}
