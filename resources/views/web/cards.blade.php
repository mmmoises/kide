@extends('layout.dash')

@section('Uname', auth()->user()->name)

@section('header', 'Cards')

@section('icon')
     <i class="fa fa-dashboard"></i>
@endsection

@section('nav')

    <li>
    <a href="{{ URL::route('dashboard')}}">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>

     <li class="active">
         <a href="#">
             <i class="pe-7s-albums"></i>
             <p>Cards</p>
         </a>
     </li>

    
@endsection


@section('body')


<div class="row">
        <div class="col-md-6">
           <div class="row">
                            <div class="card ">
                                <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="header">
                                                        <h4 class="title">{{auth()->user()->name}}</h4>
                                                </div>
                                               
                                                <br>
                                                 <small class="form-group"><p> "Lamborghini Mercy 
                                                    Your chick she so thirsty 
                                                    I'm in that two seat Lambo"
                                                        </p></small>
                                            </div>

                                            <div class="col-md-4">
                                                {!!QrCode::size(150)->generate(auth()->user()->id) !!}

                                            </div>
                                              
                                        </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                                </div>
                            </div>
           </div>


           <div class="row">
                <div class="card">
                    esta es una prueba
                </div>               
           </div>

        </div>


        <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Nueva Promocion</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" value="michael23">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Company" value="Mike">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" placeholder="City" value="Mike">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" class="form-control" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
</div>
    
@endsection