<!DOCTYPE html>
<html>
<head>
    <title>Inventory Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h2 >Inventory Management</h2>
    <br>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="{{ route('dashboard.index') }}" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="{{ route('categories.index') }}" class="list-group-item list-group-item-action">Categories</a>
                <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action">Products</a>
                <a href="{{ route('suppliers.index') }}" class="list-group-item list-group-item-action">Suppliers</a>
                <a href="{{ route('customers.index') }}" class="list-group-item list-group-item-action">Customers</a>
                <a href="{{ route('orders.index') }}" class="list-group-item list-group-item-action">Orders</a>

                <!-- Logout Button -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="list-group-item list-group-item-action">
                    @csrf
                    <button type="submit" class="= btn btn-danger align-baseline">Logout</button>
              
                </form>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
