<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tu Dien</title>
</head>
<style>
    input[type=text]{
        width: 300px;
        font-size: 16px;
        border:2px solid #CCCCCC;
        border-radius: 4px;
        padding : 12px 10px 12px 10px;

    }
    #submit{
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }

</style>
<body>
<h2>Tu Dien Anh Viet</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhap tu can tim kiem"/>
    <input type="submit" id="submit" value="Tim Kiem"/>
</form>
<?php
$dictionary=array(
    "hello"=>"xin chao",
    "how"=> "the nao",
    "book"=>"quyen vo",
    "computer"=> "May tinh"
);
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $searchword=$_POST["search"];
    $flag=0;
    foreach ($dictionary as $word=>$dicription){
        if($word==$searchword){
            echo "Tu ".$searchword."<br/>Nghia cua tu:".$dicription;
            $flag=1;
        }
    }
    if($flag==0){
        echo "Khong tim thay tu can tra!";
    }
}

?>
</body>
</html>
