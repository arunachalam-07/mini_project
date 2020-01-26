var express=require('express');
var app=express();
app.get('/',function(req,res){
    res.send("sample_page");
});
app.get('//',function(req,res){
    res.send("/ page");
});
var server=app.listen(9090,function(){
    console.log("server is listening");
    console.log(server.address().address);
    console.log(server.address().port);
});