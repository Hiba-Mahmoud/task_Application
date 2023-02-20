@extends('layouts.main')
@section('content')
@if (Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="main-bg home">
      <div class="title">
        <h1>تجهيز صالات الجيم</h1>
      </div>
   </div>
   <div class="contact_us">
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
            <div class="col-lg-2">
               <button class="btn">اتصل بنا </button>
            </div>
        </div>
    </div>
    <div class="gym-machine">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <div class="icon-img">
                            <img src="./images/icons8-bicycle-64.png" alt="">
                        </div>
                        <div class="machine-prag">
                            <h4>عنوان عنوان عنوان</h4>
                            <p>إن كنت تبحث عن تحميل نموذج سيرة ذاتية فارغ وجاهز للتعبئة للورد word مجانا فأنت في
                                 المكان الصحيح، في هذه الصفحة ستجد مجموعة من النماذج الاحترافية التي يمكنك تحميلها بصيغة .doc والتعديل عليها ببرنامج الورد مجانا.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <div class="icon-img">
                            <img src="./images/icons8-bicycle-64.png" alt="">
                        </div>
                        <div class="machine-prag">
                            <h4>عنوان عنوان عنوان</h4>
                            <p>إن كنت تبحث عن تحميل نموذج سيرة ذاتية فارغ وجاهز للتعبئة للورد word مجانا فأنت في
                                 المكان الصحيح، في هذه الصفحة ستجد مجموعة من النماذج الاحترافية التي يمكنك تحميلها بصيغة .doc والتعديل عليها ببرنامج الورد مجانا.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <div class="icon-img">
                            <img src="./images/icons8-bicycle-64.png" alt="">
                        </div>
                        <div class="machine-prag">
                            <h4>عنوان عنوان عنوان</h4>
                            <p>إن كنت تبحث عن تحميل نموذج سيرة ذاتية فارغ وجاهز للتعبئة للورد word مجانا فأنت في
                                 المكان الصحيح، في هذه الصفحة ستجد مجموعة من النماذج الاحترافية التي يمكنك تحميلها بصيغة .doc والتعديل عليها ببرنامج الورد مجانا.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <div class="icon-img">
                            <img src="./images/icons8-bicycle-64.png" alt="">
                        </div>
                        <div class="machine-prag">
                            <h4>عنوان عنوان عنوان</h4>
                            <p>إن كنت تبحث عن تحميل نموذج سيرة ذاتية فارغ وجاهز للتعبئة للورد word مجانا فأنت في
                                 المكان الصحيح، في هذه الصفحة ستجد مجموعة من النماذج الاحترافية التي يمكنك تحميلها بصيغة .doc والتعديل عليها ببرنامج الورد مجانا.</p>
                        </div>
                    </div>
                </div>
            </div>
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
    <div class="learn-more">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="learn-more-details">
                        <p>اعرف المزيد من التفاصيل</p>
                        <button class="btn-details">المزيد من التفاصيل</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

   </div>
@endsection



