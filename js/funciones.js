$(document).ready(function(){
    
    //envía los datos del formulario para insertarlos en la BD
    $("#formTwitter").on("submit", function(event){
        
        event.preventDefault(); //neutralizar el formulario
        var formData = new FormData(document.getElementById("formTwitter"));

        $.ajax({
            url:"aplicacion/insert_user.php",
            type:"post",
            dataType: "html",
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){$('.cargando').show();},
        }).done(function(data){
            if(data == "success"){
                $('.cargando').hide();
                location.reload();
            }else{
                $('.cargando').hide();
            }
        });
    });
    
});
    //Consulta los usuarios de la Base de Datos y los muestra en el Select Option
    function cargarDatos(){
        $.post("aplicacion/cargar_lista.php",function(data){
            for(var i in data){
                $.each(data[i], function( key, value ) {
                    var opt = "<option value='"+value.id+"'>"+value.nombre+"</option>";
                    $("#user").append(opt);
                });
            }
        },'json');
    }
    
    //Al iniciar la página carga los últimos 10 twitts y los muestra en el TextArea
    function cargaTwits(){
        $.post("endpoint.php",{count:"10"},function(data){
            $("#result").val(JSON.stringify(data, undefined, 2));
        },'json');
    }
    
    //Consulta los últimos twitts con base en el número especificado y los muestra en el TextArea
    function consultaTwits(){
        var count = $("#count").val();
        $.post("endpoint.php",{count:count},function(data){
            $("#result").val(JSON.stringify(data, undefined, 2));
        },'json');
    }