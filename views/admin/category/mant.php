<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-title-box">
          <ol class="breadcrumb pull-right">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">Categorias</li>
          </ol>
          <h3 class="page-title">Categoria</h3>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">

          <div class="row m-b-10">
            <div class="col-sm-12">
              <form method="POST" action="https://demohotel.taqini.pe/company/search" accept-charset="UTF-8" onsubmit="return false;" class="form-inline" role="form" autocomplete="off" id="formBusquedaCompany"><input name="_token" type="hidden" value="dndTwNRCwAZrGBaZgMnAolt4PGABLqFflL7UHuN2">
                <input id="page" name="page" type="hidden" value="1">
                <input id="accion" name="accion" type="hidden" value="listar">
                <div class="form-group">
                  <label for="name">Nombre:</label>
                  <input class="form-control" id="name" name="name" type="text" value="">
                </div>
                <div class="form-group">
                  <label for="filas">Filas a mostrar:</label>
                  <select class="form-control" onchange="buscar('Company')" id="filas" name="filas">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10" selected="selected">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                  </select>
                </div>
                <button class="btn btn-success waves-effect waves-light m-l-10 btn-md" id="btnBuscar" onclick="buscar('Company')" type="button"><i class="glyphicon glyphicon-search"></i> Buscar</button>
                <button class="btn btn-info waves-effect waves-light m-l-10 btn-md" id="btnNuevo" onclick="modal ('https://demohotel.taqini.pe/company/create?listar=SI', 'Registrar Empresa', this);" type="button"><i class="glyphicon glyphicon-plus"></i> Nuevo</button>
              </form>
            </div>
          </div>

          <div id="listadoCompany">
            <ul class="pagination pagination-sm">
              <li class="active"><a href="#">TOTAL DE REGISTROS 1</a></li>
              <li class="active"><a>1</a></li>
            </ul>
            <table id="example1" class="table table-bordered table-striped table-condensed table-hover">

              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>RUC</th>
                  <th>Direccion</th>
                  <th>Telefonos</th>
                  <th colspan="2">Operaciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>EMPRESA</td>
                  <td>20602814425</td>
                  <td>DIRECCION</td>
                  <td>98754122</td>
                  <td><button onclick="modal ('https://demohotel.taqini.pe/company/1/edit?listar=SI', 'Modificar Datos Empresa', this);" class="btn btn-xs btn-warning" type="button">
                      <div class="glyphicon glyphicon-pencil"></div> Editar
                    </button></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>RUC</th>
                  <th>Direccion</th>
                  <th>Telefonos</th>
                  <th colspan="2">Operaciones</th>
                </tr>
              </tfoot>
            </table>
            <ul class="pagination pagination-sm">
              <li class="active"><a href="#">TOTAL DE REGISTROS 1</a></li>
              <li class="active"><a>1</a></li>
            </ul>
          </div>

          <table id="datatable" class="table table-striped table-bordered">
          </table>
        </div>
      </div>
    </div>

  </div>
</div>