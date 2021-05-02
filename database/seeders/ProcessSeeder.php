<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use Illuminate\Database\Seeder;

use App\Models\Customer;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::where('name', '=','UMC Utrecht')->first();
        DB::table('processes')->insert([
            'name' => 'WashDisWash',
            'start_time' => Carbon::parse('2019-02-13 22:03:00.327'),
            'end_time' => Carbon::parse('2019-02-13 21:13:11.328'),
            'customer_id' => $customer->id
        ]);

        $customer2 = Customer::where('name', '=', 'UMC Utrecht')->first();
        DB::table('processes')->insert([
            'name' => 'WashDis',
            'start_time' => Carbon::parse('2019-04-20 20:10:04.129'),
            'end_time' => Carbon::parse('2019-04-20 21:29:20.734'),
            'customer_id' => $customer2->id
        ]);

        $customer3 = Customer::where('name', '=', 'AMC')->first();
        DB::table('processes')->insert([
            'name' => 'Dis',
            'start_time' => Carbon::parse('2019-12-09 23:54:12.349'),
            'end_time' => Carbon::parse('2019-12-09 23:59:14.343'),
            'customer_id' => $customer3->id
        ]);
    }
}
