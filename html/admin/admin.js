$('edit').change( function(e) {
  //q=updateQuantity(this);
  e.preventDefault();
  var i = $(e.currentTarget).attr('data-oid');
  console.log(i);
  console.log (q);
    $.ajax({
        type: "GET",
        url: 'updatep1.php?oid='+i+'&q='+q,
    })
    .done(function() {
      //location.href = "shoppingCart.php";
      console.log("success");
    })
});