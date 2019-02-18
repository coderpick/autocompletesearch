<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/css/shop-homepage.css') }}" rel="stylesheet">
    <style>
        p.itemlist {
            display: block;
            font-size: 12px;
            margin-bottom: 0;
            text-align: right;
            padding-right: 3px;
        }
        .list-group-item:hover {
            z-index: 1;
            text-decoration: none;
            background: #f7f7f7;
        }
        .item-clearfix{
            clear: both;
            display: block;
            padding: 2px;
            min-height: 60px;
            outline: none;
            opacity: 1;
            text-decoration: none;
        }
      .item-thumbnail {
            display: inline-block;
            float: left;
            margin: 5px 10px 5px 0px;
            text-align: center;
            width: 70px;
        }
      .item-overhidden {
            display: block;
            overflow: hidden;
        }
        .item-title{
            display: block;
            color: #0288d1;
            font-weight: bold;
            font-size: 100%;
            margin-top: 3px;
        }
        .item-description{
            display: block;
            margin-top: 5px;
            color: #747474;
        }
        .item-price{
            float: left;
            margin-top: 6px;
            color: #014e70;
            font-weight: bold;
            font-size: 115%;
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.page') }}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.page') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

 @yield('content')

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $('#search').keyup(function () {
        const  query = $(this).val();
        if (query !=null)
        {
            const _token = $('input[name="_token"]').val();
            $.ajax({
                url:'{{ route('autocomplete.search') }}',
                method:'POST',
                data:{ query:query,_token:_token},
                success:function (data) {
                    $('#searchProduct').fadeIn();
                    $('#searchProduct').html(data);
                }
            });
        }
        $(document).on('click', 'body', function(){
            $('#searchProduct').val($(this).text());
            $('#searchProduct').fadeOut();
        });

    })
</script>
</body>

</html>
