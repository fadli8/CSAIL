function test1(){
    var height =  document.getElementById("t1").offsetHeight;
    if(height == '144'){
        document.getElementById("t1").style.height = '890px';
        
    }else if(height > '144'){

        document.getElementById("t1").style.height = '144px';
       
    }
    return false;
    // alert(height);
}

function test2(){
    var height =  document.getElementById("t2").offsetHeight;
    if(height == '144'){
        document.getElementById("t2").style.height = '750px';
        
    }else if(height > '144'){

        document.getElementById("t2").style.height = '144px';
       
    }
    return false;
    // alert(height);
}

function test3(){
    var height =  document.getElementById("t3").offsetHeight;
    if(height == '144'){
        document.getElementById("t3").style.height = '830px';
        
    }else if(height > '144'){

        document.getElementById("t3").style.height = '144px';
       
    }
    return false;
    // alert(height);
}