<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->

        @include('admin.navbar')
        <!-- partial -->



        <div class="container page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container d-flex align-items-center justify-content-center "
                        style="background-color: black">
                        <div class="row d-flex flex-column align-items-center justify-content-center">
                            <div class="col-12 col-md-8">

                                {{-- add Doctor Form --}}

                                <form action="{{ route('admin.upload_doctor') }}" class="row g-3 text-light"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="doctor_name" class="form-label">Name</label>
                                        <input type="text" name="name"
                                            class="form-control rounded bg-light text-dark" id="doctor_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="doctor_phone" class="form-label ">Phone</label>
                                        <input type="text" name="phone"
                                            class="form-control rounded bg-light text-dark" id="doctor_phone">
                                    </div>
                                    <div class="col-12">
                                        <label for="speciality" class="form-label">Speciality</label>
                                        <select id="speciality" name="speciality"
                                            class="form-select bg-light text-dark">
                                            <option>---select---</option>
                                            <option value="Heart">Heart</option>
                                            <option value="Nose">Nose</option>
                                            <option value="Eye">Eye</option>
                                            <option value="Skin">Skin</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="room_no" class="form-label">Room No</label>
                                        <input type="text" name="room"
                                            class="form-control rounded text-dark bg-light" id="room_no"
                                            placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-12">
                                        <label for="doctor_image" class="form-label">Doctor Image</label>
                                        <input class="form-control rounded bg-light text-dark" name='doctor_image'
                                            type="file" id="doctor_image">

                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else. --}}
                                    </div>
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center ">

                                <button type="submit" class=" m-4 btn-sm btn-danger bg-secondary">Add Doctor</button>
                            </div>
                            <div class="col-10">
                                @if (session()->has('message'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ session()->get('message') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">X</button>
                                    </div>
                                @endif
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
</body>

</html>
