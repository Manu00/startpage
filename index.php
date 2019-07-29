<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/basicgrid@3/dist/basicGrid.min.css">
    <link rel="stylesheet" href="src/base.css">
    <title>Startpage</title>
</head>
<body id="grad" class="main_bg" onload="clock();" onunload="stop();">
    <div id="firstcol" class="row bottom-on-small around-on-small between-on-large">
        <div class="column small-3 be">
            <div id="clo" class="clo"><p><span id="clock"></span></p></div>
        </div>
        <div class="column small-1 bf"></div>
        <div class="column small-2 be">
            <div class="box-cut">
                <a href="https://reddit.com">
                    <div class="box-cut2">
                        <p class="linkbox">
                            Reddit
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="column small-1 bf"></div>
        <div class="column small-2 be">
            <div class="box-cut">
                <a href="https://google.com">
                    <div class="box-cut2">
                        <p class="linkbox">
                            Google
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="column small-1 bf"></div>
        <div class="column small-2 be">
            <div class="box-cut">
                <a href="https://youtube.com">
                    <div class="box-cut2">
                        <p class="linkbox">
                            Youtube
                        </p>
                    </div>
                </a>
            </div> 
        </div>
    </div>

    <div id="seccol" class="row around-on-small between-on-large">
        <div class="column small-3 be"></div>
        <div class="column small-1 bf"></div>
        <div class="column small-2 be">
            <div class="box-cut">
                <a href="https://amazon.de">
                    <div class="box-cut2">
                        <p class="linkbox">
                            Amazon
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="column small-1 bf"></div>
        <div class="column small-2 be">
            <div class="box-cut">
                <a href="https://reddit.com">
                    <div class="box-cut2">
                        <p class="linkbox">
                            Reddit
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="column small-1 bf"></div>
        <div class="column small-2 be">
            <div class="box-cut">
                <a href="https://reddit.com">
                    <div class="box-cut2">
                        <p class="linkbox">
                            Reddit
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
  var tick;
  function stop() {
  clearTimeout(tick);
  }
  function clock() {
  var ut=new Date();
  var h,m,s;
  var time="        ";
  h=ut.getHours();
  m=ut.getMinutes();
  s=ut.getSeconds();
  if(s<=9) s="0"+s;
  if(m<=9) m="0"+m;
  if(h<=9) h="0"+h;
  time+=h+":"+m+":"+s;
  document.getElementById('clock').innerHTML=time;
  tick=setTimeout("clock()",1000); 
  }
</script>
</html>