<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form hx-post="/store.php">
    <input id="title" name="title" type="text" 
        hx-post="/validate" 
        hx-trigger="change"
    >
    <button type="submit">Submit</button>
</form>




<script src="https://unpkg.com/htmx.org@1.8.6"></script>
  <!-- have a button POST a click via AJAX -->
  <script id="flashy-template" type="text/template">
    <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
        <i class="material-icons">speaker_notes</i>
        <a href="#" class="flashy__body" target="_blank"></a>
    </div>
</script>

<script>
    flashy("{{ Session::get('flashy_notification.message') }}", "{{ Session::get('flashy_notification.link') }}");
</script>
  </button>
</body>
</html>