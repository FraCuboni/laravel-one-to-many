<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['HTML', 'CSS', 'PHP', 'JS', 'C++', 'C#'];
        foreach ($data as $type) {

            $new_type = new Type();

            $new_type->name = $type;

            $new_type->save();
        }
    }
}
