<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medi Aid Complex(Pvt.)Ltd.</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/all.min.css" rel="stylesheet">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  </head>
  <style>
    
*{
    font-family: 'Roboto' , sans-serif;
    margin: auto;
    padding: 0;
    box-sizing: border-box;
    border: none;
}
body{
  font-family: sans-serif;
  background-size: cover;
  background-position: center;
  box-sizing: border-box;
}

.container-fluid{
    width: 100%;
    padding-right: 10px;
    padding-left: 5px;
    margin-right: auto;
    margin-left: auto;
    
}
  .header-container{
    z-index: 2px;
  }
  .header-row{
    padding-top: 5px;
  }
  .header-logo{
    width: 55px;
    height: 64.2656px;
  }
  .menu-bar{
background-color: rgba(189, 38, 38);
text-align : center;


}
.menu-bar ul{
display: inline-flex;
list-style: none;
color: #fff;

}
.menu-bar ul li{
width: 150px;
margin : 10px;
padding: 5px;
font-size: 15px;
font-weight: semi-bold;
}
.menu-bar ul li a{
text-decoration: none;
color: #fff;
}
.active, .menu-bar ul li:hover
{
background: rgb(199, 193, 193);
border-radius: 20px;
}
.menu-bar ul li:hover
{
background: rgb(199, 193, 193);
border-radius: 20px;
}
.menu-bar .fa-solid
{
margin-right: 10px; 
}
.sub-menu
{
display: none;
} 
.menu-bar ul li:hover .sub-menu
{
display: block;
position: absolute;
background : rgba(189, 38, 38);
margin-top: 10px;
margin-left: -5px;

}
.menu-bar ul li:hover .sub-menu ul{
display: block;
margin: 5px;
} 
.menu-bar ul li:hover .sub-menu ul li{
width: 150px;
padding: 10px;
border-bottom: 1px dotted #fff;
background: transparent;
text-align: left;
border-radius: 0;
}
.menu-bar ul li:hover .sub-menu ul li:last-child
{
border-bottom: none;
}
.menu-bar ul li:hover .sub-menu ul li a:hover{
color:  #777;
}
.sub-menu-1{
display:none;
}
.card{
  width: 350px;
  box-sizing: border-box;
}
.card-img-top{
  width: 200px;
}
.footer{
  background: rgba(189, 38, 38); 
  padding: 10px;
}
.footer .credits{
  color: #fff;
  text-align: center;
  font-size: 15px;

}
.footer .credits a{
  text-decoration: none;
  color:#fff;
}

  </style>
  <body>
    <!-- heading -->
    <div class="container-fluid box-style-2 " style="padding-top:40px">
  <div class="row">
    <div class="col-4 box-style-2 align-items-center">
    <a href="https://medi-aidcomplex.com/"><img class="logo"src="image/Medi-aid-logo.png" alt="Porto" style="top: 70px;width: 330px; height: 100px; margin: 5px 20px"></a>
    </div>
    <div class="col-8">
      <div class="row">
      <div class="col">
      <img src="icon/phone.png" alt="" style="top: 50px; width: 20px; height: auto; margin: 10px 20px">
      <label style="color:rgba(189, 38, 38);"><b>Contact Number</b><br>	
        <strong>
         <a style="text-decoration:none; color:#333; font-size:14px;" href="tel:01747169299">01747169299</a>
        </strong>
      </label>
    </div>
    <div class="col-3">
      <img src="icon/mail.png" alt="" style="top: 50px;width: 25px; height: auto; margin: 10px 20px">
      <label style="color:rgba(189, 38, 38);"><b>Email Us</b><br>
      <strong><a style="text-decoration:none; color:#333; font-size:14px;" href="mailto:info@medi-aidcomplex.com">info@medi-aidcomplex.com</a></strong>
    </label>
    </div>
    <div class="col">
      <img src="icon/clock.png" alt="" style="top: 50px;width: 25px; height: auto; margin: 10px 20px">
      <label style="color:rgba(189, 38, 38);"><b>Working Hour</b>
      <br>
			<strong style="color:#333; font-size:14px;">8:00 AM - 10:00 PM</strong>
    </label>
    </div>
    <div class="col-4">
      <img src="icon/maps.png" alt="" style="top: 50px;width: 25px; height: auto; margin: 10px 20px">
      <label style="color:rgba(189, 38, 38);"><b>Address</b>
      <br>
			<strong style="font-size:15px;color:#333; font-size:14px;">20, K.B.Fazlul Quader Road, Chattogram</strong>
    </label>
    </div>
</div>
  </div>
  </div>
  </div>
</div>
    <!-- Navbar -->
    <header>
  <div class="menu-bar">
    <ul>
      <li ><a href="/"><i class="fa-solid fa-house"></i>HOME</a></li>
      <li><a href="aboutus"><i class="fa-solid fa-user"></i>ABOUT US</a></li>
      <li><a href="diagnostic"><i class="fa-solid fa-clone"></i>SERVICES</a>
      </li>
      <li class="active"><a href="doctors"><i class="fa-solid fa-stethoscope"></i>DOCTORS</a></li>
      <li><a href="contact"><i class="fa-solid fa-phone"></i>CONTACT</a></li>
    </ul>
  
  </div>

