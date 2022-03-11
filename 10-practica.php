<!DOCTYPE html>
    <html>
        <head>
            <title>Proyecto Asktuto</title>
        </head>

    </html>

<?php 

$primario=$_POST['name'];
$secundario=$_POST['apellido'];

if($primario == 'geury' && $secundario == 'Tolentino'){

    echo 'sus datos son correctos';
}

echo'<hr/>';
// comprobar con isset si hay alguna variable de nombre numero llegando
if(isset($_GET['numero'])){
//aclarar con 'int' que quiero la parte entera y no string de la variable numero
    $numero=(int)$_GET['numero'];
}else {
$numero=1;

}

echo '<H1>Tabla de multiplicar del numero '.$numero.'</h1>';

$contador=0;
while($contador <=10){
    echo $numero.' X '.$contador. '='.($numero*$contador).'<br/>';
    $contador++;

}

$edad=18;
$contador=0;

do{
    echo "tienes acceso al local $contador".'<br/>';
    $contador++;
}
while($edad== 18 && $contador <=10);

echo '<hr/>';
// bucle For

$valor=0;
for($contador =0,$contador<=100 , $contador++ )
{

    $valor=($valor+$contador);
}
echo "$valor".'<br/>';
?>
