<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'store_create',
            ],
            [
                'id'    => 19,
                'title' => 'store_edit',
            ],
            [
                'id'    => 20,
                'title' => 'store_show',
            ],
            [
                'id'    => 21,
                'title' => 'store_delete',
            ],
            [
                'id'    => 22,
                'title' => 'store_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_access',
            ],
            [
                'id'    => 28,
                'title' => 'family_create',
            ],
            [
                'id'    => 29,
                'title' => 'family_edit',
            ],
            [
                'id'    => 30,
                'title' => 'family_show',
            ],
            [
                'id'    => 31,
                'title' => 'family_delete',
            ],
            [
                'id'    => 32,
                'title' => 'family_access',
            ],
            [
                'id'    => 33,
                'title' => 'produto_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
