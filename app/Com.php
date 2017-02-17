<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com extends Model
{
    /**
     * The table
     *
     * @var string
     */
    protected $table = "coms";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id', 'commentaire', 'article_id',
    ];

    /**
     * The attributes that should be hidden for arrays
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function article() {
        return $this->belongsTo('App\Article');
    }
}
