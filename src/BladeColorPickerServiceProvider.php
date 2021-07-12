<?php

declare(strict_types = 1);

namespace BoringDragon\BladeColorPicker;

use Illuminate\Support\ServiceProvider;

class BladeColorPickerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'boring-dragon');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/boring-dragon'),
        ]);
    }
}