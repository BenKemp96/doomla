<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';

	require "databaselink.php";
	$query = "SELECT * FROM pagecontent WHERE page = '$page'";
	$result = $link->query($query);
	$pagecontent = $result->fetch_all(MYSQLI_ASSOC);

	$content = isset($pagecontent[0]['content']) ? $pagecontent[0]['content'] : 'No Content was found';

	function getContent() {
		global $content;
		return $content;
	}

	$query = "SELECT * FROM pagecontent ORDER BY menuorder";
	$result = $link->query($query);
	$menucontent = $result->fetch_all(MYSQLI_ASSOC);

	function getMenu() { 
		global $menucontent;
	?>
<ul>
	<?php foreach ($menucontent as $menuitem) { ?>
	<li class="<?= $active = ($_GET['page'] == $menuitem['page']) ? 'active' : 'inactive' ; ?>"><a href="?page=<?= $menuitem['page']?>"><?= $menuitem['menuoption'] ?></a></li>
	<?php } ?>
</ul>
<?php
	}

	$query = "SELECT menuoption FROM pagecontent WHERE page='$page'";
	$result = $link->query($query);
	$title = $result->fetch_all(MYSQLI_ASSOC);

	function getTitle() {
		global $title;
		return $title[0]['menuoption'];
	}

	require "templates/".$pagecontent[0]['template'].".php";
?>