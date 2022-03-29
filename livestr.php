<html>
<head>
<title><?php echo $_REQUEST["c"]; ?> | LiveTV</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
<link href="https://fonts.googleapis.com/css?family=Poppins|Quattrocento+Sans" rel="stylesheet"/>
<script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/hide-banner.js"></script>
<style>
html {
  font-family: Poppins;
  background: #000;
  margin: 0;
  padding: 0
}

.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }
    
    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }
    
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        background: url('https://telegra.ph/file/22da4d29204c748a526a4.png') no-repeat;
        background-size: 35px auto, auto;
    }

    .plyr__video-wrapper::after {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        background: url('https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png') no-repeat;
        background-size: 35px auto, auto;
    }

</style>

</head>
<body>
  <div id="loading" class="loading">
<div class="loading-text">
    <span class="loading-text-words">L</span>
    <span class="loading-text-words">O</span>
    <span class="loading-text-words">A</span>
    <span class="loading-text-words">D</span>
    <span class="loading-text-words">I</span>
    <span class="loading-text-words">N</span>
    <span class="loading-text-words">G</span>
</div>
</div>

<video hideControls="false" autoplay controls crossorigin poster="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/SonySABlogo.png/185px-SonySABlogo.png" playsinline>

    <source type="application/x-mpegURL" src="https://live12p.hotstar.com/hls/live/2024725/ipl2022/hin/1540014131/15mindvrm014b6840d12f844cc68143793c995d473229march2022/master_8.m3u8|user-agent=user-agent=Mozilla/5.0 (Linux; Android 10; Redmi 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36&Origin=https://www.hotstar.com&Referer=https://www.hotstar.com/&cookie=hs_uid=365c453a-37d9-4983-b2d5-93c8930c9eab; ajs_group_id=null; ajs_user_id=%223e6e161a46074335a4bb6d12b05081ce%22; ajs_anonymous_id=%221f1c4502-73df-49d8-ba53-ca21d43039b8%22; hdntl=exp=1648644249~acl=*ipl2022*~id=cb77e86edd682b8bfcde61aa98f807b3~data=ip%3di8lKgPKM2KWcuzULwT47LSENhBDxbh5YScLabGh6nJyQ6GUzyLTPhE4-userid%3dU2Y7x5rZ9bQ5q28PGGkipJDE01olduj51u0B2YKIQxSQ-did%3drzKl5kbDTs0itu5InwYZyZlJdMkUeS8mHjKggtE1bFvjfsVxCT6IqKu-cc%3din-~hmac=dd2d3ec4871f843a626afd7cc1c828c0e0ed473ede14c49047ce6559632fec28"> </video>
</body>
<script>
  setTimeout(videovisible, 4000)
function videovisible() {
    document.getElementById('loading').style.display = 'none'
}
document.addEventListener("DOMContentLoaded", () => {
  const e = document.querySelector("video"),
    n = e.getElementsByTagName("source")[0].src,
    o = {};
  if(Hls.isSupported()) {
    var config = {
      maxMaxBufferLength: 100,
    };
    const t = new Hls(config);
    t.loadSource(n), t.on(Hls.Events.MANIFEST_PARSED, function(n, l) {
      const s = t.levels.map(e => e.height);
      o.quality = {
        default: s[0],
        options: s,
        forced: !0,
        onChange: e => (function(e) {
          window.hls.levels.forEach((n, o) => {
            n.height === e && (window.hls.currentLevel = o)
          })
        })(e)
      };
      new Plyr(e, o)
    }), t.attachMedia(e), window.hls = t
  } else {
    new Plyr(e, o)
  }
});

</script>

 </body>
</html>
