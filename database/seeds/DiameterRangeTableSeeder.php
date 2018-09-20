<?php

use App\Http\Models\DiameterRange;
use App\Http\Models\EntryType;
use Illuminate\Database\Seeder;

class DiameterRangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $value) {
            DiameterRange::create($value);
        }
    }

    private function data()
    {
        $peelable = EntryType::where('name', 'peelable')->first();
        $sawmill = EntryType::where('name', 'sawmill')->first();

        return [
            [
                'range' => '70-UP',
                'entry_type_id' => $peelable->id
            ],
            [
                'range' => '60-70',
                'entry_type_id' => $peelable->id
            ],
            [
                'range' => '50-58',
                'entry_type_id' => $peelable->id
            ],
            [
                'range' => '40-48',
                'entry_type_id' => $peelable->id
            ],
            [
                'range' => '30-38',
                'entry_type_id' => $peelable->id
            ],
            [
                'range' => '26-28',
                'entry_type_id' => $peelable->id
            ],
            [
                'range' => '60-UP',
                'entry_type_id' => $sawmill->id
            ],
            [
                'range' => '50-58',
                'entry_type_id' => $sawmill->id
            ],
            [
                'range' => '40-48',
                'entry_type_id' => $sawmill->id
            ],
            [
                'range' => '30-38',
                'entry_type_id' => $sawmill->id
            ],
            [
                'range' => '26-28',
                'entry_type_id' => $sawmill->id
            ],
            [
                'range' => '20-24',
                'entry_type_id' => $sawmill->id
            ],
            [
                'range' => '16-18',
                'entry_type_id' => $sawmill->id
            ],
            [
                'range' => '10-14',
                'entry_type_id' => $sawmill->id
            ]
        ];
    }
}