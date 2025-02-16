@extends('layout')

@section('content')
    <style>
        /* General styling for the form */
        h1 {
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>

    <h1>Add a New Toy</h1>
    <form action="{{ route('toys.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Toy Name">
        <textarea name="description" placeholder="Toy Description"></textarea>
        <button type="submit">Save</button>
    </form>
@endsection