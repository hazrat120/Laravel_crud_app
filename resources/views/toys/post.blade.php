<!DOCTYPE html>
<html>
<head>
    <title>Users and Their Posts</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4a90e2;
        }

        /* User Card Styling */
        .user-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .user-card h2 {
            margin-top: 0;
            color: #333;
        }

        .user-card p {
            margin: 5px 0;
            color: #666;
        }

        /* Posts List Styling */
        .posts-list {
            list-style-type: none;
            padding: 0;
        }

        .posts-list li {
            background-color: #f9f9f9;
            border-left: 4px solid #4a90e2;
            margin: 10px 0;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .posts-list li:hover {
            background-color: #e0f7fa;
        }

        .posts-list li strong {
            color: #4a90e2;
        }

        .posts-list li p {
            margin: 5px 0;
            color: #555;
        }

        /* Divider Styling */
        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }

        /* Interactive Button */
        .toggle-button {
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .toggle-button:hover {
            background-color: #357abd;
        }
    </style>
</head>
<body>
    <h1>Users and Their Posts</h1>

    <!-- Toggle Button for Interactivity -->
    <button class="toggle-button" onclick="togglePosts()">Toggle Posts</button>

    @foreach($posts as $user)
        <div class="user-card">
            <h2>{{ $user->name }}</h2>
            <p>Email: {{ $user->email }}</p>
            <p>Registered At: {{ $user->created_at->format('Y-m-d H:i:s') }}</p>

            <h3>Posts:</h3>
            <ul class="posts-list">
                @foreach($user->posts as $post)
                    <li>
                        <strong>{{ $post->title }}</strong>
                        <p>{{ $post->content }}</p>
                        <p>Created At: {{ $post->created_at->format('Y-m-d H:i:s') }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <hr>
    @endforeach

    <script>
        // JavaScript for Toggle Functionality
        function togglePosts() {
            const postsLists = document.querySelectorAll('.posts-list');
            postsLists.forEach(list => {
                if (list.style.display === 'none') {
                    list.style.display = 'block';
                } else {
                    list.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>