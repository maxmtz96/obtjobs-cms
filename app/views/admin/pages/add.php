<h2>Add page</h2>

<div id="container">	
	<form action="<?php echo BASE_URL; ?>/admin/pages/add.php" method="POST" enctype="multipart/form-data" autocomplete="off">
		<label for="name">
			Name
			<input type="text" name="name" id="name" value="">
		</label>
		
		<label for="Title">
			Title
			<input type="text" name="title" id="title" value="">
		</label>
		
		<label for="detail">
			Detail
			<textarea name="detail" id="detail" cols="30" rows="10"></textarea>
		</label>
		
		<input type="submit" value="Add Page">
	</form>

</div>
<style>
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