//获取系统时间，将时间以指定格式显示到页面。
function systemTime()
{
    //获取系统时间。
    var dateTime=new Date();

    var year = dateTime.getFullYear();
    var month = dateTime.getMonth() + 1;
    var strDate = dateTime.getDate();
    var hours=dateTime.getHours();
    var minutes=dateTime.getMinutes();
    var seconds=dateTime.getSeconds();
    var weeks = new Array("星期日", "星期一", "星期二","星期三","星期四", "星期五","星期六");
    var week=weeks[dateTime.getDay()];
    //分秒时间是一位数字，在数字前补0。
    month = extra(month);
    strDate = extra(strDate);
    minutes = extra(minutes);
    seconds = extra(seconds);
    //将时间显示到ID为time的位置
    document.getElementById("time").innerHTML= year+"年"+month+"月"+strDate+"日"+week+" / "+hours+":"+minutes+":"+seconds;
    // document.getElementById("weeks").innerHTML= week+" / "+hours+":"+minutes+":"+seconds;
    //每隔1000ms执行方法systemTime()。
    setTimeout("systemTime()",1000);
}
//补位函数。
function extra(x)
{
    //如果传入数字小于10，数字前补一位0。
    if(x < 10)
    {
        return "0" + x;
    }
    else
    {
        return x;
    }
}