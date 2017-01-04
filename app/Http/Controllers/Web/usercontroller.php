<?php

namespace App\Http\Controllers\Web;

use App\add;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usercontroller extends Controller
{
    public function form()
    {
        $datas = new add();
        $values = $datas::all();
        return view('form',compact('values'));
    }
    public function organization()
    {
        return view('organization');
    }


}
