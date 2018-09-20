<?php

namespace App\Http\Models;

use App\Http\Models\DiameterRange;
use App\Http\Models\EntryDetail;
use App\Http\Models\EntryType;
use Illuminate\Database\Eloquent\Model;

class EntrySummary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entry_type_id',
        'diameter_range_id',
        'pieces',
        'volume_cubic_meters',
        'unit_price',
        'total_amount',
        'total_pieces',
        'total_volume_cubic_meters'
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

    /**
     * Get diameter range.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diameterRange()
    {
        return $this->belongsTo(DiameterRange::class);
    }

    /**
     * Get entry details.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function entryDetail()
    {
        return $this->belongsToMany(EntryDetail::class, 'details_summaries', 'entry_summary_id', 'entry_detail_id');
    }
}
