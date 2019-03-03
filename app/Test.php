<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'subject_type', 'subject_id', 'title', 'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tests_results()
    {
        return $this->hasMany(TestsResult::class);
    }
}
