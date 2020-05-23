<?php

use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //places
		//aki
		//1
		DB::table('places')->insert([
			'place_name' => 'Hiroshima',
			'place_category' => 'port',
			'province' => '1'
		]);	
		//2
		DB::table('places')->insert([
			'place_name' => 'Miyajima',
			'place_category' => 'port',
			'province' => '1'
		]);
		//3
		DB::table('places')->insert([
			'place_name' => 'Kure',
			'place_category' => 'port',
			'province' => '1'
		]);
		//4
		DB::table('places')->insert([
			'place_name' => 'Mihara',
			'place_category' => 'port',
			'province' => '1'
		]);
		//5
		DB::table('places')->insert([
			'place_name' => 'Takehara',
			'place_category' => 'port',
			'province' => '1'
		]);
		//awa
		//6
		DB::table('places')->insert([
			'place_name' => 'Tokushima',
			'place_category' => 'port',
			'province' => '2'
		]);
		//7
		DB::table('places')->insert([
			'place_name' => 'Komatsushima',
			'place_category' => 'port',
			'province' => '2'
		]);
		//8
		DB::table('places')->insert([
			'place_name' => 'Mima',
			'place_category' => '',
			'province' => '2'
		]);
		//awa
		//9
		DB::table('places')->insert([
			'place_name' => 'Tateyama',
			'place_category' => 'port',
			'province' => '3'
		]);	
		//awaji
		//10
		DB::table('places')->insert([
			'place_name' => 'Sumoto',
			'place_category' => 'port',
			'province' => '4'
		]);
		//bingo
		//11
		DB::table('places')->insert([
			'place_name' => 'Fukuyama',
			'place_category' => '',
			'province' => '5'
		]);
		//12
		DB::table('places')->insert([
			'place_name' => 'Fuchu',
			'place_category' => 'rural',
			'province' => '5'
		]);
		//bitchu
		//13
		DB::table('places')->insert([
			'place_name' => 'Kurashiki',
			'place_category' => 'port',
			'province' => '6'
		]);
		//14
		DB::table('places')->insert([
			'place_name' => 'Soja',
			'place_category' => 'rural',
			'province' => '6'
		]);
		//15
		DB::table('places')->insert([
			'place_name' => 'Asakuchi',
			'place_category' => 'rural',
			'province' => '6'
		]);
		//bizen
		//16
		DB::table('places')->insert([
			'place_name' => 'Okayama',
			'place_category' => 'port',
			'province' => '7'
		]);	
		//17
		DB::table('places')->insert([
			'place_name' => 'Setouchi',
			'place_category' => 'port',
			'province' => '7'
		]);	
		//bungo
		//18
		DB::table('places')->insert([
			'place_name' => 'Usuki',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//19
		DB::table('places')->insert([
			'place_name' => 'Funai',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//20
		DB::table('places')->insert([
			'place_name' => 'Taketa',
			'place_category' => 'castle',
			'province' => '8'
		]);	
		//21
		DB::table('places')->insert([
			'place_name' => 'Saiki',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//22
		DB::table('places')->insert([
			'place_name' => 'Kitsuki',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//23
		DB::table('places')->insert([
			'place_name' => 'Hiji',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//buzen
		//24
		DB::table('places')->insert([
			'place_name' => 'Nakatsu',
			'place_category' => 'port',
			'province' => '9'
		]);	
		//25
		DB::table('places')->insert([
			'place_name' => 'Kokura',
			'place_category' => 'port',
			'province' => '9'
		]);
		//chikugo
		//26
		DB::table('places')->insert([
			'place_name' => 'Kurume',
			'place_category' => 'castle',
			'province' => '10'
		]);	
		//27
		DB::table('places')->insert([
			'place_name' => 'Yanagawa',
			'place_category' => 'port',
			'province' => '10'
		]);	
		//chikuzen
		//28
		DB::table('places')->insert([
			'place_name' => 'Hakata',
			'place_category' => 'port',
			'province' => '11'
		]);	
		//29
		DB::table('places')->insert([
			'place_name' => 'Fukuoka',
			'place_category' => 'port',
			'province' => '11'
		]);
		//30
		DB::table('places')->insert([
			'place_name' => 'Dazaifu',
			'place_category' => 'rural',
			'province' => '11'
		]);
		//31
		DB::table('places')->insert([
			'place_name' => 'Akizuki',
			'place_category' => 'rural',
			'province' => '11'
		]);
		//dewa
		//32
		DB::table('places')->insert([
			'place_name' => 'Kubota',
			'place_category' => 'port',
			'province' => '12'
		]);	
		//33
		DB::table('places')->insert([
			'place_name' => 'Yamagata',
			'place_category' => 'castle',
			'province' => '12'
		]);	
		//34
		DB::table('places')->insert([
			'place_name' => 'Kaminoyama',
			'place_category' => 'castle',
			'province' => '12'
		]);	
		//35
		DB::table('places')->insert([
			'place_name' => 'Yonezawa',
			'place_category' => 'rural',
			'province' => '12'
		]);	
		//36
		DB::table('places')->insert([
			'place_name' => 'Yokote',
			'place_category' => 'castle',
			'province' => '12'
		]);	
		//37
		DB::table('places')->insert([
			'place_name' => 'Sakata',
			'place_category' => 'port',
			'province' => '12'
		]);	
		//echigo
		//38
		DB::table('places')->insert([
			'place_name' => 'Nagaoka',
			'place_category' => 'rural',
			'province' => '13'
		]);	
		//39
		DB::table('places')->insert([
			'place_name' => 'Shibata',
			'place_category' => 'castle',
			'province' => '13'
		]);	
		//40
		DB::table('places')->insert([
			'place_name' => 'Niigata',
			'place_category' => 'port',
			'province' => '13'
		]);	
		//41
		DB::table('places')->insert([
			'place_name' => 'Takata',
			'place_category' => 'castle',
			'province' => '13'
		]);	
		//echizen
		//42
		DB::table('places')->insert([
			'place_name' => 'Fukui',
			'place_category' => 'castle',
			'province' => '14'
		]); 
		//43
		DB::table('places')->insert([
			'place_name' => 'Sakai',
			'place_category' => 'port',
			'province' => '14'
		]); 
		//44
		DB::table('places')->insert([
			'place_name' => 'Maruoka',
			'place_category' => 'castle',
			'province' => '14'
		]); 
		//45
		DB::table('places')->insert([
			'place_name' => 'Maruoka',
			'place_category' => 'castle',
			'province' => '14'
		]); 
		//etchu
		//46
		DB::table('places')->insert([
			'place_name' => 'Toyama',
			'place_category' => 'castle',
			'province' => '15'
		]);	
		//47
		DB::table('places')->insert([
			'place_name' => 'Takaoka',
			'place_category' => 'rural',
			'province' => '15'
		]);	
		//harima
		//48
		DB::table('places')->insert([
			'place_name' => 'Himeji',
			'place_category' => 'castle',
			'province' => '16'
		]);	
		//49
		DB::table('places')->insert([
			'place_name' => 'Kakogawa',
			'place_category' => 'rural',
			'province' => '16'
		]);	
		//50
		DB::table('places')->insert([
			'place_name' => 'Akashi',
			'place_category' => 'port',
			'province' => '16'
		]);	
		//51
		DB::table('places')->insert([
			'place_name' => 'Ako',
			'place_category' => 'port',
			'province' => '16'
		]);	
		//hida
		//52
		DB::table('places')->insert([
			'place_name' => 'Takayama',
			'place_category' => 'rural',
			'province' => '17'
		]);	
		//higo
		//53
		DB::table('places')->insert([
			'place_name' => 'Kumamoto',
			'place_category' => 'castle',
			'province' => '18'
		]);	
		//54
		DB::table('places')->insert([
			'place_name' => 'Uto',
			'place_category' => 'castle',
			'province' => '18'
		]);	
		//55
		DB::table('places')->insert([
			'place_name' => 'Yatsushiro',
			'place_category' => 'port',
			'province' => '18'
		]);	
		//56
		DB::table('places')->insert([
			'place_name' => 'Sashiki',
			'place_category' => 'port',
			'province' => '18'
		]);	
		//57
		DB::table('places')->insert([
			'place_name' => 'Hitoyoshi',
			'place_category' => 'castle',
			'province' => '18'
		]);	
		//hitachi
		//58
		DB::table('places')->insert([
			'place_name' => 'Mito',
			'place_category' => 'castle',
			'province' => '19'
		]);	
		//59
		DB::table('places')->insert([
			'place_name' => 'Kasama',
			'place_category' => 'castle',
			'province' => '19'
		]);	
		//60
		DB::table('places')->insert([
			'place_name' => 'Tsuchiura',
			'place_category' => 'castle',
			'province' => '19'
		]);	
		//61
		DB::table('places')->insert([
			'place_name' => 'Kashima',
			'place_category' => 'port',
			'province' => '19'
		]);	
		//hizen
		//62
		DB::table('places')->insert([
			'place_name' => 'Karatsu',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//63
		DB::table('places')->insert([
			'place_name' => 'Saga',
			'place_category' => 'castle',
			'province' => '20'
		]);	
		//64
		DB::table('places')->insert([
			'place_name' => 'Kashima',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//65
		DB::table('places')->insert([
			'place_name' => 'Hirado',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//66
		DB::table('places')->insert([
			'place_name' => 'Omura',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//67
		DB::table('places')->insert([
			'place_name' => 'Shimabara',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//68
		DB::table('places')->insert([
			'place_name' => 'Nagasaki',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//69
		DB::table('places')->insert([
			'place_name' => 'Nagoya',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//hoki
		//70
		DB::table('places')->insert([
			'place_name' => 'Kurayoshi',
			'place_category' => 'rural',
			'province' => '21'
		]);	
		//hyuga
		//71
		DB::table('places')->insert([
			'place_name' => 'Nobeoka',
			'place_category' => 'port',
			'province' => '22'
		]);	
		//72
		DB::table('places')->insert([
			'place_name' => 'Aya',
			'place_category' => 'castle',
			'province' => '22'
		]);	
		//73
		DB::table('places')->insert([
			'place_name' => 'Obi',
			'place_category' => 'castle',
			'province' => '22'
		]);	
		//74
		DB::table('places')->insert([
			'place_name' => 'Miyazaki',
			'place_category' => 'port',
			'province' => '22'
		]);	
		//iga
		//75
		DB::table('places')->insert([
			'place_name' => 'Ueno',
			'place_category' => 'castle',
			'province' => '23'
		]);	
		//76
		DB::table('places')->insert([
			'place_name' => 'Nabari',
			'place_category' => 'post',
			'province' => '23'
		]);	
		//inaba
		//77
		DB::table('places')->insert([
			'place_name' => 'Tottori',
			'place_category' => 'port',
			'province' => '24'
		]);	
		//ise
		//78
		DB::table('places')->insert([
			'place_name' => 'Kameyama',
			'place_category' => 'castle',
			'province' => '25'
		]);	
		//79
		DB::table('places')->insert([
			'place_name' => 'Tsu',
			'place_category' => 'port',
			'province' => '25'
		]);	
		//80
		DB::table('places')->insert([
			'place_name' => 'Matsusaka',
			'place_category' => 'port',
			'province' => '25'
		]);	
		//81
		DB::table('places')->insert([
			'place_name' => 'Suzuka',
			'place_category' => 'port',
			'province' => '25'
		]);	
		//82
		DB::table('places')->insert([
			'place_name' => 'Kuwana',
			'place_category' => 'port',
			'province' => '25'
		]);	
		//83
		DB::table('places')->insert([
			'place_name' => 'Yokkaichi',
			'place_category' => 'port',
			'province' => '25'
		]);	
		//84
		DB::table('places')->insert([
			'place_name' => 'Yamada',
			'place_category' => 'port',
			'province' => '25'
		]);	
		//iwami
		//85
		DB::table('places')->insert([
			'place_name' => 'Hamada',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//86
		DB::table('places')->insert([
			'place_name' => 'Masuda',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//iyo
		//87
		DB::table('places')->insert([
			'place_name' => 'Matsuyama',
			'place_category' => 'port',
			'province' => '27'
		]);	
		//88
		DB::table('places')->insert([
			'place_name' => 'Imabari',
			'place_category' => 'port',
			'province' => '27'
		]);	
		//izu
		//89
		DB::table('places')->insert([
			'place_name' => 'Izinokuni',
			'place_category' => 'rural',
			'province' => '28'
		]);	
		//90
		DB::table('places')->insert([
			'place_name' => 'Shimoda',
			'place_category' => 'port',
			'province' => '28'
		]);	
		//izumi
		//91
		DB::table('places')->insert([
			'place_name' => 'Sakai',
			'place_category' => 'port',
			'province' => '29'
		]);	
		//92
		DB::table('places')->insert([
			'place_name' => 'Kishiwada',
			'place_category' => 'port',
			'province' => '29'
		]);	
		//izumo
		//93
		DB::table('places')->insert([
			'place_name' => 'Matsue',
			'place_category' => 'castle',
			'province' => '30'
		]);	
		//94
		DB::table('places')->insert([
			'place_name' => 'Yonago',
			'place_category' => 'castle',
			'province' => '30'
		]);	
		//95
		DB::table('places')->insert([
			'place_name' => 'Toda',
			'place_category' => 'castle',
			'province' => '30'
		]);	
		//kaga
		//96
		DB::table('places')->insert([
			'place_name' => 'Komatsu',
			'place_category' => 'port',
			'province' => '31'
		]);	
		//97
		DB::table('places')->insert([
			'place_name' => 'Kanazawa',
			'place_category' => 'castle',
			'province' => '31'
		]);	
		//98
		DB::table('places')->insert([
			'place_name' => 'Daishoji',
			'place_category' => 'port',
			'province' => '31'
		]);	
		//kai
		//99
		DB::table('places')->insert([
			'place_name' => 'Kofu',
			'place_category' => 'castle',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);		
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//91
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//92
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//93
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//94
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//95
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//96
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//97
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//98
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//99
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//100
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);			
		//101
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//102
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//103
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//104
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//105
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//106
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//107
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//108
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//109
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//110
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//111
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//112
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//113
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//114
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//115
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//116
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//117
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//118
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//119
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//120
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//121
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//122
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//123
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//124
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//125
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//126
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//127
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//128
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//129
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//130
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//131
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//132
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//133
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//134
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//135
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//136
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//137
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//138
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//139
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//140
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//141
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//142
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//143
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//144
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//145
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//146
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//147
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//148
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//149
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//150
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//151
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//152
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//153
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//154
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//155
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//156
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//157
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//158
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//159
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//160
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//161
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//162
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//163
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//164
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//165
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//166
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//167
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//168
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//169
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//170
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//171
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//172
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//173
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//174
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//175
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//176
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//177
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//178
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//179
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//180
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);		
		//181
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//182
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//183
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//184
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//185
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//186
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//187
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//188
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//189
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//190
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//191
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//192
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//193
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//194
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//195
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//196
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//197
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//198
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//199
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);	
		//200
		DB::table('places')->insert([
			'place_name' => '',
			'place_category' => '',
			'province' => ''
		]);			
		
    }
}
