<?php
function getImageFromArray($ar,$num) {
$image = array();
for($i=0;$i<$num;$i++)
{
$image[$i] = $ar[$i];
}
return $image;
}

function getImagesFromDir($path) {
$images = array();
if ( $img_dir = @opendir($path) ) {
while ( false !== ($img_file = readdir($img_dir)) ) {
// checks for gif, jpg, png
if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
$images[] = $img_file;
}
}
closedir($img_dir);
}
return $images;
}
 
$root = '';
// nếu folder images không phải là thư mục con của đường dẫn file thì bạn phải tạo thế này
//$root = $_SERVER['DOCUMENT_ROOT'];
$path = 'data/results/';
 
//lấy danh sách hình ảnh từ đường dẫn
$imgList = getImagesFromDir($root . $path);

$n = count($imgList);
$img =  getImageFromArray($imgList,$n);
?>
<br>
<?php
$fp = @fopen('output.txt', "r");
  
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file output.txt không thành công';
}
else
{
    // Lặp qua từng ký tự để đọc
    while(!feof($fp))
    {
        echo fgetc($fp);
    }
	fclose($fp);
}
?>
<br>

<hr width="80%">
<br>
<?php
for($i=0;$i<$n;$i++) { ?>
<img class="d-block w-100"  height="100%" src="<?php echo $path . $img[$i] ?>" alt="" />
<br>
<?php } ?>