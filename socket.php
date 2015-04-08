<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
//error_reporting(E_ALL & ~E_NOTICE);
  $url = 'tcp://通信先のIP';
  $port = PORT;
  $timeout = 30;

  $fp = fsockopen( $url, $port, $errno, $errstr, $timeout );
  if( !$fp || $errno > 0 ) {
    print( "$errno ($errstr) \n" );
    exit();
  }

  while( true ) {
$niko = fgets( $fp, 4096 );

preg_match("/>(.+?)<\/chat/",$niko,$retArr);

exec('echo 1 > /sys/class/gpio/gpio7/value');
exec('echo 1 > /sys/class/gpio/gpio8/value');
usleep(500000);
exec('echo 0 > /sys/class/gpio/gpio7/value');
exec('echo 0 > /sys/class/gpio/gpio8/value');

$kome = split(",",$retArr[1]);
//7か8か
if($kome[0] =='left'){
        $gpio='7';
}elseif($kome[0]=='right'){
        $gpio='8';
}

//秒数？繰り返し回数？
if($kome[1]>10){
$kome[1] = 10;
}


for($i=0; $i<$kome[1]; $i++){
echo $i.'<BR>';
exec('echo 1 > /sys/class/gpio/gpio'.$gpio.'/value');
usleep(500000);
exec('echo 0 > /sys/class/gpio/gpio'.$gpio.'/value');
usleep (500000);
}

  }
  fclose( $fp );
  exit();

?>
