var FloatAd = function(obj) {
    var mainNode = $("." + obj.main)[0];
    if (obj.nodeLink && (typeof obj.nodeLink == "string")) {
        var newFloatObj = document.createElement("div");
        newFloatObj.id = obj.floatObj;
        newFloatObj.style.position = "absolute";
        newFloatObj.style.zIndex = 10;
        newFloatObj.innerHTML = obj.nodeLink;
        document.body.appendChild(newFloatObj);
    }
    this.ad = document.getElementById(obj.floatObj);
    this.main = document.getElementById(obj.main) || mainNode;
    this.x = obj.x;
    this.y = obj.y;
    this.locate = obj.locate;
    this.space = obj.space;
    var that = this;
    this.play = function() {
        setInterval(function() {
            that.calculate();
        }, 10);
    };
}
FloatAd.prototype = {
    constructor: FloatAd,
    calculate: function() {
        var obj_x = this.x,
            obj_y = this.y,
            main_offsetLeft = document.documentElement.scrollLeft || document.body.scrollLeft,
            main_offsetTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (this.main) {
            if (this.locate == "left") {
                obj_x = this.main.offsetLeft - this.ad.offsetWidth - this.space;
            } else if (this.locate == "right") {
                obj_x = this.main.offsetLeft + this.main.offsetWidth + this.space;
            }
            if (this.ad.offsetLeft != main_offsetLeft + obj_x) {
                var dx = (main_offsetLeft + obj_x - this.ad.offsetLeft) * 0.08;
                dx = (dx > 0 ? 1 : -1) * Math.ceil(Math.abs(dx));
                this.ad.style.left = this.ad.offsetLeft + dx + "px";
            }
        } else {
            if (this.locate == "left") {
                this.ad.style.left = obj_x + "px";
            } else if (this.locate == "right") {
                this.ad.style.right = obj_x + "px";
            }
        }
        if (this.ad.offsetTop != main_offsetTop + obj_y) {
            var dy = (main_offsetTop + obj_y - this.ad.offsetTop) * 0.08;
            dy = (dy > 0 ? 1 : -1) * Math.ceil(Math.abs(dy));
            this.ad.style.top = this.ad.offsetTop + dy + "px";
        }
    }
}