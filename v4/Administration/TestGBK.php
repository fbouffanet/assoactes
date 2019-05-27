<?php

$url = 'https://www.geneabank.org/cgi-bin/gbk_sql.pl';
$data = array('userid' => 'agcharente','action'=>'login', 'pass' => 'fc16hpb9');
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
//var_dump($result);

$a_matches= array();

if (preg_match("/INPUT TYPE=HIDDEN NAME='sessionid' VALUE='([\d-]+)'/",$result,$a_matches))
{
  $st_session_id=$a_matches[1];
  print("($st_session_id)<br>");
  $data = array('userid' => 'agcharente','sessionid'=>$st_session_id,'action'=>'changepwuser','changeuser'=>'agc1025','newpw'=>'Td9slBeM','retype'=>'Td9slBeM');
  //$data = array('userid' => 'agcharente','sessionid'=>$st_session_id,'action'=>'changepwuser','changeuser'=>'agc1025','newpw'=>'to!to');
  $options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
  );

  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
 //var_dump($result);
  
  if (preg_match('/Changement de mot de passe fait/',$result))
  {
      print("Changement de mdp fait<br>");
  }
  
  /*
  Erreur
Les espaces, les caractères accentués, etc. ne sont pas autorisés pour le nom d'utilisateur ou le mot de passe.
Le nom d'utilisateur et le mot de passe doivent avoir chacun entre 3 et 20 caractères
*/
}
?>