<?php

namespace Elshaden\ModalPopup\Http\Livewire;


use Elshaden\ModalPopup\Models\ModalPopup;
use LivewireUI\Modal\ModalComponent;

class PopupCreate extends ModalComponent
{
    public ModalPopup $PopUp;
    public array $Roles=[];
    public array $defaults  = [];

    protected $rules=[
        'PopUp.published'=>'required',
        'PopUp.title'=>'required',
        'PopUp.subtitle'=>'',
        'PopUp.content'=>'required',
        'PopUp.template'=>'',
        'PopUp.modal_size'=>'',
        'PopUp.button_text'=>'',
        'PopUp.start_at'=>'required',
        'PopUp.end_at'=>'required',
        'PopUp.roles'=>'required',
        'PopUp.user_conditional_class'=>'',
        'PopUp.seconds_to_start'=>'',
        'PopUp.seconds_duration'=>'',
        'PopUp.allow_ignore'=>'',

    ];

    public function mount()
    {
        $this->defaults = config('modal-popup.defaults');
        if(config('modal-popup.enable_popup_for_roles')) {
            $this->defaults['Roles']['options'] =config('modal-popup.popup_roles_pluck_class')? app(config('modal-popup.popup_roles_pluck_class')??Null):[];

        }else{
            $this->defaults['Roles']['options'] = [];
        }
    }






    public function render()
    {
        return view('modal-popup::livewire.create');
    }

    public function Save()
    {
     $data =    $this->validate();


    }
}
