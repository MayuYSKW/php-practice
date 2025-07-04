<?php
// Q1 tic-tac問題

<?php

echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {

    if ($i % 4 === 0 && $i % 5 === 0) { 
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }

}

// Q2 多次元連想配列

  //問題1

<?php

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

    echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。\n";

  //問題2

<?php

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$index = 1;
foreach ($personalInfos as $value) {
    echo "{$index}番目の{$value['name']}のメールアドレスは{$value['mail']}で、電話番号は{$value['tel']}です。\n";
    $index++;
    }
    

  //問題3

<?php

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $infos) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump ($personalInfos);


// Q3 オブジェクト-1

<?php

class Student
{
    public $studentId;
    public $studentName; 

    public function __construct ($id, $name) 
    {
        $this->studentId = $id; 
        $this->studentName = $name;
    }

    public function attend () 
    {
        echo '授業に出席しました。';
    }
}

$hisoka = new Student (44, 'ヒソカ');       //インスタンス化

echo "受験生番号{$hisoka->studentId}番の受験生は{$hisoka->studentName}です。\n";

// Q4 オブジェクト-2

<?php

class Student
{
    public $studentId;  
    public $studentName;  

    public function __construct ($id, $name) 
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend ($sub)
    {
        echo "{$this->studentName}は{$sub}の授業に参加しました。受験生番号：{$this->studentId}\n";
    }
}

$hisoka = new Student (44, 'ヒソカ');
$hisoka->attend ('PHP');

// Q5 定義済みクラス
  //問題1

<?php

 $date = new Datetime ();
 $date -> modify ('-1 month');
 echo $date->format ('Y-m-d');

  //問題2
  
$start = new DateTime ('1992-4-25');
$today = new DateTime ();

$diff = $start->diff ($today);        //メソッド呼び出し

echo $diff->days . '日が経過しました。';


?>