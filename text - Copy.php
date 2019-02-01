<?php
//no 1
$a = 2;
$b = & $a;
echo $b;
echo "\n";

//no 2
echo strstr('111222333', '222',TRUE);

//no 3
$a = 6 + '12.2';
echo gettype($a);
echo $a;
$b = (integer) $a;
echo $b;

//Double18.218
echo nl2br("\n");
//no 4
//(5.4.x) If $res equals 60, what is the missing code?
class sqre
{
    protected $x = 2;
    protected $y = 5;
    public function getSface()
    {
        return $this->x * $this->y;
    }
}

$cyl = function ($height) {
    return $this->getSface() * $height;
};

$result = Closure::bind($cyl, new sqre());
echo $res = $result(6); //60
echo nl2br("\n");
//no 5
//Returns the variable representation when the return parameter is used and evaluates to TRUE. Otherwise, this function will return NULL.
$a = 10;
echo $b = var_export($a, true);
echo nl2br("\n");

//no 6
class calc
{

    public static function add($x, $y = 7)
    {
        return $x + $y;
    }

}
echo $c = calc::add(10, 5);
echo nl2br("\n");
//no 7

$a =13;
$b ='13';
echo $a == $b;

echo nl2br("\n");

//no 8

$arr = array();
$arr[] = 1;
$arr[] = 22;

unset($arr[1]);

$arr[] = 34;

$arr[] = 89;

$arr = array_values($arr);
 echo $arr[2];
 echo nl2br("\n");
 
 //no 9
 class A
{
    public $i1 = 1;
    public $i2 = 2;
    public $i3 = 3;
    protected $i4 = 4;
    private $i5 = 5;

    function sum()
    {
	$b = 0;
	foreach ($this as $i) {
		//echo $i;
	    $b += $i;
	}
	return $b;
    }

}

$A = new A;
echo $b = $A->sum();
 echo nl2br("\n");

//no 10
$a = array('a','c');
array_unshift($a, 'f','g');
echo implode('',$a);
 echo nl2br("\n");

//no 11
function foo() 
{
  function bar() 
  {
    echo "bar";
  }
}
foo();
bar();
 echo nl2br("\n");

//no 12

$a = array(
'entry' => '6',
'data' => array(1,2,5,7)
);
$b = array(
'entry' => '7',
'data' => array(4,7,5)
);
$c = array_replace_recursive($a, $b);
$tot = 0;
foreach($c['data'] as $num){
    $tot += $num;
}
echo $tot;
 echo nl2br("\n");

//no 13
preg_match_all('/\\b[0-9]{2,4}\\b/',
'the 4000number is 1000 or more ', 
$referers);

var_export($referers);
echo nl2br("\n");

//no 14
//mcrypt(), md5() and sha1() are all symmetric encryption methods.

//15
$f = '1200.33';
echo $c = ($f === (float) $f) ? 1 : 0;

$str1 = 'Belgium is a UN member';
$str = 
$str2 = 'Belgium is a EU member';


//Which of the following does NOT result in 2567?
$arr = array(2,5,78,6,7);
????
echo implode("",$arr);

$f = '1200.33';
$b = (is_float($f)) ? 1 : 0;

function incr(&$var)
{
    ++$var;
}

$a = 0;
call_user_func_array('incr', array(&$a));

$a = "true";
echo gettype($a);
echo empty($a);
echo is_null($a);
echo isset($a);


//(PHP >= 5.3.3.) If $country has the value "catalonia" what should replace XXXX ?
class A {
    public static $name = 'europe';
}
class B extends A {
   public static $name = 'spain';
    public static function country() {
        echo  XXXX::$name;
    }
}
class C extends B {
   public static $name = 'catalonia';
}
$country = C::country();

















?>