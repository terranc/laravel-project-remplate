<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => '首页',
                'icon' => 'fa-dashboard',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 13,
                'title' => '系统管理',
                'icon' => 'fa-cogs',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 15,
                'title' => '管理员列表',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 16,
                'title' => '角色管理',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 17,
                'title' => '权限配置',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 18,
                'title' => '菜单管理',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 19,
                'title' => '操作日志',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 2,
                'order' => 14,
                'title' => '系统参数配置',
                'icon' => 'fa-toggle-on',
                'uri' => 'config',
                'permission' => NULL,
                'created_at' => '2018-09-11 13:36:51',
                'updated_at' => '2018-09-21 08:36:52',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 2,
                'order' => 21,
                'title' => 'Redis管理',
                'icon' => 'fa-database',
                'uri' => 'redis',
                'permission' => NULL,
                'created_at' => '2018-09-11 13:37:11',
                'updated_at' => '2018-09-21 08:36:52',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 2,
                'order' => 22,
                'title' => '日志查看',
                'icon' => 'fa-database',
                'uri' => 'logs',
                'permission' => NULL,
                'created_at' => '2018-09-11 13:37:21',
                'updated_at' => '2018-09-21 08:36:52',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 2,
                'order' => 20,
                'title' => '计划任务',
                'icon' => 'fa-clock-o',
                'uri' => 'scheduling',
                'permission' => NULL,
                'created_at' => '2018-09-11 13:37:34',
                'updated_at' => '2018-09-21 08:36:52',
            ),
        ));
        
        
    }
}