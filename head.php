<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="web.php"> -->
    <style>
    #topbar{
  margin: 0 ;
  margin-bottom: 0;
  padding: 0 ;
  background-color: #333;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 8%;  
  }
  #N { 
    padding: 2%;
    color: white; 
    font-size: 20px;
  }
  #singout{
    float: left;
    margin-top: 2px;
    padding-top: -2%;
    margin-right: 3%;
    size: 14px;   
  }
  #singout a:visited {
    color: #afadad;
  }
  #singout a:hover {
    color:rgb(224, 222, 222);
  } 
  #Search{
      /* position: fixed;   */
      padding: 6px;
      border: none;
      margin-top: 18px;
      margin-right: 36px;
      font-size: 17px;
      padding-right: 60%         
  }
  /*sidebar*/
 #sidebar{
    /* float: none; */
    position: fixed;
    padding: 0; 
    width: 195px;
    background-color: #dddddde9;
    height: 100%;
    margin-left: -1%;
    margin-top: 3%;
  }
  li a {
    display: block;
    color: #000;
    margin-top: 10%;
    padding: 8px 15px;
    margin-left: 10%;
    
    text-decoration: none;
    font-size: 20px; 
  }
  li a:hover {
    color: rgb(150, 148, 148);
  } 

 */
  </style>
</head>
<body>
         <!-- Sidebar -->
         <div class="Sidebar">
        <ul id="sidebar">
            <li><a  href="main.php">Home</a></li>
            <li><a  href="adddatafrom.php">Add data</a></li>
            <!-- <li><a href="#Products">------</a></li>
            <li><a href="#Customer">-------</a></li> -->
      
          </ul>
     </div>
       
     <!-- topbay -->
     <ul id="topbar">
        <a id="N">Company name</a>
        <input id="Search" style="background-color: #f5f2f2dd;" type="text" placeholder="Search..." name="search" > 
        <li id="singout"  style="float:right;">
            <a href="#singout">Singout</a>
        </li>
    </ul>
      
</body>
</html>