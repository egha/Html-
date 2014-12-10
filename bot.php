<?php
//Script Edited by Dadi Sanjaya
error_reporting(0);
########SETTING BOT########
##Untuk menonaktifkan salah satu BOT (Mode OFF), Ubah true menjadi false##
$bot['like'] = true; //BOT Like Mode ON
$bot['ck_k'] = false; //BOT Komentar Kondisi Mode ON
$bot['ck_u'] = true; //BOT Komentar Umum Mode ON
$bot['time'] = false; //BOT Waktu & Tanggal Mode ON
$bot['aces'] = "CAAAAAIZAgwGsBAFlYqQEhgnZB2WrmT6ztVN5elrjWoVbYT4yRJrJHxxbEQoEZA5zmaRxDSDqcux3lClA0uE0z8VMI0RcqZAAyOZCbLZA2QmTj46Hyc0MWOQc7egB5IvSbVbA65GDKTHQ68KvntAGKHrieDxmYB8PAFCRLuFfWZCI7PXzApt2RcH8UAyIXrUOMfJlY70vS3mj6B1AoebJPuSISy0Y7bU5ZBwZD"; // Isi dengan access token kamu
########END OF SETTING########
com_like($cl,$ck,$cu,$tm,$access_token);
com_like($bot['like'],$bot['ck_k'],$bot['ck_u'],$bot['time'],$bot['aces']);
function cmn($text,$ck,$cu){
##Silahkan ganti komentar diantara tanda petik sesuai selera anda##
$cmn_umum = array("Hye <name> :) Jom Kawan :* Zakwan Baru Buat Acc Baru Ni :D  Friend Zakwan Sikit Je :'( Add Zakwan Cepat!!! :O 100% Zakwan Approve <3 (y)   https://www.facebook.com/harith.zakwanii",


);
##########kondisi
$comment = array(
array(
      array("sepi",
            "pada kemana",
            "pada kmn",
           ),
      array("Bakar Rumah sakit <name> pasti rame :D",
           )
     ),
array(
      array("Cinta",
            "moga",
            "amin",
           ),
      array("Amin <name>.. hihii ",
            "amin <name>.. :-)",
           )
     ),

array(
      array("Thanks",
            "Thank's",
            "Terima Kasih",
           ),
      array("Ok ",
            "Terima Kasih Ke Siapa <name> ? ",
           )
     ),
array(
      array("lapar",
            "hungry",
            "cipru",
            "laper",
            "kempong",
           ),
      array("Laperyah ? sama dong :D",
           )
     ),
array(
      array("wkwk",
            "ckck",
            "gkgk",
            "haha",
            "xixi",
         "hihi",
           ),
      array("Jiah Ktawa Trus nih :D",
           )
     ),
array(
      array("pusing",
            "mumet",
            "sakit kepala",
            "puyeng",
            "lieur",
           ),
      array("Lagi sakit Ya  <name>..?",
           
           )
     ),
array(
      array("galau",
            "resah",
            "gelisah",
         "Galau",
         "GALAU",
         "galaw",
           ),
      array("Sebetulnya galau itu apa to <name>.....pengin ngerasain, hehe..",
           )
     ),
array(
      array("Subuh",
            "Ashar",
            "Maghrib",
            "Dzuhur",
            "duhur",
            "Lohor",
           ),
      array("Solat Dulu Sana biar dapet pahala ^_^",
           )
     ),
array(
      array("panas",
            "gerah",
            "hareudang",
           ),
      array("Masuk kulkas aja biar adem <name>.. heee.."
           )
     ),
array(
      array("askum",
         "asalam",
         "assalam",
         "mekum",
         "Ass",
         "Assalamualaikum",
         "laikum",
           ),
      array("Walaikumsalam..",
           )
     ),
array(
      array("met pagi",
            "selamat pagi",
         "morning",
           ),
      array("Met pagi jg <name>....:D ",
           )
     ),
array(
      array("met siang",
            "selamat siang",
           ),
      array("Met siang juga <name>....:D ",
           )
     ),
array(
      array("met sore",
            "selamat sore",
           ),
      array("Met sore juga <name>....:D ",
           )
     ),    
array(
      array("met malem",
            "selamat malem",
         "met malam",
         "selamat malam",
         "night",
           ),
      array("Met malem juga <name>....:D ",
           )
     ),
array(
      array("sakit",
            "perih",
           ),
      array("Biar Ane Yang Obatin Pasti Sembuh  <name > :D",
           )
     ),        
array(
      array("kangen",
            "rindu",
         "pengen ketemu",
           ),
      array("Owwwww..... , Kangen Ma Siapa ? | Ama Saya Ya ? ",
           )
     ),       
array(
      array("lagu",
            "musik",
            "sing",
            "song",
            "#np",
            "#NP",
            "nyanyi",
           ),
      array("Nyayiin Dong Lagu nya <name>",
           )
     ),      
array(
      array("geregetan",
           ),
      array("Wah Lagi Nyayi Lagu Nya Sherina Ya <name> ??",
           )
     ),    
 
array( 
      array (" puasa",
           ),
      array("» Dalam berpuasa «
Pastikan Kita :
- Setting Niat
- Download Pahala
- Delete Dosa
- Upload Kesabaran
- Approve Maaf
- Browsing Kebaikan
- Update Amal
- Upgrade Keimanan
- Shutdown Permusuhan
- Restart Persaudaran
- Online kan Hati Dijalan Kebaikan",
        ) 
    ),
 

array(
      array("Tuhan",
            "tuhan",
         "Allah",
         "ya allah",
         "Ya allah",
           ),
      array("Semoga dikabulkan ya <name>",
           )
     ),    
array(
      array("ganteng",
            "keren",
         "cakep",
         "tampan",
           ),
      array("wah kamu bilang aku ganteng ya <name>! makasih ya",
           )
     ),   
array(
      array("Ninja",
            "Saga",
         "play",
         "PNS",
           ),
      array("Eeh <name> Bayar Gak Main Nya ? | :D ",
           )
     ),   
);
$komentar = '';
$cr_kondisi=false;
foreach($comment as $cx){
    foreach($cx[0] as $ct){
        if(ereg($ct,$text)){
            $cr_kondisi=true;
            $komentar = $cx[1][rand(0,count($cx[1]) - 1)];
        }
    }
}
if($cr_kondisi==true && $ck==true){
    return $komentar;
}else{
    if($cu==true){ return $cmn_umum[rand(0,count($cmn_umum) - 1)]; }
}
}
#######################################
function com_like($cl,$ck,$cu,$tm,$access_token){
    $beranda = json_decode(httphit("https://graph.facebook.com/me/home?fields=id,from,type,message&limit=100&access_token=".$access_token))->data;
    $saya_cr = json_decode(httphit("https://graph.facebook.com/me?access_token=".$access_token));
    if($beranda){
        foreach($beranda as $cr_post){
            if(!ereg($saya_cr->id,$cr_post->id)){
                $log_cr = simlog($cr_post->id);
                if($log_cr==true){
                    if($ck==true){
                        $url_ck = cmn($cr_post->message,$ck,$cu);
                        $url_ck = str_replace("<name>",$cr_post->from->name,$url_ck);
						$url_ck	= str_replace("<aku>",$saya_cr->first_name,$url_ck);
                        if($tm==true){ $url_ck = $url_ck.wkthit().kecepatan().konter() ; }
                        $url_ck = urlencode($url_ck);
                        if($ck==true OR $cu==true){
                            httphit("https://graph.facebook.com/".$cr_post->id."/comments?method=POST&message=".$url_ck."&access_token=".$access_token);
                        }
                        if($cl==true){
                            httphit("https://graph.facebook.com/".$cr_post->id."/likes?method=POST&access_token=".$access_token);
                        }
                    }
                }
            }
        }
    }
}
########Waktu########
function httphit($url){
    return file_get_contents($url);
}

