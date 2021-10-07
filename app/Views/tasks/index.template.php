<?php  require_once 'app/Views/partials/header.template.php';
?>
<body>
<h1>Tasks</h1>(<a href="/tasks/create">Create</a>)
<div class="container">
    <table class="table" id="myTable">
        <tbody>


        <br><br>
<ul>
    <?php foreach ($tasks->getTasks() as $task):?>
    <li>
        <?php echo $task->getTitle(); ?>
        <small>
            (<?php echo $task->getCreatedAt(); ?>)
        </small>
<form method="post" action="/tasks/ <?php echo $task->getId(); ?>">
<button type="submit" onclick="return confirm('Are you shore?'); ">X</button>
</form>
    </li>
    <?php endforeach; ?>
</ul>
        </tbody>



    </table>
</body>
</html>