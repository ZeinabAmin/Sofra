@extends('layouts.app')
@section('page_title')
    Show Restaurant
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Show Restaurant</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Restaurant name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>delivery_fee</th>
                                <th>minimum_order</th>
                                <th>whatsapp</th>
                                <th>informations</th>
                                <th>region_name</th>
                                <th>image</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $record->id }}</td>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->email }}</td>
                                <td>{{ $record->phone }}</td>
                                <td>{{ $record->delivery_fee }}</td>
                                <td>{{ $record->minimum_order }}</td>
                                <td>{{ $record->whatsapp }}</td>
                                <td>{{ $record->informations }}</td>
                                <td>{{ $record->region->name }}</td>
                                <td><img src="{{ asset($record->image) }}" sizes="25*25"></td>

                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>


    </section>
@endsection
