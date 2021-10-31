<?php
$height = 201;
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません";
} else if ($height >= 200){
    echo "200cm 以上の方はご乗車できません";
} else {
    echo "ご乗車になれます";
}
echo "\n";
$weekday = "月曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
//=> 可燃ごみの日です。 が表示される
echo "\n";
for($i = 5; $i < 20; $i++){
    echo $i;
}
echo "\n";
for($i = 20; $i > 5; $i--){
    echo $i;
}
