<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('matieres')->insert([ 
            'id' => '1',
            'nom' => 'C#',
        ],
        );
        DB::table('matieres')->insert([ 
            'id' => '2',
            'nom' => 'CSS',
        ],
        );
        DB::table('matieres')->insert([ 
            'id' => '3',
            'nom' => 'HTML',
        ],
        );
        DB::table('matieres')->insert([ 
            'id' => '4',
            'nom' => 'physics',
        ],
        );

    }
}
