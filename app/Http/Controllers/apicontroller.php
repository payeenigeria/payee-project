<?php

namespace App\Http\Controllers;
use App\Models\logtable;
use App\Models\user;
use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function  getelement(){
                
        //$=logtable::find($id);

        return response()->json(user::get(),200);
    }
}
