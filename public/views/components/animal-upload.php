<div class="animal-container-main-photo-update" method="POST">Photo
  <form action="userAnimalUpload" method="POST" enctype="multipart/form-data">
    <?php
    if (isset($messages)) {
      foreach ($messages as $message) {
        echo $message;
      }
    }
    ?>
    <input type="file" name="file">
    <button type="submit" name="submit" class="animal-container-main-photo-update-upload">Upload</button>
  </form>
</div>