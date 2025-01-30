<?php

namespace Database\Seeders;

use App\Models\User; 
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role; 

class DadosPreDefinidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user = User::factory()->create([
             'name' => 'Adm',
             'email' => 'admin@gmail.com',
         ]);
         $role = Role::create(['name' => 'superadmin']);
         $user->syncRoles($role);
         $permissions = [
             'view articles',
             'create articles',
             'edit articles',
             'delete articles',
             'view permissions',
             'create permissions',
             'edit permissions',
             'delete permissions',
             'view roles',
             'create roles',
             'edit roles',
             'delete roles',
             'view users', 
             'edit users', 
         ];
      
          foreach ($permissions as $permission) { 
              $SavePermission = Permission::create(['name' => $permission]); 
           
          }


    }
}
