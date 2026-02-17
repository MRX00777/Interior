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
                                <h2>Ремонт под ключ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Hero End -->

        <!--? Intro Block Start -->
        <div class="intro-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="intro-text">
                            <span class="intro-eyebrow">Ташкент · С 2017 года</span>
                            <h2>Создаём интерьеры,<br>в которых хочется жить</h2>
                            <p>Мы — команда профессионалов с опытом более 7 лет в сфере ремонта и дизайна интерьеров в Ташкенте. Каждый объект — это уникальная история, воплощённая через материалы, свет и детали. Мы берём проект от голых стен до финальной меблировки, соблюдая сроки и бюджет.</p>
                            <p>В нашем портфолио — жилые комплексы, частные дома и коммерческие помещения различной сложности. Мы работаем в любом стиле: от минимализма и скандинавского дизайна до классики и ар-деко.</p>
                            <a href="contact.php" class="project-btn mt-10" style="margin-top:24px; display:inline-flex;">Обсудить проект <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="intro-stats">
                            <div class="intro-stat-item">
                                <div class="i-stat-num">120<span>+</span></div>
                                <div class="i-stat-label">Объектов сдано</div>
                            </div>
                            <div class="intro-stat-item">
                                <div class="i-stat-num">7<span> лет</span></div>
                                <div class="i-stat-label">На рынке</div>
                            </div>
                            <div class="intro-stat-item">
                                <div class="i-stat-num">98<span>%</span></div>
                                <div class="i-stat-label">Довольных клиентов</div>
                            </div>
                            <div class="intro-stat-item">
                                <div class="i-stat-num">15<span>к м²</span></div>
                                <div class="i-stat-label">Отремонтировано</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Block End -->

        <!--? Projects Area Start -->
        <div class="projects-area pt-60 pb-60">
            <div class="container">

                <!-- Portfolio Section Title -->
                <div class="portfolio-section-title">
                    <div class="pst-left">
                        <span class="pst-eyebrow">Наши работы</span>
                        <h2>Портфолио проектов</h2>
                    </div>
                    <p class="pst-desc">Каждый проект в нашем портфолио — это результат тесного сотрудничества с заказчиком, детальной проработки дизайн-концепции и безупречного исполнения. Ниже представлены избранные объекты, выполненные нашей командой.</p>
                </div>

                <!-- Project 1 -->
                <div class="project-block mb-60">
                    <div class="row align-items-stretch">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <div class="project-slider" id="slider-0">
                                <div class="p-slides">
                                    <div class="p-slide active">
                                        <img src="assets/img/integra/projects/kislarod/4.jpg" alt="ЖК Кислород">
                                    </div>
                                    <div class="p-slide">
                                        <img src="assets/img/integra/projects/kislarod/1.jpg" alt="ЖК Кислород">
                                    </div>
                                    <div class="p-slide">
                                        <img src="assets/img/integra/projects/kislarod/2.jpg" alt="ЖК Кислород">
                                    </div>
                                </div>
                                <div class="p-counter"><span class="p-cur">1</span> / <span class="p-total">3</span></div>
                                <div class="p-dots">
                                    <span class="p-dot active" onclick="goTo(0,0)"></span>
                                    <span class="p-dot" onclick="goTo(0,1)"></span>
                                    <span class="p-dot" onclick="goTo(0,2)"></span>
                                </div>
                                <div class="p-controls">
                                    <button onclick="prev(0)">&#8592;</button>
                                    <button onclick="next(0)">&#8594;</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="project-info h-100">
                                <span class="project-tag">Жилой комплекс</span>
                                <h3>Интерьер<br>ЖК Кислород</h3>
                                <div class="project-line"></div>
                                <p>Современный интерьер квартиры в стиле минимализм с элементами скандинавского дизайна. Светлые тона, натуральные материалы и продуманное освещение создают ощущение простора. Панорамные окна наполняют пространство естественным светом.</p>
                                <div class="project-meta">
                                    <div class="meta-item"><label>Площадь</label><span>87 м²</span></div>
                                    <div class="meta-item"><label>Тип</label><span>Новостройка</span></div>
                                    <div class="meta-item"><label>Вид ремонта</label><span>Под ключ</span></div>
                                    <div class="meta-item"><label>Срок</label><span>4 месяца</span></div>
                                </div>
                                <a href="work.php" class="project-btn">Смотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-block mb-60">
                    <div class="row align-items-stretch flex-row-reverse">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <div class="project-slider" id="slider-1">
                                <div class="p-slides">
                                    <div class="p-slide active">
                                        <img src="assets/img/integra/projects/jk-parkentskiy/5.jpg" alt="ЖК Паркентский">
                                    </div>
                                    <div class="p-slide">
                                        <img src="assets/img/integra/projects/jk-parkentskiy/1.jpg" alt="ЖК Паркентский">
                                    </div>
                                    <div class="p-slide">
                                        <img src="assets/img/integra/projects/jk-parkentskiy/2.jpg" alt="ЖК Паркентский">
                                    </div>
                                </div>
                                <div class="p-counter"><span class="p-cur">1</span> / <span class="p-total">3</span></div>
                                <div class="p-dots">
                                    <span class="p-dot active" onclick="goTo(1,0)"></span>
                                    <span class="p-dot" onclick="goTo(1,1)"></span>
                                    <span class="p-dot" onclick="goTo(1,2)"></span>
                                </div>
                                <div class="p-controls">
                                    <button onclick="prev(1)">&#8592;</button>
                                    <button onclick="next(1)">&#8594;</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="project-info h-100">
                                <span class="project-tag">Жилой комплекс</span>
                                <h3>Интерьер ЖК<br>Паркентский</h3>
                                <div class="project-line"></div>
                                <p>Двухкомнатная квартира с авторским дизайном в стиле contemporary. Открытая планировка, кухня-гостиная, встроенные шкафы. Отделка премиальными материалами с вниманием к каждой детали.</p>
                                <div class="project-meta">
                                    <div class="meta-item"><label>Площадь</label><span>72 м²</span></div>
                                    <div class="meta-item"><label>Тип</label><span>Новостройка</span></div>
                                    <div class="meta-item"><label>Вид ремонта</label><span>Дизайнерский</span></div>
                                    <div class="meta-item"><label>Срок</label><span>3.5 месяца</span></div>
                                </div>
                                <a href="work.php" class="project-btn">Смотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-block mb-60">
                    <div class="row align-items-stretch">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <div class="project-slider" id="slider-2">
                                <div class="p-slides">
                                    <div class="p-slide active">
                                        <img src="assets/img/integra/projects/royal-house/7.jpg" alt="Royal House">
                                    </div>
                                    <div class="p-slide">
                                        <img src="assets/img/integra/projects/royal-house/5.jpg" alt="Royal House">
                                    </div>
                                    <div class="p-slide">
                                        <img src="assets/img/integra/projects/royal-house/1.jpg" alt="Royal House">
                                    </div>
                                </div>
                                <div class="p-counter"><span class="p-cur">1</span> / <span class="p-total">3</span></div>
                                <div class="p-dots">
                                    <span class="p-dot active" onclick="goTo(2,0)"></span>
                                    <span class="p-dot" onclick="goTo(2,1)"></span>
                                    <span class="p-dot" onclick="goTo(2,2)"></span>
                                </div>
                                <div class="p-controls">
                                    <button onclick="prev(2)">&#8592;</button>
                                    <button onclick="next(2)">&#8594;</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="project-info h-100">
                                <span class="project-tag">Элитный комплекс</span>
                                <h3>Интерьер<br>Royal House</h3>
                                <div class="project-line"></div>
                                <p>Трёхкомнатная квартира с мастер-спальней и двумя детскими комнатами. Использованы натуральный мрамор, массив дерева и освещение на заказ. Стиль — современная классика с тёмными акцентами.</p>
                                <div class="project-meta">
                                    <div class="meta-item"><label>Площадь</label><span>140 м²</span></div>
                                    <div class="meta-item"><label>Тип</label><span>Новостройка</span></div>
                                    <div class="meta-item"><label>Вид ремонта</label><span>Дизайнерский</span></div>
                                    <div class="meta-item"><label>Срок</label><span>6 месяцев</span></div>
                                </div>
                                <a href="work.php" class="project-btn">Смотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-block mb-60">
                    <div class="row align-items-stretch flex-row-reverse">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <div class="project-slider" id="slider-3">
                                <div class="p-slides">
                                    <div class="p-slide active">
                                        <img src="assets/img/integra/banner/1.jpg" alt="Частный дом">
                                    </div>
                                    <div class="p-slide">
                                        <img src="assets/img/gallery/gallery4.png" alt="Частный дом">
                                    </div>
                                </div>
                                <div class="p-counter"><span class="p-cur">1</span> / <span class="p-total">2</span></div>
                                <div class="p-dots">
                                    <span class="p-dot active" onclick="goTo(3,0)"></span>
                                    <span class="p-dot" onclick="goTo(3,1)"></span>
                                </div>
                                <div class="p-controls">
                                    <button onclick="prev(3)">&#8592;</button>
                                    <button onclick="next(3)">&#8594;</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="project-info h-100">
                                <span class="project-tag">Частный дом</span>
                                <h3>Проект<br>Частный дом</h3>
                                <div class="project-line"></div>
                                <p>Загородный дом с полным ремонтом под ключ. Фасад в стиле современного минимализма, интерьер — тёплый с натуральным деревом и камнем. Включает дизайн ландшафта и освещения территории.</p>
                                <div class="project-meta">
                                    <div class="meta-item"><label>Площадь</label><span>220 м²</span></div>
                                    <div class="meta-item"><label>Тип</label><span>Частный дом</span></div>
                                    <div class="meta-item"><label>Вид ремонта</label><span>Под ключ</span></div>
                                    <div class="meta-item"><label>Срок</label><span>8 месяцев</span></div>
                                </div>
                                <a href="work.php" class="project-btn">Смотреть проект <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="lode-more-btn text-center pt-40 pb-60">
                            <a href="#" class="btn">Загрузить еще</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Projects Area End -->

        <!--? Services Area Start -->
        <div class="new-services-area">

            <!-- Services Header -->
            <div class="nsv-header">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-7">
                            <span class="nsv-eyebrow">Профессиональные услуги</span>
                            <h2>Лучшие решения<br>для вашего интерьера</h2>
                        </div>
                        <div class="col-lg-5">
                            <p class="nsv-intro">Мы предлагаем полный спектр услуг по ремонту и дизайну интерьера в Ташкенте — от разработки концепции до финальной комплектации. Работаем с квартирами, частными домами и коммерческими помещениями любой сложности.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="container mb-5">
                <div class="nsv-grid">

                    <div class="nsv-card nsv-card--large">
                        <div class="nsv-card-img">
                            <img src="assets/img/gallery/services4.png" alt="Ремонт квартир под ключ в Ташкенте">
                            <div class="nsv-card-overlay"></div>
                        </div>
                        <div class="nsv-card-body">
                            <span class="nsv-num">01</span>
                            <h3><a href="services.php">Ремонт под ключ</a></h3>
                            <p>Берём на себя все этапы — от демонтажа и черновых работ до чистовой отделки и уборки. Вы получаете готовое к жизни пространство с гарантией качества на все виды работ.</p>
                            <ul class="nsv-list">
                                <li>Черновые и чистовые работы</li>
                                <li>Сантехника и электрика</li>
                                <li>Монтаж напольных покрытий</li>
                                <li>Покраска, обои, декоративная штукатурка</li>
                            </ul>
                            <a href="services.php" class="nsv-link">Подробнее <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="nsv-card">
                        <div class="nsv-card-img">
                            <img src="assets/img/gallery/services5.png" alt="Дизайн интерьера в Ташкенте">
                            <div class="nsv-card-overlay"></div>
                        </div>
                        <div class="nsv-card-body">
                            <span class="nsv-num">02</span>
                            <h3><a href="services.php">Дизайн интерьера</a></h3>
                            <p>Создаём авторские дизайн-проекты, отражающие характер и образ жизни заказчика. Полный пакет документации для строителей.</p>
                            <a href="services.php" class="nsv-link">Подробнее <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="nsv-card">
                        <div class="nsv-card-img">
                            <img src="assets/img/gallery/services6.png" alt="Авторский надзор за ремонтом">
                            <div class="nsv-card-overlay"></div>
                        </div>
                        <div class="nsv-card-body">
                            <span class="nsv-num">03</span>
                            <h3><a href="services.php">Авторский надзор</a></h3>
                            <p>Обеспечиваем точное соответствие ремонта дизайн-проекту на каждом этапе. Еженедельные отчёты и контроль качества материалов.</p>
                            <a href="services.php" class="nsv-link">Подробнее <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="nsv-card">
                        <div class="nsv-card-img">
                            <img src="assets/img/gallery/services4.png" alt="Комплектация объектов мебелью">
                            <div class="nsv-card-overlay"></div>
                        </div>
                        <div class="nsv-card-body">
                            <span class="nsv-num">04</span>
                            <h3><a href="services.php">Комплектация объектов</a></h3>
                            <p>Подбираем и закупаем мебель, технику, текстиль и декор согласно проекту. Экономим ваше время и бюджет за счёт партнёрских цен.</p>
                            <a href="services.php" class="nsv-link">Подробнее <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SEO Text Block -->
            <div class="seo-block mb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="seo-title-wrap">
                                <span class="nsv-eyebrow">О компании</span>
                                <h3>Ремонт квартир и домов<br>в Ташкенте</h3>
                                <div class="seo-line"></div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="seo-text-cols">
                                <p>Компания <strong>Integra Pro Design</strong> выполняет ремонт квартир, частных домов и коммерческих помещений в Ташкенте с 2017 года. За это время мы реализовали более 120 объектов — от скромных однокомнатных квартир до элитных резиденций площадью свыше 400 м².</p>
                                <p>Наша команда включает опытных дизайнеров, прорабов и мастеров всех специальностей. Мы работаем только с проверенными материалами от ведущих производителей и даём официальную гарантию на все выполненные работы сроком <strong>до 3 лет</strong>.</p>
                                <p>Если вы ищете надёжную компанию по ремонту квартир в Ташкенте — оставьте заявку, и мы бесплатно рассчитаем стоимость вашего проекта в течение 24 часов. Мы работаем во всех районах города и ближайших пригородах.</p>
                            </div>
                            <div class="seo-features">
                                <div class="seo-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Фиксированная смета без скрытых доплат</span>
                                </div>
                                <div class="seo-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Официальный договор и гарантия на работы</span>
                                </div>
                                <div class="seo-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Еженедельные фотоотчёты с объекта</span>
                                </div>
                                <div class="seo-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Бесплатный выезд замерщика в любой район Ташкента</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Services Area End -->

    </main>

