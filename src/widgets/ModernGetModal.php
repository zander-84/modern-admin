<?php
namespace zander84\modernadmin\widgets;


use yii\base\Widget;

class ModernGetModal extends Widget
{
    public $id;
    public $title;
    public $size;  //modal-lg modal-sm


    public  function run ()
    {


        $modalHtml = '<div class="modal fade " id="'.$this->id.'" role="dialog">';
        $modalHtml .=   '<div  style="display:none;" class="modal-dialog '.$this->size.' ">';
        $modalHtml .=       '<div class="modal-content" >';
        $modalHtml .=           '<div class="color-line"></div>';
        $modalHtml .=               '<div class="modal-header" style="padding:20px 15px">';
        $modalHtml .=                   '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
        $modalHtml .=                   '<b>'.$this->title.'</b>';
        $modalHtml .=               '</div>';
        $modalHtml .=               '<div class="modal-body" >';

        $modalHtml .=               '</div>';
        $modalHtml .=       ' </div>';
        $modalHtml .=   '</div>';
        $modalHtml .= '</div>';


        $this->registerJs();
        return  $modalHtml;
    }




    public function registerJs()
    {
        $js = <<<js
              
                var selector = "[data-target='#$this->id']";
                $(selector).off('click');
                $(document).on("click", selector , function() {
                  var action = $(this).attr('data-href');
                  if(action){
                      $.ajax({
                         url: action,
                         type: "get",
                         success: function (data) {
                            $(".modal-dialog").css('display', 'block');
                            layer.closeAll("loading");
                            $("#$this->id").find('.modal-body').html(data);
                         },
                         error: function () {

                         }
                     });
                  }
                });
              
                
                $("#$this->id").on("show.bs.modal", function (e) {   
                    $(".modal-dialog").css('display', 'none');
                    
                    var index = layer.load(1, {
                            shade: [0.1,"rgba(0, 0, 0, 0.0)"] 
                    });
                 
                });
              
                //
                $("#$this->id").on("hide.bs.modal", function (e) {
                     $(this).removeData("bs.modal");
                     $(this).find(".modal-body").empty();
                    
                 });
js;

        $this->getView()->registerJs($js);
    }


}