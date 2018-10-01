function departamentos(){
    $.get('ubigeo.php',
    {tipo: 'dpto'},
    function(rpta){
        $('#divdpto').html(rpta);
    }
    )
}

function provincias(){
    $.get('ubigeo.php',
    {
	 tipo: 'prov',
     dpto: $('#cbodpto').val()
	 },
    function(rpta){
        $('#divprov').html(rpta);
    }
    )
}

function distritos(){
    $.get('ubigeo.php',
    {
        tipo: 'dist',
        dpto: $('#cbodpto').val(),
        prov: $('#cboprov').val()
        },
    function(rpta){
        $('#divdist').html(rpta);
    }
    )
}