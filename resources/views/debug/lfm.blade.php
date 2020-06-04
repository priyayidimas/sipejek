<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
</head>
<body>
    <div style="height: 600px;">
        <div id="fm"></div>
    </div>
</body>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      // set fm height
      document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');
  
      // Add callback to file manager
      fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
        window.opener.fmSetLink(fileUrl);
        window.close();
      });
    });
  </script>
</html>