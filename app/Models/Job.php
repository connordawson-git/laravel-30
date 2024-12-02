<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    protected $table = "job_listing";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'salary'
    ];

}
