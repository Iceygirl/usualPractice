
function Drag(id){

	this.oDiv = document.getElementById(id);
	this.disX = 0;
	this.disY = 0;
	
	var _this = this;
	
	this.oDiv.onmousedown = function (){
		_this.fnDown();
	};
};

Drag.prototype.fnDown = function (ev){
	var oEvent = ev || window.event;
	this.disX = oEvent.clientX - this.oDiv.offsetLeft;
	this.disY = oEvent.clientY - this.oDiv.offsetTop;
	
	var _this = this;
	
	document.onmousemove = function (ev){
		_this.fnMove(ev);
	};

	document.onmouseup = function (){
		_this.fnUp();
	} 
	
	return false;   //firefox第二次拖动会出现的bug
};
	
Drag.prototype.fnMove = function (ev){
	var oEvent = ev || window.event;
	this.oDiv.style.left = oEvent.clientX - this.disX + 'px';
	this.oDiv.style.top = oEvent.clientY - this.disY + 'px';
};
		
Drag.prototype.fnUp = function (){
	document.onmousemove = null;
	document.onmouseup = null;
};