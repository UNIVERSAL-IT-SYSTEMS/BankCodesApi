<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banks';
    protected $hidden = ['country_id'];

    public function country(){
        return $this->hasOne( 'App\Country' );
    }
}
