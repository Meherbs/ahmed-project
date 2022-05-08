@extends('layouts.app2');
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <section style="float: right" class="col-8">
            <div class="container">

                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>nomarticle</th>
                      <th>description</th>
                      <th>image</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                    @foreach ($produit as $row)

                    <tr style="background-color:rgb(17, 2, 2);color:white" >
                      <td>{{$row->name}}</td>
                      <td>{{$row->title}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->description}}</td>
                      <td><img src="img/{{$row->image}}" style="width=50px;height:50px;"></td>




                      <td><a href="/productDelete/{{$row->idprod}}" class="btn btn-danger">delete</a></td>
                      @if($row->role=="verifuser")
                      <td><a href="/accepteuser/{{$row->id}}" class="btn btn-info">accepte</a></td>
                      @endif
                    </tr>


            @endforeach


                  </tbody>
                </table>
            </section>
        <div class="row">

<div style="display:flex;max-width:100%">
	<div id="container"></div>
  <div id="container2"></div>
</div>
<div class="container">



      <div id="pie_chart" style="width:750px; height:450px;">


     </div>
    </div>

   </div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



<script type="text/javascript">
    var userData = <?php echo json_encode($userData)?>;
    Highcharts.chart('container', {
        title: {
            text: 'New User 2021'
        },
        subtitle: {
            text: 'Bluebird youtube channel'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>





@endsection



