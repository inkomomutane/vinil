<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

          $roles = [
            'agent',
            'typist',
            'administrator',
            'supervisor',
            'hr',
            'field_supervisor',
        ];

           foreach ($roles as $name) {
               Role::updateOrCreate(
                   ['name' => $name],
                   ['name' => $name]
               );
           }
    }
}
