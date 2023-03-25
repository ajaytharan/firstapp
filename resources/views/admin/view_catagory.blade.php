<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>
<style>
    .top {
        font-size: 50px;

    }

    .inputs_c {
        margin-top: 50px;
        color: white;
        padding-left: 30px;
    }

    .inputs_c .write {
        background-color: rgb(27, 27, 27);
        color: rgba(255, 255, 255, 0.63);


    }
</style>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sider')


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session()->has('message'))
                        <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="div_center">
                        <h1 class="top text-center ">Add Catagory </h1>

                        <form class="inputs_c text-center" action="{{ url('add_catagory') }}" method="POST">
                            @csrf
                            <input class="write" type="text" name="catagory" id=""
                                placeholder="write catagory...">
                            <input class="btn btn-success ml-3" type="submit" value="Add catagory">

                        </form>
                    </div>

                    <table class="table table-dark table-hover mx-auto w-75 mt-10 text-center">
                        <tr class="text-light">
                            <th>Catagory Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->catagory_name }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger "
                                        href="{{ url('delete_catagory', $data->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>


        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    @include('admin.script')


</body>

</html>
