
<!DOCTYPE html>
<!doctype html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Admin/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link rel="stylesheet" href="admin/assets/fontawesome-free/css/all.min.css">
 
    <style >
   body{
        background-color: grey;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
       }
        .bip{
          width: 300px;
          height: 200px;
           border: 1px solid blue;
           box-shadow: 2px 2px 2px 2px;
            border-radius: 5px 5px 5px 5px;

        }
         a h4{
           
          text-decoration: none;

        }


        .bip:hover{
          box-shadow: 5px 10px 5px 5px;
          cursor: pointer;
          color:blue;


        }
        h4{
           
          margin-left: 115px;
          text-shadow: 2px 2px grey;
          color: black;
        }
      
         .bg{
      
          
        height: 200px;
        background-repeat: no-repeat;

         
        
        
        background-attachment: fixed;
 
        background-image: url('admin/assets/img/logo.png');
        border-bottom: 2px salmon;
        margin-top: -65px;
        margin-left: 14px;
        margin-right: 50px;
        background-position: 1000px 50px;
        background-size: 300px 200px;
        }
  
    .logo{
      background-color: grey;
    }
   

      
      .content{
         
        height: 1200px;
        background-color: #66CDAA;
        padding-top: 10px;
        width: 980px;
        float: left;
     footer{
      padding-top: -50px;
     }
      }
      .ads{
        position: absolute;
        float: left;

        
         
      }
     .wd{
      margin-left:65px;
      margin-top: 50px;
       
     }
    h4{
      background-color: white;
      border: 2px;
      padding-right: -10px;
     width: 110px;
     text-align: center;
     margin-bottom: 2px;
     text-color:black;
     text-decoration: none;
      border-radius: 5px 5px 5px 5px;
  
    }

@media screen and (max-width: 576px) {

      body{
        background-color: grey;
       }
       a .bip{
          width: 110px;
          height: 100px;
           border: 1px solid grey;
           box-shadow: 2px 2px 2px 2px;
           display: inline-block;
           border-radius: 5px 5px 5px 5px;




        }
         a h4{
           
          text-decoration: none;

        }

        .bip:hover{
          box-shadow: 5px 10px 5px 5px;
          cursor: pointer;
          color: blue;


        }
        h4{
           
        font-size: 15px;
        margin-left: 18px; 
          text-shadow: 2px 2px grey;
          color: black;
          border-radius: 5px 5px 5px 5px;
        }
         .bg{
      
           
        height: 300px;
        background-repeat: no-repeat;

         
        background-size: 100% 400px;
        
        background-attachment: fixed;
 
        background-image: url('admin/assets/img/logo.png');
        border-bottom: 2px salmon;
        margin-top: -65px;
        margin-left: 150px;
        margin-right: 150px;
        background-position: 50px 50px;
        background-size: 400px 300px;
        }
    
    .logo{
      background-color: grey;
    }
   

      
      .content{
         
        height: 700px;
        background-color: #66CDAA;
        padding-top: 45px;
      }
      .ads{
        position: absolute;
        float: left;

        
         
      }
     .row{
      margin-left: 45px;
      margin-top: 50px;
     }
    h4{
      background-color: white;
      border: 2px;
      padding-right: -10px;
     width: 80px;
     text-align: center;
     margin-bottom: 2px;
     text-color:black;
     text-decoration: none;
  
    }
        

    }
  </style>
    
  </head>
  <body>


<nav class="navbar  ">

  <center>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KostYou</a>
  <button class="navbar-toggler" width="30" height="30" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kost Terdekat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Universitas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Universitas Lampung</a>
          <a class="dropdown-item" href="#">Universitas Indonesia</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Provinsi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Lampung</a>
          <a class="dropdown-item" href="#">Jawa Barat</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</center>
</nav>
 

<div class="logo">
     
      <div class="bg" >
      
       
      </div>
    

     
 </div>
</div>
 
 
 
  <div class="content    "  >
    <div class="container mt-10">
    <div class="row wd  "  >
       <div class="col-sm-4">
      <div class="col-xm-3 mr-3  mt-10  ">
         
        <a href="main.php?halaman=Kontrakan"> <img class=" bip   mb-4"    src="admin/assets/img/kost/kontrakan/1.jpg">
        <h4  >Kontrakan</h4></a>
      </div>

      <div class="col-xm-3 mr-3 mt-10 ">
         
        <a href="main.php?halaman=Kost Tingkat"> <img class=" bip  mb-4" src="admin/assets/img/kost/kost tingkat/1.jpg"> 
        <h4>Kost Tingkat</h4></a>
      </div>
      <div class="col-xm-3 mr-3 mt-10 ">
         
        <a href="perumahan.php"> <img class=" bip  mb-4" src="admin/assets/img/kost/perumahan/1.jpg"> 
        <h4 style="width: 120px;">Perumahan</h4></a>
      </div>
    </div>
  </div>
</div>










 
 

  <?php include 'foot.php';?>