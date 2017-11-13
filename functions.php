<?php 


	class Jahid_Works
	{
		protected $host='localhost';
		protected $username='root';
		protected $password='office';
		protected $db='test';
		protected $conn;
		function __construct()
		{
			$this->conn=new mysqli($this->host,$this->username,$this->password,$this->db) or mysql_error();
		}//end of constructor
		function getSpecificData($where='',$fields='',$table_name='registration')
		{
			$result_arr=array();
			$sql="SELECT ";
			if($fields!='')
			{
				$sql.=$fields;
			}
			else
			{
				$sql.="*";
			}
			$sql.=" FROM ".$table_name;
			if($where!='')
			{
				$sql.=' where ';
				foreach($where as $k=>$v)
				{
					$sql.=$k.'='.$v;
				}
			}
			$filter_result=mysqli_query($this->conn,$sql);
			while($row=mysqli_fetch_assoc($filter_result))
			{
				$result_arr[]=$row;
			}
			return $result_arr;
		}//end of function
		function getUpdateData($where='',$fields='',$table_name='registration')
		{
			$update_arr=array();
			$sql1="UPDATE ";
			if($field!='')
			{
				$sql1.= $fileds;
			}
			else
			{
				echo  "wrong command";
			}
			$sql1.=" FROM".$table_name;
			if($where!='')
			{
				$sql1.=' WHERE';
				foreach($where as $i=>$j)
				{
					$sql1.=$i.'='.$j;
				}
			}
			$update_result=mysqli_query($this->conn,$sql);
			while($row1=mysqli_fetch_assoc($update_result))
			{
				$update_arr[]=$row1;
			}
			return $update_arr;
		//$query=mysqli_query($this->conn,$sql);
		//return $query;
	}//end of function

	}//end of class
?>


