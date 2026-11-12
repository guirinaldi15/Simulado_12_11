<div>
    <h3>Categorias</h3>
    <a href="{{route('categoria.create')}}" class="btn btn-primary">Criar</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
     @foreach($categorias as $cat)
     
    <tr>
       
        <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->nome}}</td>
      <td></td>
      <td><a href="{{route('categoria.edit',['id'=>$cat->id])}}" class="btn btn-primary">Editar</a>
    <button type="button" wire:click='excluir({{$cat->id}})' class="btn btn-danger">Excluir</button>
    </td>
      
      
    </tr>
@endforeach
  </tbody>
</table>
</div>
