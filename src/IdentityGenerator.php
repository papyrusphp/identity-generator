<?php

declare(strict_types=1);

namespace Papyrus\IdentityGenerator;

interface IdentityGenerator
{
    public function generateId(): string;
}
