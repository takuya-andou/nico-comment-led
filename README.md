# nico-comment-led
##概要
ラズベリーパイを使って、ニコ生でコメントが来た時にLEDを光らせるプログラムです。

##セッティング
1. ラズベリーパイのGPIOで操作しますので、下記のURLを参考にGPIO7,8を有効化してください  
https://tool-lab.com/2013/12/raspi-gpio-controlling-command-1/
2. falseberryさんが作成された000000_nicomment.jarをダウンロードしてください。（ニコ生のコメントを受信するプログラムです。）  
http://falseberry.dip.jp/uploaded/  

##使い方
1. 000000_nicomment.jar　をPCで起動して
2. 同一ネットワーク上にあるラズベリーパイ上でsocket.phpを起動
