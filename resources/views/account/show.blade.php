<!DOCTYPE html>
<html>
    <head>
    	<title>Cuenta de cobro {{$account->client->name}} {{$account->client->last_name}} {{$account->id}}</title>
    	<style>
            body {
                font-family: "Tahoma", "Geneva", sans-serif;
                font-weight:normal;
                font-size:11pt;
                color:black;
                margin:0px 0px 0px 0px;
                width:700px;
                height:1000px;
                padding:0px;
            }
        </style>
    </head>
    <body>
        <img src="img/targeta1.png" width="190" height="50">
        <p align="center">WILMER CRISTANCHO<br>“XXXX”<br>NIT 121212  CÓDIGO ACTIVIDAD CIIU 121212</p><br>
        <p align="right">CUENTA DE COBRO N° {{$account->id}}<br>Ibague {{$account->date}}</p><br><br>
        <p align="center">{{$account->client->name}}<br>{{$account->client->last_name}}<br>NIT:{{$account->client->identification}}<br>(Responsable de I.V.A. – Régimen Común)</p><br>
        <p align="center">DEBE A:<br>WILMER<br>NIT 12334324324<br>(Responsable de I.V.A. – Régimen Simplificado)</p><br>
        <p align="center">POR CONCEPTO DE: </p>
        <p>{{$account->details}}</p>
        <p> Valor Total: ${{number_format($account->price)}}.oo </p><br>
        <br>
        <br>
        <p align="center"><img src="img/img.png" alt=""><br>__________________________________<br>WILMER CRISTANCHO<br>C.C. 2323232 de Ibagué</p><br>
        <br>
        <p>CELULARES: XCXCXCXCXC</p>
        <p align="justify">NOTA: En virtud de lo contemplado en el art. 616-2 del ET, quienes sean responsables del IVA, en el Régimen simplificado no están obligados a expedir factura de Venta, por las ventas de bienes o presentación de servicios que realicen</p>
    </body>
</html>



