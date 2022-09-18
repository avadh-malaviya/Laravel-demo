<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'raj',
            'father_name' => "bhai",
            'mother_name' => 'ben',
            'contact_no' => '1234567890',
            'address' => "sadhna, yogi chowk",
            'city' => "Surat",
            'state' => "Gujarat",
            'country' => 'India',
            'school' => 'sadhna',
            'standard' => '5',
            'mark' => '88'
        ]);
        Student::create([
            'name' => 'raj',
            'father_name' => "bhai",
            'mother_name' => 'ben',
            'contact_no' => '1234567890',
            'address' => "sadhna, yogi chowk",
            'city' => "Surat",
            'state' => "Gujarat",
            'country' => 'India',
            'school' => 'sadhna',
            'standard' => '5',
            'mark' => '88'
        ]);
        Student::create([
            'name' => 'raj',
            'father_name' => "bhai",
            'mother_name' => 'ben',
            'contact_no' => '1234567890',
            'address' => "sadhna, yogi chowk",
            'city' => "Surat",
            'state' => "Gujarat",
            'country' => 'India',
            'school' => 'sadhna',
            'standard' => '5',
            'mark' => '88'
        ]);
    }
}
