<?php  
    require 'conn.php';     

    $tidORuid = @$_GET['tidORuid'] ? $_GET['tidORuid'] : '';   //uid  or tid
    //$fmlNu = @$_GET['fmlNu'] ? $_GET['fmlNu'] : '';
    
	if (empty($tidORuid)) {
  	 	echo json_encode(array("status"=>"401",'BKFamily'=>'false'));
   	}else{
   		
			$rs = mysql_query("UPDATE user SET U_fid = 'a',U_fid_t = 'a' WHERE id = '$tidORuid'");
		
		
    	if(mysql_affected_rows() <= 0){ 
            echo json_encode(array("status"=>"402",'BKFamily'=>'false'));
            //die(mysql_error());
            
            exit;         
			}		
			echo json_encode(array("status"=>"403",'BKFamily'=>'true'));
		}	

    	mysql_free_result($rs);  

    	mysql_close(); 
	  
?>  