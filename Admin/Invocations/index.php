<?php
$timeStart = microtime(true);
session_start();

if (empty($_SESSION)) { exit(header("Location: ../../index.php")); }

require_once $_SESSION['File_Root']. '/Kernel/Include.php';
require_once $_SESSION['File_Root']. '/HTML/Header.php';

redirectToLogin($accountID, $linkRoot);
redirectToBattle($verifyBattle, $linkRoot);
hasAdmin($accountAccess); ?>

<br>
<div class="panel panel-warning">
	<div class="panel-heading"><h3 class="panel-title"><?= $ainvocation0 ?></h3></div>
	<div class="panel-body">
		<form method="POST" action="Invocation.php">
			<input class="btn btn-info" type="submit" value="<?= $ainvocation2 ?>">
		</form>
		<form method="POST" action="Add.php">
			<input class="btn btn-info" type="submit" value="<?= $ainvocation1 ?>">
		</form>
	</div>
</div>

<?php require_once $_SESSION['File_Root'] .'/HTML/Footer.php' ?>
