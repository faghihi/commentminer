/**
 * Created by hossein on 05/11/2016.
 */
$(document).ready(function () {
    $(".Closed_one").hide();
    $( "select" )
        .change(function () {
            var val=0;
            $( "select option:selected" ).each(function() {
                val=$(this).val();
                Filterthis(val);
            });

        });
});

function Filterthis(val) {
    if(val==0){
        $(".Closed_one").hide();
        $(".Open_one").show();
    }
    if(val==1){
        $(".Closed_one").show();
        $(".Open_one").hide();
    }
    if(val==2){
        $(".Open_one").show();
        $(".Closed_one").show();
    }
}