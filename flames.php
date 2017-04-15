<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #800080;}
span.a {text-align:center;}
h1 { text-align: center; color: #B22222;}
body {color:#CD853F;background-image: url("http://i.imgur.com/5S5hyXm.jpg");}
form { text-align: center;}
p.b {color:#696969;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $crushErr = ""; $t=$v=$d=$e="" ;
$name = $crush = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed.";  
    }
  }
  
  if (empty($_POST["crush"])) {
    $crushErr = "Name is required";
  } else {
    $crush = test_input($_POST["crush"]);
        // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$crush)) {
      $crushErr = "Only letters and white space allowed.";
      }
  }
    
    $name = test_input($_POST["name"]);  
    $crush = test_input($_POST["crush"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name) || !preg_match("/^[a-zA-Z ]*$/",$crush)) {
      $t = '<span> <B>You tried to mess with the bonfire of truth, suddenly the flames rose and consumed you.</B> <i> You died. </i>';  
    } 
if(strtolower($name)==strtolower($crush))
{$v='<span style="color: #800080;">*Same name not applicable.</span>';
 $name=$crush="";}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>FLAMES</h1>
<p style="text-align:center;">After months of traveling, you finally found the bonfire of truth. Now, you can know what is your true relationship with your crush / partner / chosen one. You took a piece of paper, write your name along with your partner's.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Crush: <input type="text" name="crush" value="<?php echo $crush;?>">
  <span class="error">* <?php echo $crushErr;?></span>
  <br><br>
  <p style="text-align:center;"><span class="error" >* required field.</span></p>
  
  <p style="text-align:center;" style="font-style:italic;"><?php echo $t;  ?> </p>

<p style="text-align:center;" style="color: #FF0000;"><?php echo $v;?></p>

  <p style="text-align:center;">You gently threw the torn paper in the flames.</p>
  
  <input type="submit" name="submit" value="Throw">  
</form>

<?php

$k=0;
$count=0;
$s=$name;
$s= strtolower($s);
$v=$crush;
$v= strtolower($v);
for($i=0;$i<strlen($s);$i++)
for($j=0;$j<strlen($v);$j++)
{if($s[$i]==$v[$j])
{
$v[$j]=" ";
$count++;
break;
}
}

$f=strlen($s)+strlen($v)-2*$count;
f($f);



function f($a)
{
$f=$a-1;
$g=$f;
$v=NULL;
$u=NULL;
$w=NULL;
$o=NULL;
$h=NULL;
$s="flames";
$x=$f%6;
for($i=0;$i<strlen($s);$i++)
{if($i==$x)
continue;
$v=$v.$s[$i];}
$x=($x+$g)%5;
for($i=0;$i<strlen($v);$i++)
{
if($i==$x)
continue;
$u=$u.$v[$i];
}
$x=($x+$g)%4;
for($i=0;$i<strlen($u);$i++)
{
if($i==$x)
continue;
$w=$w.$u[$i];
}
$x=($x+$g)%3;
for($i=0;$i<strlen($w);$i++)
{
if($i==$x)
continue;
$h=$h.$w[$i];
}
$x=($x+$g)%2;
for($i=0;$i<strlen($h);$i++)
{
if($i==$x)
continue;
$o=$o.$h[$i];
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{$ww=$_POST['name'];
$hi=$_POST['crush'];
$counts=0;$countss=0;
for($lo=0;$lo<strlen($ww);$lo++)
if(ctype_alpha($ww[$lo])||ctype_space($ww[$lo]))
$counts++;
for($lo=0;$lo<strlen($hi);$lo++)
if(ctype_alpha($hi[$lo])||ctype_space($hi[$lo]))
$countss++;
if($counts==strlen($ww) and $countss==strlen($hi) and strlen($ww)>=1 and strlen($hi)>=1)
{if($o=="f"||$o=="l"||$o=="a"||$o=="m"||$o=="e"||$o=="s")
{$GLOBALS['d']= '<span> <br> <B> The paper, now burned from the edges was floating in the air. You caught the paper and read it.</B> <br> <br> </span>';}}}

if($o=="f")
$GLOBALS['e']= '<span>  <i> is friend of </i> </span>';
if($o=="l")
$GLOBALS['e']= '<span>  <i> loves </i> </span>';
if($o=="a")
$GLOBALS['e']= '<span>  <i> is attracted towards </i> </span>';
if($o=="m")
$GLOBALS['e']= '<span>  <i> will marry </i> </span>';
if($o=="e")
$GLOBALS['e']= '<span>  <i> is enemy of </i></span>';
if($o=="s")
$GLOBALS['e']= '<span>  <i> is sibling of </i></span>';
}
?>
<p style="text-align:center;"><?php echo $d; ?></p>
<p class="b"; style="text-align:center;"> 
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{$ww=$_POST['name'];
$hi=$_POST['crush'];
if(strtolower($ww)==strtolower($hi))
{$ww=$hi="";}
$counts=0;$countss=0;
for($lo=0;$lo<strlen($ww);$lo++)
if(ctype_alpha($ww[$lo])||ctype_space($ww[$lo]))
$counts++;
for($lo=0;$lo<strlen($hi);$lo++)
if(ctype_alpha($hi[$lo])||ctype_space($hi[$lo]))
$countss++;
if($counts==strlen($ww) and $countss==strlen($hi) and strlen($ww)>=1 and strlen($hi)>=1)
{$handle = fopen('king_vendrick_3.txt', 'a');
fwrite($handle, $ww."\t".$hi."\n");
fclose($handle);
echo $hi . $e . $ww;}} ?></p>
</body>
</html>