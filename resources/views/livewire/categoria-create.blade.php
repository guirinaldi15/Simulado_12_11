<div>
<form wire:submit.prevent='store'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" wire:model="nome" id="exampleInputText1" aria-describedby="textHelp">
<br> 
  <button type="submit" class="btn-solid theme-primary">Enviar</button>
</form>
</div>
