	<?php if (empty($pages)): ?>
		<p>No pages at the moment.</p>
	<?php else: ?>
<div id="container">
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Title</th>
					<th>Detail</th>
					<th></th>
					<th></th>
				</tr>
			</thead>

			<tbody style="padding:20px;">
				<?php foreach($pages as $page): ?>
					<tr>
						<td><?php echo e($page['name']); ?></td>
						<td><?php echo e($page['title']); ?></td>
						<td><?php echo e($page['detail']); ?></td>
						<td><a href="<?php echo BASE_URL;?>/admin/pages/edit.php?id=<?php echo e($page['id']); ?>">Edit</a></td>
						<td><a href="<?php echo BASE_URL;?>/admin/pages/delete.php?id=<?php echo e($page['id']); ?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
</div>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/pages/add.php">Add New Page</a>

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
table thead tr
{

	border-bottom:10px solid #000;
}
table th 
{
	text-align: center;
}
table tr
{
	margin-top:20px;
}
table td
{
	text-align:center;
	word-wrap:break-word;
	overflow-x:hidden;
	overflow-y:scroll;
}
</style>