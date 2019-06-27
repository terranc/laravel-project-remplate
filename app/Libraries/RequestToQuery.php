<?php
/**
 * Created by PhpStorm.
 * User: terranc
 * Date: 2018/11/13
 * Time: 22:54
 */

namespace App\Libraries;

class RequestToQuery {

    public static function generate(Array $request) {
        $where = \DB::query();
        foreach($request as $key => $val) {
            if (!is_null($val)) {
                if (strpos($key, '_at_date') !== false) {
                    $where->whereDate(str_replace('_at_date', '_at', $key), $val);
                } else if (strpos($key, '_range') !== false) {
                    $where->whereBetween(str_replace('_range', '', $key), $val);
                } else if (substr($key, -1) === '%') {
                    $where->where(substr($key, 0, -1), 'like' , $val . '%');
                } else {
                    $where->where($key, $val);
                }
            }
        }
        return $where;
    }
}
