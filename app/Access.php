<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Access extends Model {
    protected $table = 'accesses';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
