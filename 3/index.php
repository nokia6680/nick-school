<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>
<main class="main">
        <section class="event ">
            <div class="event__pic olli"></div>
            <div class="event__pic lily"></div>
            <div class="event__pic pin"></div>
            <div class="event__pic pens"></div>

            <div class="event__wrapper">
                <h1 class="event__title">Пройди тест, чтобы узнать, кто ты из героев Nickelodeon</h1>
                <div class="event__test" num="1"><b class="event__test-count"><span class="event__test-count-current">1 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">Что возьмешь перекусить в школу?</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">Булку, котлету, салат, сыр, лук, помидор, кетчуп, горчицу, пикули и еще одну булку.</span></li>
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant">Принесу вкусняшки для всего класса!</span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant">Напиток, который превратит меня во взрослого, и тогда  мне не придется ходить в школу.</span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Молочный коктейль и 4 вида сыра</span></li>
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Достойную пищу настоящего рэпера.</span></li>
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant">Горячий преступный суп.</span></li>
                    </ul>
                </div>
                <div class="event__test" style="display: none" num="2"><b class="event__test-count"><span class="event__test-count-current">2 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">Что положишь в свой рюкзак?</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant">Любимые комиксы, зайца!</span></li>
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant">Жвачку, вдруг что случится. </span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant"> В моем рюкзаке и так есть целый мир.</span></li>
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Ручку, чтобы подписать контракт.</span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Браслет дружбы.</span></li>
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">Гидродинамическую лопатку с биоприбамбасами и турбоприводом, конечно же.</span></li>
                    </ul>
                </div>
                <div class="event__test" style="display: none" num="3"><b class="event__test-count"><span class="event__test-count-current">3 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">Что ты любишь в школе больше всего?</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">Быть дежурным!</span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant">Перемены.</span></li>
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Каникулы.</span></li>
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant">Встречаться со своими друзьями.</span></li>
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant">Работать в команде.</span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Пропускать через себя магию наук.</span></li>
                    </ul>
                </div>
                <div class="event__test" style="display: none" num="4"><b class="event__test-count"><span class="event__test-count-current">4 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">Какой предмет ты бы добавил в школьное расписание?</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant">Спасение города!</span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant">Изучение монстров и странных существ</span></li>
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Рэп-баттл.</span></li>
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">Охота на медуз.</span></li>
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant">Как ужиться со всеми родственниками.</span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Как определиться с будущей работой.</span></li>
                    </ul>
                </div>
                <div class="event__test" style="display: none" num="5"><b class="event__test-count"><span class="event__test-count-current">5 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">Чем займешься после школы?</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">Не знаю, а ты чем займёшься?</span></li>
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant">Почитаю комиксы, пошпионю за сестрами/братьями. </span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Пойду праздновать с друзьями Дружбилей.</span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant">Пойду играть в мяч-об-стену.</span></li>
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant">Буду бороться с преступностью.</span></li>
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Буду учить родных сленгу.</span></li>
                    </ul>
                </div>
                <div class="event__test" style="display: none" num="6"><b class="event__test-count"><span class="event__test-count-current">6 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">Если бы ты сам придумал школьную форму, как бы она
выглядела?</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">Брюки, рубашка, галстук и ботинки на шнурках.</span></li>
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Каждый должен носить то, что хочет.</span></li>
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant"> Ничего необычного: любимое поло, кеды и джинсы.</span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant">Что угодно, лишь бы чистое.</span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Цветные кеды, бомбер и футболку с крутой надписью.</span></li>
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant">Супергеройский костюм с моей собственной эмблемой.</span></li>
                    </ul>
                </div>
                <div class="event__test" style="display: none" num="7"><b class="event__test-count"><span class="event__test-count-current">7 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">На школьном празднике ты..</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">Съедаешь слишком много мороженого. </span></li>
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant"> Надеваешь маску и придумываешь секретное имя, чтобы тебя никто не узнал.</span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Участвуешь в танцевальном конкурсе и побеждаешь.</span></li>
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Читаешь рэп</span></li>
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant">Следишь, чтобы твои сёстры/братья не натворили чего-нибудь.</span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant">Участвуешь в школьной битве музыкальных групп.</span></li>
                    </ul>
                </div>
                <div class="event__test" style="display: none" num="8"><b class="event__test-count"><span class="event__test-count-current">8 </span>из <span class="event__test-count-all">8</span></b>
                    <h2 class="event__test-question">Что больше всего подходит тебе?</h2>
                    <ul class="event__test-list">
                        <li class="event__test-item" res="Дилан"><span class="event__test-variant">Я умный по жизни, а не книжкам.</span></li>
                        <li class="event__test-item" res="Губка"><span class="event__test-variant">У меня еще остались вопросы к этому камню, и эта травинка выглядит очень подозрительно!</span></li>
                        <li class="event__test-item" res="Линкольн"><span class="event__test-variant">Нашему классу дали задание написать сочинение о своей семье. Я уложусь в одно слово — ХАОС. </span></li>
                        <li class="event__test-item" res="Пресли"><span class="event__test-variant">Лучший способ заставить кого-то выполнить твою просьбу – съесть банку горчицы. </span></li>
                        <li class="event__test-item" res="Олли"><span class="event__test-variant">Нет ничего важнее друга и его мечты.</span></li>
                        <li class="event__test-item" res="Чапа"><span class="event__test-variant">Какао вкуснее после того, как поймаешь злодея. </span></li>
                    </ul>
                </div>
                <div class="event__info">
                    <h3 class="event__subtitle">Пройди тест до конца и участвуй в розыгрыше ежедневного приза</h3>
                    <p class="event__description">А если ответишь на вопрос творческого конкурса - то огромный рюкзак Nickelodeon, набитый подарками, может стать твоим!</p>
                </div>
            </div>
        </section>
        <section class="result reseted">
            <div class="result__wrapper">
                <div class="result__main">
                    <picture class="result__frame">
                        <source srcset="<?=SITE_TEMPLATE_PATH;?>/static/images/content/pers-1.webp" type="image/webp"><img class="result__frame-image --first" src="<?=SITE_TEMPLATE_PATH;?>/static/images/content/pers-1.png" alt="Спанч Боб">
                    </picture>
                    <h2 class="result__name">Ты - Губка Боб</h2>
                    <p class="result__description">Ты заботливый и дружелюбный, умеешь находить общий язык с любым человеком. Ты точно один из семейки Лаудов!</p>
                    <div class="result__share"><b class="result__share-name">Поделиться результатом:</b>
                        <div class="result__share-icons">
                            <li class="social__item"><a class="social__link social__link--in" href="#" target="_self" title="Instagram"></a></li>
                            <li class="social__item"><a class="social__link social__link--vk" href="#" target="_self" title="VK"></a></li>
                        </div>
                    </div><button class="result__reset" type="reset">Пройти ещё раз</button>
                </div>
                <div class="result__essay">
                    <h3 class="result__essay-title">Хочешь получить ещё больше призов?</h3>
                    <p class="result__essay-description">Расскажи, кто из героев Nickelodeon – лучший сосед по парте! </p><img class="result__essay-pic" src="<?=SITE_TEMPLATE_PATH;?>/static/images/content/backpack.svg" alt="Рюкзак"><a class="result__essay-link"
                        href="esse.html" target="_self">Участвовать</a>
                </div>
            </div>
        </section>
    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
