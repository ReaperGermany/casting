<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once("php/core.php");

    $objCore = new Core();

    $objCore->initSessionInfo();
    $objCore->initFormController();

    if($objCore->getSessionInfo()->isLoggedIn())
    {
        if(isset($_POST['showContent'], $_POST['cnt']))
        {
            $content = (int)$_POST['cnt'];
            
            switch($content)
            {
                case 1:
                    echo '<div class="tabbable"> 
							  <ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab">Основное</a></li>
								<li><a href="#tab2" data-toggle="tab">Контакты</a></li>
								<li><a href="#tab3" data-toggle="tab">Интересы</a></li>
								<li><a href="#tab4" data-toggle="tab">Образование</a></li>
								<li><a href="#tab5" data-toggle="tab">Карьера</a></li>
							  </ul>
							  <div class="tab-content">
								<div class="tab-pane active" id="tab1">
								  <p>Я в Разделе 1.</p>
								</div>
								<div class="tab-pane" id="tab2">
								  <p>Привет, я в Разделе 2.</p>
								</div>
								<div class="tab-pane" id="tab3">
								  <p>Привет, я в Разделе 3.</p>
								</div>
								<div class="tab-pane" id="tab4">
								  <p>Привет, я в Разделе 4.</p>
								</div>
								<div class="tab-pane" id="tab5">
								  <p>Привет, я в Разделе 5.</p>
								</div>
							  </div>
					</div>';
                    break;
                case 2:
                    echo 'CONTENT #2';
                    break;
                case 3:
                    echo 'CONTENT #3';
                    break;
                case 4:
                    echo 'CONTENT #4';
                    break;
                case 5:
                    echo '<div class="tabbable"> 
							  <ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab">Основное</a></li>
								<li><a href="#tab2" data-toggle="tab">Контакты</a></li>
								<li><a href="#tab3" data-toggle="tab">Интересы</a></li>
								<li><a href="#tab4" data-toggle="tab">Образование</a></li>
								<li><a href="#tab5" data-toggle="tab">Карьера</a></li>
							  </ul>
							  <div class="tab-content">
								<div class="tab-pane active" id="tab1">
								  <form action="anketa.php" method="post">
										<table>
											<tr>
												<td><b>Фамилия:</b></td>
												<td><input type="text" name="family"/></td>
											</tr>
									
											<tr>
												<td><b>Имя:</b></td>
												<td><input type="text" name="name"/></td>
											</tr>
									
											<tr>
												<td><b>Отчество:</b></td>
												<td><input type="text" name="name2"/></td>
											</tr>
									
											<tr>
												<td><b>Псевдоним (если есть):</b></td>
												<td><input type="text" name="nickname"/></td>
											</tr>

											<tr>
												<td><b>Дата рождения:</b></td>
												<td><input type="text" size="1px" name="birth"/></td>
												<td><input type="text" size="1px" name="birth"/></td>
												<td><input type="text" size="1px" name="birth"/></td>
											</tr>

											<tr>
												<td><b>Семейное положение:</b></td>
												<td><select name="sp">
													<option value="1">Женат</option>
													<option value="2">Замужем</option>
													<option value="3">Не женат</option>
													<option value="4">Не замужем</option>
													<option value="5">В разводе</option>
													<option value="6">В поисках</option>
													<option value="7">Вдова</option>
													<option value="8">Вдовец</option>
													</select>
												</td>
											</tr>
											<tr>
												<td><b>Ваши Дети (номер анкеты на нашем сайте):</b></td>
												<td><input type="text" name="kids"/></td>
											</tr>
											<tr>
												<td><b>Наличие загран паспорта:</b></td>
												<td><input type = "radio" name = "pasport">Да</td><br>
												<td><b>Срок действия:</b></td>
												<td><input type="text" name="srok"/></td>
												<td><input type = "radio" name = "pasport">Нет</td>
											</tr>
											<tr>
												<td><b>Постоянное место нахождение:</b></td>
												<td><textarea name="location" heigth="20px" id="location">Ваш адрес.</textarea></td>
											</tr> 
											<tr>
												<td><b>Ближайшая станция метро:</b></td>
												<td><input type="text" name="metro"></td>
											</tr>
											<tr>
												<td><b>Цвет волос:</b></td>
												<td><input type="text" name="colorHear"></td>
											</tr>
											<tr>
												<td><b>Цвет глаз:</b></td>
												<td><input type="text" name="colorEye"/></td>
											</tr>
											<tr>
												<td><b>Рост:</b></td>
												<td><input type="text" name="stature"/></td>
											</tr>
											<tr>
												<td><b>Размер обуви:</b></td>
												<td><input type="text" name="shoeSize"/></td>
											</tr>
											<tr>
												<td><b>Размер одежды:</b></td>
												<td><input type="text" name="dressSize"/></td>
											</tr>
											<tr>
												<td><b>Размер головного убора:</b></td>
												<td><input type="text" name="hatSize"/></td>
											</tr>
											<tr>
												<td><b>Объем:</b></td>
												<td>Талия</td>
												<td><input type="text" size="1px" name="tal"/></td>
												<td>Грудь</td>
												<td><input type="text" size="1px" name="sis"/></td>
												<td>Бедра</td>
												<td><input type="text" size="1px" name="bedr"/></td>
											</tr>
											<tr>
												<td><b>Наличие тату:</b></td>
												<td><input type = "radio" name = "tatoo">Да</td>
												<td><b>Где:</b></td>
												<td><input type="text" name="tatooWhere"/></td>
												<td><input type = "radio" name = "tatoo">Нет</td>
											</tr>
											<tr>
												<td><b>Наличие шрамов: </b></td>
												<td><input type = "radio" name = "cicatrice">Да</td>
												<td><b>Где:</b></td>
												<td><input type="text" name="cicatriceWhere"/></td>
												<td><input type = "radio" name = "cicatrice">Нет</td>  
											</tr>
											<tr>
												<td><b>Приметные внешние особенности:</b></td>
												<td><textarea name="sings" heigth="20px" id="sings">Опишите Ваши особые приметы.</textarea></td>
											</tr>
											
										</table>
									</form>
																</div>
																<div class="tab-pane" id="tab2">
																  <p>Привет, я в Разделе 2.</p>
																</div>
																<div class="tab-pane" id="tab3">
																  <p>Привет, я в Разделе 3.</p>
																</div>
																<div class="tab-pane" id="tab4">
																  <p>Привет, я в Разделе 4.</p>
																</div>
																<div class="tab-pane" id="tab5">
																  <p>Привет, я в Разделе 5.</p>
																</div>
															  </div>
													</div>';
                    break;
                default:
                    echo 'CONTENT #DEFAULT';
                    break;
            }
        }
    }