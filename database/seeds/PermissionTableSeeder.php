<?php


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
           'log-page',
           'user-page',
           'role-page',
           'about-page',
           'article-page',
           'category-page',
           'catservice-page',
           'gallery-page',
           'logo-page',
           'office-page',
           'otherservice-page',
           'platforms-page',
           'positionavailable-page',
           'service-page',
           'sliders-page',
           'tag-page',
           'team-page',
           'works-page',
           
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}