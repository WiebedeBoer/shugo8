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
		//16
		DB::table('places')->insert([
			'place_name' => 'Matsuyama',
			'place_category' => 'castle',
			'province' => '6'
		]);
		//bizen
		//17
		DB::table('places')->insert([
			'place_name' => 'Okayama',
			'place_category' => 'port',
			'province' => '7'
		]);	
		//18
		DB::table('places')->insert([
			'place_name' => 'Setouchi',
			'place_category' => 'port',
			'province' => '7'
		]);	
		//bungo
		//19
		DB::table('places')->insert([
			'place_name' => 'Usuki',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//20
		DB::table('places')->insert([
			'place_name' => 'Funai',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//21
		DB::table('places')->insert([
			'place_name' => 'Taketa',
			'place_category' => 'castle',
			'province' => '8'
		]);	
		//22
		DB::table('places')->insert([
			'place_name' => 'Saiki',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//23
		DB::table('places')->insert([
			'place_name' => 'Kitsuki',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//24
		DB::table('places')->insert([
			'place_name' => 'Hiji',
			'place_category' => 'port',
			'province' => '8'
		]);	
		//buzen
		//25
		DB::table('places')->insert([
			'place_name' => 'Nakatsu',
			'place_category' => 'port',
			'province' => '9'
		]);	
		//26
		DB::table('places')->insert([
			'place_name' => 'Kokura',
			'place_category' => 'port',
			'province' => '9'
		]);
		//chikugo
		//27
		DB::table('places')->insert([
			'place_name' => 'Kurume',
			'place_category' => 'castle',
			'province' => '10'
		]);	
		//28
		DB::table('places')->insert([
			'place_name' => 'Yanagawa',
			'place_category' => 'port',
			'province' => '10'
		]);	
		//chikuzen
		//29
		DB::table('places')->insert([
			'place_name' => 'Hakata',
			'place_category' => 'port',
			'province' => '11'
		]);	
		//30
		DB::table('places')->insert([
			'place_name' => 'Fukuoka',
			'place_category' => 'port',
			'province' => '11'
		]);
		//31
		DB::table('places')->insert([
			'place_name' => 'Dazaifu',
			'place_category' => 'rural',
			'province' => '11'
		]);
		//32
		DB::table('places')->insert([
			'place_name' => 'Akizuki',
			'place_category' => 'rural',
			'province' => '11'
		]);
		//dewa
		//33
		DB::table('places')->insert([
			'place_name' => 'Kubota',
			'place_category' => 'port',
			'province' => '12'
		]);	
		//34
		DB::table('places')->insert([
			'place_name' => 'Yamagata',
			'place_category' => 'castle',
			'province' => '12'
		]);	
		//35
		DB::table('places')->insert([
			'place_name' => 'Kaminoyama',
			'place_category' => 'castle',
			'province' => '12'
		]);	
		//36
		DB::table('places')->insert([
			'place_name' => 'Yonezawa',
			'place_category' => 'rural',
			'province' => '12'
		]);	
		//37
		DB::table('places')->insert([
			'place_name' => 'Yokote',
			'place_category' => 'castle',
			'province' => '12'
		]);	
		//38
		DB::table('places')->insert([
			'place_name' => 'Sakata',
			'place_category' => 'port',
			'province' => '12'
		]);	
		//echigo
		//39
		DB::table('places')->insert([
			'place_name' => 'Nagaoka',
			'place_category' => 'rural',
			'province' => '13'
		]);	
		//40
		DB::table('places')->insert([
			'place_name' => 'Shibata',
			'place_category' => 'castle',
			'province' => '13'
		]);	
		//41
		DB::table('places')->insert([
			'place_name' => 'Niigata',
			'place_category' => 'port',
			'province' => '13'
		]);	
		//42
		DB::table('places')->insert([
			'place_name' => 'Takata',
			'place_category' => 'castle',
			'province' => '13'
		]);	
		//echizen
		//43
		DB::table('places')->insert([
			'place_name' => 'Fukui',
			'place_category' => 'castle',
			'province' => '14'
		]); 
		//44
		DB::table('places')->insert([
			'place_name' => 'Sakai',
			'place_category' => 'port',
			'province' => '14'
		]); 
		//45
		DB::table('places')->insert([
			'place_name' => 'Maruoka',
			'place_category' => 'castle',
			'province' => '14'
		]); 
		//46
		DB::table('places')->insert([
			'place_name' => 'Ono',
			'place_category' => 'castle',
			'province' => '14'
		]); 
		//etchu
		//47
		DB::table('places')->insert([
			'place_name' => 'Toyama',
			'place_category' => 'castle',
			'province' => '15'
		]);	
		//48
		DB::table('places')->insert([
			'place_name' => 'Takaoka',
			'place_category' => 'rural',
			'province' => '15'
		]);	
		//harima
		//49
		DB::table('places')->insert([
			'place_name' => 'Himeji',
			'place_category' => 'castle',
			'province' => '16'
		]);	
		//50
		DB::table('places')->insert([
			'place_name' => 'Kakogawa',
			'place_category' => 'rural',
			'province' => '16'
		]);	
		//51
		DB::table('places')->insert([
			'place_name' => 'Akashi',
			'place_category' => 'port',
			'province' => '16'
		]);	
		//52
		DB::table('places')->insert([
			'place_name' => 'Ako',
			'place_category' => 'port',
			'province' => '16'
		]);	
		//hida
		//53
		DB::table('places')->insert([
			'place_name' => 'Takayama',
			'place_category' => 'rural',
			'province' => '17'
		]);	
		//higo
		//54
		DB::table('places')->insert([
			'place_name' => 'Kumamoto',
			'place_category' => 'castle',
			'province' => '18'
		]);	
		//55
		DB::table('places')->insert([
			'place_name' => 'Uto',
			'place_category' => 'castle',
			'province' => '18'
		]);	
		//56
		DB::table('places')->insert([
			'place_name' => 'Yatsushiro',
			'place_category' => 'port',
			'province' => '18'
		]);	
		//57
		DB::table('places')->insert([
			'place_name' => 'Sashiki',
			'place_category' => 'port',
			'province' => '18'
		]);	
		//58
		DB::table('places')->insert([
			'place_name' => 'Hitoyoshi',
			'place_category' => 'castle',
			'province' => '18'
		]);	
		//59
		DB::table('places')->insert([
			'place_name' => 'Amakusa',
			'place_category' => 'port',
			'province' => '18'
		]);	
		//60
		DB::table('places')->insert([
			'place_name' => 'Aso',
			'place_category' => 'castle',
			'province' => '18'
		]);	
		//61
		DB::table('places')->insert([
			'place_name' => 'Kikuchi',
			'place_category' => 'port',
			'province' => '18'
		]);	
		//hitachi
		//62
		DB::table('places')->insert([
			'place_name' => 'Mito',
			'place_category' => 'castle',
			'province' => '19'
		]);	
		//63
		DB::table('places')->insert([
			'place_name' => 'Kasama',
			'place_category' => 'castle',
			'province' => '19'
		]);	
		//64
		DB::table('places')->insert([
			'place_name' => 'Tsuchiura',
			'place_category' => 'castle',
			'province' => '19'
		]);	
		//65
		DB::table('places')->insert([
			'place_name' => 'Kashima',
			'place_category' => 'port',
			'province' => '19'
		]);	
		//hizen
		//66
		DB::table('places')->insert([
			'place_name' => 'Karatsu',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//67
		DB::table('places')->insert([
			'place_name' => 'Saga',
			'place_category' => 'castle',
			'province' => '20'
		]);	
		//68
		DB::table('places')->insert([
			'place_name' => 'Kashima',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//69
		DB::table('places')->insert([
			'place_name' => 'Hirado',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//70
		DB::table('places')->insert([
			'place_name' => 'Matsuura',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//71
		DB::table('places')->insert([
			'place_name' => 'Omura',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//72
		DB::table('places')->insert([
			'place_name' => 'Shimabara',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//73
		DB::table('places')->insert([
			'place_name' => 'Nagasaki',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//74
		DB::table('places')->insert([
			'place_name' => 'Nagoya',
			'place_category' => 'port',
			'province' => '20'
		]);	
		//hoki
		//75
		DB::table('places')->insert([
			'place_name' => 'Kurayoshi',
			'place_category' => 'rural',
			'province' => '21'
		]);	
		//hyuga
		//76
		DB::table('places')->insert([
			'place_name' => 'Nobeoka',
			'place_category' => 'port',
			'province' => '22'
		]);	
		//77
		DB::table('places')->insert([
			'place_name' => 'Aya',
			'place_category' => 'castle',
			'province' => '22'
		]);	
		//78
		DB::table('places')->insert([
			'place_name' => 'Obi',
			'place_category' => 'castle',
			'province' => '22'
		]);	
		//79
		DB::table('places')->insert([
			'place_name' => 'Miyazaki',
			'place_category' => 'port',
			'province' => '22'
		]);	
		//iga
		//80
		DB::table('places')->insert([
			'place_name' => 'Ueno',
			'place_category' => 'castle',
			'province' => '23'
		]);	
		//81
		DB::table('places')->insert([
			'place_name' => 'Nabari',
			'place_category' => 'post',
			'province' => '23'
		]);	
		//iki
		//82
		DB::table('places')->insert([
			'place_name' => 'Iki',
			'place_category' => 'port',
			'province' => '24'
		]);	
		//inaba
		//83
		DB::table('places')->insert([
			'place_name' => 'Tottori',
			'place_category' => 'port',
			'province' => '25'
		]);	
		//ise
		//84
		DB::table('places')->insert([
			'place_name' => 'Kameyama',
			'place_category' => 'castle',
			'province' => '26'
		]);	
		//85
		DB::table('places')->insert([
			'place_name' => 'Tsu',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//86
		DB::table('places')->insert([
			'place_name' => 'Matsusaka',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//87
		DB::table('places')->insert([
			'place_name' => 'Suzuka',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//88
		DB::table('places')->insert([
			'place_name' => 'Kuwana',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//89
		DB::table('places')->insert([
			'place_name' => 'Yokkaichi',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//90
		DB::table('places')->insert([
			'place_name' => 'Yamada',
			'place_category' => 'port',
			'province' => '26'
		]);	
		//iwami
		//91
		DB::table('places')->insert([
			'place_name' => 'Hamada',
			'place_category' => 'port',
			'province' => '27'
		]);	
		//92
		DB::table('places')->insert([
			'place_name' => 'Masuda',
			'place_category' => 'port',
			'province' => '27'
		]);	
		//iyo
		//93
		DB::table('places')->insert([
			'place_name' => 'Matsuyama',
			'place_category' => 'port',
			'province' => '28'
		]);	
		//94
		DB::table('places')->insert([
			'place_name' => 'Imabari',
			'place_category' => 'port',
			'province' => '28'
		]);	
		//95
		DB::table('places')->insert([
			'place_name' => 'Yawatahama',
			'place_category' => 'port',
			'province' => '28'
		]);	
		//96
		DB::table('places')->insert([
			'place_name' => 'Ozu',
			'place_category' => 'castle',
			'province' => '28'
		]);	
		//97
		DB::table('places')->insert([
			'place_name' => 'Uwajima',
			'place_category' => 'port',
			'province' => '28'
		]);	
		//izu
		//98
		DB::table('places')->insert([
			'place_name' => 'Izinokuni',
			'place_category' => 'rural',
			'province' => '29'
		]);	
		//99
		DB::table('places')->insert([
			'place_name' => 'Shimoda',
			'place_category' => 'port',
			'province' => '29'
		]);	
		//100
		DB::table('places')->insert([
			'place_name' => 'Mishima',
			'place_category' => 'post',
			'province' => '29'
		]);	
		//izumi
		//101
		DB::table('places')->insert([
			'place_name' => 'Sakai',
			'place_category' => 'port',
			'province' => '30'
		]);	
		//102
		DB::table('places')->insert([
			'place_name' => 'Kishiwada',
			'place_category' => 'port',
			'province' => '30'
		]);	
		//izumo
		//103
		DB::table('places')->insert([
			'place_name' => 'Matsue',
			'place_category' => 'castle',
			'province' => '31'
		]);	
		//104
		DB::table('places')->insert([
			'place_name' => 'Yonago',
			'place_category' => 'castle',
			'province' => '31'
		]);	
		//105
		DB::table('places')->insert([
			'place_name' => 'Toda',
			'place_category' => 'castle',
			'province' => '31'
		]);	
		//kaga
		//106
		DB::table('places')->insert([
			'place_name' => 'Komatsu',
			'place_category' => 'port',
			'province' => '32'
		]);	
		//107
		DB::table('places')->insert([
			'place_name' => 'Kanazawa',
			'place_category' => 'castle',
			'province' => '32'
		]);	
		//108
		DB::table('places')->insert([
			'place_name' => 'Daishoji',
			'place_category' => 'port',
			'province' => '32'
		]);	
		//kai
		//109
		DB::table('places')->insert([
			'place_name' => 'Kofu',
			'place_category' => 'castle',
			'province' => '33'
		]);	
		//110
		DB::table('places')->insert([
			'place_name' => 'Fuefuki',
			'place_category' => 'rural',
			'province' => '33'
		]);	
		//111
		DB::table('places')->insert([
			'place_name' => 'Yakata',
			'place_category' => 'castle',
			'province' => '33'
		]);	
		//kawachi
		//112
		DB::table('places')->insert([
			'place_name' => 'Hirakata',
			'place_category' => 'rural',
			'province' => '34'
		]);	
		//113
		DB::table('places')->insert([
			'place_name' => 'Neyagawa',
			'place_category' => 'rural',
			'province' => '34'
		]);	
		//kazusa
		//114
		DB::table('places')->insert([
			'place_name' => 'Kururi',
			'place_category' => 'castle',
			'province' => '35'
		]);	
		//115
		DB::table('places')->insert([
			'place_name' => 'Otaki',
			'place_category' => 'castle',
			'province' => '35'
		]);	
		//kii	
		//116
		DB::table('places')->insert([
			'place_name' => 'Wakayama',
			'place_category' => 'port',
			'province' => '36'
		]);	
		//117
		DB::table('places')->insert([
			'place_name' => 'Kumano',
			'place_category' => 'shrine',
			'province' => '36'
		]);	
		//118
		DB::table('places')->insert([
			'place_name' => 'Kongobuji',
			'place_category' => 'temple',
			'province' => '36'
		]);	
		//kozuke
		//119
		DB::table('places')->insert([
			'place_name' => 'Takasaki',
			'place_category' => 'castle',
			'province' => '37'
		]);	
		//120
		DB::table('places')->insert([
			'place_name' => 'Numata',
			'place_category' => 'castle',
			'province' => '37'
		]);	
		//121
		DB::table('places')->insert([
			'place_name' => 'Ota',
			'place_category' => 'castle',
			'province' => '37'
		]);	
		//122
		DB::table('places')->insert([
			'place_name' => 'Tatebayashi',
			'place_category' => 'castle',
			'province' => '37'
		]);	
		//mikawa
		//123
		DB::table('places')->insert([
			'place_name' => 'Okasaki',
			'place_category' => 'castle',
			'province' => '38'
		]);	
		//124
		DB::table('places')->insert([
			'place_name' => 'Yoshida',
			'place_category' => 'port',
			'province' => '38'
		]);	
		//125
		DB::table('places')->insert([
			'place_name' => 'Tahara',
			'place_category' => 'port',
			'province' => '38'
		]);	
		//126
		DB::table('places')->insert([
			'place_name' => 'Koromo',
			'place_category' => 'castle',
			'province' => '38'
		]);	
		//mimasaka
		//127
		DB::table('places')->insert([
			'place_name' => 'Tsuyama',
			'place_category' => 'castle',
			'province' => '39'
		]);	
		//mino
		//128
		DB::table('places')->insert([
			'place_name' => 'Gifu',
			'place_category' => 'castle',
			'province' => '40'
		]);		
		//129
		DB::table('places')->insert([
			'place_name' => 'Inuyama',
			'place_category' => 'castle',
			'province' => '40'
		]);	
		//130
		DB::table('places')->insert([
			'place_name' => 'Ogaki',
			'place_category' => 'rural',
			'province' => '40'
		]);	
		//131
		DB::table('places')->insert([
			'place_name' => 'Nakatsugawa',
			'place_category' => 'post',
			'province' => '40'
		]);
		//132
		DB::table('places')->insert([
			'place_name' => 'Mizuho',
			'place_category' => 'post',
			'province' => '40'
		]);	
		//133
		DB::table('places')->insert([
			'place_name' => 'Ena',
			'place_category' => 'post',
			'province' => '40'
		]);		
		//musashi
		//134
		DB::table('places')->insert([
			'place_name' => 'Edo',
			'place_category' => 'port',
			'province' => '41'
		]);	
		//135
		DB::table('places')->insert([
			'place_name' => 'Kawagoe',
			'place_category' => 'castle',
			'province' => '41'
		]);	
		//136
		DB::table('places')->insert([
			'place_name' => 'Kawaguchi',
			'place_category' => 'post',
			'province' => '41'
		]);	
		//137
		DB::table('places')->insert([
			'place_name' => 'Hachioji',
			'place_category' => 'post',
			'province' => '41'
		]);	
		//138
		DB::table('places')->insert([
			'place_name' => 'Kawasaki',
			'place_category' => 'post',
			'province' => '41'
		]);	
		//139
		DB::table('places')->insert([
			'place_name' => 'Yokohama',
			'place_category' => 'post',
			'province' => '41'
		]);	
		//mutsu
		//140
		DB::table('places')->insert([
			'place_name' => 'Aomori',
			'place_category' => 'port',
			'province' => '42'
		]);	
		//141
		DB::table('places')->insert([
			'place_name' => 'Hirosaki',
			'place_category' => 'castle',
			'province' => '42'
		]);	
		//142
		DB::table('places')->insert([
			'place_name' => 'Morioka',
			'place_category' => 'castle',
			'province' => '42'
		]);	
		//143
		DB::table('places')->insert([
			'place_name' => 'Sendai',
			'place_category' => 'port',
			'province' => '42'
		]);	
		//144
		DB::table('places')->insert([
			'place_name' => 'Shiroishi',
			'place_category' => 'castle',
			'province' => '42'
		]);	
		//145
		DB::table('places')->insert([
			'place_name' => 'Nihonmatsu',
			'place_category' => 'castle',
			'province' => '42'
		]);	
		//146
		DB::table('places')->insert([
			'place_name' => 'Wakamatsu',
			'place_category' => 'castle',
			'province' => '42'
		]);	
		//147
		DB::table('places')->insert([
			'place_name' => 'Shirakawa',
			'place_category' => 'castle',
			'province' => '42'
		]);	
		//148
		DB::table('places')->insert([
			'place_name' => 'Fukushima',
			'place_category' => 'rural',
			'province' => '42'
		]);	
		//149
		DB::table('places')->insert([
			'place_name' => 'Koriyama',
			'place_category' => 'rural',
			'province' => '42'
		]);	
		//nagato
		//150
		DB::table('places')->insert([
			'place_name' => 'Tsuwano',
			'place_category' => 'castle',
			'province' => '43'
		]);	
		//151
		DB::table('places')->insert([
			'place_name' => 'Hagi',
			'place_category' => 'port',
			'province' => '43'
		]);	
		//152
		DB::table('places')->insert([
			'place_name' => 'Shimonoseki',
			'place_category' => 'port',
			'province' => '43'
		]);
		//noto
		//153
		DB::table('places')->insert([
			'place_name' => 'Nanao',
			'place_category' => 'port',
			'province' => '44'
		]);	
		//154
		DB::table('places')->insert([
			'place_name' => 'Wajima',
			'place_category' => 'port',
			'province' => '44'
		]);	
		//oki
		//155
		DB::table('places')->insert([
			'place_name' => 'Okinoshima',
			'place_category' => 'port',
			'province' => '45'
		]);	
		//omi
		//156
		DB::table('places')->insert([
			'place_name' => 'Nagahama',
			'place_category' => 'castle',
			'province' => '46'
		]);	
		//157
		DB::table('places')->insert([
			'place_name' => 'Hikone',
			'place_category' => 'castle',
			'province' => '46'
		]);	
		//158
		DB::table('places')->insert([
			'place_name' => 'Kannonji',
			'place_category' => 'castle',
			'province' => '46'
		]);	
		//159
		DB::table('places')->insert([
			'place_name' => 'Azuchi',
			'place_category' => 'castle',
			'province' => '46'
		]);	
		//160
		DB::table('places')->insert([
			'place_name' => 'Koka',
			'place_category' => 'castle',
			'province' => '46'
		]);	
		//161
		DB::table('places')->insert([
			'place_name' => 'Otsu',
			'place_category' => 'castle',
			'province' => '46'
		]);	
		//162
		DB::table('places')->insert([
			'place_name' => 'Enryakuji',
			'place_category' => 'temple',
			'province' => '46'
		]); 
		//osumi
		//163
		DB::table('places')->insert([
			'place_name' => 'Kirishima',
			'place_category' => 'port',
			'province' => '47'
		]);	
		//owari
		//164
		DB::table('places')->insert([
			'place_name' => 'Nagoya',
			'place_category' => 'port',
			'province' => '48'
		]);	
		//165
		DB::table('places')->insert([
			'place_name' => 'Kiyosu',
			'place_category' => 'castle',
			'province' => '48'
		]);		
		//166
		DB::table('places')->insert([
			'place_name' => 'Inazawa',
			'place_category' => 'post',
			'province' => '48'
		]);	
		//167
		DB::table('places')->insert([
			'place_name' => 'Iwakura',
			'place_category' => 'rural',
			'province' => '48'
		]);	
		//168
		DB::table('places')->insert([
			'place_name' => 'Seto',
			'place_category' => 'rural',
			'province' => '48'
		]);	
		//sado
		//169
		DB::table('places')->insert([
			'place_name' => 'Shiritsu',
			'place_category' => 'port',
			'province' => '49'
		]);	
		//sagami
		//170
		DB::table('places')->insert([
			'place_name' => 'Odawara',
			'place_category' => 'port',
			'province' => '50'
		]);	
		//171
		DB::table('places')->insert([
			'place_name' => 'Hakone',
			'place_category' => 'rural',
			'province' => '50'
		]);	
		//172
		DB::table('places')->insert([
			'place_name' => 'Kamakura',
			'place_category' => 'temple',
			'province' => '50'
		]);	
		//sanuki
		//173
		DB::table('places')->insert([
			'place_name' => 'Takamatsu',
			'place_category' => 'port',
			'province' => '51'
		]);	
		//174
		DB::table('places')->insert([
			'place_name' => 'Marugame',
			'place_category' => 'port',
			'province' => '51'
		]);	
		//175
		DB::table('places')->insert([
			'place_name' => 'Kanonji',
			'place_category' => 'temple',
			'province' => '51'
		]);	
		//satsuma
		//176
		DB::table('places')->insert([
			'place_name' => 'Kagoshima',
			'place_category' => 'port',
			'province' => '52'
		]);	
		//177
		DB::table('places')->insert([
			'place_name' => 'Chiran',
			'place_category' => 'castle',
			'province' => '52'
		]);	
		//settsu
		//178
		DB::table('places')->insert([
			'place_name' => 'Osaka',
			'place_category' => 'port',
			'province' => '53'
		]);	
		//179
		DB::table('places')->insert([
			'place_name' => 'Amagasaki',
			'place_category' => 'rural',
			'province' => '53'
		]);	
		//shima
		//180
		DB::table('places')->insert([
			'place_name' => 'Toba',
			'place_category' => 'port',
			'province' => '54'
		]);	
		//shimousa
		//181
		DB::table('places')->insert([
			'place_name' => 'Sakura',
			'place_category' => 'castle',
			'province' => '55'
		]);	
		//182
		DB::table('places')->insert([
			'place_name' => 'Chiba',
			'place_category' => 'port',
			'province' => '55'
		]);	
		//183
		DB::table('places')->insert([
			'place_name' => 'Sakasai',
			'place_category' => 'castle',
			'province' => '55'
		]);	
		//184
		DB::table('places')->insert([
			'place_name' => 'Sakainehara',
			'place_category' => 'rural',
			'province' => '55'
		]);	
		//shimotsuke
		//185
		DB::table('places')->insert([
			'place_name' => 'Utsunomiya',
			'place_category' => 'castle',
			'province' => '56'
		]);	
		//186
		DB::table('places')->insert([
			'place_name' => 'Nikko',
			'place_category' => 'temple',
			'province' => '56'
		]);	
		//187
		DB::table('places')->insert([
			'place_name' => 'Ashikaga',
			'place_category' => 'rural',
			'province' => '56'
		]);	
		//shinano
		//188
		DB::table('places')->insert([
			'place_name' => 'Komoro',
			'place_category' => 'castle',
			'province' => '57'
		]);	
		//189
		DB::table('places')->insert([
			'place_name' => 'Ueda',
			'place_category' => 'castle',
			'province' => '57'
		]);	
		//190
		DB::table('places')->insert([
			'place_name' => 'Matsushiro',
			'place_category' => 'castle',
			'province' => '57'
		]);	
		//191
		DB::table('places')->insert([
			'place_name' => 'Matsumoto',
			'place_category' => 'castle',
			'province' => '57'
		]);		
		//192
		DB::table('places')->insert([
			'place_name' => 'Takashima',
			'place_category' => 'castle',
			'province' => '57'
		]);	
		//193
		DB::table('places')->insert([
			'place_name' => 'Takato',
			'place_category' => 'castle',
			'province' => '57'
		]);	
		//194
		DB::table('places')->insert([
			'place_name' => 'Iida',
			'place_category' => 'post',
			'province' => '57'
		]);	
		
		//195
		DB::table('places')->insert([
			'place_name' => 'Nagano',
			'place_category' => 'temple',
			'province' => '57'
		]);	
		//196
		DB::table('places')->insert([
			'place_name' => 'Nakano',
			'place_category' => 'rural',
			'province' => '57'
		]);			
		//197
		DB::table('places')->insert([
			'place_name' => 'Iiyama',
			'place_category' => 'rural',
			'province' => '57'
		]);			
		//suo
		//198
		DB::table('places')->insert([
			'place_name' => 'Yamaguchi',
			'place_category' => 'rural',
			'province' => '58'
		]);	
		//199
		DB::table('places')->insert([
			'place_name' => 'Hofu',
			'place_category' => 'port',
			'province' => '58'
		]);	
		//200
		DB::table('places')->insert([
			'place_name' => 'Iwakuni',
			'place_category' => 'port',
			'province' => '58'
		]);	
		//suruga
		//201
		DB::table('places')->insert([
			'place_name' => 'Shizuoka',
			'place_category' => 'port',
			'province' => '59'
		]);	
		//202
		DB::table('places')->insert([
			'place_name' => 'Yoshiawara',
			'place_category' => 'post',
			'province' => '59'
		]);	
		//tajima
		//203
		DB::table('places')->insert([
			'place_name' => 'Izushi',
			'place_category' => 'castle',
			'province' => '60'
		]);	
		//204
		DB::table('places')->insert([
			'place_name' => 'Kinosaki',
			'place_category' => 'rural',
			'province' => '60'
		]);	
		//tamba
		//205
		DB::table('places')->insert([
			'place_name' => 'Fukuchiyama',
			'place_category' => 'castle',
			'province' => '61'
		]);	
		//206
		DB::table('places')->insert([
			'place_name' => 'Sasayama',
			'place_category' => 'castle',
			'province' => '61'
		]);	
		//207
		DB::table('places')->insert([
			'place_name' => 'Kameyama',
			'place_category' => 'castle',
			'province' => '61'
		]);
		//tanegashima
		//208
		DB::table('places')->insert([
			'place_name' => 'Tanegashima',
			'place_category' => 'port',
			'province' => '62'
		]);	
		//tango
		//209
		DB::table('places')->insert([
			'place_name' => 'Miyazu',
			'place_category' => 'port',
			'province' => '63'
		]);	
		//tosa
		//210
		DB::table('places')->insert([
			'place_name' => 'Kochi',
			'place_category' => 'port',
			'province' => '64'
		]);	
		//211
		DB::table('places')->insert([
			'place_name' => 'Nankoku',
			'place_category' => 'rural',
			'province' => '64'
		]);	
		//212
		DB::table('places')->insert([
			'place_name' => 'Nakamura',
			'place_category' => 'port',
			'province' => '64'
		]);	
		//totomi
		//213
		DB::table('places')->insert([
			'place_name' => 'Hamamatsu',
			'place_category' => 'port',
			'province' => '65'
		]);	
		//214
		DB::table('places')->insert([
			'place_name' => 'Kakegawa',
			'place_category' => 'castle',
			'province' => '65'
		]);	
		//215
		DB::table('places')->insert([
			'place_name' => 'Iwata',
			'place_category' => 'post',
			'province' => '65'
		]);		
		//216
		DB::table('places')->insert([
			'place_name' => 'Shimada',
			'place_category' => 'post',
			'province' => '65'
		]);	
		//tsushima
		//217
		DB::table('places')->insert([
			'place_name' => 'Kaneishi',
			'place_category' => 'port',
			'province' => '66'
		]);	
		//wakasa
		//218
		DB::table('places')->insert([
			'place_name' => 'Obama',
			'place_category' => 'port',
			'province' => '67'
		]);	
		//219
		DB::table('places')->insert([
			'place_name' => 'Kanagasaki',
			'place_category' => 'port',
			'province' => '67'
		]);	
		//yamashiro
		//220
		DB::table('places')->insert([
			'place_name' => 'Kyoto',
			'place_category' => 'court',
			'province' => '68'
		]);	
		//221
		DB::table('places')->insert([
			'place_name' => 'Fushimi',
			'place_category' => 'castle',
			'province' => '68'
		]);	
		//222
		DB::table('places')->insert([
			'place_name' => 'Yodo',
			'place_category' => 'castle',
			'province' => '68'
		]);
		//yamato
		//223
		DB::table('places')->insert([
			'place_name' => 'Nara',
			'place_category' => 'temple',
			'province' => '69'
		]);	
		//224
		DB::table('places')->insert([
			'place_name' => 'Koriyama',
			'place_category' => 'castle',
			'province' => '69'
		]);	
		//225
		DB::table('places')->insert([
			'place_name' => 'Sakurai',
			'place_category' => 'temple',
			'province' => '69'
		]);			
		
    }
}
