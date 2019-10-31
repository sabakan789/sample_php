<?php
$name = "Nanayaku";
// switch ($name){
//   case "Nanayaku":
//    echo "私は".=$name.="です。";
//    break;
//   default:
//     echo "私は".=$name.="ではありません。";
//     break;
// }
if ($name == "Nanayaku"){
  echo "私は" . $name . "です。";
} else {
  echo "私は" . $name . "ではありません。";
}
?>

<?php
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
?>

<?php
$fruits = ["app","banana","tomato","nasi","kaki"];
foreach ($fruits as $fruit){
  echo $fruit;
  echo "\n";
}
?>

<?php
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
for($i = $start; $i < $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>