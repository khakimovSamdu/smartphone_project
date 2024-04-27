<?php
    $host = "localhost";
    $user = "root";
    $parol = "";
    $db_name = "phone_project";
    $link = mysqli_connect($host, $user, $parol, $db_name);
    if(!$link){
        echo "MB ulanmadi";
        exit("Stop!");
    }
    
    // else{
    //     echo "MB ulandi";
    // }
    // print_r($link);

    class CILENT{
        public function getdata($table,$arr,$cond="no")
		{
			$sql = "SELECT * FROM ".$table." WHERE ";
			$t = "";
			$n = count($arr);
			$i = 0;
			if($cond=="no"){
				foreach ($arr as $key => $value) {
					$i++;
					if($i==$n){
						$t .= "$key='$value'";
					}
					else{
						$t .= "$key='$value'  AND ";
					}
				}
				$sql .= $t;
			}
			else{
				$sql .= $cond;
			}			
			$fetch = mysqli_fetch_assoc($this->query($sql));
			return $fetch;
		}
    }
?>