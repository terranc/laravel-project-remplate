<?php

use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_permissions')->delete();
        
        \DB::table('admin_permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '所有权限',
                'slug' => '*',
                'http_method' => '',
                'http_path' => '*',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '首页',
                'slug' => 'dashboard',
                'http_method' => 'GET',
                'http_path' => '/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '登录',
                'slug' => 'auth.login',
                'http_method' => '',
                'http_path' => '/auth/login
/auth/logout',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '个人设置',
                'slug' => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path' => '/auth/setting',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '管理员管理',
                'slug' => 'auth.management',
                'http_method' => '',
                'http_path' => '/auth/roles
/auth/permissions
/auth/menu
/auth/logs',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '参数配置',
                'slug' => 'ext.config',
                'http_method' => NULL,
                'http_path' => '/config*',
                'created_at' => '2018-10-29 18:52:25',
                'updated_at' => '2018-10-29 18:52:25',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Redis管理',
                'slug' => 'ext.redis-manager',
                'http_method' => '',
                'http_path' => '/redis*',
                'created_at' => '2018-09-11 13:37:11',
                'updated_at' => '2018-09-11 16:30:43',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '日志查看',
                'slug' => 'ext.log-viewer',
                'http_method' => '',
                'http_path' => '/logs*',
                'created_at' => '2018-09-11 13:37:21',
                'updated_at' => '2018-09-11 16:30:52',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '计划任务',
                'slug' => 'ext.scheduling',
                'http_method' => '',
                'http_path' => '/scheduling*',
                'created_at' => '2018-09-11 13:37:34',
                'updated_at' => '2018-09-11 16:28:54',
            ),
        ));
        
        
    }
}