<!-- Project Slider Styles -->
<style>
.project-block {
    border-bottom: 1px solid #2a2a2a;
    padding-bottom: 60px;
}
.project-block:last-of-type {
    border-bottom: none;
}

/* Slider */
.project-slider {
    position: relative;
    overflow: hidden;
    background: #000;
    height: 420px;
    border-radius: 2px;
}
@media (max-width: 768px) {
    .project-slider { height: 280px; }
}

.p-slides {
    display: flex;
    height: 100%;
    transition: transform 0.55s cubic-bezier(0.77, 0, 0.18, 1);
}
.p-slide {
    min-width: 100%;
    height: 100%;
    overflow: hidden;
}
.p-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 5s ease;
}
.p-slide img:hover { transform: scale(1.04); }

.p-counter {
    position: absolute;
    top: 16px;
    right: 16px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    color: rgba(255,255,255,0.65);
    background: rgba(0,0,0,0.45);
    padding: 4px 10px;
    border-radius: 20px;
}

.p-dots {
    position: absolute;
    bottom: 20px;
    left: 20px;
    display: flex;
    gap: 6px;
}
.p-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: rgba(255,255,255,0.3);
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
    display: inline-block;
}
.p-dot.active {
    background: #c0392b;
    transform: scale(1.35);
}

