@extends('base') @section('content')
<script src="static/js/main.js">
</script>
<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
  <div class="col-12">
    <form>
      <div class="form-group">
        <label for="exampleFormControlTextarea1"><h4 class="mb-3 text-white lh-100"><i class="fas fa-comment-alt mr-3"></i>Deixe sua Mensagem</h4></label>
        <textarea class="form-control" id="FormTextareaMensagem" rows="2"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" onclick="enviar()">Enviar</button>
    </form>
  </div>
</div>

<!-- ALERTA DE MENSAGEM VAZIA -->
<div id="Alerta" class="alert alert-danger display-4 text-center collapse" role="alert"> ESCREVA ALGUMA MENSAGEM! </div>

<!-- LISTA DE MENSAGENS -->
<div class="my-3 p-3 bg-white rounded box-shadow">
  <h6 class="border-bottom border-gray pb-2 mb-0">
    Todas Mensagens
    <!-- Atualizador da Lista de Mensagens -->
    <small class="ml-5 text-right">
      <a href="#" onclick="atualizar()"><i class="fa fa-sync mr-3"></i>Atualizar</a>
    </small>
  </h6>


  <!-- Area que ira carregar as mensagens do DB -->
  <div id="Mensagens">
    <!-- Modelo de html que ira rederizar as mensagens
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Textos do bd aqui. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá. Blá.
          </p>
        </div> -->
  </div>
</div>
@endsection