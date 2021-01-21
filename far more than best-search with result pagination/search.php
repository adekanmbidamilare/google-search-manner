<?php require_once('connection.php'); 

$range=10;
$divide="";
$back="";
$cate="";
$page=0;
?>


<html>
<head>
<title>copied responsive web</title>
<link rel="stylesheet" type="text/css" href="file:///C:/user/ADEKANMBI%20DAMILARE/Desktop/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">
<link rel="stylesheet" type="text/css" href="cssdisplay/cssdisplayhead.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.responsive.min.css">

<style type="text/css">

    </style>
</head>
<body>

    <div class="nav_header">
        <div class="nav_title"><div class="inner-nav-title"><form action="search.php" method="GET" >B..<input book="search" type="text" id="search" name='search' placeholder="search.." style="width:100px;height:25px"><button type="submit" style="padding: 5px;background-color: silver;color:blue;margin-top:-10px;border-radius: 3px;border: none;">>></button></div></div>
        </div>
        
    
        <div class="horizontal-nav">
           <div class="hor">
           <ul><a href="index.html"><li>HOME</li></a>
                    <a href="comment.php"><li>COMMENT</li></a>
                    <a href="news.html"><li>NEWS</li></a>
                    <a href="contact.html"><li>CONTACT</li></a>
                    <a href="about.html"><li>ABOUT</li></a>
                    </ul>
           </div>
        </div>





       <div class="main-section-container">

                    <div class="nav">
                            <div class="nav_btn">
                            <label for="nav_check">
                         
                             <span></span>
                             <span></span>
                             <span></span>
                            </label>
                            </div>
                            <input type="checkbox" book="" id="nav_check">
                            <div class="nav_links">
                            
                            
                            
                            
                            
                                    <a href="programming.html">Programming Textbooks</a>
                                    <a href="displaycatone.php">Others Category1</b></a>
                                    <a href="displaycattwo.php">Others Category2</a>
                                
                            
                            
                            
                            
                                
                            
                            
                            
                            
                            </div>
                            </div>
                                            <div class="container" style="width:100%">
                                
                            
                                            
                                        
                                                <p class="section-intro" style="padding-top: 40px;padding-bottom: 0px;margin-bottom: 0px;color:red;
    margin: 5px;padding-left: 10px;padding-right: 10px;font-size: 15px;background:linear-gradient(blue,black,aqua)">SEARCH RESULT PAGE</p>
                                                <div style="height:200px;border:1px solid black;text-align:center;margin-right:10px;margin-left:10px">Advert!</div>
                                               
                                                
                                                <marquee style="background:linear-gradient(blue,black,aqua);color:white">....... Do you find it difficult to find your book among the row search result? Kindly take your time to look at the result OR..., You could search again by another relative keyword OR.. input the author's name alone into the search bar....OR check the bottom result, you could find it there....  </marquee><br/>
<form method="GET" action="search.php">Keywords:<input value="EKSU MTH" name="cate" type="submit"><input value="Eloquent javascript" name="cate" style="margin-left:5px" type="submit"><input value="PHP textbooks" style="margin-left:3px" name="cate" type="submit"></form>
                                                <p class="welcome-section2"  style="overflow:auto">    <center><b>BOOK </b><b> >> </b><b> AUTHOR </b><b> >> </b><b> FILE</b></center>
                                                
<?php

if(!isset($_GET["page"])){$page=1;}
    else{$page=$_GET["page"];}
