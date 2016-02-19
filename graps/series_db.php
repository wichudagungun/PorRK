<?php  
header("Content-type:application/json; charset=UTF-8");             
header("Cache-Control: no-store, no-cache, must-revalidate");               
header("Cache-Control: post-check=0, pre-check=0", false);     
// เชื่อมต่อฐานข้อมูล  
 include_once "condb.php";

$more_q="";
if(isset($_GET['year']) && $_GET['year']!=""){
	$more_q="AND DATE_FORMAT(TIMEIN,'%y')='".$_GET['year']."' ";
}

$q="
SELECT ROOM,TIMEIN,SUM(Sumtime) as sum_Sumtime FROM reportss
WHERE 1 $more_q
GROUP BY ROOM,DATE_FORMAT(TIMEIN,'%Y-%m')
ORDER BY ROOM,TIMEIN
";

$qr=mysql_query($q);
while($rs=mysql_fetch_array($qr)){
    $char_month=substr($rs['TIMEIN'],5,2);  // หาตัวเลขสองตัวระบุเดิอน เช่น 01,12,11
    $arr_name[$rs['ROOM']]=$rs['ROOM'];  // เก็บชื่อสินค้า key เป็นไปได้ให้ใช้ id แทนชื่อจะดีกว่า
    $json_data[$rs['ROOM']][$char_month]=intval($rs['sum_Sumtime']); // เก็บข้อมูลแต่ละเดือนถ้ามี
}

// จัดรูปแบบข้อมูลก่อนแปลงเป็น json object
// วนลูปแสดง array โดยยึด key ของชื่อสินค้า ซึ่งในที่นี้จะมีสินค้าสองรายการ
if(count($arr_name)>0){
    foreach($arr_name as $val_name){ // วนลูปเพื่อใช้งาน ชื่อสินค้า
        // เทคนิคการกำหนดข้อมูลให้ครบเดือน กรณีข้อมูลของบางเดือนไม่มีในฐานข้อมูล
        for($i=1;$i<=12;$i++){
            $char_chk=str_pad($i,2,"0",STR_PAD_LEFT);
            if(!isset($json_data[$val_name][$char_chk])){ // ตรวจสอบ key เดือนไหนไม่มี
                $json_data[$val_name][$char_chk]=0; // .ให้กำหนดค่าเป็น 0
            }
        }
        ksort($json_data[$val_name]);   // จัดเรียง key ข้อมูลใหม่ ให้ไล่จาก 01,02,....,11,12
        $json_series[]=array(
            "name"=>$val_name,
            "data"=>array_values($json_data[$val_name])  // เปลี่ยน key เป็น 0,1,2,...
        );        
    }
}

$json= json_encode($json_series); // แปลงข้อมูล array เป็น ข้อความ json object นำไปใช้งาน  
// ทำให้ json ไฟล์รองรับ callback function สำหรับ cross domain
if(isset($_GET['callback']) && $_GET['callback']!=""){  
echo $_GET['callback']."(".$json.");";      
}else{  
echo $json;  
}  
exit;

?>  