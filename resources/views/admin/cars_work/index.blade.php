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
                        <a href="{{url('admin/cars_work/create')}}" class="btn btn-success"><i class="icon-plus mr-1"></i> Add New </a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Merk</th>
                                    <th>Service</th>
                                    <th>Car Owners</th>
                                    <th>Mechanics</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no=1; ?>

                                @foreach($cars_work as $item)
                                <tr class="gradeA">
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->merk }}</td>
                                    <td>{{ $item->services->name ?? "" }}</td>
                                    <td>{{ $item->owners->name ?? "" }}</td>
                                    <td>{{ $item->mechanics->name ?? "" }}</td>

                                    <td>
                                        @if ($item->status == 'procces')
                                        <span class="btn px-5 btn-warning">
                                            {{$item->status}}
                                        </span>

                                        @elseif ($item->status == 'finish')
                                        <span class="btn px-5 py-2 btn-info">
                                            {{$item->status}}
                                        </span>
                                        @endif
                                    </td>

                                    <td align="center">
                                        <a href="{{url('admin/cars_work/'.$item->id.'/edit')}}" class="btn btn-primary">
                                            <i class="icon-eye"></i>
                                        </a>
                                        <a href="{{url('admin/cars_work/'.$item->id.'/edit')}}" class="btn btn-warning">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="{{url('admin/cars_work_delete/'.$item->id)}}"onclick ="return confirm('Are You Sure Delete Data??')" class="btn btn-danger">
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
                                    <th>Merk</th>
                                    <th>Status</th>
                                    <th>Service</th>
                                    <th>Car Owners</th>
                                    <th>Mechanics</th>
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