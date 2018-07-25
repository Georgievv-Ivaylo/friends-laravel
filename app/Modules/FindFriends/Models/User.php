<?php

namespace app\Modules\FindFriends\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $real_name = 'title';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

//     /**
//      * Get the phone record associated with the user.
//      */
    public function country()
    {
        return $this->hasOne('app\Modules\FindFriends\Models\Country', 'language_id', 'country_id');
    }

    public function friends()
    {
        return $this->hasMany('app\Modules\FindFriends\Models\Friend', 'fr1', 'id');
    }

    public function friends2()
    {
        return $this->hasMany('app\Modules\FindFriends\Models\Friend', 'fr2', 'id');
    }
}
