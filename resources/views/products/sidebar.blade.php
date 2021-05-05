<aside class="sidebar">
    <!-- BEGIN FILTER -->
    <form class="filter" action="">
        <!-- Sort Fields -->
        <input type="hidden" name="sortby" value="menuindex">
        <input type="hidden" name="sortdir" value="ASC">
        <!-- Sort End -->


        <div class="filter__section">
            <p class="filter__title">Категории</p>
            @foreach ($cat as $item)
                <a href="{{ route('category', ['slug' => $item->slug]) }}" class="form__checkbox">
                    <label for="check32">
                        <span>{{ $item->title }}</span>
                    </label>
                </a>
            @endforeach
        </div>
    </form>


    <form class="filter" action="">
        <div class="filter__section">
            <p class="filter__title">Навыки</p>
            @foreach ($skill as $item)
                <a href="{{ route('skill', ['slug' => $item->slug]) }}" class="form__checkbox">
                    <label for="check32">
                        <span>{{ $item->title }}</span>
                    </label>
                </a>
            @endforeach
        </div>
    </form>

    <form class="filter" action="">
        <div class="filter__section">
            <p class="filter__title">Специализация</p>
            @foreach ($spec as $item)
                <a href="{{ route('spec', ['slug' => $item->slug]) }}" class="form__checkbox">
                    <label for="check32">
                        <span>{{ $item->title }}</span>
                    </label>
                </a>
            @endforeach
        </div>
    </form>
    <!-- END FILTER -->
</aside>
