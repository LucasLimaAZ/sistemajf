<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="public/assets/img/user.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?=$_SESSION['nome'];?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="treeview">
				<a href="#">
					<i class="fa fa-shopping-cart"></i> <span>Produtos</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="cadastro-produtos"><i class="fa fa-plus"></i> Cadastrar</a></li>
					<li><a href="baixa-produtos"><i class="fa fa-cart-arrow-down"></i> Dar baixa</a></li>
					<li><a href="vizualizar-produtos"><i class="fa fa-list"></i> Vizualizar produtos</a></li>
					<li><a href="vizualizar-baixas"><i class="fa fa-arrow-down"></i> Vizualizar baixas</a></li>
				</ul>
			</li>
		</ul>
	</section>
</aside>