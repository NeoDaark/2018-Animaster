<?php
session_start();
    if(isset($_SESSION['user'])){
        $value=$_SESSION['user'];

$arr=$_SESSION['array'];
//var_dump($arr);

echo $id_usuario=$value['id_usuario'];
$id_categoria=$arr[0];
$nombre=$arr[1];
$apellido=$arr[2];
$edad=$arr[3];
$nivel=$arr[4];
$sexo=$arr[5];
$pelo=$arr[6];
$ojos=$arr[7];
$altura=$arr[8];
$peso=$arr[9];
$apariencia=$arr[10];
$agi=$arr[11];
$con=$arr[12];
$des=$arr[13];
$fue=$arr[14];
$int=$arr[15];
$per=$arr[16];
$pod=$arr[17];
$vol=$arr[18];
$nacionalidad=$arr[19];
$ha=$_POST['FIha'];
$hp=$_POST['FIhp'];
$he=$_POST['FIhe'];
$le=$_POST['FIla'];
///////////
$id_HS1=$_POST['1'];
$id_HS2=$_POST['2'];
$id_HS3=$_POST['3'];
$id_HS4=$_POST['4'];
$id_HS5=$_POST['5'];
$id_HS6=$_POST['6'];
$id_HS7=$_POST['7'];
$id_HS8=$_POST['8'];
$id_HS9=$_POST['9'];
$id_HS10=$_POST['10'];
$id_HS11=$_POST['11'];
$id_HS12=$_POST['12'];
$id_HS13=$_POST['13'];
$id_HS14=$_POST['14'];
$id_HS15=$_POST['15'];
$id_HS16=$_POST['16'];
$id_HS17=$_POST['17'];
$id_HS18=$_POST['18'];
$id_HS19=$_POST['19'];
$id_HS20=$_POST['20'];
$id_HS21=$_POST['21'];
$id_HS22=$_POST['22'];
$id_HS23=$_POST['23'];
$id_HS24=$_POST['24'];
$id_HS25=$_POST['25'];
$id_HS26=$_POST['26'];
$id_HS27=$_POST['27'];
$id_HS28=$_POST['28'];
$id_HS29=$_POST['29'];
$id_HS30=$_POST['30'];
$id_HS31=$_POST['31'];
$id_HS32=$_POST['32'];
$id_HS33=$_POST['33'];
$id_HS34=$_POST['34'];
$id_HS35=$_POST['35'];
$id_HS36=$_POST['36'];
$id_HS37=$_POST['37'];
$id_HS38=$_POST['38'];
$id_HS39=$_POST['39'];
$id_HS40=$_POST['40'];
$id_HS41=$_POST['41'];
$id_HS42=$_POST['42'];
$id_HS43=$_POST['43'];
$id_HS44=$_POST['44'];
$id_HS45=$_POST['45'];
$id_HS46=$_POST['46'];
$id_HS47=$_POST['47'];
$id_HS48=$_POST['48'];
$id_HS49=$_POST['49'];
//
$acrobacias=$_POST['hs1'];
$atletismo=$_POST['hs2'];
$montar=$_POST['hs3'];
$nadar=$_POST['hs4'];
$trepar=$_POST['hs5'];
$saltar=$_POST['hs6'];
$frialdad=$_POST['hs7'];
$p_fuerza=$_POST['hs8'];
$res_dolor=$_POST['hs9'];
$advertir=$_POST['hs10'];
$buscar=$_POST['hs11'];
$rastrear=$_POST['hs12'];
$animales=$_POST['hs13'];
$ciencia=$_POST['hs14'];
$herbolaria=$_POST['hs15'];
$historia=$_POST['hs16'];
$medicina=$_POST['hs17'];
$memorizar=$_POST['hs18'];
$navegacion=$_POST['hs19'];
$ocultismo=$_POST['hs20'];
$tasacion=$_POST['hs21'];
$ley=$_POST['hs22'];
$tactica=$_POST['hs23'];
$estilo=$_POST['hs24'];
$intimidar=$_POST['hs25'];
$liderazgo=$_POST['hs26'];
$persuacion=$_POST['hs27'];
$comerciar=$_POST['hs28'];
$callejeo=$_POST['hs29'];
$etiqueta=$_POST['hs30'];
$cerrajeria=$_POST['hs31'];
$disfraz=$_POST['hs32'];
$ocultarse=$_POST['hs33'];
$robo=$_POST['hs34'];
$sigilo=$_POST['hs35'];
$tramperia=$_POST['hs36'];
$venenos=$_POST['hs37'];
$arte=$_POST['hs38'];
$baile=$_POST['hs39'];
$forja=$_POST['hs40'];
$trucos_manos=$_POST['hs41'];
$canto=$_POST['hs42'];
$runas=$_POST['hs43'];
$animismo=$_POST['hs44'];
$alquimia=$_POST['hs45'];
$especial1=$_POST['hs46'];
$especial2=$_POST['hs47'];
$especial3=$_POST['hs48'];
$especial4=$_POST['hs49'];
//costos
$newacrobacias=$_POST['coste1'];
$newatletismo=$_POST['coste2'];
$newmontar=$_POST['coste3'];
$newnadar=$_POST['coste4'];
$newtrepar=$_POST['coste5'];
$newsaltar=$_POST['coste6'];
$newfrialdad=$_POST['coste7'];
$newp_fuerza=$_POST['coste8'];
$newres_dolor=$_POST['coste9'];
$newadvertir=$_POST['coste10'];
$newbuscar=$_POST['coste11'];
$newrastrear=$_POST['coste12'];
$newanimales=$_POST['coste13'];
$newciencia=$_POST['coste14'];
$newherbolaria=$_POST['coste15'];
$newhistoria=$_POST['coste16'];
$newmedicina=$_POST['coste17'];
$newmemorizar=$_POST['coste18'];
$newnavegacion=$_POST['coste19'];
$newocultismo=$_POST['coste20'];
$newtasacion=$_POST['coste21'];
$newley=$_POST['coste22'];
$newtactica=$_POST['coste23'];
$newestilo=$_POST['coste24'];
$newintimidar=$_POST['coste25'];
$newliderazgo=$_POST['coste26'];
$newpersuacion=$_POST['coste27'];
$newcomerciar=$_POST['coste28'];
$newcallejeo=$_POST['coste29'];
$newetiqueta=$_POST['coste30'];
$newcerrajeria=$_POST['coste31'];
$newdisfraz=$_POST['coste32'];
$newocultarse=$_POST['coste33'];
$newrobo=$_POST['coste34'];
$newsigilo=$_POST['coste35'];
$newtramperia=$_POST['coste36'];
$newvenenos=$_POST['coste37'];
$newarte=$_POST['coste38'];
$newbaile=$_POST['coste39'];
$newforja=$_POST['coste40'];
$newtrucos_manos=$_POST['coste41'];
$newcanto=$_POST['coste42'];
$newrunas=$_POST['coste43'];
$newanimismo=$_POST['coste44'];
$newalquimia=$_POST['coste45'];
$newespecial1=$_POST['coste46'];
$newespecial2=$_POST['coste47'];
$newespecial3=$_POST['coste48'];
$newespecial4=$_POST['coste49'];
//
$FIacrobacias=$acrobacias*$newacrobacias;
$FIatletismo=$atletismo*$newatletismo;
$FImontar=$montar*$newmontar;
$FInadar=$nadar*$newnadar;
$FItrepar=$trepar*$newtrepar;
$FIsaltar=$saltar*$newsaltar;
$FIfrialdad=$frialdad*$newfrialdad;
$FIp_fuerza=$p_fuerza*$newp_fuerza;
$FIres_dolor=$res_dolor*$newres_dolor;
$FIadvertir=$advertir*$newadvertir;
$FIbuscar=$buscar*$newbuscar;
$FIrastrear=$rastrear*$newrastrear;
$FIanimales=$animales*$newanimales;
$FIciencia=$ciencia*$newciencia;
$FIherbolaria=$herbolaria*$newherbolaria;
$FIhistoria=$historia*$newhistoria;
$FImedicina=$medicina*$newmedicina;
$FImemorizar=$memorizar*$newmemorizar;
$FInavegacion=$navegacion*$newnavegacion;
$FIocultismo=$ocultismo*$newocultismo;
$FItasacion=$tasacion*$newtasacion;
$FIley=$ley*$newley;
$FItactica=$tactica*$newtactica;
$FIestilo=$estilo*$newestilo;
$FIintimidar=$intimidar*$newintimidar;
$FIliderazgo=$liderazgo*$newliderazgo;
$FIpersuacion=$persuacion*$newpersuacion;
$FIcomerciar=$comerciar*$newcomerciar;
$FIcallejeo=$callejeo*$newcallejeo;
$FIetiqueta=$etiqueta*$newetiqueta;
$FIcerrajeria=$cerrajeria*$newcerrajeria;
$FIdisfraz=$disfraz*$newdisfraz;
$FIocultarse=$ocultarse*$newocultarse;
$FIrobo=$robo*$newrobo;
$FIsigilo=$sigilo*$newsigilo;
$FItramperia=$tramperia*$newtramperia;
$FIvenenos=$venenos*$newvenenos;
$FIarte=$arte*$newarte;
$FIbaile=$baile*$newbaile;
$FIforja=$forja*$newforja;
$FItrucos_manos=$trucos_manos*$newtrucos_manos;
$FIcanto=$canto*$newcanto;
$FIrunas=$runas*$newrunas;
$FIanimismo=$animismo*$newanimismo;
$FIalquimia=$alquimia*$newalquimia;
$FIespecial1=$especial1*$newespecial1;
$FIespecial2=$especial2*$newespecial2;
$FIespecial3=$especial3*$newespecial3;
$FIespecial4=$especial4*$newespecial4;

$puntos_hs=$FIacrobacias+$FIatletismo+$FImontar+$FInadar+$FItrepar+$FIsaltar+$FIfrialdad+$FIp_fuerza+$FIres_dolor+$FIadvertir+$FIbuscar+$FIrastrear+$FIanimales+$FIciencia+$FIherbolaria+$FIhistoria+$FImedicina+$FImemorizar+$FInavegacion+$FIocultismo+$FItasacion+$FIley+$FItactica+$FIestilo+$FIintimidar+$FIliderazgo+$FIpersuacion+$FIcomerciar+$FIcallejeo+$FIetiqueta+$FIcerrajeria+$FIdisfraz+$FIocultarse+$FIrobo+$FIsigilo+$FItramperia+$FIvenenos+$FIarte+$FIbaile+$FIforja+$FItrucos_manos+$FIcanto+$FIrunas+$FIanimismo+$FIalquimia+$FIespecial1+$FIespecial2+$FIespecial3+$FIespecial4;


///////////////////////////////
$puntos_hp=$_POST['suma3'];
$puntos_totals=$_POST['puntos_totals'];
$puntos_queden=$puntos_totals-($puntos_hp+$puntos_hs);
 
echo $puntos_totals."<br>".$puntos_hp."<br>".$puntos_hs."<br>".$puntos_queden;
$turno=20;
require_once "../Classes/Puntos_Vida.php";
$cantidad = new Puntos_Vida();
$cantidad=$cantidad->viewVida($con);

foreach ($cantidad as $cantidad){
    $cant2=$cantidad->getCantidad();

    $puntos_vida=$cant2;
    $raza="humano";
    $tamanyo=$fue+$con;
    $exp_actual=0;
    $imagen="image";
    $humano="humano";
    $id_partida=$_GET['id_partida'];
    require_once "../Classes/Personaje.php";
    $personaje = new Personaje($id_usuario,$id_partida,$id_categoria,$nombre,$apellido,$edad,$nivel,$turno,$puntos_vida,$sexo,$raza,$pelo,$ojos,$altura,$peso,$apariencia,$tamanyo,$exp_actual,$agi,$con,$des,$fue,$int,$per,$pod,$vol,$nacionalidad,$imagen,$humano,$puntos_hs,$puntos_hp,$puntos_queden,$ha,$hp,$he,$le,0,0);
    $id_personaje=$personaje->add();
    //var_dump($id_personaje);
    require_once "../Classes/Personaje_HS.php";
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS1, $FIacrobacias);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS2, $FIatletismo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS3, $FImontar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS4, $FInadar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS5, $FItrepar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS6, $FIsaltar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS7, $FIfrialdad);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS8, $FIp_fuerza);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS9, $FIres_dolor);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS10, $FIadvertir);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS11, $FIbuscar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS12, $FIrastrear);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS13, $FIanimales);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS14, $FIciencia);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS15, $FIherbolaria);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS16, $FIhistoria);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS17, $FImedicina);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS18, $FImemorizar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS19, $FInavegacion);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS20, $FIocultismo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS21, $FItasacion);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS22, $FIley);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS23, $FItactica);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS24, $FIestilo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS25, $FIintimidar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS26, $FIliderazgo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS27, $FIpersuacion);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS28, $FIcomerciar);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS29, $FIcallejeo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS30, $FIetiqueta);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS31, $FIcerrajeria);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS32, $FIdisfraz);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS33, $FIocultarse);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS34, $FIrobo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS35, $FIsigilo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS36, $FItramperia);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS37, $FIvenenos);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS38, $FIarte);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS39, $FIbaile);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS40, $FIforja);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS41, $FItrucos_manos);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS42, $FIcanto);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS43, $FIrunas);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS44, $FIanimismo);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS45, $FIalquimia);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS46, $FIespecial1);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS47, $FIespecial2);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS48, $FIespecial3);
    $personaje_HS->add();
    $personaje_HS=new Personaje_HS($id_personaje, $id_HS49, $FIespecial4);
    $personaje_HS->add();
    header('Location: ../../settings/character/new_equipment.php?id_personaje='.$id_personaje.'&id_partida='.$id_partida.'');

}
}
?>
