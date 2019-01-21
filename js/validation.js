// JavaScript Document
function check(){
    var yhm=document.form1.yhm.value;
    if(yhm=="")
    {
        alert("用户名不能为空");
        document.form1.yhm.focus();
        return false;
    }
    var checkyhm=/^[a-zA-Z]\w{5,19}$/;
    if(!checkyhm.test(yhm)){
        alert("用户名应由6-20位字母、数字或下划线组成，字母开头");
        document.form1.yhm.focus();
        document.form1.yhm.select();
        return false;
    }



    var mm=document.form1.mm.value;
    if(mm=="")
    {
        alert("登录密码不能为空");
        document.form1.mm.focus();
        return false;
    }

    var checkpwd=/^[a-zA-Z0-9]{6,20}$/;
    if(!checkpwd.test(mm)){
        alert("密码应由6-20位字母或数字组成");
        document.form1.mm.focus();
        document.form1.mm.select();
        return false;
    }


    var copymm=document.form1.copymm.value;
    if(copymm=="")
    {
        alert("确认密码不能为空");
        document.form1.copymm.focus();
        return false;
    }
    if(copymm!=mm){
        alert("两次密码输入不一致，请重新输入");
        document.form1.copymm.focus();
        document.form1.copymm.select();
        return false;
    }


    var tel=document.form1.telnumber.value;
    if(tel=="")
    {
        alert("电话不能为空");
        document.form1.telnumber.focus();
        return false;
    }
    var checkltel=/^[1][3,4,5,7,8][0-9]{9}$/;
    if(!checkltel.test(tel)){
        alert("手机号码不正确！");
        document.form1.telnumber.focus();
        document.form1.telnumber.select();
        return false;
    }


    var yzm=document.form1.yzm.value;
    if(yzm=="")
    {
        alert("验证码不能为空");
        document.form1.yzm.focus();
        return false;
    }

    return true;
}