
<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<div class="all-content">
			<main class="content">
				<div class="container">
					<?php include ("include/breadcrumbs.html") ?>

					<h1>Оформление заказа</h1>

					<div class="sticky-container">
						<form action="#">
							<div class="clearfix">
								<div class="checkout-content">
									<div class="table-container">
										<table class="cart-table">
											<tr>
												<th>Фото</th>
												<th>Наименование товара</th>
												<th>Количество</th>
												<th>Цена</th>
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
													</div>
												</td>
												<td>
													<div class="cart-price">
														<div class="price arrow-left">18 999 р.</div>
													</div>
												</td>
											</tr>
										</table>
									</div><!-- /.table-container -->

									<div class="checkout-block current">
										<div class="header clearfix">
											<div class="step">1 шаг</div>
											<div class="text">Информация о плательщике</div>
											<a href="#" class="onwards">изменить</a>
										</div>
										<div class="checkout-inner">
											<div class="checkout-inner-block">
												<div class="row">
													<div class="size size-1">
														<div class="label">ФИО:</div>
														<input type="text">
													</div>
													<div class="size size-1">
														<div class="label">Электронная почта:</div>
														<input type="email">
													</div>
													<div class="size size-1">
														<div class="label">Контактный номер телефона:</div>
														<input type="tel">
													</div>
												</div>
											</div>
											<div class="checkout-inner-block">
												<div class="label">Комментарий к заказу:</div>
												<textarea></textarea>
											</div>
											<div class="step-next"><span>Следующий шаг</span></div>
										</div>
									</div><!-- /.checkout-block -->

									<div class="checkout-block">
										<div class="header clearfix">
											<div class="step">2 шаг</div>
											<div class="text">Служба доставки</div>
											<a href="#" class="onwards">изменить</a>
										</div>
										<div class="checkout-inner">
											<div class="checkout-inner-block">
												<div class="tabs-wrap clearfix">
													<ul class="tabs-list">
														<li class="current">
															<div class="radio-wrap">
																<input type="radio" name="delivery-btn" id="delivery-1" checked>
																<label for="delivery-1">
																	<span class="img aligner"><img src="images/delivery-1.png" alt=""></span>
																	<span class="text-inner aligner">Самовывоз</span>
																</label>
															</div>
														</li>
														<li>
															<div class="radio-wrap">
																<input type="radio" name="delivery-btn" id="delivery-2">
																<label for="delivery-2">
																	<span class="img aligner"><img src="images/delivery-2.png" alt=""></span>
																	<span class="text-inner aligner">Транспортная компания</span>
																</label>
															</div>
														</li>
													</ul>
													<div class="tabs-content">
														<div class="box box-visible">
															<div class="box-header">
					                                            <div class="img aligner"><img src="images/delivery-1.png" alt=""></div>
					                                            <div class="text-inner aligner">СПСР-Экспресс</div>
					                                        </div>
					                                        <div class="box-inner">
					                                        	<div class="box-info">
					                                        		<p>
						                                        		Курьерская доставка лично в руки от 1 дня. Возможен самовывоз с пункта выдачи.
						                                        	</p>
						                                        	<div class="box-more"><a href="#">Подробнее</a></div>
					                                        	</div>
					                                        	<div class="details clearfix">
						                                            <div class="item">
						                                                Стоимость: <strong>300 p</strong>
						                                            </div>
						                                            <div class="item">
						                                                Срок доставки: <strong>2-3 (дней)</strong>
						                                            </div>
						                                        </div>
					                                        </div>
														</div>
														<div class="box">
															<div class="box-header">
					                                            <div class="img aligner"><img src="images/delivery-2.png" alt=""></div>
					                                            <div class="text-inner aligner">СПСР-Экспресс</div>
					                                        </div>
					                                        <div class="box-inner">
					                                        	<div class="box-info">
					                                        		<p>
						                                        		Курьерская доставка лично в руки от 1 дня. Возможен самовывоз с пункта выдачи.
						                                        	</p>
						                                        	<div class="box-more"><a href="#">Подробнее</a></div>
					                                        	</div>
					                                        	<div class="details clearfix">
						                                            <div class="item">
						                                                Стоимость: <strong>300 p</strong>
						                                            </div>
						                                            <div class="item">
						                                                Срок доставки: <strong>2-3 (дней)</strong>
						                                            </div>
						                                        </div>
					                                        </div>
														</div>
													</div>
												</div>
											</div>
											<div class="step-next"><span>Следующий шаг</span></div>
										</div>
									</div><!-- /.checkout-block -->

									<div class="checkout-block">
										<div class="header clearfix">
											<div class="step">3 шаг</div>
											<div class="text">Адрес доставки</div>
											<a href="#" class="onwards">изменить</a>
										</div>
										<div class="checkout-inner">
											<div class="checkout-inner-block">
												<div class="row">
													<div class="size size-2">
														<div class="label">Введите название города:</div>
														<input type="text">
													</div>
													<div class="size size-2">
														<div class="label">Индекс:</div>
														<input type="text">
													</div>
												</div>
											</div>
											<div class="checkout-inner-block">
												<div class="row">
													<div class="size size-2">
														<div class="label">Улица:</div>
														<input type="text">
													</div>
													<div class="size size-3">
														<div class="label">Дом:</div>
														<input type="text">
													</div>
													<div class="size size-3">
														<div class="label">Корпус/Строение:</div>
														<input type="text">
													</div>
													<div class="size size-3">
														<div class="label">Квартира:</div>
														<input type="text">
													</div>
												</div>
											</div>
											<div class="step-next"><span>Следующий шаг</span></div>
										</div>
									</div><!-- /.checkout-block -->

									<div class="checkout-block">
										<div class="header clearfix">
											<div class="step">4 шаг</div>
											<div class="text">Оплата</div>
											<div class="onwards">далее</div>
										</div>
										<div class="checkout-inner">
											<div class="checkout-inner-block">
												<div class="tabs-wrap clearfix">
													<ul class="tabs-list tabs-pay">
														<li class="current">
															<div class="radio-wrap">
																<input type="radio" name="pay-btn" id="pay-1" checked>
																<label for="pay-1">
																	<span class="img aligner"><img src="images/visa-pay.png" alt=""></span>
																	<span class="text-inner aligner">Электронный платеж</span>
																</label>
															</div>
														</li>
														<li>
															<div class="radio-wrap">
																<input type="radio" name="pay-btn" id="pay-2">
																<label for="pay-2">
																	<span class="img aligner"><img src="images/payment.png" alt=""></span>
																	<span class="text-inner aligner">Оплата при получении</span>
																</label>
															</div>
														</li>
													</ul>
													<div class="tabs-content">
														<div class="box box-visible">
															<div class="box-header">
					                                            <div class="img aligner"><img src="images/visa-pay.png" alt=""></div>
					                                            <div class="text-inner aligner">Электронный платеж</div>
					                                        </div>
					                                        <div class="box-inner">
					                                        	<div class="box-title">Принимаются к оплате</div>
					                                        	<div class="payment-block">
					                                        		<div class="box-caption">Карты</div>
					                                        		<img src="images/payment-img.png" alt="">
					                                        	</div>
					                                        	<div class="payment-block">
					                                        		<div class="box-caption">Электронные деньги</div>
					                                        		<img src="images/payment-img-2.png" alt="">
					                                        	</div>
					                                        	<div class="payment-block">
					                                        		<div class="box-caption">Баланс телефона</div>
					                                        		<img src="images/payment-img-3.png" alt="">
					                                        	</div>
					                                        	<div class="payment-block"><a href="#">Подробнее о всех способах оплаты</a></div>
					                                        </div>
														</div>
														<div class="box">
															<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Знаках то себя рукописи моей, точках дал, своего вершину даже переписывается которой на берегу своих переулка, она заголовок! Осталось грустный, эта.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- /.checkout-block -->
								</div><!-- /.checkout-content -->

								<div class="sidebar-result">
									<div class="block-result-wrap">
										<div class="block-result">
											<div class="item">
												<div class="item-col-1">Товаров на сумму:</div>
												<div class="item-col-2">35 000 р.</div>
											</div>
											<div class="item">
												<div class="item-col-1">Доставка:</div>
												<div class="item-col-2">300 р.</div>
											</div>
											<div class="item sale">
												<div class="item-col-1">Скидка:</div>
												<div class="item-col-2">5 000 р.</div>
											</div>
										</div>
										<div class="block-result">
											<div class="item result-value">
												<div class="item-col-1">Итого:</div>
												<div class="item-col-2">35 000 р.</div>
											</div>
										</div>
									</div>
									<div class="links-result">
										<a href="#" class="item-1 icon">Подробнее о доставке</a>
										<a href="#" class="item-2 icon">Гарантии и возврат товара</a>
										<a href="#" class="item-3 icon">Подробнее об оплате</a>
									</div>
								</div><!-- /.sidebar-result -->
							</div><!-- /.clearfix -->
							<input class="submit" type="submit" value="Оформить">
						</form>
					</div><!-- /.sticky-container -->
					
				</div>
			</main><!-- /.content -->
		</div><!-- /.all-content -->
	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

<?php include ("include/foot.html") ?>
	