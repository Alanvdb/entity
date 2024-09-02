<?php declare(strict_types=1);

namespace AlanVdb\Entity\Exception;

use AlanVdb\Entity\Definition\ValidatorExceptionInterface;
use InvalidArgumentException;

class InvalidValidatorParamProvided
    extends InvalidArgumentException
    implements ValidatorExceptionInterface
{}
