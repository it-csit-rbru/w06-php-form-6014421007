<?php
    echo "รหัสนักศึกษา : ".$sid = $_REQUEST['sid']."<br>";
    echo "ชื่อ : ".$fname = $_REQUEST['fname']."<br>";
    echo "นามสกุล : ".$lname = $_REQUEST['lname']."<br>";
    echo "สาขาวิชา : ".$program = $_REQUEST['program']."<br>";
    echo "คณะ : ".$facilty = $_REQUEST['facilty']."<br>";
    echo "ปี : ".$sid_year = $_REQUEST['sid_year']."<br>";
    echo "โครงการชื่อไทย : ".$prj_name_th = $_REQUEST['prj_name_th']."<br>";
    echo "โครงการชื่ออังกฤษ : ".$prj_name_en = $_REQUEST['prj_name_en']."<br>";
    $prj_tool = $_REQUEST['prj_tool']."<br>";
    print_r ($prj_tool);
    echo "อาจารย์ที่ปริกษา : ".$prj_advisor = $_REQUEST['prj_advisor']."<br>";
