<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = new Setting;
        $setting->name              = 'Warkop Bj';
        $setting->address           = 'Jl.anin dulu saja';
        $setting->telephone         = '082351306041';
        $setting->number_of_tables  = 10;
        $setting->save();
    }
}
