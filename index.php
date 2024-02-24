<!-- public/index.html -->

<!DOCTYPE html>
<html>
<head>
<title>Pusher WebRTC DataChannel Demo</title>
<!-- Bootstrap for general layout and styling -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Our WebRTC application styling -->
<link rel="stylesheet" type="text/css" href="style/datachannel-demo.css">
</head>
<style type="text/css">
  #platform{
    width: 100%;
    height: 100%;
    display: flex;
    

  }
  #profilepnl{
  width: 20%;
  color:blue;
  }
  #chatpnl{
    width: 80%;
    color: aqua;
  }
  </style>
<body>
  <!-- Zepto for AJAX -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/zepto/1.1.3/zepto.min.js"></script>

  <!-- Pusher for WebRTC signalling -->
  <script src="//js.pusher.com/2.2/pusher.js"></script>

  <!-- DataChannel.js for WebRTC functionality -->
  <script src="//webrtc-experiment.com/DataChannel.js"></script>

  <!-- Our WebRTC application -->
  <script src="js/datachannel-demo.js"></script>

  <div id="platform">
    <div id="header"></div>
    <div id="profilepnl"></div>
    <div id="chatpnl">
      <div id="chats"></div>
    </div>
      
      
  </div>
</body>
</html>
