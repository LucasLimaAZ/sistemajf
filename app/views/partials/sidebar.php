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
					<i class="fa fa-shopping-cart"></i> <span>Cadastrar Produtos</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="cadastro-produtos"><i class="fa fa-plus"></i> Novo</a></li>
					<li><a href="acrescentar-produtos"><i class="fa fa-arrow-up"></i> Acrescentar ao Estoque</a></li>
				</ul>
			</li>
		</ul>
		<ul class="sidebar-menu" data-widget="tree">
			<li>
				<a href="consultar-estoque">
					<i class="fa fa-list"></i> <span>Consultar Estoque</span>
				</a>
			</li>
			<li>
				<a href="editar-estoque">
					<i class="fa fa-edit"></i> <span>Editar Estoque</span>
				</a>
			</li>
			<li>
				<a href="baixas">
					<i class="fa fa-cart-arrow-down"></i> <span>Dar Baixa</span>
				</a>
			</li>
			<li>
				<a href="listar-baixas">
					<i class="fa fa-bar-chart"></i> <span>Listar Baixas</span>
				</a>
			</li>
		</ul>
	</section>
</aside>