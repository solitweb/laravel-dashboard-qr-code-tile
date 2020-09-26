<?php

namespace Solitweb\QRCodeTile;

use Livewire\Component;

class QRCodeTileComponent extends Component
{
    public $code;

    public $position;

    public $title;

    public function mount(?string $code = null, string $position, ?string $title = null)
    {
        $this->code = $code;

        $this->position = $position;

        $this->title = $title;
    }

    public function render()
    {
        return view('dashboard-qr-code-tile::tile');
    }
}
