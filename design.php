<?php
    include 'header.php';
?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-80">
                                <h2>Дизайн-проектирование под ключ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Hero End -->

        <!--? Intro Start -->
        <div class="dpage-intro">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <span class="dpage-eyebrow">Дизайн · Концепция · Воплощение</span>
                        <h2 class="dpage-intro-h2">Пространство,<br>рождённое<br><em>из идеи</em></h2>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="dpage-intro-right">
                            <p>Дизайн интерьера — это продуманная система, где каждый элемент работает на атмосферу, комфорт и характер пространства. Мы создаём интерьеры, которые отражают личность владельца — от первого эскиза до финальной расстановки мебели.</p>
                            <div class="dpage-stats">
                                <div class="dpage-stat"><strong>80+</strong><span>Дизайн-проектов</span></div>
                                <div class="dpage-stat"><strong>7 лет</strong><span>Опыта</span></div>
                                <div class="dpage-stat"><strong>100%</strong><span>3D-визуализация</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro End -->

        <!--? Portfolio Start -->
        <div class="dpage-portfolio">
            <div class="container">
                <div class="dpage-portfolio-header">
                    <div>
                        <span class="dpage-eyebrow">Наши работы</span>
                        <h2 class="dpage-section-h2">Реализованные проекты</h2>
                    </div>
                </div>
            </div>

            <!-- ═══ PROJECT 1 ═══ -->
            <div class="dproject mb-5">
                <div class="container">
                    <div class="dproject-inner">

                        <div class="dproject-slider" id="dslider-0">
                            <div class="dslider-track">
                                <div class="dslide"><img src="assets/img/integra/projects/kislarod/4.jpg" alt="ЖК Кислород — гостиная"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/kislarod/1.jpg" alt="ЖК Кислород — спальня"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/kislarod/2.jpg" alt="ЖК Кислород — кухня"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/kislarod/3.jpg" alt="ЖК Кислород — ванная"></div>
                            </div>
                            <div class="dslider-thumbs">
                                <div class="dthumb active" onclick="dGoTo(0,0)"><img src="assets/img/integra/projects/kislarod/4.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(0,1)"><img src="assets/img/integra/projects/kislarod/1.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(0,2)"><img src="assets/img/integra/projects/kislarod/2.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(0,3)"><img src="assets/img/integra/projects/kislarod/3.jpg" alt=""></div>
                            </div>
                            <div class="dslider-arrows">
                                <button onclick="dPrev(0)">&#8592;</button>
                                <span class="dslider-counter"><span class="dcur">1</span> / <span class="dtot">4</span></span>
                                <button onclick="dNext(0)">&#8594;</button>
                            </div>
                        </div>

                        <div class="dproject-info">
                            <div>
                                <span class="dproject-tag">Жилой комплекс · Дизайн интерьера</span>
                                <h3>Интерьер<br>ЖК Кислород</h3>
                                <div class="dproject-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Ташкент, Юнусабадский район, ЖК «Кислород»</span>
                                </div>
                                <div class="dproject-divider"></div>
                                <p>Трёхкомнатная квартира в стиле современного минимализма. Светлая палитра, натуральный дуб и матовые поверхности создают спокойную атмосферу. Панорамные окна стали главным акцентом — интерьер намеренно не перегружен декором, чтобы вид на город оставался в центре внимания.</p>
                            </div>
                            <div>
                                <div class="dproject-meta-grid">
                                    <div class="dpm-item"><label>Площадь</label><span>87 м²</span></div>
                                    <div class="dpm-item"><label>Стиль</label><span>Минимализм</span></div>
                                    <div class="dpm-item"><label>Тип объекта</label><span>Новостройка</span></div>
                                    <div class="dpm-item"><label>Срок проекта</label><span>6 недель</span></div>
                                </div>
                                <a href="work.php" class="dproject-btn">Посмотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ═══ PROJECT 2 ═══ -->
            <div class="dproject mb-5 dproject--alt">
                <div class="container">
                    <div class="dproject-inner">

                        <div class="dproject-info">
                            <div>
                                <span class="dproject-tag">Жилой комплекс · Авторский дизайн</span>
                                <h3>Интерьер ЖК<br>Паркентский</h3>
                                <div class="dproject-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Ташкент, Мирзо-Улугбекский район, ЖК «Паркентский»</span>
                                </div>
                                <div class="dproject-divider"></div>
                                <p>Двухкомнатная квартира с открытой планировкой в стиле contemporary. Кухня-гостиная объединена в единое пространство со скрытым освещением и встроенным гарнитуром. Все материалы подобраны в тёплом бежево-терракотовом тоне.</p>
                            </div>
                            <div>
                                <div class="dproject-meta-grid">
                                    <div class="dpm-item"><label>Площадь</label><span>72 м²</span></div>
                                    <div class="dpm-item"><label>Стиль</label><span>Contemporary</span></div>
                                    <div class="dpm-item"><label>Тип объекта</label><span>Новостройка</span></div>
                                    <div class="dpm-item"><label>Срок проекта</label><span>5 недель</span></div>
                                </div>
                                <a href="work.php" class="dproject-btn">Посмотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="dproject-slider" id="dslider-1">
                            <div class="dslider-track">
                                <div class="dslide"><img src="assets/img/integra/projects/jk-parkentskiy/5.jpg" alt="ЖК Паркентский — гостиная"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/jk-parkentskiy/1.jpg" alt="ЖК Паркентский — спальня"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/jk-parkentskiy/2.jpg" alt="ЖК Паркентский — кухня"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/jk-parkentskiy/3.jpg" alt="ЖК Паркентский — коридор"></div>
                            </div>
                            <div class="dslider-thumbs">
                                <div class="dthumb active" onclick="dGoTo(1,0)"><img src="assets/img/integra/projects/jk-parkentskiy/5.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(1,1)"><img src="assets/img/integra/projects/jk-parkentskiy/1.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(1,2)"><img src="assets/img/integra/projects/jk-parkentskiy/2.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(1,3)"><img src="assets/img/integra/projects/jk-parkentskiy/3.jpg" alt=""></div>
                            </div>
                            <div class="dslider-arrows">
                                <button onclick="dPrev(1)">&#8592;</button>
                                <span class="dslider-counter"><span class="dcur">1</span> / <span class="dtot">4</span></span>
                                <button onclick="dNext(1)">&#8594;</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ═══ PROJECT 3 ═══ -->
            <div class="dproject mb-5">
                <div class="container">
                    <div class="dproject-inner">

                        <div class="dproject-slider" id="dslider-2">
                            <div class="dslider-track">
                                <div class="dslide"><img src="assets/img/integra/projects/royal-house/7.jpg" alt="Royal House — гостиная"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/royal-house/5.jpg" alt="Royal House — спальня"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/royal-house/1.jpg" alt="Royal House — кухня"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/royal-house/3.jpg" alt="Royal House — ванная"></div>
                            </div>
                            <div class="dslider-thumbs">
                                <div class="dthumb active" onclick="dGoTo(2,0)"><img src="assets/img/integra/projects/royal-house/7.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(2,1)"><img src="assets/img/integra/projects/royal-house/5.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(2,2)"><img src="assets/img/integra/projects/royal-house/1.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(2,3)"><img src="assets/img/integra/projects/royal-house/3.jpg" alt=""></div>
                            </div>
                            <div class="dslider-arrows">
                                <button onclick="dPrev(2)">&#8592;</button>
                                <span class="dslider-counter"><span class="dcur">1</span> / <span class="dtot">4</span></span>
                                <button onclick="dNext(2)">&#8594;</button>
                            </div>
                        </div>

                        <div class="dproject-info">
                            <div>
                                <span class="dproject-tag">Элитный комплекс · Дизайнерский ремонт</span>
                                <h3>Интерьер<br>Royal House</h3>
                                <div class="dproject-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Ташкент, Шайхантахурский район, ЖК «Royal House»</span>
                                </div>
                                <div class="dproject-divider"></div>
                                <p>Трёхкомнатная квартира в современной классике с тёмными акцентами. Натуральный мрамор, массив ореха в мебели, освещение на заказ. Мастер-спальня с гардеробной и две детских комнаты с индивидуальным дизайном для каждого ребёнка.</p>
                            </div>
                            <div>
                                <div class="dproject-meta-grid">
                                    <div class="dpm-item"><label>Площадь</label><span>140 м²</span></div>
                                    <div class="dpm-item"><label>Стиль</label><span>Современная классика</span></div>
                                    <div class="dpm-item"><label>Тип объекта</label><span>Новостройка</span></div>
                                    <div class="dpm-item"><label>Срок проекта</label><span>8 недель</span></div>
                                </div>
                                <a href="work.php" class="dproject-btn">Посмотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ═══ PROJECT 4 ═══ -->
            <div class="dproject dproject--alt mb-5">
                <div class="container">
                    <div class="dproject-inner">

                        <div class="dproject-info">
                            <div>
                                <span class="dproject-tag">Частный дом · Дизайн под ключ</span>
                                <h3>Частный дом<br>в Мирзо-Улугбеке</h3>
                                <div class="dproject-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Ташкент, Мирзо-Улугбекский район, массив Карасу</span>
                                </div>
                                <div class="dproject-divider"></div>
                                <p>Двухэтажный дом с полным дизайном всех помещений — от входной группы до кровли. Тёплый скандинавский интерьер с натуральным деревом и камнем. Проект включал дизайн фасада, ландшафта и ночного освещения территории.</p>
                            </div>
                            <div>
                                <div class="dproject-meta-grid">
                                    <div class="dpm-item"><label>Площадь</label><span>220 м²</span></div>
                                    <div class="dpm-item"><label>Стиль</label><span>Скандинавский</span></div>
                                    <div class="dpm-item"><label>Тип объекта</label><span>Частный дом</span></div>
                                    <div class="dpm-item"><label>Срок проекта</label><span>10 недель</span></div>
                                </div>
                                <a href="work.php" class="dproject-btn">Посмотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="dproject-slider" id="dslider-3">
                            <div class="dslider-track">
                                <div class="dslide"><img src="assets/img/integra/banner/1.jpg" alt="Частный дом — фасад"></div>
                                <div class="dslide"><img src="assets/img/gallery/gallery4.png" alt="Частный дом — гостиная"></div>
                                <div class="dslide"><img src="assets/img/integra/projects/royal-house/5.jpg" alt="Частный дом — кухня"></div>
                            </div>
                            <div class="dslider-thumbs">
                                <div class="dthumb active" onclick="dGoTo(3,0)"><img src="assets/img/integra/banner/1.jpg" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(3,1)"><img src="assets/img/gallery/gallery4.png" alt=""></div>
                                <div class="dthumb" onclick="dGoTo(3,2)"><img src="assets/img/integra/projects/royal-house/5.jpg" alt=""></div>
                            </div>
                            <div class="dslider-arrows">
                                <button onclick="dPrev(3)">&#8592;</button>
                                <span class="dslider-counter"><span class="dcur">1</span> / <span class="dtot">3</span></span>
                                <button onclick="dNext(3)">&#8594;</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="text-center pt-30 pb-80">
                <a href="#" class="btn">Загрузить еще</a>
            </div>
        </div>
        <!-- Portfolio End -->

        <!--? Services Start -->
        <div class="dpage-services">
            <div class="container">
                <div class="row align-items-end mb-55">
                    <div class="col-lg-5">
                        <span class="dpage-eyebrow">Что мы предлагаем</span>
                        <h2 class="dpage-section-h2">Услуги<br>дизайн-студии</h2>
                    </div>
                    <div class="col-lg-7">
                        <p class="dpage-section-p">Полный спектр дизайнерских услуг — от концепции до авторского надзора. Каждая услуга может быть заказана отдельно или в рамках комплексного проекта.</p>
                    </div>
                </div>
                <div class="ds2-grid">
                    <div class="ds2-card">
                        <div class="ds2-img"><img src="assets/img/gallery/services1.png" alt="Световой дизайн интерьера"></div>
                        <div class="ds2-body">
                            <div class="ds2-icon"><i class="fas fa-lightbulb"></i></div>
                            <h3><a href="services.php">Световой дизайн</a></h3>
                            <p>Многоуровневые световые сценарии, которые формируют атмосферу и подчёркивают архитектуру пространства.</p>
                            <a href="services.php" class="ds2-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="ds2-card ds2-card--featured">
                        <div class="ds2-img"><img src="assets/img/gallery/services2.png" alt="Дизайн интерьера квартиры Ташкент"></div>
                        <div class="ds2-body">
                            <div class="ds2-icon"><i class="fas fa-pencil-ruler"></i></div>
                            <h3><a href="services.php">Дизайн интерьера</a></h3>
                            <p>Авторский дизайн-проект с 3D-визуализацией, полным пакетом чертежей и комплектацией под ключ.</p>
                            <a href="services.php" class="ds2-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="ds2-card">
                        <div class="ds2-img"><img src="assets/img/gallery/services3.png" alt="Дизайн офисов Ташкент"></div>
                        <div class="ds2-body">
                            <div class="ds2-icon"><i class="fas fa-building"></i></div>
                            <h3><a href="services.php">Дизайн офисов</a></h3>
                            <p>Коммерческие пространства, где эстетика поддерживает продуктивность. Учитываем бренд и рабочие процессы.</p>
                            <a href="services.php" class="ds2-link">Подробнее <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

    </main>

