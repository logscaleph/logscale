<?php

namespace App\Http\Models;

use App\Http\Models\EntrySummary;
use Illuminate\Database\Eloquent\Model;

class EntryDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entry_id',
        'entry_type_id',
        'length',
        'diameter',
        'volume',
    ];

    /**
     * Get entry.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }

    /**
     * Get entry type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entryType()
    {
        return $this->belongsTo(EntryType::class);
    }


    /**
     * Get entry details.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function entrySummary()
    {
        return $this->belongsToMany(EntrySummary::class, 'details_summaries', 'entry_detail_id', 'entry_summary_id');
    }
}
