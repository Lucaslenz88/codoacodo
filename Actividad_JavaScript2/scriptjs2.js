for(tabla = 11; tabla > 8; tabla--){
    document.write("<strong></br> Tabla del " + tabla + ": </br></strong>");
      
    for(multiplicador=1; multiplicador<10; multiplicador ++){
        var resultado = tabla*multiplicador;
        document.write(tabla + "X" + multiplicador + "=" + resultado + "</br>");        
    }
}