<style>
/* ── INTRO ── */
.dpage-intro {
    padding: 80px 0 70px;
    border-bottom: 1px solid #1e1e1e;
}
.dpage-eyebrow {
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #c0392b;
    display: block;
    margin-bottom: 18px;
}
.dpage-intro-h2 {
    font-size: clamp(34px, 4.5vw, 58px);
    font-weight: 300;
    color: #fff;
    line-height: 1.1;
    letter-spacing: -1px;
    margin: 0;
}
.dpage-intro-h2 em {
    font-style: italic;
    color: #c0392b;
}
.dpage-intro-right { padding-left: 10px; }
.dpage-intro-right p {
    font-size: 14px;
    line-height: 1.9;
    color: #777;
    margin-bottom: 32px;
}
.dpage-stats {
    display: flex;
    border: 1px solid #1e1e1e;
}
.dpage-stat {
    flex: 1;
    padding: 22px 24px;
    border-right: 1px solid #1e1e1e;
}
.dpage-stat:last-child { border-right: none; }
.dpage-stat strong {
    display: block;
    font-size: 30px;
    font-weight: 700;
    color: #fff;
    line-height: 1;
    margin-bottom: 5px;
}
.dpage-stat span {
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #555;
}
@media (max-width: 991px) {
    .dpage-intro-right { padding-left: 0; margin-top: 36px; }
}
@media (max-width: 480px) {
    .dpage-stats { flex-direction: column; }
    .dpage-stat { border-right: none; border-bottom: 1px solid #1e1e1e; }
    .dpage-stat:last-child { border-bottom: none; }
}

/* ── PORTFOLIO ── */
.dpage-portfolio { padding-top: 80px; }
.dpage-portfolio-header {
    margin-bottom: 50px;
    padding-bottom: 36px;
    border-bottom: 1px solid #1e1e1e;
}
.dpage-section-h2 {
    font-size: clamp(26px, 3vw, 42px);
    font-weight: 700;
    color: #fff;
    line-height: 1.1;
    margin: 0;
}
.dpage-section-p {
    font-size: 13px;
    line-height: 1.85;
    color: #666;
    margin: 0;
    padding-top: 34px;
}
@media (max-width: 768px) {
    .dpage-section-p { padding-top: 14px; }
}

/* ── PROJECT ── */
.dproject { padding-bottom: 3px; }

.dproject-inner {
    display: flex;
    border: 1px solid #1e1e1e;
    background: #111;
    overflow: hidden;
}
.dproject--alt .dproject-inner { flex-direction: row-reverse; }
@media (max-width: 991px) {
    .dproject-inner,
    .dproject--alt .dproject-inner { flex-direction: column; }
}

/* ── SLIDER ── */
.dproject-slider {
    flex: 0 0 58%;
    position: relative;
    overflow: hidden;
    background: #000;
    user-select: none;
}
@media (max-width: 991px) {
    .dproject-slider { flex: none; height: 300px; }
}

.dslider-track {
    display: flex;
    height: 500px;
    transition: transform 0.65s cubic-bezier(0.77, 0, 0.18, 1);
}
@media (max-width: 991px) {
    .dslider-track { height: 300px; }
}
.dslide { min-width: 100%; overflow: hidden; }
.dslide img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
}

