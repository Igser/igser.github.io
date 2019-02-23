<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Регистрация</h1>

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
									<div class="table-cell">Подтвердите пароль*</div>
									<div class="table-cell"><input type="password"  required></div>
								</div>
								<div class="table-row">
									<div class="table-cell">Тип пользователя</div>
									<div class="table-cell">
										<select name="" id="">
											<option value="">Физическое лицо</option>
											<option value="">Юридическое лицо</option>
										</select>
									</div>
								</div>
							</div><!-- /.inner -->
							<div class="form-block-check">
								<div class="has-input">
									<input type="checkbox" id="agree-1" checked>
									<label for="agree-1">Соглашаюсь на обработку моих персональных данных</label>
								</div>
								<div class="has-input">
									<input type="checkbox" id="agree-2" checked>
									<label for="agree-2">Я прочитал и согласен с пользовательским соглашением</label>
								</div>
								<div class="has-input">
									<input type="checkbox" id="agree-3" checked>
									<label for="agree-3">Хочу получать новости и скидки</label>
								</div>
								<div class="has-input">
									<input type="checkbox" id="agreements" checked>
									<label for="agreements">
										<span class="text">Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности <a href="#" class="see-more" rel="nofollow" target="_blank">Узнать больше</a></span>
									</label>
								</div>
							</div>
							<input type="submit" class="submit" value="Зарегистрироваться">
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
	