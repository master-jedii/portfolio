@extends('layout')

@section('title','Portfolio')

@section('content')
    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .carousel, .carousel-inner,{
            width: 100vw;
            height: 70vh;
        }
        .container {
            margin-top: 20px;
        }
    </style>
    <div class="main">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('assets/image/krungthaifood.jpg') }}" class="d-block w-100" style="height: 70vh; object-fit: cover;" alt="Slide 1">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Internship</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>            
            <div class="carousel-item">
                <img src="{{ asset('assets/image/krungthaifood.jpg') }}" class="d-block w-100" style="height: 70vh; object-fit: cover;" alt="Slide 1">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Activity</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="{{ asset('assets/image/krungthaifood.jpg') }}" class="d-block w-100" style="height: 70vh; object-fit: cover;" alt="Slide 1">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Internship</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>            

        <div class="container marketing">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/image/Me.jpg') }}" class="rounded-circle" width="150" height="150" alt="Profile 1">
                    <h2>
                        Pemakon Khaipong (Bass)
                    </h2>
                    <p>
                        <i class="bi bi-telephone"></i> +66 62 264 3213<br>
                        <i class="bi bi-house-door"></i> Silpakorn University<br>
                        <i class="bi bi-power"></i> Bachelor of Sciences (Digital Technology for Business)<br>
                        <i class="bi bi-envelope"></i> pemakon.vlr@gmail.com<br>
                        <i class="bi-person-circle"></i> Age : 22<br>
                        <i class="bi bi-github"></i> GitHub: <a href="https://github.com/master-jedii" target="_blank">Pemakon Khaipong</a><br> 
                        <br>
                        อยากพัฒนาความสามารถของตัวเอง
                        มีความกระตือรือร้นที่จะเรียนรู้และปรับตัวตามเทคโนโลยีใหม่ ๆ มีความคิดสร้างสรรค์ที่จะเสนอแนวคิดและแก้ไขปัญหาที่ซับซ้อนให้กับองค์กร
                    </p>
                </div>
            </div>
            
            <hr class="featurette-divider">

            {{-- //เริ่ม project // --}}
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Su Kits <span class="text-muted">"Full Stack"</span></h2>
                    <p class="lead">Full Stack Project Thesis : เว็บไซต์ระบบยืมคืนอุปกรณ์ภายในคณะเพื่อช่วยอำนวยความสัดวกในการจัดการอุปกรณ์ที่ใช้ในกิจกรรมการเรียนการสอนและวิจัยต่างๆ เช่น กล้องถ่ายภาพ หรืออื่นๆ ระบบนี้ช่วยให้ นักศึกษา/บุคลากร สามารถยื่นข้อเสนอการจอง ยืม และคืนอุปกรณ์ ได้สะดวกผ่านเว็บไซต์ พร้อมฟังก์ชันที่ช่วยให้ผู้ดูแลระบบ สามารถบริหารจัดการกับข้อมูลอุปกรณ์และติดตามสถานะได้อย่างมีประสิทธิภาพ</p>
                    <p>ปีการศึกษา 2568</p>
                </div>
                <div class="col-md-5">
                    <!-- Start of Carousel for images only -->
                    <div id="featuretteCarousel0" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/image/su.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/su.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/su.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/su.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 4">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#featuretteCarousel0" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featuretteCarousel0" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <!-- End of Carousel -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Bugbusters AI <span class="text-muted">"Gemini"</span></h2>
                    <p class="lead">Full Stack Project จุลนิพนธ์ : ไลน์แชทบอทสำหรับการบริการกำจัดแมลงและปลวก BugBusters AI เพื่อตอบสนองการให้บริการที่รวดเร็วแก่ลูกค้า โดยระบบจะมีการให้คำปรึกษาที่ตรงประเด็นกับปัญหาของลูกค้าและการนัดหมายออนไลน์แบบอัตโนมัติ</p>
                    <p>ปีการศึกษา 2567</p>
                </div>
                <div class="col-md-5">
                    <!-- Start of Carousel for images only -->
                    <div id="featuretteCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/image/bugbusterai.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/richmenu.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/bugbusterphone.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/bugbusterphone2.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 4">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#featuretteCarousel1" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featuretteCarousel1" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <!-- End of Carousel -->
                </div>
            </div>
            <hr class="featurette-divider">
            
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Project Intern <span class="text-muted">"yolo v.8"</span></h2>
                    <p class="lead">Full Stack Project Intern : ได้ศึกษาเกี่ยวกับการ train  model Ai
                        การจัดการเตรียม dataset
                        สำหรับการตรวจจับวัตถุของเมล็ดข้าวโพด จำแนกประเภท
                        เมล็ดข้าวโพด และแสดงผลบนเว็บไซต์ รวมไปถึงการบันถึกล็อตต่างๆเพื่อ approve ประเภทของเมล็ดข้าวโพดลงใน database</p>
                    <p>ปีการศึกษา 2567</p>
                </div>
                <div class="col-md-5">
                    <!-- Start of Carousel for images only -->
                    <div id="featuretteCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/image/Intern.jpg') }}" class="d-block mx-auto featuretteInern-image img-fluid" width="500" height="500" alt="Feature 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/internlogin.jpg') }}" class="d-block mx-auto featuretteInern-image img-fluid" width="500" height="500" alt="Feature 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/internlist.jpg') }}" class="d-block mx-auto featuretteInern-image img-fluid" width="500" height="500" alt="Feature 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/internlot.jpg') }}" class="d-block mx-auto featuretteInern-image img-fluid" width="500" height="500" alt="Feature 3">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#featuretteCarousel2" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featuretteCarousel2" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <!-- End of Carousel -->
                </div>
            </div>
            <hr class="featurette-divider">
            
            {{-- //เริ่ม project // --}}
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Senligh <span class="text-muted">"Front-end"</span></h2>
                    <p class="lead">ได้ทำการ Rebranding และ Redesign หน้าเว็บไซต์หลักและทำการเปลี่ยนชื่อเป็น  Senligh mouse และ Coding CSS มีการ Hover ปุ่มเพื่อโต้ตอบการตอบสนองต่อการสัมผัส</p>
                    <p>ปีการศึกษา 2566</p>
                </div>
                <div class="col-md-5">
                    <!-- Start of Carousel for images only -->
                    <div id="featuretteCarousel4" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/image/mouse.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/mouse2.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/mouse3.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/mouse4.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 3">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#featuretteCarousel4" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featuretteCarousel4" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <!-- End of Carousel -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Bannongmha <span class="text-muted">"Front-end"</span></h2>
                    <p class="lead">Final Project (non profit organization) : วางแผนและออกแบบโครงสร้างเว็บไซต์
                        เพื่อช่วยให้ผู้ใช้สามารถค้นหาบ้านให้สุนัขจรจัดได้อย่างสะดวก
                        ออกแบบอินเตอร์เฟซที่มีความสวยงามและสื่อสารข้อมูลต่างๆ 
                        ที่เกี่ยวกับการให้บ้านให้สุนัขจรจัด</p>
                    <p>ปีการศึกษา 2566</p>
                </div>
                <div class="col-md-5">
                    <!-- Start of Carousel for images only -->
                    <div id="featuretteCarousel5" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/image/bannongmha.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/image/bannongmha2.jpg') }}" class="d-block mx-auto featurette-image img-fluid" width="500" height="500" alt="Feature 2">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#featuretteCarousel5" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featuretteCarousel5" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <!-- End of Carousel -->
                </div>
            </div>
            <hr class="featurette-divider">
        </div>        
@endsection
