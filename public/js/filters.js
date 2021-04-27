$(function() {

    //Evolution DocLoster Ajax Filter
    //Filter Settings
    var fadeSpeed             = 200, // Fade Animation Speed        
        ajaxContainerSelector = '.products', // CSS Selector of Ajax Container
        ajaxItemSelector      = '.products__item', // CSS Selector of Ajax Item
        ajaxFormSelector      = '.filter', // CSS Selector of Ajax Filter Form
        ajaxFormButtonStart   = '.filter__btn-start', // CSS Selector of Button Start Filtering
        ajaxFormButtonReset   = '.filter__btn-reset'; // CSS Selector of Button Reset Ajax Form

    function buildFilterOptions() {
        var inputs = {};

        $('input[type=checkbox]', '.filter').each(function(idx, elem) {
            inputs[elem.getAttribute('id')] = {
                elem: elem,
                spec: elem.getAttribute('data-filter-spec'),
                skill: elem.getAttribute('data-filter-skill'),
                type: elem.getAttribute('data-filter-type')
            };
        });

        var notNeededInputs = {};
        Object.keys(inputs).forEach(function(inputId) {
            notNeededInputs[inputId] = true;
        });

        $('.products__item').each(function(idx, elem) {
            var spec = elem.getAttribute('data-spec') && elem.getAttribute('data-spec').split(','),
                skill = elem.getAttribute('data-skill') && elem.getAttribute('data-skill').split(','),
                type = elem.getAttribute('data-type') && elem.getAttribute('data-type').split(',');

            Object.keys(notNeededInputs).forEach(function(inputId) {
                var input = inputs[inputId];
                if ((spec && spec.indexOf(input.spec) !== -1) || (skill && skill.indexOf(input.skill) !== -1)
                    || (type && type.indexOf(input.type) !== -1)) {
                    notNeededInputs[inputId] = false;
                }
            });
        });

        // Object.keys(notNeededInputs).forEach(function(inputId) {
        //     if (notNeededInputs[inputId]) {
        //         $(inputs[inputId].elem.closest('.form__checkbox')).hide(150, function() {
        //             // inputs[inputId].elem.closest('.form__checkbox').classList.add('filter__hidden');
        //         });
        //     } else {
        //         $(inputs[inputId].elem.closest('.form__checkbox')).show(150, function() {
        //             inputs[inputId].elem.closest('.form__checkbox').classList.remove('filter__hidden');
        //         });
        //     }
        // });
    }

    function ajaxMainFunction() {
        $.ajax({
            data: $(ajaxFormSelector).serialize()
        }).done(function(response) {
            var $response = $(response);
            $(ajaxContainerSelector).fadeOut(fadeSpeed);
            setTimeout(function() {
                $(ajaxContainerSelector).html($response.find(ajaxContainerSelector).html()).fadeIn(fadeSpeed);
                buildFilterOptions();                
            }, fadeSpeed);
        });
    }

    $(ajaxContainerSelector).on('click', '.ajax-more', function(e) {
        e.preventDefault();
        var offset = $(ajaxItemSelector).length;
        $.ajax({
            data: $(ajaxFormSelector).serialize()+'&offset='+offset
        }).done(function(response) {
            $('.ajax-more').remove();
            var $response = $(response);
            $response.find(ajaxItemSelector).hide();
            $(ajaxContainerSelector).append($response.find(ajaxContainerSelector).html());
            $(ajaxItemSelector).fadeIn();
        });
    })

    $(ajaxFormButtonStart).click(function(e) {
        e.preventDefault();
        ajaxMainFunction();
    })

    $(ajaxFormButtonReset).click(function(e) {
        e.preventDefault();
        $(ajaxFormSelector).trigger('reset');
        $('input[name=sortby]').val('pagetitle');
        $('input[name=sortdir]').val('asc');        
        ajaxMainFunction();        
    })

    $(''+ajaxFormSelector+' input').change(function() {
        ajaxMainFunction();
    })

    $('[data-sort-by]').data('sort-dir', 'asc').click(function() {
        var ths = $(this);
        $('input[name=sortby]').val($(this).data('sort-by'));
        $('input[name=sortdir]').val($(this).data('sort-dir'));        
        ajaxMainFunction();
    });

    $( document ).ready(function() {
        buildFilterOptions();
    });

});

