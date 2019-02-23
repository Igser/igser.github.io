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
						<div class="account-title">Личные данные</div>

						<div class="account-data content-border">
							<div class="block clearfix">
								<div class="label-text">Электронная почта</div>
								<div class="input-box">
									<div class="aligner"><input type="text" class="data" value="mail@mail.ru" disabled></div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">Текущий пароль</div>
								<div class="input-box">
									<div class="aligner"><input type="password" class="data" value="*******" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">Название компании</div>
								<div class="input-box">
									<div class="aligner"><input type="text" class="data" value="ООО Антей" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">ИНН</div>
								<div class="input-box">
									<div class="aligner"><input type="text" class="data" value="785985858587500" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">Телефон</div>
								<div class="input-box">
									<div class="aligner"><input type="tel" class="data" value=" +7 951 059 35 47" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">Юридический адрес</div>
								<div class="input-box">
									<div class="aligner"><input type="text" class="data" value="г. Москва, ул. Победы, д. 20, стр. А, под. 1, кв. 29" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">Контактное лицо</div>
								<div class="input-box">
									<div class="aligner"><input type="text" class="data" value="Петр Иванов" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">КПП</div>
								<div class="input-box">
									<div class="aligner"><input type="text" class="data" value="876363456737" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block clearfix">
								<div class="label-text">Адрес доставки</div>
								<div class="input-box">
									<div class="aligner"><input type="text" class="data" value="г. Москва, ул. Победы, д. 20, стр. А, под. 1, кв. 29" disabled></div>
									<div class="aligner">
										<a href="#" class="btn-edit"></a>
										<a href="#" class="btn-check"></a>
									</div>
								</div>
							</div>
							<div class="block">
								<div class="add-address"><a href="#" class="icon">Добавить адрес доставки</a></div>
							</div>
							<div class="block">
								<div class="has-input">
									<input type="checkbox" id="agreements" checked>
									<label for="agreements">
										<span class="text">Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности <a href="#" class="see-more" rel="nofollow" target="_blank">Узнать больше</a></span>
									</label>
								</div>
							</div>
						</div><!-- /.content-border -->

						<div class="social-block-wrap">
							<div class="title">Привязка социальных сетей</div>
							<div class="subtitle">Привяжите учетную запись социальной сети и используйте ее для авторизации</div>
							<div class="social-block"><img src="images/social.jpg" alt=""></div>
						</div>
					</div>
				</div><!-- /.content-block-1 -->

			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

<?php include ("include/foot.html") ?>
	