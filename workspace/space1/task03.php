<?php
$name = "kaji";
if ($name === "kaji") {
    echo "私は $name です";
} else {
    echo "$name ではありません";
}
echo "\n";
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
$fruits = array("apple", "orange", "banana","meronn","grape");
// $animals から一つずつ要素を取り出して、$animal に代入される

foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}
echo "\n";
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}