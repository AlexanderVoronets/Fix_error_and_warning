<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
//N-Fatal error , x
//M-Warning ,y
$errMsg='';
$cnt="";
if($_SERVER['REQUEST_METHOD']=='POST'){

  $errorN = $_POST['varN'];
  $warningM = $_POST['varM'];
  
  
	if((is_numeric($errorN) and is_numeric($warningM))and($errorN>=0 and $warningM>=0 and $warningM<=1000 ))
	{
			if($errorN %2!=0 && $warningM==0)
			{
				$errMsg=-1;
			}else 
			{
				$cnt = -2;
				$copy = $errorN;
				if ($warningM%2!=0)
				{
					$warningM+=1;
					$cnt+=1;
				}
				do {
					$cnt+=2;
					$errorN = $copy;
					$tmp = (int) $warningM/2;
					$errorN+=$tmp;
					$warningM+=2;
				}while (($errorN%2)!=0);
				$cnt+=($warningM-2)/2;
				$cnt+=$errorN/2;
			}
	}
  else
  {
	  $errMsg= "Введене некорректные данные!";
  }
}
?>
<h3> "Ошибки" и "Предупреждения" </h3>
<form method="POST">
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
echo "<label> Введите количество ошибок </label><br>";
echo "<input name='varN' type='text' value=$_POST[varN]><br>";
echo "<label>  Введите количесво предупреждений  </label><br>";
echo "<input name='varM' type='text' value=$_POST[varM]><br><br>";
}
else{
echo "<label>  Введите количество ошибок</label><br>";
echo "<input name='varN' type='text'><br>";
echo "<label>  Введите количесво предупреждений </label><br>";
echo "<input name='varM' type='text'><br><br>";
}
?>
<input type="submit" value="Отправить"> 
</form>
<br>
<span><?=$errMsg;?></span>
<br>
<span><?=$cnt;?></span>
</body>
</html>