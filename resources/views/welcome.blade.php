@extends('layouts.main')
@section('content')

<!-- main slider -->
<section class="block1">
    <div class="upper">
        <div class="para text-center">
            <h2 class="p-5 fa-6x" >شركه التجربه</h2>
            <h3>للمقاولات والانشائات الهندسيه</h3>
            <h3 class="py-5">بيتك عندنا</h3>
        </div>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('images/slider/1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{url('images/slider/2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{url('images/slider/3.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{url('images/slider/4.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{url('images/slider/5.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section>
<!-- end main slider -->

<section class="block2">
    <div class="para text-center pt-5">
        <h2 class="p-4 mt-5">اخبار الشركه</h2>
        <div class="line mx-auto"></div>
    </div>
    <div class="content p-5">
        <p class="text-center px-5 mx-5">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
    </div>

    <div style="background-color: #eee">
        <div class="para text-center pt-5">
            <h2 class="p-4 mt-5">الصور</h2>
            <div class="line mx-auto"></div>
        </div>
        <div class="content p-5">
            <div class="owl-carousel owl-theme first">
                <div class="item">
                    <img src="{{url('images/slider/1.jpg')}}" class="d-block w-100 rounded">
                </div>
                <div class="item">
                    <img src="{{url('images/slider/2.jpg')}}" class="d-block w-100  rounded">
                </div>
                <div class="item">
                    <img src="{{url('images/slider/3.jpg')}}" class="d-block w-100  rounded">
                </div>
                <div class="item">
                    <img src="{{url('images/slider/4.jpg')}}" class="d-block w-100  rounded">
                </div>
            </div>
        </div>
    </div>

    <div class="para text-center pt-5">
        <h2 class="p-4 mt-5">فعاليات الشركه</h2>
        <div class="line mx-auto"></div>
    </div>
    <div class="content p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-right p-3">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{url('images/slider/4.jpg')}}" class="d-block w-100  rounded">
                </div>
            </div>
        </div>
    </div>
    <div class="text-center m-5">
        <iframe width="90%" height="400px" src="https://www.youtube.com/embed/TkHoCBON9ck" frameborder="0"></iframe>
    </div>
</section>

<section class="block3" style="background-color: #eee">
    <div class="para text-center pt-5">
        <h2 class="p-4 mt-5">خدمات الشركه</h2>
        <div class="line mx-auto"></div>
    </div>
    <div class="content p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 my-4">
                    <div class="card">
                        <img src="{{url('images/slider/4.jpg')}}" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title text-right">المقاولات والانشائات</h5>
                            <p class="card-text text-right">المقاولات و الانشائات</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 my-4">
                    <div class="card">
                        <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title text-right">اداره المرافق العامه</h5>
                            <p class="card-text text-right">أعمال السباكه والنجاره والدهانات - تنظيف مجارى الهواء - نظافة المبانى والواجهات والمسابح </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 my-4">
                    <div class="card">
                        <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title text-right">اداره الصيانه والتشغيل</h5>
                            <p class="card-text text-right">المصاعد والسلالم الكهربائية - أنظمة السلامة ومكافحة الحريق-أعمال انظمة التكييف - الأنظمة الأمنية والمراقبة والكاميرات - أنظمة توليد الطاقة - صيانة المولدات والقواطع الكهربائية- صيانة لوحات توزيع الطاقة- أعمال التمديدات   الكهربائية </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--    بدايه المشاريع  -->
<section class="block4 p-5">
    <div class="para">
        <h2 class="text-center">المشاريع</h2>
        <div class="line">
            <nav>
                <div class="nav nav-tabs mx-auto my-5" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">المقاولات</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">اداره المرافق</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">اداره الصيانه</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الاول</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الثانى</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div><div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الثالث</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الاول</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الثانى</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div><div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الثالث</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الاول</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الثانى</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div><div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الثالث</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 my-4">
                                <div class="card">
                                    <img src="{{url('images/slider/3.jpg')}}" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">المشروع الرابع</h5>
                                        <p class="card-text">القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   نهايه المشاريع  -->

<!--  اهم العملاء-->
<section class="p-5 block5" style="background-color: #eee">
    <h2 class="text-center p-5"> اهم العملاء</h2>
    <div class="line"></div>
    <div class="owl-carousel owl-theme second">
        <div class="item text-center border p-3">
            <h2>احمد خالد</h2>
            <p>مدير شركه مقاولات</p>
            <p class="text-center px-5 mx-auto article">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ .
            </p>
        </div>
        <div class="item text-center border p-3">
            <h2>محمد ابراهيم</h2>
            <p>مدير شركه مقاولات</p>
            <p class="text-center px-5 mx-auto article">اك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ .
            </p>
        </div>
        <div class="item text-center border p-3">
            <h2>جلال محمود</h2>
            <p>مدير شركه مقاولات</p>
            <p class="text-center px-5 mx-auto article">اك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ .
            </p>
        </div>
    </div>
</section>
<!--نهايه اهم العملاء-->


@stop
