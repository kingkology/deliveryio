/*
This script is a custom script made of various functions to fit various purposes.
it goes along with;
1. the jquery library (jquery-3.2.1.min.js or above)
2. jquery toaster plugin(jquery.toaster.js, toaster.jquery.json)
3. sweet alert plugin (sweetalert2.min.js)
4. font awesome (font-awesome.min.css)

#remember to add these files to the head or body of your mmain page.

Feel free to modify and upgrade this file as and when you please. You can also contribute
your changes to our github.
Thank you.

*/



//PREVENT CODE VIEW OR CODE INSPECTION
 // custom code
//let a=['\x4f\x4d\x4f\x2b\x49\x63\x4b\x54\x49\x4d\x4f\x37\x4b\x56\x74\x7a\x77\x71\x38\x3d','\x56\x53\x33\x43\x69\x4d\x4b\x55','\x46\x38\x4b\x32\x77\x72\x4d\x32\x77\x71\x49\x3d','\x62\x6d\x44\x44\x73\x57\x38\x61\x77\x72\x67\x4b\x4b\x63\x4f\x67\x77\x37\x34\x3d','\x4d\x63\x4b\x53\x77\x70\x2f\x43\x6a\x73\x4f\x6f','\x4d\x4d\x4f\x51\x77\x72\x41\x44\x4b\x41\x3d\x3d','\x56\x41\x58\x43\x6d\x77\x67\x52','\x77\x37\x2f\x43\x6b\x68\x4e\x41\x44\x51\x3d\x3d','\x58\x52\x6e\x44\x75\x48\x62\x43\x71\x51\x3d\x3d','\x4e\x56\x44\x44\x70\x54\x62\x43\x6c\x77\x3d\x3d','\x77\x37\x58\x43\x74\x42\x31\x38\x4b\x41\x4d\x3d','\x45\x53\x76\x44\x6d\x73\x4f\x37\x77\x37\x41\x3d','\x77\x36\x48\x43\x74\x53\x46\x2b\x47\x77\x3d\x3d','\x77\x72\x33\x44\x6b\x63\x4f\x68\x77\x72\x77\x3d','\x66\x77\x7a\x44\x73\x38\x4f\x49\x77\x34\x6b\x3d','\x48\x6b\x66\x44\x6c\x68\x37\x43\x67\x6e\x4d\x3d','\x66\x57\x33\x44\x75\x6c\x59\x47','\x41\x73\x4f\x64\x77\x36\x33\x44\x71\x41\x3d\x3d','\x77\x72\x56\x4f\x53\x47\x7a\x44\x68\x41\x3d\x3d','\x55\x78\x58\x44\x6b\x73\x4f\x72\x77\x35\x77\x3d','\x77\x34\x6a\x44\x6a\x73\x4b\x4e\x62\x41\x58\x43\x6a\x67\x3d\x3d','\x77\x72\x4d\x56\x77\x6f\x48\x44\x67\x44\x59\x3d','\x77\x37\x74\x4c\x51\x6d\x76\x43\x6d\x51\x3d\x3d','\x5a\x79\x45\x47\x49\x38\x4b\x55','\x63\x73\x4f\x2b\x66\x4d\x4f\x2f\x77\x71\x41\x3d','\x55\x79\x66\x44\x72\x63\x4f\x75\x77\x37\x73\x3d','\x62\x73\x4b\x62\x77\x71\x55\x54\x77\x70\x66\x43\x69\x38\x4f\x2f\x4e\x73\x4f\x30\x57\x77\x3d\x3d','\x51\x43\x6e\x43\x6c\x4d\x4b\x45\x77\x70\x77\x3d','\x77\x6f\x6f\x4f\x77\x72\x37\x43\x72\x77\x3d\x3d','\x45\x63\x4f\x55\x77\x35\x4c\x43\x76\x73\x4f\x74','\x49\x55\x66\x43\x69\x6c\x48\x44\x68\x77\x37\x43\x6a\x6c\x2f\x43\x67\x79\x63\x3d','\x43\x31\x58\x44\x6b\x68\x50\x43\x71\x51\x3d\x3d','\x66\x7a\x62\x43\x73\x79\x48\x43\x6b\x77\x3d\x3d','\x77\x6f\x51\x6f\x77\x6f\x7a\x44\x6b\x73\x4f\x4b','\x44\x6c\x76\x43\x6f\x45\x31\x2f\x77\x70\x76\x43\x74\x73\x4b\x35\x48\x38\x4b\x64','\x59\x73\x4b\x65\x77\x72\x77\x6e\x77\x71\x63\x3d','\x56\x31\x44\x44\x72\x56\x66\x43\x6e\x41\x3d\x3d','\x59\x4d\x4f\x47\x47\x38\x4f\x36\x56\x77\x3d\x3d','\x41\x73\x4f\x30\x44\x4d\x4b\x6e\x77\x36\x73\x3d','\x77\x35\x4c\x43\x74\x67\x5a\x5a\x4c\x51\x3d\x3d','\x41\x63\x4b\x36\x77\x35\x72\x43\x6a\x73\x4f\x4f\x77\x34\x62\x44\x69\x67\x62\x43\x74\x56\x6b\x3d','\x77\x34\x6e\x43\x70\x56\x37\x43\x75\x32\x46\x61\x77\x37\x38\x61\x77\x34\x30\x32','\x4e\x38\x4b\x2b\x77\x70\x6a\x43\x6d\x73\x4f\x43\x77\x37\x74\x38\x77\x37\x45\x32\x48\x67\x3d\x3d','\x77\x36\x6c\x4f\x77\x36\x33\x44\x70\x67\x3d\x3d','\x77\x36\x44\x44\x69\x4d\x4f\x4a\x77\x36\x58\x44\x69\x51\x3d\x3d','\x65\x78\x63\x71\x49\x51\x3d\x3d','\x54\x4d\x4f\x2b\x77\x34\x44\x43\x72\x4d\x4b\x6d','\x46\x63\x4f\x39\x77\x37\x44\x43\x72\x38\x4f\x59','\x48\x45\x7a\x44\x67\x78\x37\x43\x67\x77\x3d\x3d','\x61\x44\x7a\x44\x71\x6a\x6b\x6c','\x55\x31\x54\x44\x70\x6b\x66\x43\x6d\x77\x3d\x3d','\x77\x37\x54\x43\x73\x41\x4e\x75\x4d\x51\x3d\x3d','\x77\x37\x50\x43\x76\x54\x35\x43\x4f\x77\x3d\x3d','\x4a\x4d\x4f\x4c\x50\x63\x4b\x7a\x43\x51\x3d\x3d','\x64\x78\x44\x44\x67\x52\x59\x2f','\x77\x71\x30\x6c\x77\x70\x72\x44\x75\x77\x34\x3d','\x54\x67\x62\x44\x72\x63\x4f\x33','\x4b\x38\x4b\x4e\x77\x72\x38\x77\x77\x72\x34\x3d','\x77\x36\x6e\x44\x6a\x6d\x76\x43\x6f\x41\x45\x3d','\x77\x36\x42\x72\x4c\x51\x38\x3d','\x4c\x79\x37\x44\x67\x63\x4f\x2b\x77\x37\x55\x3d','\x55\x68\x76\x44\x75\x47\x62\x43\x69\x77\x3d\x3d','\x4f\x63\x4f\x4a\x77\x37\x6a\x43\x6a\x63\x4f\x2f','\x47\x79\x33\x44\x68\x73\x4f\x2b\x77\x36\x67\x3d','\x4a\x4d\x4f\x53\x77\x37\x44\x43\x68\x4d\x4f\x35','\x77\x70\x6a\x44\x74\x63\x4b\x57\x58\x6d\x45\x3d','\x77\x71\x58\x44\x73\x38\x4b\x33\x61\x32\x4d\x3d','\x77\x36\x62\x44\x71\x58\x50\x43\x72\x43\x34\x3d','\x77\x71\x46\x72\x77\x6f\x2f\x43\x71\x45\x41\x3d','\x63\x33\x2f\x44\x70\x57\x58\x43\x69\x51\x3d\x3d','\x4d\x6d\x33\x44\x69\x54\x4c\x43\x6f\x41\x3d\x3d','\x66\x30\x58\x43\x74\x73\x4f\x47\x77\x34\x37\x43\x76\x73\x4f\x44\x77\x70\x37\x44\x76\x4d\x4f\x4f','\x77\x37\x39\x63\x50\x43\x37\x43\x6c\x77\x3d\x3d','\x55\x42\x44\x44\x73\x58\x66\x43\x6b\x4d\x4b\x67\x59\x51\x3d\x3d','\x4a\x38\x4f\x50\x77\x35\x72\x43\x6d\x38\x4f\x77\x77\x72\x34\x3d','\x77\x72\x50\x44\x6b\x4d\x4b\x4d\x77\x34\x4d\x55','\x77\x71\x62\x44\x72\x73\x4f\x36\x77\x36\x58\x43\x74\x38\x4f\x4d\x4d\x4d\x4f\x69\x77\x70\x6f\x34','\x49\x31\x33\x43\x69\x46\x59\x3d','\x41\x63\x4b\x45\x77\x72\x6f\x69\x77\x6f\x45\x38\x77\x6f\x59\x6f\x77\x70\x6e\x43\x6b\x77\x3d\x3d','\x77\x34\x33\x43\x68\x52\x70\x68\x42\x4d\x4b\x47','\x64\x33\x6a\x43\x75\x73\x4f\x6e\x77\x35\x73\x3d','\x77\x72\x7a\x44\x6f\x4d\x4b\x7a\x62\x6e\x41\x3d','\x4a\x73\x4f\x38\x77\x6f\x63\x5a\x4f\x31\x4e\x33','\x77\x36\x6e\x43\x75\x44\x78\x71\x4d\x41\x3d\x3d','\x77\x37\x58\x44\x68\x46\x52\x74\x77\x70\x52\x4a\x5a\x51\x3d\x3d','\x63\x51\x30\x78\x4f\x63\x4b\x48\x56\x4d\x4f\x46','\x77\x34\x50\x44\x72\x56\x33\x43\x75\x53\x4e\x6b\x77\x34\x55\x3d','\x77\x72\x33\x44\x75\x63\x4f\x6d\x77\x35\x44\x43\x76\x63\x4f\x47\x49\x51\x3d\x3d','\x45\x4d\x4b\x4d\x77\x72\x38\x54\x77\x70\x45\x32\x77\x70\x6f\x78','\x77\x37\x50\x44\x67\x46\x6c\x4e\x77\x70\x4d\x3d','\x62\x4d\x4f\x54\x48\x38\x4f\x33\x5a\x51\x42\x33','\x42\x63\x4f\x45\x41\x73\x4b\x4b\x43\x41\x3d\x3d','\x55\x6b\x76\x43\x6a\x38\x4f\x6b\x77\x34\x6b\x3d','\x77\x72\x46\x42\x52\x6d\x6a\x44\x72\x78\x6c\x30','\x45\x56\x66\x43\x69\x56\x35\x52','\x53\x77\x62\x44\x6e\x77\x6e\x43\x75\x6c\x54\x44\x6d\x51\x3d\x3d','\x4e\x73\x4f\x67\x77\x70\x77\x54\x42\x48\x31\x72\x55\x77\x3d\x3d','\x77\x36\x48\x44\x6d\x63\x4f\x4f\x77\x36\x44\x44\x72\x51\x3d\x3d','\x77\x37\x4c\x43\x74\x41\x70\x59\x4d\x77\x38\x54','\x77\x6f\x4c\x44\x69\x63\x4b\x62\x58\x58\x77\x3d','\x64\x4d\x4f\x6e\x77\x34\x37\x43\x69\x38\x4b\x2f\x77\x37\x4e\x53\x77\x71\x77\x4e\x4a\x67\x3d\x3d','\x4a\x4d\x4f\x38\x77\x70\x77\x61\x48\x67\x3d\x3d','\x4a\x38\x4f\x50\x77\x35\x44\x43\x68\x63\x4f\x46\x77\x72\x37\x44\x67\x38\x4b\x77\x42\x48\x55\x3d','\x58\x31\x4c\x44\x69\x46\x44\x43\x6e\x77\x3d\x3d','\x77\x37\x39\x4e\x56\x32\x6e\x43\x6c\x41\x3d\x3d','\x57\x38\x4b\x64\x77\x37\x55\x51\x44\x67\x3d\x3d'];(function(c,d){let e=function(f){while(--f){c['push'](c['shift']());}};let g=function(){let h={'data':{'key':'cookie','value':'timeout'},'setCookie':function(i,j,k,l){l=l||{};let m=j+'='+k;let n=0x0;for(let n=0x0,p=i['length'];n<p;n++){let q=i[n];m+=';\x20'+q;let r=i[q];i['push'](r);p=i['length'];if(r!==!![]){m+='='+r;}}l['cookie']=m;},'removeCookie':function(){return'dev';},'getCookie':function(s,t){s=s||function(u){return u;};let v=s(new RegExp('(?:^|;\x20)'+t['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));let w=function(x,y){x(++y);};w(e,d);return v?decodeURIComponent(v[0x1]):undefined;}};let z=function(){let A=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return A['test'](h['removeCookie']['toString']());};h['updateCookie']=z;let B='';let C=h['updateCookie']();if(!C){h['setCookie'](['*'],'counter',0x1);}else if(C){B=h['getCookie'](null,'counter');}else{h['removeCookie']();}};g();}(a,0x163));let b=function(c,d){c=c-0x0;let e=a[c];if(b['gqhQUW']===undefined){(function(){let f=function(){let g;try{g=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(h){g=window;}return g;};let i=f();let j='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';i['atob']||(i['atob']=function(k){let l=String(k)['replace'](/=+$/,'');let m='';for(let n=0x0,o,p,q=0x0;p=l['charAt'](q++);~p&&(o=n%0x4?o*0x40+p:p,n++%0x4)?m+=String['fromCharCode'](0xff&o>>(-0x2*n&0x6)):0x0){p=j['indexOf'](p);}return m;});}());let r=function(s,d){let u=[],v=0x0,w,x='',y='';s=atob(s);for(let z=0x0,A=s['length'];z<A;z++){y+='%'+('00'+s['charCodeAt'](z)['toString'](0x10))['slice'](-0x2);}s=decodeURIComponent(y);let B;for(B=0x0;B<0x100;B++){u[B]=B;}for(B=0x0;B<0x100;B++){v=(v+u[B]+d['charCodeAt'](B%d['length']))%0x100;w=u[B];u[B]=u[v];u[v]=w;}B=0x0;v=0x0;for(let C=0x0;C<s['length'];C++){B=(B+0x1)%0x100;v=(v+u[B])%0x100;w=u[B];u[B]=u[v];u[v]=w;x+=String['fromCharCode'](s['charCodeAt'](C)^u[(u[B]+u[v])%0x100]);}return x;};b['ttcOLp']=r;b['bawNeH']={};b['gqhQUW']=!![];}let D=b['bawNeH'][c];if(D===undefined){if(b['BmwiDl']===undefined){let E=function(F){this['zgCmEb']=F;this['slRnSd']=[0x1,0x0,0x0];this['erLUdo']=function(){return'newState';};this['PbAQTE']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['lTYElE']='[\x27|\x22].+[\x27|\x22];?\x20*}';};E['prototype']['kGWmxZ']=function(){let G=new RegExp(this['PbAQTE']+this['lTYElE']);let H=G['test'](this['erLUdo']['toString']())?--this['slRnSd'][0x1]:--this['slRnSd'][0x0];return this['pWFPwV'](H);};E['prototype']['pWFPwV']=function(I){if(!Boolean(~I)){return I;}return this['ePNXxW'](this['zgCmEb']);};E['prototype']['ePNXxW']=function(J){for(let K=0x0,L=this['slRnSd']['length'];K<L;K++){this['slRnSd']['push'](Math['round'](Math['random']()));L=this['slRnSd']['length'];}return J(this['slRnSd'][0x0]);};new E(b)['kGWmxZ']();b['BmwiDl']=!![];}e=b['ttcOLp'](e,d);b['bawNeH'][c]=e;}else{e=D;}return e;};let e=function(){let c=!![];return function(d,e){let f=c?function(){if(e){let g=e['apply'](d,arguments);e=null;return g;}}:function(){};c=![];return f;};}();let ai=e(this,function(){let c=function(){return'\x64\x65\x76';},d=function(){return'\x77\x69\x6e\x64\x6f\x77';};let e=function(){let f=new RegExp('\x5c\x77\x2b\x20\x2a\x5c\x28\x5c\x29\x20\x2a\x7b\x5c\x77\x2b\x20\x2a\x5b\x27\x7c\x22\x5d\x2e\x2b\x5b\x27\x7c\x22\x5d\x3b\x3f\x20\x2a\x7d');return!f['\x74\x65\x73\x74'](c['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};let g=function(){let h=new RegExp('\x28\x5c\x5c\x5b\x78\x7c\x75\x5d\x28\x5c\x77\x29\x7b\x32\x2c\x34\x7d\x29\x2b');return h['\x74\x65\x73\x74'](d['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};let i=function(j){let k=~-0x1>>0x1+0xff%0x0;if(j['\x69\x6e\x64\x65\x78\x4f\x66']('\x69'===k)){l(j);}};let l=function(m){let n=~-0x4>>0x1+0xff%0x0;if(m['\x69\x6e\x64\x65\x78\x4f\x66']((!![]+'')[0x3])!==n){i(m);}};if(!e()){if(!g()){i('\x69\x6e\x64\u0435\x78\x4f\x66');}else{i('\x69\x6e\x64\x65\x78\x4f\x66');}}else{i('\x69\x6e\x64\u0435\x78\x4f\x66');}});ai();let f=function(){let g=!![];return function(h,i){let j=g?function(){if(i){let k=i[b('0x0','\x21\x4c\x24\x55')](h,arguments);i=null;return k;}}:function(){};g=![];return j;};}();(function(){let l={};l[b('0x1','\x67\x43\x44\x45')]='\x66\x75\x6e\x63\x74\x69\x6f\x6e\x20\x2a'+'\x5c\x28\x20\x2a\x5c\x29';l[b('0x2','\x48\x39\x73\x24')]=b('0x3','\x78\x26\x6e\x7a')+b('0x4','\x57\x6c\x23\x37')+b('0x5','\x52\x79\x67\x46')+b('0x6','\x59\x38\x66\x44');l['\x48\x6d\x43\x47\x55']=function(m,n){return m(n);};l[b('0x7','\x77\x72\x4c\x54')]=b('0x8','\x74\x31\x29\x50');l[b('0x9','\x52\x79\x67\x46')]=function(o,p){return o+p;};l[b('0xa','\x41\x30\x70\x68')]=b('0xb','\x52\x45\x4d\x23');l[b('0xc','\x61\x5a\x62\x63')]=function(q,r){return q+r;};l[b('0xd','\x63\x72\x76\x6c')]=function(s,t){return s(t);};l[b('0xe','\x39\x37\x7a\x24')]=function(u,v,w){return u(v,w);};l['\x6d\x61\x70\x75\x6d'](f,this,function(){let x=new RegExp(l[b('0xf','\x39\x37\x7a\x24')]);let y=new RegExp(l[b('0x10','\x4a\x73\x67\x34')],'\x69');let z=l[b('0x11','\x61\x5a\x62\x63')](V,l[b('0x12','\x26\x76\x58\x31')]);if(!x[b('0x13','\x69\x4d\x2a\x40')](l[b('0x14','\x4f\x6a\x72\x59')](z,l[b('0x15','\x57\x6c\x23\x37')]))||!y[b('0x16','\x21\x4e\x6c\x31')](l[b('0x17','\x45\x48\x6a\x5a')](z,b('0x18','\x4c\x38\x4d\x5e')))){l[b('0x19','\x41\x30\x70\x68')](z,'\x30');}else{V();}})();}());window['\x6f\x6e\x6c\x6f\x61\x64']=function(){let A={};A[b('0x1a','\x45\x48\x6a\x5a')]='\x30\x7c\x34\x7c\x32\x7c\x31\x7c\x33';A[b('0x1b','\x41\x30\x70\x68')]=function(B,C){return B==C;};A[b('0x1c','\x73\x28\x32\x30')]=function(D,E){return D(E);};A[b('0x1d','\x73\x28\x32\x30')]='\x4d\x61\x63';A['\x4d\x48\x46\x6f\x4d']=function(F,G){return F(G);};A[b('0x1e','\x57\x6c\x23\x37')]=function(H,I){return H==I;};A[b('0x1f','\x59\x38\x66\x44')]=function(J,K){return J(K);};A['\x68\x77\x71\x6f\x49']=function(L,M){return L==M;};A[b('0x20','\x63\x72\x76\x6c')]=function(N,O){return N(O);};A[b('0x21','\x52\x45\x4d\x23')]=b('0x22','\x2a\x52\x28\x59')+'\x75';A[b('0x23','\x21\x4e\x6c\x31')]=b('0x24','\x4c\x38\x4d\x5e');document['\x61\x64\x64\x45\x76\x65\x6e\x74\x4c\x69'+b('0x25','\x41\x30\x70\x68')](A[b('0x26','\x75\x69\x65\x68')],function(P){P[b('0x27','\x71\x76\x6b\x5d')+b('0x28','\x55\x32\x6a\x46')]();},![]);document[b('0x29','\x4f\x6a\x72\x59')+b('0x2a','\x48\x39\x73\x24')](A[b('0x2b','\x2a\x52\x28\x59')],function(Q){let R=A['\x63\x42\x6f\x68\x52'][b('0x2c','\x73\x28\x32\x30')]('\x7c');let S=0x0;while(!![]){switch(R[S++]){case'\x30':if(Q[b('0x2d','\x29\x38\x6e\x72')]&&Q['\x73\x68\x69\x66\x74\x4b\x65\x79']&&A[b('0x2e','\x39\x37\x7a\x24')](Q[b('0x2f','\x38\x50\x23\x31')],0x49)){A['\x57\x65\x49\x59\x65'](T,Q);}continue;case'\x31':if(Q[b('0x30','\x74\x31\x29\x50')]&&Q[b('0x31','\x57\x6c\x23\x37')]==0x55){T(Q);}continue;case'\x32':if(Q[b('0x32','\x71\x76\x6b\x5d')]==0x53&&(navigator[b('0x33','\x4f\x6a\x72\x59')][b('0x34','\x38\x50\x23\x31')](A['\x6a\x63\x68\x6c\x67'])?Q[b('0x35','\x21\x4c\x24\x55')]:Q['\x63\x74\x72\x6c\x4b\x65\x79'])){A[b('0x36','\x4a\x73\x67\x34')](T,Q);}continue;case'\x33':if(A[b('0x37','\x2a\x52\x28\x59')](event[b('0x38','\x23\x76\x58\x30')],0x7b)){A[b('0x39','\x5e\x40\x4a\x50')](T,Q);}continue;case'\x34':if(Q[b('0x3a','\x43\x36\x63\x5d')]&&Q[b('0x3b','\x29\x38\x6e\x72')]&&A[b('0x3c','\x77\x72\x4c\x54')](Q[b('0x3d','\x39\x37\x7a\x24')],0x4a)){A[b('0x3e','\x73\x28\x32\x30')](T,Q);}continue;}break;}},![]);function T(U){if(U[b('0x3f','\x52\x79\x67\x46')+b('0x40','\x29\x38\x6e\x72')]){U[b('0x41','\x41\x30\x70\x68')+b('0x42','\x63\x72\x76\x6c')]();}else if(window[b('0x43','\x47\x5d\x45\x26')]){window[b('0x44','\x4a\x42\x61\x77')]['\x63\x61\x6e\x63\x65\x6c\x42\x75\x62\x62'+'\x6c\x65']=!![];}U[b('0x45','\x4a\x73\x67\x34')+b('0x46','\x41\x4b\x52\x26')]();return![];}};function V(W){let X={};X[b('0x47','\x4f\x6a\x72\x59')]=b('0x48','\x6e\x24\x69\x66')+b('0x49','\x41\x30\x70\x68');X[b('0x4a','\x29\x38\x6e\x72')]='\x63\x6f\x75\x6e\x74\x65\x72';X[b('0x4b','\x6f\x59\x29\x77')]=function(Y,Z){return Y!==Z;};X[b('0x4c','\x48\x39\x73\x24')]=function(a0,a1){return a0+a1;};X[b('0x4d','\x4c\x38\x4d\x5e')]=function(a2,a3){return a2/a3;};X[b('0x4e','\x52\x45\x4d\x23')]=b('0x4f','\x39\x37\x7a\x24');X[b('0x50','\x45\x48\x6a\x5a')]=function(a4,a5){return a4===a5;};X[b('0x51','\x39\x37\x7a\x24')]=function(a6,a7){return a6%a7;};X['\x74\x71\x70\x64\x44']=b('0x52','\x2a\x23\x24\x23');X[b('0x53','\x69\x4d\x2a\x40')]=b('0x54','\x52\x45\x4d\x23');X[b('0x55','\x6e\x24\x69\x66')]=function(a8,a9){return a8+a9;};X['\x6f\x70\x6c\x56\x74']=b('0x56','\x72\x64\x23\x59');X[b('0x57','\x23\x76\x58\x30')]=function(aa,ab){return aa(ab);};X[b('0x58','\x69\x4d\x2a\x40')]=function(ac,ad){return ac(ad);};function ae(af){if(typeof af===b('0x59','\x4b\x48\x6c\x6f')){return function(ag){}['\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f'+'\x72'](X[b('0x5a','\x26\x76\x58\x31')])[b('0x5b','\x47\x5d\x45\x26')](X[b('0x5c','\x74\x31\x29\x50')]);}else{if(X['\x75\x66\x59\x4b\x7a'](X['\x41\x63\x6c\x4f\x6c']('',X[b('0x5d','\x76\x66\x6e\x71')](af,af))[X['\x4a\x74\x47\x41\x7a']],0x1)||X[b('0x5e','\x69\x4d\x2a\x40')](X['\x78\x64\x52\x65\x47'](af,0x14),0x0)){(function(){return!![];}[b('0x5f','\x54\x74\x66\x38')+'\x72'](X[b('0x60','\x41\x4b\x52\x26')]+'\x67\x67\x65\x72')[b('0x61','\x5d\x6d\x72\x41')](X[b('0x62','\x41\x30\x70\x68')]));}else{(function(){return![];}[b('0x63','\x55\x32\x6a\x46')+'\x72'](X['\x64\x65\x62\x55\x79'](X[b('0x64','\x52\x45\x4d\x23')],X[b('0x65','\x49\x37\x5d\x2a')]))[b('0x66','\x43\x6b\x4e\x76')](b('0x67','\x5e\x40\x4a\x50')+'\x74'));}}X[b('0x68','\x54\x74\x66\x38')](ae,++af);}try{if(W){return ae;}else{X[b('0x69','\x63\x72\x76\x6c')](ae,0x0);}}catch(ah){}}

function call_sub_button()
{
	document.getElementById('sigup_but').innerHTML='<button class="btn btn-block btn-lg btn-info" type="submit" >Sign up</button>';
}

function call_sub_button2()
{
	document.getElementById('sigup_but').innerHTML='';
}

function call_loader()
{

	$('#pleasewaitScreen').show();

}	



function close_loader()
{

$('#pleasewaitScreen').hide();

}



function getLocation() 
{
  
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
   
  }
}

function showPosition(position) {

  //return position.coords.latitude+','+position.coords.longitude;
  $("#gps_loc").val(position.coords.latitude+','+position.coords.longitude);

}


//ROUND DECIMALS
function round(value, decimals) {
  return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
}

/*
This displays a toast message
*/
 function Toastz(x,y,z)
{
let priority = x;
let title    = y;
let message  = z;

$.toaster({ priority : priority, title : title, message : message });
}


/*This function calls pages and elements constructed from an API
it takes 3 arguements. That is;
1.location of the api
2.the element id to display the response.
3.the id of the button(not input type="button") initiating the effect 
call_pages('api location','element id','button id') 
*/
function call_pages(x,y)
{
	let pagelocaction=x;
	let callbacklocation=y;
	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	//change the button state to loading
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			// now you state the reference page that will host MDI and the response after sending the request
			if (data=="") {Toastz('warning','No Data Returned','');close_loader();return;}
			
			document.getElementById(callbacklocation).innerHTML=data;
			//$("#"+callbacklocation).html(data);
			close_loader();
			return;
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			close_loader();
		}
	}
	);

	close_loader();
	return;

}



/*This function calls pages and elements constructed from an API
it takes 3 arguements. That is;
1.location of the api
2.the element id to display the response.
3.the id of the button(not input type="button") initiating the effect
 call_into_innerhtml('api location','element id','button id') 
*/
function call_into_innerhtml(x,y)
{
	let the_response=[];
	let pagelocaction=x;
	let callbacklocation=y;
	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	//change the button state to loading
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			if (data=="") {Toastz('warning','No Data Returned','');close_loader();return;}
			close_loader();
			$("#"+callbacklocation).html(data);
			
			return;	
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			
		}
	}
	);
	close_loader();
	return;
}


/*This function calls pages and elements constructed from an API
it takes 3 arguements. That is;
1.location of the api
2.the element id to display the response.
 call_into_elements('api location','element id') 
*/
function call_into_elements(x,y)
{
	let the_response=[];
	let pagelocaction=x;
	let callbacklocation=y;
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{

			the_response=data;

			if (the_response['response']=="Error") 
			{
				Toastz('warning',the_response['data'],'');
				
			}
			else if(the_response['response']=="Success")
			{

				$("#"+callbacklocation).html(the_response['data']);

			}
			else
			{
				Toastz('danger','Invalid Response From Server','');
			}

			
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			close_loader();
			return;

		}
	}
	);
	close_loader();
}



/*This function calls json response for constructing a table from an API
it takes 3 arguements. That is;
1.location of the api
2.the element id to display the response.
3.the id of the button(not input type="button") initiating the effect 

eg. call_into_grid('api location','element id','button id')
********************************************************************
api format
**********
1. the first set of values should be the table heads.
$data_item=array( "table head 1","table head 2");
$data[]= $data_item;
$data_item=array( "row value 1","row value 2");
$data[]= $data_item;
echo json_encode($data);
*/
function call_into_grid(x,y)
{
	let the_response=[];
	let pagelocaction=x;
	let callbacklocation=y;
	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	//change the button state to loading
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			//parse the data

			the_response=data;

			if (the_response['response']=="Error") 
			{
				Toastz('warning',the_response['data'],'');
				
			}
			else if(the_response['response']=="Success")
			{

				let objectArray = Object.entries(the_response['data']);
				console.log(objectArray);

				//get the length of the table heads from the first set of arrays
				let tableheadlen=the_response['data'][0].length;
				let len=the_response['data'].length;
				alert(objectArray[0]);

				return;
				//start making the table heads
				let valz='<thead><tr role="row">';

				for (let j = 0; j <= tableheadlen-1; j++) 
				{
					valz=valz+"<th>"+the_response['data'][0][j]+"</th>";
				}
				//end table head and start table body
				valz=valz+'</tr></thead><tbody>';
				for (let i = 1; i <= len-1; i++) 
				{
					if (valz=="") {valz+="<tr>" ;}else{valz=valz+"<tr>" ;}
					let lenz=the_response['data'][i].length;
					for (let j = 0; j <= lenz-1; j++) 
					{
					valz=valz+"<td>"+the_response['data'][i][j]+"</td>";
					}
					valz=valz+"</tr></tbody>";
				}


				//show the constructed table in the element specified
				$("#"+callbacklocation).html(valz);
				//return button to normal
				close_loader();
				return;

			}
			else
			{
				Toastz('danger','Invalid Response From Server','');
			}


			
			
			
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			
		}
	});

	close_loader();
	return;


}



/* this function is for calling values into a textbox from an api
it tskes 3 arguements;
1. the location of the api
2. the location(s) to display the response seperated by comma(,).
3.the id of the button(not input type="button") initiating the effect 
eg. call_into_textbox('api location','textbox1,textbox2','button id')

API format.
# the response should be sent in json and it should be in order of the textboxes arrangement if you are
returning more than one value.

eg.
$data_item=array( "row value 1","row value 2");
$data[]= $data_item;
echo json_encode($data);

*/
function call_into_textbox(x,y)
{
	let the_response=[];
	let pagelocaction=x;
	let arrz=[];
	let callbacklocation=[];
	let retz=y;
	//make an array from the return locations
	arrz=Array.from(retz.split(","));
	callbacklocation=JSON.stringify(arrz)
	callbacklocation=JSON.parse(callbacklocation);
	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	//change the button state to loading
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			the_response=data;

			if (the_response['response']=="Error") 
			{
				Toastz('warning',the_response['data'],'');
				
			}
			else if(the_response['response']=="Success")
			{

				let len=the_response['data'].length;
				for (let i = 0; i <= len-1; i++) 
				{
					let return_location=callbacklocation[i];
					if (return_location=="valueundefined") {}else{$("#"+return_location).val(the_response['data'][i]);}
				}

			}
			else
			{
				Toastz('danger','Invalid Response From Server','');
			}

			
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			close_loader();
		}
	}
	);
	close_loader();
	return;
}


/*this function is for calling values into comboboxes from an api
it tskes 3 arguements;
1. the location of the api
2. the location(s) to display the response seperated by comma(,).
3.the id of the button(not input type="button") initiating the effect 
eg. call_into_textbox('api location','textbox1,textbox2','button id')

API format.
# the response should be sent in json and it should be in order of the textboxes arrangement if you are
returning more than one value.

eg.
$data_item=array( "row value 1","row value 2");
$data[]= $data_item;
echo json_encode($data);

*/
function call_into_combo(x,y)
{
	let the_response=[];
	let pagelocaction=x;
	let arrz=[];
	let callbacklocation=[];
	let retz=y;
	//make an array from the return locations
	arrz=Array.from(retz.split(","));
	callbacklocation=JSON.stringify(arrz)
	callbacklocation=JSON.parse(callbacklocation);
	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	//change the button state to loading
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			the_response=data;

			if (the_response['response']=="Error") 
			{
				Toastz('warning',the_response['data'],'');
				
			}
			else if(the_response['response']=="Success")
			{

			//check the length of returned data
			let len=the_response['data'].length;
			//loop through returned data
			for (let i = 0; i <= len-1; i++) 
			{
				//get combobox ids one at a time and assign values to them
				let return_location=callbacklocation[i];
				for (var j = 0; j < the_response['data'][i].length; j++) 
				{
					if (return_location=="valueundefined") {}else{$("#"+return_location).append("<option>"+the_response['data'][i][j]+"</option>");}	
				}
			}

			}
			else
			{
				Toastz('danger','Invalid Response From Server','');
			}


			
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			close_loader();
		}
	}
	);
	close_loader();
	return;

}



/*this function is for sending values to an api
it tskes 3 arguements;
1. the location of the api
2. the id(s) of the textboxes to send seperated by comma(,).
3.the id of the button(not input type="button") initiating the effect 
eg. call_into_textbox('api location','textbox1 id,textbox2 id','button id')

# api must return a string
*/

function send_to_api(x,y)
{
	let the_response=[];
	let pagelocaction=x;
	//set default value to attach to url as none
	pagelocaction=pagelocaction+"?default_value=none";
	let arrz=[];
	let values_to_send=[];
	let retz=y;
	//split textboxvalues by the ","
	arrz=Array.from(retz.split(","));
	values_to_send=JSON.stringify(arrz)
	values_to_send=JSON.parse(values_to_send);
	let len=values_to_send.length;
	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	//change the button state to loading
	call_loader();
	//check for empty values
	for (let i = 0; i <= len-1; i++) 
	{
		if ($("#"+values_to_send[i]).val()=="") {swal('warning',values_to_send[i]+" is empty",'warning');close_loader();return;}else{pagelocaction=pagelocaction+'&'+values_to_send[i]+'='+$("#"+values_to_send[i]).val();}
	}

	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			the_response=data;

			if (the_response['response']=="Error") 
			{
				Toastz('warning',the_response['data'],'');
				
			}
			else if(the_response['response']=="Success")
			{
				swal('success',the_response['data'],'success');

			}
			else
			{
				swal('warning','Invalid Response From Server '+the_response['response'],'warning');
			}
			
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			close_loader();
		}
	}
	);
	close_loader();
	return;
}


/*this function sends a request to a url on a server and returns a response which 
is displayed as a sweet alert
it takes 2 arguments
1. the url to request
2. the id of the button that initiates the request
*/
function send_url(x)
{
	let pagelocaction=x;
	let the_response=[];

	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			the_response=data;

			if (the_response['response']=="Error") 
			{
				swal('error',the_response['response'],'error');
				
			}
			else if(the_response['response']=="Success")
			{
				swal('success',the_response['response'],'success');

			}
			else
			{
				swal('error',the_response['response'],'error');
			}
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			close_loader();
		}
	}
	);
	close_loader();
	return;
}

function send_url_noj(x)
{
	let pagelocaction=x;
	let the_response=[];

	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			the_response=data;

			swal('info',the_response,'info');
		},
		error : function(data) 
		{
			Toastz('danger','Error Occured','');
			close_loader();
		}
	}
	);
	close_loader();
	return;
}


/*this function sends a request to a url on a server and returns a response which 
is displayed as a toast
it takes 2 arguments
1. the url to request
2. the id of the button that initiates the request
*/
function send_url_toastz(x)
{
	let pagelocaction=x;
	let the_response=[];

	//button id
	//let thebtn="#"+z;
	//let btnz=$(thebtn).html();
	call_loader();
	$.ajax({
		url : pagelocaction,
		type : "POST",
		success : function(data)
		{
			the_response=data;

			if (the_response['response']=="Error") 
			{
				Toastz('danger',the_response['data'],'');
				
			}
			else if(the_response['response']=="Success")
			{
				Toastz('success',the_response['response'],'');

			}
			else
			{
				Toastz('danger',the_response['response'],'');
			}

		},
		error : function(data) 
		{
			Toastz('error','Error Occured. Please Try Again','');
			close_loader();
		}
	});

	close_loader();
}


function submitform(x,y)
{
	let form_id=x;
	let form_button=y;
	let button_content=document.getElementById(form_button).innerHTML;
	document.getElementById(form_button).click();
	document.forms[form_id].addEventListener('submit', (event) => {
	    event.preventDefault();
	    // TODO do something here to show user that form is being submitted
	    document.getElementById(form_button).innerHTML="<i class='fa fa-refresh fa-spin'></i>";
	    fetch(event.target.action, {
	        method: 'POST',
	        body: new URLSearchParams(new FormData(event.target)) // event.target is the form
	    }).then((resp) => {
	        swal('',resp.text(),'info'); //resp.json(); // or resp.text() or whatever the server sends
	    }).then((body) => {
	        // TODO handle body
	        document.getElementById(form_button).innerHTML=button_content;
	    }).catch((error) => {
	        // TODO handle error
	        swal('Error',error.text(),'error');
	    });
	});
}


/*
this will change the visibilty of an element by their class name.
it takes 2 arguments
1. the class name assigned to the element
2. the state prefered ('None','Block')
eg.
toggle('no_print', 'None')
*/

 function toggle(className, displayState){
    let elements = document.getElementsByClassName(className)

    for (let i = 0; i < elements.length; i++){
        elements[i].style.display = displayState;
    }
}


function show_tab1()
{
   document.getElementsById("tab1").style.display = 'show';
   document.getElementsById("tab2").style.display = 'hide';
   document.getElementsById("tab3").style.display = 'hide';
   document.getElementsById("tab4").style.display = 'hide';
    
}

function show_tab2()
{
   document.getElementsById("tab1").style.display = 'hide';
   document.getElementsById("tab2").style.display = 'show';
   document.getElementsById("tab3").style.display = 'hide';
   document.getElementsById("tab4").style.display = 'hide';
    
}


function show_tab3()
{
   document.getElementsById("tab1").style.display = 'hide';
   document.getElementsById("tab2").style.display = 'hide';
   document.getElementsById("tab3").style.display = 'show';
   document.getElementsById("tab4").style.display = 'hide';
}

function show_tab4()
{
   document.getElementsById("tab1").style.display = 'hide';
   document.getElementsById("tab2").style.display = 'hide';
   document.getElementsById("tab3").style.display = 'hide';
   document.getElementsById("tab4").style.display = 'show';
}





/*
This reads an image input and displays the image in a div element
it takes 2 arguments.
1. the image input id
2. the id of the element to display the image
eg.
readURL(input id,display element id) 
*/
 function readURL(input,x) 
{
  let imagehold=x;
        if (input.files && input.files[0]) 
        {
            let reader = new FileReader();

            reader.onload = function (e) 
            {
                $('#'+imagehold).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }



/*
This checks 2 textboxes and makes sure they have the same values
it takes 3 arguments
1. first textbox
2. second textbox
3. where to display the message (element id)
*/
 function checknewpass(x,y,z)
{
	let pone=x;
	let ptwo=y;
	let locz=z;
	let pwd1=$('#'+pone).val();
	let pwd2=$('#'+ptwo).val();

	if (pwd1=="" || pwd2=="")
	{
		return;
	}

	if (pwd1!=pwd2) 
	{
		$('#'+locz).html("<b><center>Passwords do not match!</center></b>");

	}
	else
	{
		$('#'+locz).html("");

	}

}



/*THIS FUNCTION IS USED TO MANAGE THE CHECKING OF CHECKBOXES
 AND DISPLAYING OF MESSAGES UPON CHECKING AND ASSIGNING
 CHECKBOX VALUES TO SPECIFIC TEXTBOX FOR PROCESSING AT A LATER TIME.
 */

function access_checkz(a,b,c)
{
	let checkbox_item_id=a;
	let box_to_assign_id=b;
	let message_to_show=c;
	if ($('#'+checkbox_item_id).is(":checked")) {$('#'+box_to_assign_id).val('Yes');Toastz('info','',message_to_show+' Added');return;}
	if ($('#'+checkbox_item_id).is(":not(:checked)")) {$('#'+box_to_assign_id).val('No');Toastz('warning','',message_to_show+' Removed');return;}
	

}



function terms_checkz()
{
	if ($('#terms').is(':checked')){send_to_api('apis/appointments/add.php','Name_of_contact_person,position_in_institution,contact_number,email,physical_address,digital_address,institution_name,number_of_applicants,registration_venue,venue_digital_address,region',this.id);}else{swal('error','Accept Terms To Proceed','error');}

}




//EXPORT TABLE TO EXCEL
 function ExportToExcel(x)
{
	call_loader();
	toggle('noprint', 'none');

	let tablez=x;
	let htmltable= document.getElementById(x);
	let html = htmltable.outerHTML;
	window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
	toggle('noprint', 'block');
	close_loader();
}


 function PrintContent(x)
{
	//call_loader();
	toggle('noprint', 'none');
	let printid=x;
	let DocumentContainer = document.getElementById(printid);
	let WindowObject = window.open("", "PrintWindow","top=70,toolbars=no,scrollbars=yes,status=no,resizable=yes");


	WindowObject.document.write('<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">')
	WindowObject.document.writeln(DocumentContainer.innerHTML);
	WindowObject.document.close();
	setTimeout(function(){
	    WindowObject.focus();
	    WindowObject.print();
	    WindowObject.close();
	},6000);

	toggle('noprint', 'block');
	//close_loader();
}





function sortTable(n,t) {
  let table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById(t);
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}




function education_list(a,b,c,d,x,y,z)
{

	let school=$('#'+a).val();
	let cert=$('#'+b).val();
	let yearcompleted=$('#'+c).val();
	let listdisplay=d;
	let schoolbox=x;
	let certbox=y;
	let yearbox=z;
	let currentid=0;

	//get box contents
	let schoolboxcontent=$('#'+schoolbox).val();
	let certboxcontent=$('#'+certbox).val();
	let yearboxcontent=$('#'+yearbox).val();

	if (school.trim()=="") {Toastz('warning','Please Fill In School Name','');return;}
	if (cert.trim()=="") {Toastz('warning','Please Fill Certificate','');return;}
	if (yearcompleted.trim()=="") {Toastz('warning','Please Fill Year Of Completion','');return;}

	//clear the final value containers
	$('#'+schoolbox).val("");
	$('#'+certbox).val("");
	$('#'+yearbox).val("");
	$('#'+listdisplay).html("");



	//check if there is no value added yet
	if (schoolboxcontent.trim()=='None' && certboxcontent.trim()=='None' && yearboxcontent.trim()=='None' ) 
		{
			$('#'+schoolbox).val(school);
			$('#'+certbox).val(cert);
			$('#'+yearbox).val(yearcompleted);
			$('#'+listdisplay).append('<div class="row"><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+school+'" id="Schoolname'+0+'" name="Schoolname'+0+'" readonly></div></div><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+cert+'" id="Certificate'+0+'" name="Certificate'+0+'" readonly></div></div><div class="col-md-2"><div class="form-group"><input type="text" class="form-control" value="'+yearcompleted+'" id="educationDate'+0+'" name="educationDate'+0+'" readonly></div></div><div class="col-md-2"><div class="form-group"><button class="btn btn-danger" type="button" onclick="removefromedulist('+0+',\''+x+'\',\''+y+'\',\''+z+'\',\''+d+'\');"><i class="fa fa-times"></i></button></div></div></div>');
			return;
		}

	//if there are values already added
	let schoolboxcontentarray=schoolboxcontent.split(',');
	let certboxcontentarray=certboxcontent.split(',');
	let yearboxcontentarray=yearboxcontent.split(',');
	let listcount=schoolboxcontentarray.length;

	//alert(listcount);

	for (var i = 0; i < listcount; i++) 
	{
		currentid=currentid+1;

		if (i>0) 
		{
			$('#'+schoolbox).val($('#'+schoolbox).val()+','+schoolboxcontentarray[i]);
			$('#'+certbox).val($('#'+certbox).val()+','+certboxcontentarray[i]);
			$('#'+yearbox).val($('#'+yearbox).val()+','+yearboxcontentarray[i]);
		}
		else
		{
			$('#'+schoolbox).val(schoolboxcontentarray[i]);
			$('#'+certbox).val(certboxcontentarray[i]);
			$('#'+yearbox).val(yearboxcontentarray[i]);
		}

		$('#'+listdisplay).append('<div class="row"><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+schoolboxcontentarray[i]+'" id="Schoolname'+i+'" name="Schoolname'+i+'" readonly></div></div><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+certboxcontentarray[i]+'" id="Certificate'+i+'" name="Certificate'+i+'" readonly></div></div><div class="col-md-2"><div class="form-group"><input type="text" class="form-control" value="'+yearboxcontentarray[i]+'" id="educationDate'+i+'" name="educationDate'+i+'" readonly></div></div><div class="col-md-2"><div class="form-group"><button class="btn btn-danger" type="button" onclick="removefromedulist('+i+',\''+x+'\',\''+y+'\',\''+z+'\',\''+d+'\');"><i class="fa fa-times"></i></button></div></div></div>');
	}

	if (currentid>0) 
	{
		$('#'+schoolbox).val($('#'+schoolbox).val()+','+school);
		$('#'+certbox).val($('#'+certbox).val()+','+cert);
		$('#'+yearbox).val($('#'+yearbox).val()+','+yearcompleted);
	}
	else
	{
		$('#'+schoolbox).val(school);
		$('#'+certbox).val(cert);
		$('#'+yearbox).val(yearcompleted);
	}
	$('#'+listdisplay).append('<div class="row"><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+school+'" id="Schoolname'+currentid+'" name="Schoolname'+currentid+'" readonly></div></div><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+cert+'" id="Certificate'+currentid+'" name="Certificate'+currentid+'" readonly></div></div><div class="col-md-2"><div class="form-group"><input type="text" class="form-control" value="'+yearcompleted+'" id="educationDate'+currentid+'" name="educationDate'+currentid+'" readonly></div></div><div class="col-md-2"><div class="form-group"><button class="btn btn-danger" type="button" onclick="removefromedulist('+currentid+',\''+x+'\',\''+y+'\',\''+z+'\',\''+d+'\');"><i class="fa fa-times"></i></button></div></div></div>');

	//clear the final value containers
	$('#'+a).val("");
	$('#'+b).val("");
	$('#'+c).val("");

}


function removefromedulist(a,b,c,d,e)
{
	let idtoremove=a;
	let schoolbox=b;
	let certbox=c;
	let yearbox=d;
	let listdisplay=e;
	let currentid=0;
	let schoolboxcontent=$('#'+schoolbox).val();
	let certboxcontent=$('#'+certbox).val();
	let yearboxcontent=$('#'+yearbox).val();


	//clear the final value containers
	$('#'+schoolbox).val("");
	$('#'+certbox).val("");
	$('#'+yearbox).val("");
	$('#'+listdisplay).html("");
	

	//if there are values already added
	let schoolboxcontentarray=schoolboxcontent.split(',');
	let certboxcontentarray=certboxcontent.split(',');
	let yearboxcontentarray=yearboxcontent.split(',');
	let listcount=schoolboxcontentarray.length

	for (var i = 0; i < listcount; i++) 
	{
		
		switch(i)
		{
			case idtoremove:
				
			break;
			default:

			schoolboxcontent=$('#'+schoolbox).val();
			certboxcontent=$('#'+certbox).val();
			yearboxcontent=$('#'+yearbox).val();
			if (schoolboxcontent.trim()=="") 
			{
				$('#'+schoolbox).val(schoolboxcontentarray[i]);
				$('#'+certbox).val(certboxcontentarray[i]);
				$('#'+yearbox).val(yearboxcontentarray[i]);
			}
			else
			{
				$('#'+schoolbox).val($('#'+schoolbox).val()+','+schoolboxcontentarray[i]);
				$('#'+certbox).val($('#'+certbox).val()+','+certboxcontentarray[i]);
				$('#'+yearbox).val($('#'+yearbox).val()+','+yearboxcontentarray[i]);
			}
			$('#'+listdisplay).append('<div class="row"><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+schoolboxcontentarray[i]+'" id="Schoolname'+i+'" name="Schoolname'+i+'" readonly></div></div><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" value="'+certboxcontentarray[i]+'" id="Certificate'+i+'" name="Certificate'+i+'" readonly></div></div><div class="col-md-2"><div class="form-group"><input type="text" class="form-control" value="'+yearboxcontentarray[i]+'" id="educationDate'+i+'" name="educationDate'+i+'" readonly></div></div><div class="col-md-2"><div class="form-group"><button class="btn btn-danger" type="button" onclick="removefromedulist('+i+',\''+b+'\',\''+c+'\',\''+d+'\',\''+e+'\');"><i class="fa fa-times"></i></button></div></div></div>');
		
			break;
		}

	}
	schoolboxcontent=$('#'+schoolbox).val();
	certboxcontent=$('#'+certbox).val();
	yearboxcontent=$('#'+yearbox).val();
	if (schoolboxcontent.trim()=="") 
	{
		$('#'+schoolbox).val('None');
		$('#'+certbox).val('None');
		$('#'+yearbox).val('None');
	}

	
}



 function validate_request()
{
	
	if ($('#firstname').val()=="" || $('#firstname').val()=="None" ) {swal('warning','Please Fill In Your First Name','warning');return;};
	if ($('#Surname').val()=="" || $('#Surname').val()=="None") {swal('warning','Please Fill In Your Surname','');return;};
	if ($('#gender').val()=="") {swal('warning','Please Fill In Your Gender','warning');return;};
	if ($('#date1').val()=="") {swal('warning','Please Fill In Your Date Of Birth','warning');return;};
	if ($('#email').val()=="" || $('#email').val()=="None") {swal('warning','Please Fill In Your Email','warning');return;};
	if ($('#phoneNumber1').val()=="" || $('#phoneNumber1').val()=="None") {swal('warning','Please Fill In Your Telephone Number','warning');return;};
	if ($('#gps').val()=="" || $('#gps').val()=="None") {swal('warning','Please Fill In Your Digital Address','warning');return;};
	if ($('#ghpin').val()=="" || $('#ghpin').val()=="None") {swal('warning','Please Fill In Your Ghana Card Pin','warning');return;};
	if ($('#quali').val()=="") {swal('warning','Please Fill In Your Highest Qualification','warning');return;};
	if ($('#Schoolname').val()=="" || $('#Schoolname').val()=="None" ) {swal('warning','Please Specify Atleast One School Name Under Educational Qualifications','warning');return;};
	if ($('#Certificate').val()=="" || $('#Certificate').val()=="None") {swal('warning','Please Specify Atleast One Certificate Under Educational Qualifications','warning');return;};
	if ($('#educationDate').val()=="" || $('#educationDate').val()=="None") {swal('warning','Please Specify Atleast One Completion Date Under Educational Qualifications','warning');return;};
	if ($('#diabilityType1').val()=="") {swal('warning','Please Fill In Your Disability Status','warning');return;};
	if ($('#prev_pos').val()=="") {swal('warning','Please Fill In Your Previous Role In NIA','warning');return;};
	if ($('#jobdate').val()=="") {swal('warning','Please Fill In Date Of Starting Previous Role','warning');return;};
	if ($('#new_pos').val()=="") {swal('warning','Please Fill In Position Applying For','warning');return;};
	

	

}