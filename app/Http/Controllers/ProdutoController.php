<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Helper\Traits\ResourceTrait;

class ProdutoController extends Controller {
use ResourceTrait;
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct(Produto $m) {
    $this->Model        = $m;
    $this->indexView    = 'crud';
    $this->resourceName = 'produtos';
    $this->pageTitle    = 'Cadastro de produtos';
  }
}
