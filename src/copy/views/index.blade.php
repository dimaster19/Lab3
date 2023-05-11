<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <script src="https://api-maps.yandex.ru/2.1/?apikey=0ac3b741-ac47-48d0-ad89-5e39f7785f1d&lang=ru_RU" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>

<body>
    <div class="container">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Товары</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Заказы</button>
                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Категории</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Поставщики</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Склад</button>
                <button class="nav-link" id="v-pills-clients-tab" data-bs-toggle="pill" data-bs-target="#v-pills-clients" type="button" role="tab" aria-controls="v-pills-clients" aria-selected="false">Клиенты</button>

            </div>
            <div class="tab-content w-100" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="row">
                        <form class="col" action="{{ env('BASE_URL') }}/product" method="post">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input name="price" type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input name="count" type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input name="desc" type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input name="category_id" type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input name="delivery_id" type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                        <form class="col" action="{{ env('BASE_URL') }}/updateproduct" method="post">
                            <h3>Изменить</h3>

                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input name="id" type="text" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input name="price" type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input name="count" type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input name="desc" type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input name="category_id" type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input name="delivery_id" type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                        <form class="col" action="{{ env('BASE_URL') }}/deleteproduct" method="post">
                            <h3>Удалить</h3>

                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input name="id" type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="row">
                        <form class="col" action="{{ env('BASE_URL') }}/order" method="post">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input name="price" type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input name="count" type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="prodInput" class="form-label">ID Товара</label>
                                <input name="product_id" type="number" class="form-control" id="prodInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/updateorder" method="post">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Заказа</label>
                                <input name="id" type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input name="price" type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input name="count" type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="prodInput" class="form-label">ID Товара</label>
                                <input name="product_id" type="number" class="form-control" id="prodInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/deleteorder" method="post">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Заказа</label>
                                <input name="id" type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                    <div class="row">
                        <form class="col" action="{{ env('BASE_URL') }}/category" method="post">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/updatecategory" method="post">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Категории</label>
                                <input name="id" type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/deletecategory" method="post">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Категории</label>
                                <input name='id' type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <div class="row">
                        <form class="col" action="{{ env('BASE_URL') }}/deliver" method="post">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/updatedeliver" method="post">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Поставщика</label>
                                <input name="id" type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/deletedeliver" method="post">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Поставщика</label>
                                <input name='id' type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                    <div class="row">
                        <form class="col" action="{{ env('BASE_URL') }}/storage" method="post">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input name="price" type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input name="count" type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input name="desc" type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input name="category_id" type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input name="delivery_id" type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/updatestorage" method="post">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input name="id" type="text" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input name="price" type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input name="count" type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input name="desc" type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input name="category_id" type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input name="delivery_id" type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/deletestorage" method="post">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input name="id" type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-clients" role="tabpanel" aria-labelledby="v-pills-clients-tab" tabindex="0">
                    <div class="row">
                        <form class="col" action="{{ env('BASE_URL') }}/client" method="post">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Имя клиента</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/updateclient" method="post">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Клиента</label>
                                <input name="id" type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Имя клиента</label>
                                <input name="name" type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col" action="{{ env('BASE_URL') }}/deleteclient" method="post">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Клиента</label>
                                <input name="id" type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div id="map" class="px-5" style="width: 100%; height: 400px"></div>



    <script type="text/javascript">
        // Стоимость за километр.
    var DELIVERY_TARIFF = 20,
    // Минимальная стоимость.
        MINIMUM_COST = 500,
        myMap = new ymaps.Map('map', {
            center: [60.906882, 30.067233],
            zoom: 9,
            controls: []
        }),
    // Создадим панель маршрутизации.
        routePanelControl = new ymaps.control.RoutePanel({
            options: {
                // Добавим заголовок панели.
                showHeader: true,
                title: 'Расчёт доставки'
            }
        }),
        zoomControl = new ymaps.control.ZoomControl({
            options: {
                size: 'small',
                float: 'none',
                position: {
                    bottom: 145,
                    right: 10
                }
            }
        });
    // Пользователь сможет построить только автомобильный маршрут.
    routePanelControl.routePanel.options.set({
        types: {auto: true}
    });

    // Если вы хотите задать неизменяемую точку "откуда", раскомментируйте код ниже.
    /*routePanelControl.routePanel.state.set({
        fromEnabled: false,
        from: 'Москва, Льва Толстого 16'
     });*/

    myMap.controls.add(routePanelControl).add(zoomControl);

    // Получим ссылку на маршрут.
    routePanelControl.routePanel.getRouteAsync().then(function (route) {

        // Зададим максимально допустимое число маршрутов, возвращаемых мультимаршрутизатором.
        route.model.setParams({results: 1}, true);

        // Повесим обработчик на событие построения маршрута.
        route.model.events.add('requestsuccess', function () {

            var activeRoute = route.getActiveRoute();
            if (activeRoute) {
                // Получим протяженность маршрута.
                var length = route.getActiveRoute().properties.get("distance"),
                // Вычислим стоимость доставки.
                    price = calculate(Math.round(length.value / 1000)),
                // Создадим макет содержимого балуна маршрута.
                    balloonContentLayout = ymaps.templateLayoutFactory.createClass(
                        '<span>Расстояние: ' + length.text + '.</span><br/>' +
                        '<span style="font-weight: bold; font-style: italic">Стоимость доставки: ' + price + ' р.</span>');
                // Зададим этот макет для содержимого балуна.
                route.options.set('routeBalloonContentLayout', balloonContentLayout);
                // Откроем балун.
                activeRoute.balloon.open();
            }
        });

    });
    // Функция, вычисляющая стоимость доставки.
    function calculate(routeLength) {
        return Math.max(routeLength * DELIVERY_TARIFF, MINIMUM_COST);
    }
    </script>
</body>

</html>
