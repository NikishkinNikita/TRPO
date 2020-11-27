<?php
class A
{
	function line($a, $b){
	    if($a==0){return null;}
        return $this->x=-$b/$a;
	}
	protected $x;
}
class B extends A
{
	function square($a, $b, $c){
	    if($a==0) return parent::line($b, $c);
    	$d=$this->discriminant($a, $b, $c);
		
    	if($d==0) {
			$d=sqrt($d);
			return $this->x=array((-$b+$d)/(2*$a));
    	}

		if($d>0){
			$d=sqrt($d);
			return $this->x=array((-$b+$d)/(2*$a),(-$b-$d)/(2*$a));
		}
		return null;
	}
	protected function discriminant($a, $b, $c){
	    return (($b*$b)-4*$a*$c);
	}
}
$a1=new A();
$b2=new B();
$a1->line(0, -6);
$b2->square(2, 8, 2);
var_dump($a1);
var_dump($b2);