.p-controls {
    position: absolute;
    bottom: 14px;
    right: 16px;
    display: flex;
    gap: 8px;
}
.p-controls button {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #c0392b;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s, transform 0.15s;
}
.p-controls button:hover {
    background: #a93226;
    transform: scale(1.08);
}

/* Info */
.project-info {
    padding: 36px 40px;
    background: #161616;
    border: 1px solid #2a2a2a;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 2px;
}
@media (max-width: 768px) {
    .project-info { padding: 28px 24px; }
}

.project-tag {
    font-size: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #c0392b;
    display: block;
    margin-bottom: 12px;
}

.project-info h3 {
    font-size: clamp(24px, 2.5vw, 34px);
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 20px;
}

.project-line {
    width: 36px;
    height: 2px;
    background: #c0392b;
    margin-bottom: 20px;
}

.project-info p {
    font-size: 13px;
    line-height: 1.85;
    color: #888;
    margin-bottom: 28px;
    flex: 1;
}

.project-meta {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    padding-top: 20px;
    border-top: 1px solid #2a2a2a;
    margin-bottom: 28px;
}
.meta-item label {
    font-size: 9px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #555;
    display: block;
    margin-bottom: 4px;
}
.meta-item span {
    font-size: 13px;
    font-weight: 600;
    color: #ccc;
}

