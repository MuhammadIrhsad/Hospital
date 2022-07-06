<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Appointmenst</title>
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
            
            <div class="py-4 container">
                <table class="table table-transparent table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead class="p-5">
                        <tr>
                            <th class='p-3' scope="col">Doctor Name</th>
                            <th class='p-3' scope="col">Date</th>
                            <th class='p-3' scope="col">Message</th>
                            <th class='p-3' scope="col">Status</th>
                            <th class='p-3' scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody class='p-4'>
                        {{-- @foreach ($appointments as $appoint)
                            <tr>
                                <td class="p-2">{{ $appoint->doctor }}</td>
                                <td class="p-2">{{ $appoint->date }}</th>
                                <td class="p-2">{{ $appoint->message }}</td>
                                <td class="p-2">{{ $appoint->status }}</td>
                                <td class="p-2"><a class="btn btn-danger"
                                        onclick="return confirm('Do you really want to delete ?')"
                                        href="{{ url('deleteappointment') }}/{{ $appoint->id }}">Cancel</a></td>
                            </tr>
                        @endforeach --}}
        
                    </tbody>
                </table>
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
