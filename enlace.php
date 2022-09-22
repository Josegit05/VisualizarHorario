<?php
$array["Lunes"][1]["modulo"] = "EMR";
$array["Lunes"][1]["profesor"] = "MARIA DEL SOL";
$array["Lunes"][1]["taller"] = "201"."<br>";

$array["Lunes"][2]["modulo"] = "DSW";
$array["Lunes"][2]["profesor"] = "SERGIO RAMOS";
$array["Lunes"][2]["taller"] = "201"."<br>";

$array["Lunes"][3]["modulo"] = "DSW";
$array["Lunes"][3]["profesor"] = "SERGIO RAMOS";
$array["Lunes"][3]["taller"] = "201"."<br>";

$array["Lunes"][4]["modulo"] = "DEW";
$array["Lunes"][4]["profesor"] = "MARIA DEL CARMEN";
$array["Lunes"][4]["taller"] = "201"."<br>";

$array["Lunes"][5]["modulo"] = "DEW";
$array["Lunes"][5]["profesor"] = "MARIA DEL CARMEN";
$array["Lunes"][5]["taller"] = "201"."<br>";

$array["Lunes"][6]["modulo"] = "DEW";
$array["Lunes"][6]["profesor"] = "MARIA DEL CARMEN";
$array["Lunes"][6]["taller"] = "201"."<br>";

$array["Martes"][1]["modulo"] = "DPL";
$array["Martes"][1]["profesor"] = "MARIA ANTONIA";
$array["Martes"][1]["taller"] = "201"."<br>";

$array["Martes"][2]["modulo"] = "DPL";
$array["Martes"][2]["profesor"] = "MARIA ANTONIA";
$array["Martes"][2]["taller"] = "201"."<br>";

$array["Martes"][3]["modulo"] = "DSW";
$array["Martes"][3]["profesor"] = "SERGIO RAMOS";
$array["Martes"][3]["taller"] = "201"."<br>";

$array["Martes"][4]["modulo"] = "DSW";
$array["Martes"][4]["profesor"] = "SERGIO RAMOS";
$array["Martes"][4]["taller"] = "201"."<br>";

$array["Martes"][5]["modulo"] = "DOR";
$array["Martes"][5]["profesor"] = "MARIA DEL CARMEN";
$array["Martes"][5]["taller"] = "201"."<br>";

$array["Martes"][6]["modulo"] = "DOR";
$array["Martes"][6]["profesor"] = "ERMIS BAEZ";
$array["Martes"][6]["taller"] = "201"."<br>";

$array["Miércoles"][1]["modulo"] = "DEW";
$array["Miércoles"][1]["profesor"] = "MARIA DEL CARMEN";
$array["Miércoles"][1]["taller"] = "201"."<br>";

$array["Miércoles"][2]["modulo"] = "DEW";
$array["Miércoles"][2]["profesor"] = "MARIA DEL CARMEN";
$array["Miércoles"][2]["taller"] = "201"."<br>";

$array["Miércoles"][3]["modulo"] = "DSW";
$array["Miércoles"][3]["profesor"] = "SERGIO RAMOS";
$array["Miércoles"][3]["taller"] = "201"."<br>";

$array["Miércoles"][4]["modulo"] = "DSW";
$array["Miércoles"][4]["profesor"] = "SERGIO RAMOS";
$array["Miércoles"][4]["taller"] = "201"."<br>";

$array["Miércoles"][5]["modulo"] = "DOR";
$array["Miércoles"][5]["profesor"] = "ERMIS BAEZ";
$array["Miércoles"][5]["taller"] = "201"."<br>";

$array["Miércoles"][6]["modulo"] = "DOR";
$array["Miércoles"][6]["profesor"] = "ERMIS BAEZ";
$array["Miércoles"][6]["taller"] = "201"."<br>";

$array["Jueves"][1]["modulo"] = "DPL";
$array["Jueves"][1]["profesor"] = "MARIA ANTONIA";
$array["Jueves"][1]["taller"] = "201"."<br>";

$array["Jueves"][2]["modulo"] = "DPL";
$array["Jueves"][2]["profesor"] = "MARIA ANTONIA";
$array["Jueves"][2]["taller"] = "201"."<br>";

$array["Jueves"][3]["modulo"] = "DPL";
$array["Jueves"][3]["profesor"] = "MARIA ANTONIA";
$array["Jueves"][3]["taller"] = "201"."<br>";

$array["Jueves"][4]["modulo"] = "DEW";
$array["Jueves"][4]["profesor"] = "MARIA DEL CARMEN";
$array["Jueves"][4]["taller"] = "201"."<br>";

$array["Jueves"][5]["modulo"] = "DEW";
$array["Jueves"][5]["profesor"] = "MARIA DEL CARMEN";
$array["Jueves"][5]["taller"] = "201"."<br>";

$array["Jueves"][6]["modulo"] = "EMR";
$array["Jueves"][6]["profesor"] = "MARIA DEL SOL";
$array["Jueves"][6]["taller"] = "201"."<br>";

$array["Viernes"][1]["modulo"] = "DOR";
$array["Viernes"][1]["profesor"] = "ERMIS BAEZ";
$array["Viernes"][1]["taller"] = "201"."<br>";

$array["Viernes"][2]["modulo"] = "DOR";
$array["Viernes"][2]["profesor"] = "ERMIS BAEZ";
$array["Viernes"][2]["taller"] = "201"."<br>";

$array["Viernes"][3]["modulo"] = "DPL";
$array["Viernes"][3]["profesor"] = "MARIA ANTONIA";
$array["Viernes"][3]["taller"] = "201"."<br>";

$array["Viernes"][4]["modulo"] = "EMR";
$array["Viernes"][4]["profesor"] = "MARIA DEL SOL";
$array["Viernes"][4]["taller"] = "201"."<br>";

$array["Viernes"][5]["modulo"] = "DSW";
$array["Viernes"][5]["profesor"] = "SERGIO RAMOS";
$array["Viernes"][5]["taller"] = "201"."<br>";

$array["Viernes"][6]["modulo"] = "DSW";
$array["Viernes"][6]["profesor"] = "SERGIO RAMOS";
$array["Viernes"][6]["taller"] = "201"."<br>";


foreach($array as $dia=>$valor){
    echo "<table style='display: inline'>";
    echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
    echo "<th style='border-collapse:collapse; border: 1px solid black'>HORA</th>";
    echo "<th style='border-collapse:collapse; border: 1px solid black'>".$dia."</th>";
    
    foreach($valor as $hora=>$valor2){
       foreach($valor2 as $modulo=>$valor3){
        echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
        echo "<td style='border-collapse:collapse; border: 1px solid black'>".$hora." hora.</td>";
        echo "<td style='border-collapse:collapse; border: 1px solid black'>".$valor3."</td>";
        
        echo "</tr>";
        }
    }
    echo "</tr>";
    echo "</table>";
}
