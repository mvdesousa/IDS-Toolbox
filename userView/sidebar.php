      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" id="scrollspy">

          <!-- search form -->
          <form action="/IDS-Toolbox/userView/search.php" method="get" id="searchBar" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
			
			<script>
				$(function() {
					$('.control-sidebar').removeClass("control-sidebar-dark");
					$('.control-sidebar').addClass("control-sidebar-light");
				});
				
				
				
				$("#searchBar").submit(function() {
					if ($(".input-group input.form-control").val() == ""){
						$("#myModalLabel").html("Empty Search Term");
						$("#myModalBody").html("Please enter a keyword in the search bar, for example; <strong>Hybris</strong>, <strong>WCMS</strong>, <strong>New Page</strong>, <strong>HTML5</strong>, etc... <br/><br/> <center><img src=\"/IDS-Toolbox/userView/pages/videoTutorial/screenShots/WCMS/searchExample/searchKeyWordExample.png\" /><br/>example</center> ");
						
						$("#myModal").modal('toggle');
						
						return false;
					}else{
						//success search
					}
				});
			</script>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
					<?php
					    require_once('/connection/pdo_db.php');
					 
					    $database= new core_db;
					    $hasil=$database->query('SELECT id as menu_item_id, parent_id as menu_parent_id, title as menu_item_name,url,menu_order,icon,target,iconpullright FROM adminlte.dynamic_menu WHERE status=1 ORDER BY menu_order');
					    
					    $refs = array();
					    $list = array();
					    while($data = $hasil->fetch(PDO::FETCH_ASSOC))
					    {
					        $thisref = &$refs[ $data['menu_item_id'] ];
					        $thisref['menu_parent_id'] = $data['menu_parent_id'];
					        $thisref['menu_item_name'] = $data['menu_item_name'];
					        $thisref['url'] = $data['url'];
					        $thisref['icon'] = $data['icon'];
					        $thisref['pullright'] = $data['iconpullright'];
					        if ($data['target'] > '') {
					        		$thisref['target'] = 'target="'.$data['target'].'"';
					        }
					        if ($data['menu_parent_id'] == 0)
					        {
					            $list[ $data['menu_item_id'] ] = &$thisref;
					        }
					        else
					        {
					            $refs[ $data['menu_parent_id'] ]['children'][ $data['menu_item_id'] ] = &$thisref;
					        }
					    }
					    function create_list( $arr ,$urutan)
					    {
					        if($urutan==0){
					             $html = "\n<ul class='sidebar-menu'>\n";
					        }else
					        {
					             $html = "\n<ul class='treeview-menu'>\n";
					        }
					        foreach ($arr as $key=>$v)
					        {
					            if (array_key_exists('children', $v))
					            {
					                $html .= "<li class='treeview'>\n";
					                $html .= '<a href="#">
					                                <i class="'.$v['icon'].'"></i>
					                                <span>'.$v['menu_item_name'].'</span>
					                                <i class="fa fa-angle-left pull-right"></i>
					                            </a>';
					 
					                $html .= create_list($v['children'],1);
					                $html .= "</li>\n";
					            }
					            else{
					                    $html .= '<li><a href="'.$v['url'].'" '.$v['target'].'>';
					                    if($urutan==0)
					                    {
					                        $html .=    '<i class="'.$v['icon'].'"></i>';
					                    }
					                    if($urutan==1)
					                    {
					                        $html .=    '<i class="'.$v['icon'].'"></i>';
					                    }
					                    $html .= '<span>'.$v['menu_item_name'].'</span>';
					                    if(!empty($v['pullright']))
					                    {
					                    		$html .=		'<small class="label pull-right bg-red">'.$v['pullright'].'</small>';
					                    }
					                    $html .= "</a></li>\n";
					            }
					        }
					        $html .= "</ul>\n";
					        return $html;
					    }
					    echo create_list( $list,0 );
					?>
        <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>