<?php
$serial= $_POST["AppleSerialNumber"];
$guid= $_POST["guid"];
$activation= $_POST["activation-info"];
 
//---------------------------------------------------------------------------------------------------------------//
$base_url = 'localhost';
 
if(!isset($activation))
{
        echo 'Activation cant be completed!';
        exit;
}
//-Load-e-Decode-XML-Inf-----------------------------------------------------------------------------------------//
$encodedrequest = new DOMDocument;
$encodedrequest->loadXML($activation);
$activationDecoded= base64_decode($encodedrequest->getElementsByTagName('data')->item(0)->nodeValue);
 
$decodedrequest = new DOMDocument;
$decodedrequest->loadXML($activationDecoded);
$nodes = $decodedrequest->getElementsByTagName('dict')->item(0)->getElementsByTagName('*');
 
for ($i = 0; $i < $nodes->length - 1; $i=$i+2)
{
        switch ($nodes->item($i)->nodeValue)
        {
                case "ActivationRandomness": $activationRamdomess = $nodes->item($i + 1)->nodeValue; break;
                case "ActivationState": $ActivationState = $nodes->item($i + 1)->nodeValue; break;
                case "BasebandMasterKeyHash": $BasebandMasterKeyHash = $nodes->item($i + 1)->nodeValue; break;
                case "DeviceCertRequest": $deviceCertRequest=base64_decode($nodes->item($i + 1)->nodeValue); break;
                case "DeviceClass": $deviceClass=strtolower($nodes->item($i + 1)->nodeValue); break;
                case "IntegratedCircuitCardIdentity": $IntegratedCircuitCardIdentity = $nodes->item($i + 1)->nodeValue; break;
                case "UniqueDeviceID": $uniqueDiviceID = $nodes->item($i + 1)->nodeValue; break;
                case "InternationalMobileEquipmentIdentity": $imei = $nodes->item($i + 1)->nodeValue; break;
                case "ProductType": $ProductType = $nodes->item($i + 1)->nodeValue; break;
                case "ProductVersion": $ProductVersion = $nodes->item($i + 1)->nodeValue; break;               
                case "UniqueChipID": $UniqueChipID = $nodes->item($i + 1)->nodeValue; break;    }}
 
//-Variant-accountToken------------------------------------------------------------------------------------------//
$activityURL = "https://albert.apple.com/deviceservices/activity";
$certificateURL = "https://albert.apple.com/deviceservices/certifyMe";
$phoneNumberNotificationURL = "https://albert.apple.com/WebObjects/ALUnbrick.woa/wa/phoneHome";
$wildcardTicket = file_get_contents('certs/wildcardTicket.pem');
//-Directorios----------------------------------------------------------------------------------------------------//
$dir_decoded = 'decoded';
$dir_cert = 'devicecerts';
$dir_certs = 'deviceActivation';
//-DECODED-------------------------------------------------------------------------------------------------------//
if (!is_dir("requests/".$deviceClass.'/'.$serial.'/'.$dir_decoded.'/')){
          mkdir("requests/".$deviceClass.'/'.$serial.'/'.$dir_decoded.'/', 0777, true);}
//-DEVICECERTS---------------------------------------------------------------------------------------------------//
if (!is_dir("requests/".$deviceClass.'/'.$serial.'/'.$dir_cert.'/')){
          mkdir("requests/".$deviceClass.'/'.$serial.'/'.$dir_cert.'/', 0777, true);}
         
//-Save-XML-Request-----------------------------------------------------------------------------------------------//
$encodedrequest->save('requests/'.$deviceClass.'/'.$serial.'/ActivationInfoComplete.xml');
$decodedrequest->save('requests/'.$deviceClass.'/'.$serial.'/'.$dir_decoded.'/ActivationInfoXML.xml');
file_put_contents('requests/'.$deviceClass.'/'.$serial.'/'.$dir_cert.'/deviceCertRequest.crt',$deviceCertRequest);
 
//---------------------------------------------------------------------------------------------------------------//
$privkey = array(file_get_contents('certs/iPhoneDeviceCA_private.pem'),"minacriss");
$mycert = file_get_contents('certs/iPhoneDeviceCA.pem');
$params = array('config' => '127.0.0.1/deviceservices/deviceActivation/openssl.cnf');
 
