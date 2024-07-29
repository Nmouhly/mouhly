<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - L2IS</title>
    <style>
        /* Animation de l'arrière-plan */
        @keyframes backgroundAnimation {
            0% { background: linear-gradient(135deg, #f3ec78, #0b3d91); }
            100% { background: linear-gradient(135deg, #89fffd, #00274d); }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            animation: backgroundAnimation 10s infinite alternate;
        }

        header {
            background-color: #343a40;
            padding: 1rem;
            color: white;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin-right: 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            background-color: #555;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #666;
        }

        main {
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            width: 80%;
            margin: 2rem auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        .btn {
            padding: 0.5rem 1rem;
            background-color: #555;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #666;
        }

        form table {
            width: 100%;
        }

        form table td {
            padding: 0.5rem;
        }

        form label {
            font-weight: bold;
        }

        form input[type="text"], form textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        form textarea {
            height: 150px;
        }

        .btn-submit {
            padding: 0.5rem 1rem;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #218838;
        }

        /* Styles pour les liens */
        .news-link {
            font-size: 0.9em;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            display: block;
            padding: 8px;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Styles pour les liens au survol */
        .news-link:hover {
            color: #0056b3;
            transform: scale(1.05);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><h2>@yield('titre')</h2></li>
                <!-- Ajoutez d'autres éléments de menu ici -->
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 L2IS - Tous droits réservés</p>
    </footer>
</body>
</html>
