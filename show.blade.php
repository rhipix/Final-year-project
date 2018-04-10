
@extends('layouts.app')
@section('content')
    @extends('layouts.sidebar')
    @extends('layouts.homepagenav')
    @extends('styles.styling')

    <!-- Warehouse Stock Table -->
<div class="row">
    <div class="col-10 col-md-offset-1">
            <div class="container" id="warehouse-stock-table">
                <div class="panel panel-default">
                    <table id="warehouseStock">
                        <tr>
                        </tr>
                        <table class="table">
                            <tr>
                                <td id="warehouseitem-name">Item Name</td>
                                <td id="warehouseitem-quantity">Quantity Available</td>

                            </tr>
                            <?php
                                foreach($warehousestock as $warehouse) {
                                    ?>
                                    <tr>
                                        <td><?php echo $warehouse->itemName ?></td>
                                        <td><?php echo $warehouse->quantityAvailable ?></td>


                                    </tr>
                                   <?php
                                    }
                                    ?>
                        </table>
                    </table>
                    <div class="panel-body"></div>
                </div>
            </div>
        </div>
    </div>
    @endsection
