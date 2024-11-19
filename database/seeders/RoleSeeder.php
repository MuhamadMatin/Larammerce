<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = json_encode([
            [
                'name' => 'Admin',
                'guard_name' => 'web',
                'permissions' => [
                    'view_user',
                    'view_any_user',
                    'create_user',
                    'edit_user',
                    'delete_user',
                    'restore_user',
                    'force_delete_user',
                    'view_role',
                    'view_any_role',
                    'create_role',
                    'edit_role',
                    'delete_role',
                    'restore_role',
                    'force_delete_role',
                    'view_category',
                    'view_any_category',
                    'create_category',
                    'edit_category',
                    'delete_category',
                    'restore_category',
                    'force_delete_category',
                    'view_product',
                    'view_any_product',
                    'create_product',
                    'edit_product',
                    'delete_product',
                    'restore_product',
                    'force_delete_product',
                    'view_shop',
                    'view_any_shop',
                    'create_shop',
                    'edit_shop',
                    'delete_shop',
                    'restore_shop',
                    'force_delete_shop',
                    'view_image_product',
                    'view_any_image_product',
                    'create_image_product',
                    'edit_image_product',
                    'delete_image_product',
                    'restore_image_product',
                    'force_delete_image_product',
                    'view_riview',
                    'view_any_riview',
                    'create_riview',
                    'edit_riview',
                    'delete_riview',
                    'restore_riview',
                    'force_delete_riview',
                    'view_saved_product',
                    'view_any_saved_product',
                    'create_saved_product',
                    'edit_saved_product',
                    'delete_saved_product',
                    'restore_saved_product',
                    'force_delete_saved_product',
                ]
            ],
            [
                'name' => 'Seller',
                'guard_name' => 'web',
                'permissions' => [
                    'view_product',
                    'view_any_product',
                    'create_product',
                    'edit_product',
                    'delete_product',
                    'view_shop',
                    'view_any_shop',
                    'create_shop',
                    'edit_shop',
                    'delete_shop',
                    'view_image_product',
                    'view_any_image_product',
                    'create_image_product',
                    'edit_image_product',
                    'delete_image_product',
                    'view_riview',
                    'view_any_riview',
                    'create_riview',
                    'edit_riview',
                    'delete_riview',
                    'create_saved_product',
                    'delete_saved_product',
                ]
            ],
            [
                'name' => 'User',
                'guard_name' => 'web',
                'permissions' => [
                    'view_product',
                    'view_any_product',
                    'view_shop',
                    'view_any_shop',
                    'view_image_product',
                    'view_any_image_product',
                    'view_riview',
                    'view_any_riview',
                ]
            ]
        ]);

        $directPermissions = json_encode([
            ['name' => 'view_user', 'guard_name' => 'web'],
            ['name' => 'view_any_user', 'guard_name' => 'web'],
            ['name' => 'create_user', 'guard_name' => 'web'],
            ['name' => 'edit_user', 'guard_name' => 'web'],
            ['name' => 'delete_user', 'guard_name' => 'web'],
            ['name' => 'restore_user', 'guard_name' => 'web'],
            ['name' => 'force_delete_user', 'guard_name' => 'web'],
            ['name' => 'view_role', 'guard_name' => 'web'],
            ['name' => 'view_any_role', 'guard_name' => 'web'],
            ['name' => 'create_role', 'guard_name' => 'web'],
            ['name' => 'edit_role', 'guard_name' => 'web'],
            ['name' => 'delete_role', 'guard_name' => 'web'],
            ['name' => 'restore_role', 'guard_name' => 'web'],
            ['name' => 'force_delete_role', 'guard_name' => 'web'],
            ['name' => 'view_category', 'guard_name' => 'web'],
            ['name' => 'view_any_category', 'guard_name' => 'web'],
            ['name' => 'create_category', 'guard_name' => 'web'],
            ['name' => 'edit_category', 'guard_name' => 'web'],
            ['name' => 'delete_category', 'guard_name' => 'web'],
            ['name' => 'restore_category', 'guard_name' => 'web'],
            ['name' => 'force_delete_category', 'guard_name' => 'web'],
            ['name' => 'view_product', 'guard_name' => 'web'],
            ['name' => 'view_any_product', 'guard_name' => 'web'],
            ['name' => 'create_product', 'guard_name' => 'web'],
            ['name' => 'edit_product', 'guard_name' => 'web'],
            ['name' => 'delete_product', 'guard_name' => 'web'],
            ['name' => 'restore_product', 'guard_name' => 'web'],
            ['name' => 'force_delete_product', 'guard_name' => 'web'],
            ['name' => 'view_shop', 'guard_name' => 'web'],
            ['name' => 'view_any_shop', 'guard_name' => 'web'],
            ['name' => 'create_shop', 'guard_name' => 'web'],
            ['name' => 'edit_shop', 'guard_name' => 'web'],
            ['name' => 'delete_shop', 'guard_name' => 'web'],
            ['name' => 'restore_shop', 'guard_name' => 'web'],
            ['name' => 'force_delete_shop', 'guard_name' => 'web'],
            ['name' => 'view_image_product', 'guard_name' => 'web'],
            ['name' => 'view_any_image_product', 'guard_name' => 'web'],
            ['name' => 'create_image_product', 'guard_name' => 'web'],
            ['name' => 'edit_image_product', 'guard_name' => 'web'],
            ['name' => 'delete_image_product', 'guard_name' => 'web'],
            ['name' => 'restore_image_product', 'guard_name' => 'web'],
            ['name' => 'force_delete_image_product', 'guard_name' => 'web'],
            ['name' => 'view_riview', 'guard_name' => 'web'],
            ['name' => 'view_any_riview', 'guard_name' => 'web'],
            ['name' => 'create_riview', 'guard_name' => 'web'],
            ['name' => 'edit_riview', 'guard_name' => 'web'],
            ['name' => 'delete_riview', 'guard_name' => 'web'],
            ['name' => 'restore_riview', 'guard_name' => 'web'],
            ['name' => 'force_delete_riview', 'guard_name' => 'web'],
            ['name' => 'view_saved_product', 'guard_name' => 'web'],
            ['name' => 'view_any_saved_product', 'guard_name' => 'web'],
            ['name' => 'create_saved_product', 'guard_name' => 'web'],
            ['name' => 'edit_saved_product', 'guard_name' => 'web'],
            ['name' => 'delete_saved_product', 'guard_name' => 'web'],
            ['name' => 'restore_saved_product', 'guard_name' => 'web'],
            ['name' => 'force_delete_saved_product', 'guard_name' => 'web'],
        ]);

        static::makeRolesWithPermissions($rolesWithPermissions);

        static::makeDirectPermissions($directPermissions);

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
                'role' => 'Admin',
            ],
            [
                'name' => 'seller',
                'email' => 'seller@gmail.com',
                'password' => 'seller',
                'role' => 'Seller',
            ],
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => 'user1',
                'role' => 'User',
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => 'user2',
                'role' => 'User',
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'password' => 'user3',
                'role' => 'User',
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ])->assignRole($user['role']);
        }

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = Role::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {
                    $permissions = collect($rolePlusPermission['permissions'])
                        ->map(fn($permission) => Permission::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissions);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            foreach ($permissions as $permission) {
                Permission::firstOrCreate([
                    'name' => $permission['name'],
                    'guard_name' => $permission['guard_name'],
                ]);
            }
        }
    }
}
