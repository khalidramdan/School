<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([ 
            'id' => '1',
            'role_nom' => 'Admin',
        ],
        );

        DB::table('roles')->insert([ 
            'id' => '2',
            'role_nom' => 'Prof',   
        ],
        );

        DB::table('roles')->insert([ 
            'id' => '3',
            'role_nom' => 'Student',
        ],
        );

        DB::table('roles')->insert([ 
            'id' => '4',
            'role_nom' => 'Parent',   
        ],
        );

        DB::table('roles')->insert([ 
            'id' => '5',
            'role_nom' => 'Surveillant Generale',  
        ],
        );
    }
}
