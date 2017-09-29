// 百度地图API功能
var map = new BMap.Map("allmap");// 创建Map实例
map.centerAndZoom(new BMap.Point(104.072366,30.663049),8);      // 初始化地图,用城市名设置地图中心点
var point = new BMap.Point(104.058616,30.596286);           //定位坐标

var opts = {
    width : 200,     // 信息窗口宽度
    height: 100,     // 信息窗口高度
    title : "成都市第一人民医院" , // 信息窗口标题
}
var infoWindow = new BMap.InfoWindow("地址：成都市高新南区繁雄大道万象北路18号", opts);  // 创建信息窗口对象

setTimeout(function(){
    map.centerAndZoom(point, 15);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);               // 将标注添加到地图中
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    marker.addEventListener("click", function(){
        map.openInfoWindow(infoWindow,point); //开启信息窗口
    });

}, 2000);  //2秒后放大到15级



map.enableScrollWheelZoom(true);
var navigationControl = new BMap.NavigationControl({
    // 靠左上角位置
    anchor: BMAP_ANCHOR_TOP_LEFT,
    // LARGE类型
    type: BMAP_NAVIGATION_CONTROL_LARGE,
    // 启用显示定位
    enableGeolocation: true
});
map.addControl(navigationControl);
// 添加定位控件
var geolocationControl = new BMap.GeolocationControl();
geolocationControl.addEventListener("locationSuccess", function(e){
    // 定位成功事件
    var address = '';
    address += e.addressComponent.province;
    address += e.addressComponent.city;
    address += e.addressComponent.district;
    address += e.addressComponent.street;
    address += e.addressComponent.streetNumber;
    document.getElementById("address").innerHTML= "您当前所在定位的地址为：" + address;
    //alert("当前定位地址为：" + address);
});
geolocationControl.addEventListener("locationError",function(e){
    // 定位失败事件
    alert(e.message);
});
map.addControl(geolocationControl);
