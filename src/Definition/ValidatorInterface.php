<?php declare(strict_types=1);

namespace AlanVdb\Entity\Definition;

interface ValidatorInterface
{
    public function isValid($value, bool $nullable = false) : bool;

    public function getErrorMessage(string $label) : string;
}