<?php

switch (!isset($_PUT['do']))
{
    case "send":

        $aName = $_PUT['aName'];
        $aCo = $_PUT['aCo'];
        $aEmail = $_PUT['aEmail'];
        
        $cCo = $_PUT['cCo'];
        $cAddr1 = $_PUT['cAddr1'];
        $cAddr2 = $_PUT['cAddr2'];
        $cCity = $_PUT['cCity'];
        $cState = $_PUT['cState'];
        $cZip = $_PUT['cZip'];
        $cName = $_PUT['cName'];
        $cPhone = $_PUT['cPhone'];

        $sCo = $_PUT['sCo'];
        $sAddr1 = $_PUT['sAddr1'];
        $sAddr2 = $_PUT['sAddr2'];
        $sCity = $_PUT['sCity'];
        $sState = $_PUT['sState'];
        $sZip = $_PUT['sZip'];

        $fInst = $_PUT['fInst'];
        $tDue = $_PUT['tDue'];

        $Qnty1  = $_PUT['Qnty1']; $Item1  = $_PUT['Item1']; $Unit1  = $_PUT['Unit1']; $Amt1  = $_PUT['Amt1'];
        $Qnty2  = $_PUT['Qnty2']; $Item2  = $_PUT['Item2']; $Unit2  = $_PUT['Unit2']; $Amt2  = $_PUT['Amt2'];
        $Qnty3  = $_PUT['Qnty3']; $Item3  = $_PUT['Item3']; $Unit3  = $_PUT['Unit3']; $Amt3  = $_PUT['Amt3'];
        $Qnty4  = $_PUT['Qnty4']; $Item4  = $_PUT['Item4']; $Unit4  = $_PUT['Unit4']; $Amt4  = $_PUT['Amt4'];
        $Qnty5  = $_PUT['Qnty5']; $Item5  = $_PUT['Item5']; $Unit5  = $_PUT['Unit5']; $Amt5  = $_PUT['Amt5'];
        $Qnty6  = $_PUT['Qnty6']; $Item6  = $_PUT['Item6']; $Unit6  = $_PUT['Unit6']; $Amt6  = $_PUT['Amt6'];
        $Qnty7  = $_PUT['Qnty7']; $Item7  = $_PUT['Item7']; $Unit7  = $_PUT['Unit7']; $Amt7  = $_PUT['Amt7'];
        $Qnty8  = $_PUT['Qnty8']; $Item8  = $_PUT['Item8']; $Unit8  = $_PUT['Unit8']; $Amt8  = $_PUT['Amt8'];
        $Qnty9  = $_PUT['Qnty9']; $Item9  = $_PUT['Item9']; $Unit9  = $_PUT['Unit9']; $Amt9  = $_PUT['Amt9'];
        $Qnty10 = $_PUT['Qnty10'];$Item10 = $_PUT['Item10'];$Unit10 = $_PUT['Unit10'];$Amt10 = $_PUT['Amt10'];
        $Qnty11 = $_PUT['Qnty11'];$Item11 = $_PUT['Item11'];$Unit11 = $_PUT['Unit11'];$Amt11 = $_PUT['Amt11'];
        $Qnty12 = $_PUT['Qnty12'];$Item12 = $_PUT['Item12'];$Unit12 = $_PUT['Unit12'];$Amt12 = $_PUT['Amt12'];
        $Qnty13 = $_PUT['Qnty13'];$Item13 = $_PUT['Item13'];$Unit13 = $_PUT['Unit13'];$Amt13 = $_PUT['Amt13'];
        $Qnty14 = $_PUT['Qnty14'];$Item14 = $_PUT['Item14'];$Unit14 = $_PUT['Unit14'];$Amt14 = $_PUT['Amt14'];
        $Qnty15 = $_PUT['Qnty15'];$Item15 = $_PUT['Item15'];$Unit15 = $_PUT['Unit15'];$Amt15 = $_PUT['Amt15'];
        $Qnty16 = $_PUT['Qnty16'];$Item16 = $_PUT['Item16'];$Unit16 = $_PUT['Unit16'];$Amt16 = $_PUT['Amt16'];
        $Qnty17 = $_PUT['Qnty17'];$Item17 = $_PUT['Item17'];$Unit17 = $_PUT['Unit17'];$Amt17 = $_PUT['Amt17'];
        $Qnty18 = $_PUT['Qnty18'];$Item18 = $_PUT['Item18'];$Unit18 = $_PUT['Unit18'];$Amt18 = $_PUT['Amt18'];
        $Qnty19 = $_PUT['Qnty19'];$Item19 = $_PUT['Item19'];$Unit19 = $_PUT['Unit19'];$Amt19 = $_PUT['Amt19'];
        $Qnty20 = $_PUT['Qnty20'];$Item20 = $_PUT['Item20'];$Unit20 = $_PUT['Unit20'];$Amt20 = $_PUT['Amt20'];

        if ($secretinfo == "")
        {
          $myemail = "orders@bankcardpos.com";

          $emess.= "<html><body>";
          $emess.= "<table width='100%'>";
          $emess.= "<tr><td width='50%'><B>Agent</td>";
          $emess.= "<td width='50%'></td></tr>";
          $emess.= "<tr><td colspan='2'>".$aName."<BR>".$aCo."<BR>".$aEmail."<BR><BR></td></tr>" . "\r\n";

          $emess.= "<tr><td><b>Customer</td>";
          $emess.= "<td><b>Shipping</td></tr>";
          $emess.= "<tr><td valign='top'><table>";
          $emess.= "<tr><td><b>Business:</td><td>".$cCo."</td></tr>";
          $emess.= "<tr><td><b>Address:</td><td>".$cAddr1."</td></tr>";
          $emess.= "<tr><td></td><td>".$cAddr2."</td></tr>";
          $emess.= "<tr><td><b>City:</td><td>".$cCity.", ".$cState." ".$cZip."</td></tr>";
          $emess.= "<tr><td><b>Contact:</td><td>".$cName."</td></tr>";
          $emess.= "<tr><td></td><td>".$cPhone."</td></tr>";
          $emess.= "<tr><td></td><td>".$cEmail."</td></tr>";
          $emess.= "</Table></td>" . "\r\n";

          $emess.= "<td valign='top'><table>";
          $emess.= "<tr><td><b>Business:</td><td>".$sCo."</td></tr>";
          $emess.= "<tr><td><b>Address:</td><td>".$sAddr1."</td></tr>";
          $emess.= "<tr><td></td><td>".$sAddr2."</td></tr>";
          $emess.= "<tr><td><b>City:</td><td>".$sCity.", ".$sState." ".$sZip."</td></tr>";
          $emess.= "</Table></td></tr>" . "\r\n";

          $emess.= "<tr><td colspan='2'><BR><hr color='#B5BDFB' width='100%'></td></tr>";
          $emess.= "</table>" . "\r\n";

          $emess.= "<table width='100%'>";
          $emess.= "<tr><td width='5%'><B>Qty</td>";
          $emess.= "<td width='75%'><b>Item</td>";
          $emess.= "<td width='10%' style='text-align:right'><b>Unit</td>";
          $emess.= "<td width='10%' style='text-align:right'><b>Amount</td></tr>" . "\r\n";
           
          for ($s = 1; $s <= 20; $s++)
          {
            $q = "Qnty$s";
            $i = "Item$s";
            $u = "Unit$s";
            $a = "Amt$s";

            if ($$q != "0" && $$i != "X")  {
                $emess.= "<tr><td>".$$q."</td>";
                $emess.= "<td>".$$i."</td>";
                $emess.= "<td style='text-align:right'>".number_format($$u, 2)."</td>";
                $emess.= "<td style='text-align:right'>".number_format($$a, 2)."</td></tr>" . "\r\n";
                }
          }

          $emess.= "<tr><td colspan='4'><hr color='#B5BDFB' width='100%'></td></tr>";
          $emess.= "<tr><td colspan='2'></td><td style='text-align:right'><b>Total:</td><td style='text-align:right'>$".$tDue."</td></tr>";
          $emess.= "</table>" . "\r\n";

          $emess.= "<BR><BR><table width='100%'>";
          $emess.= "<tr><td width='15%' valign='top'><B>Instructions:</td>";
          $emess.= "<td>".$fInst."</td></tr>";
          $emess.= "</table>";
          $emess.= '</body></html>' . "\r\n";

          $ehead = "From: orders@levelpos.com\r\n";
          $ehead.= "Reply-To: orders@bankcardpos.com\r\n";
          $ehead.= "X-Mailer: PHP/" . phpversion();
          $ehead = "MIME-Version: 1.0\r\n";
          $ehead.= "Content-type:text/html;charset=iso-8859-1\r\n";

          $subj = "Web Order from ".$aName." for ".$cCo.".";
          $mailsend=mail("$myemail","$subj","$emess","$ehead");

          if ($aEmail != "")  {
            $emess = "<p>Thank you for your order.  A copy of this order is below for your review.  If there are any questions or corrections, please call bankcard POS at (630) 560-4445.<BR><BR><BR>".$emess;
            $mailsend=mail("$aEmail","$subj","$emess","$ehead");
          }

          $message = "Email was sent.";
      }
     
     unset($_GET['do']);
     header("Location: index.php");
    
    break;
     
    default: break;
    

 }
