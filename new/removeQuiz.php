<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();



$cats= $data->select_category();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    

    <title>PHP Blog</title>

   
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        


/*...... image slider .....*/


















/*=====nav=====*/


/*........services.........*/

/*.serviceBox:before{
    content: "";
    display: inline-block;
       
    font-size: 60px;
    color:#ff105f;
    margin-bottom: 75px;
    position: relative;
    opacity: 1;
    transition: all 0.3s ease 0s;
}
.serviceBox:hover .service-icon:before{
top:0;
left: 0;
right: 0;
bottom: 0;
opacity: 0;
}

*/











/*.serviceBox .service-content:before{
    content: "";
    border:3px solid white;
    border-radius: 10px;
    position: absolute;
    top:0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    transition: all 0.3s ease 0s;
    
    
}
.serviceBox:hover .service-content:before{
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    opacity:1;  
}*/
.serviceBox .title{
    display: block;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0px 0px 12px 0px; 
    position: relative;
}
.serviceBox .description{
    font-size: 15px;
    line-height: 27px;
    letter-spacing: 1px;
}
/*........services.........*/


/*...................OURSEVICES................*/



 .h1_p_lg,.h2_p_lg{
    font-size: 40px;
    font-weight: bold;
}
.h2_c_lg{
    font-size: 20px;
    font-weight: bold;
}
.p_10_p_lg{
    padding: 10px;
    color: #6c757d!important;
}
.p_6_p_lg{
    padding:10px;
    font-size: 15px;
    color: #6c757d!important;
}


.ourservices{
    
    height: 700px;
    background-color:#f6f6f6;
}

/*.rowsetting{
    margin: 80px 0px !important;
    
}*/
.imgsetting{
    border-radius: 50%;
    height: 90px;
    width: 90px;
}

.fa-shopping-cart{
    margin-top: 20px;
}
.fa-desktop{
     margin-top: 24px;
}
.fa-lock{
     margin-top: 25px;
}


/*..............portfolio..............*/

.portfolio{
    height: 1100px;
    width: 100%;
    padding: 100px 0px 50px ;
}
 
.card{
    margin-top: 40px;
}



/*.......OUR TEAM ....*/


.ourteam{
    height: 700px;
    width: 100%;
    padding: 100px 0px 60px ;
    
}
.ourteam h1{
    font-size: 50px;
    font-weight: bold;   
}

.teamseting{
    margin-top: 70px !important;
}

.service_box{
    border: 1px solid gray;
   padding: 45px 0px 15px;
    background-color: #fff;
}



/*.......Footer....*/


.footer{
    height: 50px;
}
.footer h6{
    line-height: 50px;
}

.a{
    margin-left: 0px;
}
.b{
    margin-right: 0px;
    
}
.b{
    margin-bottom: 0px;
    
}











/*=================....... Margin's for gridLayout .......================*/ 
.mxs_col_6_1{
    margin-left: 10%;
    margin-bottom: 10%;
}
.mxs_col_6_2{
    margin-left: 4%;
    margin-bottom: 10%;
}
.mxs_col_6_3{
    margin-left: 10%;
    margin-bottom: 10%;
}
.mxs_col_6_4{
    margin-left: 4%;
    margin-bottom: 10%;
}
.bg_services{
    background: #f2f2f2;
}
.img_a{
    border: 1px solid #00f868;
}
.serviceBox{
    text-align: center;
    padding: 0;
    height: 190px;
    width: 84%;
    box-shadow: 0px 4px 10px 0px #e0e0e0; /*e0e0e0  00ff81*/
    border: 1px solid #f4f4f4;
    border-radius: 3%;
    background-color: #fff;
       
}


.serviceBox h1{
    font-size: 100%;
    padding-left: 2%;
   
}

.serviceBox .service-content{
   
   

}

