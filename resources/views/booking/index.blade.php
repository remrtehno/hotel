@extends("main.main")

@section('content')
    <div class="hotel-detail-page">
        <div class="inner-pages"><br />
            <h1 class="title">Онлайн бронирование номера</h1>

            <br>

            <br>
            <br>
            <div class="container">
                @include('booking.content')
            
			<div id="booking_iframe" style="padding-bottom: 32px;position: relative;">
			<div id="bn_iframe" style='position: absolute;right: 0;margin-top: 12px;font-family: "Proxima nova", "Helvetica Neue", "Cera Pro Medium", Arial, Helvetica, sans-serif;font-size: 12px;line-height: 1em;opacity: 0.5;z-index: 3;bottom:0;'>
			<div style='color: #1403FC !important; background: rgba(0, 0, 0, 0) !important;'>
			<a style='color: #808080 !important; background: #ffffff !important;' href="http://bnovo.ru/" id="bnovo_link" target="_blank">Система управления отелем Bnovo ©</a>
			</div></div>
			</div>
			<script src="https://widget.reservationsteps.ru/iframe/library/dist/booking_iframe.js"></script>
			<script type="text/javascript">
			var BookingIframe = new BookingIframe({
				html_id: 'booking_iframe',
				uid: 'f5349a31-3261-48c7-aceb-3e9a01b942d1',
				lang: 'ru',
				width: 'auto',
				height: 'auto',
				rooms: '',
				scroll_to_rooms: '1'
			})
			BookingIframe.init()
			</script>
			
			</div>
			
			
        </div>




    </div>
@endsection
