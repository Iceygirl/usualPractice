function LimitDrag(id){
	Drag.call(this,id);
}

for(var i in Drag.prototype){
	LimitDrag.prototype[i] = Drag.prototype[i];
}

LimitDrag.prototype.fnMove = function (ev){
	var oEvent = ev || window.event;
	var l = oEvent.clientX - this.disX;
	var t = oEvent.clientY - this.disY;
	
	if(l<0){
		l=0;
	}
	if(l>document.documentElement.clientWidth - this.oDiv.offsetWidth){
		l=document.documentElement.clientWidth - this.oDiv.offsetWidth;
	}
	
	if(t<0){
		t=0;
	}
	if(t>document.documentElement.clientHeight - this.oDiv.offsetHeight){
		t=document.documentElement.clientHeight - this.oDiv.offsetHeight;
	}
	this.oDiv.style.left = l + 'px';
	this.oDiv.style.top =  t + 'px';
};
