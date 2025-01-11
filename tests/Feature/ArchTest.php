<?php

declare(strict_types=1);

arch('No debugging statements are left in the codebase.')
    ->expect(['dd', 'ddd', 'dump', 'ray'])
    ->not->toBeUsed();
