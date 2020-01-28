<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // もしcreateメソッドを用いた場合、
    protected $fillable = ['content', 'user_id','status'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
