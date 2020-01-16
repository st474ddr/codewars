function series_sum($n) {
  // Your code here
  for($i = 0 ; $i < $n ; $i++)
  {
    $sum += 1/(1+3*$i);
  }
  $sum = round($sum,2);
  $sum = sprintf("%.2f",$sum);
  return $sum;
}