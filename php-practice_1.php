<?php
// Q1 変数と文字列

<?php

$name = '吉川';

echo '私の名前は「' . $name . '」です'; 


// Q2 四則演算

<?php

$num = 1;
$x = $num * 5 * 4;

echo $x . "\n";
echo $x / 2 . "\n";


// Q3 日付操作

<?php

date_default_timezone_set('Asia/Tokyo');

$date = date("Y年m月d日 H時i分s秒");

echo '現在時刻は、' . $date . 'です';


// Q4 条件分岐-1 if文

<?php

$device = 'windows';

if ($device === 'mac' || $device === 'windows') {
    echo '使用OSは、' . $device . 'です。';
}
 else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

<?php

$age = 10;
$message = ($age >= 18) ? '成人です。':'未成年です。';

echo $message;


// Q6 配列

<?php

$array = ['埼玉県', '群馬県', '栃木県', '千葉県', '神奈川県', '東京都', '山梨県'];

  $x = $array[2];
  $y = $array[3];

echo $x . 'と' . $y . "は関東地方の都道府県です\n";

// Q7 連想配列-1

<?php

$array = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($array as $city) {
    echo "$city \n";
}

// Q8 連想配列-2

<?php

$array = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($array as $prefecture => $city){

  if($prefecture === '埼玉県' ){
    echo "{$prefecture}の県庁所在地は{$city}です。 \n";
  }
}

// Q9 連想配列-3

<?php

$array = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

$array += [
  '北海道' => '札幌市',
  '福岡県' => '福岡市'
];

foreach ($array as $prefecture => $city){

    if ($prefecture === '北海道' || $prefecture === '福岡県') {
     echo "{$prefecture}は関東地方ではありません。 \n";
    }else{
     echo "{$prefecture}の県庁所在地は{$city}です。 \n";
    }
    
}

// Q10 関数-1

<?php

function sayHi($name)
{
    echo $name . "さん、こんにちは。\n";
}

sayHi('黒崎');
sayHi('朽木');

// Q11 関数-2

<?php

function calcTaxPrice($price)
{
    return  $price * 1.10;
}

$price =1000;
$taxInPrice = calcTaxPrice($price);

echo "{$price}円の商品の税込み価格は{$taxInPrice}円です。\n";

// Q12 関数とif文

<?php

function distinguishNum($number){
    if ($number % 2 === 1){
        return "{$number}は奇数です。\n";
    }else {
        return "{$number}は偶数です。\n";
    }
}

echo distinguishNum(14142135);
echo distinguishNum(17320508);


// Q13 関数とswitch文

<?php

function evaluateGrade($grade){

    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。\n";

        case 'C':
            return "合格ですが追加課題があります。\n";
            
        case 'D':
            return "不合格です。\n";
            
        default:
            return "判定不明です。講師に問い合わせてください。\n";
    }
}

echo evaluateGrade('A');
echo evaluateGrade('ぽ');
?>