?>


<html>
    <head>
        <title>Complete Credit Card Processing Solutions</title>
        <link REL="SHORTCUT ICON" href="http://www.levelpos.com/bundles/frontend/images/favicon.png">
        <link REL="ICON" href="http://www.levelpos.com/bundles/frontend/images/favicon.png">
        <meta name="description" content="merchant accounts,  barcode scanners, receipt printers, and complete POS solutions for your business.">
        <meta name="keywords" content="barcode scanners,pos systems,pos software,barcode readers,receipt printers,merchant accounts, high risk merchant accounts">
        <link href="main.css" rel="stylesheet" type="text/css">
        <SCRIPT SRC="products.js"></SCRIPT>
        <SCRIPT SRC="pagebuilder.js"></SCRIPT>
        <SCRIPT SRC="subpage.js"></SCRIPT>
    </head>
    <body leftmargin="0" rightmargin="0" marginheight="0" marginwidth="0" topmargin="0" bottommargin="0" background="images/bgcolor.jpg">
        <table align="center" width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
            <tr>
                <td width="1" bgcolor="#003366"></td>
                <td align="center" valign="top">
                    <form action="index.php?do=send" method="POST" name="hgmailer">
                        <table width="100%" border="0" cellspacing="1" cellpadding="0">
                            <tr style="background-color: black;">
                                <td valign="top" style="padding: 5px;">
                                    <img src="images/logo.png">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="padding: 5px;">
                                    <h2>Point Of Sale Order Form</h2>
                                    <p><span class="alert">* </span>= Indicates required fields.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="98%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td colspan="3">
                                                <hr color="#B5BDFB" width="100%">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="33%">
                                                <H3 style="margin-left:35px">Agent</H3>
                                            </td>
                                            <td width="33%">
                                                <H3 style="margin-left:35px">Customer</H3>
                                            </td>
                                            <td width="34%">
                                                <H3 style="margin-left:35px">Shipping</H3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p id="EaName">Name: <span class="alert">*</span>
                                                        </td>
                                                        <td><input type=text name="aName" value="<?php echo @$aName ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Company:
                                                        </td>
                                                        <td><input type=text name="aCo" value="<?php echo @$aCo ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id="EaEmail">eMail:
                                                        </td>
                                                        <td><input type=text name="aEmail" value="<?php echo @$aEmail ?>" size="30"></td>
                                                    </tr>
                                                </Table>
                                            </td>
                                            <td valign="top">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p id="EcCo">Business: <span class="alert">*</span>
                                                        </td>
                                                        <td><input type=text name="cCo" value="<?php echo @$cCo ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id="EcAddr1">Address: <span class="alert">*</span>
                                                        </td>
                                                        <td><input type=text name="cAddr1" value="<?php echo @$cAddr1 ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Address:
                                                        </td>
                                                        <td><input type=text name="cAddr2" value="<?php echo @$cAddr2 ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id="EcCity">City: <span class="alert">*</span>
                                                        </td>
                                                        <td><input type=text name="cCity" value="<?php echo @$cCity ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id="EcState">State: <span class="alert">*</span>
                                                        </td>
                                                        <td>
                                                            <p id="EcZip" style="margin-left:0px">
                                                                <select name="cState" size="1">
                                                                    <option selected="selected" value="<?php echo @$cState ?>">  
                                                                    <option value="AK">AK
                                                                    <option value="AL">AL
                                                                    <option value="AR">AR
                                                                    <option value="AZ">AZ
                                                                    <option value="CA">CA
                                                                    <option value="CO">CO
                                                                    <option value="CT">CT
                                                                    <option value="DC">DC
                                                                    <option value="DE">DE
                                                                    <option value="FL">FL
                                                                    <option value="GA">GA
                                                                    <option value="HI">HI
                                                                    <option value="IA">IA
                                                                    <option value="ID">ID
                                                                    <option value="IL">IL
                                                                    <option value="IN">IN
                                                                    <option value="KS">KS
                                                                    <option value="KY">KY
                                                                    <option value="LA">LA
                                                                    <option value="MA">M
                                                                    <option value="MD">MD
                                                                    <option value="ME">ME
                                                                    <option value="MI">MI
                                                                    <option value="MN">MN
                                                                    <option value="MO">MO
                                                                    <option value="MS">MS
                                                                    <option value="MT">MT
                                                                    <option value="NC">NC
                                                                    <option value="ND">ND
                                                                    <option value="NE">NE
                                                                    <option value="NH">NH
                                                                    <option value="NJ">NJ
                                                                    <option value="NM">NM
                                                                    <option value="NV">NV
                                                                    <option value="NY">NY
                                                                    <option value="OH">OH
                                                                    <option value="OK">OK
                                                                    <option value="OR">OR
                                                                    <option value="PA">PA
                                                                    <option value="RI">RI
                                                                    <option value="SC">SC
                                                                    <option value="SD">SD
                                                                    <option value="TN">TN
                                                                    <option value="TX">TX
                                                                    <option value="UT">UT
                                                                    <option value="VA">VA
                                                                    <option value="VT">VT
                                                                    <option value="WA">WA
                                                                    <option value="WI">WI
                                                                    <option value="WV">WV
                                                                    <option value="WY">WY
                                                                </select>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zip: <span class="alert">*</span>&nbsp;
                                                                <input type=text name="cZip" value="<?php echo @$cZip ?>" size="12">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id="EcName">Contact Name: <span class="alert">*</span>
                                                        </td>
                                                        <td><input type=text name="cName" value="<?php echo @$cName ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id="EcPhone">Contact Phone: <span class="alert">*</span>
                                                        </td>
                                                        <td><input type=text name="cPhone" value="<?php echo @$cPhone ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id="EcEmail">Contact eMail: <span class="alert">*</span>
                                                        </td>
                                                        <td><input type=text name="cEmail" value="<?php echo @$cEmail ?>" size="30"></td>
                                                    </tr>
                                                </Table>
                                            </td>
                                            <td valign="top">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>Business:
                                                        </td>
                                                        <td><input type=text name="sCo" value="<?php echo @$sCo ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Address:
                                                        </td>
                                                        <td><input type=text name="sAddr1" value="<?php echo @$sAddr1 ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Address:
                                                        </td>
                                                        <td><input type=text name="sAddr2" value="<?php echo @$sAddr2 ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>City:
                                                        </td>
                                                        <td><input type=text name="sCity" value="<?php echo @$sCity ?>" size="30"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>State:
                                                        </td>
                                                        <td>
                                                            <p style="margin-left:0px">
                                                                <select name="sState" size="1">
                                                                    <option selected="selected" value="<?php echo @$sState ?>">  
                                                                    <option value="AK">AK
                                                                    <option value="AL">AL
                                                                    <option value="AR">AR
                                                                    <option value="AZ">AZ
                                                                    <option value="CA">CA
                                                                    <option value="CO">CO
                                                                    <option value="CT">CT
                                                                    <option value="DC">DC
                                                                    <option value="DE">DE
                                                                    <option value="FL">FL
                                                                    <option value="GA">GA
                                                                    <option value="HI">HI
                                                                    <option value="IA">IA
                                                                    <option value="ID">ID
                                                                    <option value="IL">IL
                                                                    <option value="IN">IN
                                                                    <option value="KS">KS
                                                                    <option value="KY">KY
                                                                    <option value="LA">LA
                                                                    <option value="MA">M
                                                                    <option value="MD">MD
                                                                    <option value="ME">ME
                                                                    <option value="MI">MI
                                                                    <option value="MN">MN
                                                                    <option value="MO">MO
                                                                    <option value="MS">MS
                                                                    <option value="MT">MT
                                                                    <option value="NC">NC
                                                                    <option value="ND">ND
                                                                    <option value="NE">NE
                                                                    <option value="NH">NH
                                                                    <option value="NJ">NJ
                                                                    <option value="NM">NM
                                                                    <option value="NV">NV
                                                                    <option value="NY">NY
                                                                    <option value="OH">OH
                                                                    <option value="OK">OK
                                                                    <option value="OR">OR
                                                                    <option value="PA">PA
                                                                    <option value="RI">RI
                                                                    <option value="SC">SC
                                                                    <option value="SD">SD
                                                                    <option value="TN">TN
                                                                    <option value="TX">TX
                                                                    <option value="UT">UT
                                                                    <option value="VA">VA
                                                                    <option value="VT">VT
                                                                    <option value="WA">WA
                                                                    <option value="WI">WI
                                                                    <option value="WV">WV
                                                                    <option value="WY">WY
                                                                </select>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zip: &nbsp;
                                                                <input type=text name="sZip" value="<?php echo @$sZip ?>" size="12">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p style="text-align:center; font-style:italic">
                                                                If shipping address is blank,<BR>customer address will be used.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </Table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="alert">* </span>= Indicates required fields.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <BR>
                                                <hr color="#B5BDFB" width="100%">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="center">
                                        <tr>
                                            <td colspan="4"><BR><BR></td>
                                        </tr>
                                        <tr>
                                            <td width="50">
                                                <H3>Qty</H3>
                                            </td>
                                            <td width="50">
                                                <H3>Item</H3>
                                            </td>
                                            <td width="75">
                                                <H3 style="margin-left:30px">Unit</H3>
                                            </td>
                                            <td>
                                                <H3 style="margin-left:35px">Amount</H3>
                                            </td>
                                        </tr>
                                        <script>BuildPage();</script>
                                        <tr>
                                            <td colspan="4">
                                                <table>
                                                    <tr>
                                                        <td valign="top">
                                                            <p>Special instructions: 
                                                        </td>
                                                        <td><textarea name="fInst" cols="50" rows="5" value""></textarea></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <hr color="#B5BDFB" width="100%">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="reset" class="buttons" value="Clear" onClick="clearPage(this.form)"></td>
                                            <td><input type="hidden" name="tDue" id="tDue" value=99.99 width="5">
                                                <input  type=button name="button" class="buttons" onClick="submit_form(this.form)" value="Submit Order">
                                            <td>
                                                <H3 style="text-align:right">Total:</H3>
                                            </td>
                                            <td>
                                                <H3 id="totalDue"  style="text-align:right">0.00</H3>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
                <td width="1" bgcolor="#003366"></td>
            </tr>
        </table>
    </body>
</html>