if(isset($_GET['cate'])){ 
$cate=$_GET["cate"];
    $searchqq = $_GET['cate'];
    $start_from=($page-1)*5;
    
    $range=10;
    if(!isset($searchqq[0])) $searchqq[0]='NULL';
    if(!isset($searchqq[1])) $searchqq[1]='NULL';
    $searchqq=explode(" ", $searchqq);
    
    $searchqq=$searchqq[0] AND "NULL" OR $searchqq[1] ;
    $searchqq = preg_replace("#[^ 0-9a-z.-_/;]#i","",$searchqq);


    if(!isset($searchqq[0])) $searchqq[0]='NULL';
    if(!isset($searchqq[1])) $searchqq[1]='NULL';


    $query = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%') 
   union
    (SELECT * FROM css WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM js WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM react WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM angular WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM bootstrap WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM c WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM cplus WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM csharp WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM java WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM php WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM phyton WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM catone WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM cattwo WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%') ORDER BY book LIKE '%". $searchqq. "%' DESC, author LIKE '%". $searchqq. "%' DESC ");
    $totall=mysqli_num_rows($query);
    $divide=ceil($totall/$range);


    //while($row=mysqli_fetch_array($query)){
      //  $bname = $row['book'] ;
      //  $aname = $row['author'];
       // $fname = $row['file'];
       // $id = $row['id']; 
        //echo "<table align=center border=0> 
        //<tr border=0 style='margin:3px'><td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$bname</td>
        //<td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$aname</td>
        //<td border=0 style='background-color:Deepskyblue;border-radius:10px;padding:7px'><a title='Click here to download in file.' 
           //                     href='{$row['file']}'> download </a>
         //   </td></tr></table>";
            
  //  }

     $start_from;

    
    $query = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%') 
   union
    (SELECT * FROM css WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM js WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM react WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM angular WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM bootstrap WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM c WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM cplus WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM csharp WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM java WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM php WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM phyton WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM catone WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%')
   union
    (SELECT * FROM cattwo WHERE book LIKE '%". $searchqq[0]. "%' AND book LIKE '%". $searchqq[1]. "%' OR author LIKE '%". $searchqq. "%' OR file LIKE '%". $searchqq. "%') ORDER BY book LIKE '%". $searchqq. "%' DESC, author LIKE '%". $searchqq. "%' DESC LIMIT ".$start_from.','.$range);
    while($row=mysqli_fetch_array($query)){
        $bname = $row['book'] ;
        $aname = $row['author'];
        $fname = $row['file'];
        $id = $row['id']; 
        echo "<table align=center border=1> 
        <tr border=0 style='margin:3px'><td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$bname</td>
        <td style='background-color:gray;color:white;padding:7px' colspan=70 border=0>$aname</td>
        <td border=0 style='background-color:Deepskyblue;border-radius:10px;padding:7px'><a title='Click here to download in file.' 
                                href='{$row['file']}'> download </a>
            </td></tr></table>";
    }
?>







<!-- line 23to30 at 4:59-->
<?php }
else if(isset($_GET['search'])){ $searchq = $_GET['search'];
    $back=$_GET['search'];
 $searchq = $_GET['search'];
   
    $start_from=($page-1)*5;

    $range=10;
    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';
    $searchq=explode(" ", $searchq);
    
    $searchq=$searchq[0] AND "NULL" OR $searchq[1] ;
    $searchq = preg_replace("#[^ 0-9a-z.-_/;]#i","",$searchq);


    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';
    
?>



<?php





    $qw = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') 
   union
    (SELECT * FROM css WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM js WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM react WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM angular WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM bootstrap WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM c WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM cplus WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM csharp WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM java WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM php WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM phyton WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM catone WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM cattwo WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') ORDER BY book LIKE '%". $searchq. "%' DESC, author LIKE '%". $searchq. "%' DESC");
$total=mysqli_num_rows($qw);

$divide=ceil($total/$range);
   // while($row=mysqli_fetch_array($qw)){
     //   $bname = $row['book'] ;
      //  $aname = $row['author'];
      //  $fname = $row['file'];
       // $id = $row['id']; 
       // echo "<table align=center border=0> 
       // <tr border=0 style='margin:3px'><td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$bname</td>
       // <td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$aname</td>
       // <td border=0 style='background-color:Deepskyblue;border-radius:10px;padding:7px'><a title='Click here to download in file.' 
          //                      href='{$row['file']}'> download </a>
          //  </td></tr></table>";
            
} 
if(isset($_GET['search'])){ $searchq = $_GET['search'];
$back=$_GET['search'];
 $searchq = $_GET['search'];
   
    $start_from=($page-1)*5;
    
$range=10;
    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';
    $searchq=explode(" ", $searchq);
    
    $searchq=$searchq[0] AND "NULL" OR $searchq[1] ;
    $searchq = preg_replace("#[^ 0-9a-z.-_/;]#i","",$searchq);


    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';


$qw = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') 
union
 (SELECT * FROM css WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM js WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM react WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM angular WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM bootstrap WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM c WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM cplus WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM csharp WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM java WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM php WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM phyton WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM catone WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM cattwo WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') ORDER BY book LIKE '%". $searchq. "%' DESC, author LIKE '%". $searchq. "%' DESC LIMIT ".$start_from.','.$range);

while($row=mysqli_fetch_array($qw)){
    $bname = $row['book'] ;
    $aname = $row['author'];
    $fname = $row['file'];
    $id = $row['id']; 
    echo "<table align=center border=1> 
    <tr border=0 style='margin:3px'><td style='background-color:black;color:white;padding:7px' colspan=70 border=0>$bname</td>
    <td style='background-color:gray;color:white;padding:7px' colspan=70 border=0>$aname</td>
    <td border=0 style='background-color:silver;border-radius:5px;padding:7px'><a title='Click here to download in file.'  style='color:blue'
                            href='{$row['file']}'> download </a>
        </td></tr></table>";
        
}}
?>


<ul style="display:flex;font-size:25;list-style:none">
<?php
if(isset($_GET["cate"])){
    for($i=1;$i<=$divide;$i++){
        if($i==$page)

        echo '<li style="background-color:white;border:2px solid blue;margin:5px;padding:4px"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?cate='.$cate.'&page='.$i.'">'.$i.'</a></li>';
        else
        echo '<li style="background-color:white;color:black;border:2px solid blue;margin:5px;padding:4px"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?cate='.$cate.'&page='.$i.'">'.$i.'</a></li>';
    }
}else if(isset($_GET["search"])){$searchq=$_GET['search'];
    for($i=1;$i<=$divide;$i++){if($i==$page)
        echo '<li style="margin:5px;padding:4px"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?search='.$searchq.'&page='.$i.'">'.$i.'</a></li>';
        else
        echo '<li style="background-color:white;color:black;border:2px solid blue;margin:5px;padding:4px"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?search='.$searchq.'&page='.$i.'">'.$i.'</a></li>';
    }
}
?>
</ul>







                                           </p>
                            
                            
                           
                                                
                                                




                        
                                                <footer>
                                                   <small>
                                                        Dley website <br/>
                                                        Design
                                                    </small>
                                                </footer>
                            
                                            </div>
                                
                                
                                            
                                        
                                            
                                
                           
                                
                                        
                           
                        
                        
       </div> 
        
        
          
       <div class="last-main-footer">
        <div class="footer-container">
            <div class="last-footer">
                <div class="footer1">
                Dley web Designing<br/>
                @ 2020 production<br/>
                Satisfying your needs<br/>
                 
                </div>
                <div class="footer2">
                    contact us by:<br/>
                   visiting contact section;<br/>
                   where you'll see our<br/>
                    author address or,<br/>
                    facebook Raddress<br/>
                   
                 </div>
             <div class="footer3">
                  Your advise can never be overemphases<br/>
                  Our company are also ready to,<br/>
                  listen to your complain & comments.<br/>
                  
             </div>
            </div>
        </div>
       </div>    


    </body>
    </html>