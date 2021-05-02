<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use App\Models\Machine;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('machines')->insert([
          'number' => 'UMC-342',
          'machine_id' => 21,
          'type_serial' => 'EWD220;33819830413901',
          'online_from' => Carbon::parse('2014-07-27 10:02:37'),
      ]);

      DB::table('machines')->insert([
          'number' => 'UMC-536J',
          'machine_id' => 23,
          'type_serial' => 'EWD440;4813850810101',
          'online_from' => Carbon::parse('2017-09-08 18:12:43'),
      ]);

      DB::table('machines')->insert([
          'number' => 'AMC1-32',
          'machine_id' => 22,
          'type_serial' => 'EWD440-PT;36849839827301',
          'online_from' => Carbon::parse('2016-06-29 16:55:02'),
      ]);
    }
}
