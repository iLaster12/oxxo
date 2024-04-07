const delete_form = document.getElementById("delete-form")

input_btn.addEventListener('click', e => {

    setTimeout(() => {

        if(document.getElementById("td-code")){
    
            var delete_btn = document.getElementById("delete-btn")
            var cancel_confirm_btn = document.getElementById("cancel-confirm")
            var code = document.getElementById('td-code').innerHTML
    
            delete_btn.addEventListener('click', e =>{
                delete_form.className = 'delete-form-show'
            })
            cancel_confirm_btn.addEventListener('click', e =>{
                delete_form.className = 'delete-form-hide'
            })
        }

    }, 200)

})