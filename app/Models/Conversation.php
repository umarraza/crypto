<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'conversations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
