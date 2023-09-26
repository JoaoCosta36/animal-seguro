<!-- resources/views/animals/edit.blade.php -->
<h1>Editar Animal</h1>
<form method="POST" action="{{ route('animals.update', $animal->id) }}">
    @csrf
    @method('PUT')
    <label for="nome">Nome do Animal:</label>
    <input type="text" name="nome" id="nome" value="{{ $animal->nome }}" required>
    <label for="especie">Espécie:</label>
    <input type="text" name="especie" id="especie" value="{{ $animal->especie }}" required>
    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" value="{{ $animal->idade }}" required>
    <label for="dono_id">Dono:</label>
    <select name="dono_id" id="dono_id" required>
        @foreach ($donos as $dono)
            <option value="{{ $dono->id }}" {{ $dono->id == $animal->dono_id ? 'selected' : '' }}>{{ $dono->nome }}</option>
        @endforeach
    </select>
    <button type="submit">Atualizar</button>
</form>
<a href="{{ route('animals.index') }}">Cancelar</a>