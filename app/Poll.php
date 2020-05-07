<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    /**
     * fillable fields in Poll Model
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * hidden fields in Poll Model
     *
     * @var array
     */
    protected $hidden = [
        'questions',
    ];

    /**
     * Poll Model relationship with Question Model
     *
     * @return void
     */
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
