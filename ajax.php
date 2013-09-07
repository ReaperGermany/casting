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
                    echo '
                    <div class="invertedshiftdown">
                            <ul>
                                <li><a href="#rA" data-toggle="tab">Основное</a></li>
                                <li><a href="#rB" data-toggle="tab">Контакты</a></li>
                                <li><a href="#rC" data-toggle="tab">Интересы</a></li>
                                <li><a href="#rD" data-toggle="tab">Образование</a></li>
                                <li><a href="">Карьера</a></li>
                            </ul>
                    </div>
                        <div>
                            <div id="rA" class="tab-pane fade in active">
                                    Фамилия:
                                    Отчество:
                                    Псевдоним (если есть):
                                    Дата рождения:
                                    Семейное положение:
                                    Ваши Дети (номер анкеты на нашем сайте): 
                                    Телефон мобильный:
                                    Телефон дополнительный:
                                    Email:
                                    Сайт (если есть):
                                    Адрес Странички в соц сети (если есть):
                                    Наличие загран паспорта:
                                    Постоянное место нахождение:
                                    Ближайшая станция метро:
                                    Цвет волос:
                                    Цвет глаз:
                                    Рост:
                                    Размер обуви:
                                    Размер одежды:
                                    Размер головного убора:
                                    Объем:
                                    Наличие тату:
                                    Наличие шрамов: 
                                    Приметные внешние особенности:
                            </div>
                            <div id="rB" class="tab-pane fade" >
                                SDFSHDFKHSJKDF
                            </div>
                            <div id="rC" class="tab-pane fade" >
                                TAB #3
                            </div>
                            <div id="rD" class="tab-pane fade" >
                                TAB #4
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
                    echo 'CONTENT #5';
                    break;
                default:
                    echo 'CONTENT #DEFAULT';
                    break;
            }
        }
    }