<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Корзина</h1>

				<div class="content-block-1 clearfix">
					<div class="cart-table-wrap">
						<div class="table-container">
							<table class="cart-table">
								<tr>
									<th>Фото</th>
									<th>Наименование</th>
									<th>Количество</th>
									<th>Стоимость</th>
									<th>Удалить</th>
								</tr>
								<tr>
									<td>
										<div class="img"><a href="product.php"><img src="images/product-cart.jpg" alt=""></a></div>
									</td>
									<td>
										<div class="cart-details">
											<div class="title"><a href="#">Акриловая ванна Riho Miami 180</a></div>
											<div class="item">Код товара: <span>304521</span></div>
											<div class="item">Габариты (дшг): <span>180x80x43</span></div>
											<div class="item">Объем, л: <span>220</span></div>
										</div>
									</td>
									<td>
										<div class="count-wrap">
											<div class="count">
												<button class="count-btn"><i class="fa fa-minus-circled"></i></button>
												<input type="text" class="count-num" value="1">
												<button class="count-btn"><i class="fa fa-plus-circled"></i></button>
											</div>
											<div class="text">1 шт = 1 820 р.</div>
										</div>
									</td>
									<td>
										<div class="cart-price">
											<div class="price arrow-left">18 999 р.</div>
										</div>
									</td>
									<td>
										<div class="remove-btn-wrap">
											<div class="remove-btn"><i class="fa fa-trash-empty"></i></div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="img"><a href="product.php"><img src="images/img-nav.jpg" alt=""></a></div>
									</td>
									<td>
										<div class="cart-details">
											<div class="title"><a href="#">Акриловая ванна</a></div>
											<div class="item">Код товара: <span>304521</span></div>
											<div class="item">Габариты (дшг): <span>180x80x43</span></div>
											<div class="item">Объем, л: <span>220</span></div>
										</div>
									</td>
									<td>
										<div class="count-wrap">
											<div class="count">
												<button class="count-btn"><i class="fa fa-minus-circled"></i></button>
												<input type="text" class="count-num" value="1">
												<button class="count-btn"><i class="fa fa-plus-circled"></i></button>
											</div>
											<div class="text">1 шт = 1 820 р.</div>
										</div>
									</td>
									<td>
										<div class="cart-price">
											<div class="price arrow-left">180 999 р.</div>
										</div>
									</td>
									<td>
										<div class="remove-btn-wrap">
											<div class="remove-btn"><i class="fa fa-trash-empty"></i></div>
										</div>
									</td>
								</tr>
							</table>
						</div><!-- /.table-container -->

						<div class="content-cart-result">
							<div class="cart-result-top clearfix">
								<div class="left">
									<div class="promo-cart-btn">Есть купон</div>
									<form action="#" class="form-promo clearfix">
										<input type="text" class="text">
										<input type="submit" class="submit" value="Отправить">
									</form>
								</div>
								<div class="result-box right">
									<div class="aligner">
										<div class="result-title">Итого</div>
										<div class="result-subtitle">без доставки:</div>
									</div>
									<div class="aligner">
										<div class="price arrow-left">360 660 p.</div>
									</div>
								</div>
							</div>

							<div class="cart-result-bottom clearfix">
								<div class="right">
									<div class="aligner">
									<a href="#" class="reset-btn">
										<i class="fa fa-trash-empty"></i>
										<span>Очистить корзину</span>
									</a>
								</div>
								<div class="aligner"><a href="checkout.php" class="btn">Перейти к оформлению</a></div>
								</div>
							</div>
						</div><!-- /.content-cart-result -->

					</div><!-- /.cart-table-wrap -->

					<div class="refund-box icon">
						<div class="title">60 дней на возврат товара</div>
						<div class="text">
							Мы гарантируем надёжную защиту данных вашей банковской карты при оплате онлайн
						</div>
					</div>

				</div><!-- /.content-block-1 -->
			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

<?php include ("include/foot.html") ?>
	