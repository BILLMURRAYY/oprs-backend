<!DOCTYPE html>
<?php include 'connect.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/decoupled-document/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/balloon/ckeditor.js"></script> -->



    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>
<body>
<form method="get" action="">
        <div class="banner">
          <h1>Add Report</h1>
        </div>
        <div class="item">
          <p>Detail</p>
          <div class="name-item">

          <!-- ckediter -->
          <!-- <div id="toolbar-container"></div>
          <div id="editor" name="editor"></div> -->
          <!-- summernote -->
          <textarea id="summernote" name="summernote" rows="4" cols="50">Hello Summernote</textarea>

          <!-- <div class="item">
            <textarea id="w3review" name="w3review" rows="15" cols="60">
            </textarea>
          </div> -->
            
          </div>
        </div>
        
        
        <div class="question">
          <p>File</p>
          <div class="question-answer">
            <div>
              <input type="file" value="none" id="checkbox_1" name="file"/>
            </div>
          </div>
        </div>

        
        
        <br>
        <div class="btn-block">
          <button type="submit" name="submit">Submit</button>
        </div>
      </form>

      <?php
      if(isset($_GET["submit"])){
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
      }
      ?>

      <script>
      // ClassicEditor
      //   .create( document.querySelector( '#editor' ) )
      //   .catch( error => {
      //       console.error( error );
      //   } );

      // DecoupledEditor
      //   .create( document.querySelector( '#editor' ) )
      //   .then( editor => {
      //       const toolbarContainer = document.querySelector( '#toolbar-container' );

      //       toolbarContainer.appendChild( editor.ui.view.toolbar.element );
      //   } )
      //   .catch( error => {
      //       console.error( error );
      //   } );

      // BalloonEditor
      //   .create( document.querySelector( '#editor' ) )
      //   .catch( error => {
      //       console.error( error );
      //   } );
        
      $(document).ready(function() {
        $('#summernote').summernote({
          height: 150
        });
      });
      </script>
</body>
</html>