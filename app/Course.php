<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'requirements', 'agenda', 'free_course', 'company_course'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|null
     */
    public function company()
    {
        if ($this->company_course != 0)
            return $this->belongsTo(Company::class, 'company_course');

        return NULL;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
