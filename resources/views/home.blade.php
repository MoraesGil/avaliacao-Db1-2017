@extends('layouts.app')

@section('content')

  <div class="page-title">
    <div class="title_left">
      <h3>Hello DB1</h3>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Rodou :D</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p>
            Este Projeto foi desenvolvido em laravel e contemplando as solicitações utilizando template free <a href="https://colorlib.com/polygon/gentelella/index.html">Gentella Alela</a> e algumas Traits desenvolvidas por mim.
          </p>
          <p>
            <strong>Pra que reinventar a roda?</strong> <br> montei alguns ajudantes para criação rapida de CRUD dinamicos com Laravel e VUE.js os assets se encontram em:
            <br>
            <code>
               resources/assets/js
            </code>
            <br>
            E meus helpers em: <br>
            <code>
               app/Helper
            </code>
          </p>
          <p>
            <h5>E o checklist?</h5>
            <ul>
              <li>
                <strong> Pesquise sobre rotas no Zend</strong><br>
                minhas rotas estão em <br>
                <code>
                   routes/web.php
                </code>
              </li>
              <li>
                <strong> Pesquise obre Controller e Action</strong><br>
                Minha controller vai estar lá mais suas actions não :O, eu sei que sabem disso ;) <br>
                <code>
                  app/Http/Controllers/ProdutoController.php
                </code>
              </li>
              <li>
                <strong> Criação de formulários</strong><br>
                Surpresa! eles não estão em blade file, mas você pode encontrar meu formulário facilmente aqui neste vue file <br>
                <code>
                  resources/assets/js/forms/form_produto.vue
                </code>
              </li>
              <li>
                <strong> Input Filters </strong><br>
                É obrigatório esse campo?, claro que sim, portanto as regras de validação do input estão no array de rules no próprio model
                também poderia ser construido em um Request file, mas optei por deixar a entidade saber cuidar dela própria. <br>
                utilizando o <a href="https://laravel.com/docs/5.5/validation" >Validador do Laravel </a>
              </li>
              <li>
                <strong> Criação de uma conexão com o banco</strong><br>
                No nosso arquivo <code>.env </code> é possivel configurar qual banco utilizaremos, optei por um banco de dados sqlite para este mini projeto,
                mas como temos a migration é possivel migrar facilmente para postgree e mysql.
              </li>
              <li>
                <strong> Entities</strong><br>
                Não criei uma pasta para agrupar portanto fica na pasta padrão que o laravel utiliza em <code>app</code> mesmo, lá podemos encontrar nossa ProdutoModel
              </li>
              <li>
                <strong> Pagination</strong><br>
                Claro que tem ;) e com a ajuda do VueJS e o AXIOS isso fica bem dinâmico.
              </li>
              <li>
                <strong> Service Manager (importante isto)</strong><br>
                Não criei um Service Provider nesse projeto, mas já utilizei para Definir Gates de autorização em outro projeto e basicamente é onde as primceiras classes são carregadas, onde posso definir que as classes sejam instanciadas corretamente utilizando bind.
              </li>
              <li>
                <strong> Doctrine - opcional, fica a critério do candidato usar Doctrine ou Zend\Db</strong><br>
                Então..., como podia ser feito em laravel e eu não tenho pratica com esses frameworks ficou a trabalho do <a href="https://laravel.com/docs/5.5/eloquent">Eloquent</a> mesmo pessoal.
              </li>
              <li>
                <strong> Repositories</strong><br>
                Ops. não estava na lista, mas é bom falar dele rs, Não usei mas, sei o quanto ele é bacana principalmente para trabalhar com varios ORM's.
              </li>
            </ul>
          </p>
          <p>
            <h4>Obrigado pela paciência,</h4>  espero ter entregue um pouco mais do que foi pedido, mas principalmente o que foi pedido =).
            <br>
            Poxa, quer um mais simples só com Laravel mesmo e o PHP ?
            acho que nunca chegou ai porque na época eu não sabia Laravel mas tinha criado esse projeto pro processo seletivo com a DB1.
            em Jun/2016. que pode ser baixado neste link <a href="https://github.com/MoraesGil/Db1App">https://github.com/MoraesGil/Db1App</a>
            projeto bem mais simples sem ajax só Laravel, Blade, Request etc...
          </p>
          <p>
            Atenciosamente <a href="https://www.linkedin.com/in/gilberto-moraes-215b0951/">Gilberto Prudêncio Vaz de Moraes</a>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('css')
  <style media="screen">
    a{
      text-decoration: underline
    }
  </style>
@endpush
