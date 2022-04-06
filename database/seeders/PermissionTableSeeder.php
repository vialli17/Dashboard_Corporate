<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'task-list',
            'task-create',
            'task-edit',
            'task-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'can-be-pic',
            'title-edit',
            'pic-edit',
            'start-edit',
            'deadline-edit',
            'description-edit',
            'picdescription-edit',
            'upload-edit',
            'picupload-edit',
            'status-edit'
         ];
        foreach ($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }
   }
}
