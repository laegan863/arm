@extends('Layout.index')
@section('content')
<div class="content" style="background-color:white; ; letter-spacing:1px;">

    <h1 class="text-center">About Us</h1><br>

    <p class="lead text-center">Welcome to ARM, your innovative solution for quick and easy access to one of the most essential needs—rice. Our rice vending machines are designed to provide fresh, locally sourced rice that is sustainable at your convenience and offers a variety types of rice to choose from, ensuring that you can enjoy premium quality grains. Whether you're preparing a family meal, our machines allow you to choose exactly what you need at ease.</p>
<br><br><hr><br><br>
    <div class="row mt-4">
        <div class="col-lg-6">
            <h2>Our Mission</h2>
            <p>To revolutionize the way people access rice by transitioning it to digital while providing a sustainable, fresh, and convenient solution that can benefit both customers and owners.</p>
        </div>
        <div class="col-lg-6">
            <h2>Our Vision</h2>
            <p>To bring convenience and sustainability that is accessible for communities to enjoy fresh, high-quality rice while supporting local farmers and reducing environmental impact.</p>
        </div>
    </div>
    <br><br><hr><br><br>

<h1 class="text-center">Our Team</h1>
<div class="row mt-5" style="display: flex; justify-content: center;">
    
    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
        <div class="card-body text-center">
            <a class="d-block mb-2" href="#">
            <div class="image mb-3 d-inline-flex mt-n8">
                <img src="{{asset('Assets/images/Members/Chester.jpg')}}"  class="img-fluid rounded-circle d-inline-block" width="100" alt="Avatar Image">
            </div>

            <h5 class="card-title">Chester G. Anillo</h5>
            </a>

            <ul class="list-unstyled d-inline-block mb-5">
            <li class="d-flex mb-1">
                <i class="mdi mdi-tag mr-1"></i>
                <span>Project Manager</span>
            </li>
            <li class="d-flex">
                <i class="mdi mdi-email mr-1"></i>
                <span>chesterdavea@gmail.com</span>
            </li>
            </ul>
        </div>
        </div>
    </div>

        <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
        <div class="card-body text-center">
            <a class="d-block mb-2" href="#">
            <div class="image mb-3 d-inline-flex mt-n8">
                <img src="{{asset('Assets/images/Members/Jhay.jpg')}}"  class="img-fluid rounded-circle d-inline-block" width="100" alt="Avatar Image">
            </div>

            <h5 class="card-title">Jhay L. Bayot</h5>
            </a>

            <ul class="list-unstyled d-inline-block mb-5">
            <li class="d-flex mb-1">
                <i class="mdi mdi-tag mr-1"></i>
                <span>Programmer</span>
            </li>
            <li class="d-flex">
                <i class="mdi mdi-email mr-1"></i>
                <span>jhaybayot48@gmail.com</span>
            </li>
            </ul>
        </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
        <div class="card-body text-center">
            <a class="d-block mb-2" href="#">
            <div class="image mb-3 d-inline-flex mt-n8">
                <img src="{{asset('Assets/images/Members/Jonathan.jpg')}}"  class="img-fluid rounded-circle d-inline-block" width="100" alt="Avatar Image">
            </div>

            <h5 class="card-title">Jonathan E. Gicana</h5>
            </a>

            <ul class="list-unstyled d-inline-block mb-5">
            <li class="d-flex mb-1">
                <i class="mdi mdi-tag mr-1"></i>
                <span>Assistant Programmer</span>
            </li>
            <li class="d-flex">
                <i class="mdi mdi-email mr-1"></i>
                <span>gicanajonathan19@gmail.com</span>
            </li>
            </ul>
        </div>
        </div>
    </div>

    


    


</div>

<div class="row" style="display: flex; justify-content: center;">
    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
        <div class="card-body text-center">
            <a class="d-block mb-2" href="#">
            <div class="image mb-3 d-inline-flex mt-n8">
                <img src="{{asset('Assets/images/Members/Rachel.jpg')}}"  class="img-fluid rounded-circle d-inline-block" width="100" alt="Avatar Image">
            </div>

            <h5 class="card-title">Rachel Paula N. Ponce</h5>
            </a>

            <ul class="list-unstyled d-inline-block mb-5">
            <li class="d-flex mb-1">
                <i class="mdi mdi-tag mr-1"></i>
                <span>Systems Analyst</span>
            </li>
            <li class="d-flex">
                <i class="mdi mdi-email mr-1"></i>
                <span>poncerachelle196@gmail.com</span>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
        <div class="card-body text-center">
            <a class="d-block mb-2" href="#">
            <div class="image mb-3 d-inline-flex mt-n8">
                <img src="{{asset('Assets/images/Members/Icol.jpg')}}"  class="img-fluid rounded-circle d-inline-block" width="100" alt="Avatar Image">
            </div>

            <h5 class="card-title">Icol A. Pecha</h5>
            </a>

            <ul class="list-unstyled d-inline-block mb-5">
            <li class="d-flex mb-1">
                <i class="mdi mdi-tag mr-1"></i>
                <span>Assistant Systems Analyst</span>
            </li>
            <li class="d-flex">
                <i class="mdi mdi-email mr-1"></i>
                <span>pechaicol2427@gmail.com</span>
            </li>
            </ul>
        </div>
        </div>
    </div>
</div>


@endsection