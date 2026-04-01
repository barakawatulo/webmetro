/* WebMetro Theme — main.js */
var c=document.getElementById('cur'),r=document.getElementById('cur-r'),mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',function(e){mx=e.clientX;my=e.clientY;c.style.left=mx+'px';c.style.top=my+'px'});
(function loop(){rx+=(mx-rx)*.1;ry+=(my-ry)*.1;r.style.left=rx+'px';r.style.top=ry+'px';requestAnimationFrame(loop)})();
document.querySelectorAll('a,button,.ftab,.pi,.bcard,.scard').forEach(function(el){
  el.addEventListener('mouseenter',function(){c.style.width='54px';c.style.height='54px';r.style.width='0';r.style.height='0'});
  el.addEventListener('mouseleave',function(){c.style.width='10px';c.style.height='10px';r.style.width='38px';r.style.height='38px'});
});
var nav=document.getElementById('nav'),wm=document.getElementById('hwm');
window.addEventListener('scroll',function(){
  var sy=scrollY;
  if(sy>40)nav.classList.add('scrolled');else nav.classList.remove('scrolled');
  if(sy>500)document.getElementById('btop').classList.add('show');else document.getElementById('btop').classList.remove('show');
  if(wm)wm.style.transform='translate(-50%,calc(-50% + '+sy*.22+'px))';
});
function toggleMob(){document.getElementById('ham').classList.toggle('open');document.getElementById('mob').classList.toggle('open');document.body.style.overflow=document.getElementById('mob').classList.contains('open')?'hidden':'';}
function closeMob(){document.getElementById('ham').classList.remove('open');document.getElementById('mob').classList.remove('open');document.body.style.overflow='';}
setTimeout(function(){
  document.querySelectorAll('.lni').forEach(function(el,i){setTimeout(function(){el.classList.add('up')},i*160)});
  setTimeout(function(){document.getElementById('hright').classList.add('show')},700);
},150);
var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.12,rootMargin:'0px 0px -50px 0px'});
document.querySelectorAll('.rv,.rvl,.rvr,.pstep,.sc').forEach(function(el){io.observe(el)});
var sio=new IntersectionObserver(function(es){
  es.forEach(function(e){
    if(e.isIntersecting){
      var n=e.target.querySelector('.sn');
      if(!n||n.dataset.done)return;n.dataset.done=1;
      var t=+n.dataset.t,sfx=n.textContent.replace(/\d/g,''),v=0,inc=t/(1600/16);
      var tm=setInterval(function(){v=Math.min(v+inc,t);n.textContent=Math.floor(v)+sfx;if(v>=t)clearInterval(tm)},16);
      sio.unobserve(e.target);
    }
  });
},{threshold:.3});
document.querySelectorAll('.sc').forEach(function(el){sio.observe(el)});
var td=[
  {q:"Web Metro transformed our online presence. Our sales went up 40% in three months. They truly understand the Kenyan market.",nm:"Wanjiku Kariuki",co:"Mama's Kitchen, Nairobi",c:"#00C853"},
  {q:"The app they built is seamless — our drivers and customers both love it. Fast, no bugs, and great ongoing support.",nm:"Brian Otieno",co:"SwiftRide Logistics",c:"#1A73E8"},
  {q:"Finally, an agency that doesn't treat Africa as an afterthought. Their M-Pesa integrations work perfectly every time.",nm:"Amina Hassan",co:"Halisi Fashion House",c:"#FF6D00"},
  {q:"Our Google ranking went from page 5 to page 1 in 90 days. The ROI on our marketing spend has been incredible.",nm:"James Mwangi",co:"Savannah Real Estate",c:"#E53935"},
  {q:"KuzaERP changed how we run our business. Inventory, payroll, sales — all in one place. Absolutely brilliant.",nm:"Grace Njeri",co:"Bora Hardware Ltd",c:"#00C853"},
  {q:"Professional team, honest pricing, and they deliver on time. Genuinely rare to find in Nairobi. Highly recommended.",nm:"Samuel Kipchoge",co:"Alpine Coffee Roasters",c:"#1A73E8"},
];
var track=document.getElementById('tt');
td.concat(td).forEach(function(t){
  var init=t.nm.split(' ').map(function(w){return w[0]}).join('');
  var el=document.createElement('div');el.className='tcard';
  el.innerHTML='<div class="tstars">'+Array(5).fill('<i class="fas fa-star"></i>').join('')+'</div><p class="tq">'+t.q+'</p><div class="tauth"><div class="tav" style="background:'+t.c+'">'+init+'</div><div><div class="tnm">'+t.nm+'</div><div class="tco">'+t.co+'</div></div></div>';
  track.appendChild(el);
});
document.querySelectorAll('.ftab').forEach(function(b){
  b.addEventListener('click',function(){
    document.querySelectorAll('.ftab').forEach(function(x){x.classList.remove('on')});
    this.classList.add('on');
    var f=this.dataset.f;
    document.querySelectorAll('.pi').forEach(function(p){
      var show=f==='all'||p.dataset.c===f;
      p.style.transition='opacity .4s,transform .4s';
      p.style.opacity=show?'1':'0.1';
      p.style.transform=show?'':'scale(.97)';
    });
  });
});
function doSub(){document.getElementById('fw').style.display='none';document.getElementById('fok').style.display='block';}
document.querySelectorAll('a[href^="#"]
/* ─── WORDPRESS CONTACT FORM (AJAX) ─────────────────── */
(function() {
    var btn = document.getElementById('wmSubmitBtn');
    if (!btn) return;

    btn.addEventListener('click', function() {
        var name    = document.getElementById('wm_name')    ? document.getElementById('wm_name').value.trim()    : '';
        var email   = document.getElementById('wm_email')   ? document.getElementById('wm_email').value.trim()   : '';
        var phone   = document.getElementById('wm_phone')   ? document.getElementById('wm_phone').value.trim()   : '';
        var service = document.getElementById('wm_service') ? document.getElementById('wm_service').value        : '';
        var message = document.getElementById('wm_message') ? document.getElementById('wm_message').value.trim() : '';
        var errEl   = document.getElementById('wmFormError');

        // Basic validation
        if (!name || !email || !message) {
            if (errEl) { errEl.textContent = 'Please fill in your name, email and message.'; errEl.style.display = 'block'; }
            return;
        }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            if (errEl) { errEl.textContent = 'Please enter a valid email address.'; errEl.style.display = 'block'; }
            return;
        }

        // Loading state
        btn.disabled = true;
        btn.textContent = 'Sending...';
        if (errEl) errEl.style.display = 'none';

        // Check if webmetroData is available (WordPress context)
        if (typeof webmetroData === 'undefined') {
            // Fallback for static preview
            document.getElementById('fw').style.display = 'none';
            document.getElementById('fok').style.display = 'block';
            return;
        }

        var data = new FormData();
        data.append('action',  'webmetro_contact');
        data.append('nonce',   webmetroData.nonce);
        data.append('name',    name);
        data.append('email',   email);
        data.append('phone',   phone);
        data.append('service', service);
        data.append('message', message);

        fetch(webmetroData.ajaxUrl, { method: 'POST', body: data })
            .then(function(res) { return res.json(); })
            .then(function(res) {
                if (res.success) {
                    document.getElementById('fw').style.display = 'none';
                    document.getElementById('fok').style.display = 'block';
                } else {
                    if (errEl) { errEl.textContent = res.data.message || 'Something went wrong. Please try again.'; errEl.style.display = 'block'; }
                    btn.disabled = false;
                    btn.innerHTML = 'Send Message <i class="fas fa-paper-plane" style="font-size:.8rem"></i>';
                }
            })
            .catch(function() {
                if (errEl) { errEl.textContent = 'Network error. Please try WhatsApp or email us directly.'; errEl.style.display = 'block'; }
                btn.disabled = false;
                btn.innerHTML = 'Send Message <i class="fas fa-paper-plane" style="font-size:.8rem"></i>';
            });
    });
})();

