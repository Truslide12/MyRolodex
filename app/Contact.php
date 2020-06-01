<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Scout\Searchable;

class Contact extends Model
{
    use Sortable;

    use Searchable;

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

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }
}
