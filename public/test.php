<?php
$id=$_POST['id'];
$num=delete($id);
if ($num>1){
    echo "删除成功";
}else{
    echo "删除失败";
}