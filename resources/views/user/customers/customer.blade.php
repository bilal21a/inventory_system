@extends('layouts.app')
@section('css_after')
    <style>
        .data-table-rows table.dataTable td .form-check {
            pointer-events: auto;
        }
    </style>
@endsection
@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">Customer</h1>

            </div>
        </div>
    </div>

    <a href="{{ route('add_customer') }}" class="btn btn-primary">Add New Customer</a>
    <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#closeButtonOutExample">Add Customers in
        Bulk</a>
    <a href="#" class="btn btn-light">Export CSV</a>
    <a href="#" class="btn btn-light btn-sm">Sync</a>
    <a href="#" class="btn btn-light btn-sm">Mark All</a>
    <div class="row">

        <div class="col-12 col-sm-12">
            <div class="os-content" style="padding: 0px 15px; height: auto; width: 100%;">
                <div class="data-table-rows slim">
                    <!-- Controls Start -->

                    @php
                        $tableName = 'app_block';
                        $tableData = ['id', 'name', 'Address', 'Phone', 'Comment', 'balance'];
                    @endphp
                    @include('common.table.table')
                </div>
            </div>
        </div>

    </div>

    <section class="scroll-section" id="closeButtonOut">
        <div class="card mb-5">
            <div class="card-body">
                <!-- Button Trigger -->

                <!-- Modal -->
                <div class="modal fade modal-close-out" id="closeButtonOutExample" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabelCloseOut" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelCloseOut">Add Customers In Bulk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">...</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content End -->
@endsection
