<?php
namespace zander84\modernadmin\widgets;


use yii\base\Widget;

class ModernModal extends Widget
{
    public $id;
    public $title;
    public $size;  //modal-lg modal-sm


    public  function run ()
    {


        $modalHtml = '<div class="modal fade " id="'.$this->id.'" role="dialog" >';
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
              
                var sendpost = function(e){
                        
                        var action = $(e.relatedTarget).attr('data-href');
                        var ids = $(e.relatedTarget).attr('data-ids');
                        var postdata = JSON.parse($(e.relatedTarget).attr('data-vals'));
                        if(ids){
                            postdata['ids'] = ids;
                        }
                        
                        if(action){
                            $.ajax({
                                 url: action,
                                 type: "post",
                                 data: postdata,
                                 success: function (data) {
                                      layer.closeAll("loading");
                                    $(".modal-dialog").css('display', 'block');
                                    $("#$this->id").find('.modal-body').html(data);
                                 },
                                 error: function () {
                
                                 }
                            });
                        }
                }
            
                
                $("#$this->id").on("show.bs.modal", function (e) {
                     var index = layer.load(1, {
                            shade: [0.1,"rgba(0, 0, 0, 0.0)"] 
                    });
                    $(".modal-dialog").css('display', 'none');  
                    sendpost(e)
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