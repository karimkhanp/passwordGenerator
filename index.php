<html>
    <head>
        <style>
            .header{
                background-color: #61B329;
                color: #FFF;
                margin-top: 0px !important;
                margin-bottom: 20px;
                padding-bottom: 9px;
            }
            
            .middle{
                background-color:Yellow;
            }
            
            .left{
                background-color:Green;
            }

            .input-header {
                color: #7F7F7F;
                text-align: center;
                margin: auto;
            }

            .page-header-text {
                padding-left: 15px;
                padding-top: 20px;
                padding-bottom: 10px;
                margin: 0px;
		color:fff;
		font-size: 36px;
		font-family: Arial;
            }
            .preview-container {
                margin: auto;
            }

            html, body { margin: 0; padding: 0; border: 0 }
        </style>       
        
      </head>

    <body>
        <div class="page-header header">
            <h1 class="page-header-text">Karim geeks</h1>
        </div>
            <table border="0" width="100%">
                <tr>
                    <div class="left">
                        <td style="width:10%">

                        </td>                       
                    </div>
                    
                    <div class="middle">
                        <td style="width:80%">
                            <div>
				<table border="0" align="left">
					<tr>
						<td align="center" valign="middle"><a href="">Password generator</a></td>
					</tr>
					<tr>

						<td align="center" valign="middle" >Generate   :
							<input tpye = "text"  id="password" style="height:40px; width:350px" class="password"> 
						</td>
					</tr>
					<tr>
						<td align="center" valign="middle" >
							<input type = "submit" onclick="callPass()">
						</td>
					</tr>

				</table> 
				<div id="message"> </div>
	  		</div>                         
                           
                        </td>               
                    </div>
                    
                    <div class="right">
                        <td style="width:10%">
                     
                        </td>
                    </div>
                </tr>
            </table>
    </body> 
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
	
	function callPass()
	{
		//var sentiment= $('select[name="sent"] option:selected').val();
//		alert(val);
//		alert("hu");
			$.ajax({
			            url: "passowrd.php",
			            type: "POST",
			            data: {"pass": 'pass'},
			            success: function(data) {

				$('#password').val(data);
			                //setInterval("messageDisable()", 5000);
			            }
		        });
	}
			
				
	</script>
</html>
