@extends('admin.dashboard')

@section('contenu')
    <style>
        .input-field,
        .textarea-field {
            width: 100%;
            box-sizing: border-box;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            /* Shadow effect */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .input-field:focus,
        .textarea-field:focus {
            border-color: #007bff;
            box-shadow: 0 2px 6px rgba(0, 123, 255, 0.2);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .btn-submit {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
        }
    </style>

    <h1>{{ isset($news) ? 'Modifier' : 'Ajouter' }} une actualité</h1>
    <form action="{{ isset($news) ? route('news.update', $news) : route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($news))
            @method('PUT')
        @endif
        <table>
            <tr>
                <td><label for="title">Titre :</label></td>
                <td><input type="text" name="title" id="title" value="{{ old('title', $news->title ?? '') }}" required class="input-field"></td>
            </tr>
            <tr>
                <td><label for="content">Contenu :</label></td>
                <td><textarea name="content" id="content" required class="textarea-field">{{ old('content', $news->content ?? '') }}</textarea></td>
            </tr>
            <tr>
                <td><label for="image">Image :</label></td>
                <td><input type="file" name="image" id="image" class="input-field"></td>
            </tr>
            @if(isset($news) && $news->image)
                <tr>
                    <td colspan="2">
                        <img src="{{ asset('images/' . $news->image) }}" alt="Image actuelle" style="max-width: 100px;">
                    </td>
                </tr>
            @endif
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" class="btn-submit">{{ isset($news) ? 'Modifier' : 'Ajouter' }}</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
