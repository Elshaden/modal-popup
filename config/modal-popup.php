<?php
// config for Elshaden/ModalPopup
return [

    'created_by_user_model' => 'App\Models\User',
    'enable_popup_for_roles' =>true,
    'popup_roles_pluck_class' =>'',
    'defaults'=>[
        'template'=>'square',
        'modal_size'=>'5xl',
        'button_text'=>'Close',
        'start_at'=>\Carbon\Carbon::now()->addMinutes(1),
        'end_at'=>\Carbon\Carbon::today()->addDays(1),
        'roles'=>'all',
        'seconds_to_start'=>'5',
        'seconds_duration'=>'300',
        'allow_ignore'=>true,


    ]
];
