const userData=async (url,configObj,renderFc)=>{
    const response=await fetch(url,configObj)
    const data=await response.json()
    renderFc(data)
}

const verifyUser=async (url,renderFc)=>{
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data)
}

const logoutUser=async (url)=>{
    const response=await fetch(url)
    const data=await response.json()
    if(data)
        location.href='./index.php'
}