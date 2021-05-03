<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use Illuminate\Database\Seeder;

use App\Models\Process;
use App\Models\ProcessData;


class ProcessDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $process = Process::where('name', 'WashDisWash')->first();
      DB::table('process_data')->insert([
        'water_temp_celecius' => 23,
        'pump10' => 0,
        'pump5' => 1,
        'drain_sensor' => 0,
        'water_level' => 432,
        'process_id' => $process->id
      ]);

      $process2 = Process::where('name', '=', 'WashDis')->first();
      DB::table('process_data')->insert([
        'water_temp_celecius' => 25,
        'pump10' => 1,
        'pump5' => 0,
        'drain_sensor' => 0,
        'water_level' => 382,
        'process_id' => $process2->id
      ]);

      $process3 = Process::where('name', '=', 'Dis')->first();
      DB::table('process_data')->insert([
        'water_temp_celecius' => 22,
        'pump10' => 0,
        'pump5' => 1,
        'drain_sensor' => 1,
        'water_level' => 30,
        'process_id' => $process3->id
      ]);
    }
}
