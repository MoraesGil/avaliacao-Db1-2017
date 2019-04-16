<?php
/**
 * @author Gilberto Prudêncio Vaz de Moraes <moraesdev@gmail.com>
 */
namespace App;

use App\CustomModel;
use App\Helper\Traits\DataViewer;
use App\Helper\Classes\BatmanBelt;

class Produto extends CustomModel {
  use DataViewer;

  protected $fillable = ['label','descricao','preco'];
  public $timestamps = true;

  protected $rules = [
    'label'=>'required|max:45|min:3|unique:produtos,label,@except,id',
    'descricao'=>'max:100',
    'preco'=>'required|numeric',
  ];

  protected $hidden = [
    'criado_em',
    'atualizado_em',
  ];

  protected $dv_title_column ='custom_label';

  private $dv_hidden = [
    // 'id',
  ];

  private $dv_config = [
    [
      'label'  => '#',
      'name'   => 'id',
      'search' => true
    ],
    [
      'label'  => 'Título',
      'name'   => 'label',
      'search' => true
    ],
    [
      'label'  => 'Descrição',
      'name'   => 'descricao',
      'search' => true
    ],
    [
      'label'  => 'Preço',
      'name'   => 'preco',
      'search' => true
    ],
  ];

  public function getPrecoAttribute($value) {
    return "R$ ".number_format($value, 2, ',', '.');
  }

}
