<?php

namespace Elshaden\ModalPopup\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elshaden\ModalPopup\ModalPopup
 */
class ModalPopup extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'modal-popup';
    }
}
