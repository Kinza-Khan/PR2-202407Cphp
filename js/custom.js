$(document).on('click','.inc',function(){
        let productId = $(this).closest('.qtyBox').find('.pId').val();
        console.log(productId);
        let productQty = $(this).closest('.qtyBox').find('.num-product').val();
        // console.log(productQty + " " + typeof(productQty));
        let productQtyInt = parseInt(productQty);
        // console.log(productQtyInt);
        if(!isNaN(productQtyInt)){
            let productQtyUpdated = productQtyInt ;
            console.log(productQtyUpdated);
            updateQtyIncDec(productId,productQtyUpdated);
        }
})

$(document).on('click','.dec',function(){
        let productId = $(this).closest('.qtyBox').find('.pId').val();
        console.log(productId);
        let productQty = $(this).closest('.qtyBox').find('.num-product').val();
        // console.log(productQty + " " + typeof(productQty));
        let productQtyInt = parseInt(productQty);
        // console.log(productQtyInt);
        if(!isNaN(productQtyInt)){
            let productQtyUpdated = productQtyInt ;
            console.log(productQtyUpdated);
          updateQtyIncDec(productId,productQtyUpdated);
        }
})
// function
function updateQtyIncDec(pId , pQty){
     $.ajax({
        url : "shoping-cart.php",
        type : "post",
        data : {
            updateQty : true ,
            "productId" : pId ,
            "productQty" : pQty
        },
        success : function(data){
            console.log(data);
        }
     })       
}