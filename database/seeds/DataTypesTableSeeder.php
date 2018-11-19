<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-09-27 14:55:29',
                'updated_at' => '2018-09-27 14:55:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-09-27 14:55:29',
                'updated_at' => '2018-09-27 14:55:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-09-27 14:55:29',
                'updated_at' => '2018-09-27 14:55:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'bancos',
                'slug' => 'bancos',
                'display_name_singular' => 'Banco',
                'display_name_plural' => 'Bancos',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Banco',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-24 01:27:36',
                'updated_at' => '2018-10-24 01:28:15',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'exames',
                'slug' => 'exames',
                'display_name_singular' => 'Exame',
                'display_name_plural' => 'Exames',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Exame',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-25 03:00:14',
                'updated_at' => '2018-11-03 15:25:56',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'local_provas',
                'slug' => 'local-provas',
                'display_name_singular' => 'Local Prova',
                'display_name_plural' => 'Local Provas',
                'icon' => 'voyager-location',
                'model_name' => 'App\\LocalProva',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-25 03:03:04',
                'updated_at' => '2018-10-27 01:49:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'candidatos',
                'slug' => 'candidatos',
                'display_name_singular' => 'Candidato',
                'display_name_plural' => 'Candidatos',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Candidato',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-25 03:59:25',
                'updated_at' => '2018-10-26 04:20:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'candidato_exame',
                'slug' => 'inscricoes',
                'display_name_singular' => 'Inscrição',
                'display_name_plural' => 'Inscrições',
                'icon' => 'voyager-pen',
                'model_name' => 'App\\CandidatoExame',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-27 04:28:41',
                'updated_at' => '2018-11-18 23:26:15',
            ),
        ));
        
        
    }
}