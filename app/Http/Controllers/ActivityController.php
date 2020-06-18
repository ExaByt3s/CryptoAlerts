<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function get_activity() {
        $activity = [
            'a',
            'b',
            'c',
            'd'
        ];
        return view('internals.activity', [
            'activity' => $activity
        ]);
    }
}
