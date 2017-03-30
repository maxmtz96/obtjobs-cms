
<h2>Edit Events</h2>

<div id="container">
	<form action="<?php echo BASE_URL; ?>/admin/pages/edit.php" method="POST" autocomplete="off">
		<label for="name">
			Name
			<input type="text" name="name" id="name" value="<?php echo e($pagesList['name']); ?>">
		</label>
		<label for="title">
			Title
			<input type="text" name="title" id="title" value="<?php echo e($pagesList['title']); ?>">
		</label>
		<label for="detail">
			Detail
			<textarea name="detail" id="detail" cols="30" rows="10"><?php echo e($pagesList['detail']); ?></textarea>
		</label>

		<input type="hidden" name="id" value="<?php echo $pagesList['id']; ?>">

		<input type="submit" value="Edit Event">
	</form>
</div>


<style type="text/css">
body
{
	font:1em "Helvetica", sans-serif;
	background-color:#edeff0;
	margin:0;
}
h2
{
	font-weight:200;
}

input,textarea { font-size:inherit; }
}

input[type="text"],textarea
{
	width:100%;
	padding:10px;
	box-sizing:border-box;
	border:1px solid #bbb;
}
label
{
	display:block;
	margin-bottom:20px;
}

table
{
	width:100%;
	table-layout:fixed;
	margin-bottom:20px;
}

table th 
{
	text-align: left;
}
</style>