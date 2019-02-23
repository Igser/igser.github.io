<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Личный кабинет</h1>

				<div class="content-block-1 clearfix">
					<?php include ("include/account-box.html") ?>
					
					<div class="account-content">
						<div class="account-title">Настройка рассылок</div>

						<div class="has-input account-btn">
							<input type="checkbox" id="news" checked>
							<label for="news">
								<span class="title">Обзоры и новости</span>
								<span class="text">Горячие подробности о новых товарах</span>
							</label>
						</div>

						<div class="has-input account-btn">
							<input type="checkbox" id="sale" checked>
							<label for="sale">
								<span class="title">Акции и скидки</span>
								<span class="text">Все о распродажах и специальных предложениях</span>
							</label>
						</div>

						<div class="has-input account-btn">
							<input type="checkbox" id="special" checked
							>
							<label for="special">
								<span class="title">Специальные предложения</span>
								<span class="text">Уникальные уловия которые доступны только для определенных пользователей</span>
							</label>
						</div>
					</div>
				</div><!-- /.content-block-1 -->

			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

<?php include ("include/foot.html") ?>
	