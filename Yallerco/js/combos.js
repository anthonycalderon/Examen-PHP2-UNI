function matricula(){
    $.get('matricular_alumno.php',
    {tipo: 'alum'},
    function(rpta){
        $('#divalum').html(rpta);
    }
    )
}

function curso(){
    $.get('matricular_alumno.php',
    {
	 tipo: 'cur',
     dpto: $('#cbocur').val()
	 },
    function(rpta){
        $('#divcur').html(rpta);
    }
    )
}

