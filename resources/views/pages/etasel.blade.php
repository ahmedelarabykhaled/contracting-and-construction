@extends('layouts.main')
@section('content')

<div class="container p-5">
    <h2 class="py-5 text-center">اتصل بنا</h2>
    <div class="row p-3" style="border: #333 2px solid;">
        <div class="col-md-6">
            <img src="{{url('images/1.jpg')}}" class="w-100 my-5"/>
            <img src="{{url('images/2.jpg')}}" class="w-100 my-5"/>
        </div>
        <div class="col-md-6 text-right">
            <div class="container-fluid">
                <div class="row pt-5">
                    <div class="col-11">
                        <p>عنوان الشركه فى مصر او اى مكان فى العالمعنوان الشركه فى مصر او اى مكان فى العالمعنوان الشركه فى مصر او اى مكان فى العالم</p>
                    </div>
                    <div class="col-1">
                        <i class=" fa-lg fas fa-map-marked-alt"></i>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-11">
                        <p>9085706548</p>
                        <p>9085706548</p>
                        <p>9085706548</p>
                        <p>9085706548</p>
                    </div>
                    <div class="col-1">
                        <i class="fa-lg fas fa-phone"></i>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-11">
                        <p>company_name_843@yahoo.com</p>
                    </div>
                    <div class="col-1">
                        <i class="fa-lg fas fa-envelope"></i>
                    </div>
                </div>
                <div class="row my-4 border p-3 rounded">
                    <div class="col-11">
                        <form class="my-4">
                            <textarea class="form-control" style="border: 1px #333 solid;"></textarea>
                            <button class="btn btn-primary my-4">ارسل رساله</button>
                        </form>
                    </div>
                    <div class="col-1">
                        <i class="far fa-lg fa-comment-alt"></i>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row my-5">
        <div class="col-12 mx-auto p-3" style="border: 2px #333 solid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3427.7524382769634!2d30.9946673!3d30.781526899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c95df01a507d%3A0x59edac01a9eb7577!2z2YXYrdi32Ycg2LfZhti32KfYjCDYt9mG2LfYpyAo2YLYs9mFIDIp2Iwg2LfZhti32KfYjCDYp9mE2LrYsdio2YrYqQ!5e0!3m2!1sar!2seg!4v1545843214034" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

@stop
