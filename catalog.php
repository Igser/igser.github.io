<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Акриловые ванны</h1>

				<div class="content-border clearfix">
					<aside class="sidebar-filter">
						<div class="filter-toggle">Фильтр</div>
						<div class="filter-box-wrap">
							<div class="filter__box">
								<div class="filter__box-inner">
									<div class="has-input filter-input">
										<input type="checkbox" id="sort-1" checked>
										<label for="sort-1">Новинки</label>
									</div>
									<div class="has-input filter-input">
										<input type="checkbox" id="sort-2">
										<label for="sort-2">Популярные товары</label>
									</div>
									<div class="has-input filter-input">
										<input type="checkbox" id="sort-3">
										<label for="sort-3">Распродажи</label>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-inner">
									<div class="title">Цена р.</div>
									<div class="filter__box-price">
										<div class="input-price">
	                                    	<input type="text" id="filterPrice1" placeholder="От">	
	                                    </div>
	                                    <div class="input-separator">-</div>
	                                    <div class="input-price">
	                                    	<input type="text" id="filterPrice2" placeholder="До">	
	                                    </div>
									</div>
									<div class="filter-slider">
		                            	<div id="slider"></div>
		                            </div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Бренд</div>
								<div class="filter__box-body">
									<form action="#" class="form-brands">
										<input type="search">
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-1">
											<label for="brand-1">Jacob Delafon</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-2">
											<label for="brand-2">Riho</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-3">
											<label for="brand-3">Triton</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-4">
											<label for="brand-4">Villeroy & Boch</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-5">
											<label for="brand-5">Alpen</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-6">
											<label for="brand-6">Excellent</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-7">
											<label for="brand-7">1MarKa</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-8">
											<label for="brand-8">Alpen</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-9">
											<label for="brand-9">Excellent</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="brand-10">
											<label for="brand-10">1MarKa</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Монтаж</div>
								<div class="filter__box-body">
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="montage-1">
											<label for="montage-1">Lorem ipsum dolor</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="montage-2">
											<label for="montage-2">Lorem ipsum</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Зона гидромассажа</div>
								<div class="filter__box-body">
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="area-1">
											<label for="area-1">Гидромассаж боковой</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="area-2">
											<label for="area-2">Гидромассаж ног</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="area-3" checked>
											<label for="area-3">Гидромассаж спины</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="area-4">
											<label for="area-4">Аэромассаж</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Форма</div>
								<div class="filter__box-body">
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="shape-1">
											<label for="shape-1">Прямоугольная</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="shape-2">
											<label for="shape-2">Ассиметричная</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="shape-3" checked>
											<label for="shape-3">Овальная</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="shape-4">
											<label for="shape-4">Четверть круга</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="shape-5">
											<label for="shape-5">Пятиугольная</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="shape-6">
											<label for="shape-6">Шестиугольная</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Цвет</div>
								<div class="filter__box-body">
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="color-1">
											<label for="color-1">Lorem ipsum dolor</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="color-2">
											<label for="color-2">Lorem ipsum</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Длина</div>
								<div class="filter__box-body">
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="length-1">
											<label for="length-1">Lorem ipsum dolor</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="length-2">
											<label for="length-2">Lorem ipsum</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Ширина</div>
								<div class="filter__box-body">
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="width-1">
											<label for="width-1">Lorem ipsum dolor</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="width-2">
											<label for="width-2">Lorem ipsum</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box">
								<div class="filter__box-header">Глубина</div>
								<div class="filter__box-body">
									<div class="filter-inner">
										<div class="has-input filter-input">
											<input type="checkbox" id="depth-1">
											<label for="depth-1">Lorem ipsum dolor</label>
										</div>
										<div class="has-input filter-input">
											<input type="checkbox" id="depth-2">
											<label for="depth-2">Lorem ipsum</label>
										</div>
									</div>
								</div>
							</div><!-- /.filter__box -->

							<div class="filter__box-btn">
								<a href="#" class="btn">Расширенный поиск</a>
								<div class="btn-reset"><a href="#"><span>&times;</span> Сбросить фильтр</a></div>
							</div>

						</div><!-- /.filter__box -->
					</aside>

					<div class="content-products">
						<div class="product-filter-wrap">
							<div class="product-filter-links">
								<div class="row">
									<div class="product__filter active">
										<a href="#">
											<span class="product__filter-img"><img src="images/link-29.jpg" alt=""></span>
											<span class="product__filter-title">Отдельно стоящие</span>
										</a>
									</div>
									<div class="product__filter">
										<a href="#">
											<span class="product__filter-img"><img src="images/link-30.jpg" alt=""></span>
											<span class="product__filter-title">Прямоугольные</span>
										</a>
									</div>
									<div class="product__filter">
										<a href="#">
											<span class="product__filter-img"><img src="images/link-31.jpg" alt=""></span>
											<span class="product__filter-title">Четверть круга</span>
										</a>
									</div>
									<div class="product__filter">
										<a href="#">
											<span class="product__filter-img"><img src="images/link-32.jpg" alt=""></span>
											<span class="product__filter-title">Ассиметричные</span>
										</a>
									</div>
									<div class="product__filter">
										<a href="#">
											<span class="product__filter-img"><img src="images/link-33.jpg" alt=""></span>
											<span class="product__filter-title">Овальные круглые</span>
										</a>
									</div>
								</div>
							</div>
							<div class="product-filter-btn clearfix">
								<div class="filter-btn-text">Сортировать</div>
								<div class="filter-btn-wrap">
									<div class="filter-btn active">По умолчанию</div>
									<div class="filter-btn">Сначала новинки</div>
									<div class="filter-btn">По популярности</div>
									<div class="filter-btn">Возрастанию цены</div>
									<div class="filter-btn">Убыванию цены</div>
								</div>
							</div>
						</div><!-- /.product-filter-wrap -->

						<div class="row">
							<div class="product__box">
								<div class="product__box-header">
									<div class="table">
										<div class="table-cell">
											<div class="mark mark-new"><span>new</span></div>
										</div>
										<div class="table-cell">
											<div class="city">
												<img src="images/flag.jpg" alt="" class="aligner">
												<div class="aligner">Нидерланды</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product__box-img">
									<a href="product.php"><img src="images/product.jpg" alt=""></a>
								</div>
								<div class="product__box-title"><a href="product.php">Акриловая ванна Riho Miami 180</a></div>
								<div class="product__box-info">
									<div>Код товара: <span>304521</span></div>
									<div>Габариты (дшг): <span>180x80x43</span></div>
									<div>Объем, л: <span>220</span></div>
								</div>
								<div class="product__box-price clearfix">
									<div class="left">
										<div class="price aligner">18 999 р.</div>
									</div>
									<a href="#" class="favorite-btn active"></a>
								</div>
								<div class="product__box-btn"><a href="#" class="btn">В корзину</a></div>
							</div><!-- /.product__box -->

							<div class="product__box">
								<div class="product__box-header">
									<div class="table">
										<div class="table-cell">
											<div class="mark mark-sale"><span>sale</span></div>
										</div>
										<div class="table-cell">
											<div class="city">
												<img src="images/flag.jpg" alt="" class="aligner">
												<div class="aligner">Нидерланды</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product__box-img">
									<a href="product.php"><img src="images/product.jpg" alt=""></a>
								</div>
								<div class="product__box-title"><a href="product.php">Акриловая ванна Riho Miami 180 Акриловая ванна Riho Miami 180</a></div>
								<div class="product__box-info">
									<div>Код товара: <span>304521</span></div>
									<div>Габариты (дшг): <span>180x80x43</span></div>
									<div>Объем, л: <span>220</span></div>
								</div>
								<div class="product__box-price clearfix">
									<div class="left">
										<div class="price aligner">180 999 р.</div>
										<div class="price-old aligner">200 000 р.</div>
									</div>
									<a href="#" class="favorite-btn"></a>
								</div>
								<div class="product__box-btn"><a href="#" class="btn">В корзину</a></div>
							</div><!-- /.product__box -->

							<div class="product__box">
								<div class="product__box-header">
									<div class="table">
										<div class="table-cell">
											<div class="mark mark-hit"><span>hit</span></div>
										</div>
										<div class="table-cell">
											<div class="city">
												<img src="images/flag.jpg" alt="" class="aligner">
												<div class="aligner">Нидерланды</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product__box-img">
									<a href="product.php"><img src="images/product.jpg" alt=""></a>
								</div>
								<div class="product__box-title"><a href="product.php">Акриловая ванна Riho Miami 180</a></div>
								<div class="product__box-info">
									<div>Код товара: <span>304521</span></div>
									<div>Габариты (дшг): <span>180x80x43</span></div>
									<div>Объем, л: <span>220</span></div>
									<div>Объем, л: <span>220</span></div>
								</div>
								<div class="product__box-price clearfix">
									<div class="left">
										<div class="price aligner">18 999 р.</div>
										<div class="price-old aligner">20 000 р.</div>
									</div>
									<a href="#" class="favorite-btn"></a>
								</div>
								<div class="product__box-btn"><a href="#" class="btn">В корзину</a></div>
							</div><!-- /.product__box -->

							<div class="product__box">
								<div class="product__box-header">
									<div class="table">
										<div class="table-cell">
											<div class="mark mark-new"><span>new</span></div>
										</div>
										<div class="table-cell">
											<div class="city">
												<img src="images/flag.jpg" alt="" class="aligner">
												<div class="aligner">Нидерланды</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product__box-img">
									<a href="product.php"><img src="images/product.jpg" alt=""></a>
								</div>
								<div class="product__box-title"><a href="product.php">Акриловая ванна Riho Miami 180</a></div>
								<div class="product__box-info">
									<div>Код товара: <span>304521</span></div>
									<div>Габариты (дшг): <span>180x80x43</span></div>
									<div>Объем, л: <span>220</span></div>
								</div>
								<div class="product__box-price clearfix">
									<div class="left">
										<div class="price aligner">18 999 р.</div>
									</div>
									<a href="#" class="favorite-btn active"></a>
								</div>
								<div class="product__box-btn"><a href="#" class="btn">В корзину</a></div>
							</div><!-- /.product__box -->

							<div class="product__box">
								<div class="product__box-header">
									<div class="table">
										<div class="table-cell">
											<div class="mark mark-sale"><span>sale</span></div>
										</div>
										<div class="table-cell">
											<div class="city">
												<img src="images/flag.jpg" alt="" class="aligner">
												<div class="aligner">Нидерланды</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product__box-img">
									<a href="product.php"><img src="images/product.jpg" alt=""></a>
								</div>
								<div class="product__box-title"><a href="product.php">Акриловая ванна Riho Miami 180 Акриловая ванна Riho Miami 180</a></div>
								<div class="product__box-info">
									<div>Код товара: <span>304521</span></div>
									<div>Габариты (дшг): <span>180x80x43</span></div>
									<div>Объем, л: <span>220</span></div>
								</div>
								<div class="product__box-price clearfix">
									<div class="left">
										<div class="price aligner">180 999 р.</div>
										<div class="price-old aligner">200 000 р.</div>
									</div>
									<a href="#" class="favorite-btn"></a>
								</div>
								<div class="product__box-btn"><a href="#" class="btn">В корзину</a></div>
							</div><!-- /.product__box -->

							<div class="product__box">
								<div class="product__box-header">
									<div class="table">
										<div class="table-cell">
											<div class="mark mark-hit"><span>hit</span></div>
										</div>
										<div class="table-cell">
											<div class="city">
												<img src="images/flag.jpg" alt="" class="aligner">
												<div class="aligner">Нидерланды</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product__box-img">
									<a href="product.php"><img src="images/product.jpg" alt=""></a>
								</div>
								<div class="product__box-title"><a href="product.php">Акриловая ванна Riho Miami 180</a></div>
								<div class="product__box-info">
									<div>Код товара: <span>304521</span></div>
									<div>Габариты (дшг): <span>180x80x43</span></div>
									<div>Объем, л: <span>220</span></div>
									<div>Объем, л: <span>220</span></div>
								</div>
								<div class="product__box-price clearfix">
									<div class="left">
										<div class="price aligner">18 999 р.</div>
										<div class="price-old aligner">20 000 р.</div>
									</div>
									<a href="#" class="favorite-btn"></a>
								</div>
								<div class="product__box-btn"><a href="#" class="btn">В корзину</a></div>
							</div><!-- /.product__box -->
						</div>

						<?php include ("include/pagination.html") ?>
					</div><!-- /.content-products -->
				</div><!-- /.content-border -->

				<div class="content-border">
					<div class="heading-1">Акриловые ванны</div>
					<p>
						Мебельный универмаг The Furnish представляет вниманию покупателей великолепный выбор роскошной и практичной мебели, выполненной в различных стилевых решениях. Эстетически выдержанные, шикарные конструкции характеризуются абсолютным качеством и приемлемой ценой.  Благодаря выверенным формам и безупречной эргономике предметов интерьера можно эффективно проектировать пространство, не теряя при этом ни сантиметра полезной площади. Покупатель, планируя обстановку комнаты, может выбрать именно те предметы, которые максимально соответствуют его индивидуальным потребностям и личному вкусу.  Мы предлагаем выгодно купить красивую и комфортную мебель для любой комнаты, будь это классическая гостиная, ванная в стиле ретро или футуристическая спальня.
					</p>
				</div><!-- /.content-border -->
			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

<?php include ("include/foot.html") ?>
	