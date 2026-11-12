<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public $pesquisa_nome = '';

    public function excluir($id)
    {
        $categoria = Categoria::find($id);
        if ($categoria == null) {
            session()->flash('error', 'não encontrada');
            return redirect()->route('categoria.index');
        }
        $categoria->delete();
        session()->flash('success', 'excluída');
        return redirect()->route('categoria.index');
    }

    public function render()
    {
        $categorias = Categoria::where('nome', '=', $this->pesquisa_nome)->get();
        $categorias = Categoria::all();

        return view('livewire.categoria-index', compact('categorias'));
    }
}
