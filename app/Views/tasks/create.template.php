<?php  require_once 'app/Views/partials/header.template.php';
?>
<body>
<div class="container">
    <form id="form1" name="form1" method="post" action="">
        <table class="formatTblClass">

            <tr>
                <div id="myDIV" class="header">
                    <h2 style="margin:5px">My To Do List</h2>


                    <a href="/tasks">Back</a>
<br/>

  <form action="/tasks" method="post">
<label for="title">Title:</label>
      <input id="title" type="text" name="title"/>
      <button type="submit">Create</button>

  </form>




</div>


</body>
</html>