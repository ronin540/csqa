<?php
include "includes/baseTop.php";

?>
<form action="/question/new/" method="post">
        <input type="hidden" name="csrfmiddlewaretoken" value="IsLI3VeCYJYTF0a63KjOAaQp1qgzM9b5MKRadUX9b7Y2E29Rw3mt9wQCdAoa5k5Y">
        <div class="form-group">
          <label for="title">Question</label>
          <input class="form-control" id="title" name="title" placeholder="Enter your question here." required="">
        </div>
        <div class="form-group">
          <label for="title">Details</label>
          <textarea class="form-control" id="body" name="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>

<?php
include "includes/baseBottom.php";
?>