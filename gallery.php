

<!DOCTYPE html>

<html>

<head>
  <title>Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

  <link rel="stylesheet" type="text/css "href="css/file.css">
  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <script src="jss/uikit-icons.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>

  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/uikit.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/hover-min.css" media="all">
</head>


<body>
<?php
include("include/header.php");
?>
  <!-- Section Service -->
<div class="container-fluid" style="background: url('img/back2.jpg') no-repeat; background-size: cover;padding: 20px;margin-bottom: 20px">
  <div class="popup-gallery row gallery">
      <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/coiffure1.jpeg" title="Coiffure 1"><img src="img/Gallerie/coiffure1.jpeg" width="200" height="200" class="img-thumbnail"></a>

      <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/coiffure2.jpg" title="Coiffure 2"><img src="img/Gallerie/coiffure2.jpg" width="200" height="200" class="img-thumbnail"></a>

      <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/coiffure3.jpeg" title="Coiffure 3"><img src="img/Gallerie/coiffure3.jpeg" width="200" height="200" class="img-thumbnail"></a>

       <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/spa1.jpg" title="SPA 1"><img src="img/Gallerie/spa1.jpg" width="200" height="200" class="img-thumbnail"></a>
      <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/spa2.jpeg" title="SPA 2"><img src="img/Gallerie/spa2.jpeg" width="200" height="200" class="img-thumbnail"></a>
      <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/spa3.jpeg" title="SPA 3"><img src="img/Gallerie/spa3.jpeg" width="200" height="200" class="img-thumbnail"></a>

       <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/soin1.jpeg" title="SOIN 1"><img src="img/Gallerie/soin1.jpeg" width="200" height="200" class="img-thumbnail"></a>
      <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/soin2.jpeg" title="SOIN 2"><img src="img/Gallerie/soin2.jpeg" width="200" height="200" class="img-thumbnail"></a>
      <a class="hvr-grow ml-2 mr-2" href="img/Gallerie/spa3.jpeg" title="SOIN 3"><img src="img/Gallerie/spa3.jpeg" width="200" height="200" class="img-thumbnail"></a>

      
  </div>
</div>



  <!-- footer  -->
<?php
include("include/footer.php");
?>


<script>
  $(document).ready(function() {
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') ;
      }
    }
  });
});
</script>