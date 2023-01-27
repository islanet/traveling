<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->truncate();

        DB::table('activities')->insert([
            [
                'title' => 'Paseo por las montañas flotantes de Pandora',
                'description' => 'Paseo por las montañas flotantes de Pandora',
                'price' => '10',
                'popularity' => '5',
                'start_at' => "2023-01-01 00:00:00",
                'end_at' => "2023-03-01 23:59:59",
            ],
            [
                'title' => 'Navegación por los Rios de Colores',
                'description' => 'Navegación por los Rios de Colores',
                'price' => '5.5',
                'popularity' => '3',
                'start_at' => "2023-01-15 00:00:00",
                'end_at' => "2023-03-15 23:59:59",
            ],
            [
                'title' => 'Caminata por las Cataratas Invertidas de Cuzco',
                'description' => 'Caminata por las Cataratas Invertidas de Cuzco',
                'price' => '5.5',
                'popularity' => '3',
                'start_at' => "2023-01-25 00:00:00",
                'end_at' => "2023-03-25 23:59:59",
            ],
            [
                'title' => 'Clínica de Beisbol con Andrés Galarraga',
                'description' => 'Clínica de Beisbol con Andrés Galarraga',
                'price' => '68.5',
                'popularity' => '4',
                'start_at' => "2023-01-30 00:00:00",
                'end_at' => "2023-03-30 23:59:59",
            ],
            [
                'title' => 'Exhibición de Beisbol con Andrés Galarraga',
                'description' => 'Exhibición de Beisbol con Andrés Galarraga',
                'price' => '20.5',
                'popularity' => '4',
                'start_at' => "2023-01-30 00:00:00",
                'end_at' => "2023-03-30 23:59:59",
            ],
            [
                'title' => 'Exhibición de Beisbol con las Sardinas de la Guaira',
                'description' => 'Exhibición de Beisbol con las Sardinas de la Guaira',
                'price' => '20.5',
                'popularity' => '4',
                'start_at' => "2023-04-01 00:00:00",
                'end_at' => "2023-04-30 23:59:59",
            ]
        ]);  
        DB::table('activity_activity')->truncate();
        DB::table('activity_activity')->insert([
            [
                'activity_father_id' => '4',
                'activity_id' =>'5'
            ],
            [
                'activity_father_id' => '4',
                'activity_id' =>'6'
            ],
            [
                'activity_father_id' => '5',
                'activity_id' =>'6'
            ],
        ]);  

    }
}
