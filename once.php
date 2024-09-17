<?php
$departamento = 'INFORMATICA';

switch ($departamento)
{
    case 'MATEMATICAS':
        $presupuesto = 200; //falltrought. Seguirá ejecutandose y
                            //sobrescribirá 200 con valor 500.
    case 'LENGUA':
        case 'FRANCES':     //agrupacion
            $presupuesto = 500;
            breack;

    case 'INFORMATICA':
        $presupuesto = 100;
        break;
    default:
        //Deben contemplarse todos los departamentos sino error
        assert(false):
}
// $presupuesto debe quedar inicializada.
assert(isset($presupuesto));
echo $presupuesto;
?>