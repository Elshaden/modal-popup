<?php

namespace Elshaden\ModalPopup\Http\Livewire;

use Elshaden\ModalPopup\Models\ModalPopup;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Null_;

class PopUpsIndex extends Component
{
    use WithPagination;

    protected $popUps;
    public $showModalList = false;

    public function mount()
    {
        $this->popUps = ModalPopup::CreatedBy(auth()->user())->paginate(5);
        $this->showModalList = true;
    }


    public function render()
    {
        return view('modal-popup::livewire.index', [
            'popUps' => $this->showModalList ? $this->popUps : Null,
        ]);
    }
}
