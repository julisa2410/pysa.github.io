$(document).ready(function(){
    $("#aceptar").click(function(){
        upload_file();

    });
});

function upload_file(){
    validate_file();
    var file= $("#file").prop("files")[0];
    //console.log(file);

    var formData = new FormData();
    formData.append('file', file);

    $.ajax({
        url: '../php/subir1.php',
        type: 'POST',
        dataType: 'text',
        cache: false,
        processData: false,
        contentType: false,
        data: formData,
    })
    .done(function(data){
        console.log("success");
    })
    .fail(function(){
        console.log("error");
    })
    .always(function(){
        console.log("complete");
    });
}

function validate_file(){
    var archivo = document.getElementById('file');
    var tamano = $("#file")[0].files[0].size;
    var name = $("#file")[0].files[0].name;
    console.log(tamano);
    console.log(name);

    if (tamano > 4000000) 
    {
        alert("El tamaño del archivo supera los 4MB ");
        archivo.value = '';
        return false;        
    }else{
        var ext = name.split('.').pop();
        switch(ext)
        {
            case'pdf':
            break;
            default:
                alert("Error al subir archivo: la extension no es la correcta ");
                archivo.value = '';
        }
    }
}
$(document).ready(function(){
    $("#cargar").load('../cargar_tabla/cargar_tabla_impo.php');
});