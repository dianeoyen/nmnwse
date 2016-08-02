<?php 

 function startExcel() {
    echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);  
    return;
}

function EndExcel() {
    echo pack("ss", 0x0A, 0x00);
    return;
}

function xlsWriteNumber($Row, $Col, $Value) {
    echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
    echo pack("d", $Value);
    return;
}

function xlsWriteLabel($Row, $Col, $Value ) {
    $L = strlen($Value);
    echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
    echo $Value;
return;
} 
//Query Database
	
$link = mysql_connect('mysql.nmnwse.org','nmnwse_org','3TmTzJr8lFsHI18v');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('nmnwse_org');

    $result=mysql_query("select fname,lname,address1,address2,city,state,zip,phone,email,school,grade,
teacher_sponsor,stem,interest,attend,needs,allergies,accept,parent,parent_phone,emergency,relationship,emergency_phone from nmnwse_org.registration");	

    // Send Header
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    header("Content-Disposition: attachment;filename=registerd_users_datafile.xls "); // ?????????????????
    header("Content-Transfer-Encoding: binary ");

    // XLS Data Cell

                startExcel();
        
                xlsWriteLabel(5,0,"NO");
                xlsWriteLabel(5,1,"First Name");
                xlsWriteLabel(5,2,"Last Name");
                xlsWriteLabel(5,3,"Address1");
                xlsWriteLabel(5,4,"Address2");
				xlsWriteLabel(5,5,"City");
				xlsWriteLabel(5,6,"State");
				xlsWriteLabel(5,7,"Zip");
                xlsWriteLabel(5,8,"Email");
				xlsWriteLabel(5,9,"School");
				xlsWriteLabel(5,10,"Grade");
                xlsWriteLabel(5,11,"Teacher Sponsor");
                xlsWriteLabel(5,12,"stem");
                xlsWriteLabel(5,13,"Interest");
                xlsWriteLabel(5,14,"Attend");
				xlsWriteLabel(5,15,"Needs");
				xlsWriteLabel(5,16,"Allrgies");
				xlsWriteLabel(5,17,"Accept");
                xlsWriteLabel(5,18,"Parent");
				xlsWriteLabel(5,19,"Parent Phone");
				xlsWriteLabel(5,20,"Emergency");
				xlsWriteLabel(5,21,"Relationship");
				xlsWriteLabel(5,22,"Emergency Phone");
                
				$xlsRow = 7;
                while(list($fname,$lname,$address1,$address2,$city,$state,$zip,$phone,$email,$school,$grade,$teacher_sponsor,$stem,$interest,$attend,$needs,$allergies,$accept,$parent,$parent_phone,$emergency,$relationship,$emergency_phone)=mysql_fetch_row($result)) {
                    ++$i;
                          xlsWriteNumber($xlsRow,0,"$i");
                          xlsWriteLabel($xlsRow,1,"$fname");	
                          xlsWriteLabel($xlsRow,2,"$lname");
                          xlsWriteLabel($xlsRow,3,"$address1");
                          xlsWriteLabel($xlsRow,4,"$address2");                           					                          xlsWriteLabel($xlsRow,5,"$city");
						  xlsWriteLabel($xlsRow,6,"$state");
						  xlsWriteLabel($xlsRow,7,"$zip");
                          xlsWriteLabel($xlsRow,8,"$phone");                           					                          xlsWriteLabel($xlsRow,9,"$email");
						  xlsWriteLabel($xlsRow,10,"$school");	
                          xlsWriteLabel($xlsRow,11,"$grade");
                          xlsWriteLabel($xlsRow,12,"$teacher_sponsor");
                          xlsWriteLabel($xlsRow,13,"$stem");                           					                          xlsWriteLabel($xlsRow,14,"$interest");
						  xlsWriteLabel($xlsRow,15,"$attend");
						  xlsWriteLabel($xlsRow,16,"$needs");
                          xlsWriteLabel($xlsRow,17,"$allergies");
                          xlsWriteLabel($xlsRow,18,"$accept");                           					                          xlsWriteLabel($xlsRow,19,"$parent");
						  xlsWriteLabel($xlsRow,20,"$parent_phone");	
                          xlsWriteLabel($xlsRow,21,"$emergency");
						  xlsWriteLabel($xlsRow,22,"$relationship");	
                          xlsWriteLabel($xlsRow,23,"$emergency_phone");
                    $xlsRow++;
                    }
                     EndExcel();
                 exit();



?>