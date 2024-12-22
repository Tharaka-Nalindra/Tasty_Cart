<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        input[type='text'] {
            width: 400px;
            height: 50px;
        }

        .div_design{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
    </style>
</head>

<body>

    @include('admin.heder')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Add Category</h1>
                <div class="div_design">
                    <form action="{{ url('add_category') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="category">

                            <input type="submit" value="Add Category" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
