<?php
	require "../../config.php";

	$a = $_POST['data'];
	$sql = "select * from tbl_post where name like '%$a%'";
	$query = mysqli_query($db, $sql);
	$num = mysqli_num_rows($query);
	if($num > 0){
		while ($rows = mysqli_fetch_object($query)) {
?>
		<tr>
										<td><?php echo $rows->name; ?></td>
										<td><?php echo $rows->content; ?></td>
										<td><?php echo $rows->athour; ?></td>
										
										<td style="text-align: center;">
											<a href="admin.php?controller=add_edit_post&act=edit&id=<?php echo $rows->post_id; ?>" class="btn btn-default"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp;
											<a href="" onclick="return window.confirm('Are you sure ?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
										</td>
									</tr>
			<?php
		}
	}
?>