<?php

namespace Signum\Timezone\Http\Controllers;

use Illuminate\Routing\Controller;

class TimezoneController extends Controller{


    public function index(){
        date_default_timezone_set(config('timezone.timezone'));
        $time = date('d/m/Y H:i:s');
        return view('timezone::index',['time'=>$time]);
    }

}