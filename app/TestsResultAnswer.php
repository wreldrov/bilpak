<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestsResultAnswer extends Model
{
    protected $fillable = [
        'test_result_id', 'question_id', 'option_id', 'correct'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tests_result()
    {
        return $this->belongsTo(TestsResult::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
