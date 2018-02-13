<?php 
sleep(1);
header('Content-Type:application/json');

$users = array('张三','李四','王二麻','哈哈','呵呵' );

if (isset($_GET['newname'])) {
	$newname=$_GET['newname'];
	$num=count($users);
	$users[$num]=$newname;
	echo json_encode('注册成功');
	// echo "注册成功";
	// echo json_encode($users);
	}

if (isset($_GET['name'])) {
	$name=$_GET['name'];

	$you=false;
	for ($i=0; $i <count($users) ; $i++) { 
		if ($name===$users[$i]) {
			$you=true;
		}
	}

	class A{
		public $message,$status;
		public function __construct($a,$b){
			$this->message=$a;
			$this->status=$b;
		}
	}

	if ($you) {
		$aa=new A("很遗憾，用户名已注册","cannot");
		echo json_encode($aa);
	}
	else{
		$bb=new A("恭喜你可以注册","can");
		echo json_encode($bb);
		

	}
}


 ?>