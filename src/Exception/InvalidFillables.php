<?php declare(strict_types=1);

namespace AlanVdb\Entity\Exception;

use AlanVdb\Entity\Definition\EntityExceptionInterface;
use InvalidArgumentException;

class InvalidFillables
    extends    InvalidArgumentException
    implements EntityExceptionInterface
{}