</header>
<br>
<br>
        <section id="doctors">
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">CARDIOLOGY</h2>
        <!-- <span class="badge rounded-pill bg-danger" style="font-size:20px">CARDIOLOGY</span> -->
<hr>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col-sm-40">
                <div class="card" style="width: 18rem;">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Md. Abul Hossen Shahin</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                         MBBS, BCS(Health), D-Card(BSMMU)
                         Cardiology & Medicine Specialist.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">PEDIATRICS</h2>
<hr>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Mitra Dutta</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                         MBBS, BCS(Health) <br>
                         DCH, MD(Pediatrics) <br>
                         Assistant Professor <br> Department of Child Health
                          <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">DERMATOLOGY</h2>
<hr>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Rajshree Chowdhury</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                         MBBS, BCS(Health), DDV <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. A.F.M. Mijanur Rahman</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                         MBBS, DDV <br>
                         Assistant Professor <br>
                         Eastern Medical College, Comilla
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"><br>
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">DENTAL SURGERY</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Mehedi Hasan</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                         BDS(CMC) <br>
                         PGT(Oral and Maxillofacial Surgery) <br>
                         Chittagong Medical College & Hospital.
                        
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr.Tanzina Maria</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        BDS(CMC) <br>
                        PGT(Oral and Maxillofacial Surgery) <br>
                        Chittagong Medical College & Hospital.
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container" id="medicine"><br>
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">MEDICINE</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Kajal Kanti Das</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                         MBBS(CMC), BCS(Health) <br>
                         MD (Medicine), FCPS(FP) <br>
                         Fellowship in Diabetes(Liverpool) <br>
                         Medicine, Neuromedicine, Arthritis & <br> Diabetes Specialist <br>
                         Assistant Professor , Medicine <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div> <br> 
            <br>
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    <div class="card-body">
                        <h6 class="card-title">Dr.Abdullah Abu Sayeed</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, MD (Internal Medicine) <br>
                         Fellow in Diabetes(BIRDEM) <br>
                         Medicine Specialist & Diabetologist <br>
                         Assistant Professor , Medicine <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div> <br>
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Misbahus Saleheen</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, BCS(Health)   <br>  
                         MD(Medicine), CCD(BIRDEM) <br>
                         Medicine Specialist & Diabetologist <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Sumon Barua</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS(CMC), MD (Internal Medicine) <br>
                         Medicine Specialist <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <br>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">NEUROMEDICINE</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Mohammad Salauddin</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                         MBBS, MD(Neurology) <br>
                         Neuromedicine Specialist <br>
                         Assistant Professor <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">ENT</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. MD. Mukhlesur Rahman</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, BCS(Health) DLO(ENT) <br>
                         ENT Specialist & Head-Neck Surgeon <br>
                         Assistant Professor <br>
                         Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">OBGYN</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Shamima Akhter</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, BCS(Health) , MS(OBGYN) <br>
                        Gynecology, Obstetrics Specialist & Surgeon  <br>
                        Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Khadija Begum Panna</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, BCS(Health) , FCPS(OBGYN)
                        Gynecology, Obstetrics Specialist & Surgeon  <br>
                        Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Shamima Hossain Khan</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, BCS(Health) <br> DGO, MCPS(OBGYN) <br>
                        Gynecology,Obstetrics Specialist & Surgeon  <br>
                        Chittagong Medical College & Hospital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <br>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">ENDOCRINOLOGY</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. MD. Saifullah Chowdhury</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, BCS(Health), DEM(BIRDEM), CCD 
                        Diabetes & Endocrine Specialist  
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">RADIOLOGY & IMAGING</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    <div class="card-body">
                        <h6 class="card-title">Dr. Puspita Saha</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS, CMU , DMU <br> 
                        PGT(Radiology and Imaging)
                
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 400px;">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Dr. Mohammad Nizam Morshed Chowdhury</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                        MBBS(CU), C-ULTRA(USA) DMU(DHAKA) <br>
                        Advanced Training in Medical Ultrasound(India) <br>
                        Fellow in Colour Doppler & Fetal Sonography(Delhi) <br> 
                        Specialist in Medical Imaging
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h2 style="font-size: 25px;color:rgba(189, 38, 38);">UROLOGY</h2>
<hr>
        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="image/doctor.png" class="card-img-top" style="padding: 5px; height: 200px; display:left;">
                    
                    <div class="card-body">
                        <h6 class="card-title">Prof. Dr. Md. Mizanur Rahman</h6>
                        <p class="card-text" style="font-size: 15px; color: grey;">
                       Professor & Head(Ex) <br>
                       Urology Department <br>
                       Chittagong Medical College & Hospital.
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    
</section>
 <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="container pt-2">
  <div class="credits">
    Developed by <b><a href="https://medi-aidcomplex.com/">Medi Aid Complex(Pvt.)Ltd.</a></b> 
  </div>
</div>
</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>