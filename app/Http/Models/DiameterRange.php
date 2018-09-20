<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DiameterRange extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'entry_type_id',
    ];

    /**
     * Get entry type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entryType()
    {
        return $this->belongsTo(EntryType::class);
    }
}
