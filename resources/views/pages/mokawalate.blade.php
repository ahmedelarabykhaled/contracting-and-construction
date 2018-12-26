@extends('layouts.main')
@section('content')

<section>
    <div class="container-fluid p-5"  style="background-color: #ddd">
        <h2 class="text-center p-5"> خدمات الشركه</h2>
        <div class="row text-right">

            <div class="col-md-6 p-5">
                <div class="card" style="width: 100%">
                    <img src="{{url('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">المقاولات</h5>
                        <p class="card-text">التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="card" style="width: 100%">
                    <img src="{{url('images/2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">الانشائات</h5>
                        <p class="card-text">التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="card" style="width: 100%">
                    <img src="{{url('images/2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">اداره المرافق العامه</h5>
                        <p class="card-text">أعمال السباكه والنجاره والدهانات - تنظيف مجارى الهواء - نظافة المبانى والواجهات والمسابح </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="card" style="width: 100%">
                    <img src="{{url('images/2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">اداره الصيانه والتشغيل</h5>
                        <p class="card-text">المصاعد والسلالم الكهربائية - أنظمة السلامة ومكافحة الحريق-أعمال انظمة التكييف - الأنظمة الأمنية والمراقبة والكاميرات - أنظمة توليد الطاقة - صيانة المولدات والقواطع الكهربائية- صيانة لوحات توزيع الطاقة- أعمال التمديدات   الكهربائية </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@stop
