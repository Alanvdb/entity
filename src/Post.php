<?php declare(strict_types=1);

namespace AlanVdb\Entity;

use AlanVdb\Entity\Factory\ValidatorFactory;

class Post extends AbstractEntity
{
    protected function setup(ValidatorFactory $factory) : void
    {
        $varcharLengthValidator = $factory->createStringLengthValidator(0, 255);

        $this->addFillables('id', $factory->createNonStrictIntegerValidator());
        $this->addFillables('slug', $factory->createSlugValidator());
        $this->addFillables('title', $varcharLengthValidator);
        $this->addFillables('description', $varcharLengthValidator);
        $this->addFillables('body');
    }
}
