<?php
$file = "example.txt";
// 'r' : đọc
// nếu mở flie thanh công nó sẽ đọc vào dòng chữ I love you..
if($handle = fopen($file,'r')){

 echo $content = fread($handle, filesize($file));
// đóng flie -> bắt buộc
    fclose($handle);

}else{
echo "The application was not able to wrtie on the files";
}

