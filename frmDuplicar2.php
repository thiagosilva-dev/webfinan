
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
    <title>CREDITALL</title>

    <link rel="stylesheet" type="text/css" href="../css/ste.css" />
    <link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
    <link href="../CalendarControl.css"  rel="stylesheet" type="text/css">

    <script src="../CalendarControl.js"   language="javascript"></script>
    <script type="text/javascript" src="css/jquery.js"></script>
    <script type="text/javascript" src="css/thickbox.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
    <script language=javascript></script>

    <script>
        function duplicar() {
            var dtRecebDest = document.getElementById("dtRecebDest").value; // REC_RECEBIMENT
            var grupoMovDest = document.getElementById("grupoMovDest").value; // GRUPO
            var tipoMovDest = document.getElementById("tipoMovDest").value; // REC_CTAMOVTO
            var empresaDest = document.getElementById("empresaDest").value; // empresa
            var origemRecDest = document.getElementById("origemRecDest").value; // REC_origemEmpresa
            var contaDest = document.getElementById("contaDest").value; // REC_CAIXA

            document.form1.action = "../acaoDuplicar.php";            

            if(dtRecebDest == "") {
                alert('Data recebimento destino invalida!');
            }
            if(grupoMovDest == "") {
                alert('Grupo movimentação destino invalido!');
            }
            if(tipoMovDest == "") {
                alert('Tipo movimentação destino invalido!');
            }            
            if(empresaDest == "") {
                alert('Empresa de destino invalido!');
            }
            if(origemRecDest == "") {
                alert('Origem da receita invalida!');
            }
            if(contaDest == "") {
                alert('Situação destino invalida!');
            }
            if (dtRecebDest != "" && grupoMovDest != "" && tipoMovDest != "" && empresaDest != "" && origemRecDest != "" && contaDest != "")
            {
                document.form1.submit();
            }


        };

        //MASCARA DE VALORES
		function txtBoxFormat(objeto, sMask, evtKeyPress) {
   			var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;
			if(document.all) { // Internet Explorer
	    		nTecla = evtKeyPress.keyCode;
			} else if(document.layers) { // Nestcape
	    		nTecla = evtKeyPress.which;
			} else {
	    		nTecla = evtKeyPress.which;
	    		if (nTecla == 8) {
        			return true;
    			}
			}
			sValue = objeto.value;
    		// Limpa todos os caracteres de formatação que já estiverem no campo.
    		sValue = sValue.toString().replace( "-", "" );
    		sValue = sValue.toString().replace( "-", "" );
    		sValue = sValue.toString().replace( ".", "" );
    		sValue = sValue.toString().replace( ".", "" );
    		sValue = sValue.toString().replace( "/", "" );
	   		sValue = sValue.toString().replace( "/", "" );
    		sValue = sValue.toString().replace( ":", "" );
    		sValue = sValue.toString().replace( ":", "" );
    		sValue = sValue.toString().replace( "(", "" );
    		sValue = sValue.toString().replace( "(", "" );
    		sValue = sValue.toString().replace( ")", "" );
    		sValue = sValue.toString().replace( ")", "" );
    		sValue = sValue.toString().replace( " ", "" );
    		sValue = sValue.toString().replace( " ", "" );
    		fldLen = sValue.length;
    		mskLen = sMask.length;
    		i = 0;
    		nCount = 0;
    		sCod = "";
    		mskLen = fldLen;
    		while (i <= mskLen) {
	      		bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/") || (sMask.charAt(i) == ":"))
      			bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))
      			if (bolMask) {
        			sCod += sMask.charAt(i);
        			mskLen++; }
      			else {
        			sCod += sValue.charAt(nCount);
        			nCount++;
      			}
      			i++;
    		}
    		objeto.value = sCod;
    		if (nTecla != 8) { // backspace
	      		if (sMask.charAt(i-1) == "9") { // apenas numeros...
        			return ((nTecla > 47) && (nTecla < 58)); }
      			else { // qualquer caracter...
	        		return true;
      			}
    		}
    		else {
	      		return true;
    		}            
		}
    </script>

    <style type="text/css">
        body {
	        background-color: #E4E7E9;
        }
        html{
    	    overflow-x:hidden;
        }
        .style2 {
	        color: #000066
        }
        .style3 {
        	font-size: 11px
        }
        .style4 {
    	    color: #006666
        }
        .orign{
        	cursor:pointer;
    	    color:#5D9CEC;
        }
        .orign:hover{
        	color:#2A5792;
    	    text-decoration:underline;
        }
        .right {
        	float: right;
			margin-right: 2%;             
      	}     
      	.left {
        	float: left;
            margin-left: 2%;
      	}
        .container {
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <form id="form1" name="form1" method="post" action="frmDuplicar.php" target="iframe">
        <table width="100%" border="0" bgcolor="#E2ECF5">
            <tr>
                <td bgcolor="#83B7E3" >
                    <div align="center" class="style3">
                        <strong>DUPLICAR LANÇAMENTOS</strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td height="30">
                    <div class="left">
                        <!-- DATA PARA DUPLICAÇÃO -->
                        <span class="label">
                            <b><label for="dtRecebDest">Data Recebimento:</label></b>
                                <input id="dtRecebDest" name="dtRecebDest" type="text" class="campo" size="11" value="<?php echo "$dtRecebDest";?>" onkeypress="return txtBoxFormat(this, '99/99/9999', event);"/>
                                <img src="../img/cal.gif" width="16" height="16" style="cursor:pointer" onClick="showCalendarControl(document.getElementById('dtRecebDest'));"/>
                        </span>
                    </div>
                    <div class="right">
                        <span class="fundobutton">
                            <input type="button" id="btnDuplicar"   name="btnDuplicar"   value="Duplicar"   style="width:117px;" onClick="duplicar();" class="right"/>
                        </span>  
                    </div>
                </td>
            </tr>
            <tr>
                <td height="30">
                    <div class="left">
                        <!-- FILTROS MOVIMENTACÃO -->
                        <span class="label">                            
                            <b><label for="grupoMovDest">Grupo Movimentacao destino:</label></b>						
						    <select id="grupoMovDest" name="grupoMovDest" class="campo" onChange="tipoReceita(this.value)" style="width:180px;">
							    <option value=""></option>
							    <?php $sql = "select * from grupodespesa WHERE grupodesp_tipo = 1";
								    $exe = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
								    while($rp = mysqli_fetch_array($exe)){ ?>
                                        <option value="<?=$rp['grupodesp_codigo'];?>" <?php if($grupoMovimentacao == $rp['grupodesp_codigo']){ ?>selected="selected"<?php } ?> ><?=$rp['grupodesp_descricao'];?></option>
                                    <?php } ?>
                            </select>                            
                            <b><label for="tipoMovDest">Tipo Movimentação destino:</label></b>						
							<?php $query = ("SELECT * from contasdedespesas where TIPOC = '1' $fil_depesa");
								$resultJuros = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
								$TotalJuros = mysqli_num_rows ($resultJuros); ?>
						    <select name="tipoMovDest" id="tipoMovDest" class="campo" style="width:180px;">
    			  				<option value=""></option>
			  				    <?php while ($dados = mysqli_fetch_array($resultJuros)) { 
								    $codigoJuros = $dados["ID"];
								    $descricaJuros = $dados["Ctd_descr"];
							        ?>
                                    <option value="<?php echo "$codigoJuros";?>" <?php if ($codigoJuros == $despesa) { ?> selected="selected" <?php } ?> > <?php echo "$descricaJuros"; ?></option> <?php 
                                }?>
						    </select>
				        </span>                        
                    </div>
                </td>
            </tr>
            <tr>
                <td height="30">
                    <div class="left">                        
                        <!-- FILTRO EMPRESA -->
				        <span class="label">					
	    			        <b><label for="empresaDest">Empresa destino:</label></b>
                            <?php 
        					    $queryEmpresa = ("SELECT * from empresa order by empresa_nome ");
        					    $resultEmpresa = mysqli_query($mysqli,$queryEmpresa)or die(mysqli_error($mysqli));
  	      					    $TotalEmpresa = mysqli_num_rows ($resultEmpresa);
						    ?>
        				    <select id="empresaDest" name="empresaDest" class="campo" style="width:140px">
          					    <option value=""></option>
                                    <?php 
                                        while ($dados = mysqli_fetch_array($resultEmpresa)) {
    								    $codigoempresaDest = $dados["empresa_id"];
								        $descricaoempresaDest = $dados["empresa_nome"];
							        ?>
                                    <option value="<?php echo "$codigoempresaDest";?>"<?php if ($codigoempresaDest == $empresa) { ?> selected="selected" <?php } ?> > <?php echo "$descricaoempresaDest"; ?> </option> <?php } ?>
                            </select>
                        </span>

                        <!-- FILTRO CONTA DESTINO -->
				        <span class="label">
						    <b><label for="contaDest">Conta destino:</label></b>
						    <select name="contaDest" id="contaDest" style="width:147.9px;" class="campo" style="width:140px">
            					<?php $queryBanco = ("SELECT * from livro_caixa_numero  ");
   								    $resultBanco = mysqli_query($mysqli,$queryBanco)or die(mysqli_error($mysqli));
							    ?>
            						<option value=""></option>
							    <?php
    								while($rs = mysqli_fetch_array($resultBanco)) { ?>
          						    <option <?php if($banco == $rs['Livro_Numero']) { ?> selected="selected" <?php } ?> value="<?=$rs['Livro_Numero'];?>"><?=$rs['Descricao'];?></option>
          					    <?php } ?>
         				    </select>
                        </span>

                        <!-- FILTRO ORIGEM -->
                        <span class="label">
						    <b><label for="origemRecDest">Origem receita:</label></b>
            					<?php $queryEmpresa = ("SELECT * from empresa WHERE empresa_inativo = '0' order by empresa_nome ");
                                    $resultEmpresa = mysqli_query($mysqli,$queryEmpresa)or die(mysqli_error($mysqli));
						            $TotalEmpresa = mysqli_num_rows ($resultEmpresa);
						        ?>
                            <select name="origemRecDest" class="campo" id="origemRecDest" style="width:130px" onchange="preencher()">
                                <option value=""></option>
                                <?php while ($dados = mysqli_fetch_array($resultEmpresa)) {
			                            $codigoEmpresa = $dados["empresa_id"];
			                            $descricaoEmpresa = $dados["empresa_nome"];?>
                                    <option value="<?php echo "$codigoEmpresa";?>" <?php if ($codigoEmpresa == $origemEmpresa) { ?> selected="selected" <?php } ?> > <?php echo "$descricaoEmpresa"; ?></option>
                                <?php
	                	        }?>
                            </select>
                        </span>                       
                    </div>
                </td>
            </tr>
        </table>
        </form>    
    </div>
</body>


</html>
