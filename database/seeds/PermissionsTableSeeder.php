<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-09-27 14:55:31',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-09-27 14:55:31',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-09-27 14:55:31',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-27 14:55:32',
                'updated_at' => '2018-09-27 14:55:32',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-27 14:55:33',
                'updated_at' => '2018-09-27 14:55:33',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-27 14:55:33',
                'updated_at' => '2018-09-27 14:55:33',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-27 14:55:33',
                'updated_at' => '2018-09-27 14:55:33',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-09-27 14:55:34',
                'updated_at' => '2018-09-27 14:55:34',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_bancos',
                'table_name' => 'bancos',
                'created_at' => '2018-10-24 01:27:36',
                'updated_at' => '2018-10-24 01:27:36',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_bancos',
                'table_name' => 'bancos',
                'created_at' => '2018-10-24 01:27:36',
                'updated_at' => '2018-10-24 01:27:36',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_bancos',
                'table_name' => 'bancos',
                'created_at' => '2018-10-24 01:27:36',
                'updated_at' => '2018-10-24 01:27:36',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_bancos',
                'table_name' => 'bancos',
                'created_at' => '2018-10-24 01:27:36',
                'updated_at' => '2018-10-24 01:27:36',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_bancos',
                'table_name' => 'bancos',
                'created_at' => '2018-10-24 01:27:36',
                'updated_at' => '2018-10-24 01:27:36',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_exames',
                'table_name' => 'exames',
                'created_at' => '2018-10-25 03:00:15',
                'updated_at' => '2018-10-25 03:00:15',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_exames',
                'table_name' => 'exames',
                'created_at' => '2018-10-25 03:00:15',
                'updated_at' => '2018-10-25 03:00:15',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_exames',
                'table_name' => 'exames',
                'created_at' => '2018-10-25 03:00:15',
                'updated_at' => '2018-10-25 03:00:15',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_exames',
                'table_name' => 'exames',
                'created_at' => '2018-10-25 03:00:15',
                'updated_at' => '2018-10-25 03:00:15',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_exames',
                'table_name' => 'exames',
                'created_at' => '2018-10-25 03:00:15',
                'updated_at' => '2018-10-25 03:00:15',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_local_provas',
                'table_name' => 'local_provas',
                'created_at' => '2018-10-25 03:03:05',
                'updated_at' => '2018-10-25 03:03:05',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_local_provas',
                'table_name' => 'local_provas',
                'created_at' => '2018-10-25 03:03:05',
                'updated_at' => '2018-10-25 03:03:05',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_local_provas',
                'table_name' => 'local_provas',
                'created_at' => '2018-10-25 03:03:05',
                'updated_at' => '2018-10-25 03:03:05',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_local_provas',
                'table_name' => 'local_provas',
                'created_at' => '2018-10-25 03:03:05',
                'updated_at' => '2018-10-25 03:03:05',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_local_provas',
                'table_name' => 'local_provas',
                'created_at' => '2018-10-25 03:03:05',
                'updated_at' => '2018-10-25 03:03:05',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_candidatos',
                'table_name' => 'candidatos',
                'created_at' => '2018-10-25 03:59:25',
                'updated_at' => '2018-10-25 03:59:25',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_candidatos',
                'table_name' => 'candidatos',
                'created_at' => '2018-10-25 03:59:25',
                'updated_at' => '2018-10-25 03:59:25',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_candidatos',
                'table_name' => 'candidatos',
                'created_at' => '2018-10-25 03:59:25',
                'updated_at' => '2018-10-25 03:59:25',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_candidatos',
                'table_name' => 'candidatos',
                'created_at' => '2018-10-25 03:59:25',
                'updated_at' => '2018-10-25 03:59:25',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_candidatos',
                'table_name' => 'candidatos',
                'created_at' => '2018-10-25 03:59:25',
                'updated_at' => '2018-10-25 03:59:25',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_candidato_exame',
                'table_name' => 'candidato_exame',
                'created_at' => '2018-10-27 04:28:41',
                'updated_at' => '2018-10-27 04:28:41',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_candidato_exame',
                'table_name' => 'candidato_exame',
                'created_at' => '2018-10-27 04:28:41',
                'updated_at' => '2018-10-27 04:28:41',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_candidato_exame',
                'table_name' => 'candidato_exame',
                'created_at' => '2018-10-27 04:28:41',
                'updated_at' => '2018-10-27 04:28:41',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_candidato_exame',
                'table_name' => 'candidato_exame',
                'created_at' => '2018-10-27 04:28:41',
                'updated_at' => '2018-10-27 04:28:41',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_candidato_exame',
                'table_name' => 'candidato_exame',
                'created_at' => '2018-10-27 04:28:41',
                'updated_at' => '2018-10-27 04:28:41',
            ),
        ));
        
        
    }
}