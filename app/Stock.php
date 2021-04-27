<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stocks";
    protected $fillable = ['id', 'content'];

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
