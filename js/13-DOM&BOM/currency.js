// JavaScript Document

function $(v){
	if(typeof v =='function'){
		window.onload = v;	
	} else if(typeof v =='string'){
		return document.getElementById(v);	
	} else if(typeof v=='object'){
		return v;	
	}
}

function getStyle(obj,attr){
	return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,0)[attr];
			
};


function doMove(obj,attr,dir,target,endFn){
			dir = parseInt(getStyle(obj,attr))<target?dir:-dir;
			var speed = 0;
			clearInterval(obj.timer);
			obj.timer = setInterval(function (){
				speed = parseInt(getStyle(obj,attr))+dir;	
				
				if(speed <target && dir<0 ||speed >target && dir>0)					                {
					speed = target;	
				}
			
				obj.style[attr] = speed + 'px';
				
				if(speed ==target){
					clearInterval(obj.timer);
					endFn&&endFn();	
				}
			},30);
		};