$usercert = openssl_csr_sign($deviceCertRequest,$mycert,$privkey,365, $params, '6');
openssl_x509_export($usercert,$certout);
file_put_contents('requests/'.$deviceClass.'/'.$serial.'/'.$dir_cert.'/DeviceCertificate.crt',$certout);
$deviceCertificate=base64_encode($certout);
file_put_contents('requests/'.$deviceClass.'/'.$serial.'/'.$dir_cert.'/DeviceCertificate-Base64.pem',$deviceCertificate);
 
//-accounToken-----------------------------------------------------------------------------------------------------//
$accountToken='{'."\n\t".'"InternationalMobileEquipmentIdentity" = "'.$imei.'";'."\n\t".'"ActivityURL" = "'.$activityURL.'";'."\n\t".'"ActivationRandomness" = "'.$activationRamdomess.'";'."\n\t".'"UniqueDeviceID" = "'.$uniqueDiviceID.'";'."\n\t".'"CertificateURL" = "'.$certificateURL.'";'."\n\t".'"PhoneNumberNotificationURL" = "'.$phoneNumberNotificationURL.'";'."\n\t".'"WildcardTicket" = "'.$wildcardTicket.'";'."\n".'}';
file_put_contents('requests/'.$deviceClass.'/'.$serial.'/'.$dir_cert.'/accountToken.pem',$accountToken);
$accountTokenBase64=base64_encode($accountToken);
 
$pkeyid = openssl_pkey_get_private(file_get_contents("certs/private_key.pem"));
 
//-AccountTokenSignature-----------------------------------------------------------------------------------------//
openssl_sign($accountTokenBase64, $signature, $pkeyid);
 
//-Free-KEY------------------------------------------------------------------------------------------------------//
openssl_free_key($pkeyid);
$accountTokenSignature = base64_encode($signature);
 
//-TokenCertificate----------------------------------------------------------------------------------------------//
$accountTokenCertificate_decod = file_get_contents('certs/AccountTokenCertificate.pem');
$accountTokenCertificate = base64_encode($accountTokenCertificate_decod);
 
//-FairPlayKeyData-----------------------------------------------------------------------------------------------//
$FairPlayKeyData = file_get_contents('certs/FairPlayKeyData.pem');
 
//-activation_record.plist---------------------------------------------------------------------------------------//
$activation_record = '
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
        <key>AccountToken</key>
        <data>'.$accountTokenBase64.'</data>
        <key>AccountTokenCertificate</key>
        <data>'.$accountTokenCertificate.'</data>
        <key>AccountTokenSignature</key>
        <data>'.$accountTokenSignature.'</data>
        <key>DeviceCertificate</key>
        <data>'.$deviceCertificate.'</data>
        <key>FairPlayKeyData</key>
        <data>'.$fairPlayKeyData.'</data>
        <key>LDActivationVersion</key>
        <integer>2</integer>
</dict>
</plist>
';
file_put_contents('requests/'.$deviceClass.'/'.$serial.'/activation_record.plist',$activation_record);
?>
 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="iTunes Store" />
<meta name="description" content="iTunes Store" />
<title>iPhone Activation</title>
<link href="http://static.ips.apple.com/ipa_itunes/stylesheets/shared/common-min.css" charset="utf-8" rel="stylesheet" />
<link href="http://static.ips.apple.com/deviceservices/stylesheets/styles.css" charset="utf-8" rel="stylesheet" />
<link href="http://static.ips.apple.com/ipa_itunes/stylesheets/pages/IPAJingleEndPointErrorPage-min.css" charset="utf-8" rel="stylesheet" />
<script id="protocol" type="text/x-apple-plist"/>
</html>
<plist version="1.0"/>
<dict>
    <key>'.$deviceClass.'-activation</key>
     <dict/>
      <dict> 
       <key>activation-record</key>
        <dict/>
          <dict>
           <key>AccountToken</key>
           <data>'.$accountTokenBase64.'</data>
           <key>AccountTokenCertificate</key>
           <data>'.$accountTokenCertificate.'</data>
           <key>AccountTokenSignature</key>
           <data>'.$accountTokenSignature.'</data>
           <key>DeviceCertificate</key>
           <data>'.$deviceCertificate.'</data>
           <key>FairPlayKeyData</key>
           <data>'.$fairPlayKeyData.'</data>
          <dict/>
         <key>ack-received</key>
        <True/>
       <key>show-settings</key>
      <True/>
     <key>unbrick</key>
    <True/>
   <dict/>
  <dict/>
