<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #343a40;
        }
        .table {
            border-collapse: collapse;
        }
        .table thead {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #dbeafe;
        }
        .table th, .table td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>

    {{-- Citizen  Data --}}
<div class="container">
    <h2>One To One Relation</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Age</th>
                <th>Passport Name</th>
                <th>National ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasports as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->passport->name ?? 'N/A' }}</td>
                    <td>{{ $user->passport->national_id ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Pasport Data --}}
{{-- <div class="container">
    <h2>One To One Relation</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Age</th>
                <th>Passport Name</th>
                <th>National ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citizens as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->passport->name ?? 'N/A' }}</td>
                    <td>{{ $user->passport->national_id ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
