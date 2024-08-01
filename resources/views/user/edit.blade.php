@extends('admin.dashboard')

@section('contenu')
    <style>
        .input-field,
        .select-field {
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
        .select-field:focus {
            border-color: #007bff;
            box-shadow: 0 2px 6px rgba(0, 123, 255, 0.2);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: #fff;
            padding: 0.5rem 1rem;
            border: 1px solid transparent;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease, border-color 0.2s ease;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
    <div class="container">
        <h1>Éditer un utilisateur</h1>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="input-field" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="input-field" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe (laisser vide pour ne pas changer)</label>
                <input type="password" name="password" id="password" class="input-field">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="input-field">
            </div>
            <div class="form-group">
                <label for="role">Rôle</label>
                <select name="role" id="role" class="select-field" required>
                    <option value="">-- Choisir un rôle --</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="director" {{ $user->role == 'director' ? 'selected' : '' }}>Director</option>
                    <option value="chercheur" {{ $user->role == 'chercheur' ? 'selected' : '' }}>Chercheur</option>
                </select>
            </div>
            <button type="submit" class="btn-success">Mettre à jour</button>
        </form>
    </div>
@endsection