</plist>
</script>
<script>var protocolElement = document.getElementById("protocol");var protocolContent = protocolElement.innerText;iTunes.addProtocol(protocolContent);</script>
</head>
<body>
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="iTunes Store" /><meta name="description" content="iTunes Store" />
<title>iPhone Activation</title>
<link href="http://localhost/ipa_itunes/stylesheets/shared/common-min.css" charset="utf-8" rel="stylesheet" />
<link href="http://localhost/deviceservices/stylesheets/styles.css" charset="utf-8" rel="stylesheet" />
<link href="http://localhost/ipa_itunes/stylesheets/pages/IPAJingleEndPointErrorPage-min.css" charset="utf-8" rel="stylesheet" />
<script id="protocol" type="text/x-apple-plist"/>
<plist version="1.0"/>
 <dict>
  <key>iPhone-activation</key>
   <dict/>
     <dict>
      <key>ack-received</key>
       <dict/>
        <True/>
         <key>show-settings</key>
        <True/>
       <key>unbrick</key>
      <True/>
    <dict/>
  <dict/>
</plist>
</script>
<script>var protocolElement = document.getElementById("protocol");var protocolContent = protocolElement.innerText;iTunes.addProtocol(protocolContent);</script>
</head>
<body>
<div id="jingle-page-wrapper">
<div id="jingle-page-wrapper-header">
<div id="secure">
<img src="http://localhost/ipa_itunes/images/lock.png"/></div>
<div id="banner">
<div id="apple-logo">
<img src="http://localhost/ipa_itunes/images/apple_chrome.png"/></div>
<div id="carrier-logo">
</div>
</div>
</div>
<div id="jingle-page-wrapper-content">
<form method="post" id="jingle-page-form" action=https://localhost/deviceservices/deviceActivation>
<div id="jingle-page-content">
<div id="IPAJingleEndPointErrorPage">
<h1>Bienvenido a MyCloud Bypass</h1>
<p>Presiona el boton "Continuar" para remover iCloud</p>
      <p>    
        <td class="x">*Estado del Dispositivo?:</td>
        <td class="y"><?php echo $ActivationState; ?></td>
        <td class="x">*Version del Producto?:</td>
        <td class="y"><?php echo $ProductType; ?><td>
        <td class="x">*IOS?:</td>
        <td class="y"><?php echo $ProductVersion; ?></td>
        </table>
        <div>     
Twitter <a href="http://www.twitter.com/darkr00t" target="_blank" style="text-decoration:none;color:#115fbf;">iMaritoo!</a> and <a href="http://www.twitter.com/OrxenteTeam" target="_blank" style="text-decoration:none;color:#115fbf;">@OrxenteTeam</a></p>
</div>
</div>
</div>
</form>
<div id="ContinueButtonForm">
<form method="post" id="ContinueButtonForm" action=http://localhost/deviceservices/showSettings/showSettings.php>
<div id="form-submit-buttons">
<input type="submit" value="Continuar" id="form-submit-buttons-left"/>
</div>
</form>
</div>
</div>
</div>
<div id="jingle-page-wrapper-footer">
<div id="footer">
<div id="legal">Copyright &copy; 2014 Darkr00t Inc. All rights reserved.| <a target="_blank" href="http://localhost/deviceservices/deviceActivationlegal/iphone/us/privacy/">Privacy Policies</a>| <a target="_blank" href="http://localhost/deviceservices/deviceactivation/legal/iphone/us/terms/">Terms &amp; Conditions</a>
</div>
</div>
</div>
</body>
</html>
