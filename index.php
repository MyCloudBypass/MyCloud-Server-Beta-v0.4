<?php
$serial= $_POST["AppleSerialNumber"];
<string>F7NNK9K1F196</string>
$guid= $_POST["guid"];
$activation= $_POST["activation-info"];
 
//---------------------------------------------------------------------------------------------------------------//
$base_url = 'localhost';
 
if(!isset($activation))
{
        echo <key>Connected</key>
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
                case "ActivationState": $ActivationState = $nodes->item($i + 1)-<key>Region Info</key>
                case "BasebandMasterKeyHash": $BasebandMasterKeyHash = $nodes->item($i + 1)-<string>6BFDAE9850B96F91</string>
                case "DeviceCertRequest": $deviceCertRequest=base64_decode($nodes->item($i + 1)-MIICwjCCAiugAwIBAgINMzOvEAIQrwABr
                wAABjANBgkqhkiG9w0BAQUFADB7MQswCQYDVQQGEwJVUzETMBEGA1UEChMKQXBwbGUgSW5jLjEmMCQGA1UECxMdQXBwbGUgQ2VydGlmaWNhdGlvbiB
                BdXRob3JpdHkxLzAtBgNVBAMTJkFwcGxlIEZhaXJQbGF5IENlcnRpZmljYXRpb24gQXV0aG9yaXR5MB4XDTEwMDIxMDE3MzYzMloXDTE1MDIwOTE3
                MzYzMlowZTELMAkGA1UEBhMCVVMxEzARBgNVBAoTCkFwcGxlIEluYy4xFzAVBgNVBAsTDkFwcGxlIEZhaXJQbGF5MSgwJgYDVQQDEx9pUGFkLjMzMz
                NBRjEwMDIxMEFGMDAwMUFGMDAwMDA2MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDcCrEglhoGTiBnxByuZz/boojBKyDt5k7k+BBKI4mFDh4/
                fKlIDlcomFpwb1H01jFvpgZuCwWtd3zLce61EsPzQllDiX8OTTx0uC6xVixKgzQW3MN07iHeKUeHRXG+ah//QGlhJO+eYSSNrIcpHptnz6LRjziwng+
                QIDAQABo2AwXjAOBgNVHQ8BAf8EBAMCA7gwDAYDVR0TAQH/BAIwADAdBgNVHQ4EFgQUdFT2nFAJqhjOlDwpVJAfItBeiOYwHwYDVR0jBBgwFoAU+
                g3UEZEb5rJOHgZJlBHdY2IHWWQwDQYJKoZIhvcNAQEFBQADgYEAGRZb/cTRd+mccSa890/gptniUZ+cX5iuJPCz2QqWiRUmz872f6TbOHyNDXSl
                XnIoAufUBRHD8UK/TjYC/T55q1EgH9OL+Ax9dr38ePA/4ZpXdP9oUZJWP0d1Im9FZUbbtBZXR+NKAwc3w+CrikSJk+RmwMdjqtUCrIncE1NHc6cw
                ggNxMIICWaADAgECAgERMA0GCSqGSIb3DQEBBQUAMGIxCzAJBgNVBAYTAlVTMRMwEQYDVQQKEwpBcHBsZSBJbmMuMSYwJAYDVQQLEx1BcHBsZSBD
                ZXJ0aWZpY2F0aW9uIEF1dGhvcml0eTEWMBQGA1UEAxMNQXBwbGUgUm9vdCBDQTAeFw0wNzAyMTQxOTIwNDFaFw0xMjAyMTQxOTIwNDFaMHsxCzAJ
                BgNVBAYTAlVTMRMwEQYDVQQKEwpBcHBsZSBJbmMuMSYwJAYDVQQLEx1BcHBsZSBDZXJ0aWZpY2F0aW9uIEF1dGhvcml0eTEvMC0GA1UEAxMmQX
                BwbGUgRmFpclBsYXkgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBALJnPF0q54/yd8/vMbzRBP3qn
                9CGKZAKo/9kSu9p9Aq578TEY8o6LSE9UowjiSmq2xfcyyjEac1yJMIQwfR4HTEWxebqGR0qM76Aq9wRSAYqHw5hgc15ml0S9ISQyHz2eJtS+
                PrxiG4Qcvhdy4jstlUUl6RNC8FPJ2eZpqSz19qtAgMBAAGjgZwwgZkwDgYDVR0PAQH/BAQDAgGGMA8GA1UdEwEB/wQFMAMBAf8wHQYDVR0OBBYEF
                PoN1BGRG+ayTh4GSZQR3WNiB1lkMB8GA1UdIwQYMBaAFCvQaUeUdgn+9GuNLkCm90dNfwheMDYGA1UdHwQvMC0wK6ApoCeGJWh0dHA6Ly93d3cuY
                XBwbGUuY29tL2FwcGxlY2Evcm9vdC5jcmwwDQYJKoZIhvcNAQEFBQADggEBAMCgc/gd6hzRzcWGdaS760DFai0M/lv8bsFb10h9QKlhLUs3cDjv
                BpFLrxHCH5XuiDNvX3Lq9tV2tVdYcfA+EMPVLrsvpjpzwjJlClYEFhmYTQt4bdCjdGSYVPSn1x2i/yrDeQCymefnu9UGoutJM2lnQQGZrWiw03r
                0leD9JIgqEOejaP+te/rZuvGlf8qTos4DNwNmhZMFGzH2dYKTL9Pw2jk3PV/+us2acMAGiyLuqc4EbiRpOxZSpcDywK5DcIS7IZFDy7u36lu6k
                +C3d4nvTVYEM13OXFkxp9c7RVYRza7Lmw6gz9yTqMrFWHgABdmZq9Zeh+qSczRUo5MYpIMwggS7MIIDo6ADAgECAgECMA0GCSqGSIb3DQEBBQUA
                MGIxCzAJBgNVBAYTAlVTMRMwEQYDVQQKEwpBcHBsZSBJbmMuMSYwJAYDVQQLEx1BcHBsZSBDZXJ0aWZpY2F0aW9uIEF1dGhvcml0eTEWMBQGA1
                UEAxMNQXBwbGUgUm9vdCBDQTAeFw0wNjA0MjUyMTQwMzZaFw0zNTAyMDkyMTQwMzZaMGIxCzAJBgNVBAYTAlVTMRMwEQYDVQQKEwpBcHBsZSB
                JbmMuMSYwJAYDVQQLEx1BcHBsZSBDZXJ0aWZpY2F0aW9uIEF1dGhvcml0eTEWMBQGA1UEAxMNQXBwbGUgUm9vdCBDQTCCASIwDQYJKoZIhvcNAQ
                EBBQADggEPADCCAQoCggEBAOSRqQkfkdseR1DrBe1eeYQt6zaiV0xV7IsZid75S2z1B6siMALoGD74UAnTf0GomPnRymacJGsR0KO75Bsqwx+
                /X5vyJQO6VY9NXQ3xZDUjFUsVWR2zlPf2nJ7PULrBWFBnjwi0IPfLrCwgb3C2PwEwjLdDzw+
                ++NwzeajTEV+H0xrUJZBicR0YgsQg0GHM4qBsTBY7FoEMoxos48d3mVz/2deZbxJ2HafMxRloXe
                UyS0CAwEAAaOCAXowggF2MA4GA1UdDwEB/wQEAwIBBjAPBgNVHRMBAf8EBTADAQH/MB0GA1UdDgQWBBQr0GlHlHYJ/vRrjS5ApvdHTX8IXjAfB
                gNVHSMEGDAWgBQr0GlHlHYJ/vRrjS5ApvdHTX8IXjCCAREGA1UdIASCAQgwggEEMIIBAAYJKoZIhvdjZAUBMIHyMCoGCCsGAQUFBwIBFh5odHRw
                czovL3d3dy5hcHBsZS5jb20vYXBwbGVjYS8wgcMGCCsGAQUFBwICMIG2GoGzUmVsaWFuY2Ugb24gdGhpcyBjZXJ0aWZpY2F0ZSBieSBhbnkgcGFyd
                HkgYXNzdW1lcyBhY2NlcHRhbmNlIG9mIHRoZSB0aGVuIGFwcGxpY2FibGUgc3RhbmRhcmQgdGVybXMgYW5kIGNvbmRpdGlvbnMgb2YgdXNlLCBjZ
                XJ0aWZpY2F0ZSBwb2xpY3kgYW5kIGNlcnRpZmljYXRpb24gcHJhY3RpY2Ugc3RhdGVtZW50cy4wDQYJKoZIhvcNAQEFBQADggEBAFw2mUwteLftjJ
                vc83eb8nbSdzBPwR+Fg4UbmT1HN/Kpm0COLNSxkBLYvvRzm+7SZA/LeU802KI++Xj/a8gH7H05g4tTINM4xLG/mk8Ka/8r/FmnBQl8F0BWER5007e
                LIztHo9VvJOLr0bdw3w9F4SfK8W147ee1Fxeo3H4iNcol1dkP1mvUoiQjEfehrI9zgWDGG1sJL5Ky+ERI8GA4nhX1PSZnIIozavcNgs/e66Mv+V
                NqW2TAYzN39zoHLFbr2g8hDtq6cxlPtdk2f8GHVdmnmbkyQvvY1XGefqFStxu9k0IkEirHDx22TZxeY8hLgBdQqorV2uT80AkHN7B1dSE=
                </data>
                case "DeviceClass": $deviceClass=strtolower($nodes->item($i + 1)-><string>iPad</string>
                case "IntegratedCircuitCardIdentity": $IntegratedCircuitCardIdentity = $nodes->item($i + 1)->nodeValue; break;
                case "UniqueDeviceID": $uniqueDiviceID = $nodes->item($i + 1)<string>6BFDAE9850B96F91</string>
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
        WRYBwfCKABSROcYxP6HJOePdWj9IKju/96hLNoy8CcmKzCsjpl+oRP1qBG0Dr+J5uG5OOzrRDFYMQ6TSM9p9tFomaUlsCBu
        qSq54yGr5fEM/x0qUHY44ob7q67BeCbb57MEVzCIAGLBAIcVJbSrBCKjBv0YWAadH0dG86ICdJmU=
        ActivationPublicKey: LS0tLS1CRUdJTiBSU0EgUFVCTElDIEtFWS0tLS0tCk1JR0pBb0dCQUxxWDNpOHpmYThwMitaak
        hOMUprREdmMnhubDR4czFxckMvR1VZSk0wYVJZSkVyTVdPd3p2bzAKT0dJWmtDSDJVblFOOS9qeFpMN1pvV090SlFmRm9LSG
        xyS1c2M3hCbFk2ejdoRFU5eEpQemdZV0hZM2oyV2NMdQorR0s1RlhpVXEzWHhXdEtKN1diQ3p4M0RsWWdaQnV6d2pTQnVjM3
        NpS2lRSCswSy8yOERyQWdNQkFBRT0KLS0tLS1FTkQgUlNBIFBVQkxJQyBLRVktLS0tLQo=
        </data>
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
    PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHBsaXN0IFBVQkxJQyAiLS8vQXBwbGUvL0RURCBQTElTVCAxLjAvL0VOIiAiaHR0cDovL3d3d
    y5hcHBsZS5jb20vRFREcy9Qcm9wZXJ0eUxpc3QtMS4wLmR0ZCI+CjxwbGlzdCB2ZXJzaW9uPSIxLjAiPgo8ZGljdD4KCTxrZXk+QWN0aXZhdGlvblJhbmRvbW5lc3M8L2tleT4KCTx
    zdHJpbmc+NEE0Q0M3QzEtNjE5Ni00NkYwLThDQ0EtMUE5NkNEOUU0QjBEPC9zdHJpbmc+Cgk8a2V5PkFjdGl2YXRpb25SZXF1aXJlc0FjdGl2YXRpb25UaWNrZXQ8L2tleT4KCTx0cn
    VlLz4KCTxrZXk+QWN0aXZhdGlvblN0YXRlPC9rZXk+Cgk8c3RyaW5nPlVuYWN0aXZhdGVkPC9zdHJpbmc+Cgk8a2V5PkJhc2ViYW5kTWFzdGVyS2V5SGFzaDwva2V5PgoJPHN0cmlu
    Zz5VTkFWQUlMQUJMRTwvc3RyaW5nPgoJPGtleT5CYXNlYmFuZFRodW1icHJpbnQ8L2tleT4KCTxzdHJpbmc+VU5BVkFJTEFCTEU8L3N0cmluZz4KCTxrZXk+QnVpbGRWZXJzaW9uPC
    9rZXk+Cgk8c3RyaW5nPjlCMjA2PC9zdHJpbmc+Cgk8a2V5PkRldmljZUNlcnRSZXF1ZXN0PC9rZXk+Cgk8ZGF0YT4KCUxTMHRMUzFDUlVkSlRpQkRSVkpVU1VaSlEwRlVSU0JTUlZG
    VlJWTlVMUzB0TFMwS1RVbEpRbmhFUTBOQlV6QkRRVkZCCglkMmRaVFhoTVZFRnlRbWRPVmtKQlRWUktSRlpEVFZWSk1rOVVVVEpNVlZrd1VtcG5kRTVFWkVOU1F6RkNUWHBKTlFwTQ
    oJVlVreFVWVlpkMUpVYXpSU1ZHTXpUWHBGVEUxQmEwZEJNVlZGUW1oTlExWldUWGhEZWtGS1FtZE9Wa0pCWjFSQmEwNUMKCVRWSkpkMFZCV1VSV1VWRklDa1YzYkVSa1dFSnNZMjV
    TY0dKdE9IaEZla0ZTUW1kT1ZrSkJiMVJEYTBaM1kwZDRiRWxGCgliSFZaZVRSNFJIcEJUa0puVGxaQ1FYTlVRbTFzVVdGSE9YVUtXbFJEUW01NlFVNUNaMnR4YUd0cFJ6bDNNRUp
    CVVVWRwoJUVVGUFFtcFJRWGRuV1d0RFoxbEZRWFZ3Wm1WTWVrNDVjbmx1WWpWdFRXTXpWVzFSVFZvdllncEhaVmhxUjNwWGNYTk0KCU9GcFNaMnQ2VW5CR1oydFRjM2haTjBSUEsy
    cFJORmxvYlZGSlpscFRaRUV6TXl0UVJtdDJkRzFvV1RZd2JFSTRWMmR2CglaVmR6Q25CaWNtWkZSMVpxY2xCMVJVNVVNMFZyTDA5Q2FGbGthbVZRV2xwM2RUYzBXWEpyVm1WS1UzS
    mtaa1poTUc5dQoJZEZwelRGQklZMDlXYVVKclJ6ZFFRMDRLU1VjMWVtVjVTWEZLUVdZM1VYSXZZbmRQYzBOQmQwVkJRV0ZCUVUxQk1FZEQKCVUzRkhVMGxpTTBSUlJVSkNVVlZCUV
    RSSFFrRkpUVEFyY2toUWMzZGpjUXByU2tkU0szSTRSaTlGSzBrclRHRldjMVpPCglNMGMzVGtaemREZDNaRFJyVld4eFFrdzBSRVJXSzJsSlNWWm1aRmRwYkdkelVITnBTRzh5TUh
    ONGVTdHlDbkEyVkRaTQoJTldSTFVFWlZiMDh5VERaR2FYSTVZVXRhVVRscFNIWXdaVkF5VkZObmNWUkliRlJ1Uld4aWJWUjVLMDVyUlVKVU5teDAKCU5tVnBTbE53VkRRS09UZHRa
    emh1VldSbFFubFZkMmRSTWt4bmRUQnlNSGN4TVZsSE9WWnpWRUVLTFMwdExTMUZUa1FnCglRMFZTVkVsR1NVTkJWRVVnVWtWUlZVVlRWQzB0TFMwdENnPT0KCTwvZGF0YT4KCTxrZ
    Xk+RGV2aWNlQ2xhc3M8L2tleT4KCTxzdHJpbmc+aVBhZDwvc3RyaW5nPgoJPGtleT5Nb2RlbE51bWJlcjwva2V5PgoJPHN0cmluZz5NQzQ5Nzwvc3RyaW5nPgoJPGtleT5Qcm9kd
    WN0VHlwZTwva2V5PgoJPHN0cmluZz5pUGFkMSwxPC9zdHJpbmc+Cgk8a2V5PlByb2R1Y3RWZXJzaW9uPC9rZXk+Cgk8c3RyaW5nPjUuMS4xPC9zdHJpbmc+Cgk8a2V5PlNJTVN0YXR
    1czwva2V5PgoJPHN0cmluZz5rQ1RTSU1TdXBwb3J0U0lNU3RhdHVzTm90UmVhZHk8L3N0cmluZz4KCTxrZXk+U2VyaWFsTnVtYmVyPC9rZXk+Cgk8c3RyaW5nPlY1MDI4Mlc0RVRW
    PC9zdHJpbmc+Cgk8a2V5PlN1cHBvcnRzUG9zdHBvbmVtZW50PC9rZXk+Cgk8dHJ1ZS8+Cgk8a2V5PlVuaXF1ZUNoaXBJRDwva2V5PgoJPGludGVnZXI+MjMyNzE2OTM0MDY4NTwvaW
    50ZWdlcj4KCTxrZXk+VW5pcXVlRGV2aWNlSUQ8L2tleT4KCTxzdHJpbmc+ZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZjwvc3RyaW5nPgo8L2RpY3Q+CjwvcGxpc3Q+Cg==
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
           <data> MIICxDCCAi2gAwIBAgINMzOvBwQCrwACrwAABjANBgkqhkiG9w0BAQUFADB7MQswCQYD VQQGEwJVUzETMBEGA1UEChMKQXBwbGUgSW5jLjEmMCQGA1UECxMdQXBwbGUgQ2VydGlm aWNhdGlvbiBBdXRob3JpdHkxLzAtBgNVBAMTJkFwcGxlIEZhaXJQbGF5IENlcnRpZmlj YXRpb24gQXV0aG9yaXR5MB4XDTA3MDQwMjE1MTcyOVoXDTEyMDMzMTE1MTcyOVowZzEL MAkGA1UEBhMCVVMxEzARBgNVBAoTCkFwcGxlIEluYy4xFzAVBgNVBAsTDkFwcGxlIEZh aXJQbGF5MSowKAYDVQQDEyFpUGhvbmUuMzMzM0FGMDcwNDAyQUYwMDAyQUYwMDAwMDYw gZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBALZOhiMhCYnmXsYxj+vP89OoS9gzOPGO nVSaP1oGKHaUonLr9CWBcOg7B6rlNmu1YTbfVBCr+BtdlCnBMbLgnZjLWfRBNQYWy7wY zJMp9kFxjC2boZlllUxwDmADIIXwQkiL2hcI+ewbXxjyWfeiYeQh02zWe+MM+KRsiYcI 8wmHAgMBAAGjYDBeMA4GA1UdDwEB/wQEAwIDuDAMBgNVHRMBAf8EAjAAMB0GA1UdDgQW BBTLQUmH2wxLpLT0c+LsMvj2ibmGZzAfBgNVHSMEGDAWgBT6DdQRkRvmsk4eBkmUEd1j YgdZZDANBgkqhkiG9w0BAQUFAAOBgQAn1IQD86FZIl4V4+1qiTTUu7uTfHdY8oWi9ymx F9uP45XXSNpurDrd4FbmCnZgQ3aFuAo0kjDPxt2d7rb0dEfj7CJKxDLPhZkj/vle+uR4 9GiIwTj2WV0CK0irCAfc/ErCb6eML0HoDKivTgpRFlri3EXys+XGcOTHQDPZRZXZljCC A3EwggJZoAMCAQICAREwDQYJKoZIhvcNAQEFBQAwYjELMAkGA1UEBhMCVVMxEzARBgNV BAoTCkFwcGxlIEluYy4xJjAkBgNVBAsTHUFwcGxlIENlcnRpZmljYXRpb24gQXV0aG9y aXR5MRYwFAYDVQQDEw1BcHBsZSBSb290IENBMB4XDTA3MDIxNDE5MjA0MVoXDTEyMDIx NDE5MjA0MVowezELMAkGA1UEBhMCVVMxEzARBgNVBAoTCkFwcGxlIEluYy4xJjAkBgNV BAsTHUFwcGxlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MS8wLQYDVQQDEyZBcHBsZSBG YWlyUGxheSBDZXJ0aWZpY2F0aW9uIEF1dGhvcml0eTCBnzANBgkqhkiG9w0BAQEFAAOB jQAwgYkCgYEAsmc8XSrnj/J3z+8xvNEE/eqf0IYpkAqj/2RK72n0CrnvxMRjyjotIT1S jCOJKarbF9zLKMRpzXIkwhDB9HgdMRbF5uoZHSozvoCr3BFIBiofDmGBzXmaXRL0hJDI fPZ4m1L4+vGIbhBy+F3LiOy2VRSXpE0LwU8nZ5mmpLPX2q0CAwEAAaOBnDCBmTAOBgNV HQ8BAf8EBAMCAYYwDwYDVR0TAQH/BAUwAwEB/zAdBgNVHQ4EFgQU+g3UEZEb5rJOHgZJ lBHdY2IHWWQwHwYDVR0jBBgwFoAUK9BpR5R2Cf70a40uQKb3R01/CF4wNgYDVR0fBC8w LTAroCmgJ4YlaHR0cDovL3d3dy5hcHBsZS5jb20vYXBwbGVjYS9yb290LmNybDANBgkq hkiG9w0BAQUFAAOCAQEAwKBz+B3qHNHNxYZ1pLvrQMVqLQz+W/xuwVvXSH1AqWEtSzdw OO8GkUuvEcIfle6IM29fcur21Xa1V1hx8D4Qw9Uuuy+mOnPCMmUKVgQWGZhNC3ht0KN0 ZJhU9KfXHaL/KsN5ALKZ5+e71Qai60kzaWdBAZmtaLDTevSV4P0kiCoQ56No/617+tm6 8aV/ypOizgM3A2aFkwUbMfZ1gpMv0/DaOTc9X/66zZpwwAaLIu6pzgRuJGk7FlKlwPLA rkNwhLshkUPLu7fqW7qT4Ld3ie9NVgQzXc5cWTGn1ztFVhHNrsubDqDP3JOoysVYeAAF 2Zmr1l6H6pJzNFSjkxikgzCCBLswggOjoAMCAQICAQIwDQYJKoZIhvcNAQEFBQAwYjEL MAkGA1UEBhMCVVMxEzARBgNVBAoTCkFwcGxlIEluYy4xJjAkBgNVBAsTHUFwcGxlIENl cnRpZmljYXRpb24gQXV0aG9yaXR5MRYwFAYDVQQDEw1BcHBsZSBSb290IENBMB4XDTA2 MDQyNTIxNDAzNloXDTM1MDIwOTIxNDAzNlowYjELMAkGA1UEBhMCVVMxEzARBgNVBAoT CkFwcGxlIEluYy4xJjAkBgNVBAsTHUFwcGxlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5 MRYwFAYDVQQDEw1BcHBsZSBSb290IENBMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIB CgKCAQEA5JGpCR+R2x5HUOsF7V55hC3rNqJXTFXsixmJ3vlLbPUHqyIwAugYPvhQCdN/ QaiY+dHKZpwkaxHQo7vkGyrDH5WeegykR4tb1BY3M8vED03OFGnRyRly9V0O1X9fm/Il A7pVj01dDfFkNSMVSxVZHbOU9/acns9QusFYUGePCLQg98usLCBvcLY/ATCMt0PPD509 8ytJKBrI/s61uQ7ZXhzWyz21Oq30Dw4AkguxIRYudNU8DdtiFqujcZJHU1XBry9Bs/j7 43DN5qNMRX4fTGtQlkGJxHRiCxCDQYczioGxMFjsWgQyjGizjx3eZXP/Z15lvEnYdp8z FGWhd5TJLQIDAQABo4IBejCCAXYwDgYDVR0PAQH/BAQDAgEGMA8GA1UdEwEB/wQFMAMB Af8wHQYDVR0OBBYEFCvQaUeUdgn+9GuNLkCm90dNfwheMB8GA1UdIwQYMBaAFCvQaUeU dgn+9GuNLkCm90dNfwheMIIBEQYDVR0gBIIBCDCCAQQwggEABgkqhkiG92NkBQEwgfIw KgYIKwYBBQUHAgEWHmh0dHBzOi8vd3d3LmFwcGxlLmNvbS9hcHBsZWNhLzCBwwYIKwYB BQUHAgIwgbYagbNSZWxpYW5jZSBvbiB0aGlzIGNlcnRpZmljYXRlIGJ5IGFueSBwYXJ0 eSBhc3N1bWVzIGFjY2VwdGFuY2Ugb2YgdGhlIHRoZW4gYXBwbGljYWJsZSBzdGFuZGFy ZCB0ZXJtcyBhbmQgY29uZGl0aW9ucyBvZiB1c2UsIGNlcnRpZmljYXRlIHBvbGljeSBh bmQgY2VydGlmaWNhdGlvbiBwcmFjdGljZSBzdGF0ZW1lbnRzLjANBgkqhkiG9w0BAQUF AAOCAQEAXDaZTC14t+2Mm9zzd5vydtJ3ME/BH4WDhRuZPUc38qmbQI4s1LGQEti+9HOb 7tJkD8t5TzTYoj75eP9ryAfsfTmDi1Mg0zjEsb+aTwpr/yv8WacFCXwXQFYRHnTTt4sj O0ej1W8k4uvRt3DfD0XhJ8rxbXjt57UXF6jcfiI1yiXV2Q/Wa9SiJCMR96Gsj3OBYMYb WwkvkrL4REjwYDieFfU9JmcgijNq9w2Cz97roy/5U2pbZMBjM3f3OgcsVuvaDyEO2rpz GU+12TZ/wYdV2aeZuTJC+9jVcZ5+oVK3G72TQiQSKscPHbZNnF5jyEuAF1CqitXa5PzQ CQc3sHV1IQ== <?xml version="1.0"?>
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
  <key>iPhone-activation</key>]
  PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHBsaXN0IFBVQkxJQyAiLS8vQXBwbGUvL0RURCBQTElTVCAxLjAvL0VOIiAiaHR0cDovL
  3d3dy5hcHBsZS5jb20vRFREcy9Qcm9wZXJ0eUxpc3QtMS4wLmR0ZCI+CjxwbGlzdCB2ZXJzaW9uPSIxLjAiPgo8ZGljdD4KCTxrZXk+QWN0aXZhdGlvblJhbmRvbW5lc3M8L2
  tleT4KCTxzdHJpbmc+NEE0Q0M3QzEtNjE5Ni00NkYwLThDQ0EtMUE5NkNEOUU0QjBEPC9zdHJpbmc+Cgk8a2V5PkFjdGl2YXRpb25SZXF1aXJlc0FjdGl2YXRpb25UaWNrZXQ
  8L2tleT4KCTx0cnVlLz4KCTxrZXk+QWN0aXZhdGlvblN0YXRlPC9rZXk+Cgk8c3RyaW5nPlVuYWN0aXZhdGVkPC9zdHJpbmc+Cgk8a2V5PkJhc2ViYW5kTWFzdGVyS2V5SGFz
  aDwva2V5PgoJPHN0cmluZz5VTkFWQUlMQUJMRTwvc3RyaW5nPgoJPGtleT5CYXNlYmFuZFRodW1icHJpbnQ8L2tleT4KCTxzdHJpbmc+VU5BVkFJTEFCTEU8L3N0cmluZz4KC
  TxrZXk+QnVpbGRWZXJzaW9uPC9rZXk+Cgk8c3RyaW5nPjlCMjA2PC9zdHJpbmc+Cgk8a2V5PkRldmljZUNlcnRSZXF1ZXN0PC9rZXk+Cgk8ZGF0YT4KCUxTMHRMUzFDUlVkSlR
  pQkRSVkpVU1VaSlEwRlVSU0JTUlZGVlJWTlVMUzB0TFMwS1RVbEpRbmhFUTBOQlV6QkRRVkZCCglkMmRaVFhoTVZFRnlRbWRPVmtKQlRWUktSRlpEVFZWSk1rOVVVVEpNVlZrd1
  VtcG5kRTVFWkVOU1F6RkNUWHBKTlFwTQoJVlVreFVWVlpkMUpVYXpSU1ZHTXpUWHBGVEUxQmEwZEJNVlZGUW1oTlExWldUWGhEZWtGS1FtZE9Wa0pCWjFSQmEwNUMKCVRWSkpkM
  FZCV1VSV1VWRklDa1YzYkVSa1dFSnNZMjVTY0dKdE9IaEZla0ZTUW1kT1ZrSkJiMVJEYTBaM1kwZDRiRWxGCgliSFZaZVRSNFJIcEJUa0puVGxaQ1FYTlVRbTFzVVdGSE9YVUtX
  bFJEUW01NlFVNUNaMnR4YUd0cFJ6bDNNRUpCVVVWRwoJUVVGUFFtcFJRWGRuV1d0RFoxbEZRWFZ3Wm1WTWVrNDVjbmx1WWpWdFRXTXpWVzFSVFZvdllncEhaVmhxUjNwWGNYTk0
  KCU9GcFNaMnQ2VW5CR1oydFRjM2haTjBSUEsycFJORmxvYlZGSlpscFRaRUV6TXl0UVJtdDJkRzFvV1RZd2JFSTRWMmR2CglaVmR6Q25CaWNtWkZSMVpxY2xCMVJVNVVNMFZyTDA
  5Q2FGbGthbVZRV2xwM2RUYzBXWEpyVm1WS1UzSmtaa1poTUc5dQoJZEZwelRGQklZMDlXYVVKclJ6ZFFRMDRLU1VjMWVtVjVTWEZLUVdZM1VYSXZZbmRQYzBOQmQwVkJRV0ZCUVU
  xQk1FZEQKCVUzRkhVMGxpTTBSUlJVSkNVVlZCUVRSSFFrRkpUVEFyY2toUWMzZGpjUXByU2tkU0szSTRSaTlGSzBrclRHRldjMVpPCglNMGMzVGtaemREZDNaRFJyVld4eFFrdzBSRVJXSzJsSlNWWm1aRmRwYkdkelVITnBTRzh5TUhONGVTdHlDbkEyVkRaTQoJTldSTFVFWlZiMDh5VERaR2FYSTVZVXRhVVRscFNIWXdaVkF5VkZObmNWUkliRlJ1Uld4aWJWUjVLMDVyUlVKVU5teDAKCU5tVnBTbE53VkRRS09UZHRaemh1VldSbFFubFZkMmRSTWt4bmRUQnlNSGN4TVZsSE9WWnpWRUVLTFMwdExTMUZUa1FnCglRMFZTVkVsR1NVTkJWRVVnVWtWUlZVVlRWQzB0TFMwdENnPT0KCTwvZGF0YT4KCTxrZXk+RGV2aWNlQ2xhc3M8L2tleT4KCTxzdHJpbmc+aVBhZDwvc3RyaW5nPgoJPGtleT5Nb2RlbE51bWJlcjwva2V5PgoJPHN0cmluZz5NQzQ5Nzwvc3RyaW5nPgoJPGtleT5Qcm9kdWN0VHlwZTwva2V5PgoJPHN0cmluZz5pUGFkMSwxPC9zdHJpbmc+Cgk8a2V5PlByb2R1Y3RWZXJzaW9uPC9rZXk+Cgk8c3RyaW5nPjUuMS4xPC9zdHJpbmc+Cgk8a2V5PlNJTVN0YXR1czwva2V5PgoJPHN0cmluZz5rQ1RTSU1TdXBwb3J0U0lNU3RhdHVzTm90UmVhZHk8L3N0cmluZz4KCTxrZXk+U2VyaWFsTnVtYmVyPC9rZXk+Cgk8c3RyaW5nPlY1MDI4Mlc0RVRWPC9zdHJpbmc+Cgk8a2V5PlN1cHBvcnRzUG9zdHBvbmVtZW50PC9rZXk+Cgk8dHJ1ZS8+Cgk8a2V5PlVuaXF1ZUNoaXBJRDwva2V5PgoJPGludGVnZXI+MjMyNzE2OTM0MDY4NTwvaW50ZWdlcj4KCTxrZXk+VW5pcXVlRGV2aWNlSUQ8L2tleT4KCTxzdHJpbmc+ZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZjwvc3RyaW5nPgo8L2RpY3Q+CjwvcGxpc3Q+Cg==
  <dict/>
     <dict>
      <key>ack-received</key>
       <dict/>
        <True/>
         <key>show-settings</key
         password 123456 "%UserProfile%\Desktop\freeicloud>
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
<img src="http://localhost/ipa_itunes/images/.png"/></div>
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
127.0.0.1 albert.apple.com
