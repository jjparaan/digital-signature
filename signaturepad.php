<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Free Online Signature Maker</title>
  <meta name="description" content="Signature Pad -created by Nijas">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="signature-pad.css">
  <link rel="icon" href="img/pwu.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css">
  <![endif]-->


</head>
<body onselectstart="return false">

  <div id="signature-pad" class="signature-pad">
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
     <section class="hello-container">

          <h1 id="username"><?php echo $_SESSION['name']; ?></h1>
     </section>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>
    <div class="signature-pad--body">
      <canvas></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description">Sign above</div>

      <div class="signature-pad--actions">
        <div>
          <button type="button" class="btn btn-default" data-action="clear">Clear</button>
          <button type="button" class="btn btn-default"  data-action="undo">Undo</button>
          <button type="button" class="btn btn-default hidden"    data-action="change-color">Change color</button>
        </div>
        <div>
		<button type="button" class="button save" data-action="save-svg" hidden=true></button>
		<button type="button" class="button save" data-action="save-png" hidden=true></button>
     <button type="button" class="btn btn-danger" data-action="save-jpg">Save</button>
     <button type="button" class="btn btn-success qr-trigger" data-toggle="modal" data-target="#generateQR">Generate QR Code</button>
                 </div>
      </div>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="generateQR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generate QR Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="qr-code-generator">

        <div class="qr-control-holder">
          <input type="textarea" class="qr-url" placeholder="URL or Text">
          <input type="number" class="qr-size" value="200" min="20" max="500">

          <button class="generate-qr-code">Generate</button>

        </div>

        
        <br>

        <div id="qrcode"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <div class="popup">
   

    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/130527/qrcode.js"></script>
  <script type="text/javascript" src="https://unpkg.com/popper.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="signature_pad.js"></script>
  <script src="app.js"></script>
  <script type="text/javascript">
  $('.qr-trigger').click(function(){
    var qrdname = $('#username').text();

    $('.qr-url').val(qrdname);
    $('.generate-qr-code').click();
  });
  $('.generate-qr-code').on('click', function(){

  // Clear Previous QR Code
  $('#qrcode').empty();

  // Set Size to Match User Input
  $('#qrcode').css({
  'width' : $('.qr-size').val(),
  'height' : $('.qr-size').val()
  })

  // Generate and Output QR Code
  $('#qrcode').qrcode({width: $('.qr-size').val(),height: $('.qr-size').val(),text: $('.qr-url').val()});

  });

  </script>
</body>
</html>