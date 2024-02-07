
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
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

  #Search{
      padding: 6px;
      border: none;
      margin-top: 15px;
      margin-right: 15px;
      margin-left: 190px;
      font-size: 17px;
      padding-right: 60%         
  }
  #logout{
      float: right;
      padding-right: 30px;
      margin-top: -25px;
  }

  /*sidebar*/
 #sidebar{
    position: fixed;
    padding: 0; 
    width: 195px;
    background-color: #dddddde9;
    height: 100%;
    margin-left: -1%;
    margin-top: -6%;
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

  </style>
</head>
<body>
         <!-- Sidebar -->
         <div class="Sidebar">
        <ul id="sidebar">
            <li><a  href="main.php">Home</a></li>
            <li><a  href="adddata.php">Add data</a></li>
      
        </ul>
     </div>
       
     <!-- topbay -->
     <ul id="topbar">
        <form action="search.php" method="GET">
            <label for="search_query"></label>
            <input id="Search" style="background-color: #f5f2f2dd;" type="text" name="search_query" placeholder="Search..." required>
            <input type="submit" value="Search">
        </form>


       <div id="logout">
        <a id="log" href="logout.php?logout" style="font-size:17px; color: white;">Logout</a>
       </div>
    </ul>
      
</body>
</html>