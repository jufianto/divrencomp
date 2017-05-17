<?php
function jkel($jk){
 if(!$jk) return "Perempuan";
  else return "Laki-laki";
}

function agama($ag){
 switch($ag){
 case 1:
  return "Islam"; break;
 case 2:
  return "Katolik"; break;
 case 3:
  return "Protestan"; break;
 case 4:
  return "Hindu"; break;
 case 5:
  return "Buddha"; break;
 case 6:
  return "Konghucu"; break;
 default:
  return "Tidak Ada"; break;
 }
}

function form_month($name,$mth=0){
 $form="<select name='".$name."_bulan' class='form-control tglahir_".$name."' style='width:100px;display:inline' id='".$name."_bln'>";
 $bulan=array(
  "1" => "Januari",
   "Februari",
   "Maret",
   "April",
   "Mei",
   "Juni",
   "Juli",
   "Agustus",
   "September",
   "Oktober",
  "November",
  "Desember"
 );
 $count=1;
 foreach($bulan as $bln){
  $form.="<option value='".$count."'";
  if($mth==$count)
   $form.="selected";
  $form.= ">".$bln."</option>";
  $count+=1;
 }
 $form.="</select>";
 return $form;
}

function tanggal($dt){
 //format harus yyyy-mm-dd
 $bulan=array(
  "01" => "Januari",
  "02" => "Februari",
  "12" => "Desember",
  "03" => "Maret",
  "04" => "April",
  "05" => "Mei",
  "06" => "Juni",
  "07" => "Juli",
  "08" => "Agustus",
  "09" => "September",
  "10" => "Oktober",
  "11" => "November"
 );
 $date=explode("-",$dt);
 $date[3]=substr($date[2],0,2);
 $date[2]=substr($date[2],3,8);
  //fix date with timestamp format
 $tanggal=$date[3]." ".$bulan[$date[1]]." ".$date[0]." ".$date[2];
 return $tanggal;
}

function umur($tgl,$thnonly=false){
 $endperiod=mktime(0,0,0,7,1,2017);
 $bnperiod=date('U',strtotime($tgl));
 $thn=($endperiod-$bnperiod)/31556952; //detik perbedaan tanggal dibagi detik setahun. setahun ada 31556952 detik

 $bln=floor(($thn-floor($thn))*12); //tahun float dikurang floor tahun lalu dikali 12 bulan, dan di floor-kan
 if($thnonly){
  return floor($thn);
 } else {
  return floor($thn)." th ".$bln." bln";
 }
}

function stdaftar($st){
 $status=array(
  "1" => "Menunggu",
  "2" => "Lulus Administrasi",
  "3" => "Diterima",
  "4" => "Tidak Diterima",
  "5" => "Tidak Lulus Administrasi"
 );
 return $status[$st];
}

function akunlv($lv){
 $level=array(1=>'Administrator','Kepala Sekolah');
 return $level[$lv];
}

function specialRemove($string){
	//return preg_replace('/[^A-Za-z0-9*,.@\-\/\\/ \n]/', '', $string);
	return htmlspecialchars($string,ENT_QUOTES,'ISO-8859-1');
}

function statusortu($str){
 $arr=array(
  1=>'Masih Hidup','Keduanya Meninggal','Ayah Meninggal','Ibu Meninggal'
 );
 return $arr[$str];
}

function uang($nominal){
 $nominal=preg_replace("/[.,a-zA-Z#!;=&]/","",$nominal);
 $nominal=(int)$nominal;
 return abs($nominal);
}

function harga($h){
  return $hasil = "Rp." . number_format($h,0,',','.');
}
