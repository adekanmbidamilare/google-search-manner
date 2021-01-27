<?php include('connection.php'); 


$output='';
// collect







if(isset($_GET['search'])){ $search = $_GET['search'];
    $search = preg_replace('#[^ 0-9a-z.-_/;]#i',"",$search);
    $search_exploded=explode(",",$search);
    foreach($search_exploded as $search_each)
    { $x=1;
        $x++;
      
    
   
   



    $query = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%') 
   union all
    (SELECT * FROM css WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM js WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM react WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM angular WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM bootstrap WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM c WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM cplus WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM csharp WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM java WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM php WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM phyton WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM catone WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%')
   union all
    (SELECT * FROM cattwo WHERE book LIKE '%". $search_each[0]. "%' AND book LIKE '%". $search_each[1]. "%' OR author LIKE '%". $search_each. "%' OR file LIKE '%". $search_each. "%') ORDER BY book LIKE '%". $search_each. "%' DESC, author LIKE '%". $search_each. "%' DESC;") or die("could not search!");
     $count = mysqli_num_rows($query);
    if($count==0){
        $output= 'There was no output search result. Type only the book Rname OR only the author name....';
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
} }
?>
















<html>
<head>
<title>copied responsive web</title>
<link rel="stylesheet" type="text/css" href="file:///C:/Users/ADEKANMBI%20DAMILARE/Desktop/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">
<link rel="stylesheet" type="text/css" href="cssdisplay/cssdisplayhead.css">
<style type="text/css">

    </style>
</head>
<body>

    <div class="nav_header">
        <div class="nav_title"><div class="inner-nav-title"><form action="search.php" method="GET" >B..<input type="text" name="search" placeholder="type booktitle..."><button type="submit" style="padding: 7px;background-color: deepskyblue;color:white;border-radius: 3px;border: none;">>></button></div></div>
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
                            <input type="checkbox" name="" id="nav_check">
                            <div class="nav_links">
                            
                            
                            
                            
                            
                                    <a href="programming.html">Programming Textbooks</a>
                                    <a href="displaycatone.php">Others Category1</b></a>
                                    <a href="displaycattwo.php">Others Category2</a>
                                
                            
                            
                            
                            
                                
                            
                            
                            
                            
                            </div>
                            </div>
                                            <div class="container" style="overflow:auto">
                                
                            
                                            
                                        
                                                <p class="section-intro" style="padding-top: 40px;padding-bottom: 0px;margin-bottom: 0px;color:red;
    margin: 5px;padding-left: 10px;padding-right: 10px;font-size: 15px;background:linear-gradient(blue,black,aqua)">SEARCH RESULT PAGE</p>
                                                <div style="height:200px;border:1px solid black;text-align:center;margin-right:10px;margin-left:10px">Advert!</div>
                                               
                                                
                                               
                                                <p class="welcome-section2"  >    <center><b>BOOK NAME >></b><b>AUTHOR NAME >></b><b>FILE</b></center>
                                                <marquee style="background:linear-gradient(blue,black,aqua);color:white">....... Do you find it difficult to find your book among the row search result? Kindly take your time to look at the result OR..., You could search again by inputing the author's name alone into the search bar....OR check the bottom result, you could find it there....  </marquee><br/>
                                                        
                                                                <?php     
                                                            print("$output");

                                                            ?> 
                                                        
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
                    Email address or,<br/>
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