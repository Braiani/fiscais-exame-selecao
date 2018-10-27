<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Início',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dashboard',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2018-09-27 14:55:30',
                'updated_at' => '2018-09-27 15:40:28',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2018-09-27 14:55:30',
                'updated_at' => '2018-10-27 04:28:58',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Usuários',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-09-27 15:40:39',
                'route' => 'voyager.users.index',
                'parameters' => 'null',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-09-27 14:55:31',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-10-27 04:28:58',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-10-24 01:28:27',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-10-24 01:28:27',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-10-24 01:28:27',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-10-24 01:28:27',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Configurações',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2018-09-27 14:55:31',
                'updated_at' => '2018-10-27 04:28:59',
                'route' => 'voyager.settings.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2018-09-27 14:55:34',
                'updated_at' => '2018-10-24 01:28:27',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Bancos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2018-10-24 01:27:36',
                'updated_at' => '2018-10-27 04:29:13',
                'route' => 'voyager.bancos.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Exames',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2018-10-25 03:00:15',
                'updated_at' => '2018-10-27 04:29:02',
                'route' => 'voyager.exames.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Local Provas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-location',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2018-10-25 03:03:05',
                'updated_at' => '2018-10-27 04:29:13',
                'route' => 'voyager.local-provas.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Candidatos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-group',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2018-10-25 03:59:25',
                'updated_at' => '2018-10-27 04:29:10',
                'route' => 'voyager.candidatos.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Inscrições',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-pen',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2018-10-27 04:28:41',
                'updated_at' => '2018-10-27 04:28:58',
                'route' => 'voyager.inscricoes.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}