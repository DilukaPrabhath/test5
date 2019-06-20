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
              <a class="nav-link" href="tableview">CVs
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="row">
      <div class="col-md-12">
      <div class="col-md-12">
      @foreach($errors->all() as $error)

    <div class="alert alert-danger" role="alert">
    
    {{$error}}
    
    </div>
    @endforeach
     </div>
      <form action="/savecv" method="post"  enctype="multipart/form-data">
                           {{csrf_field()}}
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Personal Details.</span>
            </h4>
            <!-- <div class="mb-3">
          <small class="text-uppercase font-weight-bold">Form controls</small>
        </div> -->
        <div class="row">

        <div class="col-lg-6 col-sm-4"> 

        <div class="form-group">
        <span>ID</span>
        <input type="text" placeholder="id" name="uid" value="{{$count}}" class="form-control" />
        <input type="hidden" placeholder="id" name="uid1" value="{{$count}}" class="form-control" />
        </div>
        </div>

          <div class="col-lg-12 col-sm-12"> 
     
            <div class="form-group">
            <span>Full Name</span>
              <input type="text" name="uname" id="uname" placeholder="ex : G.D.D.P.Dewappriya" class="form-control" />
            </div>
          </div>

          <div class="col-lg-6 col-sm-4"> 

            <div class="form-group">
            <span>Date of Birth</span>
              <input type="date" name="dob" id="dob" placeholder="date" class="form-control" />
            </div>
          </div>

          <div class="col-lg-6 col-sm-4"> 

            <div class="form-group">
            <span>NIC</span>
              <input type="text" name="nic" id="nic" placeholder="nic number" class="form-control" />
            </div>

        </div>

        <div class="col-lg-6 col-sm-4"> 

            <div class="form-group">
            <span>Gender</span>
            <select class="form-control custom-select" name="gender" data-placeholder="Choose gender" tabindex="1">
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
            </div>

        </div>

        <div class="col-lg-6 col-sm-4"> 

            <div class="form-group">
            <span>Statues</span>
            <select class="form-control custom-select" name="statues" data-placeholder="Choose Statues" tabindex="1">
                <option value="married">Married</option>
                <option value="unmarried">Unmarried</option>
                </select>
            </div>

        </div>
    
        <div class="col-lg-6 col-sm-4"> 

            <div class="form-group">
            <span>School</span>
              <input type="text" name="school" id="school" placeholder="school" class="form-control" />
            </div>

        </div>

        <div class="col-lg-6 col-sm-4"> 

            <div class="form-group">
            <span>Contact</span>
              <input type="number" name="ucontact" id="ucontact" placeholder="contact number" class="form-control" />
            </div>

        </div>

       

        <div class="form-group col-lg-6 col-sm-4">
        <span>Address</span>
                  <textarea class="form-control" name="address" id="address" rows="4" cols="80" placeholder="address..."></textarea>
                </div>

          </div>
        </div>
      </div>
      </div>


      <!-- 2nd unit -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12"><br>
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Experiances.</span>
            </h4>
            <!-- <div class="mb-3">
          <small class="text-uppercase font-weight-bold">Form controls</small>
        </div> -->
        
        <div class="row" class="col-lg-12 col-sm-12">

          <div class="col-lg-12 col-sm-12"> 

          <table border="0" id="tbexperiance" name="tbexperiance" class="col-lg-12 col-sm-12">

          <tr>
              <td><input type="text" placeholder="" name="experiance[]" id="experiance" class="form-control" /></td>
              <td><button class="btn btn-1 btn-primary" name="experiance1" id="experiance1" type="button">more</button></td>
          </tr>


          </table>
            <!-- <div class="form-group">
              <input type="text" placeholder="" name="experiance" id="experiance" class="form-control" />
            </div> -->
          <!-- </div> -->

          <!-- <div class="col-lg-2 col-sm-2"> 
            <div class="form-group">
            <button class="btn btn-1 btn-primary" name="experiance1" id="experiance1" type="button">more</button>  
            </div>
          </div> -->

          </div>
      </div>
        </div>
      </div>
      </div>

       <!-- 3rd unit -->
       <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12"><br>
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Skills.</span>
            </h4>
            <!-- <div class="mb-3">
          <small class="text-uppercase font-weight-bold">Form controls</small>
        </div> -->
        
        <div class="row" class="col-lg-12 col-sm-12">

          <div class="col-lg-12 col-sm-12"> 

          <table border="0" id="tbskills" name="tbskills" class="col-lg-12 col-sm-12">

          <tr>
              <td><input type="text" placeholder="" name="skills[]" id="skills" class="form-control" /></td>
              <td><button class="btn btn-1 btn-primary" name="tbskills1" id="tbskills1" type="button">more</button></td>
          </tr>


          </table>
            <!-- <div class="form-group">
              <input type="text" placeholder="" name="experiance" id="experiance" class="form-control" />
            </div> -->
          <!-- </div> -->

          <!-- <div class="col-lg-2 col-sm-2"> 
            <div class="form-group">
            <button class="btn btn-1 btn-primary" name="experiance1" id="experiance1" type="button">more</button>  
            </div>
          </div> -->

          </div>
      </div>
        </div>
      </div>
      </div>

      <!-- 3rd unit -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12"><br>
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Education.</span>
            </h4>
        
        <div class="row" class="col-lg-12 col-sm-12">

          <div class="col-lg-12 col-sm-12"> 

          <table border="0" id="tbeducation" name="tbeducation" class="col-lg-12 col-sm-12">

          <tr>
              <td><input type="text" placeholder="" name="education[]" id="education" class="form-control" /></td>
              <td><button class="btn btn-1 btn-primary" name="education1" id="education1" type="button">more</button></td>
          </tr>


          </table>
           

          </div>
      </div>
        </div>
      </div>
      </div>

       <!-- 4th unit -->
       <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12"><br>
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Technical Skills.</span>
            </h4>
        
        <div class="row" class="col-lg-12 col-sm-12">

          <div class="col-lg-12 col-sm-12"> 

          <table border="0" id="tbtechnical" name="tbtechnical" class="col-lg-12 col-sm-12">

          <tr>
              <td><input type="text" placeholder="" name="technical[]" id="technical" class="form-control" /></td>
              <td><button class="btn btn-1 btn-primary" name="technical1" id="technical1" type="button">more</button></td>
          </tr>


          </table>
           

          </div>
      </div>
        </div>
      </div>
      </div>

         <!-- 5th unit -->
         <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12"><br>
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Projects.</span>
            </h4>
        
        <div class="row" class="col-lg-12 col-sm-12">

          <div class="col-lg-12 col-sm-12"> 

          <table border="0" id="tbproject" name="tbproject" class="col-lg-12 col-sm-12">

          <tr>
              <td><input type="text" placeholder="" name="project[]" id="project" class="form-control" /></td>
              <td><button class="btn btn-1 btn-primary" name="project1" id="project1" type="button">more</button></td>
          </tr>


          </table>
           

          </div>
      </div>
        </div>
      </div>
      </div>


       <!-- 6th unit -->
       <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12"><br>
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Refrees.</span>
            </h4>
            <!-- <div class="mb-3">
          <small class="text-uppercase font-weight-bold">Form controls</small>
        </div> -->
        
        <div class="row">

        <div class="col-lg-4 col-sm-6">
            <div class="form-group">
            <span>1st person </span>
              <input type="text" placeholder="Name" name="name1" class="form-control" />
            </div>
          </div>

          <div class="col-lg-4 col-sm-6">
            <div class="form-group">
            <span>Position </span>
              <input type="text" placeholder="Position" name="position1" class="form-control" />
            </div>
          </div>

          <div class="col-lg-4 col-sm-6">
            <div class="form-group">
            <span>Contact </span>
              <input type="number" placeholder="Contact" name="contact1" class="form-control" />
            </div>
          </div>
</div>

<div class="row">

<div class="col-lg-4 col-sm-6">
    <div class="form-group">
    <span>2nd person </span>
      <input type="text" placeholder="Name" name="name2" class="form-control" />
    </div>
  </div>

  <div class="col-lg-4 col-sm-6">
    <div class="form-group">
    <span>Position </span>
      <input type="text" placeholder="Job role" name="position2" class="form-control" />
    </div>
  </div>

  <div class="col-lg-4 col-sm-6">
    <div class="form-group">
    <span>Contact </span>
      <input type="number" placeholder="Contact" name="contact2" class="form-control" />
    </div>
  </div>
</div>


          </div>
        </div>
      </div>
      </div>


      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <button class="btn btn-1 btn-primary" type="submit">Save Details</button>  
            </div>
            </div>
            </div>

</form>
            </div>
            </div>

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
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          
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