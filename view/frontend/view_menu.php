<?php 
	$class = $this->model->get_all("select * from tbl_class order by class_id desc");
	foreach ($class as $rows):
 ?>

<li class="nav-item"><a href="index.php?controller=subject&id=<?php echo $rows->class_id; ?>"><?php echo $rows->class; ?></a>
						<button ><i class="fa fa-angle-down sidebar-icon-plus" id="12"> </i></button>

						<div class="dropdown-menu">
								<ul class="ul_dropdown">
									<div class="column">
										<?php $drop_menu = $this->model->get_all("select * from tbl_subject where class_id = $rows->class_id limit 0,7"); 
											foreach ($drop_menu as $drm): 
										?>
										<li><a href=""><?php echo $drm->name_subject; ?></a></li>
										<?php endforeach; ?>
									</div>
									<div class="column">
										<?php
										$drop_menu = $this->model->get_all("select * from tbl_subject where class_id = $rows->class_id limit 7,3");
										foreach ($drop_menu as $drm): 
										?>
										<li><a href=""><?php echo $drm->name_subject; ?></a></li>
										<?php endforeach; ?>
									</div>
									<div class="column1">
										<div class="banner_class">
											<div class="border"></div>
											<div class="number" ><?php echo $rows->class_id; ?></div>
										</div>
									</div>
								</ul>
							</div>
					</li>
					<?php endforeach; ?>