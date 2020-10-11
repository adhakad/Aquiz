<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

if(isset($_GET['cat_id'])){

    $id = $_GET['cat_id'];    
    $subject=$data->select_subjectByCatid($id);


}


 
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        


/*...... image slider .....*/
.single-upcoming-events {
    position: relative;
    z-index: 1;
    width: 350px;
    height: 230px;
    margin-left:1%;
    margin-bottom: 3%;
    box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    border: 1px solid transparent;
    border-radius: 10px;
  }
  .single-upcoming-events .events-thumb {
    display: block;
    width: 350px;
    height: 230px;
    border: 1px solid transparent;
    border-radius: 10px;
    position: relative;
    z-index: 1; }
    .single-upcoming-events .events-thumb::after {
      position: absolute;
      width: 350px;
      height: 230px;
      border: 1px solid transparent;
      border-radius: 10px;
      top: 0;
      left: 0;
      background-color: rgba(255, 140, 180, 0.8);
      content: '';
      z-index: 2; }
    .single-upcoming-events .events-thumb img {
      width: 350px;
      height: 230px;
      border: 1px solid transparent;
      border-radius: 10px;}
    
    .single-upcoming-events .events-thumb h4 .event-title{
      position: absolute;
      font-size: 24px;
      top: 50%;
      color: #fff;
      width: 100%;
      text-align: center;
      text-decoration: none;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      margin-bottom: 0;
      z-index: 10; }

    

    


















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
    

   
 


    </style>  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="posts.php">All posts</a>
          <a class="blog-nav-item" href="services.php">Services</a>
          <a class="blog-nav-item" href="about.php">About us</a>
          <a class="blog-nav-item" href="contacts.php">Contacts</a>
        </nav>
      </div>
    </div>

    <div class="container">
          <div class="row">
  
              <?php while ($row=$subject->fetch_array()): ?>
              <div class="col-12 col-md-6 col-lg-4"> 
                   <div class="single-upcoming-events  ">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e1.jpg" alt="">
                            <h4><a class="event-title" href="../exm/newEmptyPHP.php?sub_id=<?php echo $row['subject_id'];?>"><?php echo $row['title'];?></a></h4>
                 
                        </div>
                   </div>
              </div>
        
              <?php endwhile;  ?>
          </div>                
      </div>
         





