<?php

use App\Http\Models\EntryType;
use Illuminate\Database\Seeder;

class EntryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $value) {
            EntryType::create($value);
        }
    }

    private function data()
    {
        return [
            ['name' => 'peelable'],
            ['name' => 'sawmill'],
        ];
    }
}
