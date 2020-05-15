<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable;
use Kyslik\ColumnSortable\Sortable;

class Contact extends Model
{
    use Sortable;

    protected $fillable = [ 'firstName', 'lastName', 'email', 'phone', 'birthday' ];

    public $sortable = [ 'id', 'firstName', 'lastName', 'email', 'phone', 'birthday' ];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    static function getFields()
    {
        return [ 'firstName', 'lastName', 'email', 'phone', 'birthday' ];
    }
}
