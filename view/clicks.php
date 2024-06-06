
<div class="offer">

    <h1>Статистика по кликам </h1>
    <div class="content">
        <form method="POST" class="filter" id="filter">
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
                <div class="source">Источник</div>
                <div class="clicks">Клики</div>
                <div class="uniq">Уникальн.</div>
            </div>
            <?foreach ($clicks as $click):?>
                <? include 'include/clickRow.php' ?>
            <?endforeach;?>

        </div>
    </div>
</div>



