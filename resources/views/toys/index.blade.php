@extends('layout')

@section('content')
    <style>
        /* General styling */
        h1 {
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        a:hover {
            background-color: #0056b3;
        }

        ul {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
        }

        li {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li a {
            background-color: #ffc107;
            color: #333;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }

        li a:hover {
            background-color: #e0a800;
        }

        form {
            display: inline;
        }

        button {
            padding: 5px 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>

    <h1>My Toys</h1>
    <a href="{{ route('toys.create') }}">Add New Toy</a>
    <ul>
        @foreach($toys as $toy)
            <li>
                <span>{{ $toy->name }} - {{ $toy->description }}</span>
                <div>
                    <a href="{{ route('toys.edit', $toy->id) }}">Edit</a>
                    <form action="{{ route('toys.destroy', $toy->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection