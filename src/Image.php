<?php declare(strict_types=1);

namespace AlanVdb\Entity;

use AlanVdb\Entity\Factory\ValidatorFactory;

class Image extends Post
{
    protected function setup(ValidatorFactory $factory) : void
    {
        parent::setup($factory);

        $integerValidator = new IntegerValidator();

        $this->addFillables('alt',    $factory->createStringLengthValidator(0, 255));
        $this->addFillables('width',  $integerValidator);
        $this->addFillables('height', $integerValidator);
    }
}
