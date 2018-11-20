<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $name = [
        '山田太郎', '田中緑', '小林達也', '高橋愛美','滝本どれみ','松本正男','武田信言','時山ららべる','工藤孝一','赤頭のんの'
        ,'下田良太','梶山すずか','門脇裕翔','久保陵','長畑瑞月','三橋貴志','工藤新一','南光二朗','安井しおり','石田鈴'
        ,'片山梨花','合田ちあむ','古賀みゆひ','富岡優華','野原ひまわり','古川勝希','野原慎太郎','桜桃子','磯野波平','久保帯人'
      ];
      $kana = [
        'ヤマダタロウ', 'タナカミドリ', 'コバヤシタツヤ', 'タカハシマナミ','タキモトドレミ','マツモトマサオ','タケダシンゲン','トキヤマララベル','クドウコウイチ'
        ,'アカガシラノンノ','シタダリョウタ', 'カジヤマスズカ','カドワキユウト','クボリョウ','ナガハタミズキ','ミツハシタカシ','クドウシンイチ','ミナミ コウジロウ','ヤスイシオリ'
        ,'イシダリン','カタヤマリンカ','ゴウダチアム','コガミユヒ','トミオカユウカ','ノハラヒマワリ','フルカワショウキ','ノハラシンタロウ','サクラモモコ','イソノナミヘイ','クボタイト'
      ];
      $email = [
        'u_test1@gmail.com', 'u_test2@gmail.com', 'u_test3@gmail.com', 'u_test4@gmail.com','u_test5@gmail.com','u_test6@gmail.com','u_test7@gmail.com'
        ,'u_test8@gmail.com','u_test9@gmail.com','u_test10@gmail.com','u_test11@gmail.com','u_test12@gmail.com','u_test13@gmail.com','u_test14@gmail.com','u_test15@gmail.com'
        ,'u_test16@gmail.com','u_test17@gmail.com','u_test18@gmail.com','u_test19@gmail.com','u_test20@gmail.com','u_test21@gmail.com','u_test22@gmail.com','u_test23@gmail.com'
        ,'u_test24@gmail.com','u_test25@gmail.com','u_test26@gmail.com','u_test27@gmail.com','u_test28@gmail.com','u_test29@gmail.com','u_test30@gmail.com','u_test31@gmail.com'
      ];
      $password = [
        'password', 'password', 'password', 'password', 'password', 'password', 'password'
        , 'password', 'password', 'password', 'password', 'password','password','password','password','password','password','password','password','password',
        'password','password','password','password','password','password','password','password','password','password',
      ];
      // 0=男 1=女
      $sex = [
        0, 1, 0, 1, 1 ,0 ,0 ,0 ,0 ,0 ,0 ,1 ,0 ,0 ,1 ,0 ,0 ,0 ,1 ,1 ,1 ,1 ,1 ,1 ,1 ,1 ,0 ,1 ,0 ,0
      ];
      $postal = [
        '1010101', '2020202', '3030303', '4040404','5050505','6060606','7070707','8080808','9090909'
        ,'1110101','0000001','0000011','0001111','0000111','0011111','0111111','0111111','1111111','1111112','1111122','1111222','1112222'
        ,'1122222','1222222','2222222','2222223','2222233','2222333','2223333' ,'2233333'
      ];
      $address = [
        '大阪府大阪市上本町6-1-1', '大阪府大阪市上本町6-1-2', '大阪府大阪市上本町6-1-3', '大阪府大阪市上本町6-1-4','大阪府大阪市上本町6-1-5','大阪府大阪市上本町6-1-6',
        '大阪府大阪市上本町6-7-2','大阪府大阪市上本町6-7-3','大阪府大阪市上本町6-7-4','大阪府大阪市上本町6-7-5','大阪府大阪市上本町6-7-6','大阪府大阪市上本町6-7-7'
        ,'大阪府大阪市上本町6-7-8','大阪府大阪市上本町6-7-9','大阪府大阪市上本町6-8-1','大阪府大阪市上本町6-8-2','大阪府大阪市上本町6-8-3','大阪府大阪市上本町6-8-4'
        ,'大阪府大阪市上本町6-8-5','大阪府大阪市上本町6-8-6','大阪府大阪市上本町6-8-7','大阪府大阪市上本町6-8-8','大阪府大阪市上本町6-8-9','大阪府大阪市上本町6-9-1'
        ,'大阪府大阪市上本町6-9-2','大阪府大阪市上本町6-9-3','大阪府大阪市上本町6-9-4','大阪府大阪市上本町6-9-5' ,'大阪府大阪市上本町6-9-6','大阪府大阪市上本町6-9-7'
      ];
      $tel = [
        '01234567890', '01234567890', '01234567890', '01234567890','01234567890','01234567890','01234567890'
        ,'01234567890' ,'01234567890','01234567890','01234567890','01234567890','01234567890','01234567890'
        ,'01234567890','01234567890','01234567890','01234567890','01234567890','01234567890','01234567890',
        '01234567890','01234567890','01234567890','01234567890','01234567890','01234567890','01234567890','01234567890','01234567890',
      ];
      $birth = [
        '1991/01/01', '1992/02/02', '1993/03/03', '1993/04/04','2004/01/01','2001/01/11','2000/04/11','2000/04/11'
        ,'1955/03/11','1990/03/21','1998/09/21','1998/12/21','2005/12/21','1998/10/21','1999/01/11','1970/10/11','1970/11/11','1992/06/05'
        ,'1988/03/05','1999/05/09','1997/09/09','1950/03/09','2003/07/09','1998/08/10','1990/08/20','2004/09/20','2002/04/03',
        '1975/04/30','2003/07/03','2002/01/05',
      ];
      $point = [
        1000, 3000, 500, 600 ,600 ,500 ,800 ,100 ,4000 ,800 ,600 ,4000 ,300, 500, 100, 0, 1300 ,300 ,9000 ,500 ,600 ,6000 ,9000 ,600 ,500 ,0 ,2000 ,1000 ,1500 ,1500
      ];

      for($i = 0; $i < 30; $i++){
        DB::table('users')->insert([
          'name' => $name[$i],
          'kana' => $kana[$i],
          'email' => $email[$i],
          'password' => Hash::make($password[$i]),
          'sex' => $sex[$i],
          'postal' => $postal[$i],
          'address' => $address[$i],
          'tel' => $tel[$i],
          'birth' => $birth[$i],
          'point' => $point[$i],
          'created_at' => new DateTime(),
          'updated_at' => new DateTime()
        ]);
      }
    }
}
