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
                <p class="text-lg">Nincs még fiókod?</p>
                <a href="index.php?prog=register.php"
                  class="inline-block flex-none px-4 py-3 rounded-lg font-medium bg-teal-900 text-white">Regisztrálj itt</a>
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
                  <span class="text-teal-800">Nincs fiókod?</span>
                  <a href="index.php?prog=register.php" class="underline font-medium text-[#070eff]">
                    Regisztrálj
                  </a>
                </div>
              </div>
              <!-- Login box -->
              <div class="flex flex-1 flex-col  justify-center space-y-5 max-w-md">
                <div class="flex flex-col space-y-2 text-center">
                  <h2 class="text-3xl md:text-4xl font-bold text-teal-900">Lépj be a fiókodba</h2>
                  <p class="text-md md:text-xl text-teal-900">Fedezd fel a bőrápolás végtelen világát!</p>
                </div>
                <form class="flex flex-col max-w-md space-y-5" id="form" >
                    <p id="msg" class="font-semibold text-red-500"></p>
                <input type="text" id="username" name="username" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-teal-600 rounded-lg font-medium placeholder:font-normal" placeholder="Felhasználónév" required autofocus>
                  
                    <input type="password" placeholder="Jelszó" id="password" name="password" required
                    class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-teal-600 rounded-lg font-medium placeholder:font-normal" />
                  <input type="button" onclick="login()" class="flex items-center justify-center px-3 py-2 md:px-4 md:py-3 rounded-lg font-medium bg-teal-900 text-white hover:cursor-pointer hover:scale-[102.5%] transition-all duration-300" value="Bejelentkezés" />
                </form >
              </div>
      
              
      
            </div>
          </div>
<script>
function login() {
  let un=document.getElementById("username").value
  let pw=document.getElementById("password").value
  if (un.length>0 && pw.length>0) {
    const myFormData = new FormData(document.getElementById('form'))
    let configObj = {
      method: 'POST',
      body: myFormData
    }
    userData('../server/login.php', configObj, render)
  }
}

function render(data){
  console.log(data)
    document.getElementById('msg').innerHTML =data.msg
    if(data.msg=='ok')
      location.href= './index.php' 
}
</script>