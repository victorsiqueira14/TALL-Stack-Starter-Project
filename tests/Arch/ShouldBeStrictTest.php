<?php

declare(strict_types=1);

namespace Tests\Arch;

use Illuminate\Database\Eloquent\Model;

it('Model should be strict', function (): void {
    expect(Model::preventsSilentlyDiscardingAttributes())->toBeTrue();
});
