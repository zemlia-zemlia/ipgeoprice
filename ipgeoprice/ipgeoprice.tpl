
<div id="support_block">
    <div class="container">
        <ul class="row">
            <li class="col-xs-12 col-sm-4">
                <div class="out-sup"><em class="icon-support-service"><img src="http://magprofoto.ru/img/cms/Верхушка гео/1.jpg" width="50" height="50" /></em>
                    <div class="type-text">
                        <h4>{$contact_info.city} {$contact_info.tel}</h4>
                        <p><a id="select_city" href="#" onclick="selectSity();"><span style="text-decoration: underline;">Выбрать ваш город</span></a></p>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-4">
                <div class="out-sup"><em class="icon-support-service"><img src="http://magprofoto.ru/img/cms/Верхушка гео/2.jpg" width="50" height="50" /></em>
                    <div class="type-text">
                        <h4>{$contact_info.adres}</h4>{$contact_info.map}</div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-4">
                <div class="out-sup"><em class="icon-support-service"><img src="http://magprofoto.ru/img/cms/Верхушка гео/3.jpg" width="50" height="50" /></em>
                    <div class="type-text"> <h4>Время работы</h4><p>{$contact_info.time}</p></div>
                </div>
            </li>
        </ul>
    </div>

</div>
<div id="city1"></div>
<input type="hidden" id="poddomen" value="{$contact_info.poddomen}">











