@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong class="mb-1">Meru Operaciones</strong><p>ha encontrado errores:</p>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<script>
    $('.alert').alert()
</script>
  
@endif
