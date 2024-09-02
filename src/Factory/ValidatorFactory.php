<?php declare(strict_types=1);

namespace AlanVdb\Entity\Factory;

use AlanVdb\Entity\Validator\StringLengthValidator;
use AlanVdb\Entity\Validator\SlugValidator;
use AlanVdb\Entity\Validator\NonStrictIntegerValidator;

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

    public function createNonStrictIntegerValidator() : NonStrictIntegerValidator
    {
        return new NonStrictIntegerValidator();
    }
}
