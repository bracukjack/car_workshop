@include('admin.part.header')
@include('admin.part.sidebar')


<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Basic Form Elements</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Basic Form</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-10 col-md-12">
                <div class="card p-3">
                    <div class="header">
                        <h2> Create New Car Owners</h2>
                    </div>
                    <div class="body">
                     <form method="POST" action="{{ url('admin/cars_work') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="merk">Cars Merk</label>
                            <input type="text" name="merk" class="form-control" placeholder="Input Cars Merk Or Car Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_plate">Cars Plate Number</label>
                            <input type="text" name="no_plate" class="form-control" placeholder="Input Cars Plate Number">
                        </div>

                        <div class="form-group mb-3">
                            <label for="car_owners">Car Owner</label>
                            <select name="cars_owners_id" class=" select2 form-control">
                                @foreach($car_owners as $cars_owners)
                                <option value="{{$cars_owners->id}}">{{$cars_owners->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="services">Services</label>
                            <select name="services_id" class=" select2 form-control">
                                @foreach($services as $services)
                                <option value="{{$services->id}}">{{$services->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="mechanics">Cars Mechanics</label>
                            <select name="mechanics_id" class=" select2 form-control">
                                @foreach($mechanics as $mechanics)
                                <option value="{{$mechanics->id}}">{{$mechanics->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Cars Status</label>
                            <select name="status" class="alert-secondary form-control">
                                <option selected value="procces"> Procces</option>
                                <option value="finish"> Finish</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="payment">Payment</label>
                            <select name="payment" class="alert-secondary form-control">
                                <option selected value="unpaid"> Unpaid</option>
                                <option value="paid"> Paid</option>
                            </select>
                        </div>

                        <div class="row mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('admin.part.footer')