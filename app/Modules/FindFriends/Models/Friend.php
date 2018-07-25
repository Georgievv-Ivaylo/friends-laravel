<?php

namespace app\Modules\FindFriends\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'friends';
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
    public function user()
    {
        return $this->hasOne('app\Modules\FindFriends\Models\User', 'user_id', 'fr1');
    }
}
