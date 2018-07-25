<?php

namespace app\Modules\FindFriends\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lang_table';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

//     /**
//      * Get the phone record associated with the user.
//      */
//     public function phone()
//     {
//         return $this->hasOne('App\Phone');
//     }
}
