<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function own(){

        return $this->BelongsTo("\App\User","user_id");
    }
}
