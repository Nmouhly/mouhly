@extends('admin.layout')

@section('titre')
Ajouter un utilisateur
@endsection

@section('content')
    <h1>Ajouter un utilisateur</h1>
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
            table-layout: fixed;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
        }
    </style>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="name">Nom :</label></td>
                <td><input type="text" name="name" id="name" value="{{ old('name') }}" required class="input-field"></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="email" name="email" id="email" value="{{ old('email') }}" required class="input-field"></td>
            </tr>
            <tr>
                <td><label for="password">Mot de passe :</label></td>
                <td><input type="password" name="password" id="password" required class="input-field"></td>
            </tr>
            <tr>
                <td><label for="password_confirmation">Confirmer le mot de passe :</label></td>
                <td><input type="password" name="password_confirmation" id="password_confirmation" required class="input-field"></td>
            </tr>
            <tr>
                <td><label for="role">Rôle :</label></td>
                <td>
                    <select name="role" id="role" class="select-field" required>
                        <option value="">-- Choisir un rôle --</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="director" {{ old('role') == 'director' ? 'selected' : '' }}>Director</option>
                        <option value="chercheur" {{ old('role') == 'chercheur' ? 'selected' : '' }}>Chercheur</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" class="btn-submit">Ajouter</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
