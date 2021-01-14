<?php include('connection.php'); 


$output='';
// collect

if(isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^ 0-9a-z.-_/;]#i","",$searchq);


    
    if(!isset($searchq[1])) $searchq[1]='NULL';

    $query = mysqli_query($conn,"(SELECT * FROM html WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') 
   union all
    (SELECT * FROM css WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM js WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM react WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM angular WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM bootstrap WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM c WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM cplus WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM csharp WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM java WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM php WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM phyton WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM catone WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%')
   union all
    (SELECT * FROM cattwo WHERE book LIKE '%". $searchq[0]. "%' AND book LIKE '%". $searchq[1] . "%' OR author LIKE '%". $searchq. "%' OR file LIKE '%". $searchq. "%') ORDER BY book LIKE '%". $searchq. "%' DESC, author LIKE '%". $searchq. "%' DESC;") or die("could not search!");
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
        <div class="nav_title"><div class="inner-nav-title"><form action="search.php" method="POST" >mtextbook<input type="text" name="search" placeholder="type booktitle..."><button type="submit" style="padding: 7px;background-color: deepskyblue;color:white;border-radius: 3px;border: none;">>></button></form></div></div>
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
                                
                            
                                            
                                        
                                                <p class="section-intro"  style="border:2px solid black;">SEARCH RESULT PAGE</p><br/><br/>
                                               
                                                
                                                <br/>
                                                <p class="welcome-section2"  >    <center><b>BOOK NAME >></b><b>AUTHOR NAME >></b><b>FILE</b></center><BR/>
                                                        
                                                                <?php     
                                                            print("$output");

                                                            ?> 
                                                        
                                                </p>
                            
                            
                            
                                                <br/>
                                                




                        
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
                    facebook address<br/>
                   
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