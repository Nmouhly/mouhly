<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un membre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #ccc 1px solid;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            padding: 0;
            font-size: 24px;
        }

        .news-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .news-item {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        .news-item h2 {
            color: #333;
        }

        .news-item p {
            color: #666;
        }

        .news-table th, .news-table td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .news-table th {
            background: #343a40;
            color: white;
        }

        .news-button {
            display: inline-block;
            padding: 8px 16px;
            margin: 4px 0;
            font-size: 0.9em;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .alert {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Modifier un membre</h2>
        <hr>
        <form action="/membre/update/traitement" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $membres->id }}">
            <div class="mb-3">
                <label for="first" class="form-label">First name</label>
                <input type="text" name="first" class="form-control" value="{{ old('first', $membres->first_name) }}" id="first" placeholder="First name">
                @error('first')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last" class="form-label">Last name</label>
                <input type="text" name="last" class="form-control" value="{{ old('last', $membres->last_name) }}" id="last" placeholder="Last name">
                @error('last')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $membres->email) }}" id="email" placeholder="name@example.com">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="team" class="form-label">Team's id</label>
                <input type="text" name="team" class="form-control" value="{{ old('team', $membres->team_id) }}" id="team" placeholder="Team ID">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input name="status" class="form-control" list="datalistOptions" value="{{ old('status', $membres->status) }}" id="status" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="Maître de Conférences">
                    <option value="Ingénieur de Recherche">
                    <option value="Professeur des Universités">
                    <option value="Doctorant">
                    <option value="Post Doctorant">
                </datalist>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
