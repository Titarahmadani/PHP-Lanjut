<!DOCTYPE html>
<html>
<head>
  <title>Galeri Gambar</title>
  <style>
    .gallery {
      display: flex;
      flex-wrap: wrap;
    }
    .gallery img {
      margin: 5px;
      /* New: Set width and height using CSS */
      width: 110px;
      height: 75px;
      /* Optional: Maintain aspect ratio for distorted images */
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="gallery">
  <?php
  $fileList = glob('gambar/*');
  foreach ($fileList as $filename) {
    if (is_file($filename)) {
      echo '<img src="'.$filename.'" alt="Gambar">';
    }
  }
  ?>
</div>

</body>
</html>
