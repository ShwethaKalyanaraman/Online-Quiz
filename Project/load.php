<?php 
	$conn=new mysqli("localhost","root","","logindetails");
	$code=$_REQUEST['c'];
	//fetch questions in shuffled order
	if($code==1){
		$q_json=array(); $i=0;
		$sql="select question_id from question";
		$result=$conn->query($sql);
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
				
					$q_json[$i++]=$row['question_id'];
				}
			}
			$sql1="create table session(question_id int primary key,choice varchar(20),answer varchar(20))";
			$conn->query($sql1);
			shuffle($q_json);
			echo json_encode($q_json);


	}
	//fetch first question with options and next and previous question
	if($code==2){

		$sql="select * from question where question_id=".$_REQUEST['qid'];
		$sql1="select * from choice where question_id=".$_REQUEST['qid'];
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();

		$result1=$conn->query($sql1);
		$row1=$result1->fetch_assoc();

		$data['question']=$row['question'];
		$data['opt1']=$row1['choice1'];
		$data['opt2']=$row1['choice2'];
		$data['opt3']=$row1['choice3'];
		$data['opt4']=$row1['choice4'];

			

		
		

		echo json_encode($data);
		
	}
	if($code==3){

		if($_REQUEST['flag']==0){
			$sql1="select * from answer where question_id=".$_REQUEST['qid'];
			$result=$conn->query($sql1);
			$row=$result->fetch_assoc();
			$sql="insert into session values(".$_REQUEST['qid'].",'".$_REQUEST['val']."','".$row['answer']."')";
			$conn->query($sql);
		}
		else{
			$sql="update session set choice='".$_REQUEST['val']."' where question_id=".$_REQUEST['qid'];
			$conn->query($sql);
		}
	}

	//optain result
	if($code==4){
		$score=0;
		$sql="select * from session";
		$result=$conn->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){

				if($row['choice']==$row['answer'])
					$score++;
			}
		}
		echo $score;

		$sql1="drop table session";
		$conn->query($sql1);
	}
	

?>