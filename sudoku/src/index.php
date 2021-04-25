<html>
    <title>16 x 16 Sudoku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        table {
            margin:1em auto;
            color: royalblue;
        }
        td {
            font-size: x-large;
            height:50px;
            width:50px;
            border:1px solid;
            text-align:center;
            color: royalblue;
        }
        td:first-child {
            border-left:solid;
        }
        td:nth-child(4n) {
            border-right:solid ;
        }
        tr:first-child {
            border-top:solid;
        }
        tr:nth-child(4n) td {
            border-bottom:solid ;
        }
        input.sudoku {
            height:50px;
            width:50px;
            border: 0;
            color: red;
            text-align: center;
        }
        input.sudoku:focus {
            outline: none;
        }
    </style>
    <?php 
    
    if (isset($_POST["submit"])) {
        if ($_POST['sudoku1'] == 7 && $_POST['sudoku2'] == 3 && $_POST['sudoku3'] == 2 && $_POST['sudoku4'] == 4 && $_POST['sudoku5'] == 'd' && $_POST['sudoku6'] == 'e' && $_POST['sudoku7'] == 9 && $_POST['sudoku8'] == 'e' && $_POST['sudoku9'] == 1 && $_POST['sudoku10'] == 'c' && $_POST['sudoku11'] == 'a' && $_POST['sudoku12'] == 7 && $_POST['sudoku13'] == 4 && $_POST['sudoku14'] == 6 && $_POST['sudoku15'] == 0 && $_POST['sudoku16'] == 'b' && $_POST['sudoku17'] == 5 && $_POST['sudoku18'] == 8 && $_POST['sudoku19'] == 7 && $_POST['sudoku20'] == 3 && $_POST['sudoku21'] == 'c' && $_POST['sudoku22'] == 1 && $_POST['sudoku23'] == 'b' && $_POST['sudoku24'] == 0 && $_POST['sudoku25'] == 3 && $_POST['sudoku26'] == 9 && $_POST['sudoku27'] == 5 && $_POST['sudoku28'] == 2 && $_POST['sudoku29'] == 'f' && $_POST['sudoku30'] == 'c' && $_POST['sudoku31'] == 'a' && $_POST['sudoku32'] == 'd' && $_POST['sudoku33'] == 'b' && $_POST['sudoku34'] == 6 && $_POST['sudoku35'] == 'e' && $_POST['sudoku36'] == 5 && $_POST['sudoku37'] == 'd' && $_POST['sudoku38'] == 8 && $_POST['sudoku39'] == 'f' && $_POST['sudoku40'] == 'b' && $_POST['sudoku41'] == 'a' && $_POST['sudoku42'] == 6 && $_POST['sudoku43'] == 2 && $_POST['sudoku44'] == 4 && $_POST['sudoku45'] == 'a' && $_POST['sudoku46'] == 9 && $_POST['sudoku47'] == 0 && $_POST['sudoku48'] == 6 && $_POST['sudoku49'] == 5 && $_POST['sudoku50'] == 8 && $_POST['sudoku51'] == 'f' && $_POST['sudoku52'] == 0 && $_POST['sudoku53'] == 4 && $_POST['sudoku54'] == 7 && $_POST['sudoku55'] == 3 && $_POST['sudoku56'] == 9 && $_POST['sudoku57'] == 1 && $_POST['sudoku58'] == 'e' && $_POST['sudoku59'] == 8 && $_POST['sudoku60'] == 'b' && $_POST['sudoku61'] == 'e' && $_POST['sudoku62'] == 4 && $_POST['sudoku63'] == 'c' && $_POST['sudoku64'] == 8 && $_POST['sudoku65'] == 7 && $_POST['sudoku66'] == 0 && $_POST['sudoku67'] == 'a' && $_POST['sudoku68'] == 5 && $_POST['sudoku69'] == 9 && $_POST['sudoku70'] == 'b' && $_POST['sudoku71'] == 7 && $_POST['sudoku72'] == 9 && $_POST['sudoku73'] == 5 && $_POST['sudoku74'] == 'f' && $_POST['sudoku75'] == 6 && $_POST['sudoku76'] == 'f' && $_POST['sudoku77'] == 9 && $_POST['sudoku78'] == 'e' && $_POST['sudoku79'] == 'b' && $_POST['sudoku80'] == 8 && $_POST['sudoku81'] == 1 && $_POST['sudoku82'] == 6 && $_POST['sudoku83'] == 2 && $_POST['sudoku84'] == 'a' && $_POST['sudoku85'] == 3 && $_POST['sudoku86'] == 6 && $_POST['sudoku87'] == 'd' && $_POST['sudoku88'] == 'c' && $_POST['sudoku89'] == 7 && $_POST['sudoku90'] == 'b' && $_POST['sudoku91'] == 'a' && $_POST['sudoku92'] == 7 && $_POST['sudoku93'] == 3 && $_POST['sudoku94'] == 1 && $_POST['sudoku95'] == 2 && $_POST['sudoku96'] == 'c' && $_POST['sudoku97'] == 'f' && $_POST['sudoku98'] == 'e' && $_POST['sudoku99'] == 9 && $_POST['sudoku100'] == 6 && $_POST['sudoku101'] == 5 && $_POST['sudoku102'] == 8 && $_POST['sudoku103'] == 4 && $_POST['sudoku104'] == 0 && $_POST['sudoku105'] == 'd' && $_POST['sudoku106'] == 1 && $_POST['sudoku107'] == 'f' && $_POST['sudoku108'] == 1 && $_POST['sudoku109'] == 'c' && $_POST['sudoku110'] == 'e' && $_POST['sudoku111'] == 'a' && $_POST['sudoku112'] == 0 && $_POST['sudoku113'] == 2 && $_POST['sudoku114'] == 3 && $_POST['sudoku115'] == 'd' && $_POST['sudoku116'] == 5 && $_POST['sudoku117'] == 'f' && $_POST['sudoku118'] == 2 && $_POST['sudoku119'] == 'd' && $_POST['sudoku120'] == 4 && $_POST['sudoku121'] == 'b' && $_POST['sudoku122'] == 8 && $_POST['sudoku123'] == 6) {
            $flag = "polyuctf{YoU_4RE_5udOKU_MastEr!}";
        } else {
            $flag = "Haha, you got nothing!";
        }
    }
        
    ?>
    <body class="container">
        <form action="/" method="POST">

            <table class="mt-5">
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku1' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku2' required> </td>
                    <td> A </td>
                    <td> 5 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku3' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku4' required> </td>
                    <td> F </td>
                    <td> 0 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku5' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku6' required> </td>
                    <td> 6 </td>
                    <td> C </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku7' required> </td>
                    <td> B </td>
                    <td> 8 </td>
                    <td> 1 </td>
                </tr>
                <tr>
                    <td> 2 </td>
                    <td> 8 </td>
                    <td> 9 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku8' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku9' required> </td>
                    <td> 3 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku10' required> </td>
                    <td> 6 </td>
                    <td> F </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku11' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku12' required> </td>
                    <td> B </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku13' required> </td>
                    <td> 5 </td>
                    <td> D </td>
                    <td> 0 </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku14' required> </td>
                    <td> D </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku15' required> </td>
                    <td> F </td>
                    <td> 9 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku16' required> </td>
                    <td> E </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku17' required> </td>
                    <td> 2 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku18' required> </td>
                    <td> 4 </td>
                    <td> 1 </td>
                    <td> A </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku19' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku20' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku21' required> </td>
                </tr>
                <tr>
                    <td> 4 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku22' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku23' required> </td>
                    <td> C </td>
                    <td> 8 </td>
                    <td> D </td>
                    <td> A </td>
                    <td> 7 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku24' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku25' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku26' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku27' required> </td>
                    <td> 6 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku28' required> </td>
                    <td> E </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku29' required> </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku30' required> </td>
                    <td> F </td>
                    <td> 3 </td>
                    <td> 1 </td>
                    <td> 4 </td>
                    <td> 8 </td>
                    <td> 5 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku31' required> </td>
                    <td> 9 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku32' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku33' required> </td>
                    <td> 2 </td>
                    <td> 7 </td>
                    <td> 0 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku34' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku35' required> </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku36' required> </td>
                    <td> E </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku37' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku38' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku39' required> </td>
                    <td> 7 </td>
                    <td> 1 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku40' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku41' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku42' required> </td>
                    <td> 3 </td>
                    <td> 0 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku43' required> </td>
                    <td> 9 </td>
                    <td> C </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku44' required> </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku45' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku46' required> </td>
                    <td> 2 </td>
                    <td> B </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku47' required> </td>
                    <td> C </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku48' required> </td>
                    <td> E </td>
                    <td> 7 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku49' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku50' required> </td>
                    <td> 4 </td>
                    <td> D </td>
                    <td> 1 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku51' required> </td>
                    <td> 3 </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku52' required> </td>
                    <td> 6 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku53' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku54' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku55' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku56' required> </td>
                    <td> D </td>
                    <td> 2 </td>
                    <td> C </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku57' required> </td>
                    <td> F </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku58' required> </td>
                    <td> 5 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku59' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku60' required> </td>
                    <td> A </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku61' required> </td>
                    <td> 2 </td>
                    <td> 6 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku62' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku63' required> </td>
                    <td> F </td>
                    <td> 3 </td>
                    <td> 1 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku64' required> </td>
                    <td> B </td>
                    <td> D </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku65' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku66' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku67' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku68' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku69' required> </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku70' required> </td>
                    <td> 0 </td>
                    <td> C </td>
                    <td> D </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku71' required> </td>
                    <td> 2 </td>
                    <td> 4 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku72' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku73' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku74' required> </td>
                    <td> A </td>
                    <td> 3 </td>
                    <td> E </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku75' required> </td>
                    <td> 1 </td>
                    <td> 8 </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku76' required> </td>
                    <td> 7 </td>
                    <td> 5 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku77' required> </td>
                    <td> A </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku78' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku79' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku80' required> </td>
                    <td> 4 </td>
                    <td> 0 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku81' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku82' required> </td>
                    <td> C </td>
                    <td> 3 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku83' required> </td>
                    <td> D </td>
                </tr>
                <tr>
                    <td> 8 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku84' required> </td>
                    <td> 1 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku85' required> </td>
                    <td> 5 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku86' required> </td>
                    <td> 0 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku87' required> </td>
                    <td> E </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku88' required> </td>
                    <td> 2 </td>
                    <td> 9 </td>
                    <td> F </td>
                    <td> 4 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku89' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku90' required> </td>
                </tr>
                <tr>
                    <td> D </td>
                    <td> 4 </td>
                    <td> 8 </td>
                    <td> 0 </td>
                    <td> 6 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku91' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku92' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku93' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku94' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku95' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku96' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku97' required> </td>
                    <td> B </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku98' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku99' required> </td>
                    <td> 5 </td>
                </tr>
                <tr>
                    <td> 9 </td>
                    <td> B </td>
                    <td> 7 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku100' required> </td>
                    <td> E </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku101' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku102' required> </td>
                    <td> C </td>
                    <td> 3 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku103' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku104' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku105' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku106' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku107' required> </td>
                    <td> A </td>
                    <td> 2 </td>
                </tr>
                <tr>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku108' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku109' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku110' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku111' required> </td>
                    <td> B </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku112' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku113' required> </td>
                    <td> F </td>
                    <td> 6 </td>
                    <td> 9 </td>
                    <td> 5 </td>
                    <td> 8 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku114' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku115' required> </td>
                    <td> 4 </td>
                    <td> 7 </td>
                </tr>
                <tr>
                    <td> 3 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku116' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku117' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku118' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku119' required> </td>
                    <td> 1 </td>
                    <td> 9 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku120' required> </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku121' required> </td>
                    <td> 7 </td>
                    <td> E </td>
                    <td> A </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku122' required> </td>
                    <td> C </td>
                    <td> 0 </td>
                    <td> <input class="text-uppercase sudoku" type="text" maxlength="1" name='sudoku123' required> </td>
                </tr>
            </table>
            <input type="submit" class="btn btn-warning button" name="submit" value="Submit">
        </form>
        <div>
            <h3><?php echo $flag; ?></h3>
        </div>
    </body>
</html>