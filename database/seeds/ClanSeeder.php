<?php

use Illuminate\Database\Seeder;

class ClanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //clans
		//1
		DB::table('clans')->insert([
			'clan_name' => 'Abe',
			'mon' => 'abe',
			'start_location' => '214',
			'start_province' => '65'
		]);	
		//2
		DB::table('clans')->insert([
			'clan_name' => 'Akagawa',
			'mon' => 'akagawa',
			'start_location' => '1',
			'start_province' => '1'
		]);	
		//3
		DB::table('clans')->insert([
			'clan_name' => 'Akai',
			'mon' => 'akai',
			'start_location' => '122',
			'start_province' => '37'
		]);	
		//4
		DB::table('clans')->insert([
			'clan_name' => 'Akamatsu',
			'mon' => 'ashikaga',
			'start_location' => '17',
			'start_province' => '7'
		]);	
		//5
		DB::table('clans')->insert([
			'clan_name' => 'Akechi',
			'mon' => 'akechi',
			'start_location' => '130',
			'start_province' => '40'
		]);	
		//6
		DB::table('clans')->insert([
			'clan_name' => 'Akita',
			'mon' => 'akita',
			'start_location' => '33',
			'start_province' => '12'
		]);	
		//7
		DB::table('clans')->insert([
			'clan_name' => 'Akiyama',
			'mon' => 'akiyama',
			'start_location' => '110',
			'start_province' => '33'
		]);	
		//8
		DB::table('clans')->insert([
			'clan_name' => 'Akizuki',
			'mon' => 'akizuki',
			'start_location' => '32',
			'start_province' => '11'
		]);	
		//9
		DB::table('clans')->insert([
			'clan_name' => 'Amako',
			'mon' => 'amako',
			'start_location' => '103',
			'start_province' => '31'
		]);	
		//10
		DB::table('clans')->insert([
			'clan_name' => 'Amakusa',
			'mon' => 'amakusa',
			'start_location' => '59',
			'start_province' => '18'
		]);	
		//11
		DB::table('clans')->insert([
			'clan_name' => 'Amano',
			'mon' => 'amano',
			'start_location' => '104',
			'start_province' => '31'
		]);	
		//12
		DB::table('clans')->insert([
			'clan_name' => 'Anegakoji',
			'mon' => 'anegakoji',
			'start_location' => '53',
			'start_province' => '17'
		]);	
		//13
		DB::table('clans')->insert([
			'clan_name' => 'Araki',
			'mon' => 'araki',
			'start_location' => '207',
			'start_province' => '61'
		]);	
		//14
		DB::table('clans')->insert([
			'clan_name' => 'Arima',
			'mon' => 'arima',
			'start_location' => '72',
			'start_province' => '20'
		]);	
		//15
		DB::table('clans')->insert([
			'clan_name' => 'Asahina',
			'mon' => 'asahina',
			'start_location' => '170',
			'start_province' => '50'
		]);	
		//16
		DB::table('clans')->insert([
			'clan_name' => 'Asai',
			'mon' => 'asai',
			'start_location' => '157',
			'start_province' => '46'
		]);	
		//17
		DB::table('clans')->insert([
			'clan_name' => 'Asakura',
			'mon' => 'asakura',
			'start_location' => '43',
			'start_province' => '14'
		]);	
		//18
		DB::table('clans')->insert([
			'clan_name' => 'Asano',
			'mon' => 'asano',
			'start_location' => '128',
			'start_province' => '40'
		]);	
		//19
		DB::table('clans')->insert([
			'clan_name' => 'Ashikaga',
			'mon' => 'ashikaga',
			'start_location' => '187',
			'start_province' => '56'
		]);	
		//20
		DB::table('clans')->insert([
			'clan_name' => 'Ashina',
			'mon' => 'ashina',
			'start_location' => '146',
			'start_province' => '42'
		]);
		//21
		DB::table('clans')->insert([
			'clan_name' => 'Aso',
			'mon' => 'aso',
			'start_location' => '60',
			'start_province' => '18'
		]);	
		//22
		DB::table('clans')->insert([
			'clan_name' => 'Atagi',
			'mon' => 'atagi',
			'start_location' => '173',
			'start_province' => '51'
		]);	
		//23
		DB::table('clans')->insert([
			'clan_name' => 'Atobe',
			'mon' => 'atobe',
			'start_location' => '111',
			'start_province' => '33'
		]);	
		//24
		DB::table('clans')->insert([
			'clan_name' => 'Baba',
			'mon' => 'baba',
			'start_location' => '65',
			'start_province' => '19'
		]);	
		//25
		DB::table('clans')->insert([
			'clan_name' => 'Bessho',
			'mon' => 'asahina',
			'start_location' => '49',
			'start_province' => '16'
		]);	
		//26
		DB::table('clans')->insert([
			'clan_name' => 'Chiba',
			'mon' => 'chiba',
			'start_location' => '182',
			'start_province' => '55'
		]);	
		//27
		DB::table('clans')->insert([
			'clan_name' => 'Chosokabe',
			'mon' => 'chosokabe',
			'start_location' => '210',
			'start_province' => '64'
		]);	
		//28
		DB::table('clans')->insert([
			'clan_name' => 'Daidoji',
			'mon' => 'tsugaru',
			'start_location' => '135',
			'start_province' => '41'
		]);	
		//29
		DB::table('clans')->insert([
			'clan_name' => 'Date',
			'mon' => 'date',
			'start_location' => '143',
			'start_province' => '42'
		]);	
		//30
		DB::table('clans')->insert([
			'clan_name' => 'Gamo',
			'mon' => 'asahina',
			'start_location' => '158',
			'start_province' => '46'
		]);	
		//31
		DB::table('clans')->insert([
			'clan_name' => 'Goto',
			'mon' => 'goto',
			'start_location' => '69',
			'start_province' => '20'
		]);	
		//32
		DB::table('clans')->insert([
			'clan_name' => 'Hachisuka',
			'mon' => 'hachisuka',
			'start_location' => '167',
			'start_province' => '48'
		]);	
		//33
		DB::table('clans')->insert([
			'clan_name' => 'Haga',
			'mon' => 'baba',
			'start_location' => '63',
			'start_province' => '19'
		]);	
		//34
		DB::table('clans')->insert([
			'clan_name' => 'Hara',
			'mon' => 'hara',
			'start_location' => '181',
			'start_province' => '55'
		]);	
		//35
		DB::table('clans')->insert([
			'clan_name' => 'Hatakeyama',
			'mon' => 'hatakeyama',
			'start_location' => '116',
			'start_province' => '36'
		]);	
		//36
		DB::table('clans')->insert([
			'clan_name' => 'Hatano',
			'mon' => 'hatano',
			'start_location' => '206',
			'start_province' => '61'
		]);	
		//37
		DB::table('clans')->insert([
			'clan_name' => 'Hattori',
			'mon' => 'hattori',
			'start_location' => '81',
			'start_province' => '23'
		]);	
		//38
		DB::table('clans')->insert([
			'clan_name' => 'Hojo',
			'mon' => 'hojo',
			'start_location' => '100',
			'start_province' => '29'
		]);	
		//39
		DB::table('clans')->insert([
			'clan_name' => 'Honda',
			'mon' => 'honda',
			'start_location' => '213',
			'start_province' => '65'
		]);	
		//40
		DB::table('clans')->insert([
			'clan_name' => 'Honma',
			'mon' => 'chiba',
			'start_location' => '169',
			'start_province' => '49'
		]);	
		//41
		DB::table('clans')->insert([
			'clan_name' => 'Horiuchi',
			'mon' => 'horiuchi',
			'start_location' => '117',
			'start_province' => '36'
		]);	
		//42
		DB::table('clans')->insert([
			'clan_name' => 'Hosokawa',
			'mon' => 'chiba',
			'start_location' => '178',
			'start_province' => '53'
		]);	
		//43
		DB::table('clans')->insert([
			'clan_name' => 'Ichijo',
			'mon' => 'ichijo',
			'start_location' => '211',
			'start_province' => '64'
		]);	
		//44
		DB::table('clans')->insert([
			'clan_name' => 'Ii',
			'mon' => 'ii',
			'start_location' => '201',
			'start_province' => '59'
		]);	
		//45
		DB::table('clans')->insert([
			'clan_name' => 'Ijuin',
			'mon' => 'ijuin',
			'start_location' => '78',
			'start_province' => '22'
		]);	
		//46
		DB::table('clans')->insert([
			'clan_name' => 'Ikeda',
			'mon' => 'ikeda',
			'start_location' => '205',
			'start_province' => '61'
		]);	
		//47
		DB::table('clans')->insert([
			'clan_name' => 'Ikoma',
			'mon' => 'ikoma',
			'start_location' => '166',
			'start_province' => '48'
		]);	
		//48
		DB::table('clans')->insert([
			'clan_name' => 'Imagawa',
			'mon' => 'imagawa',
			'start_location' => '202',
			'start_province' => '59'
		]);	
		//49
		DB::table('clans')->insert([
			'clan_name' => 'Ina',
			'mon' => 'uesugi',
			'start_location' => '193',
			'start_province' => '57'
		]);	
		//50
		DB::table('clans')->insert([
			'clan_name' => 'Inaba',
			'mon' => 'inaba',
			'start_location' => '131',
			'start_province' => '40'
		]);
		//51
		DB::table('clans')->insert([
			'clan_name' => 'Inoue',
			'mon' => 'inoue',
			'start_location' => '133',
			'start_province' => '40'
		]);	
		//52
		DB::table('clans')->insert([
			'clan_name' => 'Irobe',
			'mon' => 'irobe',
			'start_location' => '120',
			'start_province' => '37'
		]);	
		//53
		DB::table('clans')->insert([
			'clan_name' => 'Ishida',
			'mon' => 'ishida',
			'start_location' => '161',
			'start_province' => '46'
		]);	
		//54
		DB::table('clans')->insert([
			'clan_name' => 'Ishikawa',
			'mon' => 'ishikawa',
			'start_location' => '112',
			'start_province' => '34'
		]);	
		//55
		DB::table('clans')->insert([
			'clan_name' => 'Isshiki',
			'mon' => 'isshiki',
			'start_location' => '209',
			'start_province' => '63'
		]);	
		//56
		DB::table('clans')->insert([
			'clan_name' => 'Itami',
			'mon' => 'naito',
			'start_location' => '179',
			'start_province' => '53'
		]);	
		//57
		DB::table('clans')->insert([
			'clan_name' => 'Ito',
			'mon' => 'ito',
			'start_location' => '77',
			'start_province' => '22'
		]);	
		//58
		DB::table('clans')->insert([
			'clan_name' => 'Jinbo',
			'mon' => 'jinbo',
			'start_location' => '47',
			'start_province' => '15'
		]);	
		//59
		DB::table('clans')->insert([
			'clan_name' => 'Jo',
			'mon' => 'uesugi',
			'start_location' => '57',
			'start_province' => '18'
		]);	
		//60
		DB::table('clans')->insert([
			'clan_name' => 'Kakizaki',
			'mon' => 'kakizaki',
			'start_location' => '195',
			'start_province' => '57'
		]);	
		//61
		DB::table('clans')->insert([
			'clan_name' => 'Kamei',
			'mon' => 'kamei',
			'start_location' => '75',
			'start_province' => '21'
		]);	
		//62
		DB::table('clans')->insert([
			'clan_name' => 'Kasai',
			'mon' => 'nukui',
			'start_location' => '149',
			'start_province' => '42'
		]);	
		//63
		DB::table('clans')->insert([
			'clan_name' => 'Katakura',
			'mon' => 'chiba',
			'start_location' => '144',
			'start_province' => '42'
		]);	
		//64
		DB::table('clans')->insert([
			'clan_name' => 'Kato',
			'mon' => 'amano',
			'start_location' => '165',
			'start_province' => '48'
		]);	
		//65
		DB::table('clans')->insert([
			'clan_name' => 'Kikkawa',
			'mon' => 'kikkawa',
			'start_location' => '4',
			'start_province' => '1'
		]);	
		//66
		DB::table('clans')->insert([
			'clan_name' => 'Kikuchi',
			'mon' => 'kikuchi',
			'start_location' => '61',
			'start_province' => '18'
		]);
		//67
		DB::table('clans')->insert([
			'clan_name' => 'Kimotsuki',
			'mon' => 'kimotsuki',
			'start_location' => '79',
			'start_province' => '22'
		]);			
		//68
		DB::table('clans')->insert([
			'clan_name' => 'Kiso',
			'mon' => 'kiso',
			'start_location' => '194',
			'start_province' => '57'
		]);	
		//69
		DB::table('clans')->insert([
			'clan_name' => 'Kitabatake',
			'mon' => 'nukui',
			'start_location' => '86',
			'start_province' => '26'
		]);	
		//70
		DB::table('clans')->insert([
			'clan_name' => 'Kitajo',
			'mon' => 'mori',
			'start_location' => '196',
			'start_province' => '57'
		]);	
		//71
		DB::table('clans')->insert([
			'clan_name' => 'Kobayakawa',
			'mon' => 'asahina',
			'start_location' => '11',
			'start_province' => '5'
		]);	
		//72
		DB::table('clans')->insert([
			'clan_name' => 'Koide',
			'mon' => 'koide',
			'start_location' => '101',
			'start_province' => '30'
		]);	
		//73
		DB::table('clans')->insert([
			'clan_name' => 'Konishi',
			'mon' => 'konishi',
			'start_location' => '13',
			'start_province' => '6'
		]);	
		//74
		DB::table('clans')->insert([
			'clan_name' => 'Kono',
			'mon' => 'kono',
			'start_location' => '94',
			'start_province' => '28'
		]);	
		//75
		DB::table('clans')->insert([
			'clan_name' => 'Kuki',
			'mon' => 'takiyama',
			'start_location' => '180',
			'start_province' => '54'
		]);	
		//76
		DB::table('clans')->insert([
			'clan_name' => 'Kuroda',
			'mon' => 'kuroda',
			'start_location' => '51',
			'start_province' => '16'
		]);	
		//77
		DB::table('clans')->insert([
			'clan_name' => 'Kurushima',
			'mon' => 'kurushima',
			'start_location' => '93',
			'start_province' => '28'
		]);	
		//78
		DB::table('clans')->insert([
			'clan_name' => 'Kyogoku',
			'mon' => 'amako',
			'start_location' => '156',
			'start_province' => '46'
		]);	
		//79
		DB::table('clans')->insert([
			'clan_name' => 'Maeda',
			'mon' => 'maeda',
			'start_location' => '88',
			'start_province' => '26'
		]);	
		//80
		DB::table('clans')->insert([
			'clan_name' => 'Matsuda',
			'mon' => 'matsuda',
			'start_location' => '14',
			'start_province' => '6'
		]);	
		//81
		DB::table('clans')->insert([
			'clan_name' => 'Matsudaira',
			'mon' => 'toki',
			'start_location' => '124',
			'start_province' => '38'
		]);	
		//82
		DB::table('clans')->insert([
			'clan_name' => 'Matsunaga',
			'mon' => 'matsunaga',
			'start_location' => '223',
			'start_province' => '69'
		]);	
		//83
		DB::table('clans')->insert([
			'clan_name' => 'Matsuura',
			'mon' => 'matsuura',
			'start_location' => '70',
			'start_province' => '20'
		]);	
		//84
		DB::table('clans')->insert([
			'clan_name' => 'Mikumo',
			'mon' => 'mikumo',
			'start_location' => '159',
			'start_province' => '46'
		]);	
		//85
		DB::table('clans')->insert([
			'clan_name' => 'Miura',
			'mon' => 'sakuma',
			'start_location' => '172',
			'start_province' => '50'
		]);	
		//86
		DB::table('clans')->insert([
			'clan_name' => 'Miyoshi',
			'mon' => 'miyoshi',
			'start_location' => '6',
			'start_province' => '2'
		]);	
		//87
		DB::table('clans')->insert([
			'clan_name' => 'Mochizuki',
			'mon' => 'chiba',
			'start_location' => '188',
			'start_province' => '57'
		]);	
		//88
		DB::table('clans')->insert([
			'clan_name' => 'Mogami',
			'mon' => 'mogami',
			'start_location' => '38',
			'start_province' => '12'
		]);	
		//89
		DB::table('clans')->insert([
			'clan_name' => 'Moniwa',
			'mon' => 'moniwa',
			'start_location' => '148',
			'start_province' => '42'
		]);	
		//90
		DB::table('clans')->insert([
			'clan_name' => 'Mori',
			'mon' => 'mori',
			'start_location' => '3',
			'start_province' => '1'
		]);	
		//91
		DB::table('clans')->insert([
			'clan_name' => 'Murakami',
			'mon' => 'murakami',
			'start_location' => '5',
			'start_province' => '1'
		]);	
		//92
		DB::table('clans')->insert([
			'clan_name' => 'Nabeshima',
			'mon' => 'otomo',
			'start_location' => '68',
			'start_province' => '20'
		]);	
		//93
		DB::table('clans')->insert([
			'clan_name' => 'Nagao',
			'mon' => 'nagao',
			'start_location' => '42',
			'start_province' => '13'
		]);	
		//94
		DB::table('clans')->insert([
			'clan_name' => 'Naito',
			'mon' => 'naito',
			'start_location' => '198',
			'start_province' => '58'
		]);	
		//95
		DB::table('clans')->insert([
			'clan_name' => 'Nakajo',
			'mon' => 'sakuma',
			'start_location' => '197',
			'start_province' => '57'
		]);	
		//96
		DB::table('clans')->insert([
			'clan_name' => 'Nambu',
			'mon' => 'nambu',
			'start_location' => '142',
			'start_province' => '42'
		]);	
		//97
		DB::table('clans')->insert([
			'clan_name' => 'Naoe',
			'mon' => 'naoe',
			'start_location' => '39',
			'start_province' => '13'
		]);	
		//98
		DB::table('clans')->insert([
			'clan_name' => 'Narita',
			'mon' => 'narita',
			'start_location' => '183',
			'start_province' => '55'
		]);	
		//99
		DB::table('clans')->insert([
			'clan_name' => 'Niiro',
			'mon' => 'niiro',
			'start_location' => '163',
			'start_province' => '47'
		]);	
		//100
		DB::table('clans')->insert([
			'clan_name' => 'Nikaido',
			'mon' => 'nikaido',
			'start_location' => '186',
			'start_province' => '56'
		]);	
		//101
		DB::table('clans')->insert([
			'clan_name' => 'Niki',
			'mon' => 'sakikabara',
			'start_location' => '80',
			'start_province' => '23'
		]);	
		//102
		DB::table('clans')->insert([
			'clan_name' => 'Niwa',
			'mon' => 'niwa',
			'start_location' => '162',
			'start_province' => '48'
		]);	
		//103
		DB::table('clans')->insert([
			'clan_name' => 'Nomi',
			'mon' => 'nomi',
			'start_location' => '12',
			'start_province' => '5'
		]);	
		//104
		DB::table('clans')->insert([
			'clan_name' => 'Nukui',
			'mon' => 'nukui',
			'start_location' => '153',
			'start_province' => '44'
		]);	
		//105
		DB::table('clans')->insert([
			'clan_name' => 'Oda',
			'mon' => 'oda',
			'start_location' => '164',
			'start_province' => '48'
		]);	
		//106
		DB::table('clans')->insert([
			'clan_name' => 'Ogasawara',
			'mon' => 'akiyama',
			'start_location' => '191',
			'start_province' => '57'
		]);	
		//107
		DB::table('clans')->insert([
			'clan_name' => 'Okabe',
			'mon' => 'imagawa',
			'start_location' => '98',
			'start_province' => '29'
		]);	
		//108
		DB::table('clans')->insert([
			'clan_name' => 'Okubo',
			'mon' => 'okubo',
			'start_location' => '145',
			'start_province' => '42'
		]);	
		//109
		DB::table('clans')->insert([
			'clan_name' => 'Okudaira',
			'mon' => 'okudaira',
			'start_location' => '215',
			'start_province' => '65'
		]);	
		//110
		DB::table('clans')->insert([
			'clan_name' => 'Omura',
			'mon' => 'oda',
			'start_location' => '71',
			'start_province' => '20'
		]);	
		//111
		DB::table('clans')->insert([
			'clan_name' => 'Onodera',
			'mon' => 'oda',
			'start_location' => '37',
			'start_province' => '12'
		]);	
		//112
		DB::table('clans')->insert([
			'clan_name' => 'Ota',
			'mon' => 'ota',
			'start_location' => '134',
			'start_province' => '41'
		]);	
		//113
		DB::table('clans')->insert([
			'clan_name' => 'Otomo',
			'mon' => 'otomo',
			'start_location' => '20',
			'start_province' => '8'
		]);	
		//114
		DB::table('clans')->insert([
			'clan_name' => 'Ouchi',
			'mon' => 'ouchi',
			'start_location' => '152',
			'start_province' => '43'
		]);	
		//115
		DB::table('clans')->insert([
			'clan_name' => 'Rusu',
			'mon' => 'rusu',
			'start_location' => '138',
			'start_province' => '42'
		]);	
		//116
		DB::table('clans')->insert([
			'clan_name' => 'Ryuzoji',
			'mon' => 'amakusa',
			'start_location' => '27',
			'start_province' => '10'
		]);	
		//117
		DB::table('clans')->insert([
			'clan_name' => 'Sagara',
			'mon' => 'sagara',
			'start_location' => '58',
			'start_province' => '18'
		]);	
		//118
		DB::table('clans')->insert([
			'clan_name' => 'Saigo',
			'mon' => 'saigo',
			'start_location' => '125',
			'start_province' => '38'
		]);			
		//119
		DB::table('clans')->insert([
			'clan_name' => 'Saito',
			'mon' => 'saito',
			'start_location' => '46',
			'start_province' => '14'
		]);	
		//120
		DB::table('clans')->insert([
			'clan_name' => 'Sakai',
			'mon' => 'sakai',
			'start_location' => '123',
			'start_province' => '38'
		]);	
		//121
		DB::table('clans')->insert([
			'clan_name' => 'Sakikabara',
			'mon' => 'sakikabara',
			'start_location' => '87',
			'start_province' => '26'
		]);	
		//122
		DB::table('clans')->insert([
			'clan_name' => 'Sakuma',
			'mon' => 'sakuma',
			'start_location' => '171',
			'start_province' => '50'
		]);	
		//123
		DB::table('clans')->insert([
			'clan_name' => 'Sanada',
			'mon' => 'sanada',
			'start_location' => '190',
			'start_province' => '57'
		]);	
		//124
		DB::table('clans')->insert([
			'clan_name' => 'Sasaki',
			'mon' => 'amako',
			'start_location' => '160',
			'start_province' => '46'
		]);	
		//125
		DB::table('clans')->insert([
			'clan_name' => 'Satake',
			'mon' => 'satake',
			'start_location' => '62',
			'start_province' => '19'
		]);	
		//126
		DB::table('clans')->insert([
			'clan_name' => 'Satomi',
			'mon' => 'satomi',
			'start_location' => '9',
			'start_province' => '3'
		]);	
		//127
		DB::table('clans')->insert([
			'clan_name' => 'Seki',
			'mon' => 'seki',
			'start_location' => '89',
			'start_province' => '26'
		]);	
		//128
		DB::table('clans')->insert([
			'clan_name' => 'Shiba',
			'mon' => 'hatakeyama',
			'start_location' => '44',
			'start_province' => '14'
		]);	
		//129
		DB::table('clans')->insert([
			'clan_name' => 'Shibata',
			'mon' => 'shibata',
			'start_location' => '40',
			'start_province' => '13'
		]);	
		//130
		DB::table('clans')->insert([
			'clan_name' => 'Shimazu',
			'mon' => 'niiro',
			'start_location' => '176',
			'start_province' => '52'
		]);	
		//131
		DB::table('clans')->insert([
			'clan_name' => 'Shimizu',
			'mon' => 'shimizu',
			'start_location' => '16',
			'start_province' => '6'
		]);	
		//132
		DB::table('clans')->insert([
			'clan_name' => 'Shoni',
			'mon' => 'shoni',
			'start_location' => '67',
			'start_province' => '20'
		]);	
		//133
		DB::table('clans')->insert([
			'clan_name' => 'So',
			'mon' => 'so',
			'start_location' => '217',
			'start_province' => '66'
		]);	
		//134
		DB::table('clans')->insert([
			'clan_name' => 'Soma',
			'mon' => 'soma',
			'start_location' => '140',
			'start_province' => '42'
		]);	
		//135
		DB::table('clans')->insert([
			'clan_name' => 'Suwa',
			'mon' => 'suwa',
			'start_location' => '192',
			'start_province' => '57'
		]);	
		//136
		DB::table('clans')->insert([
			'clan_name' => 'Tachibana',
			'mon' => 'tachibana',
			'start_location' => '29',
			'start_province' => '11'
		]);	
		//137
		DB::table('clans')->insert([
			'clan_name' => 'Takahashi',
			'mon' => 'takahashi',
			'start_location' => '24',
			'start_province' => '8'
		]);	
		//138
		DB::table('clans')->insert([
			'clan_name' => 'Takaoka',
			'mon' => 'takaoka',
			'start_location' => '203',
			'start_province' => '60'
		]);	
		//139
		DB::table('clans')->insert([
			'clan_name' => 'Takeda',
			'mon' => 'takeda',
			'start_location' => '109',
			'start_province' => '33'
		]);	
		//140
		DB::table('clans')->insert([
			'clan_name' => 'Takemata',
			'mon' => 'takemata',
			'start_location' => '48',
			'start_province' => '15'
		]);	
		//141
		DB::table('clans')->insert([
			'clan_name' => 'Takenaka',
			'mon' => 'takenaka',
			'start_location' => '132',
			'start_province' => '40'
		]);	
		//142
		DB::table('clans')->insert([
			'clan_name' => 'Takigawa',
			'mon' => 'takigawa',
			'start_location' => '85',
			'start_province' => '26'
		]);	
		//143
		DB::table('clans')->insert([
			'clan_name' => 'Tanegashima',
			'mon' => 'hojo',
			'start_location' => '208',
			'start_province' => '62'
		]);	
		//144
		DB::table('clans')->insert([
			'clan_name' => 'Takiyama',
			'mon' => 'takiyama',
			'start_location' => '137',
			'start_province' => '41'
		]);	
		//145
		DB::table('clans')->insert([
			'clan_name' => 'Togashi',
			'mon' => 'togashi',
			'start_location' => '107',
			'start_province' => '32'
		]);	
		//146
		DB::table('clans')->insert([
			'clan_name' => 'Toki',
			'mon' => 'toki',
			'start_location' => '129',
			'start_province' => '40'
		]);	
		//147
		DB::table('clans')->insert([
			'clan_name' => 'Torii',
			'mon' => 'torii',
			'start_location' => '184',
			'start_province' => '55'
		]);	
		//148
		DB::table('clans')->insert([
			'clan_name' => 'Tsuchimochi',
			'mon' => 'tsuchimochi',
			'start_location' => '199',
			'start_province' => '58'
		]);	
		//149
		DB::table('clans')->insert([
			'clan_name' => 'Tsugaru',
			'mon' => 'tsugaru',
			'start_location' => '141',
			'start_province' => '42'
		]);	
		//150
		DB::table('clans')->insert([
			'clan_name' => 'Tsutsui',
			'mon' => 'maeda',
			'start_location' => '223',
			'start_province' => '69'
		]);	
		//151
		DB::table('clans')->insert([
			'clan_name' => 'Udono',
			'mon' => 'udono',
			'start_location' => '216',
			'start_province' => '65'
		]);	
		//152
		DB::table('clans')->insert([
			'clan_name' => 'Uesugi',
			'mon' => 'uesugi',
			'start_location' => '136',
			'start_province' => '41'
		]);	
		//153
		DB::table('clans')->insert([
			'clan_name' => 'Ukita',
			'mon' => 'ukita',
			'start_location' => '18',
			'start_province' => '7'
		]);	
		//154
		DB::table('clans')->insert([
			'clan_name' => 'Urakami',
			'mon' => 'urakami',
			'start_location' => '127',
			'start_province' => '39'
		]);	
		//155
		DB::table('clans')->insert([
			'clan_name' => 'Utsunomiya',
			'mon' => 'baba',
			'start_location' => '185',
			'start_province' => '56'
		]);	
		//156
		DB::table('clans')->insert([
			'clan_name' => 'Wada',
			'mon' => 'wada',
			'start_location' => '119',
			'start_province' => '37'
		]);	
		//157
		DB::table('clans')->insert([
			'clan_name' => 'Yamana',
			'mon' => 'yamana',
			'start_location' => '83',
			'start_province' => '25'
		]);	
		//159
		DB::table('clans')->insert([
			'clan_name' => 'Yamauchi',
			'mon' => 'yamauchi',
			'start_location' => '212',
			'start_province' => '64'
		]);	
		//159
		DB::table('clans')->insert([
			'clan_name' => 'Yonekura',
			'mon' => 'yonekura',
			'start_location' => '189',
			'start_province' => '57'
		]);	
		//160
		DB::table('clans')->insert([
			'clan_name' => 'Yuki',
			'mon' => 'yuki',
			'start_location' => '64',
			'start_province' => '19'
		]);			
		
    }
}
