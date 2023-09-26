<!-- resources/views/animals/index.blade.php -->
<h1>Listagem de animals</h1>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Idade</th>
            <th>Dono</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($animals as $animal)
            <tr>
                <td>{{ $animal->nome }}</td>
                <td>{{ $animal->especie }}</td>
                <td>{{ $animal->idade }}</td>
                <td>{{ $animal->email }}</td>
                <td>
                    <a href="{{ route('animals.show', $animal->id) }}">Detalhes</a>
                    <a href="{{ route('animals.edit', $animal->id) }}">Editar</a>
                    <form action="{{ route('animals.destroy', $animal->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('animals.create') }}">Adicionar Animal</a>