<?php

namespace Solitweb\QRCodeTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class QRCodeTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('qr-code-tile', QRCodeTileComponent::class);

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-qr-code-tile'),
        ], 'dashboard-qr-code-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-qr-code-tile');
    }
}
