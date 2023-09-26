<!-- resources/views/animals/create.blade.php -->
<h1>Adicionar Animal</h1>
<form method="POST" action="{{ route('animals.store') }}">
    @csrf
    <label for="nome">Nome do Animal:</label>
    <input type="text" name="nome" id="nome" required>
    <label for="especie">Espécie:</label>
    <input type="text" name="especie" id="especie" required>
    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" required>
    <label for="dono_id">Dono:</label>
    <select name="dono_id" id="dono_id" required>
        @foreach ($donos as $dono)
            <option value="{{ $dono->id }}">{{ $dono->dono_id }}</option>
        @endforeach
    </select>
    <button type="submit">Salvar</button>
</form>