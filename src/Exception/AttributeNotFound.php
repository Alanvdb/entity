<?php declare(strict_types=1);

namespace AlanVdb\Entity\Exception;

use AlanVdb\Entity\Definition\EntityExceptionInterface;
use RuntimeException;

class AttributeNotFound
    extends    RuntimeException
    implements EntityExceptionInterface
{}
