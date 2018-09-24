<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    public $table = 'contact_form';

    public $fillable = ['name','email','subject','message'];
}
