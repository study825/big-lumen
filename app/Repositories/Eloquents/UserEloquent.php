<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\UserInterface;

class UserEloquent extends BaseEloquent implements UserInterface
{
    public function model(){
        return App\Models\User::class;
    }


}