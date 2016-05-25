<body>
<div class="container">
  <header>
    <nav class="navbar navbar-default">
  	<div class="container-fluid">
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample7">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  			<a class="navbar-brand" href="#">
  				タイトル
  			</a>
  		</div>

  		<div class="collapse navbar-collapse" id="navbarEexample7">
  			<ul class="nav navbar-nav">
  				<li><a href="<?php echo base_url('event/event_today');  ?>">本日のイベント</a></li>
  				<li><a href="<?php echo base_url('event/index'); ?>">イベント管理</a></li>
          <li><a href="<?php echo base_url('group/index'); ?>">グループ管理</a></li>
  				<li><a href="<?php echo base_url('user/index'); ?>">ユーザ管理</a></li>
  			</ul>
        <ul class="nav navbar-nav navbar-right">
  				<li class="dropdown">
  					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              山田太郎 <span class="caret"></span></a>
  					<ul class="dropdown-menu" role="menu">
  						<li><a href="<?php echo base_url('Session/logout'); ?>">ログアウト</a></li>
  					</ul>
  				</li>
  			</ul>
  		</div>
  	</div>
  </nav>
</header>
</div>
