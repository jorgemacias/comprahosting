function Modal(url,title,width){
    var dialog = $('#dialog');
    
    
        
    $.get(url,function(data){
        dialog.kendoDialog({
            width: width,
            title: title,
            closable: true,
            modal: false,
            content: data,
            actions: [
                { text: 'Guardar', primary: true  },
                // { text: 'Remind me later' },
                { text: 'Cancelar'}
            ],
            // close: onClose
        });

        dialog.data("kendoDialog").open();
    });
}