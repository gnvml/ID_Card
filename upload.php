<?php
if (isset($_POST) && !empty($_FILES['file'])) {
	$files = glob('Images/*'); //lấy tất cả các tập tin
	foreach($files as $file){
   	 if(is_file($file))
   	 unlink($file); //Xáo tập tin
	}
        // tiến hành upload
        if (move_uploaded_file($_FILES['file']['tmp_name'], './Images/'.$_FILES['file']['name'])) {
            // Nếu thành công
            die('Upload thành công file: ' . $_FILES['file']['name']); //in ra thông báo + tên file
        } else { // nếu không thành công
            die('Có lỗi!'); // in ra thông báo
        }
    
} else {
    die('Lock'); // nếu không phải post method
}
