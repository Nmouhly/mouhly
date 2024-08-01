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

<h2 class="text-center">Ajouter un membre</h2>
<hr>

<form action="/membre/add" method="POST">
    @csrf
    <table>
        <tr class="form-group">
            <td><label for="first">First name:</label></td>
            <td>
                <input type="text" name="first" class="input-field" value="{{ old('first') }}" id="first" placeholder="First name">
                @error('first')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
        </tr>
        <tr class="form-group">
            <td><label for="last">Last name:</label></td>
            <td>
                <input type="text" name="last" class="input-field" value="{{ old('last') }}" id="last" placeholder="Last name">
                @error('last')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
        </tr>
        <tr class="form-group">
            <td><label for="email">Email:</label></td>
            <td>
                <input type="email" name="email" class="input-field" value="{{ old('email') }}" id="email" placeholder="name@example.com">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
        </tr>
        <tr class="form-group">
            <td><label for="team">Team's id:</label></td>
            <td>
                <input type="text" name="team" class="input-field" id="team" placeholder="Team's id">
            </td>
        </tr>
        <tr class="form-group">
            <td><label for="status">Status:</label></td>
            <td>
                <input name="status" class="input-field" list="datalistOptions" id="status" placeholder="Type to search...">
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
