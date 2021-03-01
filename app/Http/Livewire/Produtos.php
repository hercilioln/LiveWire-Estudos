<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produto;

class Produtos extends Component
{
    public $produto, $pro_nome, $pro_valor, $pro_quantidade, $data_id;

    public function render()
    {
        $this->produto = Produto::all();
        return view('livewire.produtos');
    }

    public function resetInputsFields(){
        $this->pro_nome = '';
        $this->pro_valor = '';
        $this->pro_quantidade = '';
    }

    public function store(){
        
        $validation = $this->validate([
            'pro_nome' => 'required',
            'pro_valor' => 'required',
            'pro_quantidade' => 'required'
        ]);

        Produto::create($validation);

        session()->flash('message', 'Produto criado com sucesso.');

        $this->resetInputsFields();

        $this->emit('produtoStore');
    }

    public function edit(){
        $data = Produto::findOrFail($id);
        $this->data_id = $id;
        $this->pro_nome = $data->pro_nome;
        $this->pro_valor = $data->pro_valor;
        $this->pro_quantidade = $data->pro_quantidade;
    }

    public function update(){
        $validate = $this->validate([
            'pro_nome' => 'required',
            'pro_valor' => 'required',
            'pro_quantidade' => 'required'
        ]);

        $data = Porduto::find($this->data_id);

        $data->update([
            'pro_nome' => $this->pro_nome,
            'pro_valor' => $this->pro_valor,
            'pro_quantidade' => $this->pro_quantidade
        ]);

        session()->flash('message', 'Produto atualizado com sucesso.');

        $this->resetInputFields();

        $this->emit('produtoStore');

    }

    public function delete($id)
    {
        Produto::find($id)->delete();
        session()->flash('message', 'Produto deletado com sucesso.');
    }
}
