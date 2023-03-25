<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<style>
    .top {
        font-size: 50px;

    }

    #write1 {
        background-color: rgb(27, 27, 27);
        color: rgb(255, 255, 255);

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

                    <div class="center_div">
                        <p class="top text-center">Add Product</p>

                        <form class="container w-50 " action="{{ url('add_product') }}" method="POST">

                            @csrf

                            <div class="mb-4 ">
                                <label class="form-label">Product Title</label>
                                <input type="text" class="form-control" name="title" id="write1"
                                    placeholder="write a title" required>

                            </div>

                            <div class="mb-4">
                                <label class="form-label">Product Discription</label>
                                <input type="text" class="form-control" name="discription" id="write1"
                                    placeholder="write a discription">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Product Price</label>
                                <input type="number" class="form-control" name="price" id="write1"
                                    placeholder="write a price" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Discount Price</label>
                                <input type="number" class="form-control" name="discount_price" id="write1"
                                    placeholder="write a discount">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Product Quantity</label>
                                <input type="number" min="0" class="form-control" name="quality" id="write1"
                                    placeholder="write a quantity" required>
                            </div>


                            <div class="mb-4">
                                <label class="form-label">Product Catagory : </label>
                                <select id="write1" name="catagory" required>
                                    <option value="">Add a catagory</option>

                                    @foreach ($catagory as $catagory)
                                        <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mb-4">
                                <label class="form-label">Product Image here </label>
                                <input type="file" class="form-control  " name="image" id="write1">
                            </div>


                            <button type="submit" class="btn btn-danger ">Add Product</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    @include('admin.script')


</body>

</html>