.project-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
    border: 1px solid #333;
    padding: 12px 22px;
    transition: border-color 0.2s, background 0.2s;
    align-self: flex-start;
}
.project-btn i {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #c0392b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    transition: transform 0.2s;
}
.project-btn:hover {
    border-color: #c0392b;
    color: #fff;
    text-decoration: none;
}
.project-btn:hover i { transform: translateX(3px); }

/* ── INTRO AREA ── */
.intro-area {
    padding: 80px 0 70px;
    border-bottom: 1px solid #2a2a2a;
}
.intro-text .intro-eyebrow {
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #c0392b;
    display: block;
    margin-bottom: 18px;
}
.intro-text h2 {
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 22px;
}
.intro-text p {
    font-size: 14px;
    line-height: 1.85;
    color: #888;
    margin-bottom: 14px;
}
.intro-stats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px;
    margin-top: 20px;
}
.intro-stat-item {
    background: #161616;
    border: 1px solid #2a2a2a;
    padding: 32px 28px;
    transition: border-color 0.2s;
}
.intro-stat-item:hover { border-color: #c0392b; }
.i-stat-num {
    font-size: 42px;
    font-weight: 700;
    color: #fff;
    line-height: 1;
    margin-bottom: 8px;
}
.i-stat-num span {
    font-size: 18px;
    color: #c0392b;
    font-weight: 400;
}
.i-stat-label {
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #555;
}
@media (max-width: 991px) {
    .intro-text { margin-bottom: 40px; }
}
@media (max-width: 480px) {
    .intro-stats { grid-template-columns: 1fr 1fr; }
    .i-stat-num { font-size: 32px; }
}

/* ── PORTFOLIO SECTION TITLE ── */
.portfolio-section-title {
    display: flex;
    align-items: flex-start;
    gap: 60px;
    padding: 0 0 60px;
    border-bottom: 1px solid #2a2a2a;
    margin-bottom: 60px;
}
.pst-eyebrow {
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #c0392b;
    display: block;
    margin-bottom: 12px;
}
.pst-left h2 {
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 700;
    color: #fff;
    line-height: 1.1;
    white-space: nowrap;
}
.pst-desc {
    font-size: 13px;
    line-height: 1.85;
    color: #666;
    max-width: 540px;
    padding-top: 38px;
    margin: 0;
}
@media (max-width: 768px) {
    .portfolio-section-title { flex-direction: column; gap: 16px; }
    .pst-left h2 { white-space: normal; }
    .pst-desc { padding-top: 0; }
}

/* ── NEW SERVICES ── */
.new-services-area {
    background: #0d0d0d;
    padding-bottom: 0;
}
.nsv-header {
    padding: 80px 0 60px;
    border-bottom: 1px solid #1e1e1e;
    margin-bottom: 60px;
}
.nsv-eyebrow {
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #c0392b;
    display: block;
    margin-bottom: 16px;
}
.nsv-header h2 {
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 700;
    color: #fff;
    line-height: 1.1;
}
.nsv-intro {
    font-size: 13px;
    line-height: 1.85;
    color: #666;
    padding-top: 42px;
    margin: 0;
}
@media (max-width: 991px) {
    .nsv-intro { padding-top: 24px; }
}

/* Services Grid */
.nsv-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr;
    grid-template-rows: auto auto;
    gap: 2px;
    margin-bottom: 2px;
}
.nsv-card--large {
    grid-row: span 2;
}
@media (max-width: 991px) {
    .nsv-grid { grid-template-columns: 1fr 1fr; }
    .nsv-card--large { grid-row: span 1; }
}
@media (max-width: 600px) {
    .nsv-grid { grid-template-columns: 1fr; }
}

