@extends('admin.dashboard')

@section('contenu')
<div class="container">
    <header class="header">
        <a href="{{ route('news.create') }}" class="news-button">AJOUTER</a>
    </header>
    
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <div class="news-container">
        <table class="news-table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $newsItem)
                    <tr class="news-item">
                        <td>{{ $newsItem->title }}</td>
                        <td>{{ $newsItem->content }}</td>
                        <td>
                            @if($newsItem->image)
                                <img src="{{ asset('images/' . $newsItem->image) }}" alt="Image de {{ $newsItem->title }}" style="max-width: 100px;">
                            @else
                                Pas d'image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('news.edit', $newsItem) }}" class="news-button">Modifier</a>
                            <form action="{{ route('news.destroy', $newsItem) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="news-button">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

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
@endsection
