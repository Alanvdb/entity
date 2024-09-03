<?php declare(strict_types=1);

namespace AlanVdb\Entity;

use AlanVdb\Entity\Factory\ValidatorFactory;

class Tag extends AbstractEntity
{
    protected function setup(ValidatorFactory $factory) : void
    {
        $this->addFillables('slug', $factory->createSlugValidator());
        $this->addFillables('description', $factory->createStringLengthValidator(0, 255));
    }
}
