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
                    <div id="grid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#grid").kendoGrid({
            toolbar: [
                { name: "custom",text:"Agregar nuevo" },
            ],
          dataSource: {   
            transport: {   
              read: {
                url: "<?= url('clientes/data')?>",
                // data: {
                //   tags: "nature",
                //   format: "json"
                // },
                dataType: "json", // "jsonp" is required for cross-domain requests; use "json" for same-domain requests
                // jsonp: "jsoncallback",
              }
            },
            schema: {
              data: "data",
              model: {
                fields: {
                  Cliente: {type: "string"}
                }
              }
            }
          },
          columns: [
            {field: "Cliente", title: "Clientes"},
            { command: { text: "Editar", click: Editar }, title: " ", width: "180px" },
            { command: { text: "Borrar", click: Borrar }, title: " ", width: "180px" }
            // {field: "published", title: "Published On"},
            // {field: "media", title: "Image"}
          ],
          height: 500,
          scrollable: true,
          selectable: true
        });

        $(".k-grid-custom").click(function(e){
            Modal("<?= url('clientes/form')?>","Agregar cliente","600px")
        });

      });
      
      function Editar(){}
      function Borrar(){}
        
</script>
@endsection
