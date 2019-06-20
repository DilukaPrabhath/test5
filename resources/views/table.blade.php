@extends ('layout.common')
@section('content')


<!-- Navbar default -->
<nav class="navbar navbar-expand-lg navbar-dark bg-default">
        <div class="container">
          <a class="navbar-brand" href="">Your Infomation</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img src="./assets/img/brand/blue.png">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
              
              <li class="nav-item">
              <a class="nav-link" href="#">CVs
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>




      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Nic</th>
                <th>Gender</th>
                <th>Status date</th>
                <th>School</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        @foreach ($basicinfo as $basicinfo)
                                            <tr>
                                                <td>{{$basicinfo->full_name}}</td>
                                                <td>{{$basicinfo->birth}}</td>
                                                <td>{{$basicinfo->nic}}</td>
                                                <td>{{$basicinfo->gender}}</td>
                                                <td>{{$basicinfo->statues}}</td>
                                                <td>{{$basicinfo->school}}</td>
                                                
                                                
                                                <td>
                                                <a href="/table/{{$basicinfo->id}}" class="btn btn-info btn-circle" style="margin:5px;font-size:17px;"><i class="fa fa-th"></i> </button>
                                                
                                                
                                                </td>
                                            </tr>
                                    @endforeach
        </tbody>
        
    </table>







<footer class="footer has-cards">
    <div class="container container-lg">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="card card-lift--hover shadow border-0">
            
          </div>
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          <div class="card card-lift--hover shadow border-0">
            
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2"></h3>
          
        </div>
        
      </div>
      
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            
          </ul>
        </div>
      </div>
    </div>
  </footer>

@stop