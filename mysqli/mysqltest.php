<?php
class mysqlli {
	public $con;
	public $result = array ();
	public $query;
	public $recent = "还没有任何查询哦";
	function __construct($server = null, $username, $passwd, $dbname) {
		if ($server != null) {
			$temp = mysql_connect ( $server, $username, $passwd );
			if ($temp) {
				$this->con = $temp;
				$temp = mysql_select_db ( $dbname, $this->con );
				if ($temp) {
					mysql_set_charset ( 'utf-8', $this->con );
				} else {
					echo "error1";
				}
			} else {
				exit ( "对不起" );
			}
		}
	}
	
	// mysql查询
	function query($query) {
		$this->query = $query;
		$result = mysql_query ( $query );
		if (! $result) {
			echo "<br /> sorry!";
		} else {
			if (! $result) {
				echo "<br />对不起数据提取失败";
			} else {
				$this->result = $this->mysql_fetch_full_result_array ( $result );
				$this->recent = $this->result;
				return $this->result;
			}
		}
	}
	function mysql_fetch_full_result_array($result) {
		$table_result = array ();
		$r = 0;
		while ( $row = mysql_fetch_assoc ( $result ) ) {
			$arr_row = array ();
			$c = 0;
			while ( $c < mysql_num_fields ( $result ) ) {
				$col = mysql_fetch_field ( $result, $c );
				$arr_row [$col->name] = $row [$col->name];
				$c ++;
			}
			$table_result [$r] = $arr_row;
			$r ++;
		}
		return $table_result;
	}
}
?>