.serviceBox .service-icon{
    display: inline-block;
    margin-top: 20%; 
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(to bottom, #00fb99,#19ff49);
    font-size: 40px;
    color:#fff;/*#00f868;#00fb83;/* #00ff98;#00f868;*/
   }

 /*.......Responsive......*/
 
  @media(min-width:1200px){
.serviceBox{
    text-align: center;
    padding: 0px 0px 0px 0px;
    height: 245px;
    width: 70%;
    
    
    border-radius: 3%;
    background-color: #fff;
    box-shadow: 0px 1px 2px 1px rgba(0,0,0,.1); /*;*/
}
.serviceBox h1{
    font-size: 100%;
   
}
.serviceBox .service-content{
   
}
.serviceBox .service-icon{
    display: inline-block;
    margin-top: 20%; 
    font-size: 40px;
    color:#fff;
    background: linear-gradient(to bottom, #f3d400,#f38900);
}

.mxs_col_6_1{
    margin-left:30%;
    margin-bottom: 10%;
}
.mxs_col_6_2{
    margin-left:20%;
    margin-bottom: 10%;
}
.mxs_col_6_3{
    margin-left:10%;
    margin-bottom: 10%;
}
.mxs_col_6_4{
    margin-left:0%;
    margin-bottom: 10%;
}
    }


 @media(min-width:992px)and (max-width:1199px){
   .carousel-inner img{
    width: 100%;
    height:270px;
}
  
.serviceBox{
    text-align: center;
    padding: 0px 0px 0px 0px;
    height: 235px;
    width: 79%;
    
    border: 1px solid #f3f3f3;
    border-radius: 3%;
    background-color: #fff;
    box-shadow: 0px 4px 10px 0px #cfffe8; /*e0e0e0  00ff81*/
}
.serviceBox h1{
    font-size: 100%;
   
}
.serviceBox .service-content{
   
}
.serviceBox .service-icon{
    display: inline-block;
    margin-top: 20%; 
    font-size: 40px;
    color:#fff;
    background:  linear-gradient(to bottom, #00fb99,#19ff49);
}

.mxs_col_6_1{
    margin-left:14%;
    margin-bottom: 10%;
}
.mxs_col_6_2{
    margin-left:11%;
    margin-bottom: 10%;
}
.mxs_col_6_3{
    margin-left:10%;
    margin-bottom: 10%;
}
.mxs_col_6_4{
    margin-left:8%;
    margin-bottom: 10%;
}
    }

 

 @media(min-width:768px)and (max-width:991px) {
     
     .carousel-inner img{
    width: 100%;
    height:240px;
}

     
     .serviceBox{
    text-align: center;
    padding: 0px 0px 0px 0px;
    height: 210px;
    width: 85%;
    
    border: 1px solid #f3f3f3;
    border-radius: 3%;
    background-color: #fff;
    box-shadow: 0px 4px 10px 0px #cfffe8; /*e0e0e0  00ff81*/
}
.serviceBox h1{
    font-size: 100%;
   
}
.serviceBox .service-content{
   
}
.serviceBox .service-icon{
    display: inline-block;
    margin-top: 20%; 
    font-size: 40px;
    color:#fff;
    background: linear-gradient(to left , #00f868 , #00ffdd  );
}

.mxs_col_6_1{
    margin-left:9%;
    margin-bottom: 10%;
}
.mxs_col_6_2{
    margin-left:8%;
    margin-bottom: 10%;
}
.mxs_col_6_3{
    margin-left:8%;
    margin-bottom: 10%;
}
.mxs_col_6_4{
    margin-left:7%;
    margin-bottom: 10%;
}
 }


@media(min-width:576px)and (max-width:767px){
 .carousel-inner img{
    width: 100%;
    height:225px;
}
     
.serviceBox{
    text-align: center;
    padding: 0px 0px 0px 0px;
    height: 250px;
    width: 80%;
    
    border: 1px solid #f3f3f3;
    border-radius: 3%;
    background-color: #fff;
    box-shadow: 0px 4px 10px 0px #cfffe8; /*e0e0e0  00ff81*/
}
.serviceBox h1{
    font-size: 100%;
   
}
.serviceBox .service-content{
   
}
.serviceBox .service-icon{
    display: inline-block;
    margin-top: 20%; 
    font-size: 40px;
    color:#fff;
    background:#fff;
}

.mxs_col_6_1{
    margin-left:12%;
    margin-bottom: 9%;
}
.mxs_col_6_2{
    margin-left:8%;
    margin-bottom: 9%;
}
.mxs_col_6_3{
    margin-left:12%;
    margin-bottom: 9%;
}
.mxs_col_6_4{
    margin-left:8%;
    margin-bottom: 9%;
}

}
@media(min-width:480px)and (max-width:575px){
 
.carousel-inner img{
    width: 100%;
    height:200px;
}

    
.serviceBox{
    text-align: center;
    padding: 0px 0px 0px 0px;
    height: 200px;
    width: 84%;
    
    border: 1px solid #f3f3f3;
    border-radius: 3%;
    background-color: #fff;
    box-shadow: 0px 4px 10px 0px #cfffe8; /*e0e0e0  00ff81*/
}
.serviceBox h1{
    font-size: 100%;
   
}
.serviceBox .service-content{
   
}
.serviceBox .service-icon{
    display: inline-block;
    margin-top: 20%; 
    font-size: 40px;
    color:#fff;
    background: linear-gradient(to bottom, #00fb99,#19ff49);
}

.mxs_col_6_1{
    margin-left: 11%;
    margin-bottom: 9%;
}
.mxs_col_6_2{
    margin-left: 7%;
    margin-bottom: 9%;
}
.mxs_col_6_3{
    margin-left: 11%;
    margin-bottom: 9%;
}
.mxs_col_6_4{
    margin-left: 7%;
    margin-bottom: 9%;
}


}




 /*
 
.serviceBox .service-icon:before{
    content: "";
    border: 3px solid white;
    border-radius: 50%;
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    opacity: 1;
    transition: all 0.3s ease 0s;
}
.serviceBox:hover .service-icon:before{
top:0;
left: 0;
right: 0;
bottom: 0;
opacity: 0;
}




.serviceBox .service-content{
   padding: 5px 5px ;
   background:linear-gradient(to right , #ff105f , #ffad06);
   border-radius: 15px;
   color:white;
   position: relative;
}
.serviceBox .service-content:before{
    content: "";
    border:3px solid white;
    border-radius: 10px;
    position: absolute;
    top:0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    transition: all 0.3s ease 0s;
    
    
}
.serviceBox:hover .service-content:before{
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    opacity:1;  
}
.serviceBox .title{
    display: block;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0px 0px 12px 0px; 
    position: relative;
}
.serviceBox .description{
    font-size: 15px;
    line-height: 27px;
    letter-spacing: 1px;
}
   
} 
    */
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    .h1_p_lg,.h2_p_lg{
    font-size: 25px;
    font-weight: bold;
}
   .h2_c_lg{
    font-size: 15px;
    font-weight: bold;
}
.p_6_p_lg{
    padding:10px;
    font-size: 10px;
    color: #6c757d!important;
}

    
     
    .portfolio{
        height: 2750px;   
    }
    .ourteam{
        height: 1250px;
    }
    

   
 


    </style>
    
    

    
  </head>

  <body>

      
<div class="container-fluid" >
    <div class="row " style="margin-top: 150px;" >
  
              <?php while ($row=$cats->fetch_array()): ?>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 " > 
            <div class="serviceBox mxs_col_6_2" >
                <div class="service-icon">
                    <i class="fa fa-book"></i>
                </div>
                
                <div class="service-content" >
                 <h1 style="color:#089854;/*#008c49*/ font-weight: bold; ">Study Material</h1>
                 <a href="categoryR.php?cat_id=<?php echo $row['category_id']; ?>"><?php echo $row['title'];?></a>   
                 <p style="font-size: 12px;color: #26de81;/*#a7e6c8;*/"> All subjects selected</p>
                </div>
            </div>
            </div>
        
              <?php endwhile;  ?>
          </div>                
      </div>
      
             
        
    </div>
   
</div>
            <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
