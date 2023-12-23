<div class="border_line">
    <div class="wrap_line">

    @foreach ($appl as $app)

    @if($app->user_id == Auth::user()->id)
    <div class="card_pet">
        <div class="pet_img">
            @if ($app->Product->photo)
                <img src="{{$app->Product->photo}}" alt="img">
            @endif
        </div>
        <hr>
        <div class="info_pet">
            <div class="name">
                <p>Покупатель: {{Auth::user()->name}}</p>
            </div>
            <hr>
            <div class="type">
                <p>Наименование: {{$app->Product->title}}</p>
            </div>
            <hr>
            <div class="genus">
                <p>Количество: {{$app->quantity}}</p>
            </div>
            <hr>
            <div class="color">
                <p>Стоимость: {{$app->Product->cost}}</p>
            </div>
            <div class="color">
                <p>Дата заявки: {{$app->created_at}}</p>
            </div>

        </div>
    </div>
    @else
    <p class="not_data_pet">НЕТ ДАННЫХ</p>
    @endif
    @endforeach
</div>


</div>

