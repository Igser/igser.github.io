<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Авторизация</h1>

				<div class="content-block-1 clearfix">
					<div class="form-block-wrap">
						<form action="#" class="form-block">
							<div class="table">
								<div class="table-row">
									<div class="table-cell">Email*</div>
									<div class="table-cell"><input type="email"  required></div>
								</div>
								<div class="table-row">
									<div class="table-cell">Пароль*</div>
									<div class="table-cell"><input type="password"  required></div>
								</div>
								<div class="table-row">
									<div class="table-cell"></div>
									<div class="table-cell">
										<div class="form-block-links">
											<a href="recovery.php" class="left">Восстановить пароль</a>
											<a href="registration.php" class="right">Зарегистрироваться</a>
										</div>
									</div>
								</div>
							</div><!-- /.inner -->
							<input type="submit" class="submit" value="Войти">
						</form>
					</div><!-- /.form-block-wrap -->

					<div class="content-social">
						<div class="title">Войти при помощи социальной сети</div>
						<div class="social">
							<a href="#"><i class="fa fa-vkontakte"></i></a>
							<a href="#"><i class="fa fa-in"></i></a>
							<a href="#"><i class="fa fa-odnoklassniki"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
					</div><!-- /.content-social -->
				</div><!-- /.content-block-1 -->
			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

<?php include ("include/foot.html") ?>
	