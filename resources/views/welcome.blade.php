@extends('layout.master')


@section('title')
    Dashboard!
@endsection

@section('content')
   {{-- @foreach($branch as $post)

        <p>{{$post->branch}}</p>

        @endforeach--}}
    <div class="wrapper">

        @include("layout.header")

        <div class="content-wrapper">
            <div class="container">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Products</h3>
                                    <br>
                                    <br>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-product">
                        Add Products
                    </button>

                                </div>
    <div class="modal fade" id="modal-product">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add Item Details</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">RequestNo</label>
                                <input type="text" class="form-control" id="RequestNo" placeholder="Request No">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quantity</label>
                                <input type="number" class="form-control" id="Quantity" placeholder="Quantity">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Request Date</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="RequestDate">
                                </div>
                                {{--<input type="number" class="form-control" id="RequestDate" placeholder="Request Date">--}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deliver Date</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="DeliverDate">
                                </div>
                                {{--<input type="number" class="form-control" id="Deliver Date" placeholder="Deliver Date">--}}
                            </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Branch Name</label>
<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
    <option selected="selected">Alabama</option>
    <option>Alaska</option>
    <option>California</option>
    <option>Delaware</option>
    <option>Tennessee</option>
    <option>Texas</option>
    <option>Washington</option>
</select>
         </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Item Name</label>
                                <input type="number" class="form-control" id="ItemName" placeholder="Item Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Rate</label>
                                <input type="number" class="form-control" id="Rate" placeholder="Rate">
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

                                <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Item Name</th>
                        <th>Rate</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $i => $item)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$item->item}}</td>
                            <td>{{$item->rate}}</td>
                            <td>
                                <button type="button" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">


                            <div class="box">


                                <div class="box-header">
                                    <h3 class="box-title">Branches</h3>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                                        Add Branch
                                    </button>
                                    <div class="row">
                                    </div>
                                </div>

                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Add Bank Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" action="{{route('addproduct')}}">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                    <label for="exampleInputEmail1">Bank</label>

                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">


                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>

                                                            {{--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bank Name..">--}}
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Branch</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Branch Name..">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Address</label>
                                                            <textarea class="form-control" rows="2" cols="3" style="resize: none; width: 100%;height: 50%;">

                                                            </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">City</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="City..">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Contact Number</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="contact Number..">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Contact Number</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Optional..">
                                                        </div>
                                                    </div>
                                                    <!-- /.box-body -->
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                                <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Branch</th>
                                <th>Address</th>
                                <th>Contact 1</th>
                                <th>Contact 2</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($branch as $i => $post)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$post->branch}}</td>
                                    <td>{{$post->address}}</td>
                                    <td>{{$post->contact1}}</td>
                                    <td>{{$post->contact2}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                                </div>
                            </div>
                        </div>

                    </div>


                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>


        @include("layout.footer")


    </div>
@endsection