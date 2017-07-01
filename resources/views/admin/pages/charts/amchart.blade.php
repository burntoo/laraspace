@extends('admin.layouts.layout-basic')
@section('styles')
    <style>

    </style>
    @stop
@section('scripts')
    <script src="{{asset('assets/admin/js/demo/charts/amcharts.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Graphs</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.graphs')}}">Components</a></li>
                <li class="breadcrumb-item active">Graphs</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Column and Line mix Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="bar-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Clustered Bar Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="clust-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Clustered Bar Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="line-area-value-axis"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Stacked Area Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="stack-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>3D Cylinder Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="3d-cylinder-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Animated Time-Line Pie Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="animated-pie-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>3D Donut Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="3d-donut-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Radar Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="radar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Animated Time-Line Pie Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="polar-scatter-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>3Animations along lines Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="map-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Capitals map</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="capital-map-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Zoomable Bubble & XY Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="xy-and-bubble-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Multiple Data Sets Stock Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="multiple-data-sets-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop