<?php require_once('connection.php'); 

$range=10;
$divide="";
$back="";
$cate="";
$page=0;
?>


<html>
<head>
	<!--Meta descriptions and meta title for google search results SEO
	======================================================-->
	<meta charset="utf-8">
	<meta name="description" content="Free promotionals PDF or E-book or textbooks download website. This site makes it easier for pdf finders to easily downloads their promotionals E-books">
	
	<!--Mobile SPecific Metas-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="Free promotionals PDF or E-book or textbooks download website, free books download website">
	<meta name="author" content="">
	
	<title>Free E-books,PDF or Textbooks downloading website</title>
	
	
	<!--Facebook Meta Description for will be displayed in facebook only-->
	<meta property="og:title" content="Download Free E-books,Textbooks or PDF" />
	<meta property="og:description" content="Download Free E-books,Textbooks or PDF | Promotion textbooks download " />
	<meta property="og:image" content="" />
	
	
	
	
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.responsive.min.css">
<link rel="stylesheet" type="text/css" href="cssdis/cssdisplay.css">    


<style type="text/css">

</style>
</head>

<body>
	<div class="nav_headerr">
        <div class="nav_titlee"><img src="picture/logo.jpg" style="max-height:80px;max-width:80px" alt="logo pics"></div>
    </div>
	<div class="hor">
        <div class="horizontal-nav" >
            <ul><a href="index.html"><li><i class="fas fa-home"></i>HOME</li></a>
                <a href="comment.php"><li><i class="fas fa-arrow-alt-circle-down"></i>COMMENT</li></a>
                <a href="news.html"><li><i class="fas fa-align-justify"></i>NEWS</li></a>
                <a href="contact.html"><li><i class="fas fa-address-book"></i>CONTACT</li></a>
                <a href="about.html"><li><i class="fas fa-info-circle"></i>ABOUT</li></a>
            </ul>
        </div>
    </div>
<div class="nav">
	<div class="nav_header">
		<div class="nav_title"><form action="search.php" method="GET" ><input book="search" type="text" id="search" name='search' placeholder="search.." style="width:70%;height:30px"><button type="submit" style="padding: 7px;background-color: silver;color:rgb(120, 241, 245);margin-top:-10px;border-radius: 3px;border: none;">>></button></form></div>
	</div>
	<div class="nav_btn">
		<label for="nav_check">
		<span></span>
		<span></span>
		<span></span>
		</label>
	</div>
	<input type="checkbox" name="" id="nav_check">
	<div class="nav_links">
		<a href="programming.html">Programming Textbooks</a><span style="color: aqua;">|</span>
		<a href="displaycatone.php">Others Category1</b></a><span style="color: aqua;">|</span>
		<a href="displaycattwo.php">Others Category2</a>
	</div>



		<div class="main-char-container">
			<div class="containers">
				<div class="cc">
					<div class="cca">
						<div class="ccaa">
							<p class="section-intro" style="padding-top: 40px;padding-bottom: 0px;margin-bottom: 0px;color:red;
                                                margin: 5px;padding-left: 10px;padding-right: 10px;font-size: 15px;background:linear-gradient(black,white)">Search Page</p>
                            <br/>
							<div class="welcome-section-in">




							<marquee style="background:linear-gradient(blue,black,aqua);color:white;font-weight:bold">....... Do you find it difficult to find your book among the row search result? Kindly take your time to look at the result OR..., You could search again by another relative keyword OR.. input the author's name alone into the search bar....OR check some last pages results, you could find it there....If yet not found, goto comment and tell us about it  </marquee><br/><br/>
<form method="GET" action="search.php">Common Keywords:<input value="EKSU MTH" name="cate" type="submit"><br/><input value="javascript" name="cate" style="margin-left:5px" type="submit"><input value="PHP textbooks" style="margin-left:3px" name="cate" type="submit"></form>
                                                <p class="welcome-section2"  style="overflow:auto">  
                                                <?php if(isset($_GET['search'])) {$sq = $_GET['search']; echo "<span style='color:black'>You search for:  <b style='color:red'> $sq </b></span>";}?>
                                                
							<table class="table-bordered tbl" border="1">
							<thead>
   <tr>
    <th><font face="comic sans ms">BOOKS</font></th>
    <th><font face="comic sans ms">AUTHORS </font></th>
	<th><font face="comic sans ms">Download Files </font></th>
  </tr>
 
