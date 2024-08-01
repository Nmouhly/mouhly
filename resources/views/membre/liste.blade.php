@extends('admin.dashboard')

@section('contenu')
<div class="container">
    <h1 class="falling-title">
        <span>P</span><span>E</span><span>R</span><span>S</span><span>O</span><span>N</span><span>N</span><span>E</span><span>L</span>
    </h1>
    <header class="header">
        <a href="/membre/form" class="news-button">Ajouter</a>
    </header>
    
    @if ($message = Session::get('msg'))
        <div class="alert">{{ $message }}</div>
    @endif
    @if ($messages = Session::get('msge'))
        <div class="alert">{{ $messages }}</div>
    @endif

    <div class="news-container">
        <table class="news-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Courriel</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($membres as $membre)
                    <tr class="news-item">
                        <td>{{ $membre->first_name }}</td>
                        <td>{{ $membre->last_name }}</td>
                        <td>{{ $membre->email }}</td>
                        <td>{{ $membre->status }}</td>
                        <td>
                            <a href="/membre/delete/{{ $membre->id }}" class="news-button">Supprimer</a>
                            <a href="/membre/update/{{ $membre->id }}" class="news-button">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .container {
        width: 100%;
        margin: auto;
        overflow: hidden;
    }

    .falling-title {
        display: flex;
        justify-content: center;
        font-size: 3em;
        margin-bottom: 20px;
    }

    .falling-title span {
        display: inline-block;
        opacity: 0;
        transform: translateY(-100px);
        animation: fall 0.5s forwards;
    }

    .falling-title span:nth-child(1) {
        animation-delay: 0s;
    }

    .falling-title span:nth-child(2) {
        animation-delay: 0.1s;
    }

    .falling-title span:nth-child(3) {
        animation-delay: 0.2s;
    }

    .falling-title span:nth-child(4) {
        animation-delay: 0.3s;
    }

    .falling-title span:nth-child(5) {
        animation-delay: 0.4s;
    }

    .falling-title span:nth-child(6) {
        animation-delay: 0.5s;
    }

    .falling-title span:nth-child(7) {
        animation-delay: 0.6s;
    }

    .falling-title span:nth-child(8) {
        animation-delay: 0.7s;
    }

    .falling-title span:nth-child(9) {
        animation-delay: 0.8s;
    }

    @keyframes fall {
        to {
            opacity: 1;
            transform: translateY(0);
        }
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

    .news-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .news-table {
        width: 100%;
        border-collapse: collapse;
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
@endsection
