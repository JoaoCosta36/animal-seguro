<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Dono;
class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    public function create()
    {
        $donos = Animal::all();
        return view('animals.create', compact('donos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'idade' => 'required|integer',
            'dono_id' => 'required|exists:donos,id',
        ]);

        Animal::create($data);

        return redirect()->route('animals.index')->with('success', 'Animal registrado com sucesso.');
    }

    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    public function edit(Animal $animal)
    {
        $donos = Dono::all();
        return view('animals.edit', compact('animal', 'donos'));
    }

    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'idade' => 'required|integer',
            'dono_id' => 'required|exists:donos,id',
        ]);

        $animal->update($data);

        return redirect()->route('animals.index')->with('success', 'Animal atualizado com sucesso.');
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('animals.index')->with('success', 'Animal excluído com sucesso.');
    }
}
