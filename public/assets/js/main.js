$(document).ready(function(){
    let seats = document.querySelectorAll('.seat'); 
    let btnView = document.querySelectorAll('.btn-views button'); 
    let closeBtns = document.querySelectorAll('.closeBtn'); 

    let paymentMethods = document.querySelectorAll('.paymentMethod'); 
    seats.forEach(function(seat) {
        seat.addEventListener('change',()=>{
            seat.setAttribute('checked','true');
        })
       
    });
    // console.log(btnView);
    btnView.forEach(btn=>{
        btn.addEventListener('click',()=>{
           card =  btn.getAttribute('id');
           let id = document.getElementById('card'+card);

           id.setAttribute('class','block');
        })
    })

    closeBtns.forEach(closeBtn =>{
        closeBtn.addEventListener('click',()=>{
            let closeCard = closeBtn.parentElement.parentElement.parentElement.parentElement.parentElement;
            closeCard.setAttribute('class','hidden');
        })
    })

    paymentMethods.forEach(paymentMethod =>{
        paymentMethod.addEventListener('change',()=>{
            let customChecked = 'method1 block w-6 h-6 rounded-full text-light cursor-pointer border border-primary/[.6] bg-primary mr-2';
            let defaultchecklook = 'method1 block w-6 h-6 rounded-full text-light cursor-pointer border border-primary/[.6] mr-2 ';
            
            let customCheckbox = paymentMethod.parentElement.firstElementChild;
            paymentMethod.parentElement.firstElementChild.setAttribute('class',defaultchecklook)

            
            if(paymentMethod.checked){

                console.log(paymentMethod.parentElement.firstElementChild.setAttribute('class',customChecked));
            }
        })
    })

})