<?php
$conn = mysqli_connect('localhost','root','','mtextbook') or die('could not connect');

$output='';
// collect

if(isset($_POST['search'])){
    

    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z.'-_/;]#i","",$searchq);

  
   
    if(!isset($searchq[1])) $searchq[1]='NULL';

    $query = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') ORDER BY book LIKE '%". $searchq. "%' DESC, author LIKE '%". $searchq. "%' DESC;") or die("could not search!");
    $count = mysqli_num_rows($query);
    if($count==0){
        $output= 'There was no output search result. Type only the book name OR only the author name....';
    }else{
        while($row=mysqli_fetch_array($query)){
            $bname = $row['book'] ;
            $aname = $row['author'];
            $fname = $row['file'];
            $id = $row['id'];
            $output .="<table align=center border=0>
            
            <tr border=0><td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$bname</td>
            <td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$aname</td>
            <td border=0 style='background-color:Deepskyblue;border-radius:10px;padding:7px'><a title='Click here to download in file.' 
            href='{$row['file']}'> download </a>
                </td></tr></table>";



           
           
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search result</title>
    <style type="text/css">
    input{width: 120px;}
    .min-searchclass{display: none;}
    .content{max-width: 1000px;margin: 0px auto;background-color:white;border-radius:40px;min-height:500px}
    .page-title{text-align: center;}

    *{box-sizing: border-box;}
    body{margin: 0px;font-family: 'segoe ui';background-color:grey}
    .nav{width:100%;height:100px;background-color: #050505;position:relative}
    .nav .nav_header{display: inline-block;font-size: 22px;color:#002e5b;padding: 10px;}
    .nav .nav_btn{display: none;}
    .nav .nav_links{display:flex;float: right;font-size:18px;margin-right:50px;margin-top: 15px;}
    .nav .nav_links span{padding: 10px;margin: 5px;}
    .nav .nav_links a{display: inline-block;padding: 13px 10px 13px 10px;text-decoration: none;color: white;text-align: center;}
    .nav .nav_links a:hover{background-color: #002e5b;color: #fde428;}
    .nav #nav_check{display: none}
    @media(max-width: 800px){
        .nav .nav_btn{display:inline-block;position: absolute;top:20px;right: 0;}
        .nav .nav_btn label{display: inline-block;width: 50px;height: 50px;padding: 13px;}
        .nav .nav_btn label:hover{background-color: #e9d226;}
        .nav .nav_btn label span{display: block;width: 25px;height: 10px;border-top:2px solid coral}
        .nav .nav_links{position: absolute;display: block;width: 100%;background-color: rgb(235, 184, 165);height: 0px;transition:0.3s all ease-in-out;overflow-y:hidden;top:80px;left:0}
        .nav .nav_links span{display: none;}
        .nav .nav_links a{display: block;width: 100%;text-align: center;}
        .nav #nav_check:not(:checked) + .nav_links{height: 0px;}
        .nav #nav_check:checked + .nav_links{height: 52vh;overflow-y: auto;}
        .min-searchclass{float: left;margin-right: 10px;display: inherit;color:black}
        input{width: 90px;}
    }
    </style>
</head>
<body>
    <div class="nav">
        <div class="nav_header">
            <div class="nav_title">
                <span style="font-size: 25px;font-weight: bold;color: coral">TEXTBOOK</span>
                <span style="font-size: 35px;color: white;">4</span>
                <span style="font-size: 25px;color: coral">ME</span>
            </div>
        </div>
       

        <div class="min-searchclass"><form action="search.php" method="POST" ><input type="text" name="search" placeholder="type firstword..."><button type="submit">search</button></form></div>



        <div class="nav_btn">
            <label for="nav_check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <input type="checkbox" name="" id="nav_check">
        <div class="nav_links">
            <a href="displayjs.php">Home</a>
            <a href="#">Home</a>
            <a href="#">Home</a>
            <a href="#">Home</a>
            <a href="#">Home</a>
            <span class="searchme"><form action="search.php" method="POST" ><input type="text" name="search" placeholder="type firstword..."><button type="submit">>></button></form></span>
        </div>
    </div>

    
    
    <div class="content">
        <div class="page-title"><h2><u>SEARCH RESULT PAGE</u></h2></div>
        
       
        <?php     
print("$output");

?>
    







      
        
        <br>
        <br>
        <br>
    </div>
     
</body>
</html>