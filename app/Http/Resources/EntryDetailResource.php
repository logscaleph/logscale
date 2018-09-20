<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class EntryDetailResource extends Resource
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
            'entry_id' => $request->entry_id,
            'entry_type_id' => $request->entry_type_id,
            'length' => $request->length,
            'diameter' => $request->diameter,
            'volume' => $request->volume,
        ];
    }
}
