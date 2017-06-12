<!DOCTYPE html>
  <head> 
    <meta http-equiv="refresh" content="10">
    <meta charset="utf-8" />    
    <title>jArViTs</title>  
    <link id="theme" rel="stylesheet" type="text/css" href="style.css" title="theme" />  
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto+Condensed|Roboto+Condensed:300|Roboto+Condensed:300|Roboto+Condensed:300|Roboto+Condensed:300" type="text/css" />  
	<script type="text/javascript" language="javascript" src="js/jquery-1.8.1.min.js"></script>  
	<script type="text/javascript" language="javascript" src="js/scripts.js"></script>  
	<script type="text/javascript" language="javascript" src="js/theme.js"></script>  
	<script type="text/javascript" language="javascript" src="js/custom.js"></script>  
  <style type="text/css">
            .a1{
              margin-right: 5%;
              margin-left: 5%;
              margin-top: 10%;
              margin-bottom: 10%;

            }

            img{
              width:250px;
              height:250px;
            }

          </style>

  </head>  
  <body> 
    <header> 
      <div id="top"> 
        <div class="bg"></div>  
        <div class="row"> 
          <div id="logo"></div>  
          <nav> 
            <div id="hmenu"> 
              <ul> 
                <li> 
                  <a href="home1.html">Home</a> 
                </li>  
                <li> 
                  <a href="view.php">Updates</a> 
                </li>  
                <li> 
                  <a href="about.html">About Us</a> 
                </li>  
                <li> 
                  <a href="#contact">Contact Us</a> 
                </li> 
              </ul> 
            </div> 
          </nav>  
          <div class="clear"></div> 
        </div> 
      </div>  
      <div id="header-wrapper"> 
         <h1 style="text-decoration: blink;">Recently Captured Picture</h1>
      </div> 
    </header>  
               
            <?php
              echo '<center><table class="a1" cellspacing="50px">';

              $n=1;
    if ($handle = opendir('images/captured')) {

        for ($ch=0; $ch < 3 ; $ch++) { 
          $entry = readdir($handle);
          if($entry=='.' || $entry=='..')
          {
            continue;
          }
            
          if(!$entry) {
          echo "<tr><td>No Captured Images or Refresh the Page Again</td></tr>";
        }   
        
        }
        

        while (false !== ($entry)) {
            if ($entry != "." && $entry != "..") {
                print "<tr><td><h2>".$n."</h2></td><td><img src='images/captured/"."$entry'"."/></td></tr>";
              $n+=1;
              $entry = readdir($handle);
            }
        }
        closedir($handle);
       echo ' </table>
          </center>';
    }

            ?>

 
    <footer id="footer"> 
      <div class="bg"></div>  
      <div class="content"> 
        <div class="group"> 
          <div class="col span_1_of_3"> 
            <h2>Links</h2>  
            <div class="vmenu"> 
              <ul> 
                <li>
                  <a href="https://www.arduino.cc/">Aurdino</a>
                </li>  
                <li>
                  <a href="https://www.mathworks.com/">Matlab</a>
                </li>  
                <li>
                  <a href="https://www.apachefriends.org/">Xammp</a>
                </li> 
              </ul> 
            </div> 
          </div>  
          <div class="col span_1_of_3"> 
            <h2>About Us</h2>  
            <p><b><u>JarVit</u></b> 
            <br/> Just A Rather Very Intelligent Traffic System </p> 
          </div>  
          <div class="col span_1_of_3"> 
            <h2>Contact</h2>  
            <p> A D Patel 
              Intitue of Technology
              <br /> 
            </p> 
          </div> 
        </div>  
        <div class="clear"></div>  
        <div class="baseline"> 
          
            
          <div class="clear"></div> 
        </div> 
      </div> 
    </footer> 
  </body> 
</html>
