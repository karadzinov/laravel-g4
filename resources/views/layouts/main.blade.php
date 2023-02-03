<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="/admin/img/mdb-favicon.ico" type="image/x-icon"/>
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="/admin/css/mdb.min.css"/>
    <link rel="stylesheet" href="/admin/css/custom.css"/>
</head>
<body>
@include('partials.header')
<!-- Start your project here-->
<div class="container">
    <div class="row m-auto mt-xl-4">
        <!--
        <div class="col-2">
            <div class="d-flex align-items-center">
                <ul class="list-group" style="list-style: none;">
                    <li><a href="/admin/users" class="btn btn-primary me-3">Users</a></li>
                    <li class="mt-xl-3"><a href="/admin/products" class="btn btn-warning me-3">Products</a></li>

                </ul>


            </div>
        </div>
        -->
        <div class="col-3">
            <div class="flex-column" style="width: 220px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/admin/users" class="btn btn-primary">Users</a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/products" class="btn btn-warning">Products</a>
                    </li>

                </ul>

            </div>
        </div>
        <div class="col-9">
            @yield('section')
        </div>
    </div>

</div>

<!-- End your project here-->


@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="/admin/js/mdb.min.js"></script>
<script type="text/javascript"></script>
</body>
</html>
