async function getdata(url,renderfc){
    const response=await fetch(url);
    const data=await response.json();
    renderfc(data);
}