@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Iglesias
        <small>Aqui puedes crear la Iglesia</small>

      </h1>
      <br>

      @if (session('info'))
      <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4><i class="icon fa fa-check"></i> Correcto!</h4>
             <strong>{{ session('info') }}</strong>
           </div>
      @endif
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Nombres</th>
                  <th>Fecha Credito</th>
                  <th>Total</th>
                  <th>Credito</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                
              
                <tr>
                  <td>Dato</td>
                  <td>Dato2</td>
                  <td>Dato3</td>

                  

                  <td>

                 
                  <a class="btn btn-success btn-flat" href=""><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
           

                  

                  </td>
                 

                

                  
                </tr>

                
               </tbody>
                </tfoot>
              </table>
              

              
            </div>
            
            
            <!-- /.box-body -->
          </div>
         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      
      <!-- /.row -->
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->



@endsection