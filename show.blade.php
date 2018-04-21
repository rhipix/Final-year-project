@extends('layouts.app')
@section('content')
    @extends('layouts.sidebar')
    @extends('styles.styling')
    @extends('layouts.homepagenav')
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="container" id="order-history-table">
                <div class="panel panel-default">
                    <div class="panel-heading">Suppliers</div>
                    <table>
                        <tr>
                        </tr>

                        <table class="table">
                            <tr>
                                <td id="supplier-name">Name:</td>
                                <td id="supplier-category">Category:</td>
                                <td id="supplier-address">Address:</td>
                                <td id="supplier-postcode">Postcode:</td>
                            </tr>
                            <?php
                            foreach($suppliers as $supplier) {
                            ?>
                            <tr>
                                <td><?php echo $supplier->name?></td>
                                <td><?php echo $supplier->category?></td>
                                <td><?php echo $supplier->address?></td>
                                <td><?php echo $supplier->postcode?></td>

                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </table>
                    <div class="text-center">
                        {!! $suppliers->links() !!}
                    </div>
                    <div class="text-center">
                    <a href="{{URL::Route('suppliers.create')}}" class="btn btn-danger" id="add-new-supplier">Add a Supplier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection