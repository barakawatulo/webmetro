/* WebMetro Theme — main.css */

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
:root{
  --white:#FFFFFF;--off:#F8F8F6;--off2:#F1F1EE;
  --black:#0A0A0A;--dark:#111;--mid:#555;--muted:#888;
  --border:#E5E4E0;--accent:#00C853;--blue:#1A73E8;
  --head:'Outfit',sans-serif;--body:'Inter',sans-serif;
  --ease:cubic-bezier(.4,0,.2,1);--eout:cubic-bezier(0,0,.2,1);
}
body{background:#fff;color:#0A0A0A;font-family:'Inter',sans-serif;overflow-x:hidden;cursor:none}
::selection{background:#0A0A0A;color:#fff}
::-webkit-scrollbar{width:2px}
::-webkit-scrollbar-thumb{background:#0A0A0A}
/* CURSOR */
#cur{position:fixed;width:10px;height:10px;background:#0A0A0A;border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);transition:width .2s,height .2s;mix-blend-mode:difference}
#cur-r{position:fixed;width:38px;height:38px;border:1.5px solid rgba(0,0,0,.22);border-radius:50%;pointer-events:none;z-index:9998;transform:translate(-50%,-50%);transition:width .35s,height .35s;mix-blend-mode:difference}
/* NAV */
nav{position:fixed;top:0;left:0;right:0;z-index:1000;padding:0 6vw;height:68px;display:flex;align-items:center;justify-content:space-between;transition:all .5s;border-bottom:1px solid transparent}
nav.scrolled{background:rgba(255,255,255,.93);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);border-color:#E5E4E0;box-shadow:0 1px 32px rgba(0,0,0,.06)}
.logo{font-family:'Outfit',sans-serif;font-weight:800;font-size:1.25rem;color:#0A0A0A;text-decoration:none;letter-spacing:-.5px;display:flex;align-items:center}
.logo .dot{display:inline-block;width:7px;height:7px;background:#00C853;border-radius:50%;margin-left:2px;margin-bottom:10px;animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.4;transform:scale(1.5)}}
.nav-links{display:flex;align-items:center;gap:40px;list-style:none}
.nav-links a{color:#555;text-decoration:none;font-size:.84rem;font-weight:500;transition:color .25s}
.nav-links a:hover{color:#0A0A0A}
.nav-cta{background:#0A0A0A;color:#fff;padding:10px 24px;border-radius:100px;font-size:.84rem;font-weight:600;text-decoration:none;transition:all .3s}
.nav-cta:hover{transform:translateY(-1px);box-shadow:0 8px 28px rgba(0,0,0,.2)}
.ham{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:4px}
.ham span{display:block;width:22px;height:1.5px;background:#0A0A0A;transition:all .35s;transform-origin:center}
.ham.open span:nth-child(1){transform:translateY(6.5px) rotate(45deg)}
.ham.open span:nth-child(2){opacity:0}
.ham.open span:nth-child(3){transform:translateY(-6.5px) rotate(-45deg)}
.mob{position:fixed;inset:0;background:#fff;z-index:999;display:flex;flex-direction:column;justify-content:center;align-items:center;gap:40px;transform:translateY(-100%);transition:transform .6s cubic-bezier(.77,0,.175,1)}
.mob.open{transform:none}
.mob a{font-family:'Outfit',sans-serif;font-size:2.4rem;font-weight:700;color:#0A0A0A;text-decoration:none;letter-spacing:-1px;transition:color .2s}
.mob a:hover{color:#00C853}
/* HERO */
#hero{position:relative;min-height:100vh;display:flex;flex-direction:column;justify-content:flex-end;overflow:hidden;background:#fff}
.hero-wm{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-family:'Outfit',sans-serif;font-weight:900;font-size:clamp(15vw,22vw,26vw);color:transparent;-webkit-text-stroke:1px rgba(0,0,0,.048);white-space:nowrap;pointer-events:none;user-select:none;letter-spacing:-4px;will-change:transform}
.hero-content{position:relative;z-index:2;padding:0 6vw 9vh;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:flex-end}
.h-eye{display:inline-flex;align-items:center;gap:10px;font-size:.73rem;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:#888;margin-bottom:32px}
.h-eye-line{width:28px;height:1px;background:#888}
h1.h-hl{font-family:'Outfit',sans-serif;font-size:clamp(3.4rem,8vw,8.5rem);font-weight:900;letter-spacing:-3.5px;line-height:.94;color:#0A0A0A}
.h-hl .ln{display:block;overflow:hidden;padding:2px 0}
.h-hl .lni{display:block;transform:translateY(110%);transition:transform .85s cubic-bezier(0,0,.2,1)}
.h-hl .lni.up{transform:translateY(0)}
.h-hl .grn{color:#00C853}
.h-right{padding-bottom:6px;opacity:0;transform:translateY(24px);transition:opacity .8s 1s,transform .8s 1s}
.h-right.show{opacity:1;transform:none}
.h-desc{font-size:1.03rem;color:#555;line-height:1.78;max-width:400px;margin-bottom:36px}
.h-btns{display:flex;gap:14px;flex-wrap:wrap;margin-bottom:44px}
.btn-blk{display:inline-flex;align-items:center;gap:8px;background:#0A0A0A;color:#fff;padding:15px 30px;border-radius:100px;font-weight:600;font-size:.9rem;text-decoration:none;transition:all .3s}
.btn-blk:hover{transform:translateY(-2px);box-shadow:0 12px 36px rgba(0,0,0,.18)}
.btn-bdr{display:inline-flex;align-items:center;gap:8px;border:1.5px solid #E5E4E0;color:#0A0A0A;padding:15px 30px;border-radius:100px;font-weight:600;font-size:.9rem;text-decoration:none;transition:all .3s}
.btn-bdr:hover{border-color:#0A0A0A;background:#0A0A0A;color:#fff}
.h-badge{display:inline-flex;align-items:center;gap:10px;background:#F1F1EE;border-radius:100px;padding:10px 18px;font-size:.82rem;font-weight:500;color:#555}
.bdot{width:8px;height:8px;background:#00C853;border-radius:50%;animation:pulse 2s infinite}
.h-scroll{position:absolute;bottom:12vh;right:6vw;font-size:.68rem;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:#888;writing-mode:vertical-rl;z-index:2;opacity:0;animation:fIn .8s 1.8s forwards}
@keyframes fIn{to{opacity:1}}
.h-vline{position:absolute;bottom:0;left:6vw;width:1px;height:72px;background:linear-gradient(to bottom,transparent,#E5E4E0);z-index:2}
.mq-strip{border-top:1px solid #E5E4E0;overflow:hidden;background:#fff;padding:18px 0;position:relative;z-index:2}
.mq-inner{display:flex;gap:56px;animation:mq 22s linear infinite;width:max-content}
.mq-item{display:flex;align-items:center;gap:10px;font-size:.78rem;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:#888;white-space:nowrap}
.mq-dot{width:4px;height:4px;background:#00C853;border-radius:50%;flex-shrink:0}
@keyframes mq{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
/* STATS */
#stats{padding:0 6vw}
.stats-row{display:grid;grid-template-columns:repeat(4,1fr);border:1px solid #E5E4E0;border-radius:20px;overflow:hidden;transform:translateY(-44px);background:#fff;box-shadow:0 16px 56px rgba(0,0,0,.07)}
.sc{padding:44px 40px;border-right:1px solid #E5E4E0;position:relative;overflow:hidden}
.sc:last-child{border-right:none}
.sc::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:#0A0A0A;transform:scaleX(0);transform-origin:left;transition:transform .7s}
.sc.in::after{transform:scaleX(1)}
.sn{font-family:'Outfit',sans-serif;font-size:clamp(2.8rem,4vw,4.2rem);font-weight:900;color:#0A0A0A;letter-spacing:-2px;line-height:1;display:block}
.sl{color:#888;font-size:.82rem;font-weight:500;margin-top:8px;display:block}
/* SECTION BASE */
section{padding:120px 6vw;position:relative}
.eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.72rem;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:#888;margin-bottom:20px}
.eyebrow::before{content:'';width:20px;height:1px;background:#888}
h2.stitle{font-family:'Outfit',sans-serif;font-size:clamp(2.4rem,5vw,5rem);font-weight:900;letter-spacing:-2px;line-height:1.05;color:#0A0A0A;margin-bottom:24px}
.ssub{color:#555;font-size:1rem;line-height:1.75;max-width:480px}
/* REVEAL */
.rv{opacity:0;transform:translateY(48px);transition:opacity .9s,transform .9s}
.rv.in{opacity:1;transform:none}
.rvl{opacity:0;transform:translateX(-48px);transition:opacity .9s,transform .9s}
.rvl.in{opacity:1;transform:none}
.rvr{opacity:0;transform:translateX(48px);transition:opacity .9s,transform .9s}
.rvr.in{opacity:1;transform:none}
/* SERVICES */
#services{background:#fff}
.svc-hdr{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:flex-end;margin-bottom:72px}
.svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:#E5E4E0;border:1px solid #E5E4E0;border-radius:20px;overflow:hidden}
.scard{background:#fff;padding:52px 44px;position:relative;overflow:hidden;cursor:pointer;transition:background .4s}
.scard::before{content:'';position:absolute;inset:0;background:#0A0A0A;transform:translateY(102%);transition:transform .5s cubic-bezier(.76,0,.24,1);z-index:0}
.scard:hover::before{transform:translateY(0)}
.scard>*{position:relative;z-index:1}
.scard-n{font-family:'Outfit',sans-serif;font-size:clamp(4rem,6vw,6rem);font-weight:900;color:#F1F1EE;letter-spacing:-3px;line-height:1;display:block;margin-bottom:28px;transition:color .4s}
.scard:hover .scard-n{color:rgba(255,255,255,.05)}
.sicon{width:52px;height:52px;border-radius:14px;background:#F1F1EE;display:flex;align-items:center;justify-content:center;margin-bottom:24px;transition:all .4s}
.sicon i{color:#0A0A0A;font-size:1.25rem;transition:color .4s}
.scard:hover .sicon{background:rgba(255,255,255,.1);transform:rotate(-8deg) scale(1.05)}
.scard:hover .sicon i{color:#fff}
.scard h3{font-family:'Outfit',sans-serif;font-size:1.65rem;font-weight:700;letter-spacing:-.5px;margin-bottom:14px;transition:color .4s}
.scard:hover h3{color:#fff}
.scard p{color:#555;font-size:.92rem;line-height:1.75;margin-bottom:28px;transition:color .4s}
.scard:hover p{color:rgba(255,255,255,.58)}
.stags{display:flex;flex-wrap:wrap;gap:6px;margin-bottom:32px}
.stag{padding:5px 13px;border-radius:100px;font-size:.72rem;font-weight:600;border:1.5px solid #E5E4E0;color:#888;transition:all .4s}
.scard:hover .stag{border-color:rgba(255,255,255,.14);color:rgba(255,255,255,.4)}
.slink{display:inline-flex;align-items:center;gap:8px;color:#0A0A0A;font-weight:600;font-size:.9rem;text-decoration:none;transition:gap .3s,color .4s}
.scard:hover .slink{color:#00C853;gap:14px}
/* KUZA */
#kuza{background:#F8F8F6;overflow:hidden}
.kuza-wrap{display:grid;grid-template-columns:1fr 1.05fr;gap:80px;align-items:center}
.k-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(26,115,232,.1);border:1px solid rgba(26,115,232,.2);color:#1A73E8;padding:8px 18px;border-radius:100px;font-size:.74rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:28px}
h2.k-title{font-family:'Outfit',sans-serif;font-size:clamp(2.2rem,4.5vw,4.5rem);font-weight:900;letter-spacing:-2px;line-height:1.05;margin-bottom:24px}
h2.k-title span{color:#1A73E8}
.k-desc{color:#555;font-size:1rem;line-height:1.8;margin-bottom:36px}
.k-feats{list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:40px}
.k-feats li{display:flex;align-items:center;gap:10px;font-size:.9rem;font-weight:500}
.k-feats li i{color:#1A73E8;font-size:.8rem}
.btn-blue{display:inline-flex;align-items:center;gap:8px;background:#1A73E8;color:#fff;padding:15px 32px;border-radius:100px;font-weight:600;font-size:.9rem;text-decoration:none;transition:all .3s}
.btn-blue:hover{background:#1557b0;transform:translateY(-2px);box-shadow:0 12px 36px rgba(26,115,232,.3)}
.mock{border-radius:16px;overflow:hidden;border:1px solid rgba(0,0,0,.09);box-shadow:0 40px 100px rgba(0,0,0,.1)}
.mock-bar{background:#EDEDE9;padding:12px 16px;display:flex;align-items:center;gap:8px;border-bottom:1px solid rgba(0,0,0,.06)}
.mdots{display:flex;gap:6px}
.mdot{width:10px;height:10px;border-radius:50%}
.mock-url{flex:1;background:rgba(0,0,0,.07);border-radius:6px;padding:5px 14px;font-family:'Inter',monospace;font-size:.7rem;color:#888;margin:0 12px}
.mock-body{background:#FAFAF8;display:grid;grid-template-rows:auto 1fr}
.db-top{padding:13px 18px;background:#fff;border-bottom:1px solid rgba(0,0,0,.06);display:flex;justify-content:space-between;align-items:center}
.db-logo{font-family:'Outfit',sans-serif;font-size:.9rem;font-weight:800;color:#1A73E8}
.db-nav{display:flex;gap:18px}
.db-nav span{font-size:.68rem;color:#888}
.db-grid{display:grid;grid-template-columns:148px 1fr}
.db-side{background:#fff;border-right:1px solid rgba(0,0,0,.06);padding:12px 0}
.dbi{padding:8px 16px;font-size:.7rem;color:#888;display:flex;align-items:center;gap:8px}
.dbi.act{color:#1A73E8;background:rgba(26,115,232,.06);font-weight:600}
.db-main{padding:16px}
.db-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:14px}
.dbc{background:#fff;border:1px solid rgba(0,0,0,.07);border-radius:10px;padding:13px}
.dbv{font-family:'Outfit',sans-serif;font-size:1.1rem;font-weight:800}
.dbv.g{color:#00C853}
.dbl{font-size:.64rem;color:#888;margin-top:3px}
.db-chart{background:#fff;border:1px solid rgba(0,0,0,.07);border-radius:10px;padding:13px}
.dbt{font-size:.64rem;color:#888;margin-bottom:10px}
.bars{display:flex;align-items:flex-end;gap:5px;height:56px}
.bar{flex:1;border-radius:3px 3px 0 0;background:linear-gradient(to top,#1A73E8,rgba(26,115,232,.25))}
/* PORTFOLIO */
#portfolio{background:#fff}
.port-hdr{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:60px;flex-wrap:wrap;gap:24px}
.ftabs{display:flex;gap:6px;flex-wrap:wrap}
.ftab{padding:8px 22px;border-radius:100px;font-size:.82rem;font-weight:600;cursor:pointer;border:1.5px solid #E5E4E0;color:#555;background:transparent;transition:all .25s;font-family:'Inter',sans-serif}
.ftab.on,.ftab:hover{background:#0A0A0A;color:#fff;border-color:#0A0A0A}
.port-grid{display:grid;grid-template-columns:repeat(12,1fr);gap:14px}
.pi{position:relative;overflow:hidden;border-radius:16px;cursor:pointer}
.pi:nth-child(1),.pi:nth-child(4){grid-column:span 7}
.pi:nth-child(2),.pi:nth-child(3){grid-column:span 5}
.pi:nth-child(5),.pi:nth-child(6){grid-column:span 4}
.pi-in{width:100%;padding-top:72%;position:relative;overflow:hidden}
.pi-bg{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:4rem;transition:transform .7s}
.pi:hover .pi-bg{transform:scale(1.07)}
.pi-ov{position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,.92) 0%,rgba(0,0,0,.35) 55%,transparent 100%);opacity:0;transition:opacity .4s;display:flex;flex-direction:column;justify-content:flex-end;padding:26px}
.pi:hover .pi-ov{opacity:1}
.pi-tags{display:flex;gap:6px;margin-bottom:8px}
.pitag{background:rgba(255,255,255,.14);backdrop-filter:blur(8px);color:#fff;padding:4px 12px;border-radius:100px;font-size:.7rem;font-weight:600}
.pi-nm{font-family:'Outfit',sans-serif;font-size:1.1rem;font-weight:700;color:#fff}
.pi-cl{font-size:.82rem;color:rgba(255,255,255,.55);margin-top:2px;margin-bottom:10px}
.pi-lk{display:inline-flex;align-items:center;gap:6px;color:#00C853;font-size:.82rem;font-weight:600}
.port-cta{text-align:center;margin-top:52px}
/* PROCESS */
#process{background:#F8F8F6}
.proc-wrap{display:grid;grid-template-columns:1fr 1.6fr;gap:80px;align-items:start}
.proc-l{position:sticky;top:110px}
.pstep{padding:36px 0;border-bottom:1px solid #E5E4E0;display:grid;grid-template-columns:auto 1fr;gap:28px;align-items:start}
.pstep:first-child{border-top:1px solid #E5E4E0}
.pstep-l{display:flex;flex-direction:column;align-items:center;gap:12px}
.pnum{font-family:'Outfit',sans-serif;font-size:.7rem;font-weight:700;color:#888;letter-spacing:2px}
.pico{width:52px;height:52px;border-radius:14px;background:#fff;border:1.5px solid #E5E4E0;display:flex;align-items:center;justify-content:center;transition:all .4s}
.pico i{color:#0A0A0A;font-size:1.2rem;transition:all .3s}
.pstep.in .pico{background:#0A0A0A;border-color:#0A0A0A}
.pstep.in .pico i{color:#fff}
.pstep h3{font-family:'Outfit',sans-serif;font-size:1.25rem;font-weight:700;letter-spacing:-.3px;margin-bottom:10px}
.pstep p{color:#555;font-size:.92rem;line-height:1.72}
/* TESTIMONIALS */
#testi{background:#fff;overflow:hidden}
.testi-hdr{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:flex-end;margin-bottom:60px}
.tt-outer{overflow:hidden;position:relative}
.tt-outer::before,.tt-outer::after{content:'';position:absolute;top:0;bottom:0;width:100px;z-index:2;pointer-events:none}
.tt-outer::before{left:0;background:linear-gradient(to right,#fff,transparent)}
.tt-outer::after{right:0;background:linear-gradient(to left,#fff,transparent)}
.tt{display:flex;gap:20px;animation:tscroll 44s linear infinite;width:max-content}
.tt:hover{animation-play-state:paused}
.tcard{background:#F8F8F6;border:1px solid #E5E4E0;border-radius:20px;padding:36px;width:370px;flex-shrink:0;transition:all .3s}
.tcard:hover{border-color:rgba(0,0,0,.18);transform:translateY(-4px);box-shadow:0 18px 54px rgba(0,0,0,.08)}
.tstars{display:flex;gap:3px;margin-bottom:18px}
.tstars i{color:#F9AB00;font-size:.8rem}
.tq{font-size:.93rem;line-height:1.75;color:#111;margin-bottom:22px}
.tauth{display:flex;align-items:center;gap:12px}
.tav{width:42px;height:42px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:'Outfit',sans-serif;font-weight:700;font-size:.88rem;color:#fff;flex-shrink:0}
.tnm{font-weight:600;font-size:.87rem}
.tco{color:#888;font-size:.77rem;margin-top:2px}
@keyframes tscroll{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
/* BLOG */
#blog{background:#F8F8F6}
.blog-hdr{display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:24px;margin-bottom:60px}
.blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.bcard{background:#fff;border:1px solid #E5E4E0;border-radius:20px;overflow:hidden;transition:all .4s;cursor:pointer}
.bcard:hover{transform:translateY(-6px);box-shadow:0 24px 64px rgba(0,0,0,.09)}
.bthumb{height:192px;display:flex;align-items:center;justify-content:center;font-size:3.5rem}
.bcontent{padding:28px}
.bcat{font-size:.7rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#1A73E8;margin-bottom:12px}
.bcard h3{font-family:'Outfit',sans-serif;font-size:1.08rem;font-weight:700;letter-spacing:-.3px;line-height:1.36;color:#0A0A0A;margin-bottom:12px}
.bmeta{display:flex;align-items:center;justify-content:space-between;color:#888;font-size:.79rem;margin-top:20px;padding-top:18px;border-top:1px solid #E5E4E0}
.rm{color:#0A0A0A;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:4px;transition:gap .25s}
.rm:hover{gap:8px}
/* CONTACT */
#contact{background:#0A0A0A;overflow:hidden;position:relative}
#contact::before{content:'HELLO';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-family:'Outfit',sans-serif;font-weight:900;font-size:clamp(10vw,17vw,21vw);color:rgba(255,255,255,.024);white-space:nowrap;pointer-events:none;letter-spacing:-4px;user-select:none}
.contact-wrap{display:grid;grid-template-columns:1fr 1.1fr;gap:80px;align-items:start;position:relative;z-index:1}
.ci-eye{display:inline-flex;align-items:center;gap:10px;font-size:.72rem;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:rgba(255,255,255,.32);margin-bottom:20px}
.ci-eye::before{content:'';width:20px;height:1px;background:rgba(255,255,255,.22)}
h2.ctitle{font-family:'Outfit',sans-serif;font-size:clamp(2.2rem,4.5vw,4.6rem);font-weight:900;letter-spacing:-2px;line-height:1.05;color:#fff;margin-bottom:24px}
h2.ctitle span{color:#00C853}
.ci-desc{color:rgba(255,255,255,.42);line-height:1.8;margin-bottom:44px}
.cdets{display:flex;flex-direction:column;gap:18px;margin-bottom:32px}
.cdi{display:flex;align-items:center;gap:16px;font-size:.93rem}
.cdi-ic{width:44px;height:44px;background:rgba(255,255,255,.07);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cdi-ic i{color:rgba(255,255,255,.42)}
.cdi span,.cdi a{color:rgba(255,255,255,.68);text-decoration:none;transition:color .2s}
.cdi a:hover{color:#00C853}
.wa-btn{display:inline-flex;align-items:center;gap:10px;background:#25D366;color:#fff;padding:14px 28px;border-radius:100px;font-weight:700;font-size:.92rem;text-decoration:none;transition:all .3s;margin-bottom:28px}
.wa-btn:hover{background:#1fb558;transform:translateY(-2px);box-shadow:0 14px 36px rgba(37,211,102,.3)}
.socials{display:flex;gap:10px}
.soc{width:44px;height:44px;border:1px solid rgba(255,255,255,.1);border-radius:12px;display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.32);text-decoration:none;transition:all .3s}
.soc:hover{border-color:rgba(255,255,255,.38);color:#fff}
.cform{background:#fff;border-radius:24px;padding:48px}
.fg{margin-bottom:20px}
.fg label{display:block;font-size:.74rem;font-weight:600;letter-spacing:.8px;text-transform:uppercase;color:#888;margin-bottom:8px}
.fg input,.fg select,.fg textarea{width:100%;background:#F8F8F6;border:1.5px solid #E5E4E0;border-radius:12px;padding:13px 18px;color:#0A0A0A;font-family:'Inter',sans-serif;font-size:.93rem;transition:all .25s;outline:none}
.fg select option{background:#fff}
.fg textarea{resize:vertical;min-height:120px}
.fg input:focus,.fg select:focus,.fg textarea:focus{border-color:#0A0A0A;background:#fff;box-shadow:0 0 0 3px rgba(0,0,0,.06)}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.btn-sub{width:100%;background:#0A0A0A;color:#fff;border:none;padding:16px;border-radius:100px;font-weight:700;font-size:.95rem;cursor:pointer;font-family:'Inter',sans-serif;transition:all .3s}
.btn-sub:hover{background:#111;box-shadow:0 12px 36px rgba(0,0,0,.2);transform:translateY(-2px)}
.form-ok{text-align:center;padding:48px 24px;display:none}
.form-ok i{font-size:3rem;color:#00C853;margin-bottom:16px}
.form-ok h3{font-family:'Outfit',sans-serif;font-size:1.55rem;font-weight:700;margin-bottom:8px}
.form-ok p{color:#888}
/* FOOTER */
footer{background:#0A0A0A;border-top:1px solid rgba(255,255,255,.06);padding:72px 6vw 40px}
.ft{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:56px;margin-bottom:52px}
.fb-logo{font-family:'Outfit',sans-serif;font-weight:800;font-size:1.2rem;color:rgba(255,255,255,.55);text-decoration:none;letter-spacing:-.5px;display:flex;align-items:center;margin-bottom:18px}
.fb-logo strong{color:#fff}
.fb-logo .dot{display:inline-block;width:7px;height:7px;background:#00C853;border-radius:50%;margin-left:2px;margin-bottom:10px}
.fb p{color:rgba(255,255,255,.32);font-size:.87rem;line-height:1.75;max-width:280px;margin-bottom:22px}
.fsoc{display:flex;gap:8px}
footer h4{font-family:'Outfit',sans-serif;font-size:.93rem;font-weight:700;color:rgba(255,255,255,.86);margin-bottom:18px}
footer ul{list-style:none}
footer li{margin-bottom:11px}
footer li a{color:rgba(255,255,255,.36);text-decoration:none;font-size:.87rem;transition:color .2s}
footer li a:hover{color:rgba(255,255,255,.86)}
.fb-bot{display:flex;justify-content:space-between;align-items:center;padding-top:26px;border-top:1px solid rgba(255,255,255,.07);flex-wrap:wrap;gap:10px}
.fb-bot span{color:rgba(255,255,255,.26);font-size:.82rem}
#btop{position:fixed;bottom:28px;right:28px;width:48px;height:48px;background:#0A0A0A;color:#fff;border:1px solid rgba(255,255,255,.14);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;opacity:0;pointer-events:none;transition:all .35s;z-index:100;font-size:.88rem}
#btop.show{opacity:1;pointer-events:all}
#btop:hover{background:#fff;color:#0A0A0A;border-color:transparent;transform:translateY(-3px)}
/* RESPONSIVE */
@media(max-width:1100px){
  .svc-hdr{grid-template-columns:1fr}
  .kuza-wrap{grid-template-columns:1fr;gap:48px}
  .proc-wrap{grid-template-columns:1fr}
  .proc-l{position:static}
  .testi-hdr{grid-template-columns:1fr}
  .contact-wrap{grid-template-columns:1fr}
  .ft{grid-template-columns:1fr 1fr}
  .port-grid .pi:nth-child(n){grid-column:span 6}
}
@media(max-width:768px){
  .nav-links,.nav-cta{display:none}
  .ham{display:flex}
  .hero-content{grid-template-columns:1fr;gap:32px;padding:0 5vw 9vh}
  .stats-row{grid-template-columns:1fr 1fr}
  .sc:nth-child(2){border-right:none}
  .sc:nth-child(3){border-top:1px solid #E5E4E0}
  .svc-grid{grid-template-columns:1fr}
  .port-grid .pi:nth-child(n){grid-column:span 12}
  .blog-grid{grid-template-columns:1fr}
  .form-row{grid-template-columns:1fr}
  .cform{padding:28px}
  .ft{grid-template-columns:1fr}
  section{padding:80px 5vw}
  #contact::before{display:none}
}
@media(max-width:480px){
  .stats-row{grid-template-columns:1fr;transform:translateY(-28px);border-radius:14px}
  .sc{border-right:none!important;border-bottom:1px solid #E5E4E0}
  .sc:last-child{border-bottom:none}
  .hero-wm{display:none}
  h1.h-hl{letter-spacing:-2.5px}
}