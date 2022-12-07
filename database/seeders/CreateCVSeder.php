<?php

namespace Database\Seeders;

use App\Models\CV;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateCVSeder extends Seeder
{
    
    public function run()
    {
        CV::create([
            'filename' => 'filename.pdf'
        ]);
    }
}
