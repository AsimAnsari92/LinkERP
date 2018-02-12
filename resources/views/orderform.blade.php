@extends('layout.master')


@section('title')
    Dashboard!
@endsection

@section('content')
    <div class="wrapper">
    @include("layout.header")

        <div class="content-wrapper">
            <div class="container">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Order Details</h3>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                                        Add Items
                                    </button>
                                </div>
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Add Item Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="box-body">
                                                    <div class="col-md-6">
                                                        <form role="form">
                                                            <div class="box-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Request Number</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Request Number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Request Date</label>
                                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter Request Date">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Delivery Date</label>
                                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Select Date">
                                                                </div>

                                                            </div>
                                                            <!-- /.box-body -->

                                                        </form>
                                                        <div class="box-footer">
                                                            <button type="submit" class="btn btn-block btn-success" style="width: 30% !important;">Submit</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form role="form">
                                                            <div class="box-body">

                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Quantity</label>
                                                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Branch Name</label>
                                                                    <select class="form-control">
                                                                        <option>-Select-</option>
                                                                        <option>Bank Name2</option>
                                                                        <option>Bank Name3</option>
                                                                        <option>Bank Name4</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Item Name</label>
                                                                    <select class="form-control">
                                                                        <option>-Select-</option>
                                                                        <option>Item Number 2</option>
                                                                        <option>Item Number 3</option>
                                                                        <option>Item Number 4</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- /.box-body -->
                                                        </form>

                                                    </div>

                                                </div>
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
                                            <th>Heading 1</th>
                                            <th>Heading 2</th>
                                            <th>Heading 3</th>
                                            <th>Heading 4</th>
                                            <th>Heading 5</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.6</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                        </tr>

                                        <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>C</td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>

                                        <tr>
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td>-</td>
                                            <td>C</td>
                                        </tr>
                                        <tr>
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>U</td>
                                        </tr>
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







