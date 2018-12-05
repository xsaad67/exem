@extends('layouts.main') @section('css')
<style>
    .tabs {
        margin: 0 auto;
        padding: 0 20px;
    }
    
    #tab-button {
        display: table;
        table-layout: fixed;
        width: 100%;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    
    #tab-button li {
        display: table-cell;
        width: 20%;
    }
    
    #tab-button li a {
        display: block;
        padding: .5em;
        background: #eee;
        border: 1px solid #ddd;
        text-align: center;
        color: #000;
        text-decoration: none;
    }
    
    #tab-button li:not(:first-child) a {
        border-left: none;
    }
    
    #tab-button li a:hover,
    #tab-button .is-active a {
        border-bottom-color: transparent;
        background: #fff;
    }
    
    .complete-tabbed {
        padding: .5em 2em 1em;
        border: 1px solid #ddd;
    }
    
    .tab-button-outer {
        display: none;
    }
    
    .tab-contents {
        margin-top: 20px;
    }
    
    @media screen and (min-width: 768px) {
        .tab-button-outer {
            position: relative;
            z-index: 2;
            display: block;
        }
        .tab-select-outer {
            display: none;
        }
        .tab-contents {
            position: relative;
            top: -1px;
            margin-top: 0;
        }
    }
</style>
@endsection @section('content')

<div class="row mt-5">
    <div class="col-8 mx-auto">

        <div class="tabs">
            <div class="tab-button-outer">
                <ul id="tab-button">
                    <li><a href="#tab01">Tab 1</a></li>
                    <li><a href="#tab02">Tab 2</a></li>
                </ul>
            </div>
            <div class="tab-select-outer">
                <select id="tab-select">
                    <option value="#tab01">Tab 1</option>
                    <option value="#tab02">Tab 2</option>
                </select>
            </div>
            <div class="complete-tabbed">
              <div class="row">
                <div class="col-4">
                  <select class="form-control">
                    <option value="1">1</option>
                  </select>
                </div>
              </div>
              <div id="tab01" class="tab-contents">
                  <h2>Tab 1</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
              </div>
              <div id="tab02" class="tab-contents" style="display:none;">
                  <h2>Tab 2</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
              </div>
          </div>

        </div>
    </div>
</div>

@endsection @section('footer')

<script type="text/javascript">
    $(function() {
        var $tabButtonItem = $('#tab-button li'),
            $tabSelect = $('#tab-select'),
            $tabContents = $('.tab-contents'),
            activeClass = 'is-active';

        $tabButtonItem.first().addClass(activeClass);
        $tabContents.not(':first').hide();

        $tabButtonItem.find('a').on('click', function(e) {
            var target = $(this).attr('href');

            $tabButtonItem.removeClass(activeClass);
            $(this).parent().addClass(activeClass);
            $tabSelect.val(target);
            $tabContents.hide();
            $(target).show();
            e.preventDefault();
        });

        $tabSelect.on('change', function() {
            var target = $(this).val(),
                targetSelectNum = $(this).prop('selectedIndex');

            $tabButtonItem.removeClass(activeClass);
            $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
            $tabContents.hide();
            $(target).show();
        });
    });
</script>

@endsection