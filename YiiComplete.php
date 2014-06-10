<?php
/**
 * YiiComplete class file.
 *
 * @author Nikola Balog <offinger@gmail.com>
 * @license Gnu
 */

/**
 * 
 *
 * @author Nikola Balog <offinger@gmail.com>
 * @version 0.1
 */
class YiiComplete extends CWidget
{

    public $jsonUrl;

    public function run()
    {     
        $html = '';
        $html .= '
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
                    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
                    <style>
                        .ui-autocomplete-loading {
                            background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
                        }
                    </style>
                    <script>
                        $(function() {
                            function log( message ) {
                            $( "<div>" ).text( message ).prependTo( "#log" );
                            $( "#log" ).scrollTop( 0 );
                            }
                            $( "#autocomplete" ).autocomplete({
                            source: "'.$this->jsonUrl.'",
                            minLength: 2,
                            select: function( event, ui ) {
                            log( ui.item ?
                            "Selected: " + ui.item.value + " aka " + ui.item.id :
                            "Nothing selected, input was " + this.value );
                            }
                            });
                        });
                    </script>
                    <div class="ui-widget">
                        <label for="autocomplete">Input: </label>
                        <input id="autocomplete">
                    </div>
                ';

        
        echo $html;
    }
}