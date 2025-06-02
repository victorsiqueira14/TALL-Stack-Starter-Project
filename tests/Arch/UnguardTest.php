<?php

declare(strict_types=1);

namespace Tests\Arch;

use Illuminate\Database\Eloquent\Model;

it('Unguard is enabled by default', function (): void {
    $model = new class extends Model {};

    $model->fill(['non_fillable_attribute' => 'value']);

    expect($model->non_fillable_attribute)->toBe('value');
});
