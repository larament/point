<?php

declare(strict_types=1);

arch()->preset()->laravel()->ignoring('App\Providers\Filament');

arch('No debugging statements are left in the codebase.')
    ->expect(['dd', 'ddd', 'dump', 'ray'])
    ->not->toBeUsed();
