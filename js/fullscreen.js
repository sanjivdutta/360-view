var fs=document.createElement('img');
fs.setAttribute('src','images/fullscreen.png');
fs.setAttribute('height', '75px');
fs.setAttribute('width', '75px');
fs.style.cursor="pointer";
//fs.style.backgroundSize = 'cover';
fs.style.backgroundColor="transparent";
fs.style.position="absolute";
fs.style.bottom="10px";
fs.style.right="75px";
document.body.appendChild(fs);
fs.addEventListener('click',onFullScreenBtnClick);




var fscreen="False";
function onFullScreenBtnClick()
{   
	if(fscreen=="False")
	{
	if (document.documentElement.requestFullscreen) 
		{
      	document.documentElement.requestFullscreen();
  		}
    else if (document.documentElement.webkitRequestFullscreen) 
    	{
      	document.documentElement.webkitRequestFullscreen();
    	} 
    else if (document.documentElement.mozRequestFullScreen) 
    	{
      	document.documentElement.mozRequestFullScreen();
     	}
        fscreen="True";
        fs.setAttribute('src','images/fullscreen.png');
        fs.style.bottom="10px";
	    fs.style.right="80px";
    }

 else if(fscreen=="True")
	{
   if (document.exitFullscreen) 
    {
      document.exitFullscreen();
    } 
    else if (document.mozCancelFullScreen) 
    {
     document.mozCancelFullScreen();
    } 
    else if (document.webkitCancelFullScreen) 
    {
     document.webkitExitFullscreen();
    }
    fscreen="False";
    fs.setAttribute('src','images/fullscreen.png');
    fs.style.bottom="10px";
	fs.style.right="80px";
	}
	//document.webkitExitFullscreen();
}
