<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HireOps Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
            border-radius: 8px;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar">
        <h4>HireOps</h4>
        <a href="/admin/dashboard"><i class="fas fa-home"></i> Dashboard</a>
        <a href="/admin/companies"><i class="fas fa-building"></i> Companies</a>
        <a href="/admin/employees"><i class="fas fa-users"></i> Employees</a>
        <a href="/admin/tasks"><i class="fas fa-tasks"></i> Tasks</a>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">

        <!-- Topbar -->
        <div class="d-flex justify-content-between mb-4">
            <h3>Admin Panel</h3>
            <button class="btn btn-danger">Logout</button>
        </div>

        @yield('content')

    </div>

</div>

</body>
</html>
