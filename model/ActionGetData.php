<?php
  
$datas = unserialize(file_get_contents('../datas/datasSpent.txt'));
$data = [];
foreach ($datas as $key => $val) {
  if (isset($val['spent'])) {
    $data[] = $val['spent'];
  }
}
$datas = array_slice($datas, 1);
echo (json_encode($datas));