.nsv-card {
    background: #161616;
    border: 1px solid #1e1e1e;
    overflow: hidden;
    position: relative;
    transition: border-color 0.3s;
    display: flex;
    flex-direction: column;
}
.nsv-card:hover { border-color: #333; }

.nsv-card-img {
    position: relative;
    overflow: hidden;
    height: 220px;
    flex-shrink: 0;
}
.nsv-card--large .nsv-card-img { height: 300px; }
.nsv-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 5s ease;
    filter: brightness(0.7);
}
.nsv-card:hover .nsv-card-img img { transform: scale(1.05); }
.nsv-card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(22,22,22,0.95) 0%, transparent 60%);
}

.nsv-card-body {
    padding: 28px 32px 32px;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.nsv-num {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    color: #c0392b;
    display: block;
    margin-bottom: 12px;
}
.nsv-card-body h3 {
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 14px;
    line-height: 1.2;
}
.nsv-card-body h3 a {
    color: #fff;
    text-decoration: none;
    transition: color 0.2s;
}
.nsv-card-body h3 a:hover { color: #c0392b; }
.nsv-card-body p {
    font-size: 13px;
    line-height: 1.75;
    color: #777;
    margin-bottom: 16px;
    flex: 1;
}
.nsv-list {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}
.nsv-list li {
    font-size: 12px;
    color: #666;
    padding: 6px 0;
    border-bottom: 1px solid #222;
    padding-left: 14px;
    position: relative;
}
.nsv-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #c0392b;
}
.nsv-link {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #c0392b;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: auto;
    transition: gap 0.2s;
}
.nsv-link:hover { gap: 12px; color: #e74c3c; text-decoration: none; }

/* ── SEO BLOCK ── */
.seo-block {
    background: #111;
    border-top: 1px solid #1e1e1e;
    padding: 70px 0 80px;
    margin-top: 2px;
}
.seo-title-wrap h3 {
    font-size: clamp(22px, 2.5vw, 32px);
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 20px;
}
.seo-line {
    width: 36px;
    height: 2px;
    background: #c0392b;
}
.seo-text-cols p {
    font-size: 13px;
    line-height: 1.9;
    color: #666;
    margin-bottom: 14px;
}
.seo-text-cols strong { color: #aaa; }
.seo-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-top: 28px;
    padding-top: 28px;
    border-top: 1px solid #1e1e1e;
}
.seo-feature {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 12px;
    color: #666;
    line-height: 1.5;
}
.seo-feature i {
    color: #c0392b;
    font-size: 14px;
    flex-shrink: 0;
    margin-top: 1px;
}
@media (max-width: 991px) {
    .seo-title-wrap { margin-bottom: 32px; }
}
@media (max-width: 480px) {
    .seo-features { grid-template-columns: 1fr; }
}
</style>

<!-- Project Slider Script -->
<script>
var pState = {};

function getTotal(id) {
    return document.querySelectorAll('#slider-' + id + ' .p-slide').length;
}

function goTo(id, idx) {
    var wrap = document.getElementById('slider-' + id);
    var total = getTotal(id);
    if (!pState[id]) pState[id] = 0;
    pState[id] = ((idx % total) + total) % total;

    wrap.querySelector('.p-slides').style.transform = 'translateX(-' + (pState[id] * 100) + '%)';
    wrap.querySelector('.p-cur').textContent = pState[id] + 1;
    wrap.querySelectorAll('.p-dot').forEach(function(d, i) {
        d.classList.toggle('active', i === pState[id]);
    });
}

function next(id) {
    if (!pState[id]) pState[id] = 0;
    goTo(id, pState[id] + 1);
}

function prev(id) {
    if (!pState[id]) pState[id] = 0;
    goTo(id, pState[id] - 1);
}

// Auto-advance each slider at different intervals
[0, 1, 2, 3].forEach(function(id) {
    setInterval(function() { next(id); }, 4500 + id * 600);
});
</script>

<?php
    include 'footer.php';
?>