 
 if(document.readyState=='loading'){
    document.addEventListener('DOMContentLoaded',ready)
 } else{
    ready()
 }

 function ready(){
    var removeCartItemButtons=document.getElementsByClassName('')
    console.log(removeCartItemButtons)
    for(var i=0;i<removeCartItemButtons.length;i++){
        var button=removeCartItemButtons[i]
        button.addEventListener('click',removeCartItem)
    }
    var quantityInputs=document.getElementsByClassName('')
    for( var i=0;i<quantityInputs.length;i++){
        var input=quantityInputs[i]
        input.addEventListener('change',quantityChanged)
    }
 }

 function removeCartItem(event){
    var buttonClicked=event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
 }

var removeCartItemButtons =document.getElementsByClassName('left')
console.log(removeCartItemButtons)
for( var i=0;i<removeCartItemButtons.length;i++){
    var button= removeCartItemButtons[i]
    button.addEventListener('click',function(event){
        var buttonClicked= event.target
        buttonClicked.parentElement.parentElement.remove()
        updateCartTotal()
    })
}

function quantityChanged(event){
    var input=event.target
    if(isNaN(input.value)||input.value<=0){
        input.value=1
    }
    updateCartTotal()
}

function AddtoCart
function updateCartTotal(){
    var cartItemContainer= document.getElementsByClassName(' ')[0]
    var cartRows=cartItemContainer.getElementsByClassName(' ')
    for(var i=0;i<cartRows.length;i++){
        var cartRow =cartRows[i]
        var priceElement=cartRow.getElementsByClassName('')[0]
        var quantityElement=cartRow.getElementsByClassName(' ')[0]
        var price= parseFloat(priceElement.innerHTML.replace('$',''))
        var quantity=quantityElement.value
        total=total+(price*quantity)
    }
    document.getElementsByClassName(' ')[0].innerHTML='$'+total

}