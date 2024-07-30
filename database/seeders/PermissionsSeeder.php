<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Schema; // Import the Schema facade
use Illuminate\Support\Facades\Hash;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        /* // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $patientRole = Role::create(['name' => 'patient']);
        $doctorRole = Role::create(['name' => 'doctor']);
        $pharmacistRole = Role::create(['name' => 'pharmacist']);

        // Create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        // Define more permissions as needed

        // Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all()); // Give all permissions to admin
        $patientRole->givePermissionTo('edit articles');  // Give specific permissions to user

        // Create a unique user only if it doesn't exist
        $user = User::firstOrCreate([
            'email' => 'admin@example.com',  
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'),
        ]);

        // Assign the 'admin' role if the roles table exists
        if (Schema::hasTable('roles')) { 
            $user->assignRole('admin');
        } else {
            // Handle the case where the roles table doesn't exist
            // For example, you could log an error or throw an exception
            Log::error('Roles table not found during seeding.');
        } */
    }
}
