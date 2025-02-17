<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
  <h1>Hasmany throw Query</h1>

    <table>
        <thead>
            <tr>
                <th>Employee</th>
                <th>Category</th>
                <th>Product</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>
                        @foreach($client -> catagories as $prod)
                        {{$prod ->name}} <br>
                        @endforeach
                    </td>
                    {{-- <td>
                        @foreach($client -> products as $pro)
                        {{$pro ->name}} <br>
                        @endforeach
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
