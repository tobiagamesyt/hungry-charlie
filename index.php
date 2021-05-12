<style>
.content {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

       .karlik {
        width: 300px;
        height: 300px;
        background: url("karel.png") no-repeat;
        display: inline-block;
    }
    .karlik:hover {
        background: url("karel-ji.png") no-repeat;
    }
    
    </style>
    <!--
    Hra vlastní výroby dostupná na https://tobia-web.wz.cz/hry/hladovy-karel
    888            888      d8b                                        888                                                       
    888            888      Y8P                                        888                                                       
    888            888                                                 888                                                       
    888888 .d88b.  88888b.  888  8888b.         888  888  888  .d88b.  88888b.      888  888  888 88888888      .d8888b 88888888 
    888   d88""88b 888 "88b 888     "88b        888  888  888 d8P  Y8b 888 "88b     888  888  888    d88P      d88P"       d88P  
    888   888  888 888  888 888 .d888888 888888 888  888  888 88888888 888  888     888  888  888   d88P       888        d88P   
    Y88b. Y88..88P 888 d88P 888 888  888        Y88b 888 d88P Y8b.     888 d88P d8b Y88b 888 d88P  d88P    d8b Y88b.     d88P    
     "Y888 "Y88P"  88888P"  888 "Y888888         "Y8888888P"   "Y8888  88888P"  Y8P  "Y8888888P"  88888888 Y8P  "Y8888P 88888888
    -->
    
    <body style="background-color:#59CE23">
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5">
        <div class="content">
            <center><h1>Karlík má hlad!</h1>
            <h3>Když klikneš na tlačítko níže, dáš mu <b>jeden chleba</b>.</h3>
            <div class="karlik"></div><br>&nbsp;<br>
            <audio id="sound" src="kous.mp3" preload="auto">
            <a onclick="window.location.replace('/hry/hladovy-karel/process.php');"></audio>
            <!-- Onclick v odkazu mám, aby se URL adresa neukazovala při přejetí myší. Přijde mi to o trochu víc elegantní. :D -->
            <button onclick="document.getElementById('sound').play();">Dát Karlovi chleba</button></a><br>&nbsp;<br>Karel zatím snědl <b><?php
$raw = file_get_contents('https://tobia-web.wz.cz/hry/hladovy-karel/raw.txt');
echo $raw;
?> chlebů.</b></center>
        </div>
        <script>
            if (location.protocol !== 'https:') {
    location.replace(`https:${location.href.substring(location.protocol.length)}`);
}
        </script>
    