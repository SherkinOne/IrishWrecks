(function (){

   
    function searchValue ()
    {
        var boxValue= document.getElementById('txtbox').value;
        var phpRequest= document.querySelector('input[name="radioButton"]:checked').value;
         var ajaxRequest;
       console.log(boxValue);
        $(function(){
            $.ajax({
              type: "POST",
              url: 'table.php',
              data: ({call:phpRequest,
                     name:boxValue}),
              success: function(data) {
             
                document.getElementById('shipTable').innerHTML=data;
                 console.log(data);
              }
            });
          });

}

    function lo(){
        window.alert("ldf");
    }

    $(document).ready(function(e) {
        $('img[usemap]').rwdImageMaps();
        document.getElementById("txtbox").addEventListener("change", searchValue, false);

        });
    


})();