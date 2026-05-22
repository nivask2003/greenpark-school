(function(){
        'use strict';
        var form=document.getElementById('contactForm');
        var submitBtn=document.getElementById('cf-submit-btn');
        var alertOk=document.getElementById('cf-success');
        var alertErr=document.getElementById('cf-error');

        function showGroup(id,invalid){
            var grp=document.getElementById('grp-'+id);
            var inp=document.getElementById('cf-'+id);
            if(!grp||!inp)return;
            grp.classList.toggle('has-error',invalid);
            inp.classList.toggle('is-invalid',invalid);
            inp.setAttribute('aria-invalid',String(invalid));
        }
        function clearMessages(){
            alertOk.classList.remove('show');
            alertErr.classList.remove('show');
        }
        function isValidEmail(v){return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim())}
        function isValidPhone(v){return v.trim()===''||/^[\d\s\+\-\(\)]{7,15}$/.test(v.trim())}

        ['cf-name','cf-email','cf-phone','cf-message'].forEach(function(id){
            var el=document.getElementById(id);
            if(!el)return;
            el.addEventListener('blur',function(){validateField(id)});
            el.addEventListener('input',function(){if(el.classList.contains('is-invalid'))validateField(id)});
        });

        function validateField(id){
            var el=document.getElementById(id);
            var val=el?el.value:'';
            var key=id.replace('cf-','');
            if(key==='name')showGroup('name',val.trim().length<2);
            if(key==='email')showGroup('email',!isValidEmail(val));
            if(key==='phone')showGroup('phone',!isValidPhone(val));
            if(key==='message')showGroup('message',val.trim().length<5);
        }

        function validateAll(){
            var name=document.getElementById('cf-name').value;
            var email=document.getElementById('cf-email').value;
            var phone=document.getElementById('cf-phone').value;
            var message=document.getElementById('cf-message').value;
            var nameOk=name.trim().length>=2;
            var emailOk=isValidEmail(email);
            var phoneOk=isValidPhone(phone);
            var messageOk=message.trim().length>=5;
            showGroup('name',!nameOk);
            showGroup('email',!emailOk);
            showGroup('phone',!phoneOk);
            showGroup('message',!messageOk);
            return nameOk&&emailOk&&phoneOk&&messageOk;
        }

        form.addEventListener('submit',function(e){
            e.preventDefault();
            clearMessages();
            if(!validateAll()){
                var firstBad=form.querySelector('.is-invalid');
                if(firstBad)firstBad.focus();
                return;
            }
            submitBtn.disabled=true;
            submitBtn.classList.add('loading');

            /* Replace this setTimeout with a real fetch() to your backend */
            setTimeout(function(){
                submitBtn.disabled=false;
                submitBtn.classList.remove('loading');
                alertOk.classList.add('show');
                alertOk.scrollIntoView({behavior:'smooth',block:'nearest'});
                form.reset();
                ['name','email','phone','message'].forEach(function(k){showGroup(k,false)});
            },1600);
        });
    })();