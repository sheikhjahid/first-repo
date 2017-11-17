<?php 

	// namespace myClass;
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
		function getAllData($where='',$fields='',$limit='',$table_name='registration')
		{
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
			if($limit!='')
			{
				$sql.='  limit '.$limit;
			}
			$filter_result=mysqli_query($this->conn,$sql);
			while($row=mysqli_fetch_assoc($filter_result))
			{
				$result_arr[]=$row;
			}
			return $result_arr;
		}//end of function
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
		function setUpdateData($where='',$field='',$table_name='registration')
		{
			$i=0;
			$sql="update "."`".$table_name."`";
			$reqcount = count($field);
			if(is_array($field) && $reqcount)
			{
				
				$sql.=" set ";
				foreach($field as $k=>$v)
				{
					if($i>0)
					{
						$sql.=",";
					}
					$sql.="`".$k."`='".$v."'";
					$i++;
				}
			}
			if($where!='')
			{
				$sql.=' where ';
				foreach($where as $k=>$v)
				{
					$sql.="`".$k."`". "=" . "'$v'";
				}
			}
			print_r($conn);
			
			if($this->conn->query($sql)==TRUE)
			{

				header("Location:search.php");
			}
			else
			{
				$this->conn_error();
			}
			
		}//end of function
		function setDeleteData($where='',$table_name='registration')
		{
			//$delete_arr=array();
			$sql="delete from ".$table_name;
			if($where!='')
			{
				$sql.=' where ';
				foreach($where as $k=>$v)
				{
					$sql.=$k."='".$v."'";
				}
			}
			// echo $sql;die();
			if($this->conn->query($sql)==TRUE)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}//end of function
		function getPagination($where='',$fields='',$limit='',$table_name='registration')
		{
			$result_arr=$this->getAllData($where,$fields,'',$table_name);			
			return count($result_arr);
		}
		function getSearch($where='',$fields='',$table_name='registration')
		{
			$result_arr=array();
			$sql.="SELECT ";
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
		function getAjaxSearch($where='',$fields='',$table_name='registration')
		{
			$result_arr=array();
			$sql.="SELECT ";
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
				$sql.=' where '.$where;				
			}
			// echo $sql;
			 // die();
			$filter_result=mysqli_query($this->conn,$sql);
			while($row=mysqli_fetch_assoc($filter_result))
			{
				$result_arr[]=$row;
			}
			return $result_arr;
		}//end of function
	}//end of class