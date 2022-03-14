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
                        <a href="{{url('admin/services/create')}}" class="btn btn-success"><i class="icon-plus mr-1"></i> Add New </a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Service Name</th>
                                    <th>Service Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no=1; ?>

                                @foreach($services as $item)
                                <tr class="gradeA">
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>Rp. {{ $item->price }},00</td>
                                    <td align="center">
                                        
                                        <a href="{{url('admin/services/'.$item->id.'/edit')}}" class="btn btn-warning">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="{{url('admin/services_delete/'.$item->id)}}"onclick ="return confirm('Are You Sure Delete Data??')" class="btn btn-danger">
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
                                    <th>Service Name</th>
                                    <th>Service Price</th>
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