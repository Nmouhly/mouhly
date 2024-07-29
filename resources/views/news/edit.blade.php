@extends('admin.layout')

@section('content')
    <h1>{{ isset($news) ? 'Modifier' : 'Ajouter' }} une actualité</h1>
    <form action="{{ isset($news) ? route('news.update', $news) : route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($news))
            @method('PUT')
        @endif
        <table>
            <tr>
                <td><label for="title">Titre :</label></td>
                <td><input type="text" name="title" id="title" value="{{ old('title', $news->title ?? '') }}" required></td>
            </tr>
            <tr>
                <td><label for="content">Contenu :</label></td>
                <td><textarea name="content" id="content" required>{{ old('content', $news->content ?? '') }}</textarea></td>
            </tr>
            <tr>
                <td><label for="image">Image :</label></td>
                <td><input type="file" name="image" id="image"></td>
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
