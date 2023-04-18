<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'posts index',
            'posts create',
            'posts edit',
            'posts delete',
            'slider index',
            'slider create',
            'slider edit',
            'slider delete',
            'directors index',
            'directors create',
            'directors edit',
            'directors delete',
            'about index',
            'about edit',
            'categories index',
            'categories create',
            'categories edit',
            'categories delete',
            'forigners index',
            'forigners create',
            'forigners edit',
            'forigners delete',
            'languages index',
            'languages create',
            'languages edit',
            'languages delete',
            'contact-us index',
            'contact-us delete',
            'settings index',
            'settings create',
            'settings edit',
            'settings delete',
            'seo-tags index',
            'seo-tags create',
            'seo-tags edit',
            'seo-tags delete',
            'users index',
            'users create',
            'users edit',
            'users delete',
            'permissions index',
            'permissions create',
            'permissions edit',
            'permissions delete',
            'new-permission index',
            'new-permission create',
            'new-permission edit',
            'new-permission delete',
            'report index',
            'report delete',
            'information index',
            'information create',
            'information edit',
            'information delete',
            'dashboard index',
            'confirm-post',
            'newsletter index',
            'newsletter create',
            'newsletter delete',
        ];
        foreach ($permissions as $permission){
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
    }
}
