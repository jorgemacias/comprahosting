@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="gridbox" style="width:300px;height:400px;"></div>  
                    <script>
                    var grid = new dhx.Grid("gridbox", {
                columns: [
                    { width: 50, id: "Cliente", header: [{ text: "Cliente" }] },
                    
                ]
            });
            grid.data.load("<?= url('clientes/data')?>").then(function(){
            // alert('sas')
            });
            </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
