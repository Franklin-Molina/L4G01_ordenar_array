<!DCTYPE HTML>

    <html>

    <head>
        <h1 align="center">Ordenamiento de un array</h1>
        <h2>Metodo Borbuja</h2>
    </head>

    <body>

       
    </body> 

    </html>


 <?php


function borbuja ($numero)
{
    for($i=1;$i<count($numero);$i++)
    {
        for($j=0;$j<count($numero)-$i;$j++)
        {
            if($numero[$j]>$numero[$j+1])
            {
                $aux=$numero[$j+1];
                $numero[$j+1]=$numero[$j];
                $numero[$j]=$aux;
                
            }
        }
    }
    return $numero;
}


$nummeros_desordenados=[1,2,5,6,3,7,4,50];


echo"Array desordenado";
echo "<br>";

for($i=0;$i<count($nummeros_desordenados);$i++)
{
    echo $nummeros_desordenados[$i].",";
}

echo "<br>";



$ordenados= borbuja($nummeros_desordenados);

echo"Array ordenado";
echo "<br>";
for($i=0;$i<count($ordenados);$i++)
{
   
    echo $ordenados[$i].",";
}
   


    
    


?>