/* Thumbnails strip */
.dslider-thumbs {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    display: flex;
    gap: 2px;
    padding: 2px;
    background: rgba(0,0,0,0.55);
    backdrop-filter: blur(6px);
}
.dthumb {
    flex: 1;
    height: 52px;
    overflow: hidden;
    cursor: pointer;
    opacity: 0.4;
    border: 2px solid transparent;
    transition: opacity 0.25s, border-color 0.25s;
}
.dthumb.active { opacity: 1; border-color: #c0392b; }
.dthumb:hover { opacity: 0.75; }
.dthumb img { width: 100%; height: 100%; object-fit: cover; display: block; }

/* Prev/next arrows + counter */
.dslider-arrows {
    position: absolute;
    top: 18px; right: 18px;
    display: flex;
    align-items: center;
    gap: 8px;
    z-index: 5;
}
.dslider-arrows button {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: rgba(192,57,43,0.88);
    border: none; color: #fff;
    font-size: 15px; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: background 0.2s, transform 0.15s;
}
.dslider-arrows button:hover { background: #c0392b; transform: scale(1.1); }
.dslider-counter {
    font-size: 11px; font-weight: 600; letter-spacing: 1px;
    color: rgba(255,255,255,0.65);
    background: rgba(0,0,0,0.5);
    padding: 4px 10px; border-radius: 20px;
}

/* ── INFO PANEL ── */
.dproject-info {
    flex: 1;
    padding: 42px 44px 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
@media (max-width: 1200px) { .dproject-info { padding: 30px 28px; } }

.dproject-tag {
    font-size: 9px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #c0392b;
    display: block;
    margin-bottom: 14px;
}
.dproject-info h3 {
    font-size: clamp(22px, 2.5vw, 34px);
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 14px;
}
.dproject-address {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 12px;
    color: #555;
    margin-bottom: 18px;
}
.dproject-address i { color: #c0392b; font-size: 11px; flex-shrink: 0; margin-top: 2px; }
.dproject-divider { width: 32px; height: 2px; background: #c0392b; margin-bottom: 18px; }
.dproject-info p {
    font-size: 13px;
    line-height: 1.85;
    color: #777;
    margin-bottom: 0;
}

/* Meta grid */
.dproject-meta-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    border: 1px solid #1e1e1e;
    margin: 24px 0 24px;
}
.dpm-item {
    padding: 13px 16px;
    border-right: 1px solid #1e1e1e;
    border-bottom: 1px solid #1e1e1e;
    transition: background 0.2s;
}
.dpm-item:nth-child(2n) { border-right: none; }
.dpm-item:nth-last-child(-n+2) { border-bottom: none; }
.dpm-item:hover { background: #161616; }
.dpm-item label {
    font-size: 9px; letter-spacing: 2px;
    text-transform: uppercase; color: #444;
    display: block; margin-bottom: 4px;
}
.dpm-item span { font-size: 13px; font-weight: 600; color: #ccc; }

.dproject-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
    border: 1px solid #2a2a2a;
    padding: 13px 20px;
    align-self: flex-start;
    transition: border-color 0.2s;
}
.dproject-btn i {
    width: 24px; height: 24px;
    border-radius: 50%;
    background: #c0392b;
    display: flex; align-items: center; justify-content: center;
    font-size: 12px;
    transition: transform 0.2s;
}
.dproject-btn:hover { border-color: #c0392b; color: #fff; text-decoration: none; }
.dproject-btn:hover i { transform: translateX(3px); }

/* ── SERVICES ── */
.dpage-services {
    padding: 80px 0 100px;
    border-top: 1px solid #1e1e1e;
    background: #0d0d0d;
}
.ds2-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
}
@media (max-width: 768px) { .ds2-grid { grid-template-columns: 1fr; } }

.ds2-card {
    background: #111;
    border: 1px solid #1e1e1e;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: border-color 0.3s;
}
.ds2-card--featured { background: #161616; }
.ds2-card:hover { border-color: #c0392b; }

.ds2-img { height: 200px; overflow: hidden; }
.ds2-img img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
    filter: brightness(0.6) grayscale(10%);
    transition: transform 5s ease, filter 0.35s;
}
.ds2-card:hover .ds2-img img { transform: scale(1.06); filter: brightness(0.5) grayscale(0%); }

.ds2-body {
    padding: 28px 30px 32px;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.ds2-icon {
    width: 40px; height: 40px;
    border: 1px solid #c0392b;
    display: flex; align-items: center; justify-content: center;
    color: #c0392b; font-size: 15px;
    margin-bottom: 18px;
    transition: all 0.2s;
}
.ds2-card:hover .ds2-icon { background: #c0392b; color: #fff; }
.ds2-body h3 { font-size: 18px; font-weight: 700; color: #fff; margin-bottom: 10px; }
.ds2-body h3 a { color: #fff; text-decoration: none; transition: color 0.2s; }
.ds2-body h3 a:hover { color: #c0392b; }
.ds2-body p { font-size: 13px; line-height: 1.8; color: #666; flex: 1; margin-bottom: 20px; }
.ds2-link {
    font-size: 10px; font-weight: 700; letter-spacing: 2px;
    text-transform: uppercase; color: #c0392b;
    text-decoration: none;
    display: inline-flex; align-items: center; gap: 8px;
    margin-top: auto;
    transition: gap 0.2s;
}
.ds2-link:hover { gap: 13px; color: #e74c3c; text-decoration: none; }

.pt-30 { padding-top: 30px; }
.pb-80 { padding-bottom: 80px; }
.mb-55 { margin-bottom: 55px; }
</style>

<script>
var dState = {};

function dGetTotal(id) {
    return document.querySelectorAll('#dslider-' + id + ' .dslide').length;
}
function dGoTo(id, idx) {
    var wrap = document.getElementById('dslider-' + id);
    if (!wrap) return;
    var total = dGetTotal(id);
    if (dState[id] === undefined) dState[id] = 0;
    dState[id] = ((idx % total) + total) % total;
    wrap.querySelector('.dslider-track').style.transform = 'translateX(-' + (dState[id] * 100) + '%)';
    wrap.querySelector('.dcur').textContent = dState[id] + 1;
    wrap.querySelectorAll('.dthumb').forEach(function(t, i) {
        t.classList.toggle('active', i === dState[id]);
    });
}
function dNext(id) {
    if (dState[id] === undefined) dState[id] = 0;
    dGoTo(id, dState[id] + 1);
}
function dPrev(id) {
    if (dState[id] === undefined) dState[id] = 0;
    dGoTo(id, dState[id] - 1);
}

// Swipe support
document.querySelectorAll('.dproject-slider').forEach(function(slider) {
    var id = parseInt(slider.id.replace('dslider-', ''));
    var startX = 0;
    slider.addEventListener('touchstart', function(e) { startX = e.touches[0].clientX; }, { passive: true });
    slider.addEventListener('touchend', function(e) {
        var diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) { diff > 0 ? dNext(id) : dPrev(id); }
    }, { passive: true });
});

// Auto-advance
[0, 1, 2, 3].forEach(function(id) {
    setInterval(function() { dNext(id); }, 5000 + id * 900);
});
</script>

<?php
    include 'footer.php';
?>