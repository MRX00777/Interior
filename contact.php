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
                                <h2>Наши контакты</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <!-- <div class="d-none d-sm-block mb-5 pb-4">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.814320583635!2d69.25761837653943!3d41.29114540195862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8ae9a6d02b71%3A0x49e3e7f0ee22e5d0!2sShota%20Rustaveli%20Street%2C%20Tashkent%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1771157752665!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div> -->
                <div class="row">
                    <div class="col-12">
                    </div>
                    <div class="col-lg-8">
                             <div class="form-wrap">
  <h2>Получите коммерческое предложение на ремонт бесплатно</h2>

  <form action="contact_process.php" method="post" id="contactForm" novalidate>

    <!-- Площадь -->
    <div class="form-group">
      <label class="field-label">Укажите площадь квартиры</label>
      <span class="slider-val" id="areaVal">50 м²</span>
      <input type="range" id="areaSlider" name="area" min="20" max="120" value="50"
        oninput="document.getElementById('areaVal').textContent = this.value + ' м²'">
      <div class="slider-labels"><span>20 м²</span><span>120 м²</span></div>
    </div>

    <!-- Количество комнат -->
    <div class="form-group">
      <label class="field-label">Укажите количество комнат</label>
      <div class="radio-group">
        <label><input type="radio" name="rooms" value="1"><span class="radio-custom"></span><span>1</span></label>
        <label><input type="radio" name="rooms" value="2" checked><span class="radio-custom"></span><span>2</span></label>
        <label><input type="radio" name="rooms" value="3"><span class="radio-custom"></span><span>3</span></label>
        <label><input type="radio" name="rooms" value="4+"><span class="radio-custom"></span><span>4+</span></label>
      </div>
    </div>

    <!-- Тип квартиры -->
    <div class="form-group">
      <label class="field-label">Тип квартиры</label>
      <div class="radio-group">
        <label><input type="radio" name="apt_type" value="new" checked><span class="radio-custom"></span><span>Новостройка</span></label>
        <label><input type="radio" name="apt_type" value="secondary"><span class="radio-custom"></span><span>Вторичка</span></label>
      </div>
    </div>

    <!-- Вид ремонта -->
    <div class="form-group">
      <label class="field-label">Вид ремонта</label>
      <div class="radio-group" style="flex-direction:column; gap:10px;">
        <label><input type="radio" name="repair_type" value="full" checked onchange="toggleTooltip(this)"><span class="radio-custom"></span><span>С нуля под ключ</span></label>
        <label><input type="radio" name="repair_type" value="cosmetic" onchange="toggleTooltip(this)"><span class="radio-custom"></span><span>Косметический ремонт</span></label>
        <label><input type="radio" name="repair_type" value="design" onchange="toggleTooltip(this)"><span class="radio-custom"></span><span>Дизайнерский ремонт</span></label>
      </div>

      <div class="tooltip-box visible" id="tooltipFull">
        <strong>"С нуля под ключ":</strong>
        <ul>
          <li>Полная черновая и чистовая отделка</li>
          <li>Замена сантехники и электрики</li>
          <li>Замена дверей</li>
          <li>Разводка труб</li>
        </ul>
      </div>
      <div class="tooltip-box" id="tooltipCosmetic">
        <strong>"Косметический ремонт":</strong>
        <ul>
          <li>Покраска стен и потолков</li>
          <li>Замена напольного покрытия</li>
          <li>Обновление сантехники</li>
        </ul>
      </div>
      <div class="tooltip-box" id="tooltipDesign">
        <strong>"Дизайнерский ремонт":</strong>
        <ul>
          <li>Авторский дизайн-проект</li>
          <li>Эксклюзивные материалы</li>
          <li>Полное сопровождение</li>
        </ul>
      </div>
    </div>

    <hr class="sep">

    <!-- Имя и Email -->
    <div class="input-row">
      <div class="form-group">
        <input class="form-control" name="name" id="name" type="text"
          placeholder="Введите ваше имя">
      </div>
      <div class="form-group">
        <input class="form-control" name="phone" id="phone" type="tel"
          placeholder="Телефон">
      </div>
    </div>

    <!-- Связь -->
    <label class="field-label" style="margin-bottom:12px;">Как с вами лучше связаться?</label>
    <div class="btn-row">
      <button type="submit" name="contact_via" value="telegram" class="btn-tg">в Telegram</button>
      <button type="submit" name="contact_via" value="phone" class="btn-phone">по Телефону</button>
    </div>

  </form>
</div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 mt-4">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>г. Ташкент</h3>
                                <p>Мирабадский район, ул. Саида Барака, дом 66</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+998 95 253 88 00</h3>
                                <p>Пн-Пт с 9:00 до 18:00</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@integra-prodesign.uz</h3>
                                <p>Задайте нам любой вопрос!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>
<?php
include 'footer.php';
?>