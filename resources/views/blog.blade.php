@extends('layout')

@section('title','บทความทั้งหมด')


@section('content')
    <h2 class="text text-center py-2">หน้าบทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">ชื่อบทความ</th>
            <th scope="col">เนื้อหา</th>
            <th scope="col">สถานะบทความ</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{$item["title"]}}</td>
                    <td>{{$item["content"]}}</td>
                    <td>
                        @if ($item["status"]==true)
                            <a href="#" class="btn btn-success">เผยแพร่</a>
                        @else
                            <a href="#" class="btn btn-warning">ฉบับร่าง</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">ไลน์แชทบอทสำหรับการบริการกำจัดแมลงและปลวก BugBusters AI เพื่อตอบสนองการให้บริการที่รวดเร็วแก่ลูกค้า โดยระบบจะมีการให้คำปรึกษาที่ตรงประเด็นกับปัญหาของลูกค้าและการนัดหมายออนไลน์แบบอัตโนมัติ</p>
        </div>
        <div class="col-md-5">
            <!-- Start of Carousel for images only -->
            <div id="featuretteCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/image/bugbuster.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/image/bugbuster.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/image/bugbuster.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 3">
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#featuretteCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#featuretteCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End of Carousel -->
        </div>
    </div>
    
    
@endsection