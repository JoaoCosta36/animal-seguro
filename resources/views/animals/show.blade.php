<!-- resources/views/animals/show.blade.php -->
<h1>Detalhes do Animal</h1>
<p><strong>Nome:</strong> {{ $animal->nome }}</p>
<p><strong>Espécie:</strong> {{ $animal->especie }}</p>
<p><strong>Idade:</strong> {{ $animal->idade }}</p>
<p><strong>Dono:</strong> {{ $animal->dono->nome }}</p>
<a href="{{ route('animals.index') }}">Voltar à Listagem</a>