</thead>
  <tbody> 
                                                                                         
<?php

if(!isset($_GET["page"])){$page=1;}
    else{$page=$_GET["page"];}
if(isset($_GET['cate'])){ 
$cate=$_GET["cate"];
    $searchqq = $_GET['cate'];
    $start_from=($page-1)*10;
    
    $range=10;
    if(!isset($searchqq[0])) $searchqq[0]='NULL';
    if(!isset($searchqq[1])) $searchqq[1]='NULL';
    $searchqq=explode(" ", $searchqq);
    
    $searchqq=$searchqq[0] AND "NULL" OR $searchqq[1] ;
    $searchqq = preg_replace("#[^ 0-9a-z.-_/&;]#i","",$searchqq);


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
        //echo "<tr>";
        //echo "<td style='background-color:black;color:white;' border=0>$bname</td>";
        //echo "<td style='background-color:black;color:white;' border=0>$aname</td>";
        //echo "<td border=0 style='background-color:Deepskyblue;border-radius:10px;'><a title='Click here to download in file.' 
           //                     href='{$row['file']}'> download </a>
         //   </td>";
         //echo "</tr>";
            
  //  }

     

    
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
        echo " 
        <tr>";
        echo "<td style='background-color:black;color:white;' border=0>$bname</td>";
        echo "<td style='background-color:gray;color:white;' border=0>$aname</td>";
        echo "<td border=0 style='background-color:Deepskyblue;border-radius:10px;'><a title='Click here to download in file.' 
                                href='{$row['file']}'> download </a>
            </td>";
            echo "</tr>";
            
    }
?>