/* ─── REMOVE OLD STATIC doSub IF EXISTS ─────────────── */
window.doSub = function() {
    document.getElementById('fw').style.display  = 'none';
    document.getElementById('fok').style.display = 'block';
};

/* ─── PORTFOLIO FILTER (multi-cat slug support) ──────── */
(function() {
    // Override the basic filter with one that handles space-separated slugs
    var tabs = document.querySelectorAll('.ftab');
    if (!tabs.length) return;
    tabs.forEach(function(b) {
        // Remove old listeners by cloning
        var nb = b.cloneNode(true);
        b.parentNode.replaceChild(nb, b);
    });
    document.querySelectorAll('.ftab').forEach(function(b) {
        b.addEventListener('click', function() {
            document.querySelectorAll('.ftab').forEach(function(x) { x.classList.remove('on'); });
            this.classList.add('on');
            var f = this.dataset.f;
            document.querySelectorAll('.pi').forEach(function(p) {
                var cats  = (p.dataset.c || '').split(' ');
                var show  = f === 'all' || cats.indexOf(f) !== -1;
                p.style.transition = 'opacity .4s, transform .4s';
                p.style.opacity    = show ? '1' : '0.1';
                p.style.transform  = show ? ''  : 'scale(.97)';
                p.style.pointerEvents = show ? '' : 'none';
            });
        });
    });
})();
