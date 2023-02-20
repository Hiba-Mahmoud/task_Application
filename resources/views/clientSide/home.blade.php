<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contact-msg">
        <div class="container form">
            <div class="row ">
                <div class="close" onclick="closePopUp()">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <div class="col-12">
                    <form class="text-right">
                        <div class="form-group">
                          <label >الاسم الكامل</label>
                          <input type="name" class="form-control" >
            
                        </div>
                        <div class="form-group">
                            <label >العنوان</label>
                            <input type="name" class="form-control" >
              
                          </div>
                        <div class="contact-info d-flex justify-content-between">
                            <div class="form-group">
                           
                                <label >رقم الهاتف</label>
                                <input type="phone">
                              
                              </div>
                              <div class="form-group">
                                  <label >ايميل</label>
                                  <input type="email">
                              </div>
                        </div>
                        <input type="file" id="file-uploader">
            
                        <div id="feedback">
                          
                        </div>
                        <select class="form-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        <div class="form-group">
                            <label>الرساله</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">إرسال</button>
                      </form>
                </div>
               
            </div>
        </div>
    </div>
    <div class="contac-msg-icon" onclick="popup()">
        <i class="fa-solid fa-envelope"></i>
    </div>
    <nav>
        <div class="container">
           <div class="row justify-content-between">
            
               <div class="col-lg-2 col-6">
                   <div class="d-flex">
                       <div class="d-lg-none menu-icon" onclick="openNav()">
                           <div class="line line-1"></div>
                           <div class="line line-2"></div>
                           <div class="line line-3"></div>
                       </div>
                       <div class="logo">
                           <p>logo</p>
                       </div>
                   </div>
                   
               </div>
            
               <div class="col-7 menu">
   
                   <ul class="main-menu">
                       <li><a href="home.html">
                        الرئيسيه
                        </a></li>
                       <li><a href="about-us.html">
                         من نحن</a></li>
                       <li><a href="projects.html">المشاريع</a></li>
                       <li><a href="index.html">الصور</a></li>
                       <li><a href="contactus.html"> اتصل بنا </a></li>
                   </ul>
               </div>
               <div class="col-3">
                   <div class="icons">
                       <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                       <a href=""><i class="fa-solid fa-user"></i></a>
                   </div>
               </div>
           </div>
        </div>
      </nav>

    <div class="main-bg home d-flex justify-content-between align-items-end">

 
     </div>
    
     <div class="services pt-3 pb-3">
        <div class="services-title text-center">
            <h3>خدماتنا</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 service">
                    <div class="serv ">
                          <div class="serve-title ">
                            <p>أجهزه</p>
                            <p>المزيد <i class="fa-solid fa-arrow-left"></i></p>
                          </div>
                    </div>
                </div>
                <div class="col-md-4  service">
                    <div class="serv">
                          <div class="serve-title ">
                            <p>أجهزه</p>
                            <p>المزيد <i class="fa-solid fa-arrow-left"></i></p>
                          </div>
                    </div>
                </div>
                <div class="col-md-4  service">
                    <div class="serv">
                          <div class="serve-title ">
                            <p>أجهزه</p>
                            <p>المزيد  <i class="fa-solid fa-arrow-left"></i></p>
                          </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <div class="gym-halls gym">
         <div class="gym-halls-details">
            <p><strong>عنوان</strong> <br>
                قم بالاختيار من بين أكثر من 30 نموذج سيرة ذاتية cv
                             احترافي متوفرة باللغة العربية والإنجليزية تناسب جميع المهن والاختصاصات، بعد تحميل السي في التي تعجبك كل ما عليك فعله هو فتحها ببرنامج الورد والتعديل عليها عن طريق إضافة معلوماتك ومهاراتك لتحصل على سيرة 
                             ذاتية تناسب الوظيفة التي تريد التقدم للعمل فيها.
             </p>
             <button class="btn ">اتصل بنا </button>
         </div>
     </div>
     <div class="gym-halls cafe">
        <div class="gym-halls-details mr-auto">
           <p><strong>عنوان</strong> <br>
               قم بالاختيار من بين أكثر من 30 نموذج سيرة ذاتية cv
                            احترافي متوفرة باللغة العربية والإنجليزية تناسب جميع المهن والاختصاصات، بعد تحميل السي في التي تعجبك كل ما عليك فعله هو فتحها ببرنامج الورد والتعديل عليها عن طريق إضافة معلوماتك ومهاراتك لتحصل على سيرة 
                            ذاتية تناسب الوظيفة التي تريد التقدم للعمل فيها.
            </p>
            <button class="btn ">اتصل بنا </button>
        </div>
    </div>

    <div class="gym-halls resturant">
        <div class="gym-halls-details">
           <p><strong>عنوان</strong> <br>
               قم بالاختيار من بين أكثر من 30 نموذج سيرة ذاتية cv
                            احترافي متوفرة باللغة العربية والإنجليزية تناسب جميع المهن والاختصاصات، بعد تحميل السي في التي تعجبك كل ما عليك فعله هو فتحها ببرنامج الورد والتعديل عليها عن طريق إضافة معلوماتك ومهاراتك لتحصل على سيرة 
                            ذاتية تناسب الوظيفة التي تريد التقدم للعمل فيها.
            </p>
            <button class="btn ">اتصل بنا </button>
        </div>
    </div>


     <div class="contact_us mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="details-title">
                        <h3>عنوان</h3>
                    </div>
                    <div class="details-prag">
                        <p>قم بالاختيار من بين أكثر من 30 نموذج سيرة ذاتية cv
                             احترافي متوفرة باللغة العربية والإنجليزية تناسب جميع المهن والاختصاصات، بعد تحميل السي في التي تعجبك كل ما عليك فعله هو فتحها ببرنامج الورد والتعديل عليها عن طريق إضافة معلوماتك ومهاراتك لتحصل على سيرة 
                             ذاتية تناسب الوظيفة التي تريد التقدم للعمل فيها. وفي 
                             أسفل الصفحة ستجد نصائح مفيدة لطريقة كتابة السيرة الذاتية 
                            والمعلومات 
                            التي يجب أن
                             تضمنها فيها.</p>
                    </div>
                    </div>    
                </div>
            </div>
    </div>

     <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="logo-img">
                    <p>logo</p>
                        <img src="" alt="">
                    </div>
                    <div class="social-icon">
                        <ul>
                            <li>
                                <a href=""><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-snapchat"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
        
                        </ul>
                    </div>
                    <div class="msin-links">
                        <ul class="main-menu">
                            <li><a href="">الرئيسيه</a></li>
                            <li><a href="about-us.html">من نحن</a></li>
                            <li><a href="projects.html">المشاريع</a></li>
                            <li><a href="">الصور</a></li>
                            <li><a href="contactus.html">اتصل بنا</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="sub-footer text-center">
            <p>الحقوق محفوظه</p>
         </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
      <script src="js/app.js"></script>

</body>
</html>