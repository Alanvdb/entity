<?php declare(strict_types=1);

namespace AlanVdb\Entity;

class Post extends AbstractEntity
{
    protected function setup() : void
    {
        $this->addFillables('id');
    }
}
