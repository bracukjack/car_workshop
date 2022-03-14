@include('admin.part.header')
@include('admin.part.sidebar')


<div id="main-content">
 <div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2>Jquery Datatable</h2>
        </div>            
        <div class="col-md-6 col-sm-12 text-right">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item">Table</li>
                <li class="breadcrumb-item active">Jquery Datatable</li>
            </ul>
            <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                    <div class="header-dropdown scale-left">
                        <a href="{{url('admin/car_owners/create')}}" class="btn btn-success"><i class="icon-plus mr-1"></i> Add New </a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no=1; ?>

                                @foreach($car_owners as $item)
                                <tr class="gradeA">
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{\Illuminate\Support\Str::limit($item->password ,10) }}...</td>
                                    <td align="center">
                                        <a href="{{url('admin/car_owners/'.$item->id.'/edit')}}" class="btn btn-primary">
                                            <i class="icon-eye"></i>
                                        </a>
                                        <a href="{{url('admin/car_owners/'.$item->id.'/edit')}}" class="btn btn-warning">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="{{url('admin/car_owners_delete/'.$item->id)}}"onclick ="return confirm('Are You Sure Delete Data??')" class="btn btn-danger">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                @endforeach

                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@include('admin.part.footer')