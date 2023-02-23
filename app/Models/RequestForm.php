<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'phone', 'email', 'requested'];

    public function path()
    {
        return route('request_form.show', $this);
    }
}
