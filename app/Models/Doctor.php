<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);

    }

    public function courses()
{
    return $this->belongsToMany(Course::class);
}

}
