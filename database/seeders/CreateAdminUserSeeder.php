<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::where('email', 'admin@gmail.com')->first();
        
        if(is_null($user)) {
            $user = User::create([
                'name' => 'admin', 
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456')
            ]);
        }
        
        $role =  Role::where('name', 'Admin')->first();
        if(is_null( $role)) {
            $role = Role::create(['name' => 'Admin']);
        }
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
