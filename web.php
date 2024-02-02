<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* topbar */
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
  a { 
    padding: 2%;
    color: white; 
    font-size: 20px;
  }
  #singout{
    float: left;
    margin-top: 2px;
    padding-top: 0.8%;
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
 ul {
    padding: 0;
    position: fixed;
    width: 190px;
    height: auto;
    margin-top: -5%;
  }
  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    font-size: 16px;
  }
  li a:hover {
    color: rgb(150, 148, 148);
  } 


/*img*/ 
.boxP a {
    font-size: small;
    height:5%;
    width:  auto;  
} 
  .boxP a:link, a:visited {
    background-color: white;
    color: black;
    border: 1px solid rgb(165, 164, 164);
    border-radius: 3px;
    padding: 8px 15px;
    margin: -1%;
    text-decoration: none;
  }
  
  .boxP a:hover, a:active {
    background-color: gray;
    color: white;
  }
h1{
    margin-top: 7%;
    margin-left: 21%;
    margin-right: auto;
} 
img{
    float: right;
    height: auto;
    width: 80%;
    margin-left: 30%;
    margin-top: auto;
}



/*table*/

.table{
    margin-top: 1%;
    margin-left: 23%;
    margin-right: auto;  
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 95%;
}

td, th {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddde9;
}
   
    </style>
</head>
<body>  
<?php
echo "My car";
?> 

 <!-- topbay -->
    <ul id="topbar">
        <a>Company name</a>
        <input id="Search" style="background-color: #f5f2f2dd;" type="text" placeholder="Search..." name="search" > 
        <li id="singout"  style="float:right;">
            <a href="#singout">Singout</a>
        </li>
    </ul>


    <!-- img-->
   <div class="boxP" style="float:right;">
        <a href="#sh">Share</a>
        <span>
        <a href="#e" >Export</a>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#w" padding:10px;>This week</a>
   </div>
     <h1>Dashboard</h1>
     <!-- <img src="pic/1706514246929@2x.jpg" alt=""> -->


     <!-- Sidebar -->
     <div class="Sidebar">
        <ul>
            <li><a href="#Dashboard" style="color: #007bff;">Dashboard</a></li>
            <li><a href="#Order">Order</a></li>
            <li><a href="#Products">Products</a></li>
            <li><a href="#Customer">Customer</a></li>
            <li><a href="#Reports">Reports</a></li>
            <li><a href="#Integrations">Integrations</a></li><br>
            <li><a href="#SAVWD REPORTS">SAVWD REPORTS</a></li>
            <li><a href="#Current monthr">Current month</a></li>
            <li><a href="#Last quarter">Last quarter</a></li>
            <li><a href="#Social engagment">Social engagment</a></li>
            <li><a href="#Year-end sale">Year-end sale</a></li>
          </ul>
     </div>
     
    
     <!-- table -->
     <h1>Section title</h1>   
        <div class="table">
            <table>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipising</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>lnteger</td>
                  <td>nec</td>
                  <td>odid</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>libero</td>
                    <td>Sed</td>
                    <td>cursus</td>
                    <td>ante</td>
                  </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1.006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duls</td>
                </tr>
                <tr>
                    <td>1.007</td>
                    <td>sagittis</td>
                    <td>ipsum</td>
                    <td>Praesent</td>
                    <td>mauris</td>
                  </tr>
                <tr>
                    <td>1.008</td>
                    <td>Fusce</td>
                    <td>nec</td>
                    <td>tellus</td>
                    <td>sed</td>
                </tr>
                <tr>
                    <td>1.009</td>
                    <td>augue</td>
                    <td>semper</td>
                    <td>porta</td>
                    <td>Mauris</td>
                </tr>
                <tr>
                    <td>1.010</td>
                    <td>massa</td>
                    <td>Vestibulum</td>
                    <td>lacinia</td>
                    <td>arcu</td>
                </tr>
                <tr>
                    <td>1.011</td>
                    <td>eget</td>
                    <td>nulla</td>
                    <td>Class</td>
                    <td>aptent</td>
                </tr>
                <tr>
                    <td>1.012</td>
                    <td>taciti</td>
                    <td>sociosqu</td>
                    <td>ad</td>
                    <td>litora</td>
                </tr>
                <tr>
                    <td>1.013</td>
                    <td>torquent</td>
                    <td>per</td>
                    <td>conubla</td>
                    <td>nostra</td>
                </tr>
                <tr>
                    <td>1.014</td>
                    <td>per</td>
                    <td>inceptos</td>
                    <td>himenaeos</td>
                    <td>Curabitur</td>
                </tr>
                <tr>
                    <td>1.015</td>
                    <td>sodales</td>
                    <td>ligula</td>
                    <td>in</td>
                    <td>libero</td>
                </tr>
              </table>
     </div>



</body>
</html>