<?php

namespace app\Modules\FindFriends\Controllers;

use App\Http\Controllers\Controller;
use app\Modules\FindFriends\Models\Friend;
use app\Modules\FindFriends\Models\User;

class ViewController extends Controller
{

    public function welcome($user_id = null)
    {

//         $suggestedFriends = Friend::where([
//                 ['fr1', '<>', $user_id],
//                 ['fr2', '<>', $user_id]
//             ])
//             ->join('users', function ($join) {
//                 $join->on('users.user_id', '=', 'fr1')
//                 ->where('users.country', '=', 1);
//             })
//             ->orderBy('status', 'desc')
//             ->groupBy('fr1')
//             ->havingRaw('COUNT(*) > 1')
//             ->get();
//         $clearDuplicates = $suggestedFriends->groupBy('fr1');
//         echo '<pre>';
//         var_dump($clearDuplicates);exit;
//         $suggestedFriends->load(['User' => function ($query) {
//             $query->select('user_id', 'real_name as title', 'country as country_id');
//         }]);
        $user = User::select('user_id as id', 'real_name as title', 'country as country_id')
            ->where('user_id', $user_id)
            ->with('country', 'friends', 'friends2')
            ->first();
        $userFriends1 = $this->array_value_recursive('fr1', $user['friends2']->toArray());
        $userFriends2 = $this->array_value_recursive('fr2', $user['friends']->toArray());
        $userFriends = $result = array_merge($userFriends1, $userFriends2);

        $suggestedFriends = User::select('user_id as id', 'real_name as title', 'country as country_id')
            ->where([
                ['country', 1],
                ['user_id', '<>', $user_id]
            ])
            ->whereNotIn('user_id', $userFriends)
            ->orderBy('real_name', 'asc')
            ->paginate(15);
        return view('FindFriends::welcome', [
            'friends' => $suggestedFriends,
            'user' => $user
        ]);;
    }

    public function array_value_recursive($key, array $arr)
    {
        $val = array();
        array_walk_recursive($arr, function($v, $k) use($key, &$val) {
            if($k == $key) array_push($val, $v);
        });
        return count($val) > 1 ? $val : array_pop($val);
    }
}