<!-- line 23to30 at 4:59-->
<?php }
else if(isset($_GET['search'])){ $searchq = $_GET['search'];
    $back=trim($_GET['search']);
 $searchq = trim($_GET['search']);
 $searchq = preg_replace("#[^ 0-9a-z.-_/&;]#i","",$searchq);
 
    $start_from=($page-1)*10;

    $range=10;
    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';
    
    if(!isset($searchq[2])) $searchq[2]='NULL';
    if(!isset($searchq[3])) $searchq[3]='NULL';
    
    if(!isset($searchq[4])) $searchq[4]='NULL';
    if(!isset($searchq[5])) $searchq[5]='NULL';
    
    if(!isset($searchq[6])) $searchq[6]='NULL';
    if(!isset($searchq[7])) $searchq[7]='NULL';
    
    if(!isset($searchq[8])) $searchq[8]='NULL';
    if(!isset($searchq[9])) $searchq[9]='NULL';
    
    if(!isset($searchq[10])) $searchq[10]='NULL';
    if(!isset($searchq[11])) $searchq[11]='NULL';

    if(!isset($searchq[12])) $searchq[12]='NULL';
    if(!isset($searchq[13])) $searchq[13]='NULL';
    
    if(!isset($searchq[14])) $searchq[14]='NULL';
    if(!isset($searchq[15])) $searchq[15]='NULL';
    if(!isset($searchq[16])) $searchq[16]='NULL';
    if(!isset($searchq[17])) $searchq[17]='NULL';
    
   

    
    $searchq=explode(",", $searchq);
    
      
    $searchq=$searchq[0] AND "NULL" OR $searchq[1] AND "NULL" OR $searchq[2] AND "NULL" OR $searchq[3] AND "NULL" OR $searchq[4] AND "NULL" OR $searchq[5] AND "NULL" 
    OR $searchq[6] AND "NULL" OR $searchq[7] AND "NULL" OR $searchq[8] AND "NULL" OR $searchq[9] AND "NULL" OR $searchq[10] AND "NULL" OR $searchq[11] AND "NULL" 
    OR $searchq[12] AND "NULL" OR $searchq[13] AND "NULL" OR $searchq[14] AND "NULL" OR $searchq[15] AND "NULL" OR $searchq[16] AND "NULL" OR $searchq[17] AND "NULL";


    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';
    
    if(!isset($searchq[2])) $searchq[2]='NULL';
    if(!isset($searchq[3])) $searchq[3]='NULL';
    
    if(!isset($searchq[4])) $searchq[4]='NULL';
    if(!isset($searchq[5])) $searchq[5]='NULL';
    
    if(!isset($searchq[6])) $searchq[6]='NULL';
    if(!isset($searchq[7])) $searchq[7]='NULL';
    
    if(!isset($searchq[8])) $searchq[8]='NULL';
    if(!isset($searchq[9])) $searchq[9]='NULL';
    
    if(!isset($searchq[10])) $searchq[10]='NULL';
    if(!isset($searchq[11])) $searchq[11]='NULL';

    if(!isset($searchq[12])) $searchq[12]='NULL';
    if(!isset($searchq[13])) $searchq[13]='NULL';
    
    if(!isset($searchq[14])) $searchq[14]='NULL';
    if(!isset($searchq[15])) $searchq[15]='NULL';
    if(!isset($searchq[16])) $searchq[16]='NULL';
    if(!isset($searchq[17])) $searchq[17]='NULL';
   

    
?>



<?php





    $qw = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') 
   union
    (SELECT * FROM css WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM js WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM react WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM angular WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM bootstrap WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM c WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM cplus WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM csharp WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM java WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM php WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM phyton WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM catone WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union
    (SELECT * FROM cattwo WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') ORDER BY book LIKE '%". $searchq. "%' DESC, author LIKE '%". $searchq. "%' DESC");
$total=mysqli_num_rows($qw);

$divide=ceil($total/$range);
   // while($row=mysqli_fetch_array($qw)){
     //   $bname = $row['book'] ;
      //  $aname = $row['author'];
      //  $fname = $row['file'];
       // $id = $row['id']; 
       //echo " 
        //<tr>";
        //echo "<td style='background-color:black;color:white;' border=0>$bname</td>";
        //echo "<td style='background-color:black;color:white;' border=0>$aname</td>";
        //echo "<td border=0 style='background-color:Deepskyblue;border-radius:10px;'><a title='Click here to download in file.' 
           //                     href='{$row['file']}'> download </a>
         //   </td>";
         //echo "</tr>";
            
} 
if(isset($_GET['search'])){ $searchq = $_GET['search'];
$back=trim($_GET['search']);
 $searchq = trim($_GET['search']);
 $searchq = preg_replace("#[^ 0-9a-z.-_/&;]#i","",$searchq);
    $start_from=($page-1)*10;
    
$range=10;
    
    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';
    
    if(!isset($searchq[2])) $searchq[2]='NULL';
    if(!isset($searchq[3])) $searchq[3]='NULL';
    
    if(!isset($searchq[4])) $searchq[4]='NULL';
    if(!isset($searchq[5])) $searchq[5]='NULL';
    
    if(!isset($searchq[6])) $searchq[6]='NULL';
    if(!isset($searchq[7])) $searchq[7]='NULL';
    
    if(!isset($searchq[8])) $searchq[8]='NULL';
    if(!isset($searchq[9])) $searchq[9]='NULL';
    
    if(!isset($searchq[10])) $searchq[10]='NULL';
    if(!isset($searchq[11])) $searchq[11]='NULL';

    if(!isset($searchq[12])) $searchq[12]='NULL';
    if(!isset($searchq[13])) $searchq[13]='NULL';
    
    if(!isset($searchq[14])) $searchq[14]='NULL';
    if(!isset($searchq[15])) $searchq[15]='NULL';
    if(!isset($searchq[16])) $searchq[16]='NULL';
    if(!isset($searchq[17])) $searchq[17]='NULL';
    
    
   
    $searchq=explode(",", $searchq);
    
     
    $searchq=$searchq[0] AND "NULL" OR $searchq[1] AND "NULL" OR $searchq[2] AND "NULL" OR $searchq[3] AND "NULL" OR $searchq[4] AND "NULL" OR $searchq[5] AND "NULL" 
    OR $searchq[6] AND "NULL" OR $searchq[7] AND "NULL" OR $searchq[8] AND "NULL" OR $searchq[9] AND "NULL" OR $searchq[10] AND "NULL" OR $searchq[11] AND "NULL" 
    OR $searchq[12] AND "NULL" OR $searchq[13] AND "NULL" OR $searchq[14] AND "NULL" OR $searchq[15] AND "NULL" OR $searchq[16] AND "NULL" OR $searchq[17] AND "NULL";

   
    if(!isset($searchq[0])) $searchq[0]='NULL';
    if(!isset($searchq[1])) $searchq[1]='NULL';
    
    if(!isset($searchq[2])) $searchq[2]='NULL';
    if(!isset($searchq[3])) $searchq[3]='NULL';
    
    if(!isset($searchq[4])) $searchq[4]='NULL';
    if(!isset($searchq[5])) $searchq[5]='NULL';
    
    if(!isset($searchq[6])) $searchq[6]='NULL';
    if(!isset($searchq[7])) $searchq[7]='NULL';
    
    if(!isset($searchq[8])) $searchq[8]='NULL';
    if(!isset($searchq[9])) $searchq[9]='NULL';
    
    if(!isset($searchq[10])) $searchq[10]='NULL';
    if(!isset($searchq[11])) $searchq[11]='NULL';

    if(!isset($searchq[12])) $searchq[12]='NULL';
    if(!isset($searchq[13])) $searchq[13]='NULL';
    
    if(!isset($searchq[14])) $searchq[14]='NULL';
    if(!isset($searchq[15])) $searchq[15]='NULL';
    if(!isset($searchq[16])) $searchq[16]='NULL';
    if(!isset($searchq[17])) $searchq[17]='NULL';
    




$qw = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') 
union
 (SELECT * FROM css WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM js WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM react WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM angular WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM bootstrap WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM c WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM cplus WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM csharp WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM java WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM php WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM phyton WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM catone WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
union
 (SELECT * FROM cattwo WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1]. "%' AND book LIKE '%". $searchq[2]. "%' AND book LIKE '%". $searchq[3]. "%' AND book LIKE '%". $searchq[4]. "%' AND book LIKE '%". $searchq[5]. "%' AND book LIKE '%". $searchq[6]. "%' AND book LIKE '%". $searchq[7]. "%' AND book LIKE '%". $searchq[8]. "%' AND book LIKE '%". $searchq[9]. "%' AND book LIKE '%". $searchq[10]. "%' AND book LIKE '%". $searchq[11]. "%' AND book LIKE '%". $searchq[12]. "%' AND book LIKE '%". $searchq[13]. "%' AND book LIKE '%". $searchq[14]. "%' AND book LIKE '%".$searchq[15]."%' AND book LIKE '%". $searchq[16]. "%' AND book LIKE '%". $searchq[17]. "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') ORDER BY book LIKE '%". $searchq. "%' DESC, author LIKE '%". $searchq. "%' DESC LIMIT ".$start_from.','.$range);

while($row=mysqli_fetch_array($qw)){
    
    $bname = $row['book'] ;
    $aname = $row['author'];
    $fname = $row['file'];
    $id = $row['id']; 
    echo " 
        <tr>";
       echo "<td  style='background-color:black;color:white;' border=0>$bname</td>";
        echo "<td style='background-color:gray;color:white;' border=0>$aname</td>";
        echo "<td border=0 style='background-color:Deepskyblue;border-radius:10px;'><a title='Click here to download in file.' style='color:green' 
                                href='{$row['file']}'> download </a>
            </td>";
            echo "</tr>";
                   
}}
?>
</tbody>
</table>	

<ul style="font-size:20px;list-style:none;display:-ms-flexbox;display: flex ;flex-wrap: wrap;-ms-flex-wrap: wrap;">
<?php
if(isset($_GET["cate"])){
    for($i=1;$i<=$divide;$i++){
        if($i==$page)

        echo '<li style="background-color:green;border:2px solid green;margin:5px;padding:4px;flex: 1%;-ms-flex: 1%"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?cate='.$cate.'&page='.$i.'">pg'.$i.'</a></li>';
        else
        echo '<li style="background-color:green;color:black;border:2px solid green;margin:5px;padding:4px;flex: 1%;-ms-flex: 1%"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?cate='.$cate.'&page='.$i.'">pg'.$i.'</a></li>';
    }
}else if(isset($_GET["search"])){$searchq=$_GET['search'];
    for($i=1;$i<=$divide;$i++){if($i==$page)
        echo '<li style="margin:5px;padding:4px;flex: 1%;-ms-flex: 1%"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?search='.$searchq.'&page='.$i.'">pg'.$i.'</a></li>';
        else
        echo '<li style="background-color:green;color:black;border:2px solid green;margin:5px;padding:4px;flex: 1%;-ms-flex: 1%"><a style="background-color:white;color:black;border:2px solid blue;" href="search.php?search='.$searchq.'&page='.$i.'">pg'.$i.'</a></li>';
    }
}
?>
</ul>


								</tbody>
								</table>
							</div><br/> 
							<div style="height:200px;border:1px solid black;text-align:center;margin-right:10px;margin-left:10px;">Advert!</div>
                             <br/>               
							<p style=""> 
								<marquee scrollamount="4" style="color:white;font-weight: bold;background:linear-gradient(blue,black,aqua);border-top-right-radius:30px;border-bottom-left-radius:30px">
									To find your textbook easily, use search function above, by entering the textbook title OR  enter author name. 
									If not found, goto comment page and leave your comment,so that we'll satisfy your needs. . . . 
									This website were created not to violate patent and copyright law, if your textbook was found here without permission, 
									let us know, we'll imediadtely delete the textbook out of our system. . . . . .
								</marquee>  
							</p>                 
							

						</div>
					</div>
					<div class="ccb">
						<div class="ccba">
							Features tutorials
							<a href="#">
								<div class="ccbb">
									<img src="picture/how-to-make-a-website.jpg" style="width:100%;height:200px" alt="how to make a website">
										<b>How To Develop A Simple Website</b>
									<p style="font-weight: lighter;">You wanna learn how to develop a simple website? <span style="color:red">Click to get started!</span></p>
								</div>
							</a>
						</div>	
					</div>
				</div>
			</div>



			<div class="container-below-main">
				<span class="below-related">
					Related Topics
				</span>
				<div class="container-below">
					
                <div class="dd">
						<a href="#">
							<div class="ddaa">
											<img src="picture/php-web-pict.jpg" style="width:100%;height:200px" alt="php web picture">
											<b>How To Upload Data Into MySQL Database</b>
							<p style="font-weight: lighter;">This weblink teaches How To Upload Data Into MySQL Database. Click to get started!</p>
							</div>
						</a>
					</div>
					<div class="ddb">
						<a href="#">
							<div class="ddba">
								<img src="picture/how-to-create-file-and-downloading-website.jpg" style="width:100%;height:200px" alt="how to create file and downloading website">
								<b>How To Create File And Downloading Website</b>
								<p style="font-weight: lighter;">This weblink teaches How To Create File And Downloading Website. Click to get started!</p>
							</div>
						</a>
					</div>
					<div class="ddc">
						<a href="#">
							<div class="ddca">
								<img src="picture/how-to-print-a-form.jpg" style="width:100%;height:200px" alt="how to print a form using html">
									<b>How To Print A Form Using Javascript</b>
								<p style="font-weight: lighter;">This weblink teaches How To Print A Form Using Javascript. Click to get started!</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="second-last-containers">
				<h3>Become the first to learn more tutorials on my other website!</h3><br/>
				<button class="btn-backlinks">Get Started NOW</button>
			</div>
			<div class="footer-container">
				<div class="col-a-footer">
					<b>Learn More</b><br/>
					If you want to learn more of tutorials,<br/>
					kindly follow this link <a href="#">jumptotheskyground.com</a>
				</div>
				<div class="col-b-footer">
					<b>Share you thinking</b><br/>
					If you have a story to tell,<br/>
					knowledge to share, or a perspective to offer — welcome home.<br/>
					It’s easy and free to post your thinking on <a href="#">our facebook page.</a>
				</div>
				<div class="col-c-footer">
					<b>Design</b><br/>
					@ dley web design 2020
				</div>
			</div>
		</div>

</div>










</body>
</html>