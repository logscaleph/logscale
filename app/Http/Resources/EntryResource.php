<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class EntryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'supplier' => $request->supplier,
            'truck_no' => $request->truck_no,
            'delivered_to' => $request->delivered_to,
            'date' => $request->date,
            'total_pieces' => $request->total_pieces,
            'total_volume_cubic_meters' => $request->total_volume_cubic_meters,
            'grand_total' => $request->grand_total,
            'payment' => $request->payment,
            'balance' => $request->balance,
            'cash_advance' => $request->cash_advance,
        ];
    }
}