function kecepatan() {
        $waktu="
";

	$gentime = microtime(); 
	$gentime = explode(' ',$gentime); 
	$gentime =  $gentime[0]; 
	$pg_end = $gentime; 
	$totaltime = ($pg_end - $pg_start); 
	$showtime = number_format($totaltime, 1, '.', ''); 
	return "$waktu 
 
 Bot Created By Dadi Sanjaya ..
_________________________________________________ 
Suport On : https://www.facebook.com/Mycho.Qais
_________________________________________________ ";
}
########JANGAN MERUBAH SCRIPT DARI SINI KE BAWAH, AGAR BOT BISA BERJALAN LANCAR########
function konter() {
        $sempak="
";
$filename = 'ADEhit.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) + 1;
fclose($handle);
#####INDONESIA#####
$handle = fopen($filename, 'w');
fwrite($handle, $hits);
fclose($handle);
	return "$sempak   ";
}

function wkthit(){
    $ent="
";
    $hari=gmdate("D", time()+60*60*7);
    if((gmdate("D", time()+60*60*7))=="Sun"){ $hari="Minggu"; }
    if((gmdate("D", time()+60*60*7))=="Mon"){ $hari="Senin"; }
    if((gmdate("D", time()+60*60*7))=="Tue"){ $hari="Selasa"; }
    if((gmdate("D", time()+60*60*7))=="Wed"){ $hari="Rabu"; }
    if((gmdate("D", time()+60*60*7))=="Thu"){ $hari="Kamis"; }
    if((gmdate("D", time()+60*60*7))=="Fri"){ $hari="Jum'at"; }
    if((gmdate("D", time()+60*60*7))=="Sat"){ $hari="Sabtu"; }
$ADEtgl = gmdate("d", time()+60*60*7);
$ADEbln = gmdate("F", time()+60*60*7);
if((gmdate("F", time()+60*60*7))=="January"){ $ADEbln="Januari"; }
    if((gmdate("F", time()+60*60*7))=="February"){ $ADEbln="Februari"; }
    if((gmdate("F", time()+60*60*7))=="March"){ $ADEbln="Maret"; }
    if((gmdate("F", time()+60*60*7))=="April"){ $ADEbln="April"; }
    if((gmdate("F", time()+60*60*7))=="May"){ $ADEbln="Mei"; }
    if((gmdate("F", time()+60*60*7))=="June"){ $ADEbln="Juni"; }
    if((gmdate("F", time()+60*60*7))=="July"){ $ADEbln="Juli"; }
    if((gmdate("F", time()+60*60*7))=="August"){ $ADEbln="Agustus"; }
    if((gmdate("F", time()+60*60*7))=="September"){ $ADEbln="September"; }
    if((gmdate("F", time()+60*60*7))=="October"){ $ADEbln="Oktober"; }
    if((gmdate("F", time()+60*60*7))=="November"){ $ADEbln="November"; }
    if((gmdate("F", time()+60*60*7))=="December"){ $ADEbln="Desember"; }
$ADEthn = gmdate("Y", time()+60*60*7);
$ADEjam = gmdate("H:i", time()+60*60*7);
 return $ent.$ent."Hari: ".$hari.", ".$ADEtgl." ".$ADEbln." ".$ADEthn." ?? Komen meluncur Jam: ".$ADEjam." WIB $showtime" ;

  }
function simlog($cr_id) {
    $fname = "ADElog.txt";
    $lihatiplist=fopen ($fname, "rb");
    $text='';
    if($lihatiplist){
        $spasipol = "";
        do {
            $barislistip = fread($lihatiplist, 512);
            if(strlen($barislistip) == 0){ break; }
            $spasipol .= $barislistip;
        } while(true);
        fclose ($lihatiplist);
        for ($i = 1; $i <= 10; $i++) {$spasipol = str_replace(" ","",$spasipol);}
        $text=$text.$spasipol;
    }else{$text="";}
    if(ereg($cr_id,$text)){
        return false;
    }else{
        $text = $text.$cr_id;
        $w_file=@fopen($fname,"w") or bberr();
        if($w_file) {
            @fputs($w_file,$text);
            @fclose($w_file);
        }
        return true;
    }
}
