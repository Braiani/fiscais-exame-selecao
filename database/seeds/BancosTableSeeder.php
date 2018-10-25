<?php

use Illuminate\Database\Seeder;

class BancosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bancos')->delete();
        
        \DB::table('bancos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cod_banco' => 246,
                'nome' => 'Banco ABC Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'cod_banco' => 356,
                'nome' => 'Banco ABN AMRO Real S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'cod_banco' => 25,
                'nome' => 'Banco Alfa S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'cod_banco' => 641,
                'nome' => 'Banco Alvorada S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'cod_banco' => NULL,
                'nome' => 'Banco American Express S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'cod_banco' => 29,
                'nome' => 'Banco Banerj S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'cod_banco' => 38,
                'nome' => 'Banco Banestado S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'cod_banco' => 740,
                'nome' => 'Banco Barclays S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'cod_banco' => 107,
                'nome' => 'Banco BBM S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'cod_banco' => 31,
                'nome' => 'Banco Beg S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'cod_banco' => 36,
                'nome' => 'Banco Bem S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'cod_banco' => 394,
                'nome' => 'Banco BMC S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'cod_banco' => 318,
                'nome' => 'Banco BMG S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'cod_banco' => 752,
                'nome' => 'Banco BNP Paribas Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'cod_banco' => 248,
                'nome' => 'Banco Boavista Interatlântico S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'cod_banco' => 237,
                'nome' => 'Banco Bradesco S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'cod_banco' => 225,
                'nome' => 'Banco Brascan S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'cod_banco' => 263,
                'nome' => 'Banco Cacique S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'cod_banco' => 222,
                'nome' => 'Banco Calyon Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'cod_banco' => 40,
                'nome' => 'Banco Cargill S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'cod_banco' => 745,
                'nome' => 'Banco Citibank S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'cod_banco' => 215,
                'nome' => 'Banco Comercial e de Investimento Sudameris S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'cod_banco' => 756,
                'nome' => 'Banco Cooperativo do Brasil S.A. - BANCOOB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'cod_banco' => 748,
                'nome' => 'Banco Cooperativo Sicredi S.A. - BANSICREDI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'cod_banco' => 505,
            'nome' => 'Banco Credit Suisse (Brasil) S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'cod_banco' => 229,
                'nome' => 'Banco Cruzeiro do Sul S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'cod_banco' => 3,
                'nome' => 'Banco da Amazônia S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'cod_banco' => 707,
                'nome' => 'Banco Daycoval S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'cod_banco' => NULL,
                'nome' => 'Banco de Lage Landen Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'cod_banco' => 24,
                'nome' => 'Banco de Pernambuco S.A. - BANDEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'cod_banco' => 456,
                'nome' => 'Banco de Tokyo-Mitsubishi Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'cod_banco' => 214,
                'nome' => 'Banco Dibens S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'cod_banco' => 1,
                'nome' => 'Banco do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'cod_banco' => 27,
                'nome' => 'Banco do Estado de Santa Catarina S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'cod_banco' => 33,
                'nome' => 'Banco do Estado de São Paulo S.A. - Banespa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'cod_banco' => 47,
                'nome' => 'Banco do Estado de Sergipe S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'cod_banco' => 37,
                'nome' => 'Banco do Estado do Pará S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'cod_banco' => 41,
                'nome' => 'Banco do Estado do Rio Grande do Sul S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'cod_banco' => 4,
                'nome' => 'Banco do Nordeste do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'cod_banco' => 265,
                'nome' => 'Banco Fator S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'cod_banco' => NULL,
                'nome' => 'Banco Fiat S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'cod_banco' => 224,
                'nome' => 'Banco Fibra S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'cod_banco' => 175,
                'nome' => 'Banco Finasa S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'cod_banco' => 252,
                'nome' => 'Banco Fininvest S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'cod_banco' => 233,
                'nome' => 'Banco GE Capital S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'cod_banco' => NULL,
                'nome' => 'Banco General Motors S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'cod_banco' => 734,
                'nome' => 'Banco Gerdau S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'cod_banco' => 612,
                'nome' => 'Banco Guanabara S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'cod_banco' => 63,
                'nome' => 'Banco Ibi S.A. Banco Múltiplo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'cod_banco' => 604,
                'nome' => 'Banco Industrial do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'cod_banco' => 320,
                'nome' => 'Banco Industrial e Comercial S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'cod_banco' => 653,
                'nome' => 'Banco Indusval S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'cod_banco' => 630,
                'nome' => 'Banco Intercap S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'cod_banco' => 249,
                'nome' => 'Banco Investcred Unibanco S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'cod_banco' => 48,
                'nome' => 'Banco Itaú BBA S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'cod_banco' => 652,
                'nome' => 'Banco Itaú Holding Financeira S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'cod_banco' => 341,
                'nome' => 'Banco Itaú S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'cod_banco' => NULL,
                'nome' => 'Banco Itaucred Financiamentos S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'cod_banco' => NULL,
                'nome' => 'Banco Itausaga S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'cod_banco' => 376,
                'nome' => 'Banco J. P. Morgan S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'cod_banco' => 74,
                'nome' => 'Banco J. Safra S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'cod_banco' => 757,
                'nome' => 'Banco KEB do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'cod_banco' => 600,
                'nome' => 'Banco Luso Brasileiro S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'cod_banco' => 392,
                'nome' => 'Banco Mercantil de São Paulo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'cod_banco' => 389,
                'nome' => 'Banco Mercantil do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'cod_banco' => 755,
                'nome' => 'Banco Merrill Lynch de Investimentos S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'cod_banco' => 151,
                'nome' => 'Banco Nossa Caixa S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'cod_banco' => 45,
                'nome' => 'Banco Opportunity S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'cod_banco' => 208,
                'nome' => 'Banco Pactual S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'cod_banco' => 623,
                'nome' => 'Banco Panamericano S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'cod_banco' => 611,
                'nome' => 'Banco Paulista S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'cod_banco' => 643,
                'nome' => 'Banco Pine S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'cod_banco' => 638,
                'nome' => 'Banco Prosper S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'cod_banco' => 747,
                'nome' => 'Banco Rabobank International Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'cod_banco' => 633,
                'nome' => 'Banco Rendimento S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'cod_banco' => 72,
                'nome' => 'Banco Rural Mais S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'cod_banco' => 453,
                'nome' => 'Banco Rural S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'cod_banco' => 422,
                'nome' => 'Banco Safra S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'cod_banco' => 353,
                'nome' => 'Banco Santander Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'cod_banco' => 8,
                'nome' => 'Banco Santander Meridional S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'cod_banco' => 351,
                'nome' => 'Banco Santander S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'cod_banco' => 250,
                'nome' => 'Banco Schahin S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'cod_banco' => 749,
                'nome' => 'Banco Simples S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'cod_banco' => 366,
                'nome' => 'Banco Société Générale Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'cod_banco' => 637,
                'nome' => 'Banco Sofisa S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'cod_banco' => 347,
                'nome' => 'Banco Sudameris Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'cod_banco' => 464,
                'nome' => 'Banco Sumitomo Mitsui Brasileiro S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'cod_banco' => 634,
                'nome' => 'Banco Triângulo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'cod_banco' => 247,
                'nome' => 'Banco UBS S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'cod_banco' => 116,
                'nome' => 'Banco Único S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'cod_banco' => 655,
                'nome' => 'Banco Votorantim S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'cod_banco' => 610,
                'nome' => 'Banco VR S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'cod_banco' => 370,
                'nome' => 'Banco WestLB do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'cod_banco' => 21,
                'nome' => 'BANESTES S.A. Banco do Estado do Espírito Santo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'cod_banco' => 719,
            'nome' => 'Banif-Banco Internacional do Funchal (Brasil)S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'cod_banco' => 479,
                'nome' => 'BankBoston Banco Múltiplo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'cod_banco' => 744,
                'nome' => 'BankBoston N.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'cod_banco' => NULL,
                'nome' => 'BB Banco Popular do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'cod_banco' => NULL,
                'nome' => 'BES Investimento do Brasil S.A.-Banco de Investimento',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'cod_banco' => 70,
                'nome' => 'BRB - Banco de Brasília S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'cod_banco' => 104,
                'nome' => 'Caixa Econômica Federal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'cod_banco' => 477,
                'nome' => 'Citibank N.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'cod_banco' => NULL,
                'nome' => 'Credicard Banco S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'cod_banco' => 487,
                'nome' => 'Deutsche Bank S.A. - Banco Alemão',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'cod_banco' => 751,
                'nome' => 'Dresdner Bank Brasil S.A. - Banco Múltiplo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'cod_banco' => 210,
                'nome' => 'Dresdner Bank Lateinamerika Aktiengesellschaft',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'cod_banco' => 62,
                'nome' => 'Hipercard Banco Múltiplo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'cod_banco' => 399,
                'nome' => 'HSBC Bank Brasil S.A. - Banco Múltiplo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'cod_banco' => 492,
                'nome' => 'ING Bank N.V.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'cod_banco' => 488,
                'nome' => 'JPMorgan Chase Bank',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'cod_banco' => 65,
                'nome' => 'Lemon Bank Banco Múltiplo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'cod_banco' => 409,
                'nome' => 'UNIBANCO - União de Bancos Brasileiros S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'cod_banco' => 230,
                'nome' => 'Unicard Banco Múltiplo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'cod_banco' => 654,
                'nome' => 'Banco A.J.Renner S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'cod_banco' => 213,
                'nome' => 'Banco Arbi S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'cod_banco' => 739,
                'nome' => 'Banco BGN S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'cod_banco' => 96,
                'nome' => 'Banco BM&F de Serviços de Liquidação e Custódia S.A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'cod_banco' => 218,
                'nome' => 'Banco Bonsucesso S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'cod_banco' => NULL,
                'nome' => 'Banco BRJ S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'cod_banco' => 44,
                'nome' => 'Banco BVA S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'cod_banco' => 412,
                'nome' => 'Banco Capital S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'cod_banco' => 266,
                'nome' => 'Banco Cédula S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'cod_banco' => 241,
                'nome' => 'Banco Clássico S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'cod_banco' => NULL,
                'nome' => 'Banco CNH Capital S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'cod_banco' => 753,
                'nome' => 'Banco Comercial Uruguai S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'cod_banco' => 75,
                'nome' => 'Banco CR2 S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'cod_banco' => 721,
                'nome' => 'Banco Credibel S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'cod_banco' => NULL,
                'nome' => 'Banco Daimlerchrysler S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'cod_banco' => 300,
                'nome' => 'Banco de La Nacion Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'cod_banco' => 495,
                'nome' => 'Banco de La Provincia de Buenos Aires',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'cod_banco' => 494,
                'nome' => 'Banco de La Republica Oriental del Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'cod_banco' => 35,
                'nome' => 'Banco do Estado do Ceará S.A. - BEC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'cod_banco' => 39,
                'nome' => 'Banco do Estado do Piauí S.A. - BEP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'cod_banco' => 743,
                'nome' => 'Banco Emblema S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'cod_banco' => 626,
                'nome' => 'Banco Ficsa S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'cod_banco' => NULL,
                'nome' => 'Banco Ford S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'cod_banco' => NULL,
                'nome' => 'Banco Honda S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'cod_banco' => NULL,
                'nome' => 'Banco IBM S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'cod_banco' => 217,
                'nome' => 'Banco John Deere S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'cod_banco' => 212,
                'nome' => 'Banco Matone S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'cod_banco' => 243,
                'nome' => 'Banco Máxima S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'cod_banco' => NULL,
                'nome' => 'Banco Maxinvest S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'cod_banco' => 746,
                'nome' => 'Banco Modal S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'cod_banco' => NULL,
                'nome' => 'Banco Moneo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'cod_banco' => 738,
                'nome' => 'Banco Morada S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'cod_banco' => 66,
                'nome' => 'Banco Morgan Stanley Dean Witter S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'cod_banco' => NULL,
                'nome' => 'Banco Ourinvest S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'cod_banco' => 613,
                'nome' => 'Banco Pecúnia S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'cod_banco' => 724,
                'nome' => 'Banco Porto Seguro S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'cod_banco' => 735,
                'nome' => 'Banco Pottencial S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'cod_banco' => NULL,
                'nome' => 'Banco PSA Finance Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'cod_banco' => 741,
                'nome' => 'Banco Ribeirão Preto S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'cod_banco' => NULL,
                'nome' => 'Banco Rodobens S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'cod_banco' => NULL,
                'nome' => 'Banco Toyota do Brasil S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'cod_banco' => NULL,
                'nome' => 'Banco Tricury S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'cod_banco' => NULL,
                'nome' => 'Banco Volkswagen S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'cod_banco' => NULL,
            'nome' => 'Banco Volvo (Brasil) S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'cod_banco' => NULL,
                'nome' => 'BPN Brasil Banco Mútiplo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'cod_banco' => 64,
                'nome' => 'Goldman Sachs do Brasil Banco Múltiplo S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'cod_banco' => 254,
                'nome' => 'Paraná Banco S.A.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}