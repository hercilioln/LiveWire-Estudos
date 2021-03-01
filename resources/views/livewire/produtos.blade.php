<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @include('livewire.create')

    @include('livewire.update')
    <br />
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
        	@foreach($produto as $row)
        	<tr>	
        		<td>{{ $row->pro_nome }}</td>
        		<td>R$ {{ number_format($row->pro_valor, 2, ',', '.') }}</td>
        		<td>{{ $row->pro_quantidade }}</td>
        		<td>R$ {{ number_format(($row->pro_quantidade) * ($row->pro_valor), 2, ',', '.') }}</td>
        		<td>
                    <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm" wire:click="edit({{ $row->id }})">Editar</button>
                    <button wire:click="delete({{ $row->id }})" class="btn btn-danger btn-sm">Excluir</button>
                </td>
        	</tr>
        	@endforeach
        </tbody>
    </table>
</div>