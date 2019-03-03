<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestsResult extends Model
{
    protected $fillable = [
        'test_id', 'user_id', 'test_result'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
