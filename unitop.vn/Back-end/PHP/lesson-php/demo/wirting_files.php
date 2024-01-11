<?php
$file = "example.txt";
// 'w': Ghi vào 
// nếu mở flie thanh công nó sẽ ghi vào dòng chữ I love you..
if($handle = fopen($file,'w')){

    fwrite($handle, 'I love PHP and this really good strff');
// đóng flie -> bắt buộc
    fclose($handle);

}else{
echo "The application was not able to wrtie on the files";
}

