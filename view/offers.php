<div class="offer">
    <h1>Статистика по офферам </h1>
    <div class="content">
        <form method="POST" action="offers" class="filter" id="filter">
            <div class="start">
                <div class="title">
                    Начало:
                </div>
                <input name="start" type="datetime-local" class="start" id="start">
            </div>
            <div class="stop">
                <div class="title">
                    Конец:
                </div>
                <input name="stop" type="datetime-local" class="start" id="stop">
            </div>
            <button type="submit" class="button">фильтр</button>
        </form>
        <div class="table">
            <div class="header">
                <div class="id">id</div>
                <div class="name">Название</div>
                <div class="image">Картинка</div>
                <div class="clicks">Клики</div>
                <div class="uniq">Уникальн.</div>
                <div class="del">Удалить</div>
            </div>
            <? foreach ($offers as $offer): ?>
                <? include 'include/offerRow.php' ?>
            <? endforeach; ?>
        </div>
    </div>
</div>
<script type="module" src="./../src/js/offer.js"></script>

