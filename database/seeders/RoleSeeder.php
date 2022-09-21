<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role = Role::create([
            'name' => 'admin',
        ]);

        $role->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11,12]);

        $role =  Role::create([
            'name' => 'Instructor',
        ]);

        $role->syncPermissions(['Crear cursos','Leer cursos','Actualizar cursos','Eliminar cursos',]);

    }
}
