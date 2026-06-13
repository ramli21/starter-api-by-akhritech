<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait UsesUuid {
    protected static function bootUsesUuid()
    {
        static::creating(function ($model) {
            // Only set UUID when configured and if the key is empty
            if (! config('app.use_uuid')) {
                return;
            }

            // Ensure Eloquent treats primary key as string (non-incrementing)
            $model->incrementing = false;
            $model->keyType = 'string';

            $keyName = $model->getKeyName();

            if (empty($model->{$keyName})) {
                $model->setAttribute($keyName, (string) Str::uuid());
            }
        });
    }
}