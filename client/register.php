

<div class="flex min-h-screen">
      
          <!-- Container -->
          <div class="flex flex-row w-full">
      
            <!-- Sidebar -->
            <div class='hidden lg:flex flex-col justify-between bg-teal-200 text-teal-900 lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg'>
              <div class="flex items-center justify-start space-x-3">
                <a class="font-extrabold text-3xl" href="index.php">SkinCare</a>
              </div>
              <div class='space-y-5'>
                <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold">Fedezd fel a bőrápolás végtelen világát</h1>
                <p class="text-lg">Van már fiókod?</p>
                <a href="index.php?prog=login.php"
                  class="inline-block flex-none px-4 py-3 rounded-lg font-medium bg-teal-900 text-white">Lépj be itt</a>
              </div>
              <p class="font-medium">© 2024 SkinCare</p>
            </div>
      
            <!-- Login -->

            <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]"><div class="absolute bottom-0 left-0 right-0 top-0 bg-[radial-gradient(circle_500px_at_50%_200px,#c4fff6,transparent)]"></div></div>

            <div class="flex flex-1 flex-col items-center justify-center px-10 relative">
              <div class="flex lg:hidden justify-between items-center w-full py-4">
                <div class="flex items-center justify-start space-x-3">
                    <p class="font-extrabold text-3xl text-teal-900">SkinCare</p>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="text-teal-800">Van már fiókod?</span>
                  <a href="index.php?prog=login.php" class="underline font-medium text-[#070eff]">
                    Lépj be
                  </a>
                </div>
              </div>
              <!-- Login box -->
              <div class="flex flex-1 flex-col  justify-center space-y-5 max-w-md">
                <div class="flex flex-col space-y-2 text-center">
                  <h2 class="text-3xl md:text-4xl font-bold text-teal-900">Hozz létre egy fiókot</h2>
                  <p class="text-md md:text-xl text-teal-900">Fedezd fel a bőrápolás végtelen világát!</p>
                </div>
                <form class="flex flex-col max-w-md space-y-5" id="form" >
                    <p id="msg" class="font-semibold text-green-500"></p>
                    <p class="vrfUsername font-semibold text-red-500 hidden"></p>
                <input type="text" id="username" name="username" onblur="verifyUsername(this)" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-teal-600 rounded-lg font-medium placeholder:font-normal focus:shadow-teal-200 focus:shadow focus:shadow-lg transition-all duration-300" placeholder="Felhasználónév" required autofocus>

                <p class="vrfEmail font-semibold text-red-500 hidden"></p>
                <input type="email" id="email" name="email" onblur="verifyEmail(this)" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-teal-600 rounded-lg font-medium placeholder:font-normal focus:shadow-teal-200 focus:shadow focus:shadow-lg transition-all duration-300" placeholder="E-mail" required >
                <p class="vrfPassword font-semibold text-red-500 hidden"></p>
                    <input type="password" placeholder="Jelszó" id="password" name="password"
                    class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-teal-600 rounded-lg font-medium placeholder:font-normal focus:shadow-teal-200 focus:shadow focus:shadow-lg transition-all duration-300" required />
                    
                    <input type="password" placeholder="Jelszó megerősítése"  id="password2" name="password2" onblur="comparePasswords(this)" required
                    class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-teal-600 rounded-lg font-medium placeholder:font-normal focus:shadow-teal-200 focus:shadow focus:shadow-lg transition-all duration-300" />
                  <input type="button" onclick="newUser()" class="flex items-center justify-center px-3 py-2 md:px-4 md:py-3 rounded-lg font-medium bg-teal-900 text-white hover:cursor-pointer hover:scale-[102.5%] transition-all duration-300" value="Fiók létrehozása" />
                </form >
              </div>
      
              
      
            </div>
          </div>

<script>
let user={email:false,username:false,password:false}

function verifyUsername(obj){
  console.log(obj.value);
  if(obj.value.length>0)
    verifyUser('../server/verifyUser.php?username='+obj.value,renderVrfUsername)
}
function verifyEmail(obj){
  console.log(obj.value);
  if(obj.value.length>0)
    verifyUser('../server/verifyUser.php?email='+obj.value,renderVrfEmail)
}

function comparePasswords(obj){
    console.log(obj.value)
    console.log(document.getElementById("password").value)
    if(obj.value != document.getElementById("password").value){
        user.password = false
        document.querySelector('.vrfPassword').innerHTML="A megadott jelszavak nem egyeznek"
        document.querySelector('.vrfPassword').classList.add("block")
        document.querySelector('.vrfPassword').classList.remove("hidden")
    }else{
        user.password = true
        document.querySelector('.vrfPassword').innerHTML=""
        document.querySelector('.vrfPassword').classList.remove("block")
        document.querySelector('.vrfPassword').classList.add("hidden")
    }
    
}

function renderVrfEmail(data){
  console.log(data);
  if(data.nr==1){
    document.querySelector('.vrfEmail').innerHTML="Foglalt e-mail"
    document.querySelector('.vrfEmail').classList.add("block")
    document.querySelector('.vrfEmail').classList.remove("hidden")
    user.email=false
  }else{
    document.querySelector('.vrfEmail').innerHTML=""
    document.querySelector('.vrfEmail').classList.remove("block")
    document.querySelector('.vrfEmail').classList.add("hidden")
    user.email=true
  }
}
function renderVrfUsername(data){
  console.log(data);
  if(data.nr==1){
    document.querySelector('.vrfUsername').innerHTML="Foglalt felhasználónév"
    document.querySelector('.vrfUsername').classList.add("block")
    document.querySelector('.vrfUsername').classList.remove("hidden")
    user.username=false
  }else{
    document.querySelector('.vrfUsername').innerHTML=""
    document.querySelector('.vrfUsername').classList.remove("block")
    document.querySelector('.vrfUsername').classList.add("hidden")
    user.username=true
  }
}

async function newUser(){
  if(user.email && user.username && user.password){
     const myFormData = new FormData(document.getElementById('form'));  
     myFormData.delete('password2');
     console.log(myFormData)
 /* for(let obj of myFormData)
      console.log(obj);*/
      
      let configObj={
        method: 'POST',
        body: myFormData
      }
    userData('../server/insertUser.php',configObj,render)
  }
 
}

function render(data){
  console.log(data.msg);
  document.getElementById('msg').innerHTML=data.msg;
  if(data?.id){//azt jelenti, h sikeres volt a regisztráció
    user.email=false
    user.username=false
  }

}

</script>
