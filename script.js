//Quiz
function check(){
    var nilai=0;
    var q1=document.quiz.question1.value;
    var q2=document.quiz.question2.value;
    var q3=document.quiz.question3.value;
    var result=document.getElementById('result');
    if (q1=="d"){nilai+=30}
    if (q2=="b"){nilai+=40}
    if (q3=="a"){nilai+=30}
    result.textContent=("Score : "+nilai);
}

//Kalkulator
function insert(num){
    document.form.hasil.value = document.form.hasil.value+num;
}

function equal(){
    const exp=document.form.hasil.value;
    if(exp){
        document.form.hasil.value=eval(exp);
    }
}

function clean(){
    document.form.hasil.value="";
}

function back(){
    const exp=document.form.hasil.value;
    document.form.hasil.value=exp.substring(0,exp.length-1);
}



//Parralax
$(window).scroll(function(){
    var wScroll=$(this).scrollTop();

    $('.jumbotron img').css({
            'transform' : 'translate(0px,'+wScroll/2+'px)'   
    });

    $('#p').css({
        'transform' : 'translate(0px,'+wScroll/7+'px)'
    });

    if(wScroll>400 && wScroll<1100){
        $('.jumbotron img').addClass('img');
        $('.kiri').addClass('muncul');
        $('.kanan').addClass('muncul');
    }
    else{
        $('.jumbotron img').removeClass('img');
        $('.kiri').removeClass('muncul');
        $('.kanan').removeClass('muncul');
    }


    if(wScroll > $('.table').offset().top-400){
        $('.table').addClass('muncul');
        
    }

    else{
        $('.table').removeClass('muncul');
       
    }

    if(wScroll > $('#kalkulator').offset().top-400){
        $('#kalkulator').addClass('muncul')
    }

    else{
        $('#kalkulator').removeClass('muncul');
    }
});

