<?php

namespace Elshaden\ModalPopup\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\ElementCollection;

class ModalPopup extends Model
{

    protected $fillable = [
        'published',
        'title',
        'subtitle',
        'content',
        'template',
        'modal_size',
        'button_text',
        'start_at',
        'end_at',
        'roles',
        'user_conditional_class',
        'seconds_to_start',
        'seconds_duration',
        'allow_ignore',
        'created_by',
    ];

    protected $dates = [
        'seconds_to_start',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'roles' => 'array',
    ];

    public function getCreatedByAttribute()
    {
        return Auth::user()->name;
    }

    public function setCreatedByAttribute($value)
    {
        $this->attributes['created_by'] = Auth::user()->id;
    }

    public function user_created_by()
    {
        return $this->belongsTo(config('modal-popup.created_by_user_model'), 'created_by');
    }

    public function scopeCreatedBy($query, $user)
    {
        return $query->where('created_by', $user->id);
    }

}
