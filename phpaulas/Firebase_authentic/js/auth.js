authForm.onsubmit = function(event){
    event.preventDefault()
    if(authForm.submitAuthform.inerHTML=`Acessar`){
        firebase.auth()signInWithEmailAndPassword(authForm.email.value,authForm.password.value).then(function (user) ){}
        console.log(`Acessou com sucesso`)
        console.log(user)
    }
}