/*! jQuery v1.11.0 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k="".trim,l={},m="1.11.0",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return n.each(this,a,b)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(e=arguments[h]))for(d in e)a=g[d],c=e[d],g!==c&&(j&&c&&(n.isPlainObject(c)||(b=n.isArray(c)))?(b?(b=!1,f=a&&n.isArray(a)?a:[]):f=a&&n.isPlainObject(a)?a:{},g[d]=n.extend(j,f,c)):void 0!==c&&(g[d]=c));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray||function(a){return"array"===n.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){return a-parseFloat(a)>=0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},isPlainObject:function(a){var b;if(!a||"object"!==n.type(a)||a.nodeType||n.isWindow(a))return!1;try{if(a.constructor&&!j.call(a,"constructor")&&!j.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}if(l.ownLast)for(b in a)return j.call(a,b);for(b in a);return void 0===b||j.call(a,b)},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(b){b&&n.trim(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=s(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:k&&!k.call("\ufeff\xa0")?function(a){return null==a?"":k.call(a)}:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){var d;if(b){if(g)return g.call(b,a,c);for(d=b.length,c=c?0>c?Math.max(0,d+c):c:0;d>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=+b.length,d=0,e=a.length;while(c>d)a[e++]=b[d++];if(c!==c)while(void 0!==b[d])a[e++]=b[d++];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=s(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(f=a[b],b=a,a=f),n.isFunction(a)?(c=d.call(arguments,2),e=function(){return a.apply(b||this,c.concat(d.call(arguments)))},e.guid=a.guid=a.guid||n.guid++,e):void 0},now:function(){return+new Date},support:l}),n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s="sizzle"+-new Date,t=a.document,u=0,v=0,w=eb(),x=eb(),y=eb(),z=function(a,b){return a===b&&(j=!0),0},A="undefined",B=1<<31,C={}.hasOwnProperty,D=[],E=D.pop,F=D.push,G=D.push,H=D.slice,I=D.indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},J="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",K="[\\x20\\t\\r\\n\\f]",L="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",M=L.replace("w","w#"),N="\\["+K+"*("+L+")"+K+"*(?:([*^$|!~]?=)"+K+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+M+")|)|)"+K+"*\\]",O=":("+L+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+N.replace(3,8)+")*)|.*)\\)|)",P=new RegExp("^"+K+"+|((?:^|[^\\\\])(?:\\\\.)*)"+K+"+$","g"),Q=new RegExp("^"+K+"*,"+K+"*"),R=new RegExp("^"+K+"*([>+~]|"+K+")"+K+"*"),S=new RegExp("="+K+"*([^\\]'\"]*?)"+K+"*\\]","g"),T=new RegExp(O),U=new RegExp("^"+M+"$"),V={ID:new RegExp("^#("+L+")"),CLASS:new RegExp("^\\.("+L+")"),TAG:new RegExp("^("+L.replace("w","w*")+")"),ATTR:new RegExp("^"+N),PSEUDO:new RegExp("^"+O),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+K+"*(even|odd|(([+-]|)(\\d*)n|)"+K+"*(?:([+-]|)"+K+"*(\\d+)|))"+K+"*\\)|)","i"),bool:new RegExp("^(?:"+J+")$","i"),needsContext:new RegExp("^"+K+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+K+"*((?:-\\d)?\\d*)"+K+"*\\)|)(?=[^-]|$)","i")},W=/^(?:input|select|textarea|button)$/i,X=/^h\d$/i,Y=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,$=/[+~]/,_=/'|\\/g,ab=new RegExp("\\\\([\\da-f]{1,6}"+K+"?|("+K+")|.)","ig"),bb=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)};try{G.apply(D=H.call(t.childNodes),t.childNodes),D[t.childNodes.length].nodeType}catch(cb){G={apply:D.length?function(a,b){F.apply(a,H.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function db(a,b,d,e){var f,g,h,i,j,m,p,q,u,v;if((b?b.ownerDocument||b:t)!==l&&k(b),b=b||l,d=d||[],!a||"string"!=typeof a)return d;if(1!==(i=b.nodeType)&&9!==i)return[];if(n&&!e){if(f=Z.exec(a))if(h=f[1]){if(9===i){if(g=b.getElementById(h),!g||!g.parentNode)return d;if(g.id===h)return d.push(g),d}else if(b.ownerDocument&&(g=b.ownerDocument.getElementById(h))&&r(b,g)&&g.id===h)return d.push(g),d}else{if(f[2])return G.apply(d,b.getElementsByTagName(a)),d;if((h=f[3])&&c.getElementsByClassName&&b.getElementsByClassName)return G.apply(d,b.getElementsByClassName(h)),d}if(c.qsa&&(!o||!o.test(a))){if(q=p=s,u=b,v=9===i&&a,1===i&&"object"!==b.nodeName.toLowerCase()){m=ob(a),(p=b.getAttribute("id"))?q=p.replace(_,"\\$&"):b.setAttribute("id",q),q="[id='"+q+"'] ",j=m.length;while(j--)m[j]=q+pb(m[j]);u=$.test(a)&&mb(b.parentNode)||b,v=m.join(",")}if(v)try{return G.apply(d,u.querySelectorAll(v)),d}catch(w){}finally{p||b.removeAttribute("id")}}}return xb(a.replace(P,"$1"),b,d,e)}function eb(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function fb(a){return a[s]=!0,a}function gb(a){var b=l.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function hb(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function ib(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||B)-(~a.sourceIndex||B);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function jb(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function kb(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function lb(a){return fb(function(b){return b=+b,fb(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function mb(a){return a&&typeof a.getElementsByTagName!==A&&a}c=db.support={},f=db.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},k=db.setDocument=function(a){var b,e=a?a.ownerDocument||a:t,g=e.defaultView;return e!==l&&9===e.nodeType&&e.documentElement?(l=e,m=e.documentElement,n=!f(e),g&&g!==g.top&&(g.addEventListener?g.addEventListener("unload",function(){k()},!1):g.attachEvent&&g.attachEvent("onunload",function(){k()})),c.attributes=gb(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=gb(function(a){return a.appendChild(e.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=Y.test(e.getElementsByClassName)&&gb(function(a){return a.innerHTML="<div class='a'></div><div class='a i'></div>",a.firstChild.className="i",2===a.getElementsByClassName("i").length}),c.getById=gb(function(a){return m.appendChild(a).id=s,!e.getElementsByName||!e.getElementsByName(s).length}),c.getById?(d.find.ID=function(a,b){if(typeof b.getElementById!==A&&n){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(ab,bb);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(ab,bb);return function(a){var c=typeof a.getAttributeNode!==A&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return typeof b.getElementsByTagName!==A?b.getElementsByTagName(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return typeof b.getElementsByClassName!==A&&n?b.getElementsByClassName(a):void 0},p=[],o=[],(c.qsa=Y.test(e.querySelectorAll))&&(gb(function(a){a.innerHTML="<select t=''><option selected=''></option></select>",a.querySelectorAll("[t^='']").length&&o.push("[*^$]="+K+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||o.push("\\["+K+"*(?:value|"+J+")"),a.querySelectorAll(":checked").length||o.push(":checked")}),gb(function(a){var b=e.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&o.push("name"+K+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||o.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),o.push(",.*:")})),(c.matchesSelector=Y.test(q=m.webkitMatchesSelector||m.mozMatchesSelector||m.oMatchesSelector||m.msMatchesSelector))&&gb(function(a){c.disconnectedMatch=q.call(a,"div"),q.call(a,"[s!='']:x"),p.push("!=",O)}),o=o.length&&new RegExp(o.join("|")),p=p.length&&new RegExp(p.join("|")),b=Y.test(m.compareDocumentPosition),r=b||Y.test(m.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},z=b?function(a,b){if(a===b)return j=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===e||a.ownerDocument===t&&r(t,a)?-1:b===e||b.ownerDocument===t&&r(t,b)?1:i?I.call(i,a)-I.call(i,b):0:4&d?-1:1)}:function(a,b){if(a===b)return j=!0,0;var c,d=0,f=a.parentNode,g=b.parentNode,h=[a],k=[b];if(!f||!g)return a===e?-1:b===e?1:f?-1:g?1:i?I.call(i,a)-I.call(i,b):0;if(f===g)return ib(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)k.unshift(c);while(h[d]===k[d])d++;return d?ib(h[d],k[d]):h[d]===t?-1:k[d]===t?1:0},e):l},db.matches=function(a,b){return db(a,null,null,b)},db.matchesSelector=function(a,b){if((a.ownerDocument||a)!==l&&k(a),b=b.replace(S,"='$1']"),!(!c.matchesSelector||!n||p&&p.test(b)||o&&o.test(b)))try{var d=q.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return db(b,l,null,[a]).length>0},db.contains=function(a,b){return(a.ownerDocument||a)!==l&&k(a),r(a,b)},db.attr=function(a,b){(a.ownerDocument||a)!==l&&k(a);var e=d.attrHandle[b.toLowerCase()],f=e&&C.call(d.attrHandle,b.toLowerCase())?e(a,b,!n):void 0;return void 0!==f?f:c.attributes||!n?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},db.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},db.uniqueSort=function(a){var b,d=[],e=0,f=0;if(j=!c.detectDuplicates,i=!c.sortStable&&a.slice(0),a.sort(z),j){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return i=null,a},e=db.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=db.selectors={cacheLength:50,createPseudo:fb,match:V,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ab,bb),a[3]=(a[4]||a[5]||"").replace(ab,bb),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||db.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&db.error(a[0]),a},PSEUDO:function(a){var b,c=!a[5]&&a[2];return V.CHILD.test(a[0])?null:(a[3]&&void 0!==a[4]?a[2]=a[4]:c&&T.test(c)&&(b=ob(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(ab,bb).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=w[a+" "];return b||(b=new RegExp("(^|"+K+")"+a+"("+K+"|$)"))&&w(a,function(a){return b.test("string"==typeof a.className&&a.className||typeof a.getAttribute!==A&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=db.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),t=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&t){k=q[s]||(q[s]={}),j=k[a]||[],n=j[0]===u&&j[1],m=j[0]===u&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[u,n,m];break}}else if(t&&(j=(b[s]||(b[s]={}))[a])&&j[0]===u)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(t&&((l[s]||(l[s]={}))[a]=[u,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||db.error("unsupported pseudo: "+a);return e[s]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?fb(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=I.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:fb(function(a){var b=[],c=[],d=g(a.replace(P,"$1"));return d[s]?fb(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:fb(function(a){return function(b){return db(a,b).length>0}}),contains:fb(function(a){return function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:fb(function(a){return U.test(a||"")||db.error("unsupported lang: "+a),a=a.replace(ab,bb).toLowerCase(),function(b){var c;do if(c=n?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===m},focus:function(a){return a===l.activeElement&&(!l.hasFocus||l.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return X.test(a.nodeName)},input:function(a){return W.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:lb(function(){return[0]}),last:lb(function(a,b){return[b-1]}),eq:lb(function(a,b,c){return[0>c?c+b:c]}),even:lb(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:lb(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:lb(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:lb(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=jb(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=kb(b);function nb(){}nb.prototype=d.filters=d.pseudos,d.setFilters=new nb;function ob(a,b){var c,e,f,g,h,i,j,k=x[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=Q.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=R.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(P," ")}),h=h.slice(c.length));for(g in d.filter)!(e=V[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?db.error(a):x(a,i).slice(0)}function pb(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function qb(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=v++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[u,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[s]||(b[s]={}),(h=i[d])&&h[0]===u&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function rb(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function sb(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function tb(a,b,c,d,e,f){return d&&!d[s]&&(d=tb(d)),e&&!e[s]&&(e=tb(e,f)),fb(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||wb(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:sb(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=sb(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?I.call(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=sb(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):G.apply(g,r)})}function ub(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],i=g||d.relative[" "],j=g?1:0,k=qb(function(a){return a===b},i,!0),l=qb(function(a){return I.call(b,a)>-1},i,!0),m=[function(a,c,d){return!g&&(d||c!==h)||((b=c).nodeType?k(a,c,d):l(a,c,d))}];f>j;j++)if(c=d.relative[a[j].type])m=[qb(rb(m),c)];else{if(c=d.filter[a[j].type].apply(null,a[j].matches),c[s]){for(e=++j;f>e;e++)if(d.relative[a[e].type])break;return tb(j>1&&rb(m),j>1&&pb(a.slice(0,j-1).concat({value:" "===a[j-2].type?"*":""})).replace(P,"$1"),c,e>j&&ub(a.slice(j,e)),f>e&&ub(a=a.slice(e)),f>e&&pb(a))}m.push(c)}return rb(m)}function vb(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,i,j,k){var m,n,o,p=0,q="0",r=f&&[],s=[],t=h,v=f||e&&d.find.TAG("*",k),w=u+=null==t?1:Math.random()||.1,x=v.length;for(k&&(h=g!==l&&g);q!==x&&null!=(m=v[q]);q++){if(e&&m){n=0;while(o=a[n++])if(o(m,g,i)){j.push(m);break}k&&(u=w)}c&&((m=!o&&m)&&p--,f&&r.push(m))}if(p+=q,c&&q!==p){n=0;while(o=b[n++])o(r,s,g,i);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=E.call(j));s=sb(s)}G.apply(j,s),k&&!f&&s.length>0&&p+b.length>1&&db.uniqueSort(j)}return k&&(u=w,h=t),r};return c?fb(f):f}g=db.compile=function(a,b){var c,d=[],e=[],f=y[a+" "];if(!f){b||(b=ob(a)),c=b.length;while(c--)f=ub(b[c]),f[s]?d.push(f):e.push(f);f=y(a,vb(e,d))}return f};function wb(a,b,c){for(var d=0,e=b.length;e>d;d++)db(a,b[d],c);return c}function xb(a,b,e,f){var h,i,j,k,l,m=ob(a);if(!f&&1===m.length){if(i=m[0]=m[0].slice(0),i.length>2&&"ID"===(j=i[0]).type&&c.getById&&9===b.nodeType&&n&&d.relative[i[1].type]){if(b=(d.find.ID(j.matches[0].replace(ab,bb),b)||[])[0],!b)return e;a=a.slice(i.shift().value.length)}h=V.needsContext.test(a)?0:i.length;while(h--){if(j=i[h],d.relative[k=j.type])break;if((l=d.find[k])&&(f=l(j.matches[0].replace(ab,bb),$.test(i[0].type)&&mb(b.parentNode)||b))){if(i.splice(h,1),a=f.length&&pb(i),!a)return G.apply(e,f),e;break}}}return g(a,m)(f,b,!n,e,$.test(a)&&mb(b.parentNode)||b),e}return c.sortStable=s.split("").sort(z).join("")===s,c.detectDuplicates=!!j,k(),c.sortDetached=gb(function(a){return 1&a.compareDocumentPosition(l.createElement("div"))}),gb(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||hb("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&gb(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||hb("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),gb(function(a){return null==a.getAttribute("disabled")})||hb(J,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),db}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=n.expr.match.needsContext,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^.[^:#\[\.,]*$/;function x(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(w.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return n.inArray(a,b)>=0!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=[],d=this,e=d.length;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;e>b;b++)if(n.contains(d[b],this))return!0}));for(b=0;e>b;b++)n.find(a,d[b],c);return c=this.pushStack(e>1?n.unique(c):c),c.selector=this.selector?this.selector+" "+a:a,c},filter:function(a){return this.pushStack(x(this,a||[],!1))},not:function(a){return this.pushStack(x(this,a||[],!0))},is:function(a){return!!x(this,"string"==typeof a&&u.test(a)?n(a):a||[],!1).length}});var y,z=a.document,A=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,B=n.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&a.length>=3?[null,a,null]:A.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||y).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:z,!0)),v.test(c[1])&&n.isPlainObject(b))for(c in b)n.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}if(d=z.getElementById(c[2]),d&&d.parentNode){if(d.id!==c[2])return y.find(a);this.length=1,this[0]=d}return this.context=z,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof y.ready?y.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};B.prototype=n.fn,y=n(z);var C=/^(?:parents|prev(?:Until|All))/,D={children:!0,contents:!0,next:!0,prev:!0};n.extend({dir:function(a,b,c){var d=[],e=a[b];while(e&&9!==e.nodeType&&(void 0===c||1!==e.nodeType||!n(e).is(c)))1===e.nodeType&&d.push(e),e=e[b];return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),n.fn.extend({has:function(a){var b,c=n(a,this),d=c.length;return this.filter(function(){for(b=0;d>b;b++)if(n.contains(this,c[b]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=u.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.unique(f):f)},index:function(a){return a?"string"==typeof a?n.inArray(this[0],n(a)):n.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.unique(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function E(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return n.dir(a,"parentNode")},parentsUntil:function(a,b,c){return n.dir(a,"parentNode",c)},next:function(a){return E(a,"nextSibling")},prev:function(a){return E(a,"previousSibling")},nextAll:function(a){return n.dir(a,"nextSibling")},prevAll:function(a){return n.dir(a,"previousSibling")},nextUntil:function(a,b,c){return n.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return n.dir(a,"previousSibling",c)},siblings:function(a){return n.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return n.sibling(a.firstChild)},contents:function(a){return n.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(D[a]||(e=n.unique(e)),C.test(a)&&(e=e.reverse())),this.pushStack(e)}});var F=/\S+/g,G={};function H(a){var b=G[a]={};return n.each(a.match(F)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?G[a]||H(a):n.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(c=a.memory&&l,d=!0,f=g||0,g=0,e=h.length,b=!0;h&&e>f;f++)if(h[f].apply(l[0],l[1])===!1&&a.stopOnFalse){c=!1;break}b=!1,h&&(i?i.length&&j(i.shift()):c?h=[]:k.disable())},k={add:function(){if(h){var d=h.length;!function f(b){n.each(b,function(b,c){var d=n.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&f(c)})}(arguments),b?e=h.length:c&&(g=d,j(c))}return this},remove:function(){return h&&n.each(arguments,function(a,c){var d;while((d=n.inArray(c,h,d))>-1)h.splice(d,1),b&&(e>=d&&e--,f>=d&&f--)}),this},has:function(a){return a?n.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],e=0,this},disable:function(){return h=i=c=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,c||k.disable(),this},locked:function(){return!i},fireWith:function(a,c){return!h||d&&!i||(c=c||[],c=[a,c.slice?c.slice():c],b?i.push(c):j(c)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!d}};return k},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&n.isFunction(a.promise)?e:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var I;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){if(a===!0?!--n.readyWait:!n.isReady){if(!z.body)return setTimeout(n.ready);n.isReady=!0,a!==!0&&--n.readyWait>0||(I.resolveWith(z,[n]),n.fn.trigger&&n(z).trigger("ready").off("ready"))}}});function J(){z.addEventListener?(z.removeEventListener("DOMContentLoaded",K,!1),a.removeEventListener("load",K,!1)):(z.detachEvent("onreadystatechange",K),a.detachEvent("onload",K))}function K(){(z.addEventListener||"load"===event.type||"complete"===z.readyState)&&(J(),n.ready())}n.ready.promise=function(b){if(!I)if(I=n.Deferred(),"complete"===z.readyState)setTimeout(n.ready);else if(z.addEventListener)z.addEventListener("DOMContentLoaded",K,!1),a.addEventListener("load",K,!1);else{z.attachEvent("onreadystatechange",K),a.attachEvent("onload",K);var c=!1;try{c=null==a.frameElement&&z.documentElement}catch(d){}c&&c.doScroll&&!function e(){if(!n.isReady){try{c.doScroll("left")}catch(a){return setTimeout(e,50)}J(),n.ready()}}()}return I.promise(b)};var L="undefined",M;for(M in n(l))break;l.ownLast="0"!==M,l.inlineBlockNeedsLayout=!1,n(function(){var a,b,c=z.getElementsByTagName("body")[0];c&&(a=z.createElement("div"),a.style.cssText="border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px",b=z.createElement("div"),c.appendChild(a).appendChild(b),typeof b.style.zoom!==L&&(b.style.cssText="border:0;margin:0;width:1px;padding:1px;display:inline;zoom:1",(l.inlineBlockNeedsLayout=3===b.offsetWidth)&&(c.style.zoom=1)),c.removeChild(a),a=b=null)}),function(){var a=z.createElement("div");if(null==l.deleteExpando){l.deleteExpando=!0;try{delete a.test}catch(b){l.deleteExpando=!1}}a=null}(),n.acceptData=function(a){var b=n.noData[(a.nodeName+" ").toLowerCase()],c=+a.nodeType||1;return 1!==c&&9!==c?!1:!b||b!==!0&&a.getAttribute("classid")===b};var N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){if(void 0===c&&1===a.nodeType){var d="data-"+b.replace(O,"-$1").toLowerCase();if(c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}n.data(a,b,c)}else c=void 0}return c}function Q(a){var b;for(b in a)if(("data"!==b||!n.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function R(a,b,d,e){if(n.acceptData(a)){var f,g,h=n.expando,i=a.nodeType,j=i?n.cache:a,k=i?a[h]:a[h]&&h;if(k&&j[k]&&(e||j[k].data)||void 0!==d||"string"!=typeof b)return k||(k=i?a[h]=c.pop()||n.guid++:h),j[k]||(j[k]=i?{}:{toJSON:n.noop}),("object"==typeof b||"function"==typeof b)&&(e?j[k]=n.extend(j[k],b):j[k].data=n.extend(j[k].data,b)),g=j[k],e||(g.data||(g.data={}),g=g.data),void 0!==d&&(g[n.camelCase(b)]=d),"string"==typeof b?(f=g[b],null==f&&(f=g[n.camelCase(b)])):f=g,f
}}function S(a,b,c){if(n.acceptData(a)){var d,e,f=a.nodeType,g=f?n.cache:a,h=f?a[n.expando]:n.expando;if(g[h]){if(b&&(d=c?g[h]:g[h].data)){n.isArray(b)?b=b.concat(n.map(b,n.camelCase)):b in d?b=[b]:(b=n.camelCase(b),b=b in d?[b]:b.split(" ")),e=b.length;while(e--)delete d[b[e]];if(c?!Q(d):!n.isEmptyObject(d))return}(c||(delete g[h].data,Q(g[h])))&&(f?n.cleanData([a],!0):l.deleteExpando||g!=g.window?delete g[h]:g[h]=null)}}}n.extend({cache:{},noData:{"applet ":!0,"embed ":!0,"object ":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(a){return a=a.nodeType?n.cache[a[n.expando]]:a[n.expando],!!a&&!Q(a)},data:function(a,b,c){return R(a,b,c)},removeData:function(a,b){return S(a,b)},_data:function(a,b,c){return R(a,b,c,!0)},_removeData:function(a,b){return S(a,b,!0)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=n.data(f),1===f.nodeType&&!n._data(f,"parsedAttrs"))){c=g.length;while(c--)d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d]));n._data(f,"parsedAttrs",!0)}return e}return"object"==typeof a?this.each(function(){n.data(this,a)}):arguments.length>1?this.each(function(){n.data(this,a,b)}):f?P(f,a,n.data(f,a)):void 0},removeData:function(a){return this.each(function(){n.removeData(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=n._data(a,b),c&&(!d||n.isArray(c)?d=n._data(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return n._data(a,c)||n._data(a,c,{empty:n.Callbacks("once memory").add(function(){n._removeData(a,b+"queue"),n._removeData(a,c)})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=n._data(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var T=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,U=["Top","Right","Bottom","Left"],V=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)},W=n.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)n.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},X=/^(?:checkbox|radio)$/i;!function(){var a=z.createDocumentFragment(),b=z.createElement("div"),c=z.createElement("input");if(b.setAttribute("className","t"),b.innerHTML="  <link/><table></table><a href='/a'>a</a>",l.leadingWhitespace=3===b.firstChild.nodeType,l.tbody=!b.getElementsByTagName("tbody").length,l.htmlSerialize=!!b.getElementsByTagName("link").length,l.html5Clone="<:nav></:nav>"!==z.createElement("nav").cloneNode(!0).outerHTML,c.type="checkbox",c.checked=!0,a.appendChild(c),l.appendChecked=c.checked,b.innerHTML="<textarea>x</textarea>",l.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue,a.appendChild(b),b.innerHTML="<input type='radio' checked='checked' name='t'/>",l.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,l.noCloneEvent=!0,b.attachEvent&&(b.attachEvent("onclick",function(){l.noCloneEvent=!1}),b.cloneNode(!0).click()),null==l.deleteExpando){l.deleteExpando=!0;try{delete b.test}catch(d){l.deleteExpando=!1}}a=b=c=null}(),function(){var b,c,d=z.createElement("div");for(b in{submit:!0,change:!0,focusin:!0})c="on"+b,(l[b+"Bubbles"]=c in a)||(d.setAttribute(c,"t"),l[b+"Bubbles"]=d.attributes[c].expando===!1);d=null}();var Y=/^(?:input|select|textarea)$/i,Z=/^key/,$=/^(?:mouse|contextmenu)|click/,_=/^(?:focusinfocus|focusoutblur)$/,ab=/^([^.]*)(?:\.(.+)|)$/;function bb(){return!0}function cb(){return!1}function db(){try{return z.activeElement}catch(a){}}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n._data(a);if(r){c.handler&&(i=c,c=i.handler,e=i.selector),c.guid||(c.guid=n.guid++),(g=r.events)||(g=r.events={}),(k=r.handle)||(k=r.handle=function(a){return typeof n===L||a&&n.event.triggered===a.type?void 0:n.event.dispatch.apply(k.elem,arguments)},k.elem=a),b=(b||"").match(F)||[""],h=b.length;while(h--)f=ab.exec(b[h])||[],o=q=f[1],p=(f[2]||"").split(".").sort(),o&&(j=n.event.special[o]||{},o=(e?j.delegateType:j.bindType)||o,j=n.event.special[o]||{},l=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},i),(m=g[o])||(m=g[o]=[],m.delegateCount=0,j.setup&&j.setup.call(a,d,p,k)!==!1||(a.addEventListener?a.addEventListener(o,k,!1):a.attachEvent&&a.attachEvent("on"+o,k))),j.add&&(j.add.call(a,l),l.handler.guid||(l.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,l):m.push(l),n.event.global[o]=!0);a=null}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n.hasData(a)&&n._data(a);if(r&&(k=r.events)){b=(b||"").match(F)||[""],j=b.length;while(j--)if(h=ab.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=k[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),i=f=m.length;while(f--)g=m[f],!e&&q!==g.origType||c&&c.guid!==g.guid||h&&!h.test(g.namespace)||d&&d!==g.selector&&("**"!==d||!g.selector)||(m.splice(f,1),g.selector&&m.delegateCount--,l.remove&&l.remove.call(a,g));i&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete k[o])}else for(o in k)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(k)&&(delete r.handle,n._removeData(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,l,m,o=[d||z],p=j.call(b,"type")?b.type:b,q=j.call(b,"namespace")?b.namespace.split("."):[];if(h=l=d=d||z,3!==d.nodeType&&8!==d.nodeType&&!_.test(p+n.event.triggered)&&(p.indexOf(".")>=0&&(q=p.split("."),p=q.shift(),q.sort()),g=p.indexOf(":")<0&&"on"+p,b=b[n.expando]?b:new n.Event(p,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=q.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+q.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:n.makeArray(c,[b]),k=n.event.special[p]||{},e||!k.trigger||k.trigger.apply(d,c)!==!1)){if(!e&&!k.noBubble&&!n.isWindow(d)){for(i=k.delegateType||p,_.test(i+p)||(h=h.parentNode);h;h=h.parentNode)o.push(h),l=h;l===(d.ownerDocument||z)&&o.push(l.defaultView||l.parentWindow||a)}m=0;while((h=o[m++])&&!b.isPropagationStopped())b.type=m>1?i:k.bindType||p,f=(n._data(h,"events")||{})[b.type]&&n._data(h,"handle"),f&&f.apply(h,c),f=g&&h[g],f&&f.apply&&n.acceptData(h)&&(b.result=f.apply(h,c),b.result===!1&&b.preventDefault());if(b.type=p,!e&&!b.isDefaultPrevented()&&(!k._default||k._default.apply(o.pop(),c)===!1)&&n.acceptData(d)&&g&&d[p]&&!n.isWindow(d)){l=d[g],l&&(d[g]=null),n.event.triggered=p;try{d[p]()}catch(r){}n.event.triggered=void 0,l&&(d[g]=l)}return b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(n._data(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,g=0;while((e=f.handlers[g++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(e.namespace))&&(a.handleObj=e,a.data=e.data,c=((n.event.special[e.origType]||{}).handle||e.handler).apply(f.elem,i),void 0!==c&&(a.result=c)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!=this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(e=[],f=0;h>f;f++)d=b[f],c=d.selector+" ",void 0===e[c]&&(e[c]=d.needsContext?n(c,this).index(i)>=0:n.find(c,this,null,[i]).length),e[c]&&e.push(d);e.length&&g.push({elem:i,handlers:e})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},fix:function(a){if(a[n.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=$.test(e)?this.mouseHooks:Z.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new n.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=f.srcElement||z),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,g.filter?g.filter(a,f):a},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button,g=b.fromElement;return null==a.pageX&&null!=b.clientX&&(d=a.target.ownerDocument||z,e=d.documentElement,c=d.body,a.pageX=b.clientX+(e&&e.scrollLeft||c&&c.scrollLeft||0)-(e&&e.clientLeft||c&&c.clientLeft||0),a.pageY=b.clientY+(e&&e.scrollTop||c&&c.scrollTop||0)-(e&&e.clientTop||c&&c.clientTop||0)),!a.relatedTarget&&g&&(a.relatedTarget=g===a.target?b.toElement:g),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==db()&&this.focus)try{return this.focus(),!1}catch(a){}},delegateType:"focusin"},blur:{trigger:function(){return this===db()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return n.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=n.extend(new n.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?n.event.trigger(e,null,b):n.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=z.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){var d="on"+b;a.detachEvent&&(typeof a[d]===L&&(a[d]=null),a.detachEvent(d,c))},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&(a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault())?bb:cb):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={isDefaultPrevented:cb,isPropagationStopped:cb,isImmediatePropagationStopped:cb,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=bb,a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=bb,a&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=bb,this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!n.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),l.submitBubbles||(n.event.special.submit={setup:function(){return n.nodeName(this,"form")?!1:void n.event.add(this,"click._submit keypress._submit",function(a){var b=a.target,c=n.nodeName(b,"input")||n.nodeName(b,"button")?b.form:void 0;c&&!n._data(c,"submitBubbles")&&(n.event.add(c,"submit._submit",function(a){a._submit_bubble=!0}),n._data(c,"submitBubbles",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&n.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){return n.nodeName(this,"form")?!1:void n.event.remove(this,"._submit")}}),l.changeBubbles||(n.event.special.change={setup:function(){return Y.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(n.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._just_changed=!0)}),n.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1),n.event.simulate("change",this,a,!0)})),!1):void n.event.add(this,"beforeactivate._change",function(a){var b=a.target;Y.test(b.nodeName)&&!n._data(b,"changeBubbles")&&(n.event.add(b,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||n.event.simulate("change",this.parentNode,a,!0)}),n._data(b,"changeBubbles",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return n.event.remove(this,"._change"),!Y.test(this.nodeName)}}),l.focusinBubbles||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a),!0)};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=n._data(d,b);e||d.addEventListener(a,c,!0),n._data(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=n._data(d,b)-1;e?n._data(d,b,e):(d.removeEventListener(a,c,!0),n._removeData(d,b))}}}),n.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(f in a)this.on(f,b,c,a[f],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=cb;else if(!d)return this;return 1===e&&(g=d,d=function(a){return n().off(a),g.apply(this,arguments)},d.guid=g.guid||(g.guid=n.guid++)),this.each(function(){n.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=cb),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});function eb(a){var b=fb.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}var fb="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",gb=/ jQuery\d+="(?:null|\d+)"/g,hb=new RegExp("<(?:"+fb+")[\\s/>]","i"),ib=/^\s+/,jb=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,kb=/<([\w:]+)/,lb=/<tbody/i,mb=/<|&#?\w+;/,nb=/<(?:script|style|link)/i,ob=/checked\s*(?:[^=]|=\s*.checked.)/i,pb=/^$|\/(?:java|ecma)script/i,qb=/^true\/(.*)/,rb=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,sb={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:l.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},tb=eb(z),ub=tb.appendChild(z.createElement("div"));sb.optgroup=sb.option,sb.tbody=sb.tfoot=sb.colgroup=sb.caption=sb.thead,sb.th=sb.td;function vb(a,b){var c,d,e=0,f=typeof a.getElementsByTagName!==L?a.getElementsByTagName(b||"*"):typeof a.querySelectorAll!==L?a.querySelectorAll(b||"*"):void 0;if(!f)for(f=[],c=a.childNodes||a;null!=(d=c[e]);e++)!b||n.nodeName(d,b)?f.push(d):n.merge(f,vb(d,b));return void 0===b||b&&n.nodeName(a,b)?n.merge([a],f):f}function wb(a){X.test(a.type)&&(a.defaultChecked=a.checked)}function xb(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function yb(a){return a.type=(null!==n.find.attr(a,"type"))+"/"+a.type,a}function zb(a){var b=qb.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function Ab(a,b){for(var c,d=0;null!=(c=a[d]);d++)n._data(c,"globalEval",!b||n._data(b[d],"globalEval"))}function Bb(a,b){if(1===b.nodeType&&n.hasData(a)){var c,d,e,f=n._data(a),g=n._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;e>d;d++)n.event.add(b,c,h[c][d])}g.data&&(g.data=n.extend({},g.data))}}function Cb(a,b){var c,d,e;if(1===b.nodeType){if(c=b.nodeName.toLowerCase(),!l.noCloneEvent&&b[n.expando]){e=n._data(b);for(d in e.events)n.removeEvent(b,d,e.handle);b.removeAttribute(n.expando)}"script"===c&&b.text!==a.text?(yb(b).text=a.text,zb(b)):"object"===c?(b.parentNode&&(b.outerHTML=a.outerHTML),l.html5Clone&&a.innerHTML&&!n.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===c&&X.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===c?b.defaultSelected=b.selected=a.defaultSelected:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}}n.extend({clone:function(a,b,c){var d,e,f,g,h,i=n.contains(a.ownerDocument,a);if(l.html5Clone||n.isXMLDoc(a)||!hb.test("<"+a.nodeName+">")?f=a.cloneNode(!0):(ub.innerHTML=a.outerHTML,ub.removeChild(f=ub.firstChild)),!(l.noCloneEvent&&l.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(d=vb(f),h=vb(a),g=0;null!=(e=h[g]);++g)d[g]&&Cb(e,d[g]);if(b)if(c)for(h=h||vb(a),d=d||vb(f),g=0;null!=(e=h[g]);g++)Bb(e,d[g]);else Bb(a,f);return d=vb(f,"script"),d.length>0&&Ab(d,!i&&vb(a,"script")),d=h=e=null,f},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,k,m=a.length,o=eb(b),p=[],q=0;m>q;q++)if(f=a[q],f||0===f)if("object"===n.type(f))n.merge(p,f.nodeType?[f]:f);else if(mb.test(f)){h=h||o.appendChild(b.createElement("div")),i=(kb.exec(f)||["",""])[1].toLowerCase(),k=sb[i]||sb._default,h.innerHTML=k[1]+f.replace(jb,"<$1></$2>")+k[2],e=k[0];while(e--)h=h.lastChild;if(!l.leadingWhitespace&&ib.test(f)&&p.push(b.createTextNode(ib.exec(f)[0])),!l.tbody){f="table"!==i||lb.test(f)?"<table>"!==k[1]||lb.test(f)?0:h:h.firstChild,e=f&&f.childNodes.length;while(e--)n.nodeName(j=f.childNodes[e],"tbody")&&!j.childNodes.length&&f.removeChild(j)}n.merge(p,h.childNodes),h.textContent="";while(h.firstChild)h.removeChild(h.firstChild);h=o.lastChild}else p.push(b.createTextNode(f));h&&o.removeChild(h),l.appendChecked||n.grep(vb(p,"input"),wb),q=0;while(f=p[q++])if((!d||-1===n.inArray(f,d))&&(g=n.contains(f.ownerDocument,f),h=vb(o.appendChild(f),"script"),g&&Ab(h),c)){e=0;while(f=h[e++])pb.test(f.type||"")&&c.push(f)}return h=null,o},cleanData:function(a,b){for(var d,e,f,g,h=0,i=n.expando,j=n.cache,k=l.deleteExpando,m=n.event.special;null!=(d=a[h]);h++)if((b||n.acceptData(d))&&(f=d[i],g=f&&j[f])){if(g.events)for(e in g.events)m[e]?n.event.remove(d,e):n.removeEvent(d,e,g.handle);j[f]&&(delete j[f],k?delete d[i]:typeof d.removeAttribute!==L?d.removeAttribute(i):d[i]=null,c.push(f))}}}),n.fn.extend({text:function(a){return W(this,function(a){return void 0===a?n.text(this):this.empty().append((this[0]&&this[0].ownerDocument||z).createTextNode(a))},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=xb(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=xb(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?n.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||n.cleanData(vb(c)),c.parentNode&&(b&&n.contains(c.ownerDocument,c)&&Ab(vb(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++){1===a.nodeType&&n.cleanData(vb(a,!1));while(a.firstChild)a.removeChild(a.firstChild);a.options&&n.nodeName(a,"select")&&(a.options.length=0)}return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return W(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a)return 1===b.nodeType?b.innerHTML.replace(gb,""):void 0;if(!("string"!=typeof a||nb.test(a)||!l.htmlSerialize&&hb.test(a)||!l.leadingWhitespace&&ib.test(a)||sb[(kb.exec(a)||["",""])[1].toLowerCase()])){a=a.replace(jb,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(vb(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,n.cleanData(vb(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,k=this.length,m=this,o=k-1,p=a[0],q=n.isFunction(p);if(q||k>1&&"string"==typeof p&&!l.checkClone&&ob.test(p))return this.each(function(c){var d=m.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(k&&(i=n.buildFragment(a,this[0].ownerDocument,!1,this),c=i.firstChild,1===i.childNodes.length&&(i=c),c)){for(g=n.map(vb(i,"script"),yb),f=g.length;k>j;j++)d=i,j!==o&&(d=n.clone(d,!0,!0),f&&n.merge(g,vb(d,"script"))),b.call(this[j],d,j);if(f)for(h=g[g.length-1].ownerDocument,n.map(g,zb),j=0;f>j;j++)d=g[j],pb.test(d.type||"")&&!n._data(d,"globalEval")&&n.contains(h,d)&&(d.src?n._evalUrl&&n._evalUrl(d.src):n.globalEval((d.text||d.textContent||d.innerHTML||"").replace(rb,"")));i=c=null}return this}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=0,e=[],g=n(a),h=g.length-1;h>=d;d++)c=d===h?this:this.clone(!0),n(g[d])[b](c),f.apply(e,c.get());return this.pushStack(e)}});var Db,Eb={};function Fb(b,c){var d=n(c.createElement(b)).appendTo(c.body),e=a.getDefaultComputedStyle?a.getDefaultComputedStyle(d[0]).display:n.css(d[0],"display");return d.detach(),e}function Gb(a){var b=z,c=Eb[a];return c||(c=Fb(a,b),"none"!==c&&c||(Db=(Db||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=(Db[0].contentWindow||Db[0].contentDocument).document,b.write(),b.close(),c=Fb(a,b),Db.detach()),Eb[a]=c),c}!function(){var a,b,c=z.createElement("div"),d="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";c.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=c.getElementsByTagName("a")[0],a.style.cssText="float:left;opacity:.5",l.opacity=/^0.5/.test(a.style.opacity),l.cssFloat=!!a.style.cssFloat,c.style.backgroundClip="content-box",c.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===c.style.backgroundClip,a=c=null,l.shrinkWrapBlocks=function(){var a,c,e,f;if(null==b){if(a=z.getElementsByTagName("body")[0],!a)return;f="border:0;width:0;height:0;position:absolute;top:0;left:-9999px",c=z.createElement("div"),e=z.createElement("div"),a.appendChild(c).appendChild(e),b=!1,typeof e.style.zoom!==L&&(e.style.cssText=d+";width:1px;padding:1px;zoom:1",e.innerHTML="<div></div>",e.firstChild.style.width="5px",b=3!==e.offsetWidth),a.removeChild(c),a=c=e=null}return b}}();var Hb=/^margin/,Ib=new RegExp("^("+T+")(?!px)[a-z%]+$","i"),Jb,Kb,Lb=/^(top|right|bottom|left)$/;a.getComputedStyle?(Jb=function(a){return a.ownerDocument.defaultView.getComputedStyle(a,null)},Kb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Jb(a),g=c?c.getPropertyValue(b)||c[b]:void 0,c&&(""!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),Ib.test(g)&&Hb.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0===g?g:g+""}):z.documentElement.currentStyle&&(Jb=function(a){return a.currentStyle},Kb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Jb(a),g=c?c[b]:void 0,null==g&&h&&h[b]&&(g=h[b]),Ib.test(g)&&!Lb.test(b)&&(d=h.left,e=a.runtimeStyle,f=e&&e.left,f&&(e.left=a.currentStyle.left),h.left="fontSize"===b?"1em":g,g=h.pixelLeft+"px",h.left=d,f&&(e.left=f)),void 0===g?g:g+""||"auto"});function Mb(a,b){return{get:function(){var c=a();if(null!=c)return c?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d,e,f,g,h=z.createElement("div"),i="border:0;width:0;height:0;position:absolute;top:0;left:-9999px",j="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";h.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",b=h.getElementsByTagName("a")[0],b.style.cssText="float:left;opacity:.5",l.opacity=/^0.5/.test(b.style.opacity),l.cssFloat=!!b.style.cssFloat,h.style.backgroundClip="content-box",h.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===h.style.backgroundClip,b=h=null,n.extend(l,{reliableHiddenOffsets:function(){if(null!=c)return c;var a,b,d,e=z.createElement("div"),f=z.getElementsByTagName("body")[0];if(f)return e.setAttribute("className","t"),e.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=z.createElement("div"),a.style.cssText=i,f.appendChild(a).appendChild(e),e.innerHTML="<table><tr><td></td><td>t</td></tr></table>",b=e.getElementsByTagName("td"),b[0].style.cssText="padding:0;margin:0;border:0;display:none",d=0===b[0].offsetHeight,b[0].style.display="",b[1].style.display="none",c=d&&0===b[0].offsetHeight,f.removeChild(a),e=f=null,c},boxSizing:function(){return null==d&&k(),d},boxSizingReliable:function(){return null==e&&k(),e},pixelPosition:function(){return null==f&&k(),f},reliableMarginRight:function(){var b,c,d,e;if(null==g&&a.getComputedStyle){if(b=z.getElementsByTagName("body")[0],!b)return;c=z.createElement("div"),d=z.createElement("div"),c.style.cssText=i,b.appendChild(c).appendChild(d),e=d.appendChild(z.createElement("div")),e.style.cssText=d.style.cssText=j,e.style.marginRight=e.style.width="0",d.style.width="1px",g=!parseFloat((a.getComputedStyle(e,null)||{}).marginRight),b.removeChild(c)}return g}});function k(){var b,c,h=z.getElementsByTagName("body")[0];h&&(b=z.createElement("div"),c=z.createElement("div"),b.style.cssText=i,h.appendChild(b).appendChild(c),c.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;display:block;padding:1px;border:1px;width:4px;margin-top:1%;top:1%",n.swap(h,null!=h.style.zoom?{zoom:1}:{},function(){d=4===c.offsetWidth}),e=!0,f=!1,g=!0,a.getComputedStyle&&(f="1%"!==(a.getComputedStyle(c,null)||{}).top,e="4px"===(a.getComputedStyle(c,null)||{width:"4px"}).width),h.removeChild(b),c=h=null)}}(),n.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var Nb=/alpha\([^)]*\)/i,Ob=/opacity\s*=\s*([^)]*)/,Pb=/^(none|table(?!-c[ea]).+)/,Qb=new RegExp("^("+T+")(.*)$","i"),Rb=new RegExp("^([+-])=("+T+")","i"),Sb={position:"absolute",visibility:"hidden",display:"block"},Tb={letterSpacing:0,fontWeight:400},Ub=["Webkit","O","Moz","ms"];function Vb(a,b){if(b in a)return b;var c=b.charAt(0).toUpperCase()+b.slice(1),d=b,e=Ub.length;while(e--)if(b=Ub[e]+c,b in a)return b;return d}function Wb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=n._data(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&V(d)&&(f[g]=n._data(d,"olddisplay",Gb(d.nodeName)))):f[g]||(e=V(d),(c&&"none"!==c||!e)&&n._data(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function Xb(a,b,c){var d=Qb.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Yb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+U[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+U[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+U[f]+"Width",!0,e))):(g+=n.css(a,"padding"+U[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+U[f]+"Width",!0,e)));return g}function Zb(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=Jb(a),g=l.boxSizing()&&"border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=Kb(a,b,f),(0>e||null==e)&&(e=a.style[b]),Ib.test(e))return e;d=g&&(l.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Yb(a,b,c||(g?"border":"content"),d,f)+"px"}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Kb(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":l.cssFloat?"cssFloat":"styleFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;if(b=n.cssProps[h]||(n.cssProps[h]=Vb(i,h)),g=n.cssHooks[b]||n.cssHooks[h],void 0===c)return g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b];if(f=typeof c,"string"===f&&(e=Rb.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(n.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||n.cssNumber[h]||(c+="px"),l.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),!(g&&"set"in g&&void 0===(c=g.set(a,c,d)))))try{i[b]="",i[b]=c}catch(j){}}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=Vb(a.style,h)),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(f=g.get(a,!0,c)),void 0===f&&(f=Kb(a,b,d)),"normal"===f&&b in Tb&&(f=Tb[b]),""===c||c?(e=parseFloat(f),c===!0||n.isNumeric(e)?e||0:f):f}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?0===a.offsetWidth&&Pb.test(n.css(a,"display"))?n.swap(a,Sb,function(){return Zb(a,b,d)}):Zb(a,b,d):void 0},set:function(a,c,d){var e=d&&Jb(a);return Xb(a,c,d?Yb(a,b,d,l.boxSizing()&&"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),l.opacity||(n.cssHooks.opacity={get:function(a,b){return Ob.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=n.isNumeric(b)?"alpha(opacity="+100*b+")":"",f=d&&d.filter||c.filter||"";c.zoom=1,(b>=1||""===b)&&""===n.trim(f.replace(Nb,""))&&c.removeAttribute&&(c.removeAttribute("filter"),""===b||d&&!d.filter)||(c.filter=Nb.test(f)?f.replace(Nb,e):f+" "+e)}}),n.cssHooks.marginRight=Mb(l.reliableMarginRight,function(a,b){return b?n.swap(a,{display:"inline-block"},Kb,[a,"marginRight"]):void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+U[d]+b]=f[d]||f[d-2]||f[0];return e}},Hb.test(a)||(n.cssHooks[a+b].set=Xb)}),n.fn.extend({css:function(a,b){return W(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=Jb(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)
},a,b,arguments.length>1)},show:function(){return Wb(this,!0)},hide:function(){return Wb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){V(this)?n(this).show():n(this).hide()})}});function $b(a,b,c,d,e){return new $b.prototype.init(a,b,c,d,e)}n.Tween=$b,$b.prototype={constructor:$b,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=$b.propHooks[this.prop];return a&&a.get?a.get(this):$b.propHooks._default.get(this)},run:function(a){var b,c=$b.propHooks[this.prop];return this.pos=b=this.options.duration?n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):$b.propHooks._default.set(this),this}},$b.prototype.init.prototype=$b.prototype,$b.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[n.cssProps[a.prop]]||n.cssHooks[a.prop])?n.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},$b.propHooks.scrollTop=$b.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},n.fx=$b.prototype.init,n.fx.step={};var _b,ac,bc=/^(?:toggle|show|hide)$/,cc=new RegExp("^(?:([+-])=|)("+T+")([a-z%]*)$","i"),dc=/queueHooks$/,ec=[jc],fc={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=cc.exec(b),f=e&&e[3]||(n.cssNumber[a]?"":"px"),g=(n.cssNumber[a]||"px"!==f&&+d)&&cc.exec(n.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,n.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function gc(){return setTimeout(function(){_b=void 0}),_b=n.now()}function hc(a,b){var c,d={height:a},e=0;for(b=b?1:0;4>e;e+=2-b)c=U[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function ic(a,b,c){for(var d,e=(fc[b]||[]).concat(fc["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function jc(a,b,c){var d,e,f,g,h,i,j,k,m=this,o={},p=a.style,q=a.nodeType&&V(a),r=n._data(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,m.always(function(){m.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[p.overflow,p.overflowX,p.overflowY],j=n.css(a,"display"),k=Gb(a.nodeName),"none"===j&&(j=k),"inline"===j&&"none"===n.css(a,"float")&&(l.inlineBlockNeedsLayout&&"inline"!==k?p.zoom=1:p.display="inline-block")),c.overflow&&(p.overflow="hidden",l.shrinkWrapBlocks()||m.always(function(){p.overflow=c.overflow[0],p.overflowX=c.overflow[1],p.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],bc.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(q?"hide":"show")){if("show"!==e||!r||void 0===r[d])continue;q=!0}o[d]=r&&r[d]||n.style(a,d)}if(!n.isEmptyObject(o)){r?"hidden"in r&&(q=r.hidden):r=n._data(a,"fxshow",{}),f&&(r.hidden=!q),q?n(a).show():m.done(function(){n(a).hide()}),m.done(function(){var b;n._removeData(a,"fxshow");for(b in o)n.style(a,b,o[b])});for(d in o)g=ic(q?r[d]:0,d,m),d in r||(r[d]=g.start,q&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function kc(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function lc(a,b,c){var d,e,f=0,g=ec.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=_b||gc(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:_b||gc(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(kc(k,j.opts.specialEasing);g>f;f++)if(d=ec[f].call(j,a,k,j.opts))return d;return n.map(k,ic,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(lc,{tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],fc[c]=fc[c]||[],fc[c].unshift(b)},prefilter:function(a,b){b?ec.unshift(a):ec.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(V).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=lc(this,n.extend({},a),f);(e||n._data(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=n._data(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&dc.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=n._data(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(hc(b,!0),a,d,e)}}),n.each({slideDown:hc("show"),slideUp:hc("hide"),slideToggle:hc("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=n.timers,c=0;for(_b=n.now();c<b.length;c++)a=b[c],a()||b[c]!==a||b.splice(c--,1);b.length||n.fx.stop(),_b=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){ac||(ac=setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){clearInterval(ac),ac=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(a,b){return a=n.fx?n.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a,b,c,d,e=z.createElement("div");e.setAttribute("className","t"),e.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=e.getElementsByTagName("a")[0],c=z.createElement("select"),d=c.appendChild(z.createElement("option")),b=e.getElementsByTagName("input")[0],a.style.cssText="top:1px",l.getSetAttribute="t"!==e.className,l.style=/top/.test(a.getAttribute("style")),l.hrefNormalized="/a"===a.getAttribute("href"),l.checkOn=!!b.value,l.optSelected=d.selected,l.enctype=!!z.createElement("form").enctype,c.disabled=!0,l.optDisabled=!d.disabled,b=z.createElement("input"),b.setAttribute("value",""),l.input=""===b.getAttribute("value"),b.value="t",b.setAttribute("type","radio"),l.radioValue="t"===b.value,a=b=c=d=e=null}();var mc=/\r/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(mc,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.text(a)}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(l.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)if(d=e[g],n.inArray(n.valHooks.option.get(d),f)>=0)try{d.selected=c=!0}catch(h){d.scrollHeight}else d.selected=!1;return c||(a.selectedIndex=-1),e}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>=0:void 0}},l.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var nc,oc,pc=n.expr.attrHandle,qc=/^(?:checked|selected)$/i,rc=l.getSetAttribute,sc=l.input;n.fn.extend({attr:function(a,b){return W(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===L?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),d=n.attrHooks[b]||(n.expr.match.bool.test(b)?oc:nc)),void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=n.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void n.removeAttr(a,b))},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(F);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)?sc&&rc||!qc.test(c)?a[d]=!1:a[n.camelCase("default-"+c)]=a[d]=!1:n.attr(a,c,""),a.removeAttribute(rc?c:d)},attrHooks:{type:{set:function(a,b){if(!l.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),oc={set:function(a,b,c){return b===!1?n.removeAttr(a,c):sc&&rc||!qc.test(c)?a.setAttribute(!rc&&n.propFix[c]||c,c):a[n.camelCase("default-"+c)]=a[c]=!0,c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=pc[b]||n.find.attr;pc[b]=sc&&rc||!qc.test(b)?function(a,b,d){var e,f;return d||(f=pc[b],pc[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,pc[b]=f),e}:function(a,b,c){return c?void 0:a[n.camelCase("default-"+b)]?b.toLowerCase():null}}),sc&&rc||(n.attrHooks.value={set:function(a,b,c){return n.nodeName(a,"input")?void(a.defaultValue=b):nc&&nc.set(a,b,c)}}),rc||(nc={set:function(a,b,c){var d=a.getAttributeNode(c);return d||a.setAttributeNode(d=a.ownerDocument.createAttribute(c)),d.value=b+="","value"===c||b===a.getAttribute(c)?b:void 0}},pc.id=pc.name=pc.coords=function(a,b,c){var d;return c?void 0:(d=a.getAttributeNode(b))&&""!==d.value?d.value:null},n.valHooks.button={get:function(a,b){var c=a.getAttributeNode(b);return c&&c.specified?c.value:void 0},set:nc.set},n.attrHooks.contenteditable={set:function(a,b,c){nc.set(a,""===b?!1:b,c)}},n.each(["width","height"],function(a,b){n.attrHooks[b]={set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}}})),l.style||(n.attrHooks.style={get:function(a){return a.style.cssText||void 0},set:function(a,b){return a.style.cssText=b+""}});var tc=/^(?:input|select|textarea|button|object)$/i,uc=/^(?:a|area)$/i;n.fn.extend({prop:function(a,b){return W(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return a=n.propFix[a]||a,this.each(function(){try{this[a]=void 0,delete this[a]}catch(b){}})}}),n.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!n.isXMLDoc(a),f&&(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=n.find.attr(a,"tabindex");return b?parseInt(b,10):tc.test(a.nodeName)||uc.test(a.nodeName)&&a.href?0:-1}}}}),l.hrefNormalized||n.each(["href","src"],function(a,b){n.propHooks[b]={get:function(a){return a.getAttribute(b,4)}}}),l.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this}),l.enctype||(n.propFix.enctype="encoding");var vc=/[\t\r\n\f]/g;n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j="string"==typeof a&&a;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(F)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(vc," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=n.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j=0===arguments.length||"string"==typeof a&&a;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(F)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(vc," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?n.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(n.isFunction(a)?function(c){n(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=n(this),f=a.match(F)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===L||"boolean"===c)&&(this.className&&n._data(this,"__className__",this.className),this.className=this.className||a===!1?"":n._data(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(vc," ").indexOf(b)>=0)return!0;return!1}}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var wc=n.now(),xc=/\?/,yc=/(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;n.parseJSON=function(b){if(a.JSON&&a.JSON.parse)return a.JSON.parse(b+"");var c,d=null,e=n.trim(b+"");return e&&!n.trim(e.replace(yc,function(a,b,e,f){return c&&b&&(d=0),0===d?a:(c=e||b,d+=!f-!e,"")}))?Function("return "+e)():n.error("Invalid JSON: "+b)},n.parseXML=function(b){var c,d;if(!b||"string"!=typeof b)return null;try{a.DOMParser?(d=new DOMParser,c=d.parseFromString(b,"text/xml")):(c=new ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b))}catch(e){c=void 0}return c&&c.documentElement&&!c.getElementsByTagName("parsererror").length||n.error("Invalid XML: "+b),c};var zc,Ac,Bc=/#.*$/,Cc=/([?&])_=[^&]*/,Dc=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Ec=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Fc=/^(?:GET|HEAD)$/,Gc=/^\/\//,Hc=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,Ic={},Jc={},Kc="*/".concat("*");try{Ac=location.href}catch(Lc){Ac=z.createElement("a"),Ac.href="",Ac=Ac.href}zc=Hc.exec(Ac.toLowerCase())||[];function Mc(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(F)||[];if(n.isFunction(c))while(d=f[e++])"+"===d.charAt(0)?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function Nc(a,b,c,d){var e={},f=a===Jc;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function Oc(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(d in b)void 0!==b[d]&&((e[d]?a:c||(c={}))[d]=b[d]);return c&&n.extend(!0,a,c),a}function Pc(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===e&&(e=a.mimeType||b.getResponseHeader("Content-Type"));if(e)for(g in h)if(h[g]&&h[g].test(e)){i.unshift(g);break}if(i[0]in c)f=i[0];else{for(g in c){if(!i[0]||a.converters[g+" "+i[0]]){f=g;break}d||(d=g)}f=f||d}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Qc(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Ac,type:"GET",isLocal:Ec.test(zc[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Kc,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?Oc(Oc(a,n.ajaxSettings),b):Oc(n.ajaxSettings,a)},ajaxPrefilter:Mc(Ic),ajaxTransport:Mc(Jc),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=n.ajaxSetup({},b),l=k.context||k,m=k.context&&(l.nodeType||l.jquery)?n(l):n.event,o=n.Deferred(),p=n.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!j){j={};while(b=Dc.exec(f))j[b[1].toLowerCase()]=b[2]}b=j[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?f:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return i&&i.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||Ac)+"").replace(Bc,"").replace(Gc,zc[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=n.trim(k.dataType||"*").toLowerCase().match(F)||[""],null==k.crossDomain&&(c=Hc.exec(k.url.toLowerCase()),k.crossDomain=!(!c||c[1]===zc[1]&&c[2]===zc[2]&&(c[3]||("http:"===c[1]?"80":"443"))===(zc[3]||("http:"===zc[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=n.param(k.data,k.traditional)),Nc(Ic,k,b,v),2===t)return v;h=k.global,h&&0===n.active++&&n.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!Fc.test(k.type),e=k.url,k.hasContent||(k.data&&(e=k.url+=(xc.test(e)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=Cc.test(e)?e.replace(Cc,"$1_="+wc++):e+(xc.test(e)?"&":"?")+"_="+wc++)),k.ifModified&&(n.lastModified[e]&&v.setRequestHeader("If-Modified-Since",n.lastModified[e]),n.etag[e]&&v.setRequestHeader("If-None-Match",n.etag[e])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+Kc+"; q=0.01":""):k.accepts["*"]);for(d in k.headers)v.setRequestHeader(d,k.headers[d]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(d in{success:1,error:1,complete:1})v[d](k[d]);if(i=Nc(Jc,k,b,v)){v.readyState=1,h&&m.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,i.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,c,d){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),i=void 0,f=d||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,c&&(u=Pc(k,v,c)),u=Qc(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(n.lastModified[e]=w),w=v.getResponseHeader("etag"),w&&(n.etag[e]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,h&&m.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),h&&(m.trigger("ajaxComplete",[v,k]),--n.active||n.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){if(n.isFunction(a))return this.each(function(b){n(this).wrapAll(a.call(this,b))});if(this[0]){var b=n(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&1===a.firstChild.nodeType)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return this.each(n.isFunction(a)?function(b){n(this).wrapInner(a.call(this,b))}:function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}}),n.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0||!l.reliableHiddenOffsets()&&"none"===(a.style&&a.style.display||n.css(a,"display"))},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var Rc=/%20/g,Sc=/\[\]$/,Tc=/\r?\n/g,Uc=/^(?:submit|button|image|reset|file)$/i,Vc=/^(?:input|select|textarea|keygen)/i;function Wc(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||Sc.test(a)?d(a,e):Wc(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)Wc(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)Wc(c,a[c],b,e);return d.join("&").replace(Rc,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&Vc.test(this.nodeName)&&!Uc.test(a)&&(this.checked||!X.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(Tc,"\r\n")}}):{name:b.name,value:c.replace(Tc,"\r\n")}}).get()}}),n.ajaxSettings.xhr=void 0!==a.ActiveXObject?function(){return!this.isLocal&&/^(get|post|head|put|delete|options)$/i.test(this.type)&&$c()||_c()}:$c;var Xc=0,Yc={},Zc=n.ajaxSettings.xhr();a.ActiveXObject&&n(a).on("unload",function(){for(var a in Yc)Yc[a](void 0,!0)}),l.cors=!!Zc&&"withCredentials"in Zc,Zc=l.ajax=!!Zc,Zc&&n.ajaxTransport(function(a){if(!a.crossDomain||l.cors){var b;return{send:function(c,d){var e,f=a.xhr(),g=++Xc;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)void 0!==c[e]&&f.setRequestHeader(e,c[e]+"");f.send(a.hasContent&&a.data||null),b=function(c,e){var h,i,j;if(b&&(e||4===f.readyState))if(delete Yc[g],b=void 0,f.onreadystatechange=n.noop,e)4!==f.readyState&&f.abort();else{j={},h=f.status,"string"==typeof f.responseText&&(j.text=f.responseText);try{i=f.statusText}catch(k){i=""}h||!a.isLocal||a.crossDomain?1223===h&&(h=204):h=j.text?200:404}j&&d(h,i,j,f.getAllResponseHeaders())},a.async?4===f.readyState?setTimeout(b):f.onreadystatechange=Yc[g]=b:b()},abort:function(){b&&b(void 0,!0)}}}});function $c(){try{return new a.XMLHttpRequest}catch(b){}}function _c(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=z.head||n("head")[0]||z.documentElement;return{send:function(d,e){b=z.createElement("script"),b.async=!0,a.scriptCharset&&(b.charset=a.scriptCharset),b.src=a.url,b.onload=b.onreadystatechange=function(a,c){(c||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,b.parentNode&&b.parentNode.removeChild(b),b=null,c||e(200,"success"))},c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(void 0,!0)}}}});var ad=[],bd=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=ad.pop()||n.expando+"_"+wc++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(bd.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&bd.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(bd,"$1"+e):b.jsonp!==!1&&(b.url+=(xc.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,ad.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||z;var d=v.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=n.buildFragment([a],b,e),e&&e.length&&n(e).remove(),n.merge([],d.childNodes))};var cd=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&cd)return cd.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=a.slice(h,a.length),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(f="POST"),g.length>0&&n.ajax({url:a,type:f,dataType:"html",data:b}).done(function(a){e=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,e||[a.responseText,b,a])}),this},n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};var dd=a.document.documentElement;function ed(a){return n.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&n.inArray("auto",[f,i])>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d={top:0,left:0},e=this[0],f=e&&e.ownerDocument;if(f)return b=f.documentElement,n.contains(b,e)?(typeof e.getBoundingClientRect!==L&&(d=e.getBoundingClientRect()),c=ed(f),{top:d.top+(c.pageYOffset||b.scrollTop)-(b.clientTop||0),left:d.left+(c.pageXOffset||b.scrollLeft)-(b.clientLeft||0)}):d},position:function(){if(this[0]){var a,b,c={top:0,left:0},d=this[0];return"fixed"===n.css(d,"position")?b=d.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(c=a.offset()),c.top+=n.css(a[0],"borderTopWidth",!0),c.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-c.top-n.css(d,"marginTop",!0),left:b.left-c.left-n.css(d,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||dd;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||dd})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c=/Y/.test(b);n.fn[a]=function(d){return W(this,function(a,d,e){var f=ed(a);return void 0===e?f?b in f?f[b]:f.document.documentElement[d]:a[d]:void(f?f.scrollTo(c?n(f).scrollLeft():e,c?e:n(f).scrollTop()):a[d]=e)},a,d,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=Mb(l.pixelPosition,function(a,c){return c?(c=Kb(a,b),Ib.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return W(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var fd=a.jQuery,gd=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=gd),b&&a.jQuery===n&&(a.jQuery=fd),n},typeof b===L&&(a.jQuery=a.$=n),n});

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.js-cart-product').on('click', function() {
    $quantity  = $(this).closest('.group-quantity').find('.js-quantity');
    $cartId    = $(this).data('cart-id');
    $productId = $(this).data('product-id');

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'PUT',
        id: $cartId,
        fk_product_id: $productId,
        ct_quantity: $quantity
      },
      success: function(result) {
        window.location.reload();
      }
    });
  });

  $('.js-delete-cart').on('click', function() {
    $.ajax({
      type: 'GET',
      url: $(this).data('url'),
      data: {
        _method: 'DELETE'
      },
      success: function(result) {
        window.location.reload();
      }
    });
  });

  $('.js-option-provinces').on('change', function() {
    $provinceName = $('.js-option-provinces').val();

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'POST',
        province: $provinceName
      },
      success: function(result) {
        $('.js-option-amphure').html(result['amphures']);
        $('.js-option-district').html(result['district']);
      }
    });
  });

  $('.js-option-amphure').on('change', function() {
    $amphureName = $('.js-option-amphure').val();

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'POST',
        amphure: $amphureName
      },
      success: function(result) {
        $('.js-option-district').html(result['district']);
      }
    });
  });
});
$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.js-order-create').on('click', function() {
    $first_name        = $('input[name="oa_first_name"]').val();
    $last_name         = $('input[name="oa_last_name"]').val();
    $tel               = $('input[name="oa_tel"]').val();
    $address           = $('input[name="oa_address"]').val();
    $province          = $('select[name="oa_province"]').val();
    $district          = $('select[name="oa_district"]').val();
    $sub_district      = $('select[name="oa_sub_district"]').val();
    $postcode          = $('input[name="oa_postcode"]').val();
    $isbilling_address = $('input[name="oa_isbilling_address"]:checked').val();
    $billign_address   = $('textarea[name="oa_billign_address"]').val();

    if($first_name == '') {
      $('input[name="oa_first_name"]').focus();
    }
    else if($last_name == '') {
      $('input[name="oa_last_name"]').focus();
    }
    else if($tel == '') {
      $('input[name="oa_tel"]').focus();
    }
    else if($address == '') {
      $('input[name="oa_address"]').focus();
    }
    else if($province == 0) {
      $('select[name="oa_province"]').focus();
    }
    else if($district == 0) {
      $('select[name="oa_district"]').focus();
    }
    else if($sub_district == 0) {
      $('select[name="oa_sub_district"]').focus();
    }
    else if($postcode == '') {
      $('input[name="oa_postcode"]').focus();
    }
    else if($('input[name="oa_isbilling_address"]').is(':checked')) {
      $('#js-checkout').submit();
    }
    else if($billign_address == '') {
      $('textarea[name="oa_billign_address"]').focus();
    }
    else
    {
      $('#js-checkout').submit();
    }
  });
});
/*!
 * fancyBox - jQuery Plugin
 * version: 2.1.5 (Fri, 14 Jun 2013)
 * @requires jQuery v1.6 or later
 *
 * Examples at http://fancyapps.com/fancybox/
 * License: www.fancyapps.com/fancybox/#license
 *
 * Copyright 2012 Janis Skarnelis - janis@fancyapps.com
 *
 */

(function (window, document, $, undefined) {
	"use strict";

	var H = $("html"),
		W = $(window),
		D = $(document),
		F = $.fancybox = function () {
			F.open.apply( this, arguments );
		},
		IE =  navigator.userAgent.match(/msie/i),
		didUpdate	= null,
		isTouch		= document.createTouch !== undefined,

		isQuery	= function(obj) {
			return obj && obj.hasOwnProperty && obj instanceof $;
		},
		isString = function(str) {
			return str && $.type(str) === "string";
		},
		isPercentage = function(str) {
			return isString(str) && str.indexOf('%') > 0;
		},
		isScrollable = function(el) {
			return (el && !(el.style.overflow && el.style.overflow === 'hidden') && ((el.clientWidth && el.scrollWidth > el.clientWidth) || (el.clientHeight && el.scrollHeight > el.clientHeight)));
		},
		getScalar = function(orig, dim) {
			var value = parseInt(orig, 10) || 0;

			if (dim && isPercentage(orig)) {
				value = F.getViewport()[ dim ] / 100 * value;
			}

			return Math.ceil(value);
		},
		getValue = function(value, dim) {
			return getScalar(value, dim) + 'px';
		};

	$.extend(F, {
		// The current version of fancyBox
		version: '2.1.5',

		defaults: {
			padding : 15,
			margin  : 20,

			width     : 800,
			height    : 600,
			minWidth  : 100,
			minHeight : 100,
			maxWidth  : 9999,
			maxHeight : 9999,
			pixelRatio: 1, // Set to 2 for retina display support

			autoSize   : true,
			autoHeight : false,
			autoWidth  : false,

			autoResize  : true,
			autoCenter  : !isTouch,
			fitToView   : true,
			aspectRatio : false,
			topRatio    : 0.5,
			leftRatio   : 0.5,

			scrolling : 'auto', // 'auto', 'yes' or 'no'
			wrapCSS   : '',

			arrows     : true,
			closeBtn   : true,
			closeClick : false,
			nextClick  : false,
			mouseWheel : true,
			autoPlay   : false,
			playSpeed  : 3000,
			preload    : 3,
			modal      : false,
			loop       : true,

			ajax  : {
				dataType : 'html',
				headers  : { 'X-fancyBox': true }
			},
			iframe : {
				scrolling : 'auto',
				preload   : true
			},
			swf : {
				wmode: 'transparent',
				allowfullscreen   : 'true',
				allowscriptaccess : 'always'
			},

			keys  : {
				next : {
					13 : 'left', // enter
					34 : 'up',   // page down
					39 : 'left', // right arrow
					40 : 'up'    // down arrow
				},
				prev : {
					8  : 'right',  // backspace
					33 : 'down',   // page up
					37 : 'right',  // left arrow
					38 : 'down'    // up arrow
				},
				close  : [27], // escape key
				play   : [32], // space - start/stop slideshow
				toggle : [70]  // letter "f" - toggle fullscreen
			},

			direction : {
				next : 'left',
				prev : 'right'
			},

			scrollOutside  : true,

			// Override some properties
			index   : 0,
			type    : null,
			href    : null,
			content : null,
			title   : null,

			// HTML templates
			tpl: {
				wrap     : '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
				image    : '<img class="fancybox-image" src="{href}" alt="" />',
				iframe   : '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' + (IE ? ' allowtransparency="true"' : '') + '></iframe>',
				error    : '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
				closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
				next     : '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
				prev     : '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
			},

			// Properties for each animation type
			// Opening fancyBox
			openEffect  : 'fade', // 'elastic', 'fade' or 'none'
			openSpeed   : 250,
			openEasing  : 'swing',
			openOpacity : true,
			openMethod  : 'zoomIn',

			// Closing fancyBox
			closeEffect  : 'fade', // 'elastic', 'fade' or 'none'
			closeSpeed   : 250,
			closeEasing  : 'swing',
			closeOpacity : true,
			closeMethod  : 'zoomOut',

			// Changing next gallery item
			nextEffect : 'elastic', // 'elastic', 'fade' or 'none'
			nextSpeed  : 250,
			nextEasing : 'swing',
			nextMethod : 'changeIn',

			// Changing previous gallery item
			prevEffect : 'elastic', // 'elastic', 'fade' or 'none'
			prevSpeed  : 250,
			prevEasing : 'swing',
			prevMethod : 'changeOut',

			// Enable default helpers
			helpers : {
				overlay : true,
				title   : true
			},

			// Callbacks
			onCancel     : $.noop, // If canceling
			beforeLoad   : $.noop, // Before loading
			afterLoad    : $.noop, // After loading
			beforeShow   : $.noop, // Before changing in current item
			afterShow    : $.noop, // After opening
			beforeChange : $.noop, // Before changing gallery item
			beforeClose  : $.noop, // Before closing
			afterClose   : $.noop  // After closing
		},

		//Current state
		group    : {}, // Selected group
		opts     : {}, // Group options
		previous : null,  // Previous element
		coming   : null,  // Element being loaded
		current  : null,  // Currently loaded element
		isActive : false, // Is activated
		isOpen   : false, // Is currently open
		isOpened : false, // Have been fully opened at least once

		wrap  : null,
		skin  : null,
		outer : null,
		inner : null,

		player : {
			timer    : null,
			isActive : false
		},

		// Loaders
		ajaxLoad   : null,
		imgPreload : null,

		// Some collections
		transitions : {},
		helpers     : {},

		/*
		 *	Static methods
		 */

		open: function (group, opts) {
			if (!group) {
				return;
			}

			if (!$.isPlainObject(opts)) {
				opts = {};
			}

			// Close if already active
			if (false === F.close(true)) {
				return;
			}

			// Normalize group
			if (!$.isArray(group)) {
				group = isQuery(group) ? $(group).get() : [group];
			}

			// Recheck if the type of each element is `object` and set content type (image, ajax, etc)
			$.each(group, function(i, element) {
				var obj = {},
					href,
					title,
					content,
					type,
					rez,
					hrefParts,
					selector;

				if ($.type(element) === "object") {
					// Check if is DOM element
					if (element.nodeType) {
						element = $(element);
					}

					if (isQuery(element)) {
						obj = {
							href    : element.data('fancybox-href') || element.attr('href'),
							title   : element.data('fancybox-title') || element.attr('title'),
							isDom   : true,
							element : element
						};

						if ($.metadata) {
							$.extend(true, obj, element.metadata());
						}

					} else {
						obj = element;
					}
				}

				href  = opts.href  || obj.href || (isString(element) ? element : null);
				title = opts.title !== undefined ? opts.title : obj.title || '';

				content = opts.content || obj.content;
				type    = content ? 'html' : (opts.type  || obj.type);

				if (!type && obj.isDom) {
					type = element.data('fancybox-type');

					if (!type) {
						rez  = element.prop('class').match(/fancybox\.(\w+)/);
						type = rez ? rez[1] : null;
					}
				}

				if (isString(href)) {
					// Try to guess the content type
					if (!type) {
						if (F.isImage(href)) {
							type = 'image';

						} else if (F.isSWF(href)) {
							type = 'swf';

						} else if (href.charAt(0) === '#') {
							type = 'inline';

						} else if (isString(element)) {
							type    = 'html';
							content = element;
						}
					}

					// Split url into two pieces with source url and content selector, e.g,
					// "/mypage.html #my_id" will load "/mypage.html" and display element having id "my_id"
					if (type === 'ajax') {
						hrefParts = href.split(/\s+/, 2);
						href      = hrefParts.shift();
						selector  = hrefParts.shift();
					}
				}

				if (!content) {
					if (type === 'inline') {
						if (href) {
							content = $( isString(href) ? href.replace(/.*(?=#[^\s]+$)/, '') : href ); //strip for ie7

						} else if (obj.isDom) {
							content = element;
						}

					} else if (type === 'html') {
						content = href;

					} else if (!type && !href && obj.isDom) {
						type    = 'inline';
						content = element;
					}
				}

				$.extend(obj, {
					href     : href,
					type     : type,
					content  : content,
					title    : title,
					selector : selector
				});

				group[ i ] = obj;
			});

			// Extend the defaults
			F.opts = $.extend(true, {}, F.defaults, opts);

			// All options are merged recursive except keys
			if (opts.keys !== undefined) {
				F.opts.keys = opts.keys ? $.extend({}, F.defaults.keys, opts.keys) : false;
			}

			F.group = group;

			return F._start(F.opts.index);
		},

		// Cancel image loading or abort ajax request
		cancel: function () {
			var coming = F.coming;

			if (!coming || false === F.trigger('onCancel')) {
				return;
			}

			F.hideLoading();

			if (F.ajaxLoad) {
				F.ajaxLoad.abort();
			}

			F.ajaxLoad = null;

			if (F.imgPreload) {
				F.imgPreload.onload = F.imgPreload.onerror = null;
			}

			if (coming.wrap) {
				coming.wrap.stop(true, true).trigger('onReset').remove();
			}

			F.coming = null;

			// If the first item has been canceled, then clear everything
			if (!F.current) {
				F._afterZoomOut( coming );
			}
		},

		// Start closing animation if is open; remove immediately if opening/closing
		close: function (event) {
			F.cancel();

			if (false === F.trigger('beforeClose')) {
				return;
			}

			F.unbindEvents();

			if (!F.isActive) {
				return;
			}

			if (!F.isOpen || event === true) {
				$('.fancybox-wrap').stop(true).trigger('onReset').remove();

				F._afterZoomOut();

			} else {
				F.isOpen = F.isOpened = false;
				F.isClosing = true;

				$('.fancybox-item, .fancybox-nav').remove();

				F.wrap.stop(true, true).removeClass('fancybox-opened');

				F.transitions[ F.current.closeMethod ]();
			}
		},

		// Manage slideshow:
		//   $.fancybox.play(); - toggle slideshow
		//   $.fancybox.play( true ); - start
		//   $.fancybox.play( false ); - stop
		play: function ( action ) {
			var clear = function () {
					clearTimeout(F.player.timer);
				},
				set = function () {
					clear();

					if (F.current && F.player.isActive) {
						F.player.timer = setTimeout(F.next, F.current.playSpeed);
					}
				},
				stop = function () {
					clear();

					D.unbind('.player');

					F.player.isActive = false;

					F.trigger('onPlayEnd');
				},
				start = function () {
					if (F.current && (F.current.loop || F.current.index < F.group.length - 1)) {
						F.player.isActive = true;

						D.bind({
							'onCancel.player beforeClose.player' : stop,
							'onUpdate.player'   : set,
							'beforeLoad.player' : clear
						});

						set();

						F.trigger('onPlayStart');
					}
				};

			if (action === true || (!F.player.isActive && action !== false)) {
				start();
			} else {
				stop();
			}
		},

		// Navigate to next gallery item
		next: function ( direction ) {
			var current = F.current;

			if (current) {
				if (!isString(direction)) {
					direction = current.direction.next;
				}

				F.jumpto(current.index + 1, direction, 'next');
			}
		},

		// Navigate to previous gallery item
		prev: function ( direction ) {
			var current = F.current;

			if (current) {
				if (!isString(direction)) {
					direction = current.direction.prev;
				}

				F.jumpto(current.index - 1, direction, 'prev');
			}
		},

		// Navigate to gallery item by index
		jumpto: function ( index, direction, router ) {
			var current = F.current;

			if (!current) {
				return;
			}

			index = getScalar(index);

			F.direction = direction || current.direction[ (index >= current.index ? 'next' : 'prev') ];
			F.router    = router || 'jumpto';

			if (current.loop) {
				if (index < 0) {
					index = current.group.length + (index % current.group.length);
				}

				index = index % current.group.length;
			}

			if (current.group[ index ] !== undefined) {
				F.cancel();

				F._start(index);
			}
		},

		// Center inside viewport and toggle position type to fixed or absolute if needed
		reposition: function (e, onlyAbsolute) {
			var current = F.current,
				wrap    = current ? current.wrap : null,
				pos;

			if (wrap) {
				pos = F._getPosition(onlyAbsolute);

				if (e && e.type === 'scroll') {
					delete pos.position;

					wrap.stop(true, true).animate(pos, 200);

				} else {
					wrap.css(pos);

					current.pos = $.extend({}, current.dim, pos);
				}
			}
		},

		update: function (e) {
			var type = (e && e.type),
				anyway = !type || type === 'orientationchange';

			if (anyway) {
				clearTimeout(didUpdate);

				didUpdate = null;
			}

			if (!F.isOpen || didUpdate) {
				return;
			}

			didUpdate = setTimeout(function() {
				var current = F.current;

				if (!current || F.isClosing) {
					return;
				}

				F.wrap.removeClass('fancybox-tmp');

				if (anyway || type === 'load' || (type === 'resize' && current.autoResize)) {
					F._setDimension();
				}

				if (!(type === 'scroll' && current.canShrink)) {
					F.reposition(e);
				}

				F.trigger('onUpdate');

				didUpdate = null;

			}, (anyway && !isTouch ? 0 : 300));
		},

		// Shrink content to fit inside viewport or restore if resized
		toggle: function ( action ) {
			if (F.isOpen) {
				F.current.fitToView = $.type(action) === "boolean" ? action : !F.current.fitToView;

				// Help browser to restore document dimensions
				if (isTouch) {
					F.wrap.removeAttr('style').addClass('fancybox-tmp');

					F.trigger('onUpdate');
				}

				F.update();
			}
		},

		hideLoading: function () {
			D.unbind('.loading');

			$('#fancybox-loading').remove();
		},

		showLoading: function () {
			var el, viewport;

			F.hideLoading();

			el = $('<div id="fancybox-loading"><div></div></div>').click(F.cancel).appendTo('body');

			// If user will press the escape-button, the request will be canceled
			D.bind('keydown.loading', function(e) {
				if ((e.which || e.keyCode) === 27) {
					e.preventDefault();

					F.cancel();
				}
			});

			if (!F.defaults.fixed) {
				viewport = F.getViewport();

				el.css({
					position : 'absolute',
					top  : (viewport.h * 0.5) + viewport.y,
					left : (viewport.w * 0.5) + viewport.x
				});
			}
		},

		getViewport: function () {
			var locked = (F.current && F.current.locked) || false,
				rez    = {
					x: W.scrollLeft(),
					y: W.scrollTop()
				};

			if (locked) {
				rez.w = locked[0].clientWidth;
				rez.h = locked[0].clientHeight;

			} else {
				// See http://bugs.jquery.com/ticket/6724
				rez.w = isTouch && window.innerWidth  ? window.innerWidth  : W.width();
				rez.h = isTouch && window.innerHeight ? window.innerHeight : W.height();
			}

			return rez;
		},

		// Unbind the keyboard / clicking actions
		unbindEvents: function () {
			if (F.wrap && isQuery(F.wrap)) {
				F.wrap.unbind('.fb');
			}

			D.unbind('.fb');
			W.unbind('.fb');
		},

		bindEvents: function () {
			var current = F.current,
				keys;

			if (!current) {
				return;
			}

			// Changing document height on iOS devices triggers a 'resize' event,
			// that can change document height... repeating infinitely
			W.bind('orientationchange.fb' + (isTouch ? '' : ' resize.fb') + (current.autoCenter && !current.locked ? ' scroll.fb' : ''), F.update);

			keys = current.keys;

			if (keys) {
				D.bind('keydown.fb', function (e) {
					var code   = e.which || e.keyCode,
						target = e.target || e.srcElement;

					// Skip esc key if loading, because showLoading will cancel preloading
					if (code === 27 && F.coming) {
						return false;
					}

					// Ignore key combinations and key events within form elements
					if (!e.ctrlKey && !e.altKey && !e.shiftKey && !e.metaKey && !(target && (target.type || $(target).is('[contenteditable]')))) {
						$.each(keys, function(i, val) {
							if (current.group.length > 1 && val[ code ] !== undefined) {
								F[ i ]( val[ code ] );

								e.preventDefault();
								return false;
							}

							if ($.inArray(code, val) > -1) {
								F[ i ] ();

								e.preventDefault();
								return false;
							}
						});
					}
				});
			}

			if ($.fn.mousewheel && current.mouseWheel) {
				F.wrap.bind('mousewheel.fb', function (e, delta, deltaX, deltaY) {
					var target = e.target || null,
						parent = $(target),
						canScroll = false;

					while (parent.length) {
						if (canScroll || parent.is('.fancybox-skin') || parent.is('.fancybox-wrap')) {
							break;
						}

						canScroll = isScrollable( parent[0] );
						parent    = $(parent).parent();
					}

					if (delta !== 0 && !canScroll) {
						if (F.group.length > 1 && !current.canShrink) {
							if (deltaY > 0 || deltaX > 0) {
								F.prev( deltaY > 0 ? 'down' : 'left' );

							} else if (deltaY < 0 || deltaX < 0) {
								F.next( deltaY < 0 ? 'up' : 'right' );
							}

							e.preventDefault();
						}
					}
				});
			}
		},

		trigger: function (event, o) {
			var ret, obj = o || F.coming || F.current;

			if (!obj) {
				return;
			}

			if ($.isFunction( obj[event] )) {
				ret = obj[event].apply(obj, Array.prototype.slice.call(arguments, 1));
			}

			if (ret === false) {
				return false;
			}

			if (obj.helpers) {
				$.each(obj.helpers, function (helper, opts) {
					if (opts && F.helpers[helper] && $.isFunction(F.helpers[helper][event])) {
						F.helpers[helper][event]($.extend(true, {}, F.helpers[helper].defaults, opts), obj);
					}
				});
			}

			D.trigger(event);
		},

		isImage: function (str) {
			return isString(str) && str.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i);
		},

		isSWF: function (str) {
			return isString(str) && str.match(/\.(swf)((\?|#).*)?$/i);
		},

		_start: function (index) {
			var coming = {},
				obj,
				href,
				type,
				margin,
				padding;

			index = getScalar( index );
			obj   = F.group[ index ] || null;

			if (!obj) {
				return false;
			}

			coming = $.extend(true, {}, F.opts, obj);

			// Convert margin and padding properties to array - top, right, bottom, left
			margin  = coming.margin;
			padding = coming.padding;

			if ($.type(margin) === 'number') {
				coming.margin = [margin, margin, margin, margin];
			}

			if ($.type(padding) === 'number') {
				coming.padding = [padding, padding, padding, padding];
			}

			// 'modal' propery is just a shortcut
			if (coming.modal) {
				$.extend(true, coming, {
					closeBtn   : false,
					closeClick : false,
					nextClick  : false,
					arrows     : false,
					mouseWheel : false,
					keys       : null,
					helpers: {
						overlay : {
							closeClick : false
						}
					}
				});
			}

			// 'autoSize' property is a shortcut, too
			if (coming.autoSize) {
				coming.autoWidth = coming.autoHeight = true;
			}

			if (coming.width === 'auto') {
				coming.autoWidth = true;
			}

			if (coming.height === 'auto') {
				coming.autoHeight = true;
			}

			/*
			 * Add reference to the group, so it`s possible to access from callbacks, example:
			 * afterLoad : function() {
			 *     this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
			 * }
			 */

			coming.group  = F.group;
			coming.index  = index;

			// Give a chance for callback or helpers to update coming item (type, title, etc)
			F.coming = coming;

			if (false === F.trigger('beforeLoad')) {
				F.coming = null;

				return;
			}

			type = coming.type;
			href = coming.href;

			if (!type) {
				F.coming = null;

				//If we can not determine content type then drop silently or display next/prev item if looping through gallery
				if (F.current && F.router && F.router !== 'jumpto') {
					F.current.index = index;

					return F[ F.router ]( F.direction );
				}

				return false;
			}

			F.isActive = true;

			if (type === 'image' || type === 'swf') {
				coming.autoHeight = coming.autoWidth = false;
				coming.scrolling  = 'visible';
			}

			if (type === 'image') {
				coming.aspectRatio = true;
			}

			if (type === 'iframe' && isTouch) {
				coming.scrolling = 'scroll';
			}

			// Build the neccessary markup
			coming.wrap = $(coming.tpl.wrap).addClass('fancybox-' + (isTouch ? 'mobile' : 'desktop') + ' fancybox-type-' + type + ' fancybox-tmp ' + coming.wrapCSS).appendTo( coming.parent || 'body' );

			$.extend(coming, {
				skin  : $('.fancybox-skin',  coming.wrap),
				outer : $('.fancybox-outer', coming.wrap),
				inner : $('.fancybox-inner', coming.wrap)
			});

			$.each(["Top", "Right", "Bottom", "Left"], function(i, v) {
				coming.skin.css('padding' + v, getValue(coming.padding[ i ]));
			});

			F.trigger('onReady');

			// Check before try to load; 'inline' and 'html' types need content, others - href
			if (type === 'inline' || type === 'html') {
				if (!coming.content || !coming.content.length) {
					return F._error( 'content' );
				}

			} else if (!href) {
				return F._error( 'href' );
			}

			if (type === 'image') {
				F._loadImage();

			} else if (type === 'ajax') {
				F._loadAjax();

			} else if (type === 'iframe') {
				F._loadIframe();

			} else {
				F._afterLoad();
			}
		},

		_error: function ( type ) {
			$.extend(F.coming, {
				type       : 'html',
				autoWidth  : true,
				autoHeight : true,
				minWidth   : 0,
				minHeight  : 0,
				scrolling  : 'no',
				hasError   : type,
				content    : F.coming.tpl.error
			});

			F._afterLoad();
		},

		_loadImage: function () {
			// Reset preload image so it is later possible to check "complete" property
			var img = F.imgPreload = new Image();

			img.onload = function () {
				this.onload = this.onerror = null;

				F.coming.width  = this.width / F.opts.pixelRatio;
				F.coming.height = this.height / F.opts.pixelRatio;

				F._afterLoad();
			};

			img.onerror = function () {
				this.onload = this.onerror = null;

				F._error( 'image' );
			};

			img.src = F.coming.href;

			if (img.complete !== true) {
				F.showLoading();
			}
		},

		_loadAjax: function () {
			var coming = F.coming;

			F.showLoading();

			F.ajaxLoad = $.ajax($.extend({}, coming.ajax, {
				url: coming.href,
				error: function (jqXHR, textStatus) {
					if (F.coming && textStatus !== 'abort') {
						F._error( 'ajax', jqXHR );

					} else {
						F.hideLoading();
					}
				},
				success: function (data, textStatus) {
					if (textStatus === 'success') {
						coming.content = data;

						F._afterLoad();
					}
				}
			}));
		},

		_loadIframe: function() {
			var coming = F.coming,
				iframe = $(coming.tpl.iframe.replace(/\{rnd\}/g, new Date().getTime()))
					.attr('scrolling', isTouch ? 'auto' : coming.iframe.scrolling)
					.attr('src', coming.href);

			// This helps IE
			$(coming.wrap).bind('onReset', function () {
				try {
					$(this).find('iframe').hide().attr('src', '//about:blank').end().empty();
				} catch (e) {}
			});

			if (coming.iframe.preload) {
				F.showLoading();

				iframe.one('load', function() {
					$(this).data('ready', 1);

					// iOS will lose scrolling if we resize
					if (!isTouch) {
						$(this).bind('load.fb', F.update);
					}

					// Without this trick:
					//   - iframe won't scroll on iOS devices
					//   - IE7 sometimes displays empty iframe
					$(this).parents('.fancybox-wrap').width('100%').removeClass('fancybox-tmp').show();

					F._afterLoad();
				});
			}

			coming.content = iframe.appendTo( coming.inner );

			if (!coming.iframe.preload) {
				F._afterLoad();
			}
		},

		_preloadImages: function() {
			var group   = F.group,
				current = F.current,
				len     = group.length,
				cnt     = current.preload ? Math.min(current.preload, len - 1) : 0,
				item,
				i;

			for (i = 1; i <= cnt; i += 1) {
				item = group[ (current.index + i ) % len ];

				if (item.type === 'image' && item.href) {
					new Image().src = item.href;
				}
			}
		},

		_afterLoad: function () {
			var coming   = F.coming,
				previous = F.current,
				placeholder = 'fancybox-placeholder',
				current,
				content,
				type,
				scrolling,
				href,
				embed;

			F.hideLoading();

			if (!coming || F.isActive === false) {
				return;
			}

			if (false === F.trigger('afterLoad', coming, previous)) {
				coming.wrap.stop(true).trigger('onReset').remove();

				F.coming = null;

				return;
			}

			if (previous) {
				F.trigger('beforeChange', previous);

				previous.wrap.stop(true).removeClass('fancybox-opened')
					.find('.fancybox-item, .fancybox-nav')
					.remove();
			}

			F.unbindEvents();

			current   = coming;
			content   = coming.content;
			type      = coming.type;
			scrolling = coming.scrolling;

			$.extend(F, {
				wrap  : current.wrap,
				skin  : current.skin,
				outer : current.outer,
				inner : current.inner,
				current  : current,
				previous : previous
			});

			href = current.href;

			switch (type) {
				case 'inline':
				case 'ajax':
				case 'html':
					if (current.selector) {
						content = $('<div>').html(content).find(current.selector);

					} else if (isQuery(content)) {
						if (!content.data(placeholder)) {
							content.data(placeholder, $('<div class="' + placeholder + '"></div>').insertAfter( content ).hide() );
						}

						content = content.show().detach();

						current.wrap.bind('onReset', function () {
							if ($(this).find(content).length) {
								content.hide().replaceAll( content.data(placeholder) ).data(placeholder, false);
							}
						});
					}
				break;

				case 'image':
					content = current.tpl.image.replace('{href}', href);
				break;

				case 'swf':
					content = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + href + '"></param>';
					embed   = '';

					$.each(current.swf, function(name, val) {
						content += '<param name="' + name + '" value="' + val + '"></param>';
						embed   += ' ' + name + '="' + val + '"';
					});

					content += '<embed src="' + href + '" type="application/x-shockwave-flash" width="100%" height="100%"' + embed + '></embed></object>';
				break;
			}

			if (!(isQuery(content) && content.parent().is(current.inner))) {
				current.inner.append( content );
			}

			// Give a chance for helpers or callbacks to update elements
			F.trigger('beforeShow');

			// Set scrolling before calculating dimensions
			current.inner.css('overflow', scrolling === 'yes' ? 'scroll' : (scrolling === 'no' ? 'hidden' : scrolling));

			// Set initial dimensions and start position
			F._setDimension();

			F.reposition();

			F.isOpen = false;
			F.coming = null;

			F.bindEvents();

			if (!F.isOpened) {
				$('.fancybox-wrap').not( current.wrap ).stop(true).trigger('onReset').remove();

			} else if (previous.prevMethod) {
				F.transitions[ previous.prevMethod ]();
			}

			F.transitions[ F.isOpened ? current.nextMethod : current.openMethod ]();

			F._preloadImages();
		},

		_setDimension: function () {
			var viewport   = F.getViewport(),
				steps      = 0,
				canShrink  = false,
				canExpand  = false,
				wrap       = F.wrap,
				skin       = F.skin,
				inner      = F.inner,
				current    = F.current,
				width      = current.width,
				height     = current.height,
				minWidth   = current.minWidth,
				minHeight  = current.minHeight,
				maxWidth   = current.maxWidth,
				maxHeight  = current.maxHeight,
				scrolling  = current.scrolling,
				scrollOut  = current.scrollOutside ? current.scrollbarWidth : 0,
				margin     = current.margin,
				wMargin    = getScalar(margin[1] + margin[3]),
				hMargin    = getScalar(margin[0] + margin[2]),
				wPadding,
				hPadding,
				wSpace,
				hSpace,
				origWidth,
				origHeight,
				origMaxWidth,
				origMaxHeight,
				ratio,
				width_,
				height_,
				maxWidth_,
				maxHeight_,
				iframe,
				body;

			// Reset dimensions so we could re-check actual size
			wrap.add(skin).add(inner).width('auto').height('auto').removeClass('fancybox-tmp');

			wPadding = getScalar(skin.outerWidth(true)  - skin.width());
			hPadding = getScalar(skin.outerHeight(true) - skin.height());

			// Any space between content and viewport (margin, padding, border, title)
			wSpace = wMargin + wPadding;
			hSpace = hMargin + hPadding;

			origWidth  = isPercentage(width)  ? (viewport.w - wSpace) * getScalar(width)  / 100 : width;
			origHeight = isPercentage(height) ? (viewport.h - hSpace) * getScalar(height) / 100 : height;

			if (current.type === 'iframe') {
				iframe = current.content;

				if (current.autoHeight && iframe.data('ready') === 1) {
					try {
						if (iframe[0].contentWindow.document.location) {
							inner.width( origWidth ).height(9999);

							body = iframe.contents().find('body');

							if (scrollOut) {
								body.css('overflow-x', 'hidden');
							}

							origHeight = body.outerHeight(true);
						}

					} catch (e) {}
				}

			} else if (current.autoWidth || current.autoHeight) {
				inner.addClass( 'fancybox-tmp' );

				// Set width or height in case we need to calculate only one dimension
				if (!current.autoWidth) {
					inner.width( origWidth );
				}

				if (!current.autoHeight) {
					inner.height( origHeight );
				}

				if (current.autoWidth) {
					origWidth = inner.width();
				}

				if (current.autoHeight) {
					origHeight = inner.height();
				}

				inner.removeClass( 'fancybox-tmp' );
			}

			width  = getScalar( origWidth );
			height = getScalar( origHeight );

			ratio  = origWidth / origHeight;

			// Calculations for the content
			minWidth  = getScalar(isPercentage(minWidth) ? getScalar(minWidth, 'w') - wSpace : minWidth);
			maxWidth  = getScalar(isPercentage(maxWidth) ? getScalar(maxWidth, 'w') - wSpace : maxWidth);

			minHeight = getScalar(isPercentage(minHeight) ? getScalar(minHeight, 'h') - hSpace : minHeight);
			maxHeight = getScalar(isPercentage(maxHeight) ? getScalar(maxHeight, 'h') - hSpace : maxHeight);

			// These will be used to determine if wrap can fit in the viewport
			origMaxWidth  = maxWidth;
			origMaxHeight = maxHeight;

			if (current.fitToView) {
				maxWidth  = Math.min(viewport.w - wSpace, maxWidth);
				maxHeight = Math.min(viewport.h - hSpace, maxHeight);
			}

			maxWidth_  = viewport.w - wMargin;
			maxHeight_ = viewport.h - hMargin;

			if (current.aspectRatio) {
				if (width > maxWidth) {
					width  = maxWidth;
					height = getScalar(width / ratio);
				}

				if (height > maxHeight) {
					height = maxHeight;
					width  = getScalar(height * ratio);
				}

				if (width < minWidth) {
					width  = minWidth;
					height = getScalar(width / ratio);
				}

				if (height < minHeight) {
					height = minHeight;
					width  = getScalar(height * ratio);
				}

			} else {
				width = Math.max(minWidth, Math.min(width, maxWidth));

				if (current.autoHeight && current.type !== 'iframe') {
					inner.width( width );

					height = inner.height();
				}

				height = Math.max(minHeight, Math.min(height, maxHeight));
			}

			// Try to fit inside viewport (including the title)
			if (current.fitToView) {
				inner.width( width ).height( height );

				wrap.width( width + wPadding );

				// Real wrap dimensions
				width_  = wrap.width();
				height_ = wrap.height();

				if (current.aspectRatio) {
					while ((width_ > maxWidth_ || height_ > maxHeight_) && width > minWidth && height > minHeight) {
						if (steps++ > 19) {
							break;
						}

						height = Math.max(minHeight, Math.min(maxHeight, height - 10));
						width  = getScalar(height * ratio);

						if (width < minWidth) {
							width  = minWidth;
							height = getScalar(width / ratio);
						}

						if (width > maxWidth) {
							width  = maxWidth;
							height = getScalar(width / ratio);
						}

						inner.width( width ).height( height );

						wrap.width( width + wPadding );

						width_  = wrap.width();
						height_ = wrap.height();
					}

				} else {
					width  = Math.max(minWidth,  Math.min(width,  width  - (width_  - maxWidth_)));
					height = Math.max(minHeight, Math.min(height, height - (height_ - maxHeight_)));
				}
			}

			if (scrollOut && scrolling === 'auto' && height < origHeight && (width + wPadding + scrollOut) < maxWidth_) {
				width += scrollOut;
			}

			inner.width( width ).height( height );

			wrap.width( width + wPadding );

			width_  = wrap.width();
			height_ = wrap.height();

			canShrink = (width_ > maxWidth_ || height_ > maxHeight_) && width > minWidth && height > minHeight;
			canExpand = current.aspectRatio ? (width < origMaxWidth && height < origMaxHeight && width < origWidth && height < origHeight) : ((width < origMaxWidth || height < origMaxHeight) && (width < origWidth || height < origHeight));

			$.extend(current, {
				dim : {
					width	: getValue( width_ ),
					height	: getValue( height_ )
				},
				origWidth  : origWidth,
				origHeight : origHeight,
				canShrink  : canShrink,
				canExpand  : canExpand,
				wPadding   : wPadding,
				hPadding   : hPadding,
				wrapSpace  : height_ - skin.outerHeight(true),
				skinSpace  : skin.height() - height
			});

			if (!iframe && current.autoHeight && height > minHeight && height < maxHeight && !canExpand) {
				inner.height('auto');
			}
		},

		_getPosition: function (onlyAbsolute) {
			var current  = F.current,
				viewport = F.getViewport(),
				margin   = current.margin,
				width    = F.wrap.width()  + margin[1] + margin[3],
				height   = F.wrap.height() + margin[0] + margin[2],
				rez      = {
					position: 'absolute',
					top  : margin[0],
					left : margin[3]
				};

			if (current.autoCenter && current.fixed && !onlyAbsolute && height <= viewport.h && width <= viewport.w) {
				rez.position = 'fixed';

			} else if (!current.locked) {
				rez.top  += viewport.y;
				rez.left += viewport.x;
			}

			rez.top  = getValue(Math.max(rez.top,  rez.top  + ((viewport.h - height) * current.topRatio)));
			rez.left = getValue(Math.max(rez.left, rez.left + ((viewport.w - width)  * current.leftRatio)));

			return rez;
		},

		_afterZoomIn: function () {
			var current = F.current;

			if (!current) {
				return;
			}

			F.isOpen = F.isOpened = true;

			F.wrap.css('overflow', 'visible').addClass('fancybox-opened');

			F.update();

			// Assign a click event
			if ( current.closeClick || (current.nextClick && F.group.length > 1) ) {
				F.inner.css('cursor', 'pointer').bind('click.fb', function(e) {
					if (!$(e.target).is('a') && !$(e.target).parent().is('a')) {
						e.preventDefault();

						F[ current.closeClick ? 'close' : 'next' ]();
					}
				});
			}

			// Create a close button
			if (current.closeBtn) {
				$(current.tpl.closeBtn).appendTo(F.skin).bind('click.fb', function(e) {
					e.preventDefault();

					F.close();
				});
			}

			// Create navigation arrows
			if (current.arrows && F.group.length > 1) {
				if (current.loop || current.index > 0) {
					$(current.tpl.prev).appendTo(F.outer).bind('click.fb', F.prev);
				}

				if (current.loop || current.index < F.group.length - 1) {
					$(current.tpl.next).appendTo(F.outer).bind('click.fb', F.next);
				}
			}

			F.trigger('afterShow');

			// Stop the slideshow if this is the last item
			if (!current.loop && current.index === current.group.length - 1) {
				F.play( false );

			} else if (F.opts.autoPlay && !F.player.isActive) {
				F.opts.autoPlay = false;

				F.play();
			}
		},

		_afterZoomOut: function ( obj ) {
			obj = obj || F.current;

			$('.fancybox-wrap').trigger('onReset').remove();

			$.extend(F, {
				group  : {},
				opts   : {},
				router : false,
				current   : null,
				isActive  : false,
				isOpened  : false,
				isOpen    : false,
				isClosing : false,
				wrap   : null,
				skin   : null,
				outer  : null,
				inner  : null
			});

			F.trigger('afterClose', obj);
		}
	});

	/*
	 *	Default transitions
	 */

	F.transitions = {
		getOrigPosition: function () {
			var current  = F.current,
				element  = current.element,
				orig     = current.orig,
				pos      = {},
				width    = 50,
				height   = 50,
				hPadding = current.hPadding,
				wPadding = current.wPadding,
				viewport = F.getViewport();

			if (!orig && current.isDom && element.is(':visible')) {
				orig = element.find('img:first');

				if (!orig.length) {
					orig = element;
				}
			}

			if (isQuery(orig)) {
				pos = orig.offset();

				if (orig.is('img')) {
					width  = orig.outerWidth();
					height = orig.outerHeight();
				}

			} else {
				pos.top  = viewport.y + (viewport.h - height) * current.topRatio;
				pos.left = viewport.x + (viewport.w - width)  * current.leftRatio;
			}

			if (F.wrap.css('position') === 'fixed' || current.locked) {
				pos.top  -= viewport.y;
				pos.left -= viewport.x;
			}

			pos = {
				top     : getValue(pos.top  - hPadding * current.topRatio),
				left    : getValue(pos.left - wPadding * current.leftRatio),
				width   : getValue(width  + wPadding),
				height  : getValue(height + hPadding)
			};

			return pos;
		},

		step: function (now, fx) {
			var ratio,
				padding,
				value,
				prop       = fx.prop,
				current    = F.current,
				wrapSpace  = current.wrapSpace,
				skinSpace  = current.skinSpace;

			if (prop === 'width' || prop === 'height') {
				ratio = fx.end === fx.start ? 1 : (now - fx.start) / (fx.end - fx.start);

				if (F.isClosing) {
					ratio = 1 - ratio;
				}

				padding = prop === 'width' ? current.wPadding : current.hPadding;
				value   = now - padding;

				F.skin[ prop ](  getScalar( prop === 'width' ?  value : value - (wrapSpace * ratio) ) );
				F.inner[ prop ]( getScalar( prop === 'width' ?  value : value - (wrapSpace * ratio) - (skinSpace * ratio) ) );
			}
		},

		zoomIn: function () {
			var current  = F.current,
				startPos = current.pos,
				effect   = current.openEffect,
				elastic  = effect === 'elastic',
				endPos   = $.extend({opacity : 1}, startPos);

			// Remove "position" property that breaks older IE
			delete endPos.position;

			if (elastic) {
				startPos = this.getOrigPosition();

				if (current.openOpacity) {
					startPos.opacity = 0.1;
				}

			} else if (effect === 'fade') {
				startPos.opacity = 0.1;
			}

			F.wrap.css(startPos).animate(endPos, {
				duration : effect === 'none' ? 0 : current.openSpeed,
				easing   : current.openEasing,
				step     : elastic ? this.step : null,
				complete : F._afterZoomIn
			});
		},

		zoomOut: function () {
			var current  = F.current,
				effect   = current.closeEffect,
				elastic  = effect === 'elastic',
				endPos   = {opacity : 0.1};

			if (elastic) {
				endPos = this.getOrigPosition();

				if (current.closeOpacity) {
					endPos.opacity = 0.1;
				}
			}

			F.wrap.animate(endPos, {
				duration : effect === 'none' ? 0 : current.closeSpeed,
				easing   : current.closeEasing,
				step     : elastic ? this.step : null,
				complete : F._afterZoomOut
			});
		},

		changeIn: function () {
			var current   = F.current,
				effect    = current.nextEffect,
				startPos  = current.pos,
				endPos    = { opacity : 1 },
				direction = F.direction,
				distance  = 200,
				field;

			startPos.opacity = 0.1;

			if (effect === 'elastic') {
				field = direction === 'down' || direction === 'up' ? 'top' : 'left';

				if (direction === 'down' || direction === 'right') {
					startPos[ field ] = getValue(getScalar(startPos[ field ]) - distance);
					endPos[ field ]   = '+=' + distance + 'px';

				} else {
					startPos[ field ] = getValue(getScalar(startPos[ field ]) + distance);
					endPos[ field ]   = '-=' + distance + 'px';
				}
			}

			// Workaround for http://bugs.jquery.com/ticket/12273
			if (effect === 'none') {
				F._afterZoomIn();

			} else {
				F.wrap.css(startPos).animate(endPos, {
					duration : current.nextSpeed,
					easing   : current.nextEasing,
					complete : F._afterZoomIn
				});
			}
		},

		changeOut: function () {
			var previous  = F.previous,
				effect    = previous.prevEffect,
				endPos    = { opacity : 0.1 },
				direction = F.direction,
				distance  = 200;

			if (effect === 'elastic') {
				endPos[ direction === 'down' || direction === 'up' ? 'top' : 'left' ] = ( direction === 'up' || direction === 'left' ? '-' : '+' ) + '=' + distance + 'px';
			}

			previous.wrap.animate(endPos, {
				duration : effect === 'none' ? 0 : previous.prevSpeed,
				easing   : previous.prevEasing,
				complete : function () {
					$(this).trigger('onReset').remove();
				}
			});
		}
	};

	/*
	 *	Overlay helper
	 */

	F.helpers.overlay = {
		defaults : {
			closeClick : true,      // if true, fancyBox will be closed when user clicks on the overlay
			speedOut   : 200,       // duration of fadeOut animation
			showEarly  : true,      // indicates if should be opened immediately or wait until the content is ready
			css        : {},        // custom CSS properties
			locked     : !isTouch,  // if true, the content will be locked into overlay
			fixed      : true       // if false, the overlay CSS position property will not be set to "fixed"
		},

		overlay : null,      // current handle
		fixed   : false,     // indicates if the overlay has position "fixed"
		el      : $('html'), // element that contains "the lock"

		// Public methods
		create : function(opts) {
			opts = $.extend({}, this.defaults, opts);

			if (this.overlay) {
				this.close();
			}

			this.overlay = $('<div class="fancybox-overlay"></div>').appendTo( F.coming ? F.coming.parent : opts.parent );
			this.fixed   = false;

			if (opts.fixed && F.defaults.fixed) {
				this.overlay.addClass('fancybox-overlay-fixed');

				this.fixed = true;
			}
		},

		open : function(opts) {
			var that = this;

			opts = $.extend({}, this.defaults, opts);

			if (this.overlay) {
				this.overlay.unbind('.overlay').width('auto').height('auto');

			} else {
				this.create(opts);
			}

			if (!this.fixed) {
				W.bind('resize.overlay', $.proxy( this.update, this) );

				this.update();
			}

			if (opts.closeClick) {
				this.overlay.bind('click.overlay', function(e) {
					if ($(e.target).hasClass('fancybox-overlay')) {
						if (F.isActive) {
							F.close();
						} else {
							that.close();
						}

						return false;
					}
				});
			}

			this.overlay.css( opts.css ).show();
		},

		close : function() {
			var scrollV, scrollH;

			W.unbind('resize.overlay');

			if (this.el.hasClass('fancybox-lock')) {
				$('.fancybox-margin').removeClass('fancybox-margin');

				scrollV = W.scrollTop();
				scrollH = W.scrollLeft();

				this.el.removeClass('fancybox-lock');

				W.scrollTop( scrollV ).scrollLeft( scrollH );
			}

			$('.fancybox-overlay').remove().hide();

			$.extend(this, {
				overlay : null,
				fixed   : false
			});
		},

		// Private, callbacks

		update : function () {
			var width = '100%', offsetWidth;

			// Reset width/height so it will not mess
			this.overlay.width(width).height('100%');

			// jQuery does not return reliable result for IE
			if (IE) {
				offsetWidth = Math.max(document.documentElement.offsetWidth, document.body.offsetWidth);

				if (D.width() > offsetWidth) {
					width = D.width();
				}

			} else if (D.width() > W.width()) {
				width = D.width();
			}

			this.overlay.width(width).height(D.height());
		},

		// This is where we can manipulate DOM, because later it would cause iframes to reload
		onReady : function (opts, obj) {
			var overlay = this.overlay;

			$('.fancybox-overlay').stop(true, true);

			if (!overlay) {
				this.create(opts);
			}

			if (opts.locked && this.fixed && obj.fixed) {
				if (!overlay) {
					this.margin = D.height() > W.height() ? $('html').css('margin-right').replace("px", "") : false;
				}

				obj.locked = this.overlay.append( obj.wrap );
				obj.fixed  = false;
			}

			if (opts.showEarly === true) {
				this.beforeShow.apply(this, arguments);
			}
		},

		beforeShow : function(opts, obj) {
			var scrollV, scrollH;

			if (obj.locked) {
				if (this.margin !== false) {
					$('*').filter(function(){
						return ($(this).css('position') === 'fixed' && !$(this).hasClass("fancybox-overlay") && !$(this).hasClass("fancybox-wrap") );
					}).addClass('fancybox-margin');

					this.el.addClass('fancybox-margin');
				}

				scrollV = W.scrollTop();
				scrollH = W.scrollLeft();

				this.el.addClass('fancybox-lock');

				W.scrollTop( scrollV ).scrollLeft( scrollH );
			}

			this.open(opts);
		},

		onUpdate : function() {
			if (!this.fixed) {
				this.update();
			}
		},

		afterClose: function (opts) {
			// Remove overlay if exists and fancyBox is not opening
			// (e.g., it is not being open using afterClose callback)
			//if (this.overlay && !F.isActive) {
			if (this.overlay && !F.coming) {
				this.overlay.fadeOut(opts.speedOut, $.proxy( this.close, this ));
			}
		}
	};

	/*
	 *	Title helper
	 */

	F.helpers.title = {
		defaults : {
			type     : 'float', // 'float', 'inside', 'outside' or 'over',
			position : 'bottom' // 'top' or 'bottom'
		},

		beforeShow: function (opts) {
			var current = F.current,
				text    = current.title,
				type    = opts.type,
				title,
				target;

			if ($.isFunction(text)) {
				text = text.call(current.element, current);
			}

			if (!isString(text) || $.trim(text) === '') {
				return;
			}

			title = $('<div class="fancybox-title fancybox-title-' + type + '-wrap">' + text + '</div>');

			switch (type) {
				case 'inside':
					target = F.skin;
				break;

				case 'outside':
					target = F.wrap;
				break;

				case 'over':
					target = F.inner;
				break;

				default: // 'float'
					target = F.skin;

					title.appendTo('body');

					if (IE) {
						title.width( title.width() );
					}

					title.wrapInner('<span class="child"></span>');

					//Increase bottom margin so this title will also fit into viewport
					F.current.margin[2] += Math.abs( getScalar(title.css('margin-bottom')) );
				break;
			}

			title[ (opts.position === 'top' ? 'prependTo'  : 'appendTo') ](target);
		}
	};

	// jQuery plugin initialization
	$.fn.fancybox = function (options) {
		var index,
			that     = $(this),
			selector = this.selector || '',
			run      = function(e) {
				var what = $(this).blur(), idx = index, relType, relVal;

				if (!(e.ctrlKey || e.altKey || e.shiftKey || e.metaKey) && !what.is('.fancybox-wrap')) {
					relType = options.groupAttr || 'data-fancybox-group';
					relVal  = what.attr(relType);

					if (!relVal) {
						relType = 'rel';
						relVal  = what.get(0)[ relType ];
					}

					if (relVal && relVal !== '' && relVal !== 'nofollow') {
						what = selector.length ? $(selector) : that;
						what = what.filter('[' + relType + '="' + relVal + '"]');
						idx  = what.index(this);
					}

					options.index = idx;

					// Stop an event from bubbling if everything is fine
					if (F.open(what, options) !== false) {
						e.preventDefault();
					}
				}
			};

		options = options || {};
		index   = options.index || 0;

		if (!selector || options.live === false) {
			that.unbind('click.fb-start').bind('click.fb-start', run);

		} else {
			D.undelegate(selector, 'click.fb-start').delegate(selector + ":not('.fancybox-item, .fancybox-nav')", 'click.fb-start', run);
		}

		this.filter('[data-fancybox-start=1]').trigger('click');

		return this;
	};

	// Tests that need a body at doc ready
	D.ready(function() {
		var w1, w2;

		if ( $.scrollbarWidth === undefined ) {
			// http://benalman.com/projects/jquery-misc-plugins/#scrollbarwidth
			$.scrollbarWidth = function() {
				var parent = $('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo('body'),
					child  = parent.children(),
					width  = child.innerWidth() - child.height( 99 ).innerWidth();

				parent.remove();

				return width;
			};
		}

		if ( $.support.fixedPosition === undefined ) {
			$.support.fixedPosition = (function() {
				var elem  = $('<div style="position:fixed;top:20px;"></div>').appendTo('body'),
					fixed = ( elem[0].offsetTop === 20 || elem[0].offsetTop === 15 );

				elem.remove();

				return fixed;
			}());
		}

		$.extend(F.defaults, {
			scrollbarWidth : $.scrollbarWidth(),
			fixed  : $.support.fixedPosition,
			parent : $('body')
		});

		//Get real width of page scroll-bar
		w1 = $(window).width();

		H.addClass('fancybox-lock-test');

		w2 = $(window).width();

		H.removeClass('fancybox-lock-test');

		$("<style type='text/css'>.fancybox-margin{margin-right:" + (w2 - w1) + "px;}</style>").appendTo("head");
	});

}(window, document, jQuery));
jQuery(document).ready(function() {

	/*
	*   Examples - images
	*/
	
	$("a#example1").fancybox({
		'titleShow'     : false
	});
		
	$("a#example2").fancybox({
		'titleShow'     : false,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic',
		'easingIn'      : 'easeOutBack',
		'easingOut'     : 'easeInBack'
	});
	
	$("a#example3").fancybox({
	    'titleShow'     : false,
		'transitionIn'	: 'none',
		'transitionOut'	: 'none'
	});
	
	$("a#example4").fancybox();
	
	$("a#example5").fancybox({
		'titlePosition'  : 'inside'
	});
	
	$("a#example6").fancybox({
		'titlePosition'  : 'over'
	});
	
	$("a[rel=example_group]").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'titlePosition' 	: 'over',
		'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
		    return '<span id="fancybox-title-over">Image ' +  (currentIndex + 1) + ' / ' + currentArray.length + ' ' + title + '</span>';
		}
	});
	
	/*
	*   Examples - various
	*/
	
	$(".various").fancybox({
		'transitionIn'	: 'none',
		'transitionOut'	: 'none'
	});
	
	$("#various1").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'none',
		'transitionOut'		: 'none'
	});
	
	$("#various2").fancybox({
		'modal' : true
	});
	
	$("#various3").fancybox({
		ajax : {
		    type	: "POST",
		    data	: 'mydata=test'
		}
	});

	$("#various4").fancybox({
		ajax : {
		    type	: "POST"
		}
	});
			
	$("#various5").fancybox({
		//'width'				: '75%',
		//'height'			: '75%',
        'autoScale'     	: true,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
	});
	
	$(".popuper").fancybox({
		//'width'				: '75%',
		//'height'			: '75%',
        'autoScale'     	: true,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
	});
	
	$("#various6").fancybox({
	    'padding'           : 0,
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none'
	});
	
	$("#various7").fancybox({
		onStart		:	function() {
			return window.confirm('Continue?');
		},
		onCancel	:	function() {
			alert('Canceled!');
		},
		onComplete	:	function() {
            alert('Completed!');
		},
		onCleanup	:	function() {
            return window.confirm('Close?');
		},
		onClosed	:	function() {
            alert('Closed!');
		}
	});
	
	$("#various8, #various9").fancybox();
	
	/*
	*   Examples - manual call
	*/

	$("#manual1").click(function() {
		$.fancybox({
			//'orig'			: $(this),
			'padding'		: 0,
			'href'			: 'http://farm3.static.flickr.com/2687/4220681515_cc4f42d6b9.jpg',
			'title'   		: 'Lorem ipsum dolor sit amet',
			'transitionIn'	: 'elastic',
			'transitionOut'	: 'elastic'
		});
    });
    
    $("#manual2").click(function() {
		$.fancybox([
			'http://farm5.static.flickr.com/4044/4286199901_33844563eb.jpg',
			'http://farm3.static.flickr.com/2687/4220681515_cc4f42d6b9.jpg',
			{
				'href'	: 'http://farm5.static.flickr.com/4005/4213562882_851e92f326.jpg',
				'title'	: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
			}
		], {
			'padding'			: 0,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'              : 'image',
			'changeFade'        : 0
		});
	});
			
	/*
	*   Tips & Tricks
	*/
	
	$("#tip3").fancybox({
	    'transitionIn'	: 'none',
		'transitionOut'	: 'none',
		'titlePosition'	: 'over',
		'onComplete'	: function() {
			$("#fancybox-wrap").hover(function() {
				$("#fancybox-title").show();
			}, function() {
				$("#fancybox-title").hide();
			});
		}
	});

	$("#tip4").click(function() {
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'width'			: 680,
			'height'		: 495,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'			: 'swf',
			'swf'			: {
			    'wmode'				: 'transparent',
				'allowfullscreen'	: 'true'
			}
		});

		return false;
	});

    $("#tip5").fancybox({
		'scrolling' : 'no',
		'titleShow'	: false,
		'onClosed'	: function() {
		    $("#login_error").hide();
		}
	});
    
	$("#login_form").bind("submit", function() {
	
	    if ($("#login_name").val().length < 1 || $("#login_pass").val().length < 1) {
	        $("#login_error").show();
	        $.fancybox.resize();
	        return false;
	    }
	    
	    $.fancybox.showActivity();

		$.ajax({
			type	: "POST",
			cache	: false,
			url		: "/data/login.php",
			data	: $(this).serializeArray(),
			success: function(data) {
				$.fancybox(data);
			}
		});

		return false;
	});
	
	$("#tip6").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'autoScale'     	: false,
		'type'				: 'iframe',
		'width'				: 500,
		'height'			: 500,
		'scrolling'   		: 'no'
	});
	
	function formatTitle(title, currentArray, currentIndex, currentOpts) {
	    return '<div id="tip7-title"><span><a href="javascript:;" onclick="$.fancybox.close();"><img src="/data/closelabel.gif" /></a></span>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + 'Image ' + (currentIndex + 1) + ' of ' + currentArray.length + '</div>';
	}

	$(".tip7").fancybox({
	    'showCloseButton'   : false,
		'titlePosition' 	: 'inside',
		'titleFormat'		: formatTitle
	});
	
	
	// Next JS snippets are only for fancybox.net
	
	/*
	*   Donate link
	*/
	$("a#donate").bind("click", function() {
		$("#donate_form").submit();
		return false;
	});

	/*
	*   Zebra-stripping table
	*/
	
	$("table.options tr:even").addClass('even');

});

// Menu Mobile
$(window).load(function(){
   	$(".menum").hide();
   	$(".mobilemenu").show();
    $('.mobilemenu').click(function(){
		$(".menum").slideToggle();
    });
});

// Top Nav Member Shopping Cart
function DropDown(el) {
  this.dd = el;
  this.initEvents();
}
DropDown.prototype = {
  initEvents : function() {
    var obj = this;

    obj.dd.on('click', function(event){
      $(this).toggleClass('active');
      event.stopPropagation();
    });
  }
}
$(function() {
  var dd = new DropDown( $('#dd') );
  $(document).click(function() {
    $('.shopping-dropdown').removeClass('active');
  });
});

$(function(){
  $('.js-variant-change-option').change(function(){
    window.location = $(this).data('url') + '/product/' + $(this).val();
  });
});

!function(t,e,i,n){var a=e.document,o=t(a),r=t(e),s=Array.prototype,l=1.41,c=true,h=3e4,u=false,f=navigator.userAgent.toLowerCase(),d=e.location.hash.replace(/#\//,""),p=e.location.protocol,g=Math,m=function(){},v=function(){return false},y=function(){var t=3,e=a.createElement("div"),i=e.getElementsByTagName("i");do{e.innerHTML="<!--[if gt IE "+ ++t+"]><i></i><![endif]-->"}while(i[0]);return t>4?t:a.documentMode||n}(),_=function(){return{html:a.documentElement,body:a.body,head:a.getElementsByTagName("head")[0],title:a.title}},b=e.parent!==e.self,w="data ready thumbnail loadstart loadfinish image play pause progress "+"fullscreen_enter fullscreen_exit idle_enter idle_exit rescale "+"lightbox_open lightbox_close lightbox_image",x=function(){var e=[];t.each(w.split(" "),function(t,i){e.push(i);if(/_/.test(i)){e.push(i.replace(/_/g,""))}});return e}(),T=function(e){var i;if(typeof e!=="object"){return e}t.each(e,function(n,a){if(/^[a-z]+_/.test(n)){i="";t.each(n.split("_"),function(t,e){i+=t>0?e.substr(0,1).toUpperCase()+e.substr(1):e});e[i]=a;delete e[n]}});return e},k=function(e){if(t.inArray(e,x)>-1){return i[e.toUpperCase()]}return e},C={youtube:{reg:/https?:\/\/(?:[a-zA_Z]{2,3}.)?(?:youtube\.com\/watch\?)((?:[\w\d\-\_\=]+&amp;(?:amp;)?)*v(?:&lt;[A-Z]+&gt;)?=([0-9a-zA-Z\-\_]+))/i,embed:function(){return"http://www.youtube.com/embed/"+this.id},getUrl:function(){return p+"//gdata.youtube.com/feeds/api/videos/"+this.id+"?v=2&alt=json-in-script&callback=?"},get_thumb:function(t){return t.entry.media$group.media$thumbnail[2].url},get_image:function(t){if(t.entry.yt$hd){return p+"//img.youtube.com/vi/"+this.id+"/maxresdefault.jpg"}return t.entry.media$group.media$thumbnail[3].url}},vimeo:{reg:/https?:\/\/(?:www\.)?(vimeo\.com)\/(?:hd#)?([0-9]+)/i,embed:function(){return"http://player.vimeo.com/video/"+this.id},getUrl:function(){return p+"//vimeo.com/api/v2/video/"+this.id+".json?callback=?"},get_thumb:function(t){return t[0].thumbnail_medium},get_image:function(t){return t[0].thumbnail_large}},dailymotion:{reg:/https?:\/\/(?:www\.)?(dailymotion\.com)\/video\/([^_]+)/,embed:function(){return p+"//www.dailymotion.com/embed/video/"+this.id},getUrl:function(){return"https://api.dailymotion.com/video/"+this.id+"?fields=thumbnail_240_url,thumbnail_720_url&callback=?"},get_thumb:function(t){return t.thumbnail_240_url},get_image:function(t){return t.thumbnail_720_url}},_inst:[]},I=function(e,i){for(var n=0;n<C._inst.length;n++){if(C._inst[n].id===i&&C._inst[n].type==e){return C._inst[n]}}this.type=e;this.id=i;this.readys=[];C._inst.push(this);var a=this;t.extend(this,C[e]);t.getJSON(this.getUrl(),function(e){a.data=e;t.each(a.readys,function(t,e){e(a.data)});a.readys=[]});this.getMedia=function(t,e,i){i=i||m;var n=this;var a=function(i){e(n["get_"+t](i))};try{if(n.data){a(n.data)}else{n.readys.push(a)}}catch(o){i()}}},S=function(t){var e;for(var i in C){e=t&&C[i].reg&&t.match(C[i].reg);if(e&&e.length){return{id:e[2],provider:i}}}return false},A={support:function(){var t=_().html;return!b&&(t.requestFullscreen||t.msRequestFullscreen||t.mozRequestFullScreen||t.webkitRequestFullScreen)}(),callback:m,enter:function(t,e,i){this.instance=t;this.callback=e||m;i=i||_().html;if(i.requestFullscreen){i.requestFullscreen()}else if(i.msRequestFullscreen){i.msRequestFullscreen()}else if(i.mozRequestFullScreen){i.mozRequestFullScreen()}else if(i.webkitRequestFullScreen){i.webkitRequestFullScreen()}},exit:function(t){this.callback=t||m;if(a.exitFullscreen){a.exitFullscreen()}else if(a.msExitFullscreen){a.msExitFullscreen()}else if(a.mozCancelFullScreen){a.mozCancelFullScreen()}else if(a.webkitCancelFullScreen){a.webkitCancelFullScreen()}},instance:null,listen:function(){if(!this.support){return}var t=function(){if(!A.instance){return}var t=A.instance._fullscreen;if(a.fullscreen||a.mozFullScreen||a.webkitIsFullScreen||a.msFullscreenElement&&a.msFullscreenElement!==null){t._enter(A.callback)}else{t._exit(A.callback)}};a.addEventListener("fullscreenchange",t,false);a.addEventListener("MSFullscreenChange",t,false);a.addEventListener("mozfullscreenchange",t,false);a.addEventListener("webkitfullscreenchange",t,false)}},E=[],D=[],$=false,L=false,P=[],z=[],F=function(e){z.push(e);t.each(P,function(t,i){if(i._options.theme==e.name||!i._initialized&&!i._options.theme){i.theme=e;i._init.call(i)}})},H=function(){return{clearTimer:function(e){t.each(i.get(),function(){this.clearTimer(e)})},addTimer:function(e){t.each(i.get(),function(){this.addTimer(e)})},array:function(t){return s.slice.call(t,0)},create:function(t,e){e=e||"div";var i=a.createElement(e);i.className=t;return i},removeFromArray:function(e,i){t.each(e,function(t,n){if(n==i){e.splice(t,1);return false}});return e},getScriptPath:function(e){e=e||t("script:last").attr("src");var i=e.split("/");if(i.length==1){return""}i.pop();return i.join("/")+"/"},animate:function(){var n=function(t){var i="transition WebkitTransition MozTransition OTransition".split(" "),n;if(e.opera){return false}for(n=0;i[n];n++){if(typeof t[i[n]]!=="undefined"){return i[n]}}return false}((a.body||a.documentElement).style);var o={MozTransition:"transitionend",OTransition:"oTransitionEnd",WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[n];var r={_default:[.25,.1,.25,1],galleria:[.645,.045,.355,1],galleriaIn:[.55,.085,.68,.53],galleriaOut:[.25,.46,.45,.94],ease:[.25,0,.25,1],linear:[.25,.25,.75,.75],"ease-in":[.42,0,1,1],"ease-out":[0,0,.58,1],"ease-in-out":[.42,0,.58,1]};var s=function(e,i,n){var a={};n=n||"transition";t.each("webkit moz ms o".split(" "),function(){a["-"+this+"-"+n]=i});e.css(a)};var l=function(t){s(t,"none","transition");if(i.WEBKIT&&i.TOUCH){s(t,"translate3d(0,0,0)","transform");if(t.data("revert")){t.css(t.data("revert"));t.data("revert",null)}}};var c,h,u,f,d,p,g;return function(a,v,y){y=t.extend({duration:400,complete:m,stop:false},y);a=t(a);if(!y.duration){a.css(v);y.complete.call(a[0]);return}if(!n){a.animate(v,y);return}if(y.stop){a.off(o);l(a)}c=false;t.each(v,function(t,e){g=a.css(t);if(H.parseValue(g)!=H.parseValue(e)){c=true}a.css(t,g)});if(!c){e.setTimeout(function(){y.complete.call(a[0])},y.duration);return}h=[];u=y.easing in r?r[y.easing]:r._default;f=" "+y.duration+"ms"+" cubic-bezier("+u.join(",")+")";e.setTimeout(function(e,n,a,o){return function(){e.one(n,function(t){return function(){l(t);y.complete.call(t[0])}}(e));if(i.WEBKIT&&i.TOUCH){d={};p=[0,0,0];t.each(["left","top"],function(t,i){if(i in a){p[t]=H.parseValue(a[i])-H.parseValue(e.css(i))+"px";d[i]=a[i];delete a[i]}});if(p[0]||p[1]){e.data("revert",d);h.push("-webkit-transform"+o);s(e,"translate3d("+p.join(",")+")","transform")}}t.each(a,function(t,e){h.push(t+o)});s(e,h.join(","));e.css(a)}}(a,o,v,f),2)}}(),removeAlpha:function(t){if(t instanceof jQuery){t=t[0]}if(y<9&&t){var e=t.style,i=t.currentStyle,n=i&&i.filter||e.filter||"";if(/alpha/.test(n)){e.filter=n.replace(/alpha\([^)]*\)/i,"")}}},forceStyles:function(e,i){e=t(e);if(e.attr("style")){e.data("styles",e.attr("style")).removeAttr("style")}e.css(i)},revertStyles:function(){t.each(H.array(arguments),function(e,i){i=t(i);i.removeAttr("style");i.attr("style","");if(i.data("styles")){i.attr("style",i.data("styles")).data("styles",null)}})},moveOut:function(t){H.forceStyles(t,{position:"absolute",left:-1e4})},moveIn:function(){H.revertStyles.apply(H,H.array(arguments))},hide:function(e,i,n){n=n||m;var a=t(e);e=a[0];if(!a.data("opacity")){a.data("opacity",a.css("opacity"))}var o={opacity:0};if(i){var r=y<9&&e?function(){H.removeAlpha(e);e.style.visibility="hidden";n.call(e)}:n;H.animate(e,o,{duration:i,complete:r,stop:true})}else{if(y<9&&e){H.removeAlpha(e);e.style.visibility="hidden"}else{a.css(o)}}},show:function(e,i,n){n=n||m;var a=t(e);e=a[0];var o=parseFloat(a.data("opacity"))||1,r={opacity:o};if(i){if(y<9){a.css("opacity",0);e.style.visibility="visible"}var s=y<9&&e?function(){if(r.opacity==1){H.removeAlpha(e)}n.call(e)}:n;H.animate(e,r,{duration:i,complete:s,stop:true})}else{if(y<9&&r.opacity==1&&e){H.removeAlpha(e);e.style.visibility="visible"}else{a.css(r)}}},wait:function(n){i._waiters=i._waiters||[];n=t.extend({until:v,success:m,error:function(){i.raise("Could not complete wait function.")},timeout:3e3},n);var a=H.timestamp(),o,r,s,l=function(){r=H.timestamp();o=r-a;H.removeFromArray(i._waiters,s);if(n.until(o)){n.success();return false}if(typeof n.timeout=="number"&&r>=a+n.timeout){n.error();return false}i._waiters.push(s=e.setTimeout(l,10))};i._waiters.push(s=e.setTimeout(l,10))},toggleQuality:function(t,e){if(y!==7&&y!==8||!t||t.nodeName.toUpperCase()!="IMG"){return}if(typeof e==="undefined"){e=t.style.msInterpolationMode==="nearest-neighbor"}t.style.msInterpolationMode=e?"bicubic":"nearest-neighbor"},insertStyleTag:function(e,i){if(i&&t("#"+i).length){return}var n=a.createElement("style");if(i){n.id=i}_().head.appendChild(n);if(n.styleSheet){n.styleSheet.cssText=e}else{var o=a.createTextNode(e);n.appendChild(o)}},loadScript:function(e,i){var n=false,a=t("<scr"+"ipt>").attr({src:e,async:true}).get(0);a.onload=a.onreadystatechange=function(){if(!n&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){n=true;a.onload=a.onreadystatechange=null;if(typeof i==="function"){i.call(this,this)}}};_().head.appendChild(a)},parseValue:function(t){if(typeof t==="number"){return t}else if(typeof t==="string"){var e=t.match(/\-?\d|\./g);return e&&e.constructor===Array?e.join("")*1:0}else{return 0}},timestamp:function(){return(new Date).getTime()},loadCSS:function(e,o,r){var s,l;t("link[rel=stylesheet]").each(function(){if(new RegExp(e).test(this.href)){s=this;return false}});if(typeof o==="function"){r=o;o=n}r=r||m;if(s){r.call(s,s);return s}l=a.styleSheets.length;if(t("#"+o).length){t("#"+o).attr("href",e);l--}else{s=t("<link>").attr({rel:"stylesheet",href:e,id:o}).get(0);var c=t('link[rel="stylesheet"], style');if(c.length){c.get(0).parentNode.insertBefore(s,c[0])}else{_().head.appendChild(s)}if(y&&l>=31){i.raise("You have reached the browser stylesheet limit (31)",true);return}}if(typeof r==="function"){var h=t("<s>").attr("id","galleria-loader").hide().appendTo(_().body);H.wait({until:function(){return h.height()==1},success:function(){h.remove();r.call(s,s)},error:function(){h.remove();i.raise("Theme CSS could not load after 20 sec. "+(i.QUIRK?"Your browser is in Quirks Mode, please add a correct doctype.":"Please download the latest theme at http://galleria.io/customer/."),true)},timeout:5e3})}return s}}}(),O=function(e){var i=".galleria-videoicon{width:60px;height:60px;position:absolute;top:50%;left:50%;z-index:1;"+"margin:-30px 0 0 -30px;cursor:pointer;background:#000;background:rgba(0,0,0,.8);border-radius:3px;-webkit-transition:all 150ms}"+".galleria-videoicon i{width:0px;height:0px;border-style:solid;border-width:10px 0 10px 16px;display:block;"+"border-color:transparent transparent transparent #ffffff;margin:20px 0 0 22px}.galleria-image:hover .galleria-videoicon{background:#000}";H.insertStyleTag(i,"galleria-videoicon");return t(H.create("galleria-videoicon")).html("<i></i>").appendTo(e).click(function(){t(this).siblings("img").mouseup()})},M=function(){var e=function(e,i,n,a){var o=this.getOptions("easing"),r=this.getStageWidth(),s={left:r*(e.rewind?-1:1)},l={left:0};if(n){s.opacity=0;l.opacity=1}else{s.opacity=1}t(e.next).css(s);H.animate(e.next,l,{duration:e.speed,complete:function(t){return function(){i();t.css({left:0})}}(t(e.next).add(e.prev)),queue:false,easing:o});if(a){e.rewind=!e.rewind}if(e.prev){s={left:0};l={left:r*(e.rewind?1:-1)};if(n){s.opacity=1;l.opacity=0}t(e.prev).css(s);H.animate(e.prev,l,{duration:e.speed,queue:false,easing:o,complete:function(){t(this).css("opacity",0)}})}};return{active:false,init:function(t,e,i){if(M.effects.hasOwnProperty(t)){M.effects[t].call(this,e,i)}},effects:{fade:function(e,i){t(e.next).css({opacity:0,left:0});H.animate(e.next,{opacity:1},{duration:e.speed,complete:i});if(e.prev){t(e.prev).css("opacity",1).show();H.animate(e.prev,{opacity:0},{duration:e.speed})}},flash:function(e,i){t(e.next).css({opacity:0,left:0});if(e.prev){H.animate(e.prev,{opacity:0},{duration:e.speed/2,complete:function(){H.animate(e.next,{opacity:1},{duration:e.speed,complete:i})}})}else{H.animate(e.next,{opacity:1},{duration:e.speed,complete:i})}},pulse:function(e,i){if(e.prev){t(e.prev).hide()}t(e.next).css({opacity:0,left:0}).show();H.animate(e.next,{opacity:1},{duration:e.speed,complete:i})},slide:function(t,i){e.apply(this,H.array(arguments))},fadeslide:function(t,i){e.apply(this,H.array(arguments).concat([true]))},doorslide:function(t,i){e.apply(this,H.array(arguments).concat([false,true]))}}}}();A.listen();t.event.special["click:fast"]={propagate:true,add:function(i){var n=function(t){if(t.touches&&t.touches.length){var e=t.touches[0];return{x:e.pageX,y:e.pageY}}};var a={touched:false,touchdown:false,coords:{x:0,y:0},evObj:{}};t(this).data({clickstate:a,timer:0}).on("touchstart.fast",function(i){e.clearTimeout(t(this).data("timer"));t(this).data("clickstate",{touched:true,touchdown:true,coords:n(i.originalEvent),evObj:i})}).on("touchmove.fast",function(e){var i=n(e.originalEvent),a=t(this).data("clickstate"),o=Math.max(Math.abs(a.coords.x-i.x),Math.abs(a.coords.y-i.y));if(o>6){t(this).data("clickstate",t.extend(a,{touchdown:false}))}}).on("touchend.fast",function(n){var o=t(this),r=o.data("clickstate");if(r.touchdown){i.handler.call(this,n)}o.data("timer",e.setTimeout(function(){o.data("clickstate",a)},400))}).on("click.fast",function(e){var n=t(this).data("clickstate");if(n.touched){return false}t(this).data("clickstate",a);i.handler.call(this,e)})},remove:function(){t(this).off("touchstart.fast touchmove.fast touchend.fast click.fast")}};r.on("orientationchange",function(){t(this).resize()});i=function(){var s=this;this._options={};this._playing=false;this._playtime=5e3;this._active=null;this._queue={length:0};this._data=[];this._dom={};this._thumbnails=[];this._layers=[];this._initialized=false;this._firstrun=false;this._stageWidth=0;this._stageHeight=0;this._target=n;this._binds=[];this._id=parseInt(g.random()*1e4,10);var l="container stage images image-nav image-nav-left image-nav-right "+"info info-text info-title info-description "+"thumbnails thumbnails-list thumbnails-container thumb-nav-left thumb-nav-right "+"loader counter tooltip",c="current total";t.each(l.split(" "),function(t,e){s._dom[e]=H.create("galleria-"+e)});t.each(c.split(" "),function(t,e){s._dom[e]=H.create("galleria-"+e,"span")});var h=this._keyboard={keys:{UP:38,DOWN:40,LEFT:37,RIGHT:39,RETURN:13,ESCAPE:27,BACKSPACE:8,SPACE:32},map:{},bound:false,press:function(t){var e=t.keyCode||t.which;if(e in h.map&&typeof h.map[e]==="function"){h.map[e].call(s,t)}},attach:function(t){var e,i;for(e in t){if(t.hasOwnProperty(e)){i=e.toUpperCase();if(i in h.keys){h.map[h.keys[i]]=t[e]}else{h.map[i]=t[e]}}}if(!h.bound){h.bound=true;o.on("keydown",h.press)}},detach:function(){h.bound=false;h.map={};o.off("keydown",h.press)}};var u=this._controls={0:n,1:n,active:0,swap:function(){u.active=u.active?0:1},getActive:function(){return s._options.swipe?u.slides[s._active]:u[u.active]},getNext:function(){return s._options.swipe?u.slides[s.getNext(s._active)]:u[1-u.active]},slides:[],frames:[],layers:[]};var d=this._carousel={next:s.$("thumb-nav-right"),prev:s.$("thumb-nav-left"),width:0,current:0,max:0,hooks:[],update:function(){var e=0,i=0,n=[0];t.each(s._thumbnails,function(a,o){if(o.ready){e+=o.outerWidth||t(o.container).outerWidth(true);var r=t(o.container).width();e+=r-g.floor(r);n[a+1]=e;i=g.max(i,o.outerHeight||t(o.container).outerHeight(true))}});s.$("thumbnails").css({width:e,height:i});d.max=e;d.hooks=n;d.width=s.$("thumbnails-list").width();d.setClasses();s.$("thumbnails-container").toggleClass("galleria-carousel",e>d.width);d.width=s.$("thumbnails-list").width()},bindControls:function(){var t;d.next.on("click:fast",function(e){e.preventDefault();if(s._options.carouselSteps==="auto"){for(t=d.current;t<d.hooks.length;t++){if(d.hooks[t]-d.hooks[d.current]>d.width){d.set(t-2);break}}}else{d.set(d.current+s._options.carouselSteps)}});d.prev.on("click:fast",function(e){e.preventDefault();if(s._options.carouselSteps==="auto"){for(t=d.current;t>=0;t--){if(d.hooks[d.current]-d.hooks[t]>d.width){d.set(t+2);break}else if(t===0){d.set(0);break}}}else{d.set(d.current-s._options.carouselSteps)}})},set:function(t){t=g.max(t,0);while(d.hooks[t-1]+d.width>=d.max&&t>=0){t--}d.current=t;d.animate()},getLast:function(t){return(t||d.current)-1},follow:function(t){if(t===0||t===d.hooks.length-2){d.set(t);return}var e=d.current;while(d.hooks[e]-d.hooks[d.current]<d.width&&e<=d.hooks.length){e++}if(t-1<d.current){d.set(t-1)}else if(t+2>e){d.set(t-e+d.current+2)}},setClasses:function(){d.prev.toggleClass("disabled",!d.current);d.next.toggleClass("disabled",d.hooks[d.current]+d.width>=d.max)},animate:function(e){d.setClasses();var i=d.hooks[d.current]*-1;if(isNaN(i)){return}s.$("thumbnails").css("left",function(){return t(this).css("left")});H.animate(s.get("thumbnails"),{left:i},{duration:s._options.carouselSpeed,easing:s._options.easing,queue:false})}};var p=this._tooltip={initialized:false,open:false,timer:"tooltip"+s._id,swapTimer:"swap"+s._id,init:function(){p.initialized=true;var t=".galleria-tooltip{padding:3px 8px;max-width:50%;background:#ffe;color:#000;z-index:3;position:absolute;font-size:11px;line-height:1.3;"+"opacity:0;box-shadow:0 0 2px rgba(0,0,0,.4);-moz-box-shadow:0 0 2px rgba(0,0,0,.4);-webkit-box-shadow:0 0 2px rgba(0,0,0,.4);}";H.insertStyleTag(t,"galleria-tooltip");s.$("tooltip").css({opacity:.8,visibility:"visible",display:"none"})},move:function(t){var e=s.getMousePosition(t).x,i=s.getMousePosition(t).y,n=s.$("tooltip"),a=e,o=i,r=n.outerHeight(true)+1,l=n.outerWidth(true),c=r+15;var h=s.$("container").width()-l-2,u=s.$("container").height()-r-2;if(!isNaN(a)&&!isNaN(o)){a+=10;o-=r+8;a=g.max(0,g.min(h,a));o=g.max(0,g.min(u,o));if(i<c){o=c}n.css({left:a,top:o})}},bind:function(e,n){if(i.TOUCH){return}if(!p.initialized){p.init()}var a=function(){s.$("container").off("mousemove",p.move);s.clearTimer(p.timer);s.$("tooltip").stop().animate({opacity:0},200,function(){s.$("tooltip").hide();s.addTimer(p.swapTimer,function(){p.open=false},1e3)})};var o=function(e,i){p.define(e,i);t(e).hover(function(){s.clearTimer(p.swapTimer);s.$("container").off("mousemove",p.move).on("mousemove",p.move).trigger("mousemove");p.show(e);s.addTimer(p.timer,function(){s.$("tooltip").stop().show().animate({opacity:1});p.open=true},p.open?0:500)},a).click(a)};if(typeof n==="string"){o(e in s._dom?s.get(e):e,n)}else{t.each(e,function(t,e){o(s.get(t),e)})}},show:function(i){i=t(i in s._dom?s.get(i):i);var n=i.data("tt"),a=function(t){e.setTimeout(function(t){return function(){p.move(t)}}(t),10);i.off("mouseup",a)};n=typeof n==="function"?n():n;if(!n){return}s.$("tooltip").html(n.replace(/\s/,"&#160;"));i.on("mouseup",a)},define:function(e,i){if(typeof i!=="function"){var n=i;i=function(){return n}}e=t(e in s._dom?s.get(e):e).data("tt",i);p.show(e)}};var m=this._fullscreen={scrolled:0,crop:n,active:false,prev:t(),beforeEnter:function(t){t()},beforeExit:function(t){t()},keymap:s._keyboard.map,parseCallback:function(e,i){return M.active?function(){if(typeof e=="function"){e.call(s)}var n=s._controls.getActive(),a=s._controls.getNext();s._scaleImage(a);s._scaleImage(n);if(i&&s._options.trueFullscreen){t(n.container).add(a.container).trigger("transitionend")}}:e},enter:function(t){m.beforeEnter(function(){t=m.parseCallback(t,true);if(s._options.trueFullscreen&&A.support){m.active=true;H.forceStyles(s.get("container"),{width:"100%",height:"100%"});s.rescale();if(i.MAC){if(!(i.SAFARI&&/version\/[1-5]/.test(f))){s.$("container").css("opacity",0).addClass("fullscreen");e.setTimeout(function(){m.scale();s.$("container").css("opacity",1)},50)}else{s.$("stage").css("opacity",0);e.setTimeout(function(){m.scale();s.$("stage").css("opacity",1)},4)}}else{s.$("container").addClass("fullscreen")}r.resize(m.scale);A.enter(s,t,s.get("container"))}else{m.scrolled=r.scrollTop();if(!i.TOUCH){e.scrollTo(0,0)}m._enter(t)}})},_enter:function(o){m.active=true;if(b){m.iframe=function(){var n,o=a.referrer,r=a.createElement("a"),s=e.location;r.href=o;if(r.protocol!=s.protocol||r.hostname!=s.hostname||r.port!=s.port){i.raise("Parent fullscreen not available. Iframe protocol, domains and ports must match.");return false}m.pd=e.parent.document;t(m.pd).find("iframe").each(function(){var t=this.contentDocument||this.contentWindow.document;if(t===a){n=this;return false}});return n}()}H.hide(s.getActiveImage());if(b&&m.iframe){m.iframe.scrolled=t(e.parent).scrollTop();e.parent.scrollTo(0,0)}var l=s.getData(),c=s._options,h=!s._options.trueFullscreen||!A.support,u={height:"100%",overflow:"hidden",margin:0,padding:0};if(h){s.$("container").addClass("fullscreen");m.prev=s.$("container").prev();if(!m.prev.length){m.parent=s.$("container").parent()}s.$("container").appendTo("body");H.forceStyles(s.get("container"),{position:i.TOUCH?"absolute":"fixed",top:0,left:0,width:"100%",height:"100%",zIndex:1e4});H.forceStyles(_().html,u);H.forceStyles(_().body,u)}if(b&&m.iframe){H.forceStyles(m.pd.documentElement,u);H.forceStyles(m.pd.body,u);H.forceStyles(m.iframe,t.extend(u,{width:"100%",height:"100%",top:0,left:0,position:"fixed",zIndex:1e4,border:"none"}))}m.keymap=t.extend({},s._keyboard.map);s.attachKeyboard({escape:s.exitFullscreen,right:s.next,left:s.prev});m.crop=c.imageCrop;if(c.fullscreenCrop!=n){c.imageCrop=c.fullscreenCrop}if(l&&l.big&&l.image!==l.big){var f=new i.Picture,d=f.isCached(l.big),p=s.getIndex(),g=s._thumbnails[p];s.trigger({type:i.LOADSTART,cached:d,rewind:false,index:p,imageTarget:s.getActiveImage(),thumbTarget:g,galleriaData:l});f.load(l.big,function(e){s._scaleImage(e,{complete:function(e){s.trigger({type:i.LOADFINISH,cached:d,index:p,rewind:false,imageTarget:e.image,thumbTarget:g});var n=s._controls.getActive().image;if(n){t(n).width(e.image.width).height(e.image.height).attr("style",t(e.image).attr("style")).attr("src",e.image.src)}}})});var v=s.getNext(p),y=new i.Picture,w=s.getData(v);y.preload(s.isFullscreen()&&w.big?w.big:w.image)}s.rescale(function(){s.addTimer(false,function(){if(h){H.show(s.getActiveImage())}if(typeof o==="function"){o.call(s)}s.rescale()},100);s.trigger(i.FULLSCREEN_ENTER)});if(!h){H.show(s.getActiveImage())}else{r.resize(m.scale)}},scale:function(){s.rescale()},exit:function(t){m.beforeExit(function(){t=m.parseCallback(t);if(s._options.trueFullscreen&&A.support){A.exit(t)}else{m._exit(t)}})},_exit:function(t){m.active=false;var n=!s._options.trueFullscreen||!A.support,a=s.$("container").removeClass("fullscreen");if(m.parent){m.parent.prepend(a)}else{a.insertAfter(m.prev)}if(n){H.hide(s.getActiveImage());H.revertStyles(s.get("container"),_().html,_().body);if(!i.TOUCH){e.scrollTo(0,m.scrolled)}var o=s._controls.frames[s._controls.active];if(o&&o.image){o.image.src=o.image.src}}if(b&&m.iframe){H.revertStyles(m.pd.documentElement,m.pd.body,m.iframe);if(m.iframe.scrolled){e.parent.scrollTo(0,m.iframe.scrolled)}}s.detachKeyboard();s.attachKeyboard(m.keymap);s._options.imageCrop=m.crop;var l=s.getData().big,c=s._controls.getActive().image;if(!s.getData().iframe&&c&&l&&l==c.src){e.setTimeout(function(t){return function(){c.src=t}}(s.getData().image),1)}s.rescale(function(){s.addTimer(false,function(){if(n){H.show(s.getActiveImage())}if(typeof t==="function"){t.call(s)}r.trigger("resize")},50);s.trigger(i.FULLSCREEN_EXIT)});r.off("resize",m.scale)}};var v=this._idle={trunk:[],bound:false,active:false,add:function(e,n,a,o){if(!e||i.TOUCH){return}if(!v.bound){v.addEvent()}e=t(e);if(typeof a=="boolean"){o=a;a={}}a=a||{};var r={},s;for(s in n){if(n.hasOwnProperty(s)){r[s]=e.css(s)}}e.data("idle",{from:t.extend(r,a),to:n,complete:true,busy:false});if(!o){v.addTimer()}else{e.css(n)}v.trunk.push(e)},remove:function(e){e=t(e);t.each(v.trunk,function(t,i){if(i&&i.length&&!i.not(e).length){e.css(e.data("idle").from);v.trunk.splice(t,1)}});if(!v.trunk.length){v.removeEvent();s.clearTimer(v.timer)}},addEvent:function(){v.bound=true;s.$("container").on("mousemove click",v.showAll);if(s._options.idleMode=="hover"){s.$("container").on("mouseleave",v.hide)}},removeEvent:function(){v.bound=false;s.$("container").on("mousemove click",v.showAll);if(s._options.idleMode=="hover"){s.$("container").off("mouseleave",v.hide)}},addTimer:function(){if(s._options.idleMode=="hover"){return}s.addTimer("idle",function(){v.hide()},s._options.idleTime)},hide:function(){if(!s._options.idleMode||s.getIndex()===false){return}s.trigger(i.IDLE_ENTER);var e=v.trunk.length;t.each(v.trunk,function(t,i){var n=i.data("idle");if(!n){return}i.data("idle").complete=false;H.animate(i,n.to,{duration:s._options.idleSpeed,complete:function(){if(t==e-1){v.active=false}}})})},showAll:function(){s.clearTimer("idle");t.each(v.trunk,function(t,e){v.show(e)})},show:function(e){var n=e.data("idle");if(!v.active||!n.busy&&!n.complete){n.busy=true;s.trigger(i.IDLE_EXIT);s.clearTimer("idle");H.animate(e,n.from,{duration:s._options.idleSpeed/2,complete:function(){v.active=true;t(e).data("idle").busy=false;t(e).data("idle").complete=true}})}v.addTimer()}};var w=this._lightbox={width:0,height:0,initialized:false,active:null,image:null,elems:{},keymap:false,init:function(){if(w.initialized){return}w.initialized=true;var e="overlay box content shadow title info close prevholder prev nextholder next counter image",n={},a=s._options,o="",r="position:absolute;",l="lightbox-",c={overlay:"position:fixed;display:none;opacity:"+a.overlayOpacity+";filter:alpha(opacity="+a.overlayOpacity*100+");top:0;left:0;width:100%;height:100%;background:"+a.overlayBackground+";z-index:99990",box:"position:fixed;display:none;width:400px;height:400px;top:50%;left:50%;margin-top:-200px;margin-left:-200px;z-index:99991",shadow:r+"background:#000;width:100%;height:100%;",content:r+"background-color:#fff;top:10px;left:10px;right:10px;bottom:10px;overflow:hidden",info:r+"bottom:10px;left:10px;right:10px;color:#444;font:11px/13px arial,sans-serif;height:13px",close:r+"top:10px;right:10px;height:20px;width:20px;background:#fff;text-align:center;cursor:pointer;color:#444;font:16px/22px arial,sans-serif;z-index:99999",image:r+"top:10px;left:10px;right:10px;bottom:30px;overflow:hidden;display:block;",prevholder:r+"width:50%;top:0;bottom:40px;cursor:pointer;",nextholder:r+"width:50%;top:0;bottom:40px;right:-1px;cursor:pointer;",prev:r+"top:50%;margin-top:-20px;height:40px;width:30px;background:#fff;left:20px;display:none;text-align:center;color:#000;font:bold 16px/36px arial,sans-serif",next:r+"top:50%;margin-top:-20px;height:40px;width:30px;background:#fff;right:20px;left:auto;display:none;font:bold 16px/36px arial,sans-serif;text-align:center;color:#000",title:"float:left",counter:"float:right;margin-left:8px;"},h=function(e){return e.hover(function(){t(this).css("color","#bbb")},function(){t(this).css("color","#444")})},u={};var f="";if(y>7){f=y<9?"background:#000;filter:alpha(opacity=0);":"background:rgba(0,0,0,0);"}else{f="z-index:99999"}c.nextholder+=f;c.prevholder+=f;t.each(c,function(t,e){o+=".galleria-"+l+t+"{"+e+"}"});o+=".galleria-"+l+"box.iframe .galleria-"+l+"prevholder,"+".galleria-"+l+"box.iframe .galleria-"+l+"nextholder{"+"width:100px;height:100px;top:50%;margin-top:-70px}";H.insertStyleTag(o,"galleria-lightbox");t.each(e.split(" "),function(t,e){s.addElement("lightbox-"+e);n[e]=w.elems[e]=s.get("lightbox-"+e)});w.image=new i.Picture;t.each({box:"shadow content close prevholder nextholder",info:"title counter",content:"info image",prevholder:"prev",nextholder:"next"},function(e,i){var n=[];t.each(i.split(" "),function(t,e){n.push(l+e)});u[l+e]=n});s.append(u);t(n.image).append(w.image.container);t(_().body).append(n.overlay,n.box);h(t(n.close).on("click:fast",w.hide).html("&#215;"));t.each(["Prev","Next"],function(e,a){var o=t(n[a.toLowerCase()]).html(/v/.test(a)?"&#8249;&#160;":"&#160;&#8250;"),r=t(n[a.toLowerCase()+"holder"]);r.on("click:fast",function(){w["show"+a]()});if(y<8||i.TOUCH){o.show();return}r.hover(function(){o.show()},function(t){o.stop().fadeOut(200)})});t(n.overlay).on("click:fast",w.hide);if(i.IPAD){s._options.lightboxTransitionSpeed=0}},rescale:function(e){var n=g.min(r.width()-40,w.width),a=g.min(r.height()-60,w.height),o=g.min(n/w.width,a/w.height),l=g.round(w.width*o)+40,c=g.round(w.height*o)+60,h={width:l,height:c,"margin-top":g.ceil(c/2)*-1,"margin-left":g.ceil(l/2)*-1};if(e){t(w.elems.box).css(h)}else{t(w.elems.box).animate(h,{duration:s._options.lightboxTransitionSpeed,easing:s._options.easing,complete:function(){var e=w.image,n=s._options.lightboxFadeSpeed;s.trigger({type:i.LIGHTBOX_IMAGE,imageTarget:e.image});t(e.container).show();t(e.image).animate({opacity:1},n);H.show(w.elems.info,n)}})}},hide:function(){w.image.image=null;r.off("resize",w.rescale);t(w.elems.box).hide().find("iframe").remove();H.hide(w.elems.info);s.detachKeyboard();s.attachKeyboard(w.keymap);w.keymap=false;H.hide(w.elems.overlay,200,function(){t(this).hide().css("opacity",s._options.overlayOpacity);s.trigger(i.LIGHTBOX_CLOSE)})},showNext:function(){w.show(s.getNext(w.active))},showPrev:function(){w.show(s.getPrev(w.active))},show:function(n){w.active=n=typeof n==="number"?n:s.getIndex()||0;if(!w.initialized){w.init()}s.trigger(i.LIGHTBOX_OPEN);if(!w.keymap){w.keymap=t.extend({},s._keyboard.map);s.attachKeyboard({escape:w.hide,right:w.showNext,left:w.showPrev})}r.off("resize",w.rescale);var a=s.getData(n),o=s.getDataLength(),l=s.getNext(n),c,h,u;H.hide(w.elems.info);try{for(u=s._options.preload;u>0;u--){h=new i.Picture;c=s.getData(l);h.preload(c.big?c.big:c.image);l=s.getNext(l)}}catch(f){}w.image.isIframe=a.iframe&&!a.image;t(w.elems.box).toggleClass("iframe",w.image.isIframe);t(w.image.container).find(".galleria-videoicon").remove();w.image.load(a.big||a.image||a.iframe,function(i){if(i.isIframe){var l=t(e).width(),c=t(e).height();if(i.video&&s._options.maxVideoSize){var h=g.min(s._options.maxVideoSize/l,s._options.maxVideoSize/c);if(h<1){l*=h;c*=h}}w.width=l;w.height=c}else{w.width=i.original.width;w.height=i.original.height}t(i.image).css({width:i.isIframe?"100%":"100.1%",height:i.isIframe?"100%":"100.1%",top:0,bottom:0,zIndex:99998,opacity:0,visibility:"visible"}).parent().height("100%");w.elems.title.innerHTML=a.title||"";w.elems.counter.innerHTML=n+1+" / "+o;r.resize(w.rescale);w.rescale();if(a.image&&a.iframe){t(w.elems.box).addClass("iframe");if(a.video){var u=O(i.container).hide();e.setTimeout(function(){u.fadeIn(200)},200)}t(i.image).css("cursor","pointer").mouseup(function(e,i){return function(n){t(w.image.container).find(".galleria-videoicon").remove();n.preventDefault();i.isIframe=true;i.load(e.iframe+(e.video?"&autoplay=1":""),{width:"100%",height:y<8?t(w.image.container).height():"100%"})}}(a,i))}});t(w.elems.overlay).show().css("visibility","visible");t(w.elems.box).show()}};var x=this._timer={trunk:{},add:function(t,i,n,a){t=t||(new Date).getTime();a=a||false;this.clear(t);if(a){var o=i;i=function(){o();x.add(t,i,n)}}this.trunk[t]=e.setTimeout(i,n)},clear:function(t){var i=function(t){e.clearTimeout(this.trunk[t]);delete this.trunk[t]},n;if(!!t&&t in this.trunk){i.call(this,t)}else if(typeof t==="undefined"){for(n in this.trunk){if(this.trunk.hasOwnProperty(n)){i.call(this,n)}}}}};return this};i.prototype={constructor:i,init:function(e,a){a=T(a);this._original={target:e,options:a,data:null};this._target=this._dom.target=e.nodeName?e:t(e).get(0);this._original.html=this._target.innerHTML;D.push(this);if(!this._target){i.raise("Target not found",true);return}this._options={autoplay:false,carousel:true,carouselFollow:true,carouselSpeed:400,carouselSteps:"auto",clicknext:false,dailymotion:{foreground:"%23EEEEEE",highlight:"%235BCEC5",background:"%23222222",logo:0,hideInfos:1},dataConfig:function(t){return{}},dataSelector:"img",dataSort:false,dataSource:this._target,debug:n,dummy:n,easing:"galleria",extend:function(t){},fullscreenCrop:n,fullscreenDoubleTap:true,fullscreenTransition:n,height:0,idleMode:true,idleTime:3e3,idleSpeed:200,imageCrop:false,imageMargin:0,imagePan:false,imagePanSmoothness:12,imagePosition:"50%",imageTimeout:n,initialTransition:n,keepSource:false,layerFollow:true,lightbox:false,lightboxFadeSpeed:200,lightboxTransitionSpeed:200,linkSourceImages:true,maxScaleRatio:n,maxVideoSize:n,minScaleRatio:n,overlayOpacity:.85,overlayBackground:"#0b0b0b",pauseOnInteraction:true,popupLinks:false,preload:2,queue:true,responsive:true,show:0,showInfo:true,showCounter:true,showImagenav:true,swipe:"auto",theme:null,thumbCrop:true,thumbEventType:"click:fast",thumbMargin:0,thumbQuality:"auto",thumbDisplayOrder:true,thumbPosition:"50%",thumbnails:true,touchTransition:n,transition:"fade",transitionInitial:n,transitionSpeed:400,trueFullscreen:true,useCanvas:false,variation:"",videoPoster:true,vimeo:{title:0,byline:0,portrait:0,color:"aaaaaa"},wait:5e3,width:"auto",youtube:{modestbranding:1,autohide:1,color:"white",hd:1,rel:0,showinfo:0}};
this._options.initialTransition=this._options.initialTransition||this._options.transitionInitial;if(a){if(a.debug===false){c=false}if(typeof a.imageTimeout==="number"){h=a.imageTimeout}if(typeof a.dummy==="string"){u=a.dummy}if(typeof a.theme=="string"){this._options.theme=a.theme}}t(this._target).children().hide();if(i.QUIRK){i.raise("Your page is in Quirks mode, Galleria may not render correctly. Please validate your HTML and add a correct doctype.")}if(z.length){if(this._options.theme){for(var o=0;o<z.length;o++){if(this._options.theme===z[o].name){this.theme=z[o];break}}}else{this.theme=z[0]}}if(typeof this.theme=="object"){this._init()}else{P.push(this)}return this},_init:function(){var o=this,s=this._options;if(this._initialized){i.raise("Init failed: Gallery instance already initialized.");return this}this._initialized=true;if(!this.theme){i.raise("Init failed: No theme found.",true);return this}t.extend(true,s,this.theme.defaults,this._original.options,i.configure.options);s.swipe=function(t){if(t=="enforced"){return true}if(t===false||t=="disabled"){return false}return!!i.TOUCH}(s.swipe);if(s.swipe){s.clicknext=false;s.imagePan=false}!function(t){if(!("getContext"in t)){t=null;return}L=L||{elem:t,context:t.getContext("2d"),cache:{},length:0}}(a.createElement("canvas"));this.bind(i.DATA,function(){if(e.screen&&e.screen.width&&Array.prototype.forEach){this._data.forEach(function(t){var i="devicePixelRatio"in e?e.devicePixelRatio:1,n=g.max(e.screen.width,e.screen.height);if(n*i<1024){t.big=t.image}})}this._original.data=this._data;this.get("total").innerHTML=this.getDataLength();var t=this.$("container");if(o._options.height<2){o._userRatio=o._ratio=o._options.height}var n={width:0,height:0};var a=function(){return o.$("stage").height()};H.wait({until:function(){n=o._getWH();t.width(n.width).height(n.height);return a()&&n.width&&n.height>50},success:function(){o._width=n.width;o._height=n.height;o._ratio=o._ratio||n.height/n.width;if(i.WEBKIT){e.setTimeout(function(){o._run()},1)}else{o._run()}},error:function(){if(a()){i.raise("Could not extract sufficient width/height of the gallery container. Traced measures: width:"+n.width+"px, height: "+n.height+"px.",true)}else{i.raise("Could not extract a stage height from the CSS. Traced height: "+a()+"px.",true)}},timeout:typeof this._options.wait=="number"?this._options.wait:false})});this.append({"info-text":["info-title","info-description"],info:["info-text"],"image-nav":["image-nav-right","image-nav-left"],stage:["images","loader","counter","image-nav"],"thumbnails-list":["thumbnails"],"thumbnails-container":["thumb-nav-left","thumbnails-list","thumb-nav-right"],container:["stage","thumbnails-container","info","tooltip"]});H.hide(this.$("counter").append(this.get("current"),a.createTextNode(" / "),this.get("total")));this.setCounter("&#8211;");H.hide(o.get("tooltip"));this.$("container").addClass([i.TOUCH?"touch":"notouch",this._options.variation,"galleria-theme-"+this.theme.name].join(" "));if(!this._options.swipe){t.each(new Array(2),function(e){var n=new i.Picture;t(n.container).css({position:"absolute",top:0,left:0}).prepend(o._layers[e]=t(H.create("galleria-layer")).css({position:"absolute",top:0,left:0,right:0,bottom:0,zIndex:2})[0]);o.$("images").append(n.container);o._controls[e]=n;var a=new i.Picture;a.isIframe=true;t(a.container).attr("class","galleria-frame").css({position:"absolute",top:0,left:0,zIndex:4,background:"#000",display:"none"}).appendTo(n.container);o._controls.frames[e]=a})}this.$("images").css({position:"relative",top:0,left:0,width:"100%",height:"100%"});if(s.swipe){this.$("images").css({position:"absolute",top:0,left:0,width:0,height:"100%"});this.finger=new i.Finger(this.get("stage"),{onchange:function(t){o.pause().show(t)},oncomplete:function(e){var i=g.max(0,g.min(parseInt(e,10),o.getDataLength()-1)),n=o.getData(i);t(o._thumbnails[i].container).addClass("active").siblings(".active").removeClass("active");if(!n){return}o.$("images").find(".galleria-frame").css("opacity",0).hide().find("iframe").remove();if(o._options.carousel&&o._options.carouselFollow){o._carousel.follow(i)}}});this.bind(i.RESCALE,function(){this.finger.setup()});this.$("stage").on("click",function(i){var a=o.getData();if(!a){return}if(a.iframe){if(o.isPlaying()){o.pause()}var r=o._controls.frames[o._active],s=o._stageWidth,l=o._stageHeight;if(t(r.container).find("iframe").length){return}t(r.container).css({width:s,height:l,opacity:0}).show().animate({opacity:1},200);e.setTimeout(function(){r.load(a.iframe+(a.video?"&autoplay=1":""),{width:s,height:l},function(t){o.$("container").addClass("videoplay");t.scale({width:o._stageWidth,height:o._stageHeight,iframelimit:a.video?o._options.maxVideoSize:n})})},100);return}if(a.link){if(o._options.popupLinks){var c=e.open(a.link,"_blank")}else{e.location.href=a.link}return}});this.bind(i.IMAGE,function(e){o.setCounter(e.index);o.setInfo(e.index);var i=this.getNext(),n=this.getPrev();var a=[n,i];a.push(this.getNext(i),this.getPrev(n),o._controls.slides.length-1);var r=[];t.each(a,function(e,i){if(t.inArray(i,r)==-1){r.push(i)}});t.each(r,function(e,i){var n=o.getData(i),a=o._controls.slides[i],r=o.isFullscreen()&&n.big?n.big:n.image||n.iframe;if(n.iframe&&!n.image){a.isIframe=true}if(!a.ready){o._controls.slides[i].load(r,function(e){if(!e.isIframe){t(e.image).css("visibility","hidden")}o._scaleImage(e,{complete:function(e){if(!e.isIframe){t(e.image).css({opacity:0,visibility:"visible"}).animate({opacity:1},200)}}})})}})})}this.$("thumbnails, thumbnails-list").css({overflow:"hidden",position:"relative"});this.$("image-nav-right, image-nav-left").on("click:fast",function(t){if(s.pauseOnInteraction){o.pause()}var e=/right/.test(this.className)?"next":"prev";o[e]()}).on("click",function(t){t.preventDefault();if(s.clicknext||s.swipe){t.stopPropagation()}});t.each(["info","counter","image-nav"],function(t,e){if(s["show"+e.substr(0,1).toUpperCase()+e.substr(1).replace(/-/,"")]===false){H.moveOut(o.get(e.toLowerCase()))}});this.load();if(!s.keepSource&&!y){this._target.innerHTML=""}if(this.get("errors")){this.appendChild("target","errors")}this.appendChild("target","container");if(s.carousel){var l=0,c=s.show;this.bind(i.THUMBNAIL,function(){this.updateCarousel();if(++l==this.getDataLength()&&typeof c=="number"&&c>0){this._carousel.follow(c)}})}if(s.responsive){r.on("resize",function(){if(!o.isFullscreen()){o.resize()}})}if(s.fullscreenDoubleTap){this.$("stage").on("touchstart",function(){var t,e,i,n,a,r,s=function(t){return t.originalEvent.touches?t.originalEvent.touches[0]:t};o.$("stage").on("touchmove",function(){t=0});return function(l){if(/(-left|-right)/.test(l.target.className)){return}r=H.timestamp();e=s(l).pageX;i=s(l).pageY;if(l.originalEvent.touches.length<2&&r-t<300&&e-n<20&&i-a<20){o.toggleFullscreen();l.preventDefault();return}t=r;n=e;a=i}}())}t.each(i.on.binds,function(e,i){if(t.inArray(i.hash,o._binds)==-1){o.bind(i.type,i.callback)}});return this},addTimer:function(){this._timer.add.apply(this._timer,H.array(arguments));return this},clearTimer:function(){this._timer.clear.apply(this._timer,H.array(arguments));return this},_getWH:function(){var e=this.$("container"),i=this.$("target"),n=this,a={},o;t.each(["width","height"],function(t,r){if(n._options[r]&&typeof n._options[r]==="number"){a[r]=n._options[r]}else{o=[H.parseValue(e.css(r)),H.parseValue(i.css(r)),e[r](),i[r]()];if(!n["_"+r]){o.splice(o.length,H.parseValue(e.css("min-"+r)),H.parseValue(i.css("min-"+r)))}a[r]=g.max.apply(g,o)}});if(n._userRatio){a.height=a.width*n._userRatio}return a},_createThumbnails:function(n){this.get("total").innerHTML=this.getDataLength();var o,r,s,l,c=this,h=this._options,u=n?this._data.length-n.length:0,f=u,d=[],p=0,g=y<8?"http://upload.wikimedia.org/wikipedia/commons/c/c0/Blank.gif":"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw%3D%3D",m=function(){var t=c.$("thumbnails").find(".active");if(!t.length){return false}return t.find("img").attr("src")}(),v=typeof h.thumbnails==="string"?h.thumbnails.toLowerCase():null,_=function(t){return a.defaultView&&a.defaultView.getComputedStyle?a.defaultView.getComputedStyle(r.container,null)[t]:l.css(t)},b=function(e,n,a){return function(){t(a).append(e);c.trigger({type:i.THUMBNAIL,thumbTarget:e,index:n,galleriaData:c.getData(n)})}},w=function(e){if(h.pauseOnInteraction){c.pause()}var i=t(e.currentTarget).data("index");if(c.getIndex()!==i){c.show(i)}e.preventDefault()},x=function(e,n){t(e.container).css("visibility","visible");c.trigger({type:i.THUMBNAIL,thumbTarget:e.image,index:e.data.order,galleriaData:c.getData(e.data.order)});if(typeof n=="function"){n.call(c,e)}},T=function(e,i){e.scale({width:e.data.width,height:e.data.height,crop:h.thumbCrop,margin:h.thumbMargin,canvas:h.useCanvas,position:h.thumbPosition,complete:function(e){var n=["left","top"],a=["Width","Height"],o,r,s=c.getData(e.index);t.each(a,function(i,a){o=a.toLowerCase();if(h.thumbCrop!==true||h.thumbCrop===o){r={};r[o]=e[o];t(e.container).css(r);r={};r[n[i]]=0;t(e.image).css(r)}e["outer"+a]=t(e.container)["outer"+a](true)});H.toggleQuality(e.image,h.thumbQuality===true||h.thumbQuality==="auto"&&e.original.width<e.width*3);if(h.thumbDisplayOrder&&!e.lazy){t.each(d,function(t,e){if(t===p&&e.ready&&!e.displayed){p++;e.displayed=true;x(e,i);return}})}else{x(e,i)}}})};if(!n){this._thumbnails=[];this.$("thumbnails").empty()}for(;this._data[u];u++){s=this._data[u];o=s.thumb||s.image;if((h.thumbnails===true||v=="lazy")&&(s.thumb||s.image)){r=new i.Picture(u);r.index=u;r.displayed=false;r.lazy=false;r.video=false;this.$("thumbnails").append(r.container);l=t(r.container);l.css("visibility","hidden");r.data={width:H.parseValue(_("width")),height:H.parseValue(_("height")),order:u,src:o};if(h.thumbCrop!==true){l.css({width:"auto",height:"auto"})}else{l.css({width:r.data.width,height:r.data.height})}if(v=="lazy"){l.addClass("lazy");r.lazy=true;r.load(g,{height:r.data.height,width:r.data.width})}else{r.load(o,T)}if(h.preload==="all"){r.preload(s.image)}}else if(s.iframe&&v!==null||v==="empty"||v==="numbers"){r={container:H.create("galleria-image"),image:H.create("img","span"),ready:true,data:{order:u}};if(v==="numbers"){t(r.image).text(u+1)}if(s.iframe){t(r.image).addClass("iframe")}this.$("thumbnails").append(r.container);e.setTimeout(b(r.image,u,r.container),50+u*20)}else{r={container:null,image:null}}t(r.container).add(h.keepSource&&h.linkSourceImages?s.original:null).data("index",u).on(h.thumbEventType,w).data("thumbload",T);if(m===o){t(r.container).addClass("active")}this._thumbnails.push(r)}d=this._thumbnails.slice(f);return this},lazyLoad:function(e,i){var n=e.constructor==Array?e:[e],a=this,o=0;t.each(n,function(e,r){if(r>a._thumbnails.length-1){return}var s=a._thumbnails[r],l=s.data,c=function(){if(++o==n.length&&typeof i=="function"){i.call(a)}},h=t(s.container).data("thumbload");if(s.video){h.call(a,s,c)}else{s.load(l.src,function(t){h.call(a,t,c)})}});return this},lazyLoadChunks:function(t,i){var n=this.getDataLength(),a=0,o=0,r=[],s=[],l=this;i=i||0;for(;a<n;a++){s.push(a);if(++o==t||a==n-1){r.push(s);o=0;s=[]}}var c=function(t){var n=r.shift();if(n){e.setTimeout(function(){l.lazyLoad(n,function(){c(true)})},i&&t?i:0)}};c(false);return this},_run:function(){var a=this;a._createThumbnails();H.wait({timeout:1e4,until:function(){if(i.OPERA){a.$("stage").css("display","inline-block")}a._stageWidth=a.$("stage").width();a._stageHeight=a.$("stage").height();return a._stageWidth&&a._stageHeight>50},success:function(){E.push(a);if(a._options.swipe){var o=a.$("images").width(a.getDataLength()*a._stageWidth);t.each(new Array(a.getDataLength()),function(e){var n=new i.Picture,r=a.getData(e);t(n.container).css({position:"absolute",top:0,left:a._stageWidth*e}).prepend(a._layers[e]=t(H.create("galleria-layer")).css({position:"absolute",top:0,left:0,right:0,bottom:0,zIndex:2})[0]).appendTo(o);if(r.video){O(n.container)}a._controls.slides.push(n);var s=new i.Picture;s.isIframe=true;t(s.container).attr("class","galleria-frame").css({position:"absolute",top:0,left:0,zIndex:4,background:"#000",display:"none"}).appendTo(n.container);a._controls.frames.push(s)});a.finger.setup()}H.show(a.get("counter"));if(a._options.carousel){a._carousel.bindControls()}if(a._options.autoplay){a.pause();if(typeof a._options.autoplay==="number"){a._playtime=a._options.autoplay}a._playing=true}if(a._firstrun){if(a._options.autoplay){a.trigger(i.PLAY)}if(typeof a._options.show==="number"){a.show(a._options.show)}return}a._firstrun=true;if(i.History){i.History.change(function(t){if(isNaN(t)){e.history.go(-1)}else{a.show(t,n,true)}})}a.trigger(i.READY);a.theme.init.call(a,a._options);t.each(i.ready.callbacks,function(t,e){if(typeof e=="function"){e.call(a,a._options)}});a._options.extend.call(a,a._options);if(/^[0-9]{1,4}$/.test(d)&&i.History){a.show(d,n,true)}else if(a._data[a._options.show]){a.show(a._options.show)}if(a._options.autoplay){a.trigger(i.PLAY)}},error:function(){i.raise("Stage width or height is too small to show the gallery. Traced measures: width:"+a._stageWidth+"px, height: "+a._stageHeight+"px.",true)}})},load:function(e,n,a){var o=this,r=this._options;this._data=[];this._thumbnails=[];this.$("thumbnails").empty();if(typeof n==="function"){a=n;n=null}e=e||r.dataSource;n=n||r.dataSelector;a=a||r.dataConfig;if(t.isPlainObject(e)){e=[e]}if(t.isArray(e)){if(this.validate(e)){this._data=e}else{i.raise("Load failed: JSON Array not valid.")}}else{n+=",.video,.iframe";t(e).find(n).each(function(e,i){i=t(i);var n={},r=i.parent(),s=r.attr("href"),l=r.attr("rel");if(s&&(i[0].nodeName=="IMG"||i.hasClass("video"))&&S(s)){n.video=s}else if(s&&i.hasClass("iframe")){n.iframe=s}else{n.image=n.big=s}if(l){n.big=l}t.each("big title description link layer image".split(" "),function(t,e){if(i.data(e)){n[e]=i.data(e).toString()}});if(!n.big){n.big=n.image}o._data.push(t.extend({title:i.attr("title")||"",thumb:i.attr("src"),image:i.attr("src"),big:i.attr("src"),description:i.attr("alt")||"",link:i.attr("longdesc"),original:i.get(0)},n,a(i)))})}if(typeof r.dataSort=="function"){s.sort.call(this._data,r.dataSort)}else if(r.dataSort=="random"){this._data.sort(function(){return g.round(g.random())-.5})}if(this.getDataLength()){this._parseData(function(){this.trigger(i.DATA)})}return this},_parseData:function(e){var i=this,a,o=false,r=function(){var n=true;t.each(i._data,function(t,e){if(e.loading){n=false;return false}});if(n&&!o){o=true;e.call(i)}};t.each(this._data,function(e,o){a=i._data[e];if("thumb"in o===false){a.thumb=o.image}if(!o.big){a.big=o.image}if("video"in o){var s=S(o.video);if(s){a.iframe=new I(s.provider,s.id).embed()+function(){if(typeof i._options[s.provider]=="object"){var e="?",n=[];t.each(i._options[s.provider],function(t,e){n.push(t+"="+e)});if(s.provider=="youtube"){n=["wmode=opaque"].concat(n)}return e+n.join("&")}return""}();if(!a.thumb||!a.image){t.each(["thumb","image"],function(t,e){if(e=="image"&&!i._options.videoPoster){a.image=n;return}var o=new I(s.provider,s.id);if(!a[e]){a.loading=true;o.getMedia(e,function(t,e){return function(i){t[e]=i;if(e=="image"&&!t.big){t.big=t.image}delete t.loading;r()}}(a,e))}})}}}});r();return this},destroy:function(){this.$("target").data("galleria",null);this.$("container").off("galleria");this.get("target").innerHTML=this._original.html;this.clearTimer();H.removeFromArray(D,this);H.removeFromArray(E,this);if(i._waiters.length){t.each(i._waiters,function(t,i){if(i)e.clearTimeout(i)})}return this},splice:function(){var t=this,i=H.array(arguments);e.setTimeout(function(){s.splice.apply(t._data,i);t._parseData(function(){t._createThumbnails()})},2);return t},push:function(){var t=this,i=H.array(arguments);if(i.length==1&&i[0].constructor==Array){i=i[0]}e.setTimeout(function(){s.push.apply(t._data,i);t._parseData(function(){t._createThumbnails(i)})},2);return t},_getActive:function(){return this._controls.getActive()},validate:function(t){return true},bind:function(t,e){t=k(t);this.$("container").on(t,this.proxy(e));return this},unbind:function(t){t=k(t);this.$("container").off(t);return this},trigger:function(e){e=typeof e==="object"?t.extend(e,{scope:this}):{type:k(e),scope:this};this.$("container").trigger(e);return this},addIdleState:function(t,e,i,n){this._idle.add.apply(this._idle,H.array(arguments));return this},removeIdleState:function(t){this._idle.remove.apply(this._idle,H.array(arguments));return this},enterIdleMode:function(){this._idle.hide();return this},exitIdleMode:function(){this._idle.showAll();return this},enterFullscreen:function(t){this._fullscreen.enter.apply(this,H.array(arguments));return this},exitFullscreen:function(t){this._fullscreen.exit.apply(this,H.array(arguments));return this},toggleFullscreen:function(t){this._fullscreen[this.isFullscreen()?"exit":"enter"].apply(this,H.array(arguments));return this},bindTooltip:function(t,e){this._tooltip.bind.apply(this._tooltip,H.array(arguments));return this},defineTooltip:function(t,e){this._tooltip.define.apply(this._tooltip,H.array(arguments));return this},refreshTooltip:function(t){this._tooltip.show.apply(this._tooltip,H.array(arguments));return this},openLightbox:function(){this._lightbox.show.apply(this._lightbox,H.array(arguments));return this},closeLightbox:function(){this._lightbox.hide.apply(this._lightbox,H.array(arguments));return this},hasVariation:function(e){return t.inArray(e,this._options.variation.split(/\s+/))>-1},getActiveImage:function(){var t=this._getActive();return t?t.image:n},getActiveThumb:function(){return this._thumbnails[this._active].image||n},getMousePosition:function(t){return{x:t.pageX-this.$("container").offset().left,y:t.pageY-this.$("container").offset().top}},addPan:function(e){if(this._options.imageCrop===false){return}e=t(e||this.getActiveImage());var i=this,n=e.width()/2,a=e.height()/2,o=parseInt(e.css("left"),10),r=parseInt(e.css("top"),10),s=o||0,l=r||0,c=0,h=0,u=false,f=H.timestamp(),d=0,p=0,m=function(t,i,n){if(t>0){p=g.round(g.max(t*-1,g.min(0,i)));if(d!==p){d=p;if(y===8){e.parent()["scroll"+n](p*-1)}else{var a={};a[n.toLowerCase()]=p;e.css(a)}}}},v=function(t){if(H.timestamp()-f<50){return}u=true;n=i.getMousePosition(t).x;a=i.getMousePosition(t).y},_=function(t){if(!u){return}c=e.width()-i._stageWidth;h=e.height()-i._stageHeight;o=n/i._stageWidth*c*-1;r=a/i._stageHeight*h*-1;s+=(o-s)/i._options.imagePanSmoothness;l+=(r-l)/i._options.imagePanSmoothness;m(h,l,"Top");m(c,s,"Left")};if(y===8){e.parent().scrollTop(l*-1).scrollLeft(s*-1);e.css({top:0,left:0})}this.$("stage").off("mousemove",v).on("mousemove",v);this.addTimer("pan"+i._id,_,50,true);return this},proxy:function(t,e){if(typeof t!=="function"){return m}e=e||this;return function(){return t.apply(e,H.array(arguments))}},getThemeName:function(){return this.theme.name},removePan:function(){this.$("stage").off("mousemove");this.clearTimer("pan"+this._id);return this},addElement:function(e){var i=this._dom;t.each(H.array(arguments),function(t,e){i[e]=H.create("galleria-"+e)});return this},attachKeyboard:function(t){this._keyboard.attach.apply(this._keyboard,H.array(arguments));return this},detachKeyboard:function(){this._keyboard.detach.apply(this._keyboard,H.array(arguments));return this},appendChild:function(t,e){this.$(t).append(this.get(e)||e);return this},prependChild:function(t,e){this.$(t).prepend(this.get(e)||e);return this},remove:function(t){this.$(H.array(arguments).join(",")).remove();return this},append:function(t){var e,i;for(e in t){if(t.hasOwnProperty(e)){if(t[e].constructor===Array){for(i=0;t[e][i];i++){this.appendChild(e,t[e][i])}}else{this.appendChild(e,t[e])}}}return this},_scaleImage:function(e,i){e=e||this._controls.getActive();if(!e){return}var n,a=function(e){t(e.container).children(":first").css({top:g.max(0,H.parseValue(e.image.style.top)),left:g.max(0,H.parseValue(e.image.style.left)),width:H.parseValue(e.image.width),height:H.parseValue(e.image.height)})};i=t.extend({width:this._stageWidth,height:this._stageHeight,crop:this._options.imageCrop,max:this._options.maxScaleRatio,min:this._options.minScaleRatio,margin:this._options.imageMargin,position:this._options.imagePosition,iframelimit:this._options.maxVideoSize},i);if(this._options.layerFollow&&this._options.imageCrop!==true){if(typeof i.complete=="function"){n=i.complete;i.complete=function(){n.call(e,e);a(e)}}else{i.complete=a}}else{t(e.container).children(":first").css({top:0,left:0})}e.scale(i);return this},updateCarousel:function(){this._carousel.update();return this},resize:function(e,i){if(typeof e=="function"){i=e;e=n}e=t.extend({width:0,height:0},e);var a=this,o=this.$("container");t.each(e,function(t,i){if(!i){o[t]("auto");e[t]=a._getWH()[t]}});t.each(e,function(t,e){o[t](e)});return this.rescale(i)},rescale:function(e,a,o){var r=this;if(typeof e==="function"){o=e;e=n}var s=function(){r._stageWidth=e||r.$("stage").width();r._stageHeight=a||r.$("stage").height();if(r._options.swipe){t.each(r._controls.slides,function(e,i){r._scaleImage(i);t(i.container).css("left",r._stageWidth*e)});r.$("images").css("width",r._stageWidth*r.getDataLength())}else{r._scaleImage()}if(r._options.carousel){r.updateCarousel()}var n=r._controls.frames[r._controls.active];if(n){r._controls.frames[r._controls.active].scale({width:r._stageWidth,height:r._stageHeight,iframelimit:r._options.maxVideoSize})}r.trigger(i.RESCALE);if(typeof o==="function"){o.call(r)}};s.call(r);return this},refreshImage:function(){this._scaleImage();if(this._options.imagePan){this.addPan()}return this},_preload:function(){if(this._options.preload){var t,e,n=this.getNext(),a;try{for(e=this._options.preload;e>0;e--){t=new i.Picture;a=this.getData(n);t.preload(this.isFullscreen()&&a.big?a.big:a.image);n=this.getNext(n)}}catch(o){}}},show:function(n,a,o){var r=this._options.swipe;if(!r&&(this._queue.length>3||n===false||!this._options.queue&&this._queue.stalled)){return}n=g.max(0,g.min(parseInt(n,10),this.getDataLength()-1));a=typeof a!=="undefined"?!!a:n<this.getIndex();o=o||false;if(!o&&i.History){i.History.set(n.toString());return}if(this.finger&&n!==this._active){this.finger.to=-(n*this.finger.width);this.finger.index=n}this._active=n;if(r){var l=this.getData(n),c=this;if(!l){return}var h=this.isFullscreen()&&l.big?l.big:l.image||l.iframe,u=this._controls.slides[n],f=u.isCached(h),d=this._thumbnails[n];var p={cached:f,index:n,rewind:a,imageTarget:u.image,thumbTarget:d.image,galleriaData:l};this.trigger(t.extend(p,{type:i.LOADSTART}));c.$("container").removeClass("videoplay");var m=function(){c._layers[n].innerHTML=c.getData().layer||"";c.trigger(t.extend(p,{type:i.LOADFINISH}));c._playCheck()};c._preload();e.setTimeout(function(){if(!u.ready||t(u.image).attr("src")!=h){if(l.iframe&&!l.image){u.isIframe=true}u.load(h,function(e){p.imageTarget=e.image;c._scaleImage(e,m).trigger(t.extend(p,{type:i.IMAGE}));m()})}else{c.trigger(t.extend(p,{type:i.IMAGE}));m()}},100)}else{s.push.call(this._queue,{index:n,rewind:a});if(!this._queue.stalled){this._show()}}return this},_show:function(){var a=this,o=this._queue[0],r=this.getData(o.index);if(!r){return}var l=this.isFullscreen()&&r.big?r.big:r.image||r.iframe,c=this._controls.getActive(),h=this._controls.getNext(),u=h.isCached(l),f=this._thumbnails[o.index],d=function(){t(h.image).trigger("mouseup")};a.$("container").toggleClass("iframe",!!r.isIframe).removeClass("videoplay");var p=function(o,r,l,c,h){return function(){var u;M.active=false;H.toggleQuality(r.image,a._options.imageQuality);a._layers[a._controls.active].innerHTML="";t(l.container).css({zIndex:0,opacity:0}).show();t(l.container).find("iframe, .galleria-videoicon").remove();t(a._controls.frames[a._controls.active].container).hide();t(r.container).css({zIndex:1,left:0,top:0}).show();a._controls.swap();if(a._options.imagePan){a.addPan(r.image)}if(o.iframe&&o.image||o.link||a._options.lightbox||a._options.clicknext){t(r.image).css({cursor:"pointer"}).on("mouseup",function(r){if(typeof r.which=="number"&&r.which>1){return}if(o.iframe){if(a.isPlaying()){a.pause()}var s=a._controls.frames[a._controls.active],l=a._stageWidth,c=a._stageHeight;t(s.container).css({width:l,height:c,opacity:0}).show().animate({opacity:1},200);e.setTimeout(function(){s.load(o.iframe+(o.video?"&autoplay=1":""),{width:l,height:c},function(t){a.$("container").addClass("videoplay");t.scale({width:a._stageWidth,height:a._stageHeight,iframelimit:o.video?a._options.maxVideoSize:n})})},100);return}if(a._options.clicknext&&!i.TOUCH){if(a._options.pauseOnInteraction){a.pause()}a.next();return}if(o.link){if(a._options.popupLinks){u=e.open(o.link,"_blank")}else{e.location.href=o.link}return}if(a._options.lightbox){a.openLightbox()}})}a._playCheck();a.trigger({type:i.IMAGE,index:c.index,imageTarget:r.image,thumbTarget:h.image,galleriaData:o});s.shift.call(a._queue);a._queue.stalled=false;if(a._queue.length){a._show()}}}(r,h,c,o,f);if(this._options.carousel&&this._options.carouselFollow){this._carousel.follow(o.index)}a._preload();H.show(h.container);h.isIframe=r.iframe&&!r.image;t(a._thumbnails[o.index].container).addClass("active").siblings(".active").removeClass("active");a.trigger({type:i.LOADSTART,cached:u,index:o.index,rewind:o.rewind,imageTarget:h.image,thumbTarget:f.image,galleriaData:r});a._queue.stalled=true;h.load(l,function(e){var s=t(a._layers[1-a._controls.active]).html(r.layer||"").hide();a._scaleImage(e,{complete:function(e){if("image"in c){H.toggleQuality(c.image,false)}H.toggleQuality(e.image,false);a.removePan();a.setInfo(o.index);a.setCounter(o.index);if(r.layer){s.show();if(r.iframe&&r.image||r.link||a._options.lightbox||a._options.clicknext){s.css("cursor","pointer").off("mouseup").mouseup(d)}}if(r.video&&r.image){O(e.container)}var l=a._options.transition;t.each({initial:c.image===null,touch:i.TOUCH,fullscreen:a.isFullscreen()},function(t,e){if(e&&a._options[t+"Transition"]!==n){l=a._options[t+"Transition"];return false}});if(l in M.effects===false){p()}else{var h={prev:c.container,next:e.container,rewind:o.rewind,speed:a._options.transitionSpeed||400};M.active=true;M.init.call(a,l,h,p)}a.trigger({type:i.LOADFINISH,cached:u,index:o.index,rewind:o.rewind,imageTarget:e.image,thumbTarget:a._thumbnails[o.index].image,galleriaData:a.getData(o.index)})}})})},getNext:function(t){t=typeof t==="number"?t:this.getIndex();return t===this.getDataLength()-1?0:t+1},getPrev:function(t){t=typeof t==="number"?t:this.getIndex();return t===0?this.getDataLength()-1:t-1},next:function(){if(this.getDataLength()>1){this.show(this.getNext(),false)}return this},prev:function(){if(this.getDataLength()>1){this.show(this.getPrev(),true)}return this},get:function(t){return t in this._dom?this._dom[t]:null},getData:function(t){return t in this._data?this._data[t]:this._data[this._active]},getDataLength:function(){return this._data.length},getIndex:function(){return typeof this._active==="number"?this._active:false},getStageHeight:function(){return this._stageHeight},getStageWidth:function(){return this._stageWidth},getOptions:function(t){return typeof t==="undefined"?this._options:this._options[t]},setOptions:function(e,i){if(typeof e==="object"){t.extend(this._options,e)}else{this._options[e]=i}return this},play:function(t){this._playing=true;this._playtime=t||this._playtime;this._playCheck();this.trigger(i.PLAY);return this},pause:function(){this._playing=false;this.trigger(i.PAUSE);return this},playToggle:function(t){return this._playing?this.pause():this.play(t)},isPlaying:function(){return this._playing},isFullscreen:function(){return this._fullscreen.active},_playCheck:function(){var t=this,e=0,n=20,a=H.timestamp(),o="play"+this._id;if(this._playing){this.clearTimer(o);var r=function(){e=H.timestamp()-a;if(e>=t._playtime&&t._playing){t.clearTimer(o);t.next();return}if(t._playing){t.trigger({type:i.PROGRESS,percent:g.ceil(e/t._playtime*100),seconds:g.floor(e/1e3),milliseconds:e});t.addTimer(o,r,n)}};t.addTimer(o,r,n)}},setPlaytime:function(t){this._playtime=t;return this},setIndex:function(t){this._active=t;return this},setCounter:function(t){if(typeof t==="number"){t++}else if(typeof t==="undefined"){t=this.getIndex()+1}this.get("current").innerHTML=t;if(y){var e=this.$("counter"),i=e.css("opacity");if(parseInt(i,10)===1){H.removeAlpha(e[0])}else{this.$("counter").css("opacity",i)}}return this},setInfo:function(e){var i=this,n=this.getData(e);t.each(["title","description"],function(t,e){var a=i.$("info-"+e);if(!!n[e]){a[n[e].length?"show":"hide"]().html(n[e])}else{a.empty().hide()}});return this},hasInfo:function(t){var e="title description".split(" "),i;for(i=0;e[i];i++){if(!!this.getData(t)[e[i]]){return true}}return false},jQuery:function(e){var i=this,n=[];t.each(e.split(","),function(e,a){a=t.trim(a);if(i.get(a)){n.push(a)}});var a=t(i.get(n.shift()));t.each(n,function(t,e){a=a.add(i.get(e))});return a},$:function(t){return this.jQuery.apply(this,H.array(arguments))}};t.each(x,function(t,e){var n=/_/.test(e)?e.replace(/_/g,""):e;i[e.toUpperCase()]="galleria."+n});t.extend(i,{IE9:y===9,IE8:y===8,IE7:y===7,IE6:y===6,IE:y,WEBKIT:/webkit/.test(f),CHROME:/chrome/.test(f),SAFARI:/safari/.test(f)&&!/chrome/.test(f),QUIRK:y&&a.compatMode&&a.compatMode==="BackCompat",MAC:/mac/.test(navigator.platform.toLowerCase()),OPERA:!!e.opera,IPHONE:/iphone/.test(f),IPAD:/ipad/.test(f),ANDROID:/android/.test(f),TOUCH:"ontouchstart"in a});i.addTheme=function(n){if(!n.name){i.raise("No theme name specified")}if(typeof n.defaults!=="object"){n.defaults={}}else{n.defaults=T(n.defaults)}var a=false,o;if(typeof n.css==="string"){t("link").each(function(t,e){o=new RegExp(n.css);if(o.test(e.href)){a=true;F(n);return false}});if(!a){t(function(){var r=0;var s=function(){t("script").each(function(t,i){o=new RegExp("galleria\\."+n.name.toLowerCase()+"\\.");if(o.test(i.src)){a=i.src.replace(/[^\/]*$/,"")+n.css;e.setTimeout(function(){H.loadCSS(a,"galleria-theme-"+n.name,function(){F(n)})},1)}});if(!a){if(r++>5){i.raise("No theme CSS loaded")}else{e.setTimeout(s,500)}}};s()})}}else{F(n)}return n};i.loadTheme=function(n,a){if(t("script").filter(function(){return t(this).attr("src")==n}).length){return}var o=false,r;t(e).load(function(){if(!o){r=e.setTimeout(function(){if(!o){i.raise("Galleria had problems loading theme at "+n+". Please check theme path or load manually.",true)}},2e4)}});H.loadScript(n,function(){o=true;e.clearTimeout(r)});return i};i.get=function(t){if(!!D[t]){return D[t]}else if(typeof t!=="number"){return D}else{i.raise("Gallery index "+t+" not found")}};i.configure=function(e,n){var a={};if(typeof e=="string"&&n){a[e]=n;e=a}else{t.extend(a,e)}i.configure.options=a;t.each(i.get(),function(t,e){e.setOptions(a)});return i};i.configure.options={};i.on=function(e,n){if(!e){return}n=n||m;var a=e+n.toString().replace(/\s/g,"")+H.timestamp();t.each(i.get(),function(t,i){i._binds.push(a);i.bind(e,n)});i.on.binds.push({type:e,callback:n,hash:a});return i};i.on.binds=[];i.run=function(e,n){if(t.isFunction(n)){n={extend:n}}t(e||"#galleria").galleria(n);return i};i.addTransition=function(t,e){M.effects[t]=e;return i};i.utils=H;i.log=function(){var i=H.array(arguments);if("console"in e&&"log"in e.console){try{return e.console.log.apply(e.console,i)}catch(n){t.each(i,function(){e.console.log(this)})}}else{return e.alert(i.join("<br>"))}};i.ready=function(e){if(typeof e!="function"){return i}t.each(E,function(t,i){e.call(i,i._options)});i.ready.callbacks.push(e);return i};i.ready.callbacks=[];i.raise=function(e,i){var n=i?"Fatal error":"Error",a={color:"#fff",position:"absolute",top:0,left:0,zIndex:1e5},o=function(e){var o='<div style="padding:4px;margin:0 0 2px;background:#'+(i?"811":"222")+';">'+(i?"<strong>"+n+": </strong>":"")+e+"</div>";t.each(D,function(){var t=this.$("errors"),e=this.$("target");if(!t.length){e.css("position","relative");t=this.addElement("errors").appendChild("target","errors").$("errors").css(a)}t.append(o)});if(!D.length){t("<div>").css(t.extend(a,{position:"fixed"})).append(o).appendTo(_().body)
}};if(c){o(e);if(i){throw new Error(n+": "+e)}}else if(i){if($){return}$=true;i=false;o("Gallery could not load.")}};i.version=l;i.requires=function(t,e){e=e||"You need to upgrade Galleria to version "+t+" to use one or more components.";if(i.version<t){i.raise(e,true)}return i};i.Picture=function(e){this.id=e||null;this.image=null;this.container=H.create("galleria-image");t(this.container).css({overflow:"hidden",position:"relative"});this.original={width:0,height:0};this.ready=false;this.isIframe=false};i.Picture.prototype={cache:{},show:function(){H.show(this.image)},hide:function(){H.moveOut(this.image)},clear:function(){this.image=null},isCached:function(t){return!!this.cache[t]},preload:function(e){t(new Image).load(function(t,e){return function(){e[t]=t}}(e,this.cache)).attr("src",e)},load:function(n,a,o){if(typeof a=="function"){o=a;a=null}if(this.isIframe){var r="if"+(new Date).getTime();var s=this.image=t("<iframe>",{src:n,frameborder:0,id:r,allowfullscreen:true,css:{visibility:"hidden"}})[0];if(a){t(s).css(a)}t(this.container).find("iframe,img").remove();this.container.appendChild(this.image);t("#"+r).load(function(i,n){return function(){e.setTimeout(function(){t(i.image).css("visibility","visible");if(typeof n=="function"){n.call(i,i)}},10)}}(this,o));return this.container}this.image=new Image;if(i.IE8){t(this.image).css("filter","inherit")}if(!i.IE&&!i.CHROME&&!i.SAFARI){t(this.image).css("image-rendering","optimizequality")}var l=false,c=false,h=t(this.container),f=t(this.image),d=function(){if(!l){l=true;e.setTimeout(function(t,e){return function(){t.attr("src",e+(e.indexOf("?")>-1?"&":"?")+H.timestamp())}}(t(this),n),50)}else{if(u){t(this).attr("src",u)}else{i.raise("Image not found: "+n)}}},p=function(n,o,r){return function(){var s=function(){t(this).off("load");n.original=a||{height:this.height,width:this.width};if(i.HAS3D){this.style.MozTransform=this.style.webkitTransform="translate3d(0,0,0)"}h.append(this);n.cache[r]=r;if(typeof o=="function"){e.setTimeout(function(){o.call(n,n)},1)}};if(!this.width||!this.height){!function(e){H.wait({until:function(){return e.width&&e.height},success:function(){s.call(e)},error:function(){if(!c){t(new Image).load(p).attr("src",e.src);c=true}else{i.raise("Could not extract width/height from image: "+e.src+". Traced measures: width:"+e.width+"px, height: "+e.height+"px.")}},timeout:100})}(this)}else{s.call(this)}}}(this,o,n);h.find("iframe,img").remove();f.css("display","block");H.hide(this.image);t.each("minWidth minHeight maxWidth maxHeight".split(" "),function(t,e){f.css(e,/min/.test(e)?"0":"none")});f.load(p).on("error",d).attr("src",n);return this.container},scale:function(e){var a=this;e=t.extend({width:0,height:0,min:n,max:n,margin:0,complete:m,position:"center",crop:false,canvas:false,iframelimit:n},e);if(this.isIframe){var o=e.width,r=e.height,s,l;if(e.iframelimit){var c=g.min(e.iframelimit/o,e.iframelimit/r);if(c<1){s=o*c;l=r*c;t(this.image).css({top:r/2-l/2,left:o/2-s/2,position:"absolute"})}else{t(this.image).css({top:0,left:0})}}t(this.image).width(s||o).height(l||r).removeAttr("width").removeAttr("height");t(this.container).width(o).height(r);e.complete.call(a,a);try{if(this.image.contentWindow){t(this.image.contentWindow).trigger("resize")}}catch(h){}return this.container}if(!this.image){return this.container}var u,f,d=t(a.container),p;H.wait({until:function(){u=e.width||d.width()||H.parseValue(d.css("width"));f=e.height||d.height()||H.parseValue(d.css("height"));return u&&f},success:function(){var i=(u-e.margin*2)/a.original.width,n=(f-e.margin*2)/a.original.height,o=g.min(i,n),r=g.max(i,n),s={"true":r,width:i,height:n,"false":o,landscape:a.original.width>a.original.height?r:o,portrait:a.original.width<a.original.height?r:o},l=s[e.crop.toString()],c="";if(e.max){l=g.min(e.max,l)}if(e.min){l=g.max(e.min,l)}t.each(["width","height"],function(e,i){t(a.image)[i](a[i]=a.image[i]=g.round(a.original[i]*l))});t(a.container).width(u).height(f);if(e.canvas&&L){L.elem.width=a.width;L.elem.height=a.height;c=a.image.src+":"+a.width+"x"+a.height;a.image.src=L.cache[c]||function(t){L.context.drawImage(a.image,0,0,a.original.width*l,a.original.height*l);try{p=L.elem.toDataURL();L.length+=p.length;L.cache[t]=p;return p}catch(e){return a.image.src}}(c)}var h={},d={},m=function(e,i,n){var o=0;if(/\%/.test(e)){var r=parseInt(e,10)/100,s=a.image[i]||t(a.image)[i]();o=g.ceil(s*-1*r+n*r)}else{o=H.parseValue(e)}return o},v={top:{top:0},left:{left:0},right:{left:"100%"},bottom:{top:"100%"}};t.each(e.position.toLowerCase().split(" "),function(t,e){if(e==="center"){e="50%"}h[t?"top":"left"]=e});t.each(h,function(e,i){if(v.hasOwnProperty(i)){t.extend(d,v[i])}});h=h.top?t.extend(h,d):d;h=t.extend({top:"50%",left:"50%"},h);t(a.image).css({position:"absolute",top:m(h.top,"height",f),left:m(h.left,"width",u)});a.show();a.ready=true;e.complete.call(a,a)},error:function(){i.raise("Could not scale image: "+a.image.src)},timeout:1e3});return this}};t.extend(t.easing,{galleria:function(t,e,i,n,a){if((e/=a/2)<1){return n/2*e*e*e+i}return n/2*((e-=2)*e*e+2)+i},galleriaIn:function(t,e,i,n,a){return n*(e/=a)*e+i},galleriaOut:function(t,e,i,n,a){return-n*(e/=a)*(e-2)+i}});i.Finger=function(){var n=g.abs;var r=i.HAS3D=function(){var e=a.createElement("p"),i,n=["webkit","O","ms","Moz",""],o,r=0,s="transform";_().html.insertBefore(e,null);for(;n[r];r++){o=n[r]?n[r]+"Transform":s;if(e.style[o]!==undefined){e.style[o]="translate3d(1px,1px,1px)";i=t(e).css(n[r]?"-"+n[r].toLowerCase()+"-"+s:s)}}_().html.removeChild(e);return i!==undefined&&i.length>0&&i!=="none"}();var s=function(){var t="RequestAnimationFrame";return e.requestAnimationFrame||e["webkit"+t]||e["moz"+t]||e["o"+t]||e["ms"+t]||function(t){e.setTimeout(t,1e3/60)}}();var l=function(i,n){this.config={start:0,duration:500,onchange:function(){},oncomplete:function(){},easing:function(t,e,i,n,a){return-n*((e=e/a-1)*e*e*e-1)+i}};this.easeout=function(t,e,i,n,a){return n*((e=e/a-1)*e*e*e*e+1)+i};if(!i.children.length){return}var a=this;t.extend(this.config,n);this.elem=i;this.child=i.children[0];this.to=this.pos=0;this.touching=false;this.start={};this.index=this.config.start;this.anim=0;this.easing=this.config.easing;if(!r){this.child.style.position="absolute";this.elem.style.position="relative"}t.each(["ontouchstart","ontouchmove","ontouchend","setup"],function(t,e){a[e]=function(t){return function(){t.apply(a,arguments)}}(a[e])});this.setX=function(){var t=a.child.style;if(!r){t.left=a.pos+"px";return}t.MozTransform=t.webkitTransform=t.transform="translate3d("+a.pos+"px,0,0)";return};t(i).on("touchstart",this.ontouchstart);t(e).on("resize",this.setup);t(e).on("orientationchange",this.setup);this.setup();!function o(){s(o);a.loop.call(a)}()};l.prototype={constructor:l,setup:function(){this.width=t(this.elem).width();this.length=g.ceil(t(this.child).width()/this.width);if(this.index!==0){this.index=g.max(0,g.min(this.index,this.length-1));this.pos=this.to=-this.width*this.index}},setPosition:function(t){this.pos=t;this.to=t},ontouchstart:function(t){var e=t.originalEvent.touches;this.start={pageX:e[0].pageX,pageY:e[0].pageY,time:+new Date};this.isScrolling=null;this.touching=true;this.deltaX=0;o.on("touchmove",this.ontouchmove);o.on("touchend",this.ontouchend)},ontouchmove:function(t){var e=t.originalEvent.touches;if(e&&e.length>1||t.scale&&t.scale!==1){return}this.deltaX=e[0].pageX-this.start.pageX;if(this.isScrolling===null){this.isScrolling=!!(this.isScrolling||g.abs(this.deltaX)<g.abs(e[0].pageY-this.start.pageY))}if(!this.isScrolling){t.preventDefault();this.deltaX/=!this.index&&this.deltaX>0||this.index==this.length-1&&this.deltaX<0?g.abs(this.deltaX)/this.width+1.8:1;this.to=this.deltaX-this.index*this.width}t.stopPropagation()},ontouchend:function(t){this.touching=false;var e=+new Date-this.start.time<250&&g.abs(this.deltaX)>40||g.abs(this.deltaX)>this.width/2,i=!this.index&&this.deltaX>0||this.index==this.length-1&&this.deltaX<0;if(!this.isScrolling){this.show(this.index+(e&&!i?this.deltaX<0?1:-1:0))}o.off("touchmove",this.ontouchmove);o.off("touchend",this.ontouchend)},show:function(t){if(t!=this.index){this.config.onchange.call(this,t)}else{this.to=-(t*this.width)}},moveTo:function(t){if(t!=this.index){this.pos=this.to=-(t*this.width);this.index=t}},loop:function(){var t=this.to-this.pos,e=1;if(this.width&&t){e=g.max(.5,g.min(1.5,g.abs(t/this.width)))}if(this.touching||g.abs(t)<=1){this.pos=this.to;t=0;if(this.anim&&!this.touching){this.config.oncomplete(this.index)}this.anim=0;this.easing=this.config.easing}else{if(!this.anim){this.anim={start:this.pos,time:+new Date,distance:t,factor:e,destination:this.to}}var i=+new Date-this.anim.time;var n=this.config.duration*this.anim.factor;if(i>n||this.anim.destination!=this.to){this.anim=0;this.easing=this.easeout;return}this.pos=this.easing(null,i,this.anim.start,this.anim.distance,n)}this.setX()}};return l}();t.fn.galleria=function(e){var n=this.selector;if(!t(this).length){t(function(){if(t(n).length){t(n).galleria(e)}else{i.utils.wait({until:function(){return t(n).length},success:function(){t(n).galleria(e)},error:function(){i.raise('Init failed: Galleria could not find the element "'+n+'".')},timeout:5e3})}});return this}return this.each(function(){if(t.data(this,"galleria")){t.data(this,"galleria").destroy();t(this).find("*").hide()}t.data(this,"galleria",(new i).init(this,e))})};if(typeof module==="object"&&module&&typeof module.exports==="object"){module.exports=i}else{e.Galleria=i;if(typeof define==="function"&&define.amd){define("galleria",["jquery"],function(){return i})}}}(jQuery,this);
(function(){if(typeof window.CustomEvent==="function"){return false}function a(d,f){f=f||{bubbles:false,cancelable:false,detail:undefined};var b=document.createEvent("CustomEvent");b.initCustomEvent(d,f.bubbles,f.cancelable,f.detail);return b}a.prototype=window.Event.prototype;window.CustomEvent=a})();var stEvent=new CustomEvent("on_async_buttons_load",{bubbles:true,cancelable:false});(function(a){var d=document.createElement(a);var f="async-buttons";if(document.getElementById(f)){return}d.type="text/javascript";d.id=f;d.src=("https:"==document.location.protocol?"https://ws.":"http://w.")+"sharethis.com/button/async-buttons.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(d,b)})("script");var stlib=stlib||{functions:[],functionCount:0,util:{prop:function(b,a){if(a){return a[b]}return function(d){return d[b]}}},dynamicOn:true,setPublisher:function(a){stlib.publisher=a},setProduct:function(a){stlib.product=a},parseQuery:function(f){var g=new Object();if(!f){return g}var a=f.split(/[;&]/);for(var d=0;d<a.length;d++){var j=a[d].split("=");if(!j||j.length!=2){continue}var b=unescape(j[0]);var h=unescape(j[1]);h=h.replace(/\+/g," ");g[b]=h}return g},getQueryParams:function(){var a=document.getElementById("st_insights_js");if(a&&a.src){var d=a.src.replace(/^[^\?]+\??/,"");var b=stlib.parseQuery(d);stlib.setPublisher(b.publisher);stlib.setProduct(b.product)}}};stlib.global={hash:stlib.util.prop("hash",document.location).substr(1)};stlib.getQueryParams();stlib.debugOn=false;stlib.debug={count:0,messages:[],debug:function(b,a){if(a&&(typeof console)!="undefined"){console.log(b)}stlib.debug.messages.push(b)},show:function(a){for(message in stlib.debug.messages){if((typeof console)!="undefined"){if(a){/ERROR/.test(stlib.debug.messages[message])?console.log(stlib.debug.messages[message]):null}else{console.log(stlib.debug.messages[message])}}}},showError:function(){stlib.debug.show(true)}};var _$d=function(a){stlib.debug.debug(a,stlib.debugOn)};var _$d0=function(){_$d(" ")};var _$d_=function(){_$d("___________________________________________")};var _$d1=function(a){_$d(_$dt()+"| "+a)};var _$d2=function(a){_$d(_$dt()+"|  * "+a)};var _$de=function(a){_$d(_$dt()+"ERROR: "+a)};var _$dt=function(){var b=new Date();var f=b.getHours();var a=b.getMinutes();var d=b.getSeconds();return f+":"+a+":"+d+" > "};stlib.allServices={adfty:{title:"Adfty"},allvoices:{title:"Allvoices"},amazon_wishlist:{title:"Amazon Wishlist"},arto:{title:"Arto"},att:{title:"AT&T"},baidu:{title:"Baidu"},blinklist:{title:"Blinklist"},blip:{title:"Blip"},blogmarks:{title:"Blogmarks"},blogger:{title:"Blogger",type:"post"},buddymarks:{title:"BuddyMarks"},buffer:{title:"Buffer"},care2:{title:"Care2"},chiq:{title:"chiq"},citeulike:{title:"CiteULike"},chiq:{title:"chiq"},corkboard:{title:"Corkboard"},dealsplus:{title:"Dealspl.us"},delicious:{title:"Delicious"},digg:{title:"Digg"},diigo:{title:"Diigo"},dzone:{title:"DZone"},edmodo:{title:"Edmodo"},email:{title:"Email"},embed_ly:{title:"Embed.ly"},evernote:{title:"Evernote"},facebook:{title:"Facebook"},fark:{title:"Fark"},fashiolista:{title:"Fashiolista"},flipboard:{title:"Flipboard"},folkd:{title:"folkd.com"},foodlve:{title:"FoodLve"},fresqui:{title:"Fresqui"},friendfeed:{title:"FriendFeed"},funp:{title:"Funp"},fwisp:{title:"fwisp"},google:{title:"Google"},googleplus:{title:"Google +"},google_bmarks:{title:"Bookmarks"},google_reader:{title:"Google Reader"},google_translate:{title:"Google Translate"},hatena:{title:"Hatena"},instapaper:{title:"Instapaper"},jumptags:{title:"Jumptags"},kaboodle:{title:"Kaboodle"},kik:{title:"Kik"},linkagogo:{title:"linkaGoGo"},linkedin:{title:"LinkedIn"},livejournal:{title:"LiveJournal",type:"post"},mail_ru:{title:"mail.ru"},meneame:{title:"Meneame"},messenger:{title:"Messenger"},mister_wong:{title:"Mr Wong"},moshare:{title:"moShare"},myspace:{title:"MySpace"},n4g:{title:"N4G"},netlog:{title:"Netlog"},netvouz:{title:"Netvouz"},newsvine:{title:"Newsvine"},nujij:{title:"NUjij"},odnoklassniki:{title:"Odnoklassniki"},oknotizie:{title:"Oknotizie"},pinterest:{title:"Pinterest"},pocket:{title:"Pocket"},print:{title:"Print"},raise_your_voice:{title:"Raise Your Voice"},reddit:{title:"Reddit"},segnalo:{title:"Segnalo"},sharethis:{title:"ShareThis"},sina:{title:"Sina"},sonico:{title:"Sonico"},startaid:{title:"Startaid"},startlap:{title:"Startlap"},stumbleupon:{title:"StumbleUpon"},stumpedia:{title:"Stumpedia"},typepad:{title:"TypePad",type:"post"},tumblr:{title:"Tumblr"},twitter:{title:"Twitter"},viadeo:{title:"Viadeo"},virb:{title:"Virb"},vkontakte:{title:"Vkontakte"},voxopolis:{title:"VOXopolis"},whatsapp:{title:"WhatsApp"},weheartit:{title:"We Heart It"},wordpress:{title:"WordPress",type:"post"},xerpi:{title:"Xerpi"},xing:{title:"Xing"},yammer:{title:"Yammer"}};stlib.allOauthServices={twitter:{title:"Twitter"},linkedIn:{title:"LinkedIn"},facebook:{title:"Facebook"}};stlib.allNativeServices={fblike:{title:"Facebook Like"},fbrec:{title:"Facebook Recommend"},fbsend:{title:"Facebook Send"},fbsub:{title:"Facebook Subscribe"},foursquaresave:{title:"Foursquare Save"},foursquarefollow:{title:"Foursquare Follow"},instagram:{title:"Instagram Badge"},plusone:{title:"Google +1"},pinterestfollow:{title:"Pinterest Follow"},twitterfollow:{title:"Twitter Follow"},youtube:{title:"Youtube Subscribe"}};stlib.allDeprecatedServices={google_bmarks:{title:"Google Bookmarks"},yahoo_bmarks:{title:"Yahoo Bookmarks"}};stlib.allOtherServices={copy:{title:"Copy Paste"},sharenow:{title:"ShareNow"},sharenow_auto:{title:"Frictionless Sharing"},fbunlike:{title:"Facebook Unlike"}};var _all_services=stlib.allServices;stlib.buttonInfo={buttonList:[],addButton:function(a){stlib.buttonInfo.buttonList.push(a)},getButton:function(a){if(!isNaN(a)){if(a>=stlib.buttonInfo.buttonList.length){return false}else{return stlib.buttonInfo.buttonList[a]}}else{for(c=0;c<stlib.buttonInfo.buttonList.length;c++){if(stlib.buttonInfo.buttonList[c].service==a){debug(stlib.buttonInfo.buttonList[c])}}}},clickButton:function(a){if(!isNaN(a)){if(a>=stlib.buttonInfo.buttonList.length){return false}else{if(stlib.buttonInfo.getButton(a).service=="sharethis"||stlib.buttonInfo.getButton(a).service=="email"||stlib.buttonInfo.getButton(a).service=="wordpress"){stlib.buttonInfo.getButton(a).popup()}else{stlib.buttonInfo.getButton(a).element.childNodes[0].onclick()}}}else{for(c=0;c<stlib.buttonInfo.buttonList.length;c++){if(stlib.buttonInfo.buttonList[c].service==a){if(stlib.buttonInfo.getButton(c).service=="sharethis"||stlib.buttonInfo.getButton(c).service=="email"||stlib.buttonInfo.getButton(c).service=="wordpress"){stlib.buttonInfo.getButton(c).popup();return true}else{stlib.buttonInfo.getButton(c).element.childNodes[0].onclick()}}}}},resetButton:function(){stlib.buttonInfo.buttonList=[]},listButton:function(){for(c=0;c<stlib.buttonInfo.buttonList.length;c++){debug(stlib.buttonInfo.buttonList[c])}}};stlib.buttonInfo.resetButton();stlib.messageQueue=function(){var a=this;this.pumpInstance=null;this.queue=[];this.dependencies=["data"];this.sending=true;this.setPumpInstance=function(b){this.pumpInstance=b};this.send=function(g,d){if((typeof(g)=="string")&&(typeof(d)=="string")){_$d_();_$d1("Queueing message: "+d+": "+g)}(typeof(g)=="string")&&(typeof(d)=="string")?this.queue.push([d,g]):null;if(this.sending==false||stlib.browser.ieFallback){if(this.pumpInstance!=null){if(this.dependencies.length>0){for(messageSet in this.queue){if(this.queue.hasOwnProperty(messageSet)&&this.queue[messageSet][0]==this.dependencies[0]){if(this.queue.length>0){_$d1("Current Queue Length: "+this.queue.length);var b=this.queue.shift();this.pumpInstance.broadcastSendMessage(b[1]);this.dependencies.shift();this.sending=true}}}}else{if(this.queue.length>0){_$d1("Current Queue Length: "+this.queue.length);var b=this.queue.shift();this.pumpInstance.broadcastSendMessage(b[1]);this.sending=true}}}else{_$d_();_$d1("Pump is null")}}if((stlib.browser.ieFallback)&&(this.queue.length>0)){var f="process"+stlib.functionCount;stlib.functionCount++;stlib.functions[f]=a.process;setTimeout("stlib.functions['"+f+"']()",500)}};this.process=function(){_$d1("Processing MessageQueue");a.sending=false;_$d(this.queue);a.send()}};stlib.sharer={sharerUrl:(("https:"==document.location.protocol)?"https://ws.":"http://wd.")+"sharethis.com/api/sharer.php",regAuto:new RegExp(/(.*?)_auto$/),constructParamString:function(){stlib.data.validate();stlib.hash.checkURL();var a=stlib.data.pageInfo;var d="?";var b;for(b in a){d+=b+"="+encodeURIComponent(a[b])+"&";_$d1("constructParamStringPageInfo: "+b+": "+a[b])}a=stlib.data.shareInfo;for(b in a){d+=b+"="+encodeURIComponent(a[b])+"&";_$d1("constructParamStringShareInfo: "+b+": "+a[b])}d+="ts="+new Date().getTime()+"&";return d.substring(0,d.length-1)},stPrint:function(){window.print()},sharePinterest:function(){if(stlib.data.get("image","shareInfo")==false||stlib.data.get("image","shareInfo")==null||stlib.data.get("pinterest_native","shareInfo")=="true"){if(typeof(stWidget)!="undefined"&&typeof(stWidget.closeWidget)==="function"){stWidget.closeWidget()}if(typeof(stcloseWidget)==="function"){stcloseWidget()}if(typeof(stToolbar)!="undefined"&&typeof(stToolbar.closeWidget)==="function"){stToolbar.closeWidget()}var a=document.createElement("script");a.setAttribute("type","text/javascript");a.setAttribute("charset","UTF-8");a.setAttribute("src","//assets.pinterest.com/js/pinmarklet.js?r="+Math.random()*99999999);document.body.appendChild(a)}},share:function(f,a){var d=stlib.sharer.constructParamString();_$d_();_$d1("Initiating a Share with the following url:");_$d2(stlib.sharer.sharerUrl+d);if((stlib.data.get("destination","shareInfo")=="print")||(stlib.data.get("destination","shareInfo")=="email")||(stlib.data.get("destination","shareInfo")=="pinterest"&&stlib.data.get("source","shareInfo").match(/share4xmobile/)==null&&stlib.data.get("source","shareInfo").match(/share4xpage/)==null&&stlib.data.get("source","shareInfo").match(/5xpage/)==null&&(stlib.data.get("image","shareInfo")==false||stlib.data.get("image","shareInfo")==null))||stlib.data.get("destination","shareInfo")=="snapsets"||stlib.data.get("destination","shareInfo")=="copy"||stlib.data.get("destination","shareInfo")=="plusone"||stlib.data.get("destination","shareInfo").match(stlib.sharer.regAuto)||(typeof(stlib.nativeButtons)!="undefined"&&stlib.nativeButtons.checkNativeButtonSupport(stlib.data.get("destination","shareInfo")))||(stlib.data.get("pinterest_native","shareInfo")!=false&&stlib.data.get("pinterest_native","shareInfo")!=null)){var b=new Image(1,1);b.src=stlib.sharer.sharerUrl+d;b.onload=function(){return}}else{if(typeof(a)!="undefined"&&a==true){window.open(stlib.sharer.sharerUrl+d,(new Date()).valueOf(),"scrollbars=1, status=1, height=480, width=640, resizable=1")}else{window.open(stlib.sharer.sharerUrl+d)}}f?f():null}};stlib.browser={iemode:null,firefox:null,firefoxVersion:null,safari:null,chrome:null,opera:null,windows:null,mac:null,ieFallback:(/MSIE [6789]/).test(navigator.userAgent),init:function(){var a=navigator.userAgent.toString().toLowerCase();if(/msie|trident/i.test(a)){if(document.documentMode){stlib.browser.iemode=document.documentMode}else{stlib.browser.iemode=5;if(document.compatMode){if(document.compatMode=="CSS1Compat"){stlib.browser.iemode=7}}}}stlib.browser.firefox=((a.indexOf("firefox")!=-1)&&(typeof InstallTrigger!=="undefined"))?true:false;stlib.browser.firefoxVersion=(a.indexOf("firefox/5.0")!=-1||a.indexOf("firefox/9.0")!=-1)?false:true;stlib.browser.safari=(a.indexOf("safari")!=-1&&a.indexOf("chrome")==-1)?true:false;stlib.browser.chrome=(a.indexOf("safari")!=-1&&a.indexOf("chrome")!=-1)?true:false;stlib.browser.opera=(window.opera||a.indexOf(" opr/")>=0)?true:false;stlib.browser.windows=(a.indexOf("windows")!=-1)?true:false;stlib.browser.mac=(a.indexOf("macintosh")!=-1)?true:false},getIEVersion:function(){return stlib.browser.iemode},isFirefox:function(){return stlib.browser.firefox},firefox8Version:function(){return stlib.browser.firefoxVersion},isSafari:function(){return stlib.browser.safari},isWindows:function(){return stlib.browser.windows},isChrome:function(){return stlib.browser.chrome},isOpera:function(){return stlib.browser.opera},isMac:function(){return stlib.browser.mac}};stlib.browser.init();stlib.browser.mobile={mobile:false,uagent:null,android:null,iOs:null,silk:null,windows:null,kindle:null,url:null,sharCreated:false,sharUrl:null,isExcerptImplementation:false,iOsVer:0,init:function(){this.uagent=navigator.userAgent.toLowerCase();if(this.isAndroid()){this.mobile=true}else{if(this.isIOs()){this.mobile=true}else{if(this.isSilk()){this.mobile=true}else{if(this.isWindowsPhone()){this.mobile=true}else{if(this.isKindle()){this.mobile=true}}}}}},isMobile:function isMobile(){return this.mobile},isAndroid:function(){if(this.android===null){this.android=this.uagent.indexOf("android")>-1}return this.android},isKindle:function(){if(this.kindle===null){this.kindle=this.uagent.indexOf("kindle")>-1}return this.kindle},isIOs:function isIOs(){if(this.iOs===null){this.iOs=(this.uagent.indexOf("ipad")>-1)||(this.uagent.indexOf("ipod")>-1)||(this.uagent.indexOf("iphone")>-1)}return this.iOs},isSilk:function(){if(this.silk===null){this.silk=this.uagent.indexOf("silk")>-1}return this.silk},getIOSVersion:function(){if(this.isIOs()){this.iOsVer=this.uagent.substr((this.uagent.indexOf("os "))+3,5).replace(/\_/g,".")}return this.iOsVer},isWindowsPhone:function(){if(this.windows===null){this.windows=this.uagent.indexOf("windows phone")>-1}return this.windows}};stlib.browser.mobile.init();stlib=stlib||{};stlib.browser=stlib.browser||{};stlib.browser.mobile=stlib.browser.mobile||{};stlib.browser.mobile.handleForMobileFriendly=function(l,d,m){if(!this.isMobile()){return false}if(typeof(stLight)==="undefined"){stLight={};stLight.publisher=d.publisher;stLight.sessionID=d.sessionID;stLight.fpc=""}var u=(typeof(l.title)!=="undefined")?l.title:encodeURIComponent(document.title);var f=(typeof(l.url)!=="undefined")?l.url:document.URL;var v=(d.short_url!=""&&d.short_url!=null)?d.short_url:"";if(d.service=="sharethis"){var u=(typeof(l.title)!=="undefined")?l.title:encodeURIComponent(document.title);var f=(typeof(l.url)!=="undefined")?l.url:document.URL;var g="";if(typeof(l.summary)!="undefined"&&l.summary!=null){g=l.summary}var a=document.createElement("form");a.setAttribute("method","GET");a.setAttribute("action","http://edge.sharethis.com/share4x/mobile.html");a.setAttribute("target","_blank");var q={url:f,title:u,summary:g,destination:d.service,publisher:stLight.publisher,fpc:stLight.fpc,sessionID:stLight.sessionID,short_url:v};if(typeof(l.image)!="undefined"&&l.image!=null){q.image=l.image}if(typeof(l.summary)!="undefined"&&l.summary!=null){q.desc=l.summary}if(typeof(m)!="undefined"&&typeof(m.exclusive_services)!="undefined"&&m.exclusive_services!=null){q.exclusive_services=m.exclusive_services}if(typeof(d.exclusive_services)!="undefined"&&d.exclusive_services!=null){q.exclusive_services=d.exclusive_services}if(typeof(m)!="undefined"&&typeof(m.services)!="undefined"&&m.services!=null){q.services=m.services}if(typeof(d.services)!="undefined"&&d.services!=null){q.services=d.services}var j=d;if(typeof(m)!="undefined"){j=m}if(typeof(j.doNotHash)!="undefined"&&j.doNotHash!=null){q.doNotHash=j.doNotHash}if(typeof(l.via)!="undefined"&&l.via!=null){q.via=l.via}q.service=d.service;q.type=d.type;if(stlib.data){var s=stlib.json.encode(stlib.data.pageInfo);var r=stlib.json.encode(stlib.data.shareInfo);if(stlib.browser.isFirefox()&&!stlib.browser.firefox8Version()){s=encodeURIComponent(encodeURIComponent(s));r=encodeURIComponent(encodeURIComponent(r))}else{s=encodeURIComponent(s);r=encodeURIComponent(r)}q.pageInfo=s;q.shareInfo=r}for(var t in q){var h=document.createElement("input");h.setAttribute("type","hidden");h.setAttribute("name",t);h.setAttribute("value",q[t]);a.appendChild(h)}document.body.appendChild(a);a.submit();return true}if(d.service=="email"){var b,p=0;stlib.browser.mobile.url=f;if(stlib.browser.mobile.sharUrl==null){stlib.browser.mobile.createSharOnPage()}var k=(v!="")?v+"%0A%0a":"{sharURLValue}%0A%0a";if((typeof(l.summary)!="undefined")&&l.summary!=null){k+=l.summary+"%0A%0a"}k+="Sent using ShareThis";var n="mailto:?";n+="subject="+u;n+="&body="+k;b=setInterval(function(){if(stlib.browser.mobile.sharUrl!=null){clearInterval(b);window.location.href=n.replace("{sharURLValue}",stlib.browser.mobile.sharUrl)}if(p>500){clearInterval(b);window.location.href=n.replace("{sharURLValue}",stlib.browser.mobile.sharUrl)}p++},100)}return true};stlib.browser.mobile.createSharOnPage=function(){if(stlib.browser.mobile.url!==""&&stlib.browser.mobile.url!==" "&&stlib.browser.mobile.url!==null&&!stlib.browser.mobile.sharCreated){var a=["return=json","cb=stlib.browser.mobile.createSharOnPage_onSuccess","service=createSharURL","url="+encodeURIComponent(stlib.browser.mobile.url)];a=a.join("&");stlib.scriptLoader.loadJavascript((("https:"==document.location.protocol)?"https://ws.":"http://wd.")+"sharethis.com/api/getApi.php?"+a,function(){})}};stlib.browser.mobile.createSharOnPage_onSuccess=function(a){if(a.status=="SUCCESS"){stlib.browser.mobile.sharCreated=true;stlib.browser.mobile.sharUrl=a.data.sharURL}else{stlib.browser.mobile.sharUrl=stlib.browser.mobile.url}};var tpcCookiesEnableCheckingDone=false;var tpcCookiesEnabledStatus=true;stlib.cookie={setCookie:function(f,o,q){var d=(navigator.userAgent.indexOf("Safari")!=-1&&navigator.userAgent.indexOf("Chrome")==-1);var b=(navigator.userAgent.indexOf("MSIE")!=-1);if(d||b){var s=(q)?q*24*60*60:0;var l=document.createElement("div");l.setAttribute("id",f);l.setAttribute("type","hidden");document.body.appendChild(l);var a=document.getElementById(f),g=document.createElement("form");try{var n=document.createElement('<iframe name="'+f+'" ></iframe>')}catch(m){n=document.createElement("iframe")}n.name=f;n.src="javascript:false";n.style.display="none";a.appendChild(n);g.action=(("https:"==document.location.protocol)?"https://sharethis.com/":"http://sharethis.com/")+"account/setCookie.php";g.method="POST";var k=document.createElement("input");k.setAttribute("type","hidden");k.setAttribute("name","name");k.setAttribute("value",f);g.appendChild(k);var r=document.createElement("input");r.setAttribute("type","hidden");r.setAttribute("name","value");r.setAttribute("value",o);g.appendChild(r);var p=document.createElement("input");p.setAttribute("type","hidden");p.setAttribute("name","time");p.setAttribute("value",s);g.appendChild(p);g.target=f;a.appendChild(g);g.submit()}else{if(q){var j=new Date();j.setTime(j.getTime()+(q*24*60*60*1000));var h="; expires="+j.toGMTString()}else{var h=""}var i=f+"="+escape(o)+h;i+="; domain="+escape(".sharethis.com")+";path=/";document.cookie=i}},setTempCookie:function(f,g,h){if(h){var d=new Date();d.setTime(d.getTime()+(h*24*60*60*1000));var a="; expires="+d.toGMTString()}else{var a=""}var b=f+"="+escape(g)+a;b+="; domain="+escape(".sharethis.com")+";path=/";document.cookie=b},getCookie:function(b){var a=document.cookie.match("(^|;) ?"+b+"=([^;]*)(;|$)");if(a){return(unescape(a[2]))}else{return false}},deleteCookie:function(f){var m="/";var l=".sharethis.com";document.cookie=f.replace(/^\s+|\s+$/g,"")+"="+((m)?";path="+m:"")+((l)?";domain="+l:"")+";expires=Thu, 01-Jan-1970 00:00:01 GMT";var d=(navigator.userAgent.indexOf("Safari")!=-1&&navigator.userAgent.indexOf("Chrome")==-1);var b=(navigator.userAgent.indexOf("MSIE")!=-1);if(d||b){var i=document.createElement("div");i.setAttribute("id",f);i.setAttribute("type","hidden");document.body.appendChild(i);var a=document.getElementById(f),g=document.createElement("form");try{var k=document.createElement('<iframe name="'+f+'" ></iframe>')}catch(j){k=document.createElement("iframe")}k.name=f;k.src="javascript:false";k.style.display="none";a.appendChild(k);g.action=(("https:"==document.location.protocol)?"https://sharethis.com/":"http://sharethis.com/")+"account/deleteCookie.php";g.method="POST";var h=document.createElement("input");h.setAttribute("type","hidden");h.setAttribute("name","name");h.setAttribute("value",f);g.appendChild(h);g.target=f;a.appendChild(g);g.submit()}},deleteAllSTCookie:function(){var f=document.cookie;f=f.split(";");for(var h=0;h<f.length;h++){var d=f[h];d=d.split("=");if(!/st_optout/.test(d[0])){var g=d[0];var k="/";var j=".edge.sharethis.com";document.cookie=g+"=;path="+k+";domain="+j+";expires=Thu, 01-Jan-1970 00:00:01 GMT"}}},setFpcCookie:function(a,i){var d=new Date;var k=d.getFullYear();var h=d.getMonth()+9;var j=d.getDate();var f=a+"="+escape(i);if(k){var b=new Date(k,h,j);f+="; expires="+b.toGMTString()}var g=stlib.cookie.getDomain();f+="; domain="+escape(g)+";path=/";document.cookie=f},getFpcCookie:function(b){var a=document.cookie.match("(^|;) ?"+b+"=([^;]*)(;|$)");if(a){return(unescape(a[2]))}else{return false}},getDomain:function(){var b=document.domain.split(/\./);var a="";if(b.length>1){a="."+b[b.length-2]+"."+b[b.length-1]}return a},checkCookiesEnabled:function(){if(!tpcCookiesEnableCheckingDone){stlib.cookie.setTempCookie("STPC","yes",1);if(stlib.cookie.getCookie("STPC")=="yes"){tpcCookiesEnabledStatus=true}else{tpcCookiesEnabledStatus=false}tpcCookiesEnableCheckingDone=true;return tpcCookiesEnabledStatus}else{return tpcCookiesEnabledStatus}},hasLocalStorage:function(){try{localStorage.setItem("stStorage","yes");localStorage.removeItem("stStorage");return true}catch(a){return false}}};stlib.fpc={cookieName:"__unam",cookieValue:"",createFpc:function(){stlib.fpc.setOptout();if(!document.domain||document.domain.search(/\.gov/)>0){return false}var j=stlib.cookie.getFpcCookie(stlib.fpc.cookieName);if(j==false){var d=Math.round(Math.random()*2147483647);d=d.toString(16);var h=(new Date()).getTime();h=h.toString(16);var g=window.location.hostname.split(/\./)[1];if(!g){return false}var i="";i=stlib.fpc.determineHash(g)+"-"+h+"-"+d+"-1";j=i}else{var b=j;var a=b.split(/\-/);if(a.length==4){var f=Number(a[3]);f++;j=a[0]+"-"+a[1]+"-"+a[2]+"-"+f}}stlib.cookie.setFpcCookie(stlib.fpc.cookieName,j);stlib.fpc.cookieValue=j;return j},setOptout:function(){opt_out=(stlib.cookie.getCookie("st_optout"));stlib.data.set("st_optout",opt_out,"pageInfo")},determineHash:function(b){var g=0;var f=0;for(var d=b.length-1;d>=0;d--){var a=parseInt(b.charCodeAt(d));g=((g<<8)&268435455)+a+(a<<12);if((f=g&161119850)!=0){g=(g^(f>>20))}}return g.toString(16)}};stlib.validate={regexes:{notEncoded:/(%[^0-7])|(%[0-7][^0-9a-f])|["{}\[\]\<\>\\\^`\|]/gi,tooEncoded:/%25([0-7][0-9a-f])/gi,publisher:/^(([a-z]{2}(-|\.))|)[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i,url:/^(http|https):\/\/([a-z0-9!'\(\)\*\.\-\+:]*(\.)[a-z0-9!'\(\)\*\.\-\+:]*)((\/[a-z0-9!'\(\)\*\.\-\+:]*)*)/i,fpc:/^[0-9a-f]{7}-[0-9a-f]{11}-[0-9a-f]{7,8}-[0-9]*$/i,sessionID:/^[0-9]*\.[0-9a-f]*$/i,title:/.*/,description:/.*/,buttonType:/^(chicklet|vcount|hcount|large|custom|button|)$/,comment:/.*/,destination:/.*/,source:/.*/,image:/(^(http|https):\/\/([a-z0-9!'\(\)\*\.\-\+:]*(\.)[a-z0-9!'\(\)\*\.\-\+:]*)((\/[a-z0-9!'\(\)\*\.\-\+:]*)*))|^$/i,sourceURL:/^(http|https):\/\/([a-z0-9!'\(\)\*\.\-\+:]*(\.)[a-z0-9!'\(\)\*\.\-\+:]*)((\/[a-z0-9!'\(\)\*\.\-\+:]*)*)/i,sharURL:/(^(http|https):\/\/([a-z0-9!'\(\)\*\.\-\+:]*(\.)[a-z0-9!'\(\)\*\.\-\+:]*)((\/[a-z0-9!'\(\)\*\.\-\+:]*)*))|^$/i}};stlib.html={encode:function(a){if(stlib.html.startsWith(a,"http")){return String(a).replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}else{return String(a).replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}},startsWith:function(a,b){return(a.match("^"+b)==b)}};stlib.stfp={screenResolutionDepthHash:"ERROR",pluginsListHash:"ERROR",fontsListHash:"ERROR",timezoneoffsetHash:"ERROR",checkIEPlugins:["ShockwaveFlash.ShockwaveFlash","AcroPDF.PDF","PDF.PdfCtrl","QuickTime.QuickTime","rmocx.RealPlayer G2 Control","rmocx.RealPlayer G2 Control.1","RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)","RealVideo.RealVideo(tm) ActiveX Control (32-bit)","RealPlayer","SWCtl.SWCtl","WMPlayer.OCX","AgControl.AgControl","Skype.Detection"],getPluginsHash:function(){var b="";if(stlib.browser.getIEVersion()!=null){for(var a=0;a<stlib.stfp.checkIEPlugins.length;a++){try{new ActiveXObject(stlib.stfp.checkIEPlugins[a]);b+=stlib.stfp.checkIEPlugins[a]+":"}catch(d){}}}if(stlib.browser.getIEVersion()==null||stlib.browser.getIEVersion()>=11){if(((typeof navigator)!="undefined"||navigator!=null)&&((typeof navigator.plugins)!="undefined"||navigator.plugins!=null)){for(var a=0;a<navigator.plugins.length;a++){b+=navigator.plugins[a].name+":"}}}if(b.length>0){stlib.stfp.pluginsListHash=stlib.stfp.getFpHash(b)}},getResolutionDepthHash:function(){if(screen){stlib.stfp.screenResolutionDepthHash=stlib.stfp.getFpHash((((typeof screen.width)!="undefined")?screen.width:"NA")+":"+(((typeof screen.height)!="undefined")?screen.height:"NA")+":"+(((typeof screen.colorDepth)!="undefined")?screen.colorDepth:"NA"))}},getTimezoneOffsetHash:function(){var b=new Date();var a=b.getTimezoneOffset();stlib.stfp.timezoneoffsetHash=stlib.stfp.getFpHash(a.toString())},getFontsHash:function(){var d=false;var h=document;var a=h.createElement("iframe");a.id="st_ifr";a.style.width="0px";a.style.height="0px";a.src="about:blank";var b=stlib.browser.isChrome();var f='<html><head><title>st_bf</title><script type="text/javascript">var stlib1={};stlib1.stfp={fontStr:"",fontsListHash:"ERROR",checkFonts:["Aharoni","algerian","Andalus","\'Angsana New\'","\'Apple Symbols\'","\'Arabic Typesetting\'","Arial","\'Baskerville Old Face\'","Batang","BatangChe","\'Bell MT\'","\'Berlin Sans FB\'","\'Bitstream Charter\'","\'Book Antiqua\'","\'Bookman Old Style\'","\'Bradley Hand ITC\'","Calibri","\'Californian FB\'","\'Cambria Math\'","\'Century Schoolbook\'","\'Century Schoolbook L\'","Charter","\'colonna mt\'","Consolas","Corbel","\'Cordia New\'","Courier","cursive","David","default","DFKai-SB","DilleniaUPC","DotumChe","Ebrima","\'Estrangelo Edessa\'","fantasy","FrankRuehl","Garamond","Gentium","Gungsuh","GungsuhChe","Haettenschweiler","\'Heiti TC\'","\'High Tower Text\'","\'Informal Roman\'","IrisUPC","\'Juice ITC\'","KaiTi","Kalinga","Kartika","Kokonor","Leelawadee","\'Liberation Mono\'","\'Liberation Sans\'","Loma","Magneto","\'Malgun Gothic\'","\'matura mt script capitals\'","\'Microsoft Himalaya\'","\'Microsoft JhengHei\'","\'Microsoft Sans Serif\'","\'Microsoft Uighur\'","\'Microsoft YaHei\'","\'Microsoft Yi Baiti\'","MingLiU","Mistral","Modena","\'Mongolian Baiti\'","\'Monotype Corsiva\'","\'MS Mincho\'","\'MS Outlook\'","\'MS PGothic\'","\'MS PMincho\'","\'MT Extra\'","\'Nimbus Mono L\'","\'Nimbus Sans L\'","NSimSun","Optima","Papyrus","PMingLiU-ExtB","Saab","\'Segoe Print\'","\'Segoe Script\'","\'Showcard Gothic\'","SimHei","\'Simplified Arabic\'","\'Simplified Arabic Fixed\'","SimSun","SimSun-ExtB","Tahoma","\'Traditional Arabic\'","Tunga","Ubuntu","\'URW Gothic L\'","\'URW Palladio L\'","Utopia","Verona","\'Viner Hand ITC\'","Vrinda","webdings","\'wide latin\'","Zapfino"],checkFontsLength:0,baseFonts:["monospace","sans-serif","serif"],baseFontsLength:0,testString:"mmmmmmmmmmlli",testSize:"72px",s:document.createElement("span"),sty:document.createElement("style"),hd:document.head||document.getElementsByTagName("head")[0],defaultWidth:{},defaultHeight:{},';if(b){f+="checkFontForCrome:function(checkFontIndex){var detected = false;var checkElement;for(var baseFontIndex=0;baseFontIndex<stlib1.stfp.baseFontsLength;baseFontIndex++){checkElement = document.getElementById(\"st_check_fonts_\" + checkFontIndex + \"_\" + baseFontIndex);var matched = checkElement.offsetWidth!=stlib1.stfp.defaultWidth[baseFontIndex]||checkElement.offsetHeight!=stlib1.stfp.defaultHeight[baseFontIndex];detected = detected || matched;}return detected;},createFragments:function(){var span, fragment = document.createDocumentFragment();var doc = document;var d = doc.createElement('div');d.className = 'st_fontDetect';var baseFontName, checkFontName, baseElement, checkElement;for(var baseFontIndex=0;baseFontIndex<stlib1.stfp.baseFontsLength;baseFontIndex++){baseFontName = stlib1.stfp.baseFonts[baseFontIndex];baseElement = document.createElement('span');baseElement.style.fontFamily=baseFontName;baseElement.id = \"st_base_fonts_\" + baseFontIndex;baseElement.innerHTML = stlib1.stfp.testString;baseElement.style.fontSize = stlib1.stfp.testSize;fragment.appendChild(baseElement);}for(var checkFontIndex=0;checkFontIndex<stlib1.stfp.checkFontsLength;checkFontIndex++){checkFontName = stlib1.stfp.checkFonts[checkFontIndex];for(var baseFontIndex=0;baseFontIndex<stlib1.stfp.baseFontsLength;baseFontIndex++){baseFontName = stlib1.stfp.baseFonts[baseFontIndex];checkElement = document.createElement('span');checkElement.style.fontFamily= checkFontName + ',' + baseFontName;checkElement.id = \"st_check_fonts_\" + checkFontIndex + \"_\" + baseFontIndex;checkElement.innerHTML = stlib1.stfp.testString;checkElement.style.fontSize = stlib1.stfp.testSize;fragment.appendChild(checkElement);}}d.appendChild(fragment);doc.body.appendChild(d);},"}else{f+='checkFont:function(font){var detected = false;for(var baseFontIndex=0;baseFontIndex<stlib1.stfp.baseFontsLength;baseFontIndex++){stlib1.stfp.s.style.fontFamily = font +"," + stlib1.stfp.baseFonts[baseFontIndex];var matched = stlib1.stfp.s.offsetWidth!=stlib1.stfp.defaultWidth[stlib1.stfp.baseFonts[baseFontIndex]]||stlib1.stfp.s.offsetHeight!=stlib1.stfp.defaultHeight[stlib1.stfp.baseFonts[baseFontIndex]];detected = detected || matched;}return detected;},'}f+='createStyle:function(){var css =".st_fontDetect{display:inline !important}";stlib1.stfp.sty.type="text/css";stlib1.stfp.sty.id="st_style";if(stlib1.stfp.sty.styleSheet){stlib1.stfp.sty.styleSheet.cssText = css;}else{stlib1.stfp.sty.appendChild(document.createTextNode(css))}stlib1.stfp.hd.appendChild(stlib1.stfp.sty)},getFontsHash:function(){var isBodyStyleSet = false;stlib1.stfp.s.className="st_fontDetect";stlib1.stfp.createStyle();stlib1.stfp.s.style.fontSize=stlib1.stfp.testSize;stlib1.stfp.s.innerHTML=stlib1.stfp.testString;stlib1.stfp.baseFontsLength = stlib1.stfp.baseFonts.length;stlib1.stfp.checkFontsLength = stlib1.stfp.checkFonts.length;var bodyDisplay = null;var bodyVisibility = null;if(document.body.style.display==="none"){isBodyStyleSet = true;bodyDisplay = document.body.style.display;bodyVisibility = document.body.style.visibility;document.body.style.display="block";document.body.style.visibility="hidden";}';if(b){f+="stlib1.stfp.createFragments();stlib1.stfp.defaultWidth[0] = document.getElementById('st_base_fonts_0').offsetWidth;stlib1.stfp.defaultHeight[0] = document.getElementById('st_base_fonts_0').offsetHeight;stlib1.stfp.defaultWidth[1] = document.getElementById('st_base_fonts_1').offsetWidth;stlib1.stfp.defaultHeight[1] = document.getElementById('st_base_fonts_1').offsetHeight;stlib1.stfp.defaultWidth[2] = document.getElementById('st_base_fonts_2').offsetWidth;stlib1.stfp.defaultHeight[2] = document.getElementById('st_base_fonts_2').offsetHeight;for(var checkFontIndex=0;checkFontIndex<stlib1.stfp.checkFontsLength;checkFontIndex++){var tempCheckFontName = stlib1.stfp.checkFonts[checkFontIndex];if(stlib1.stfp.checkFontForCrome(checkFontIndex)){stlib1.stfp.fontStr += tempCheckFontName +\":\";}}"}else{f+='for(var baseFontIndex=0;baseFontIndex<stlib1.stfp.baseFontsLength;baseFontIndex++){var tempBaseFontName = stlib1.stfp.baseFonts[baseFontIndex];stlib1.stfp.s.style.fontFamily = tempBaseFontName;document.body.appendChild(stlib1.stfp.s);stlib1.stfp.defaultWidth[tempBaseFontName]=stlib1.stfp.s.offsetWidth;stlib1.stfp.defaultHeight[tempBaseFontName]=stlib1.stfp.s.offsetHeight;document.body.removeChild(stlib1.stfp.s)}stlib1.stfp.s.style.fontFamily="st_font";document.body.appendChild(stlib1.stfp.s);for(var checkFontIndex=0;checkFontIndex<stlib1.stfp.checkFontsLength;checkFontIndex++){var tempCheckFontName = stlib1.stfp.checkFonts[checkFontIndex];if(stlib1.stfp.checkFont(tempCheckFontName)){stlib1.stfp.fontStr += tempCheckFontName +":"}}var sheet = document.getElementById("st_style");sheet.parentNode.removeChild(sheet);document.body.removeChild(stlib1.stfp.s);'}f+='if(isBodyStyleSet){document.body.style.display = bodyDisplay;document.body.style.visibility = bodyVisibility;}}};<\/script></head><body id="st_ifr"><div><script type="text/javascript">stlib1.stfp.getFontsHash();<\/script></div></body></html>';h.body.appendChild(a);try{a.contentWindow.document.open("text/html","replace")}catch(g){if(stlib.browser.getIEVersion()!=null){if(stlib.browser.getIEVersion()<11&&g.message.match(/denied/g)){h.body.removeChild(a);d=true}}}if(!d){a.contentWindow.document.write(f);a.contentWindow.document.close();stlib.stfp.fontsListHash=stlib.stfp.getFpHash(document.getElementById("st_ifr").contentWindow.stlib1.stfp.fontStr);h.body.removeChild(a)}},init:function(){stlib.stfp.getFontsHash()},getFpHash:function(a){var g=0,f=0;for(var d=a.length-1;d>=0;d--){var b=parseInt(a.charCodeAt(d));g=((g<<8)&268435455)+b+(b<<12);if((f=g&161119850)!=0){g=(g^(f>>20))}}return g.toString(16)}};if(typeof(stlib.data)=="undefined"){stlib.data={bInit:false,publisherKeySet:false,pageInfo:{},shareInfo:{},resetPageData:function(){stlib.data.pageInfo.fpc="ERROR";stlib.data.pageInfo.sessionID="ERROR";stlib.data.pageInfo.hostname="ERROR";stlib.data.pageInfo.location="ERROR";stlib.data.pageInfo.product="widget";stlib.data.pageInfo.stid=""},resetShareData:function(){stlib.data.shareInfo={};stlib.data.shareInfo.url="ERROR";stlib.data.shareInfo.sharURL="";stlib.data.shareInfo.buttonType="ERROR";stlib.data.shareInfo.destination="ERROR";stlib.data.shareInfo.source="ERROR"},resetData:function(){stlib.data.resetPageData();stlib.data.resetShareData()},validate:function(){var a=stlib.validate.regexes;function b(g,i){if(i!=encodeURIComponent(i)){a.notEncoded.test(i)?_$de(g+" not encoded"):null;a.tooEncoded.test(i)?_$de(g+" has too much encoding"):null}var h=a[g]?a[g].test(decodeURIComponent(i)):true;if(!h){_$de(g+" failed validation")}}var d=stlib.data.pageInfo;var f;for(f in d){b(f,d[f])}d=stlib.data.shareInfo;for(f in d){b(f,d[f])}},init:function(){if(!stlib.data.bInit){stlib.data.bInit=true;stlib.data.resetData();if(stlib.publisher){stlib.data.setPublisher(stlib.publisher)}stlib.data.set("product",stlib.product,"pageInfo");var i=document.location.href,d="",a="",h=[],l="",k="",f="",b="",g="",j="";h=stlib.data.getRefDataFromUrl(i);if(h.length>0){d=(typeof(h[0])!="undefined")?h[0]:"";a=(typeof(h[1])!="undefined")?h[1]:"";k=stlib.data.removeRefDataFromUrl(i);stlib.data.showModifiedUrl(k);stlib.data.set("url",k,"shareInfo")}else{l=document.referrer;h=l.replace("http://","").replace("https://","").split("/");d=h.shift();a=h.join("/");stlib.data.set("url",i,"shareInfo")}stlib.stfp.getPluginsHash();stlib.stfp.getResolutionDepthHash();stlib.stfp.getTimezoneOffsetHash();stlib.data.set("title",document.title,"shareInfo");if(stlib.data.publisherKeySet!=true){stlib.data.set("publisher","ur.00000000-0000-0000-0000-000000000000","pageInfo")}stlib.fpc.createFpc();stlib.data.set("fpc",stlib.fpc.cookieValue,"pageInfo");g=(new Date()).getTime().toString();j=Number(Math.random().toPrecision(5).toString().substr(2)).toString();stlib.data.set("sessionID",g+"."+j,"pageInfo");stlib.data.set("hostname",document.location.hostname,"pageInfo");stlib.data.set("location",document.location.pathname,"pageInfo");stlib.data.set("refDomain",d,"pageInfo");stlib.data.set("refQuery",a,"pageInfo")}},showModifiedUrl:function(b){if(window.history&&history.replaceState){history.replaceState(null,document.title,b)}else{if((/MSIE/).test(navigator.userAgent)){var h=0,d=window.location.hash,a=new RegExp("(&st_refDomain=?)[^&|]+"),g=new RegExp("(#st_refDomain=?)[^&|]+"),f=document.location.href;if(a.test(f)){h=d.indexOf("&st_refDomain");window.location.hash=d.substr(0,h)}else{if(g.test(f)){window.location.replace("#")}}}else{document.location.replace(b)}}},getRefDataFromUrl:function(b){var f=new RegExp("st_refDomain="),g="",d="",a=[];if(f.test(b)){g=b.match(/(st_refDomain=?)[^\&|]+/g);a.push(g[0].split("=")[1]);d=b.match(/(st_refQuery=?)[^\&|]+/g);a.push(d[0].replace("st_refQuery=",""))}return a},removeRefDataFromUrl:function(b){var g="",d="",a=new RegExp("(&st_refDomain=?)[^&|]+"),f=new RegExp("(#st_refDomain=?)[^&|]+");if(a.test(b)){g=b.replace(/\&st_refDomain=(.*)/g,"")}else{if(f.test(b)){g=b.replace(/\#st_refDomain=(.*)/g,"")}else{g=b}}return g},setPublisher:function(a){stlib.data.set("publisher",a,"pageInfo");stlib.data.publisherKeySet=true},setSource:function(d,a){var b="";if(a){if(a.toolbar){b="toolbar"+d}else{if(a.page&&a.page!="home"&&a.page!=""){b="chicklet"+d}else{b="button"+d}}}else{b=d}stlib.data.set("source",b,"shareInfo")},set:function(a,d,b){if(typeof(d)=="number"||typeof(d)=="boolean"){stlib.data[b][a]=d}else{if(typeof(d)=="undefined"||d==null){}else{stlib.data[b][a]=encodeURIComponent(decodeURIComponent(unescape(d.replace(/<[^<>]*>/gi," ")).replace(/%/gi,"%25")));if(a=="url"||a=="location"||a=="image"){try{stlib.data[b][a]=encodeURIComponent(decodeURIComponent(decodeURI(d.replace(/<[^<>]*>/gi," ")).replace(/%/gi,"%25")))}catch(f){stlib.data[b][a]=encodeURIComponent(decodeURIComponent(unescape(d.replace(/<[^<>]*>/gi," ")).replace(/%/gi,"%25")))}}}}},get:function(a,b){if(stlib.data[b]&&stlib.data[b][a]){return decodeURIComponent(stlib.data[b][a])}else{return false}},unset:function(a,b){if(stlib.data[b]&&typeof(stlib.data[b][a])!="undefined"){delete stlib.data[b][a]}}};stlib.data.resetData()}if(typeof(stlib.pixels)=="undefined"){stlib.pixels={stid:"__stid",getCurrentURL:function(){return window.location.href},trimURL:function(a){return a.split(/\?|\&|\#/)[0]},getReferrerDomain:function(){var a=document.createElement("a");a.href=document.referrer;return a.hostname},getPxcelParams:function(f,d,h){var b=stlib.pixels.getCurrentURL();var a=stlib.pixels.trimURL(b);var g=h=="simpleshare"?", htmdmn: 'tm.sharethis.com'":"";return"var pxcelData = { v0: '"+encodeURIComponent(f)+"', v1: '"+encodeURIComponent(stlib.pixels.getReferrerDomain())+"', v2: '"+encodeURIComponent("http://seg.sharethis.com/getSegment.php?purl="+encodeURIComponent(a)+"&rnd="+d)+"', v3: '"+encodeURIComponent(a)+"', v4: '"+encodeURIComponent(b)+"'"+g+" };"},getRnd:function(){return(new Date()).getTime()},getPxcelTag:function(d,h){var b=stlib.pixels.getRnd();var f=stlib.pixels.getPxcelParams(d,b,h);var a=window.top.location===window.location?window.location.toString():document.referrer;var g=a.split("/")[2];return"<script>"+f+"(function() { var pxscrpt = document.createElement('script'); pxscrpt.id = 'pxscrpt'; pxscrpt.async = true; pxscrpt.defer = true; pxscrpt.src = '//t.sharethis.com/1/d/t.dhj?rnd="+b+"&cid=c010&dmn="+g+"';document.body.appendChild(pxscrpt);})();<\/script>"},getComscoreTag:function(){return'<script type="text/javascript">var ref=document.referrer;var lurl = (("https:" == document.location.protocol) ? "https://sb." : "http://b.")+"scorecardresearch.com/";lurl+="b?";lurl+="c1=7"+"&c2=8097938"+"&rn=" +Math.round(Math.random() * 2147483647 )+ "&c7=" + encodeURIComponent(document.location.href)+ "&c3=8097938"+ "&c8="+encodeURIComponent(document.title)+ ( (ref)? "&c9="+encodeURIComponent(document.referrer) :  "" )+ "&cv=2.2"+ "&cs=js";var logger = new Image(1,1);logger.src = lurl;logger.onload = function(){return;};<\/script>'},getCookie:function(d){var b="(?:(?:^|.*;)\\s*"+d+"\\s*\\=\\s*([^;]*).*$)|^.*$";var a=new RegExp(b,"g");return document.cookie.replace(a,"$1")},isCookieSet:function(a){return stlib.pixels.getCookie(a)!==""},setAxciomCookie:function(f){var d=new Date;var b="__stacxiommap="+encodeURIComponent(f);var a=new Date(d.getTime()+(86400000));b+="; expires="+a.toGMTString();document.cookie=b},hasStid:function(){return stlib.pixels.isCookieSet(stlib.pixels.stid)},hasAcxiomCookie:function(){return stlib.pixels.isCookieSet("__stacxiommap")},fireLR:function(a,b){if(stlib.pixels.hasAcxiomCookie()||b=="simpleshare"){return""}else{stlib.pixels.setAxciomCookie(a);return'<img src="'+location.protocol+"//idsync.rlcdn.com/386076.gif?partner_uid="+a+'" alt=""/>'}},getIframeContents:function(a,b){return"<!DOCTYPE html><html><head><title>ShareThis Segmenter</title></head><body>"+stlib.pixels.getPxcelTag(a,b)+stlib.pixels.getComscoreTag()+stlib.pixels.fireLR(a,b)+"</body></html>"},createSegmentFrame:function(f){if(stlib.pixels.segmentframe||document.getElementById("stSegmentFrame")){return}try{stlib.pixels.segmentframe=document.createElement('<iframe name="stframe" allowTransparency="true" style="body{background:transparent;}" ></iframe>')}catch(d){stlib.pixels.segmentframe=document.createElement("iframe")}stlib.pixels.segmentframe.id="stSegmentFrame";stlib.pixels.segmentframe.name="stSegmentFrame";var g=document.head;stlib.pixels.segmentframe.frameBorder="0";stlib.pixels.segmentframe.scrolling="no";stlib.pixels.segmentframe.width="0px";stlib.pixels.segmentframe.height="0px";stlib.pixels.segmentframe.sandbox="allow-scripts allow-same-origin";stlib.pixels.segmentframe.setAttribute("style","display:none;");var b=stlib.data.get("stid","pageInfo");if(b){var a=stlib.pixels.getIframeContents(b,f);g.appendChild(stlib.pixels.segmentframe);stlib.pixels.segmentframe.contentWindow.document.open();stlib.pixels.segmentframe.contentWindow.document.write(a);stlib.pixels.segmentframe.contentWindow.document.close()}else{stlib.pixels.segmentframe.src=(("https:"==document.location.protocol)?"https://seg.":"http://seg.")+"sharethis.com/getSegment.php?purl="+encodeURIComponent(document.location.href)+"&jsref="+encodeURIComponent(document.referrer)+"&product="+f+"&rnd="+(new Date()).getTime();g.appendChild(stlib.pixels.segmentframe)}}}}stlib.hash={doNotHash:true,hashAddressBar:false,doNotCopy:true,prefix:"sthash",shareHash:"",incomingHash:"",validChars:["1","2","3","4","5","6","7","8","9","0","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"],servicePreferences:{linkedin:"param",stumbleupon:"param",bebo:"param"},hashDestination:function(b){if(b=="copy"){return"dpuf"}var d=b.substring(0,2)+b.substring(b.length-2,b.length);var a=function(f,g){if(f.charCodeAt(g)==122){return"a"}return String.fromCharCode(f.charCodeAt(g)+1)};return a(d,0)+a(d,1)+a(d,2)+a(d,3)},getHash:function(){var d=false;var b="";var f=document.location.href;f=f.split("#").shift();var a=f.split("?");if(a.length>1){a=a[1].split("&");for(arg in a){try{if(a[arg].substring(0,6)=="sthash"){d=true;b=a[arg]}}catch(g){}}if(d){return b}else{return document.location.hash.substring(1)}}else{return document.location.hash.substring(1)}},stripHash:function(a){var b=a;b=b.split("#");if(b.length>1){return b[1]}else{return""}},clearHash:function(){if(stlib.hash.validateHash(document.location.hash)){var a=document.location.href.split("#").shift();if(window.history&&history.replaceState){history.replaceState(null,document.title,a)}else{if((/MSIE/).test(navigator.userAgent)){window.location.replace("#")}else{document.location.hash=""}}}},init:function(){var b="";var a=stlib.hash.validChars.length;for(var g=0;g<8;g++){b+=stlib.hash.validChars[Math.random()*a|0]}if(stlib.hash.getHash()==""){stlib.hash.shareHash=stlib.hash.prefix+"."+b}else{var d=stlib.hash.getHash().split(".");var f=d.shift();if(f==stlib.hash.prefix||f==stlib.hash.prefix){stlib.hash.incomingHash=stlib.hash.getHash();stlib.hash.shareHash=stlib.hash.prefix+"."+d.shift()+"."+b}else{stlib.hash.shareHash=stlib.hash.prefix+"."+b}}if(!stlib.hash.doNotHash&&stlib.hash.hashAddressBar){if(document.location.hash==""||stlib.hash.validateHash(document.location.hash)){if(window.history&&history.replaceState){history.replaceState(null,"ShareThis","#"+stlib.hash.shareHash+".dpbs")}else{if((/MSIE/).test(navigator.userAgent)){window.location.replace("#"+stlib.hash.shareHash+".dpbs")}else{document.location.hash=stlib.hash.shareHash+".dpbs"}}}}else{stlib.hash.clearHash()}if(!stlib.hash.doNotHash&&!stlib.hash.doNotCopy){stlib.hash.copyPasteInit()}stlib.hash.copyPasteLog()},checkURL:function(){var b=stlib.data.get("destination","shareInfo");var h=stlib.hash.updateParams(b);var f="."+stlib.hash.hashDestination(b);stlib.hash.updateDestination(f);if(!stlib.hash.doNotHash&&typeof(stlib.data.pageInfo.shareHash)!="undefined"){var d=stlib.data.get("url","shareInfo");var i=stlib.hash.stripHash(d);if(stlib.hash.validateHash(i)||i==""){if(typeof(stlib.hash.servicePreferences[b])!="undefined"){if(stlib.hash.servicePreferences[b]=="param"){_$d1("Don't use hash, use params");_$d2(h);if(h.split("?").length>1){var g=h.split("?")[1].split("&");var j=false;for(var a=0;a<g.length;a++){if(g[a].split(".")[0]=="sthash"){j=true}}if(j){stlib.data.set("url",h,"shareInfo")}else{stlib.data.set("url",h+"&"+stlib.data.pageInfo.shareHash,"shareInfo")}}else{stlib.data.set("url",h+"?"+stlib.data.pageInfo.shareHash,"shareInfo")}if(b=="linkedin"){if(stlib.data.get("sharURL","shareInfo")!=""){stlib.data.set("sharURL",stlib.data.get("url","shareInfo"),"shareInfo")}}}else{_$d1("Using Hash");stlib.data.set("url",h+"#"+stlib.data.pageInfo.shareHash,"shareInfo")}}else{_$d1("Not using custom destination hash type");stlib.data.set("url",h+"#"+stlib.data.pageInfo.shareHash,"shareInfo")}}}},updateParams:function(a){var h=stlib.data.get("url","shareInfo").split("#").shift();var g=/(\?)sthash\.[a-zA-z0-9]{8}\.[a-zA-z0-9]{8}/;var f=/(&)sthash\.[a-zA-z0-9]{8}\.[a-zA-z0-9]{8}/;var d=/(\?)sthash\.[a-zA-z0-9]{8}/;var b=/(&)sthash\.[a-zA-z0-9]{8}/;if(g.test(h)){h=h.replace(g,"?"+stlib.data.pageInfo.shareHash)}else{if(f.test(h)){h=h.replace(f,"&"+stlib.data.pageInfo.shareHash)}else{if(d.test(h)){h=h.replace(d,"?"+stlib.data.pageInfo.shareHash)}else{if(b.test(h)){h=h.replace(b,"&"+stlib.data.pageInfo.shareHash)}}}}return h},updateDestination:function(b){var a=/sthash\.[a-zA-z0-9]{8}\.[a-zA-z0-9]{8}\.[a-z]{4}/;var d=/sthash\.[a-zA-z0-9]{8}\.[a-z]{4}/;_$d_();_$d1("Updating Destination");if(a.test(stlib.data.pageInfo.shareHash)){_$d2(stlib.data.pageInfo.shareHash.substring(0,24));stlib.data.pageInfo.shareHash=stlib.data.pageInfo.shareHash.substring(0,24)+b}else{if(d.test(stlib.data.pageInfo.shareHash)){_$d2(stlib.data.pageInfo.shareHash.substring(0,15));stlib.data.pageInfo.shareHash=stlib.data.pageInfo.shareHash.substring(0,15)+b}else{stlib.data.pageInfo.shareHash+=b}}},validateHash:function(a){var b=/[\?#&]?sthash\.[a-zA-z0-9]{8}\.[a-zA-z0-9]{8}$/;var d=/[\?#&]?sthash\.[a-zA-z0-9]{8}\.[a-zA-z0-9]{8}\.[a-z]{4}$/;var f=/[\?#&]?sthash\.[a-zA-z0-9]{8}\.[a-z]{4}$/;var g=/[\?#&]?sthash\.[a-zA-z0-9]{8}$/;return g.test(a)||f.test(a)||d.test(a)||b.test(a)},appendHash:function(a){var b=stlib.hash.stripHash(a);if(stlib.data.pageInfo.shareHash&&(stlib.hash.validateHash(b)||b=="")){a=a.replace("#"+b,"")+"#"+stlib.data.pageInfo.shareHash}else{}return a},copyPasteInit:function(){var a=document.getElementsByTagName("body")[0];var d=document.createElement("div");d.id="stcpDiv";d.style.position="absolute";d.style.top="-1999px";d.style.left="-1988px";a.appendChild(d);d.innerHTML="ShareThis Copy and Paste";var b=document.location.href.split("#").shift();var f="#"+stlib.hash.shareHash;if(document.addEventListener){a.addEventListener("copy",function(j){if(typeof(Tynt)!="undefined"){return}var i=document.getSelection();if(i.isCollapsed){return}var h=i.getRangeAt(0).cloneContents();d.innerHTML="";d.appendChild(h);if(d.textContent.trim().length==0){return}if((i+"").trim().length==0){}else{if(d.innerHTML==(i+"")||d.textContent==(i+"")){d.innerHTML=stlib.html.encode(stlib.hash.selectionModify(i))}else{d.innerHTML+=stlib.html.encode(stlib.hash.selectionModify(i,true))}}var g=document.createRange();g.selectNodeContents(d);var k=i.getRangeAt(0);i.removeAllRanges();i.addRange(g);setTimeout(function(){i.removeAllRanges();i.addRange(k)},0)},false)}else{if(document.attachEvent){}}},copyPasteLog:function(){var d=window.addEventListener?"addEventListener":"attachEvent";var b=d=="attachEvent"?"oncopy":"copy";var a=document.getElementsByTagName("body")[0];if(a){a[d](b,function(g){var f=true;stlib.data.resetShareData();stlib.data.set("url",document.location.href,"shareInfo");stlib.data.setSource("copy");stlib.data.set("destination","copy","shareInfo");stlib.data.set("buttonType","custom","shareInfo");if(typeof(Tynt)!="undefined"){stlib.data.set("result","tynt","shareInfo");stlib.logger.log("debug");f=false}if(typeof(addthis_config)!="undefined"){stlib.data.set("result","addThis","shareInfo");if(typeof(addthis_config.data_track_textcopy)=="undefined"||addthis_config.data_track_textcopy){stlib.data.set("enabled","true","shareInfo");f=false}else{stlib.data.set("enabled","false","shareInfo")}stlib.logger.log("debug")}if(f){stlib.data.set("result","pass","shareInfo");stlib.logger.log("debug")}},false)}},logCopy:function(a,b){stlib.data.resetShareData();stlib.data.set("url",a,"shareInfo");stlib.data.setSource("copy");stlib.data.set("destination","copy","shareInfo");stlib.data.set("buttonType","custom","shareInfo");if(b){stlib.data.set("description",b,"shareInfo")}stlib.sharer.share()},selectionModify:function(p,n){p=""+p;_$d_();_$d1("Copy Paste");var o=/^((http|https):\/\/([a-z0-9!'\(\)\*\.\-\+:]*(\.)[a-z0-9!'\(\)\*\.\-\+:]*)((\/[a-z0-9!'\(\)\*\.\-\+:]*)*))/i;var i=/^([a-z0-9!'\(\)\*\.\-\+:]*(\.)[a-z0-9!'\(\)\*\.\-\+:]*)((\/[a-z0-9!'\(\)\*\.\-\+:]*)*)/i;var g=/^\+?1?[\.\-\\)_\s]?[\\(]?[0-9]{3}[\.\-\\)_\s]?[0-9]{3}[\.\-_\s]?[0-9]{4}$|^[0-9]{3}[\.\-_\s]?[0-9]{4}$/;var k=/^[0-9]{3}[\.\-_\s]?[0-9]{8}$/;var m=/^[0-9]{2}[\.\-_\s]?[0-9]{4}[\.\-_\s]?[0-9]{4}$/;var d=/[\-_\.a-z0-9]+@[\-_\.a-z0-9]+\.[\-_\.a-z0-9]+/i;var h=/[\s@]/;var b=document.location.href.split("#").shift();var j="#"+stlib.hash.shareHash;var a="";var l="";var f="";if(typeof(n)=="undefined"&&((o.test(p)||i.test(p))&&!h.test(p.trim()))){_$d2("is Url");if(p.match(/#/)==null||stlib.hash.validateHash(p)){l=p.split("#")[0]+j+".dpuf";f=l}else{l=p;f=l}}else{_$d2("is Not Url");if(document.location.hash==""||(/^#$/).test(document.location.hash)||stlib.hash.validateHash(document.location.hash)){l=b+j+".dpuf"}else{l=document.location.href}f=p;if(p.length>50){a=" - See more at: "+l+"";if(!g.test(p)&&!k.test(p)&&!m.test(p)&&!d.test(p)){f+=a}}}if(p.length>140){p=p.substring(0,137)+"..."}stlib.hash.logCopy(l,p);return((n&&n==true)?a:f)}};stlib.pump=function(a,d,f){var b=this;this.isIframeReady=false;this.isIframeSending=false;this.getHash=function(g){var h=g.split("#");h.shift();return h.join("#")};this.broadcastInit=function(g){this.destination=g;_$d_("---------------------");_$d1("Initiating broadcaster:");_$d(this.destination)};this.broadcastSendMessage=function(g){_$d_("---------------------");_$d1("Initiating Send:");if(this.destination===window){if(stlib.browser.ieFallback){window.location.replace(window.location.href.split("#")[0]+"#"+g);_$d2("child can't communicate with parent");return}_$d2("Iframe to publisher: "+g);parent.postMessage("#"+g,document.referrer)}else{_$d2("Publisher to Iframe: "+g);if(stlib.browser.ieFallback){if(this.destination.contentWindow){this.destination.contentWindow.location.replace(this.destination.src+"#"+g);this.isIframeSending=true}return}this.destination.contentWindow.postMessage("#"+g,this.destination.src)}};this.receiverInit=function(i,l){_$d_("---------------------");_$d1("Initiating Receiver:");_$d(i);if(stlib.browser.ieFallback){this.callback=l;this.source=i;if(i===window){window.location.replace(window.location.href.split("#")[0]+"#");this.currentIframe=window.location.hash;var h="receiver"+stlib.functionCount;stlib.functions[h]=function(n){if(""!=window.location.hash&&"#"!=window.location.hash){var m=window.location.hash;n(m);window.location.replace(window.location.href.split("#")[0]+"#")}};stlib.functionCount++;var k="callback"+stlib.functionCount;stlib.functions[k]=l;stlib.functionCount++;setInterval("stlib.functions['"+h+"'](stlib.functions['"+k+"'])",200)}else{}var j=window.addEventListener?"addEventListener":"attachEvent";var g=j=="attachEvent"?"onmessage":"message";window[j](g,function(m){if(i==window){}else{if(m.origin.indexOf("sharethis.com")!=-1){if(m.data.match(/#Pinterest Click/)){stlib.sharer.sharePinterest()}if(m.data.match(/#Print Click/)){stlib.sharer.stPrint()}}}},false);return}var j=window.addEventListener?"addEventListener":"attachEvent";var g=j=="attachEvent"?"onmessage":"message";window[j](g,function(m){if(i==window){_$d1("arrived in iframe from:");_$d(m.origin);if(m.data.match(/#fragmentPump/)||m.data.match(/#Buttons Ready/)||m.data.match(/#Widget Ready/)||m.data.indexOf("#light")==0||m.data.indexOf("#widget")==0||m.data.indexOf("#popup")==0||m.data.indexOf("#show")==0||m.data.indexOf("#init")==0||m.data.indexOf("#test")==0||m.data.indexOf("#data")==0){l(m.data)}}else{if(m.origin.indexOf("sharethis.com")!=-1){_$d1("arrived in parent from:");_$d(m.origin);if(m.data.match(/#fragmentPump/)||m.data.match(/#Buttons Ready/)||m.data.match(/#Widget Ready/)||m.data.indexOf("#light")==0||m.data.indexOf("#widget")==0||m.data.indexOf("#popup")==0||m.data.indexOf("#show")==0||m.data.indexOf("#init")==0||m.data.indexOf("#test")==0||m.data.indexOf("#data")==0){l(m.data)}else{if(m.data.match(/#Pinterest Click/)){stlib.sharer.sharePinterest()}else{if(m.data.match(/#Print Click/)){stlib.sharer.stPrint()}}}}else{_$d1("discarded event from:");_$d(m.origin)}}},false)};this.broadcastInit(a);this.receiverInit(d,f)};stlib.json={c:{"\b":"b","\t":"t","\n":"n","\f":"f","\r":"r",'"':'"',"\\":"\\","/":"/"},d:function(a){return a<10?"0".concat(a):a},e:function(c,f,e){e=eval;delete eval;if(typeof eval==="undefined"){eval=e}f=eval(""+c);eval=e;return f},i:function(d,b,a){return 1*d.substr(b,a)},p:["","000","00","0",""],rc:null,rd:/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}$/,rs:/(\x5c|\x2F|\x22|[\x0c-\x0d]|[\x08-\x0a])/g,rt:/^([0-9]+|[0-9]+[,\.][0-9]{1,3})$/,ru:/([\x00-\x07]|\x0b|[\x0e-\x1f])/g,s:function(a,b){return"\\".concat(stlib.json.c[b])},u:function(a,b){var f=b.charCodeAt(0).toString(16);return"\\u".concat(stlib.json.p[f.length],f)},v:function(b,a){return stlib.json.types[typeof result](result)!==Function&&(a.hasOwnProperty?a.hasOwnProperty(b):a.constructor.prototype[b]!==a[b])},types:{"boolean":function(){return Boolean},"function":function(){return Function},number:function(){return Number},object:function(a){return a instanceof a.constructor?a.constructor:null},string:function(){return String},"undefined":function(){return null}},$$:function(a){function b(g,d){d=g[a];delete g[a];try{stlib.json.e(g)}catch(f){g[a]=d;return 1}}return b(Array)&&b(Object)},encode:function(){var d=arguments.length?arguments[0]:this,a,l;if(d===null){a="null"}else{if(d!==undefined&&(l=stlib.json.types[typeof d](d))){switch(l){case Array:a=[];for(var h=0,f=0,b=d.length;f<b;f++){if(d[f]!==undefined&&(l=stlib.json.encode(d[f]))){a[h++]=l}}a="[".concat(a.join(","),"]");break;case Boolean:a=String(d);break;case Date:a='"'.concat(d.getFullYear(),"-",stlib.json.d(d.getMonth()+1),"-",stlib.json.d(d.getDate()),"T",stlib.json.d(d.getHours()),":",stlib.json.d(d.getMinutes()),":",stlib.json.d(d.getSeconds()),'"');break;case Function:break;case Number:a=isFinite(d)?String(d):"null";break;case String:a='"'.concat(d.replace(stlib.json.rs,stlib.json.s).replace(stlib.json.ru,stlib.json.u),'"');break;default:var h=0,g;a=[];for(g in d){if(d[g]!==undefined&&(l=stlib.json.encode(d[g]))){a[h++]='"'.concat(g.replace(stlib.json.rs,stlib.json.s).replace(stlib.json.ru,stlib.json.u),'":',l)}}a="{".concat(a.join(","),"}");break}}}return a},decode:function(a){if(typeof(a)=="string"){var d=null;try{if(/^[\],:{}\s]*$/.test(a.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){d=window.JSON&&window.JSON.parse?window.JSON.parse(a):(new Function("return "+a))();return d}else{return null}}catch(b){}}}};try{stlib.json.rc=new RegExp('^("(\\\\.|[^"\\\\\\n\\r])*?"|[,:{}\\[\\]0-9.\\-+Eaeflnr-u \\n\\r\\t])+?$')}catch(z){stlib.json.rc=/^(true|false|null|\[.*\]|\{.*\}|".*"|\d+|\d+\.\d+)$/}stlib.logger={loggerUrl:(("https:"==document.location.protocol)?"https://":"http://")+"l.sharethis.com/",l2LoggerUrl:(("https:"==document.location.protocol)?"https://":"http://")+"l2.sharethis.com/",productArray:new Array(),version:"",lang:"en",isFpEvent:false,constructParamString:function(){var a=stlib.data.pageInfo;var d="";var b;for(b in a){if(!stlib.logger.isFpEvent&&(b=="ufa"||b=="ufb"||b=="ufc"||b=="ufd")){continue}d+=b+"="+a[b]+"&"}a=stlib.data.shareInfo;for(b in a){d+=b+"="+a[b]+"&"}return d.substring(0,d.length-1)},log:function(a,k,m){if(a=="pview"||a=="share"||a=="onload"){stlib.logger.isFpEvent=true;if(stlib.stfp.screenResolutionDepthHash!="ERROR"){stlib.data.set("ufa",stlib.stfp.screenResolutionDepthHash,"pageInfo")}if(stlib.stfp.pluginsListHash!="ERROR"){stlib.data.set("ufb",stlib.stfp.pluginsListHash,"pageInfo")}if(stlib.stfp.fontsListHash!="ERROR"){stlib.data.set("ufc",stlib.stfp.fontsListHash,"pageInfo")}if(stlib.stfp.timezoneoffsetHash!="ERROR"){stlib.data.set("ufd",stlib.stfp.timezoneoffsetHash,"pageInfo")}}else{stlib.logger.isFpEvent=false}if(typeof(stlib.data.get("counter","shareInfo"))!="undefined"){var i=0;if(stlib.data.get("counter","shareInfo")){i=stlib.data.get("counter","shareInfo")}stlib.data.set("ts"+new Date().getTime()+"."+i,"","shareInfo");stlib.data.unset("counter","shareInfo")}else{stlib.data.set("ts"+new Date().getTime(),"","shareInfo")}if(a=="widget"){var l="."+stlib.hash.hashDestination(stlib.data.shareInfo.destination);stlib.hash.updateDestination(l)}if(!k||(k!=stlib.logger.loggerUrl&&k!=stlib.logger.l2LoggerUrl)){k=stlib.logger.loggerUrl}var b=(a=="pview"||a=="onload")?a:((a=="debug")?"cns":"log");if(a=="pview"||a=="onload"){var j=k+b+"?event="+a+"&test=pxexp&version="+stlib.logger.version+"&lang="+stlib.logger.lang+"&"+stlib.logger.constructParamString()}else{if(a=="error"){var j=k+"pview?event=pview&test=error&version="+stlib.logger.version+"&lang="+stlib.logger.lang+"&"+stlib.logger.constructParamString()}else{var j=k+b+"?event="+a+"&"+stlib.logger.constructParamString()}}if(a=="pview"){var f=k+"onscript?event=onscript&test=pxexp&version="+stlib.logger.version+"&lang="+stlib.logger.lang+"&"+stlib.logger.constructParamString();var h=new Image(1,1);h.src=f;h.onload=function(){return};m?m():null}try{var d=new XMLHttpRequest();d.open("GET",j,true);d.withCredentials=true;d.onreadystatechange=function(){if(this.readyState==this.HEADERS_RECEIVED){var n=d.getResponseHeader("stid");stlib.data.set("stid",n,"pageInfo");m?m():null}};d.send()}catch(g){var h=new Image(1,1);h.src=j;h.onload=function(){return};m?m():null}}};stlib.logger.version="buttons.js";var customProduct="widget";if(typeof(stLight)=="undefined"&&typeof(SHARETHIS)=="undefined"){var stWidgetVersion=false;if(typeof(switchTo5x)=="undefined"){stWidgetVersion="4x"}else{if(switchTo5x==false){stWidgetVersion="4x"}if(switchTo5x==true){stWidgetVersion="5xa"}}stLight=new function(){this.version=false;this.publisher=null;this.sessionID_time=(new Date()).getTime().toString();this.sessionID_rand=Number(Math.random().toPrecision(5).toString().substr(2)).toString();this.sessionID=this.sessionID_time+"."+this.sessionID_rand;this.fpc=null;this.counter=0;this.readyRun=false;this.meta={hostname:document.location.host,location:document.location.pathname};this.loadedFromBar=false;this.clickCallBack=false};stLight.loadDefault=function(){if(typeof(customProduct)=="undefined"){this.product="DOS2"}else{this.product=customProduct}this.source="DOS2";this.version="st_insights.js"};stLight.options=function(a){this.loadDefault();if(a&&a.publisher){stLight.setPublisher(a.publisher)}if(a&&a.refDomain){stLight.setRefDomain(a.refDomain)}stlib.logger.productArray=[];if(a&&a.product){stLight.setProduct(a.product)}else{stLight.setProduct(stLight.product)}if(a&&typeof(a.hashAddressBar)!="undefined"){stlib.hash.hashAddressBar=a.hashAddressBar}if(a&&typeof(a.doNotHash)!="undefined"){stlib.hash.doNotHash=a.doNotHash}if(a&&typeof(a.doNotCopy)!="undefined"){stlib.hash.doNotCopy=a.doNotCopy}stlib.stLightOptionsObj=a};stLight.onReady=function(){if(stLight.readyRun==true){return false}stLight.loadFromScript();stLight.readyRun=true;stlib.data.init();stlib.stfp.init();stLight.fpc=stlib.data.get("fpc","pageInfo");if(stLight.publisher==null){if(typeof(window.console)!=="undefined"){try{console.debug("Please specify a ShareThis Publisher Key \nFor help, contact support@sharethis.com")}catch(a){}}}stLight.setProduct(stLight.product);stlib.logger.lang="en";stLight.log("onload")};stLight.log=function(a){stlib.data.resetShareData();stlib.data.setSource(stLight.getSource());stlib.data.set("url",document.location.href,"shareInfo");stlib.data.set("title",document.title,"shareInfo");stlib.data.set("counter",stLight.counter++,"shareInfo");stlib.logger.log(a)};if(window.document.readyState=="completed"){stLight.onReady()}else{if(typeof(window.addEventListener)!="undefined"){window.addEventListener("load",stLight.onReady,false)}else{if(typeof(document.addEventListener)!="undefined"){document.addEventListener("load",stLight.onReady,false)}else{if(typeof window.attachEvent!="undefined"){window.attachEvent("onload",stLight.onReady)}}}}stLight.setPublisher=function(a){stlib.data.setPublisher(a);stLight.publisher=a};stLight.setRefDomain=function(a){stlib.data.setRefDomain(a)};stLight.setProduct=function(a){this.product=a;stlib.data.set("product",a,"pageInfo")};stLight.getProduct=function(){return this.product};stLight.getSource=function(){var a="share4x";if(stWidgetVersion=="5xa"){a="share5x"}return a}}stLight.getUrlSearchParam=function(){var a=window.location.search.substring(1);return a.split("&")};stLight.getUrlQueryParams=function(a){var d={};var b=a.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(f,g,h){d[g]=h});return d};stLight.getScriptSrcParams=function(b){var a=document.getElementById(b);if(a){return stLight.getUrlQueryParams(a.src)}};stLight.setParams=function(a){if(a){if(a.refdomain){stLight.setRefDomain(a.refdomain)}if(a.publisher){stLight.setPublisher(a.publisher)}if(a.product){stLight.setProduct(a.product)}}};stLight.loadFromScript=function(){var a=stLight.getScriptSrcParams("st_insights_js");stLight.setParams(a)};stLight.loadFromWindowLocation=function(){var a=stLight.getUrlSearchParam();stLight.setParams(a)};stLight.onDomContentLoaded=function(){stLight.onReady()};stLight.domReady=function(){stLight.onReady()};st_showing=false;stLight.clickSubscribers=[];stLight.nonClickSubscribers=[];if(window.document.readyState=="completed"){stLight.domReady()}else{if(typeof(window.addEventListener)!="undefined"){window.addEventListener("load",stLight.domReady,false)}else{if(typeof(document.addEventListener)!="undefined"){document.addEventListener("load",stLight.domReady,false)}else{if(typeof window.attachEvent!="undefined"){window.attachEvent("onload",stLight.domReady)}}}}if(typeof(__st_loadLate)=="undefined"){if(typeof(window.addEventListener)!="undefined"){window.addEventListener("DOMContentLoaded",stLight.onDomContentLoaded,false)}else{if(typeof(document.addEventListener)!="undefined"){document.addEventListener("DOMContentLoaded",stLight.onDomContentLoaded,false)}}}else{if(typeof(window.addEventListener)!="undefined"){window.addEventListener("DOMContentLoaded",stLight.onDomContentLoadedLazy,false)}else{if(typeof(document.addEventListener)!="undefined"){document.addEventListener("DOMContentLoaded",stLight.onDomContentLoadedLazy,false)}}}if(document.readyState=="complete"&&stLight.readyRun==false){stLight.domReady()}var stButtons=stButtons||{};stButtons.getCount=function(d,a,f){var b=false;if(f&&f!==null){while(f.childNodes.length>=1){try{f.removeChild(f.firstChild)}catch(g){}}}document.addEventListener("on_async_buttons_load",function(){stButtons=async_buttons.stButtons;stButtons.cbQueue.push({url:d,service:a,element:f});stButtons.getCountsFromService(d,a,f)},false)};var stWidget=stWidget||{};if(typeof(stWidget.readyRun)=="undefined"){stWidget.addEntry=function(a){document.addEventListener("on_async_buttons_load",function(){stWidget=async_buttons.stWidget;stWidget.addEntry(a)},false)}}stLight.subscribe=function(b,a){document.addEventListener("on_async_buttons_load",function(){stButtonsLib.subscribe(b,a)},false)};if(!stlib.onscriptload&&document.URL.indexOf("edge.sharethis.com")==-1){try{stlib.data.init();stlib.onscriptload=true;var product=stlib.data.get("product","pageInfo");if(stlib.logger.version=="buttons.js"||product=="simpleshare"){stlib.logger.log("pview",null,function(){stlib.pixels.createSegmentFrame(product)})}else{stlib.logger.log("pview")}}catch(e){stlib.logger.log("error")}}stlib.scriptLoader={loadJavascript:function(b,d){_$d_();_$d1("Loading JS: "+b);var a=stlib.scriptLoader;a.head=document.getElementsByTagName("head")[0];a.scriptSrc=b;a.script=document.createElement("script");a.script.setAttribute("type","text/javascript");a.script.setAttribute("src",a.scriptSrc);a.script.async=true;if(window.attachEvent&&document.all){a.script.onreadystatechange=function(){if(this.readyState=="complete"||this.readyState=="loaded"){d()}}}else{a.script.onload=d}a.s=document.getElementsByTagName("script")[0];a.s.parentNode.insertBefore(a.script,a.s)},loadCSS:function(b,f){_$d_();_$d1("Loading CSS: "+b);var a=stlib.scriptLoader;var d;a.head=document.getElementsByTagName("head")[0];a.cssSrc=b;a.css=document.createElement("link");a.css.setAttribute("rel","stylesheet");a.css.setAttribute("type","text/css");a.css.setAttribute("href",b);a.css.setAttribute("id",b);setTimeout(function(){f();if(!document.getElementById(b)){d=setInterval(function(){if(document.getElementById(b)){clearInterval(d);f()}},100)}},100);a.head.appendChild(a.css)}};

/**
 * Swiper 3.4.0
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * 
 * http://www.idangero.us/swiper/
 * 
 * Copyright 2016, Vladimir Kharlampidi
 * The iDangero.us
 * http://www.idangero.us/
 * 
 * Licensed under MIT
 * 
 * Released on: October 16, 2016
 */
(function () {
    'use strict';
    var $;
    /*===========================
    Swiper
    ===========================*/
    var Swiper = function (container, params) {
        if (!(this instanceof Swiper)) return new Swiper(container, params);

        var defaults = {
            direction: 'horizontal',
            touchEventsTarget: 'container',
            initialSlide: 0,
            speed: 300,
            // autoplay
            autoplay: false,
            autoplayDisableOnInteraction: true,
            autoplayStopOnLast: false,
            // To support iOS's swipe-to-go-back gesture (when being used in-app, with UIWebView).
            iOSEdgeSwipeDetection: false,
            iOSEdgeSwipeThreshold: 20,
            // Free mode
            freeMode: false,
            freeModeMomentum: true,
            freeModeMomentumRatio: 1,
            freeModeMomentumBounce: true,
            freeModeMomentumBounceRatio: 1,
            freeModeMomentumVelocityRatio: 1,
            freeModeSticky: false,
            freeModeMinimumVelocity: 0.02,
            // Autoheight
            autoHeight: false,
            // Set wrapper width
            setWrapperSize: false,
            // Virtual Translate
            virtualTranslate: false,
            // Effects
            effect: 'slide', // 'slide' or 'fade' or 'cube' or 'coverflow' or 'flip'
            coverflow: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true
            },
            flip: {
                slideShadows : true,
                limitRotation: true
            },
            cube: {
                slideShadows: true,
                shadow: true,
                shadowOffset: 20,
                shadowScale: 0.94
            },
            fade: {
                crossFade: false
            },
            // Parallax
            parallax: false,
            // Zoom
            zoom: false,
            zoomMax: 3,
            zoomMin: 1,
            zoomToggle: true,
            // Scrollbar
            scrollbar: null,
            scrollbarHide: true,
            scrollbarDraggable: false,
            scrollbarSnapOnRelease: false,
            // Keyboard Mousewheel
            keyboardControl: true,
            mousewheelControl: true,
            mousewheelReleaseOnEdges: false,
            mousewheelInvert: false,
            mousewheelForceToAxis: false,
            mousewheelSensitivity: 1,
            mousewheelEventsTarged: 'container',
            // Hash Navigation
            hashnav: false,
            hashnavWatchState: false,
            // History
            history: false,
            // Commong Nav State
            replaceState: false,
            // Breakpoints
            breakpoints:  { 1024:   { slidesPerView: 4 },
                            768:    { slidesPerView: 3 },
                            640:    { slidesPerView: 2 }
                          },
            // Slides grid
            spaceBetween: 0,
            slidesPerView: 4,
            slidesPerColumn: 1,
            slidesPerColumnFill: 'column',
            slidesPerGroup: 1,
            centeredSlides: false,
            slidesOffsetBefore: 0, // in px
            slidesOffsetAfter: 0, // in px
            // Round length
            roundLengths: false,
            // Touches
            touchRatio: 1,
            touchAngle: 45,
            simulateTouch: true,
            shortSwipes: true,
            longSwipes: true,
            longSwipesRatio: 0.5,
            longSwipesMs: 300,
            followFinger: true,
            onlyExternal: false,
            threshold: 0,
            touchMoveStopPropagation: true,
            touchReleaseOnEdges: false,
            // Unique Navigation Elements
            uniqueNavElements: true,
            // Pagination
            pagination: '.swiper-pagination',
            paginationElement: 'span',
            paginationClickable: true,
            paginationHide: false,
            paginationBulletRender: null,
            paginationProgressRender: null,
            paginationFractionRender: null,
            paginationCustomRender: null,
            paginationType: 'bullets', // 'bullets' or 'progress' or 'fraction' or 'custom'
            // Resistance
            resistance: true,
            resistanceRatio: 0.85,
            // Next/prev buttons
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-next',
            // Progress
            watchSlidesProgress: false,
            watchSlidesVisibility: false,
            // Cursor
            grabCursor: false,
            // Clicks
            preventClicks: true,
            preventClicksPropagation: true,
            slideToClickedSlide: false,
            // Lazy Loading
            lazyLoading: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingInPrevNextAmount: 1,
            lazyLoadingOnTransitionStart: false,
            // Images
            preloadImages: true,
            updateOnImagesReady: true,
            // loop
            loop: true,
            loopAdditionalSlides: 0,
            loopedSlides: null,
            // Control
            control: undefined,
            controlInverse: false,
            controlBy: 'slide', //or 'container'
            normalizeSlideIndex: true,
            // Swiping/no swiping
            allowSwipeToPrev: true,
            allowSwipeToNext: true,
            swipeHandler: null, //'.swipe-handler',
            noSwiping: true,
            noSwipingClass: 'swiper-no-swiping',
            // Passive Listeners
            passiveListeners: true,
            // NS
            containerModifierClass: 'swiper-container-', // NEW
            slideClass: 'swiper-slide',
            slideActiveClass: 'swiper-slide-active',
            slideDuplicateActiveClass: 'swiper-slide-duplicate-active',
            slideVisibleClass: 'swiper-slide-visible',
            slideDuplicateClass: 'swiper-slide-duplicate',
            slideNextClass: 'swiper-slide-next',
            slideDuplicateNextClass: 'swiper-slide-duplicate-next',
            slidePrevClass: 'swiper-slide-prev',
            slideDuplicatePrevClass: 'swiper-slide-duplicate-prev',
            wrapperClass: 'swiper-wrapper',
            bulletClass: 'swiper-pagination-bullet',
            bulletActiveClass: 'swiper-pagination-bullet-active',
            buttonDisabledClass: 'swiper-button-disabled',
            paginationCurrentClass: 'swiper-pagination-current',
            paginationTotalClass: 'swiper-pagination-total',
            paginationHiddenClass: 'swiper-pagination-hidden',
            paginationProgressbarClass: 'swiper-pagination-progressbar',
            paginationClickableClass: 'swiper-pagination-clickable', // NEW
            paginationModifierClass: 'swiper-pagination-', // NEW
            lazyLoadingClass: 'swiper-lazy',
            lazyStatusLoadingClass: 'swiper-lazy-loading',
            lazyStatusLoadedClass: 'swiper-lazy-loaded',
            lazyPreloaderClass: 'swiper-lazy-preloader',
            notificationClass: 'swiper-notification',
            preloaderClass: 'preloader',
            zoomContainerClass: 'swiper-zoom-container',
        
            // Observer
            observer: false,
            observeParents: false,
            // Accessibility
            a11y: false,
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
            firstSlideMessage: 'This is the first slide',
            lastSlideMessage: 'This is the last slide',
            paginationBulletMessage: 'Go to slide {{index}}',
            // Callbacks
            runCallbacksOnInit: true
            /*
            Callbacks:
            onInit: function (swiper)
            onDestroy: function (swiper)
            onClick: function (swiper, e)
            onTap: function (swiper, e)
            onDoubleTap: function (swiper, e)
            onSliderMove: function (swiper, e)
            onSlideChangeStart: function (swiper)
            onSlideChangeEnd: function (swiper)
            onTransitionStart: function (swiper)
            onTransitionEnd: function (swiper)
            onImagesReady: function (swiper)
            onProgress: function (swiper, progress)
            onTouchStart: function (swiper, e)
            onTouchMove: function (swiper, e)
            onTouchMoveOpposite: function (swiper, e)
            onTouchEnd: function (swiper, e)
            onReachBeginning: function (swiper)
            onReachEnd: function (swiper)
            onSetTransition: function (swiper, duration)
            onSetTranslate: function (swiper, translate)
            onAutoplayStart: function (swiper)
            onAutoplayStop: function (swiper),
            onLazyImageLoad: function (swiper, slide, image)
            onLazyImageReady: function (swiper, slide, image)
            */
        
        };
        var initialVirtualTranslate = params && params.virtualTranslate;
        
        params = params || {};
        var originalParams = {};
        for (var param in params) {
            if (typeof params[param] === 'object' && params[param] !== null && !(params[param].nodeType || params[param] === window || params[param] === document || (typeof Dom7 !== 'undefined' && params[param] instanceof Dom7) || (typeof jQuery !== 'undefined' && params[param] instanceof jQuery))) {
                originalParams[param] = {};
                for (var deepParam in params[param]) {
                    originalParams[param][deepParam] = params[param][deepParam];
                }
            }
            else {
                originalParams[param] = params[param];
            }
        }
        for (var def in defaults) {
            if (typeof params[def] === 'undefined') {
                params[def] = defaults[def];
            }
            else if (typeof params[def] === 'object') {
                for (var deepDef in defaults[def]) {
                    if (typeof params[def][deepDef] === 'undefined') {
                        params[def][deepDef] = defaults[def][deepDef];
                    }
                }
            }
        }
        
        // Swiper
        var s = this;
        
        // Params
        s.params = params;
        s.originalParams = originalParams;
        
        // Classname
        s.classNames = [];
        /*=========================
          Dom Library and plugins
          ===========================*/
        if (typeof $ !== 'undefined' && typeof Dom7 !== 'undefined'){
            $ = Dom7;
        }
        if (typeof $ === 'undefined') {
            if (typeof Dom7 === 'undefined') {
                $ = window.Dom7 || window.Zepto || window.jQuery;
            }
            else {
                $ = Dom7;
            }
            if (!$) return;
        }
        // Export it to Swiper instance
        s.$ = $;
        
        /*=========================
          Breakpoints
          ===========================*/
        s.currentBreakpoint = undefined;
        s.getActiveBreakpoint = function () {
            //Get breakpoint for window width
            if (!s.params.breakpoints) return false;
            var breakpoint = false;
            var points = [], point;
            for ( point in s.params.breakpoints ) {
                if (s.params.breakpoints.hasOwnProperty(point)) {
                    points.push(point);
                }
            }
            points.sort(function (a, b) {
                return parseInt(a, 10) > parseInt(b, 10);
            });
            for (var i = 0; i < points.length; i++) {
                point = points[i];
                if (point >= window.innerWidth && !breakpoint) {
                    breakpoint = point;
                }
            }
            return breakpoint || 'max';
        };
        s.setBreakpoint = function () {
            //Set breakpoint for window width and update parameters
            var breakpoint = s.getActiveBreakpoint();
            if (breakpoint && s.currentBreakpoint !== breakpoint) {
                var breakPointsParams = breakpoint in s.params.breakpoints ? s.params.breakpoints[breakpoint] : s.originalParams;
                var needsReLoop = s.params.loop && (breakPointsParams.slidesPerView !== s.params.slidesPerView);
                for ( var param in breakPointsParams ) {
                    s.params[param] = breakPointsParams[param];
                }
                s.currentBreakpoint = breakpoint;
                if(needsReLoop && s.destroyLoop) {
                    s.reLoop(true);
                }
            }
        };
        // Set breakpoint on load
        if (s.params.breakpoints) {
            s.setBreakpoint();
        }
        
        /*=========================
          Preparation - Define Container, Wrapper and Pagination
          ===========================*/
        s.container = $(container);
        if (s.container.length === 0) return;
        if (s.container.length > 1) {
            var swipers = [];
            s.container.each(function () {
                var container = this;
                swipers.push(new Swiper(this, params));
            });
            return swipers;
        }
        
        // Save instance in container HTML Element and in data
        s.container[0].swiper = s;
        s.container.data('swiper', s);
        
        s.classNames.push(s.params.containerModifierClass + s.params.direction);
        
        if (s.params.freeMode) {
            s.classNames.push(s.params.containerModifierClass + 'free-mode');
        }
        if (!s.support.flexbox) {
            s.classNames.push(s.params.containerModifierClass + 'no-flexbox');
            s.params.slidesPerColumn = 1;
        }
        if (s.params.autoHeight) {
            s.classNames.push(s.params.containerModifierClass + 'autoheight');
        }
        // Enable slides progress when required
        if (s.params.parallax || s.params.watchSlidesVisibility) {
            s.params.watchSlidesProgress = true;
        }
        // Max resistance when touchReleaseOnEdges
        if (s.params.touchReleaseOnEdges) {
            s.params.resistanceRatio = 0;
        }
        // Coverflow / 3D
        if (['cube', 'coverflow', 'flip'].indexOf(s.params.effect) >= 0) {
            if (s.support.transforms3d) {
                s.params.watchSlidesProgress = true;
                s.classNames.push(s.params.containerModifierClass + '3d');
            }
            else {
                s.params.effect = 'slide';
            }
        }
        if (s.params.effect !== 'slide') {
            s.classNames.push(s.params.containerModifierClass + s.params.effect);
        }
        if (s.params.effect === 'cube') {
            s.params.resistanceRatio = 0;
            s.params.slidesPerView = 1;
            s.params.slidesPerColumn = 1;
            s.params.slidesPerGroup = 1;
            s.params.centeredSlides = false;
            s.params.spaceBetween = 0;
            s.params.virtualTranslate = true;
            s.params.setWrapperSize = false;
        }
        if (s.params.effect === 'fade' || s.params.effect === 'flip') {
            s.params.slidesPerView = 1;
            s.params.slidesPerColumn = 1;
            s.params.slidesPerGroup = 1;
            s.params.watchSlidesProgress = true;
            s.params.spaceBetween = 0;
            s.params.setWrapperSize = false;
            if (typeof initialVirtualTranslate === 'undefined') {
                s.params.virtualTranslate = true;
            }
        }
        
        // Grab Cursor
        if (s.params.grabCursor && s.support.touch) {
            s.params.grabCursor = false;
        }
        
        // Wrapper
        s.wrapper = s.container.children('.' + s.params.wrapperClass);
        
        // Pagination
        if (s.params.pagination) {
            s.paginationContainer = $(s.params.pagination);
            if (s.params.uniqueNavElements && typeof s.params.pagination === 'string' && s.paginationContainer.length > 1 && s.container.find(s.params.pagination).length === 1) {
                s.paginationContainer = s.container.find(s.params.pagination);
            }
        
            if (s.params.paginationType === 'bullets' && s.params.paginationClickable) {
                s.paginationContainer.addClass(s.params.paginationModifierClass + 'clickable');
            }
            else {
                s.params.paginationClickable = false;
            }
            s.paginationContainer.addClass(s.params.paginationModifierClass + s.params.paginationType);
        }
        // Next/Prev Buttons
        if (s.params.nextButton || s.params.prevButton) {
            if (s.params.nextButton) {
                s.nextButton = $(s.params.nextButton);
                if (s.params.uniqueNavElements && typeof s.params.nextButton === 'string' && s.nextButton.length > 1 && s.container.find(s.params.nextButton).length === 1) {
                    s.nextButton = s.container.find(s.params.nextButton);
                }
            }
            if (s.params.prevButton) {
                s.prevButton = $(s.params.prevButton);
                if (s.params.uniqueNavElements && typeof s.params.prevButton === 'string' && s.prevButton.length > 1 && s.container.find(s.params.prevButton).length === 1) {
                    s.prevButton = s.container.find(s.params.prevButton);
                }
            }
        }
        
        // Is Horizontal
        s.isHorizontal = function () {
            return s.params.direction === 'horizontal';
        };
        // s.isH = isH;
        
        // RTL
        s.rtl = s.isHorizontal() && (s.container[0].dir.toLowerCase() === 'rtl' || s.container.css('direction') === 'rtl');
        if (s.rtl) {
            s.classNames.push(s.params.containerModifierClass + 'rtl');
        }
        
        // Wrong RTL support
        if (s.rtl) {
            s.wrongRTL = s.wrapper.css('display') === '-webkit-box';
        }
        
        // Columns
        if (s.params.slidesPerColumn > 1) {
            s.classNames.push(s.params.containerModifierClass + 'multirow');
        }
        
        // Check for Android
        if (s.device.android) {
            s.classNames.push(s.params.containerModifierClass + 'android');
        }
        
        // Add classes
        s.container.addClass(s.classNames.join(' '));
        
        // Translate
        s.translate = 0;
        
        // Progress
        s.progress = 0;
        
        // Velocity
        s.velocity = 0;
        
        /*=========================
          Locks, unlocks
          ===========================*/
        s.lockSwipeToNext = function () {
            s.params.allowSwipeToNext = false;
            if (s.params.allowSwipeToPrev === false && s.params.grabCursor) {
                s.unsetGrabCursor();
            }
        };
        s.lockSwipeToPrev = function () {
            s.params.allowSwipeToPrev = false;
            if (s.params.allowSwipeToNext === false && s.params.grabCursor) {
                s.unsetGrabCursor();
            }
        };
        s.lockSwipes = function () {
            s.params.allowSwipeToNext = s.params.allowSwipeToPrev = false;
            if (s.params.grabCursor) s.unsetGrabCursor();
        };
        s.unlockSwipeToNext = function () {
            s.params.allowSwipeToNext = true;
            if (s.params.allowSwipeToPrev === true && s.params.grabCursor) {
                s.setGrabCursor();
            }
        };
        s.unlockSwipeToPrev = function () {
            s.params.allowSwipeToPrev = true;
            if (s.params.allowSwipeToNext === true && s.params.grabCursor) {
                s.setGrabCursor();
            }
        };
        s.unlockSwipes = function () {
            s.params.allowSwipeToNext = s.params.allowSwipeToPrev = true;
            if (s.params.grabCursor) s.setGrabCursor();
        };
        
        /*=========================
          Round helper
          ===========================*/
        function round(a) {
            return Math.floor(a);
        }
        /*=========================
          Set grab cursor
          ===========================*/
        s.setGrabCursor = function(moving) {
            s.container[0].style.cursor = 'move';
            s.container[0].style.cursor = moving ? '-webkit-grabbing' : '-webkit-grab';
            s.container[0].style.cursor = moving ? '-moz-grabbin' : '-moz-grab';
            s.container[0].style.cursor = moving ? 'grabbing': 'grab';
        };
        s.unsetGrabCursor = function () {
            s.container[0].style.cursor = '';
        };
        if (s.params.grabCursor) {
            s.setGrabCursor();
        }
        /*=========================
          Update on Images Ready
          ===========================*/
        s.imagesToLoad = [];
        s.imagesLoaded = 0;
        
        s.loadImage = function (imgElement, src, srcset, sizes, checkForComplete, callback) {
            var image;
            function onReady () {
                if (callback) callback();
            }
            if (!imgElement.complete || !checkForComplete) {
                if (src) {
                    image = new window.Image();
                    image.onload = onReady;
                    image.onerror = onReady;
                    if (sizes) {
                        image.sizes = sizes;
                    }
                    if (srcset) {
                        image.srcset = srcset;
                    }
                    if (src) {
                        image.src = src;
                    }
                } else {
                    onReady();
                }
        
            } else {//image already loaded...
                onReady();
            }
        };
        s.preloadImages = function () {
            s.imagesToLoad = s.container.find('img');
            function _onReady() {
                if (typeof s === 'undefined' || s === null) return;
                if (s.imagesLoaded !== undefined) s.imagesLoaded++;
                if (s.imagesLoaded === s.imagesToLoad.length) {
                    if (s.params.updateOnImagesReady) s.update();
                    s.emit('onImagesReady', s);
                }
            }
            for (var i = 0; i < s.imagesToLoad.length; i++) {
                s.loadImage(s.imagesToLoad[i], (s.imagesToLoad[i].currentSrc || s.imagesToLoad[i].getAttribute('src')), (s.imagesToLoad[i].srcset || s.imagesToLoad[i].getAttribute('srcset')), s.imagesToLoad[i].sizes || s.imagesToLoad[i].getAttribute('sizes'), true, _onReady);
            }
        };
        
        /*=========================
          Autoplay
          ===========================*/
        s.autoplayTimeoutId = undefined;
        s.autoplaying = false;
        s.autoplayPaused = false;
        function autoplay() {
            var autoplayDelay = s.params.autoplay;
            var activeSlide = s.slides.eq(s.activeIndex);
            if (activeSlide.attr('data-swiper-autoplay')) {
                autoplayDelay = activeSlide.attr('data-swiper-autoplay') || s.params.autoplay;
            }
            s.autoplayTimeoutId = setTimeout(function () {
                if (s.params.loop) {
                    s.fixLoop();
                    s._slideNext();
                    s.emit('onAutoplay', s);
                }
                else {
                    if (!s.isEnd) {
                        s._slideNext();
                        s.emit('onAutoplay', s);
                    }
                    else {
                        if (!params.autoplayStopOnLast) {
                            s._slideTo(0);
                            s.emit('onAutoplay', s);
                        }
                        else {
                            s.stopAutoplay();
                        }
                    }
                }
            }, autoplayDelay);
        }
        s.startAutoplay = function () {
            if (typeof s.autoplayTimeoutId !== 'undefined') return false;
            if (!s.params.autoplay) return false;
            if (s.autoplaying) return false;
            s.autoplaying = true;
            s.emit('onAutoplayStart', s);
            autoplay();
        };
        s.stopAutoplay = function (internal) {
            if (!s.autoplayTimeoutId) return;
            if (s.autoplayTimeoutId) clearTimeout(s.autoplayTimeoutId);
            s.autoplaying = false;
            s.autoplayTimeoutId = undefined;
            s.emit('onAutoplayStop', s);
        };
        s.pauseAutoplay = function (speed) {
            if (s.autoplayPaused) return;
            if (s.autoplayTimeoutId) clearTimeout(s.autoplayTimeoutId);
            s.autoplayPaused = true;
            if (speed === 0) {
                s.autoplayPaused = false;
                autoplay();
            }
            else {
                s.wrapper.transitionEnd(function () {
                    if (!s) return;
                    s.autoplayPaused = false;
                    if (!s.autoplaying) {
                        s.stopAutoplay();
                    }
                    else {
                        autoplay();
                    }
                });
            }
        };
        /*=========================
          Min/Max Translate
          ===========================*/
        s.minTranslate = function () {
            return (-s.snapGrid[0]);
        };
        s.maxTranslate = function () {
            return (-s.snapGrid[s.snapGrid.length - 1]);
        };
        /*=========================
          Slider/slides sizes
          ===========================*/
        s.updateAutoHeight = function () {
            var activeSlides = [];
            var newHeight = 0;
        
            // Find slides currently in view
            if(s.params.slidesPerView !== 'auto' && s.params.slidesPerView > 1) {
                for (i = 0; i < Math.ceil(s.params.slidesPerView); i++) {
                    var index = s.activeIndex + i;
                    if(index > s.slides.length) break;
                    activeSlides.push(s.slides.eq(index)[0]);
                }
            } else {
                activeSlides.push(s.slides.eq(s.activeIndex)[0]);
            }
        
            // Find new height from heighest slide in view
            for (i = 0; i < activeSlides.length; i++) {
                if (typeof activeSlides[i] !== 'undefined') {
                    var height = activeSlides[i].offsetHeight;
                    newHeight = height > newHeight ? height : newHeight;
                }
            }
        
            // Update Height
            if (newHeight) s.wrapper.css('height', newHeight + 'px');
        };
        s.updateContainerSize = function () {
            var width, height;
            if (typeof s.params.width !== 'undefined') {
                width = s.params.width;
            }
            else {
                width = s.container[0].clientWidth;
            }
            if (typeof s.params.height !== 'undefined') {
                height = s.params.height;
            }
            else {
                height = s.container[0].clientHeight;
            }
            if (width === 0 && s.isHorizontal() || height === 0 && !s.isHorizontal()) {
                return;
            }
        
            //Subtract paddings
            width = width - parseInt(s.container.css('padding-left'), 10) - parseInt(s.container.css('padding-right'), 10);
            height = height - parseInt(s.container.css('padding-top'), 10) - parseInt(s.container.css('padding-bottom'), 10);
        
            // Store values
            s.width = width;
            s.height = height;
            s.size = s.isHorizontal() ? s.width : s.height;
        };
        
        s.updateSlidesSize = function () {
            s.slides = s.wrapper.children('.' + s.params.slideClass);
            s.snapGrid = [];
            s.slidesGrid = [];
            s.slidesSizesGrid = [];
        
            var spaceBetween = s.params.spaceBetween,
                slidePosition = -s.params.slidesOffsetBefore,
                i,
                prevSlideSize = 0,
                index = 0;
            if (typeof s.size === 'undefined') return;
            if (typeof spaceBetween === 'string' && spaceBetween.indexOf('%') >= 0) {
                spaceBetween = parseFloat(spaceBetween.replace('%', '')) / 100 * s.size;
            }
        
            s.virtualSize = -spaceBetween;
            // reset margins
            if (s.rtl) s.slides.css({marginLeft: '', marginTop: ''});
            else s.slides.css({marginRight: '', marginBottom: ''});
        
            var slidesNumberEvenToRows;
            if (s.params.slidesPerColumn > 1) {
                if (Math.floor(s.slides.length / s.params.slidesPerColumn) === s.slides.length / s.params.slidesPerColumn) {
                    slidesNumberEvenToRows = s.slides.length;
                }
                else {
                    slidesNumberEvenToRows = Math.ceil(s.slides.length / s.params.slidesPerColumn) * s.params.slidesPerColumn;
                }
                if (s.params.slidesPerView !== 'auto' && s.params.slidesPerColumnFill === 'row') {
                    slidesNumberEvenToRows = Math.max(slidesNumberEvenToRows, s.params.slidesPerView * s.params.slidesPerColumn);
                }
            }
        
            // Calc slides
            var slideSize;
            var slidesPerColumn = s.params.slidesPerColumn;
            var slidesPerRow = slidesNumberEvenToRows / slidesPerColumn;
            var numFullColumns = slidesPerRow - (s.params.slidesPerColumn * slidesPerRow - s.slides.length);
            for (i = 0; i < s.slides.length; i++) {
                slideSize = 0;
                var slide = s.slides.eq(i);
                if (s.params.slidesPerColumn > 1) {
                    // Set slides order
                    var newSlideOrderIndex;
                    var column, row;
                    if (s.params.slidesPerColumnFill === 'column') {
                        column = Math.floor(i / slidesPerColumn);
                        row = i - column * slidesPerColumn;
                        if (column > numFullColumns || (column === numFullColumns && row === slidesPerColumn-1)) {
                            if (++row >= slidesPerColumn) {
                                row = 0;
                                column++;
                            }
                        }
                        newSlideOrderIndex = column + row * slidesNumberEvenToRows / slidesPerColumn;
                        slide
                            .css({
                                '-webkit-box-ordinal-group': newSlideOrderIndex,
                                '-moz-box-ordinal-group': newSlideOrderIndex,
                                '-ms-flex-order': newSlideOrderIndex,
                                '-webkit-order': newSlideOrderIndex,
                                'order': newSlideOrderIndex
                            });
                    }
                    else {
                        row = Math.floor(i / slidesPerRow);
                        column = i - row * slidesPerRow;
                    }
                    slide
                        .css(
                            'margin-' + (s.isHorizontal() ? 'top' : 'left'),
                            (row !== 0 && s.params.spaceBetween) && (s.params.spaceBetween + 'px')
                        )
                        .attr('data-swiper-column', column)
                        .attr('data-swiper-row', row);
        
                }
                if (slide.css('display') === 'none') continue;
                if (s.params.slidesPerView === 'auto') {
                    slideSize = s.isHorizontal() ? slide.outerWidth(true) : slide.outerHeight(true);
                    if (s.params.roundLengths) slideSize = round(slideSize);
                }
                else {
                    slideSize = (s.size - (s.params.slidesPerView - 1) * spaceBetween) / s.params.slidesPerView;
                    if (s.params.roundLengths) slideSize = round(slideSize);
        
                    if (s.isHorizontal()) {
                        s.slides[i].style.width = slideSize + 'px';
                    }
                    else {
                        s.slides[i].style.height = slideSize + 'px';
                    }
                }
                s.slides[i].swiperSlideSize = slideSize;
                s.slidesSizesGrid.push(slideSize);
        
        
                if (s.params.centeredSlides) {
                    slidePosition = slidePosition + slideSize / 2 + prevSlideSize / 2 + spaceBetween;
                    if (i === 0) slidePosition = slidePosition - s.size / 2 - spaceBetween;
                    if (Math.abs(slidePosition) < 1 / 1000) slidePosition = 0;
                    if ((index) % s.params.slidesPerGroup === 0) s.snapGrid.push(slidePosition);
                    s.slidesGrid.push(slidePosition);
                }
                else {
                    if ((index) % s.params.slidesPerGroup === 0) s.snapGrid.push(slidePosition);
                    s.slidesGrid.push(slidePosition);
                    slidePosition = slidePosition + slideSize + spaceBetween;
                }
        
                s.virtualSize += slideSize + spaceBetween;
        
                prevSlideSize = slideSize;
        
                index ++;
            }
            s.virtualSize = Math.max(s.virtualSize, s.size) + s.params.slidesOffsetAfter;
            var newSlidesGrid;
        
            if (
                s.rtl && s.wrongRTL && (s.params.effect === 'slide' || s.params.effect === 'coverflow')) {
                s.wrapper.css({width: s.virtualSize + s.params.spaceBetween + 'px'});
            }
            if (!s.support.flexbox || s.params.setWrapperSize) {
                if (s.isHorizontal()) s.wrapper.css({width: s.virtualSize + s.params.spaceBetween + 'px'});
                else s.wrapper.css({height: s.virtualSize + s.params.spaceBetween + 'px'});
            }
        
            if (s.params.slidesPerColumn > 1) {
                s.virtualSize = (slideSize + s.params.spaceBetween) * slidesNumberEvenToRows;
                s.virtualSize = Math.ceil(s.virtualSize / s.params.slidesPerColumn) - s.params.spaceBetween;
                if (s.isHorizontal()) s.wrapper.css({width: s.virtualSize + s.params.spaceBetween + 'px'});
                else s.wrapper.css({height: s.virtualSize + s.params.spaceBetween + 'px'});
                if (s.params.centeredSlides) {
                    newSlidesGrid = [];
                    for (i = 0; i < s.snapGrid.length; i++) {
                        if (s.snapGrid[i] < s.virtualSize + s.snapGrid[0]) newSlidesGrid.push(s.snapGrid[i]);
                    }
                    s.snapGrid = newSlidesGrid;
                }
            }
        
            // Remove last grid elements depending on width
            if (!s.params.centeredSlides) {
                newSlidesGrid = [];
                for (i = 0; i < s.snapGrid.length; i++) {
                    if (s.snapGrid[i] <= s.virtualSize - s.size) {
                        newSlidesGrid.push(s.snapGrid[i]);
                    }
                }
                s.snapGrid = newSlidesGrid;
                if (Math.floor(s.virtualSize - s.size) - Math.floor(s.snapGrid[s.snapGrid.length - 1]) > 1) {
                    s.snapGrid.push(s.virtualSize - s.size);
                }
            }
            if (s.snapGrid.length === 0) s.snapGrid = [0];
        
            if (s.params.spaceBetween !== 0) {
                if (s.isHorizontal()) {
                    if (s.rtl) s.slides.css({marginLeft: spaceBetween + 'px'});
                    else s.slides.css({marginRight: spaceBetween + 'px'});
                }
                else s.slides.css({marginBottom: spaceBetween + 'px'});
            }
            if (s.params.watchSlidesProgress) {
                s.updateSlidesOffset();
            }
        };
        s.updateSlidesOffset = function () {
            for (var i = 0; i < s.slides.length; i++) {
                s.slides[i].swiperSlideOffset = s.isHorizontal() ? s.slides[i].offsetLeft : s.slides[i].offsetTop;
            }
        };
        
        /*=========================
          Slider/slides progress
          ===========================*/
        s.updateSlidesProgress = function (translate) {
            if (typeof translate === 'undefined') {
                translate = s.translate || 0;
            }
            if (s.slides.length === 0) return;
            if (typeof s.slides[0].swiperSlideOffset === 'undefined') s.updateSlidesOffset();
        
            var offsetCenter = -translate;
            if (s.rtl) offsetCenter = translate;
        
            // Visible Slides
            s.slides.removeClass(s.params.slideVisibleClass);
            for (var i = 0; i < s.slides.length; i++) {
                var slide = s.slides[i];
                var slideProgress = (offsetCenter + (s.params.centeredSlides ? s.minTranslate() : 0) - slide.swiperSlideOffset) / (slide.swiperSlideSize + s.params.spaceBetween);
                if (s.params.watchSlidesVisibility) {
                    var slideBefore = -(offsetCenter - slide.swiperSlideOffset);
                    var slideAfter = slideBefore + s.slidesSizesGrid[i];
                    var isVisible =
                        (slideBefore >= 0 && slideBefore < s.size) ||
                        (slideAfter > 0 && slideAfter <= s.size) ||
                        (slideBefore <= 0 && slideAfter >= s.size);
                    if (isVisible) {
                        s.slides.eq(i).addClass(s.params.slideVisibleClass);
                    }
                }
                slide.progress = s.rtl ? -slideProgress : slideProgress;
            }
        };
        s.updateProgress = function (translate) {
            if (typeof translate === 'undefined') {
                translate = s.translate || 0;
            }
            var translatesDiff = s.maxTranslate() - s.minTranslate();
            var wasBeginning = s.isBeginning;
            var wasEnd = s.isEnd;
            if (translatesDiff === 0) {
                s.progress = 0;
                s.isBeginning = s.isEnd = true;
            }
            else {
                s.progress = (translate - s.minTranslate()) / (translatesDiff);
                s.isBeginning = s.progress <= 0;
                s.isEnd = s.progress >= 1;
            }
            if (s.isBeginning && !wasBeginning) s.emit('onReachBeginning', s);
            if (s.isEnd && !wasEnd) s.emit('onReachEnd', s);
        
            if (s.params.watchSlidesProgress) s.updateSlidesProgress(translate);
            s.emit('onProgress', s, s.progress);
        };
        s.updateActiveIndex = function () {
            var translate = s.rtl ? s.translate : -s.translate;
            var newActiveIndex, i, snapIndex;
            for (i = 0; i < s.slidesGrid.length; i ++) {
                if (typeof s.slidesGrid[i + 1] !== 'undefined') {
                    if (translate >= s.slidesGrid[i] && translate < s.slidesGrid[i + 1] - (s.slidesGrid[i + 1] - s.slidesGrid[i]) / 2) {
                        newActiveIndex = i;
                    }
                    else if (translate >= s.slidesGrid[i] && translate < s.slidesGrid[i + 1]) {
                        newActiveIndex = i + 1;
                    }
                }
                else {
                    if (translate >= s.slidesGrid[i]) {
                        newActiveIndex = i;
                    }
                }
            }
            // Normalize slideIndex
            if(s.params.normalizeSlideIndex){
                if (newActiveIndex < 0 || typeof newActiveIndex === 'undefined') newActiveIndex = 0;
            }
            // for (i = 0; i < s.slidesGrid.length; i++) {
                // if (- translate >= s.slidesGrid[i]) {
                    // newActiveIndex = i;
                // }
            // }
            snapIndex = Math.floor(newActiveIndex / s.params.slidesPerGroup);
            if (snapIndex >= s.snapGrid.length) snapIndex = s.snapGrid.length - 1;
        
            if (newActiveIndex === s.activeIndex) {
                return;
            }
            s.snapIndex = snapIndex;
            s.previousIndex = s.activeIndex;
            s.activeIndex = newActiveIndex;
            s.updateClasses();
            s.updateRealIndex();
        };
        s.updateRealIndex = function(){
            s.realIndex = s.slides.eq(s.activeIndex).attr('data-swiper-slide-index') || s.activeIndex;
        };
        
        /*=========================
          Classes
          ===========================*/
        s.updateClasses = function () {
            s.slides.removeClass(s.params.slideActiveClass + ' ' + s.params.slideNextClass + ' ' + s.params.slidePrevClass + ' ' + s.params.slideDuplicateActiveClass + ' ' + s.params.slideDuplicateNextClass + ' ' + s.params.slideDuplicatePrevClass);
            var activeSlide = s.slides.eq(s.activeIndex);
            // Active classes
            activeSlide.addClass(s.params.slideActiveClass);
            if (params.loop) {
                // Duplicate to all looped slides
                if (activeSlide.hasClass(s.params.slideDuplicateClass)) {
                    s.wrapper.children('.' + s.params.slideClass + ':not(.' + s.params.slideDuplicateClass + ')[data-swiper-slide-index="' + s.realIndex + '"]').addClass(s.params.slideDuplicateActiveClass);
                }
                else {
                    s.wrapper.children('.' + s.params.slideClass + '.' + s.params.slideDuplicateClass + '[data-swiper-slide-index="' + s.realIndex + '"]').addClass(s.params.slideDuplicateActiveClass);
                }
            }
            // Next Slide
            var nextSlide = activeSlide.next('.' + s.params.slideClass).addClass(s.params.slideNextClass);
            if (s.params.loop && nextSlide.length === 0) {
                nextSlide = s.slides.eq(0);
                nextSlide.addClass(s.params.slideNextClass);
            }
            // Prev Slide
            var prevSlide = activeSlide.prev('.' + s.params.slideClass).addClass(s.params.slidePrevClass);
            if (s.params.loop && prevSlide.length === 0) {
                prevSlide = s.slides.eq(-1);
                prevSlide.addClass(s.params.slidePrevClass);
            }
            if (params.loop) {
                // Duplicate to all looped slides
                if (nextSlide.hasClass(s.params.slideDuplicateClass)) {
                    s.wrapper.children('.' + s.params.slideClass + ':not(.' + s.params.slideDuplicateClass + ')[data-swiper-slide-index="' + nextSlide.attr('data-swiper-slide-index') + '"]').addClass(s.params.slideDuplicateNextClass);
                }
                else {
                    s.wrapper.children('.' + s.params.slideClass + '.' + s.params.slideDuplicateClass + '[data-swiper-slide-index="' + nextSlide.attr('data-swiper-slide-index') + '"]').addClass(s.params.slideDuplicateNextClass);
                }
                if (prevSlide.hasClass(s.params.slideDuplicateClass)) {
                    s.wrapper.children('.' + s.params.slideClass + ':not(.' + s.params.slideDuplicateClass + ')[data-swiper-slide-index="' + prevSlide.attr('data-swiper-slide-index') + '"]').addClass(s.params.slideDuplicatePrevClass);
                }
                else {
                    s.wrapper.children('.' + s.params.slideClass + '.' + s.params.slideDuplicateClass + '[data-swiper-slide-index="' + prevSlide.attr('data-swiper-slide-index') + '"]').addClass(s.params.slideDuplicatePrevClass);
                }
            }
        
            // Pagination
            if (s.paginationContainer && s.paginationContainer.length > 0) {
                // Current/Total
                var current,
                    total = s.params.loop ? Math.ceil((s.slides.length - s.loopedSlides * 2) / s.params.slidesPerGroup) : s.snapGrid.length;
                if (s.params.loop) {
                    current = Math.ceil((s.activeIndex - s.loopedSlides)/s.params.slidesPerGroup);
                    if (current > s.slides.length - 1 - s.loopedSlides * 2) {
                        current = current - (s.slides.length - s.loopedSlides * 2);
                    }
                    if (current > total - 1) current = current - total;
                    if (current < 0 && s.params.paginationType !== 'bullets') current = total + current;
                }
                else {
                    if (typeof s.snapIndex !== 'undefined') {
                        current = s.snapIndex;
                    }
                    else {
                        current = s.activeIndex || 0;
                    }
                }
                // Types
                if (s.params.paginationType === 'bullets' && s.bullets && s.bullets.length > 0) {
                    s.bullets.removeClass(s.params.bulletActiveClass);
                    if (s.paginationContainer.length > 1) {
                        s.bullets.each(function () {
                            if ($(this).index() === current) $(this).addClass(s.params.bulletActiveClass);
                        });
                    }
                    else {
                        s.bullets.eq(current).addClass(s.params.bulletActiveClass);
                    }
                }
                if (s.params.paginationType === 'fraction') {
                    s.paginationContainer.find('.' + s.params.paginationCurrentClass).text(current + 1);
                    s.paginationContainer.find('.' + s.params.paginationTotalClass).text(total);
                }
                if (s.params.paginationType === 'progress') {
                    var scale = (current + 1) / total,
                        scaleX = scale,
                        scaleY = 1;
                    if (!s.isHorizontal()) {
                        scaleY = scale;
                        scaleX = 1;
                    }
                    s.paginationContainer.find('.' + s.params.paginationProgressbarClass).transform('translate3d(0,0,0) scaleX(' + scaleX + ') scaleY(' + scaleY + ')').transition(s.params.speed);
                }
                if (s.params.paginationType === 'custom' && s.params.paginationCustomRender) {
                    s.paginationContainer.html(s.params.paginationCustomRender(s, current + 1, total));
                    s.emit('onPaginationRendered', s, s.paginationContainer[0]);
                }
            }
        
            // Next/active buttons
            if (!s.params.loop) {
                if (s.params.prevButton && s.prevButton && s.prevButton.length > 0) {
                    if (s.isBeginning) {
                        s.prevButton.addClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.disable(s.prevButton);
                    }
                    else {
                        s.prevButton.removeClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.enable(s.prevButton);
                    }
                }
                if (s.params.nextButton && s.nextButton && s.nextButton.length > 0) {
                    if (s.isEnd) {
                        s.nextButton.addClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.disable(s.nextButton);
                    }
                    else {
                        s.nextButton.removeClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.enable(s.nextButton);
                    }
                }
            }
        };
        
        /*=========================
          Pagination
          ===========================*/
        s.updatePagination = function () {
            if (!s.params.pagination) return;
            if (s.paginationContainer && s.paginationContainer.length > 0) {
                var paginationHTML = '';
                if (s.params.paginationType === 'bullets') {
                    var numberOfBullets = s.params.loop ? Math.ceil((s.slides.length - s.loopedSlides * 2) / s.params.slidesPerGroup) : s.snapGrid.length;
                    for (var i = 0; i < numberOfBullets; i++) {
                        if (s.params.paginationBulletRender) {
                            paginationHTML += s.params.paginationBulletRender(s, i, s.params.bulletClass);
                        }
                        else {
                            paginationHTML += '<' + s.params.paginationElement+' class="' + s.params.bulletClass + '"></' + s.params.paginationElement + '>';
                        }
                    }
                    s.paginationContainer.html(paginationHTML);
                    s.bullets = s.paginationContainer.find('.' + s.params.bulletClass);
                    if (s.params.paginationClickable && s.params.a11y && s.a11y) {
                        s.a11y.initPagination();
                    }
                }
                if (s.params.paginationType === 'fraction') {
                    if (s.params.paginationFractionRender) {
                        paginationHTML = s.params.paginationFractionRender(s, s.params.paginationCurrentClass, s.params.paginationTotalClass);
                    }
                    else {
                        paginationHTML =
                            '<span class="' + s.params.paginationCurrentClass + '"></span>' +
                            ' / ' +
                            '<span class="' + s.params.paginationTotalClass+'"></span>';
                    }
                    s.paginationContainer.html(paginationHTML);
                }
                if (s.params.paginationType === 'progress') {
                    if (s.params.paginationProgressRender) {
                        paginationHTML = s.params.paginationProgressRender(s, s.params.paginationProgressbarClass);
                    }
                    else {
                        paginationHTML = '<span class="' + s.params.paginationProgressbarClass + '"></span>';
                    }
                    s.paginationContainer.html(paginationHTML);
                }
                if (s.params.paginationType !== 'custom') {
                    s.emit('onPaginationRendered', s, s.paginationContainer[0]);
                }
            }
        };
        /*=========================
          Common update method
          ===========================*/
        s.update = function (updateTranslate) {
            s.updateContainerSize();
            s.updateSlidesSize();
            s.updateProgress();
            s.updatePagination();
            s.updateClasses();
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.set();
            }
            function forceSetTranslate() {
                var translate = s.rtl ? -s.translate : s.translate;
                newTranslate = Math.min(Math.max(s.translate, s.maxTranslate()), s.minTranslate());
                s.setWrapperTranslate(newTranslate);
                s.updateActiveIndex();
                s.updateClasses();
            }
            if (updateTranslate) {
                var translated, newTranslate;
                if (s.controller && s.controller.spline) {
                    s.controller.spline = undefined;
                }
                if (s.params.freeMode) {
                    forceSetTranslate();
                    if (s.params.autoHeight) {
                        s.updateAutoHeight();
                    }
                }
                else {
                    if ((s.params.slidesPerView === 'auto' || s.params.slidesPerView > 1) && s.isEnd && !s.params.centeredSlides) {
                        translated = s.slideTo(s.slides.length - 1, 0, false, true);
                    }
                    else {
                        translated = s.slideTo(s.activeIndex, 0, false, true);
                    }
                    if (!translated) {
                        forceSetTranslate();
                    }
                }
            }
            else if (s.params.autoHeight) {
                s.updateAutoHeight();
            }
        };
        
        /*=========================
          Resize Handler
          ===========================*/
        s.onResize = function (forceUpdatePagination) {
            //Breakpoints
            if (s.params.breakpoints) {
                s.setBreakpoint();
            }
        
            // Disable locks on resize
            var allowSwipeToPrev = s.params.allowSwipeToPrev;
            var allowSwipeToNext = s.params.allowSwipeToNext;
            s.params.allowSwipeToPrev = s.params.allowSwipeToNext = true;
        
            s.updateContainerSize();
            s.updateSlidesSize();
            if (s.params.slidesPerView === 'auto' || s.params.freeMode || forceUpdatePagination) s.updatePagination();
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.set();
            }
            if (s.controller && s.controller.spline) {
                s.controller.spline = undefined;
            }
            var slideChangedBySlideTo = false;
            if (s.params.freeMode) {
                var newTranslate = Math.min(Math.max(s.translate, s.maxTranslate()), s.minTranslate());
                s.setWrapperTranslate(newTranslate);
                s.updateActiveIndex();
                s.updateClasses();
        
                if (s.params.autoHeight) {
                    s.updateAutoHeight();
                }
            }
            else {
                s.updateClasses();
                if ((s.params.slidesPerView === 'auto' || s.params.slidesPerView > 1) && s.isEnd && !s.params.centeredSlides) {
                    slideChangedBySlideTo = s.slideTo(s.slides.length - 1, 0, false, true);
                }
                else {
                    slideChangedBySlideTo = s.slideTo(s.activeIndex, 0, false, true);
                }
            }
            if (s.params.lazyLoading && !slideChangedBySlideTo && s.lazy) {
                s.lazy.load();
            }
            // Return locks after resize
            s.params.allowSwipeToPrev = allowSwipeToPrev;
            s.params.allowSwipeToNext = allowSwipeToNext;
        };
        
        /*=========================
          Events
          ===========================*/
        
        //Define Touch Events
        s.touchEventsDesktop = {start: 'mousedown', move: 'mousemove', end: 'mouseup'};
        if (window.navigator.pointerEnabled) s.touchEventsDesktop = {start: 'pointerdown', move: 'pointermove', end: 'pointerup'};
        else if (window.navigator.msPointerEnabled) s.touchEventsDesktop = {start: 'MSPointerDown', move: 'MSPointerMove', end: 'MSPointerUp'};
        s.touchEvents = {
            start : s.support.touch || !s.params.simulateTouch  ? 'touchstart' : s.touchEventsDesktop.start,
            move : s.support.touch || !s.params.simulateTouch ? 'touchmove' : s.touchEventsDesktop.move,
            end : s.support.touch || !s.params.simulateTouch ? 'touchend' : s.touchEventsDesktop.end
        };
        
        
        // WP8 Touch Events Fix
        if (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) {
            (s.params.touchEventsTarget === 'container' ? s.container : s.wrapper).addClass('swiper-wp8-' + s.params.direction);
        }
        
        // Attach/detach events
        s.initEvents = function (detach) {
            var actionDom = detach ? 'off' : 'on';
            var action = detach ? 'removeEventListener' : 'addEventListener';
            var touchEventsTarget = s.params.touchEventsTarget === 'container' ? s.container[0] : s.wrapper[0];
            var target = s.support.touch ? touchEventsTarget : document;
        
            var moveCapture = s.params.nested ? true : false;
        
            //Touch Events
            if (s.browser.ie) {
                touchEventsTarget[action](s.touchEvents.start, s.onTouchStart, false);
                target[action](s.touchEvents.move, s.onTouchMove, moveCapture);
                target[action](s.touchEvents.end, s.onTouchEnd, false);
            }
            else {
                if (s.support.touch) {
                    var passiveListener = s.touchEvents.start === 'touchstart' && s.support.passiveListener && s.params.passiveListeners ? {passive: true, capture: false} : false;
                    touchEventsTarget[action](s.touchEvents.start, s.onTouchStart, passiveListener);
                    touchEventsTarget[action](s.touchEvents.move, s.onTouchMove, moveCapture);
                    touchEventsTarget[action](s.touchEvents.end, s.onTouchEnd, passiveListener);
                }
                if ((params.simulateTouch && !s.device.ios && !s.device.android) || (params.simulateTouch && !s.support.touch && s.device.ios)) {
                    touchEventsTarget[action]('mousedown', s.onTouchStart, false);
                    document[action]('mousemove', s.onTouchMove, moveCapture);
                    document[action]('mouseup', s.onTouchEnd, false);
                }
            }
            window[action]('resize', s.onResize);
        
            // Next, Prev, Index
            if (s.params.nextButton && s.nextButton && s.nextButton.length > 0) {
                s.nextButton[actionDom]('click', s.onClickNext);
                if (s.params.a11y && s.a11y) s.nextButton[actionDom]('keydown', s.a11y.onEnterKey);
            }
            if (s.params.prevButton && s.prevButton && s.prevButton.length > 0) {
                s.prevButton[actionDom]('click', s.onClickPrev);
                if (s.params.a11y && s.a11y) s.prevButton[actionDom]('keydown', s.a11y.onEnterKey);
            }
            if (s.params.pagination && s.params.paginationClickable) {
                s.paginationContainer[actionDom]('click', '.' + s.params.bulletClass, s.onClickIndex);
                if (s.params.a11y && s.a11y) s.paginationContainer[actionDom]('keydown', '.' + s.params.bulletClass, s.a11y.onEnterKey);
            }
        
            // Prevent Links Clicks
            if (s.params.preventClicks || s.params.preventClicksPropagation) touchEventsTarget[action]('click', s.preventClicks, true);
        };
        s.attachEvents = function () {
            s.initEvents();
        };
        s.detachEvents = function () {
            s.initEvents(true);
        };
        
        /*=========================
          Handle Clicks
          ===========================*/
        // Prevent Clicks
        s.allowClick = true;
        s.preventClicks = function (e) {
            if (!s.allowClick) {
                if (s.params.preventClicks) e.preventDefault();
                if (s.params.preventClicksPropagation && s.animating) {
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                }
            }
        };
        // Clicks
        s.onClickNext = function (e) {
            e.preventDefault();
            if (s.isEnd && !s.params.loop) return;
            s.slideNext();
        };
        s.onClickPrev = function (e) {
            e.preventDefault();
            if (s.isBeginning && !s.params.loop) return;
            s.slidePrev();
        };
        s.onClickIndex = function (e) {
            e.preventDefault();
            var index = $(this).index() * s.params.slidesPerGroup;
            if (s.params.loop) index = index + s.loopedSlides;
            s.slideTo(index);
        };
        
        /*=========================
          Handle Touches
          ===========================*/
        function findElementInEvent(e, selector) {
            var el = $(e.target);
            if (!el.is(selector)) {
                if (typeof selector === 'string') {
                    el = el.parents(selector);
                }
                else if (selector.nodeType) {
                    var found;
                    el.parents().each(function (index, _el) {
                        if (_el === selector) found = selector;
                    });
                    if (!found) return undefined;
                    else return selector;
                }
            }
            if (el.length === 0) {
                return undefined;
            }
            return el[0];
        }
        s.updateClickedSlide = function (e) {
            var slide = findElementInEvent(e, '.' + s.params.slideClass);
            var slideFound = false;
            if (slide) {
                for (var i = 0; i < s.slides.length; i++) {
                    if (s.slides[i] === slide) slideFound = true;
                }
            }
        
            if (slide && slideFound) {
                s.clickedSlide = slide;
                s.clickedIndex = $(slide).index();
            }
            else {
                s.clickedSlide = undefined;
                s.clickedIndex = undefined;
                return;
            }
            if (s.params.slideToClickedSlide && s.clickedIndex !== undefined && s.clickedIndex !== s.activeIndex) {
                var slideToIndex = s.clickedIndex,
                    realIndex,
                    duplicatedSlides;
                if (s.params.loop) {
                    if (s.animating) return;
                    realIndex = $(s.clickedSlide).attr('data-swiper-slide-index');
                    if (s.params.centeredSlides) {
                        if ((slideToIndex < s.loopedSlides - s.params.slidesPerView/2) || (slideToIndex > s.slides.length - s.loopedSlides + s.params.slidesPerView/2)) {
                            s.fixLoop();
                            slideToIndex = s.wrapper.children('.' + s.params.slideClass + '[data-swiper-slide-index="' + realIndex + '"]:not(.' + s.params.slideDuplicateClass + ')').eq(0).index();
                            setTimeout(function () {
                                s.slideTo(slideToIndex);
                            }, 0);
                        }
                        else {
                            s.slideTo(slideToIndex);
                        }
                    }
                    else {
                        if (slideToIndex > s.slides.length - s.params.slidesPerView) {
                            s.fixLoop();
                            slideToIndex = s.wrapper.children('.' + s.params.slideClass + '[data-swiper-slide-index="' + realIndex + '"]:not(.' + s.params.slideDuplicateClass + ')').eq(0).index();
                            setTimeout(function () {
                                s.slideTo(slideToIndex);
                            }, 0);
                        }
                        else {
                            s.slideTo(slideToIndex);
                        }
                    }
                }
                else {
                    s.slideTo(slideToIndex);
                }
            }
        };
        
        var isTouched,
            isMoved,
            allowTouchCallbacks,
            touchStartTime,
            isScrolling,
            currentTranslate,
            startTranslate,
            allowThresholdMove,
            // Form elements to match
            formElements = 'input, select, textarea, button, video',
            // Last click time
            lastClickTime = Date.now(), clickTimeout,
            //Velocities
            velocities = [],
            allowMomentumBounce;
        
        // Animating Flag
        s.animating = false;
        
        // Touches information
        s.touches = {
            startX: 0,
            startY: 0,
            currentX: 0,
            currentY: 0,
            diff: 0
        };
        
        // Touch handlers
        var isTouchEvent, startMoving;
        s.onTouchStart = function (e) {
            if (e.originalEvent) e = e.originalEvent;
            isTouchEvent = e.type === 'touchstart';
            if (!isTouchEvent && 'which' in e && e.which === 3) return;
            if (s.params.noSwiping && findElementInEvent(e, '.' + s.params.noSwipingClass)) {
                s.allowClick = true;
                return;
            }
            if (s.params.swipeHandler) {
                if (!findElementInEvent(e, s.params.swipeHandler)) return;
            }
        
            var startX = s.touches.currentX = e.type === 'touchstart' ? e.targetTouches[0].pageX : e.pageX;
            var startY = s.touches.currentY = e.type === 'touchstart' ? e.targetTouches[0].pageY : e.pageY;
        
            // Do NOT start if iOS edge swipe is detected. Otherwise iOS app (UIWebView) cannot swipe-to-go-back anymore
            if(s.device.ios && s.params.iOSEdgeSwipeDetection && startX <= s.params.iOSEdgeSwipeThreshold) {
                return;
            }
        
            isTouched = true;
            isMoved = false;
            allowTouchCallbacks = true;
            isScrolling = undefined;
            startMoving = undefined;
            s.touches.startX = startX;
            s.touches.startY = startY;
            touchStartTime = Date.now();
            s.allowClick = true;
            s.updateContainerSize();
            s.swipeDirection = undefined;
            if (s.params.threshold > 0) allowThresholdMove = false;
            if (e.type !== 'touchstart') {
                var preventDefault = true;
                if ($(e.target).is(formElements)) preventDefault = false;
                if (document.activeElement && $(document.activeElement).is(formElements)) {
                    document.activeElement.blur();
                }
                if (preventDefault) {
                    e.preventDefault();
                }
            }
            s.emit('onTouchStart', s, e);
        };
        
        s.onTouchMove = function (e) {
            if (e.originalEvent) e = e.originalEvent;
            if (isTouchEvent && e.type === 'mousemove') return;
            if (e.preventedByNestedSwiper) {
                s.touches.startX = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
                s.touches.startY = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;
                return;
            }
            if (s.params.onlyExternal) {
                // isMoved = true;
                s.allowClick = false;
                if (isTouched) {
                    s.touches.startX = s.touches.currentX = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
                    s.touches.startY = s.touches.currentY = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;
                    touchStartTime = Date.now();
                }
                return;
            }
            if (isTouchEvent && s.params.touchReleaseOnEdges && !s.params.loop) {
                if (!s.isHorizontal()) {
                    // Vertical
                    if (
                        (s.touches.currentY < s.touches.startY && s.translate <= s.maxTranslate()) ||
                        (s.touches.currentY > s.touches.startY && s.translate >= s.minTranslate())
                        ) {
                        return;
                    }
                }
                else {
                    if (
                        (s.touches.currentX < s.touches.startX && s.translate <= s.maxTranslate()) ||
                        (s.touches.currentX > s.touches.startX && s.translate >= s.minTranslate())
                        ) {
                        return;
                    }
                }
            }
            if (isTouchEvent && document.activeElement) {
                if (e.target === document.activeElement && $(e.target).is(formElements)) {
                    isMoved = true;
                    s.allowClick = false;
                    return;
                }
            }
            if (allowTouchCallbacks) {
                s.emit('onTouchMove', s, e);
            }
            if (e.targetTouches && e.targetTouches.length > 1) return;
        
            s.touches.currentX = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
            s.touches.currentY = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;
        
            if (typeof isScrolling === 'undefined') {
                var touchAngle;
                if (s.isHorizontal() && s.touches.currentY === s.touches.startY || !s.isHorizontal() && s.touches.currentX !== s.touches.startX) {
                    isScrolling = false;
                }
                else {
                    touchAngle = Math.atan2(Math.abs(s.touches.currentY - s.touches.startY), Math.abs(s.touches.currentX - s.touches.startX)) * 180 / Math.PI;
                    isScrolling = s.isHorizontal() ? touchAngle > s.params.touchAngle : (90 - touchAngle > s.params.touchAngle);
                }
            }
            if (isScrolling) {
                s.emit('onTouchMoveOpposite', s, e);
            }
            if (typeof startMoving === 'undefined' && s.browser.ieTouch) {
                if (s.touches.currentX !== s.touches.startX || s.touches.currentY !== s.touches.startY) {
                    startMoving = true;
                }
            }
            if (!isTouched) return;
            if (isScrolling)  {
                isTouched = false;
                return;
            }
            if (!startMoving && s.browser.ieTouch) {
                return;
            }
            s.allowClick = false;
            s.emit('onSliderMove', s, e);
            e.preventDefault();
            if (s.params.touchMoveStopPropagation && !s.params.nested) {
                e.stopPropagation();
            }
        
            if (!isMoved) {
                if (params.loop) {
                    s.fixLoop();
                }
                startTranslate = s.getWrapperTranslate();
                s.setWrapperTransition(0);
                if (s.animating) {
                    s.wrapper.trigger('webkitTransitionEnd transitionend oTransitionEnd MSTransitionEnd msTransitionEnd');
                }
                if (s.params.autoplay && s.autoplaying) {
                    if (s.params.autoplayDisableOnInteraction) {
                        s.stopAutoplay();
                    }
                    else {
                        s.pauseAutoplay();
                    }
                }
                allowMomentumBounce = false;
                //Grab Cursor
                if (s.params.grabCursor && (s.params.allowSwipeToNext === true || s.params.allowSwipeToPrev === true)) {
                    s.setGrabCursor(true);
                }
            }
            isMoved = true;
        
            var diff = s.touches.diff = s.isHorizontal() ? s.touches.currentX - s.touches.startX : s.touches.currentY - s.touches.startY;
        
            diff = diff * s.params.touchRatio;
            if (s.rtl) diff = -diff;
        
            s.swipeDirection = diff > 0 ? 'prev' : 'next';
            currentTranslate = diff + startTranslate;
        
            var disableParentSwiper = true;
            if ((diff > 0 && currentTranslate > s.minTranslate())) {
                disableParentSwiper = false;
                if (s.params.resistance) currentTranslate = s.minTranslate() - 1 + Math.pow(-s.minTranslate() + startTranslate + diff, s.params.resistanceRatio);
            }
            else if (diff < 0 && currentTranslate < s.maxTranslate()) {
                disableParentSwiper = false;
                if (s.params.resistance) currentTranslate = s.maxTranslate() + 1 - Math.pow(s.maxTranslate() - startTranslate - diff, s.params.resistanceRatio);
            }
        
            if (disableParentSwiper) {
                e.preventedByNestedSwiper = true;
            }
        
            // Directions locks
            if (!s.params.allowSwipeToNext && s.swipeDirection === 'next' && currentTranslate < startTranslate) {
                currentTranslate = startTranslate;
            }
            if (!s.params.allowSwipeToPrev && s.swipeDirection === 'prev' && currentTranslate > startTranslate) {
                currentTranslate = startTranslate;
            }
        
        
            // Threshold
            if (s.params.threshold > 0) {
                if (Math.abs(diff) > s.params.threshold || allowThresholdMove) {
                    if (!allowThresholdMove) {
                        allowThresholdMove = true;
                        s.touches.startX = s.touches.currentX;
                        s.touches.startY = s.touches.currentY;
                        currentTranslate = startTranslate;
                        s.touches.diff = s.isHorizontal() ? s.touches.currentX - s.touches.startX : s.touches.currentY - s.touches.startY;
                        return;
                    }
                }
                else {
                    currentTranslate = startTranslate;
                    return;
                }
            }
        
            if (!s.params.followFinger) return;
        
            // Update active index in free mode
            if (s.params.freeMode || s.params.watchSlidesProgress) {
                s.updateActiveIndex();
            }
            if (s.params.freeMode) {
                //Velocity
                if (velocities.length === 0) {
                    velocities.push({
                        position: s.touches[s.isHorizontal() ? 'startX' : 'startY'],
                        time: touchStartTime
                    });
                }
                velocities.push({
                    position: s.touches[s.isHorizontal() ? 'currentX' : 'currentY'],
                    time: (new window.Date()).getTime()
                });
            }
            // Update progress
            s.updateProgress(currentTranslate);
            // Update translate
            s.setWrapperTranslate(currentTranslate);
        };
        s.onTouchEnd = function (e) {
            if (e.originalEvent) e = e.originalEvent;
            if (allowTouchCallbacks) {
                s.emit('onTouchEnd', s, e);
            }
            allowTouchCallbacks = false;
            if (!isTouched) return;
            //Return Grab Cursor
            if (s.params.grabCursor && isMoved && isTouched  && (s.params.allowSwipeToNext === true || s.params.allowSwipeToPrev === true)) {
                s.setGrabCursor(false);
            }
        
            // Time diff
            var touchEndTime = Date.now();
            var timeDiff = touchEndTime - touchStartTime;
        
            // Tap, doubleTap, Click
            if (s.allowClick) {
                s.updateClickedSlide(e);
                s.emit('onTap', s, e);
                if (timeDiff < 300 && (touchEndTime - lastClickTime) > 300) {
                    if (clickTimeout) clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function () {
                        if (!s) return;
                        if (s.params.paginationHide && s.paginationContainer.length > 0 && !$(e.target).hasClass(s.params.bulletClass)) {
                            s.paginationContainer.toggleClass(s.params.paginationHiddenClass);
                        }
                        s.emit('onClick', s, e);
                    }, 300);
        
                }
                if (timeDiff < 300 && (touchEndTime - lastClickTime) < 300) {
                    if (clickTimeout) clearTimeout(clickTimeout);
                    s.emit('onDoubleTap', s, e);
                }
            }
        
            lastClickTime = Date.now();
            setTimeout(function () {
                if (s) s.allowClick = true;
            }, 0);
        
            if (!isTouched || !isMoved || !s.swipeDirection || s.touches.diff === 0 || currentTranslate === startTranslate) {
                isTouched = isMoved = false;
                return;
            }
            isTouched = isMoved = false;
        
            var currentPos;
            if (s.params.followFinger) {
                currentPos = s.rtl ? s.translate : -s.translate;
            }
            else {
                currentPos = -currentTranslate;
            }
            if (s.params.freeMode) {
                if (currentPos < -s.minTranslate()) {
                    s.slideTo(s.activeIndex);
                    return;
                }
                else if (currentPos > -s.maxTranslate()) {
                    if (s.slides.length < s.snapGrid.length) {
                        s.slideTo(s.snapGrid.length - 1);
                    }
                    else {
                        s.slideTo(s.slides.length - 1);
                    }
                    return;
                }
        
                if (s.params.freeModeMomentum) {
                    if (velocities.length > 1) {
                        var lastMoveEvent = velocities.pop(), velocityEvent = velocities.pop();
        
                        var distance = lastMoveEvent.position - velocityEvent.position;
                        var time = lastMoveEvent.time - velocityEvent.time;
                        s.velocity = distance / time;
                        s.velocity = s.velocity / 2;
                        if (Math.abs(s.velocity) < s.params.freeModeMinimumVelocity) {
                            s.velocity = 0;
                        }
                        // this implies that the user stopped moving a finger then released.
                        // There would be no events with distance zero, so the last event is stale.
                        if (time > 150 || (new window.Date().getTime() - lastMoveEvent.time) > 300) {
                            s.velocity = 0;
                        }
                    } else {
                        s.velocity = 0;
                    }
                    s.velocity = s.velocity * s.params.freeModeMomentumVelocityRatio;
        
                    velocities.length = 0;
                    var momentumDuration = 1000 * s.params.freeModeMomentumRatio;
                    var momentumDistance = s.velocity * momentumDuration;
        
                    var newPosition = s.translate + momentumDistance;
                    if (s.rtl) newPosition = - newPosition;
                    var doBounce = false;
                    var afterBouncePosition;
                    var bounceAmount = Math.abs(s.velocity) * 20 * s.params.freeModeMomentumBounceRatio;
                    if (newPosition < s.maxTranslate()) {
                        if (s.params.freeModeMomentumBounce) {
                            if (newPosition + s.maxTranslate() < -bounceAmount) {
                                newPosition = s.maxTranslate() - bounceAmount;
                            }
                            afterBouncePosition = s.maxTranslate();
                            doBounce = true;
                            allowMomentumBounce = true;
                        }
                        else {
                            newPosition = s.maxTranslate();
                        }
                    }
                    else if (newPosition > s.minTranslate()) {
                        if (s.params.freeModeMomentumBounce) {
                            if (newPosition - s.minTranslate() > bounceAmount) {
                                newPosition = s.minTranslate() + bounceAmount;
                            }
                            afterBouncePosition = s.minTranslate();
                            doBounce = true;
                            allowMomentumBounce = true;
                        }
                        else {
                            newPosition = s.minTranslate();
                        }
                    }
                    else if (s.params.freeModeSticky) {
                        var j = 0,
                            nextSlide;
                        for (j = 0; j < s.snapGrid.length; j += 1) {
                            if (s.snapGrid[j] > -newPosition) {
                                nextSlide = j;
                                break;
                            }
        
                        }
                        if (Math.abs(s.snapGrid[nextSlide] - newPosition) < Math.abs(s.snapGrid[nextSlide - 1] - newPosition) || s.swipeDirection === 'next') {
                            newPosition = s.snapGrid[nextSlide];
                        } else {
                            newPosition = s.snapGrid[nextSlide - 1];
                        }
                        if (!s.rtl) newPosition = - newPosition;
                    }
                    //Fix duration
                    if (s.velocity !== 0) {
                        if (s.rtl) {
                            momentumDuration = Math.abs((-newPosition - s.translate) / s.velocity);
                        }
                        else {
                            momentumDuration = Math.abs((newPosition - s.translate) / s.velocity);
                        }
                    }
                    else if (s.params.freeModeSticky) {
                        s.slideReset();
                        return;
                    }
        
                    if (s.params.freeModeMomentumBounce && doBounce) {
                        s.updateProgress(afterBouncePosition);
                        s.setWrapperTransition(momentumDuration);
                        s.setWrapperTranslate(newPosition);
                        s.onTransitionStart();
                        s.animating = true;
                        s.wrapper.transitionEnd(function () {
                            if (!s || !allowMomentumBounce) return;
                            s.emit('onMomentumBounce', s);
        
                            s.setWrapperTransition(s.params.speed);
                            s.setWrapperTranslate(afterBouncePosition);
                            s.wrapper.transitionEnd(function () {
                                if (!s) return;
                                s.onTransitionEnd();
                            });
                        });
                    } else if (s.velocity) {
                        s.updateProgress(newPosition);
                        s.setWrapperTransition(momentumDuration);
                        s.setWrapperTranslate(newPosition);
                        s.onTransitionStart();
                        if (!s.animating) {
                            s.animating = true;
                            s.wrapper.transitionEnd(function () {
                                if (!s) return;
                                s.onTransitionEnd();
                            });
                        }
        
                    } else {
                        s.updateProgress(newPosition);
                    }
        
                    s.updateActiveIndex();
                }
                if (!s.params.freeModeMomentum || timeDiff >= s.params.longSwipesMs) {
                    s.updateProgress();
                    s.updateActiveIndex();
                }
                return;
            }
        
            // Find current slide
            var i, stopIndex = 0, groupSize = s.slidesSizesGrid[0];
            for (i = 0; i < s.slidesGrid.length; i += s.params.slidesPerGroup) {
                if (typeof s.slidesGrid[i + s.params.slidesPerGroup] !== 'undefined') {
                    if (currentPos >= s.slidesGrid[i] && currentPos < s.slidesGrid[i + s.params.slidesPerGroup]) {
                        stopIndex = i;
                        groupSize = s.slidesGrid[i + s.params.slidesPerGroup] - s.slidesGrid[i];
                    }
                }
                else {
                    if (currentPos >= s.slidesGrid[i]) {
                        stopIndex = i;
                        groupSize = s.slidesGrid[s.slidesGrid.length - 1] - s.slidesGrid[s.slidesGrid.length - 2];
                    }
                }
            }
        
            // Find current slide size
            var ratio = (currentPos - s.slidesGrid[stopIndex]) / groupSize;
        
            if (timeDiff > s.params.longSwipesMs) {
                // Long touches
                if (!s.params.longSwipes) {
                    s.slideTo(s.activeIndex);
                    return;
                }
                if (s.swipeDirection === 'next') {
                    if (ratio >= s.params.longSwipesRatio) s.slideTo(stopIndex + s.params.slidesPerGroup);
                    else s.slideTo(stopIndex);
        
                }
                if (s.swipeDirection === 'prev') {
                    if (ratio > (1 - s.params.longSwipesRatio)) s.slideTo(stopIndex + s.params.slidesPerGroup);
                    else s.slideTo(stopIndex);
                }
            }
            else {
                // Short swipes
                if (!s.params.shortSwipes) {
                    s.slideTo(s.activeIndex);
                    return;
                }
                if (s.swipeDirection === 'next') {
                    s.slideTo(stopIndex + s.params.slidesPerGroup);
        
                }
                if (s.swipeDirection === 'prev') {
                    s.slideTo(stopIndex);
                }
            }
        };
        /*=========================
          Transitions
          ===========================*/
        s._slideTo = function (slideIndex, speed) {
            return s.slideTo(slideIndex, speed, true, true);
        };
        s.slideTo = function (slideIndex, speed, runCallbacks, internal) {
            if (typeof runCallbacks === 'undefined') runCallbacks = true;
            if (typeof slideIndex === 'undefined') slideIndex = 0;
            if (slideIndex < 0) slideIndex = 0;
            s.snapIndex = Math.floor(slideIndex / s.params.slidesPerGroup);
            if (s.snapIndex >= s.snapGrid.length) s.snapIndex = s.snapGrid.length - 1;
        
            var translate = - s.snapGrid[s.snapIndex];
            // Stop autoplay
            if (s.params.autoplay && s.autoplaying) {
                if (internal || !s.params.autoplayDisableOnInteraction) {
                    s.pauseAutoplay(speed);
                }
                else {
                    s.stopAutoplay();
                }
            }
            // Update progress
            s.updateProgress(translate);
        
            // Normalize slideIndex
            if(s.params.normalizeSlideIndex){
                for (var i = 0; i < s.slidesGrid.length; i++) {
                    if (- Math.floor(translate * 100) >= Math.floor(s.slidesGrid[i] * 100)) {
                        slideIndex = i;
                    }
                }
            }
        
            // Directions locks
            if (!s.params.allowSwipeToNext && translate < s.translate && translate < s.minTranslate()) {
                return false;
            }
            if (!s.params.allowSwipeToPrev && translate > s.translate && translate > s.maxTranslate()) {
                if ((s.activeIndex || 0) !== slideIndex ) return false;
            }
        
            // Update Index
            if (typeof speed === 'undefined') speed = s.params.speed;
            s.previousIndex = s.activeIndex || 0;
            s.activeIndex = slideIndex;
            s.updateRealIndex();
            if ((s.rtl && -translate === s.translate) || (!s.rtl && translate === s.translate)) {
                // Update Height
                if (s.params.autoHeight) {
                    s.updateAutoHeight();
                }
                s.updateClasses();
                if (s.params.effect !== 'slide') {
                    s.setWrapperTranslate(translate);
                }
                return false;
            }
            s.updateClasses();
            s.onTransitionStart(runCallbacks);
        
            if (speed === 0 || s.browser.lteIE9) {
                s.setWrapperTranslate(translate);
                s.setWrapperTransition(0);
                s.onTransitionEnd(runCallbacks);
            }
            else {
                s.setWrapperTranslate(translate);
                s.setWrapperTransition(speed);
                if (!s.animating) {
                    s.animating = true;
                    s.wrapper.transitionEnd(function () {
                        if (!s) return;
                        s.onTransitionEnd(runCallbacks);
                    });
                }
        
            }
        
            return true;
        };
        
        s.onTransitionStart = function (runCallbacks) {
            if (typeof runCallbacks === 'undefined') runCallbacks = true;
            if (s.params.autoHeight) {
                s.updateAutoHeight();
            }
            if (s.lazy) s.lazy.onTransitionStart();
            if (runCallbacks) {
                s.emit('onTransitionStart', s);
                if (s.activeIndex !== s.previousIndex) {
                    s.emit('onSlideChangeStart', s);
                    if (s.activeIndex > s.previousIndex) {
                        s.emit('onSlideNextStart', s);
                    }
                    else {
                        s.emit('onSlidePrevStart', s);
                    }
                }
        
            }
        };
        s.onTransitionEnd = function (runCallbacks) {
            s.animating = false;
            s.setWrapperTransition(0);
            if (typeof runCallbacks === 'undefined') runCallbacks = true;
            if (s.lazy) s.lazy.onTransitionEnd();
            if (runCallbacks) {
                s.emit('onTransitionEnd', s);
                if (s.activeIndex !== s.previousIndex) {
                    s.emit('onSlideChangeEnd', s);
                    if (s.activeIndex > s.previousIndex) {
                        s.emit('onSlideNextEnd', s);
                    }
                    else {
                        s.emit('onSlidePrevEnd', s);
                    }
                }
            }
            if (s.params.history && s.history) {
                s.history.setHistory(s.params.history, s.activeIndex);
            }
            if (s.params.hashnav && s.hashnav) {
                s.hashnav.setHash();
            }
        
        };
        s.slideNext = function (runCallbacks, speed, internal) {
            if (s.params.loop) {
                if (s.animating) return false;
                s.fixLoop();
                var clientLeft = s.container[0].clientLeft;
                return s.slideTo(s.activeIndex + s.params.slidesPerGroup, speed, runCallbacks, internal);
            }
            else return s.slideTo(s.activeIndex + s.params.slidesPerGroup, speed, runCallbacks, internal);
        };
        s._slideNext = function (speed) {
            return s.slideNext(true, speed, true);
        };
        s.slidePrev = function (runCallbacks, speed, internal) {
            if (s.params.loop) {
                if (s.animating) return false;
                s.fixLoop();
                var clientLeft = s.container[0].clientLeft;
                return s.slideTo(s.activeIndex - 1, speed, runCallbacks, internal);
            }
            else return s.slideTo(s.activeIndex - 1, speed, runCallbacks, internal);
        };
        s._slidePrev = function (speed) {
            return s.slidePrev(true, speed, true);
        };
        s.slideReset = function (runCallbacks, speed, internal) {
            return s.slideTo(s.activeIndex, speed, runCallbacks);
        };
        
        s.disableTouchControl = function () {
            s.params.onlyExternal = true;
            return true;
        };
        s.enableTouchControl = function () {
            s.params.onlyExternal = false;
            return true;
        };
        
        /*=========================
          Translate/transition helpers
          ===========================*/
        s.setWrapperTransition = function (duration, byController) {
            s.wrapper.transition(duration);
            if (s.params.effect !== 'slide' && s.effects[s.params.effect]) {
                s.effects[s.params.effect].setTransition(duration);
            }
            if (s.params.parallax && s.parallax) {
                s.parallax.setTransition(duration);
            }
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.setTransition(duration);
            }
            if (s.params.control && s.controller) {
                s.controller.setTransition(duration, byController);
            }
            s.emit('onSetTransition', s, duration);
        };
        s.setWrapperTranslate = function (translate, updateActiveIndex, byController) {
            var x = 0, y = 0, z = 0;
            if (s.isHorizontal()) {
                x = s.rtl ? -translate : translate;
            }
            else {
                y = translate;
            }
        
            if (s.params.roundLengths) {
                x = round(x);
                y = round(y);
            }
        
            if (!s.params.virtualTranslate) {
                if (s.support.transforms3d) s.wrapper.transform('translate3d(' + x + 'px, ' + y + 'px, ' + z + 'px)');
                else s.wrapper.transform('translate(' + x + 'px, ' + y + 'px)');
            }
        
            s.translate = s.isHorizontal() ? x : y;
        
            // Check if we need to update progress
            var progress;
            var translatesDiff = s.maxTranslate() - s.minTranslate();
            if (translatesDiff === 0) {
                progress = 0;
            }
            else {
                progress = (translate - s.minTranslate()) / (translatesDiff);
            }
            if (progress !== s.progress) {
                s.updateProgress(translate);
            }
        
            if (updateActiveIndex) s.updateActiveIndex();
            if (s.params.effect !== 'slide' && s.effects[s.params.effect]) {
                s.effects[s.params.effect].setTranslate(s.translate);
            }
            if (s.params.parallax && s.parallax) {
                s.parallax.setTranslate(s.translate);
            }
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.setTranslate(s.translate);
            }
            if (s.params.control && s.controller) {
                s.controller.setTranslate(s.translate, byController);
            }
            s.emit('onSetTranslate', s, s.translate);
        };
        
        s.getTranslate = function (el, axis) {
            var matrix, curTransform, curStyle, transformMatrix;
        
            // automatic axis detection
            if (typeof axis === 'undefined') {
                axis = 'x';
            }
        
            if (s.params.virtualTranslate) {
                return s.rtl ? -s.translate : s.translate;
            }
        
            curStyle = window.getComputedStyle(el, null);
            if (window.WebKitCSSMatrix) {
                curTransform = curStyle.transform || curStyle.webkitTransform;
                if (curTransform.split(',').length > 6) {
                    curTransform = curTransform.split(', ').map(function(a){
                        return a.replace(',','.');
                    }).join(', ');
                }
                // Some old versions of Webkit choke when 'none' is passed; pass
                // empty string instead in this case
                transformMatrix = new window.WebKitCSSMatrix(curTransform === 'none' ? '' : curTransform);
            }
            else {
                transformMatrix = curStyle.MozTransform || curStyle.OTransform || curStyle.MsTransform || curStyle.msTransform  || curStyle.transform || curStyle.getPropertyValue('transform').replace('translate(', 'matrix(1, 0, 0, 1,');
                matrix = transformMatrix.toString().split(',');
            }
        
            if (axis === 'x') {
                //Latest Chrome and webkits Fix
                if (window.WebKitCSSMatrix)
                    curTransform = transformMatrix.m41;
                //Crazy IE10 Matrix
                else if (matrix.length === 16)
                    curTransform = parseFloat(matrix[12]);
                //Normal Browsers
                else
                    curTransform = parseFloat(matrix[4]);
            }
            if (axis === 'y') {
                //Latest Chrome and webkits Fix
                if (window.WebKitCSSMatrix)
                    curTransform = transformMatrix.m42;
                //Crazy IE10 Matrix
                else if (matrix.length === 16)
                    curTransform = parseFloat(matrix[13]);
                //Normal Browsers
                else
                    curTransform = parseFloat(matrix[5]);
            }
            if (s.rtl && curTransform) curTransform = -curTransform;
            return curTransform || 0;
        };
        s.getWrapperTranslate = function (axis) {
            if (typeof axis === 'undefined') {
                axis = s.isHorizontal() ? 'x' : 'y';
            }
            return s.getTranslate(s.wrapper[0], axis);
        };
        
        /*=========================
          Observer
          ===========================*/
        s.observers = [];
        function initObserver(target, options) {
            options = options || {};
            // create an observer instance
            var ObserverFunc = window.MutationObserver || window.WebkitMutationObserver;
            var observer = new ObserverFunc(function (mutations) {
                mutations.forEach(function (mutation) {
                    s.onResize(true);
                    s.emit('onObserverUpdate', s, mutation);
                });
            });
        
            observer.observe(target, {
                attributes: typeof options.attributes === 'undefined' ? true : options.attributes,
                childList: typeof options.childList === 'undefined' ? true : options.childList,
                characterData: typeof options.characterData === 'undefined' ? true : options.characterData
            });
        
            s.observers.push(observer);
        }
        s.initObservers = function () {
            if (s.params.observeParents) {
                var containerParents = s.container.parents();
                for (var i = 0; i < containerParents.length; i++) {
                    initObserver(containerParents[i]);
                }
            }
        
            // Observe container
            initObserver(s.container[0], {childList: false});
        
            // Observe wrapper
            initObserver(s.wrapper[0], {attributes: false});
        };
        s.disconnectObservers = function () {
            for (var i = 0; i < s.observers.length; i++) {
                s.observers[i].disconnect();
            }
            s.observers = [];
        };
        /*=========================
          Loop
          ===========================*/
        // Create looped slides
        s.createLoop = function () {
            // Remove duplicated slides
            s.wrapper.children('.' + s.params.slideClass + '.' + s.params.slideDuplicateClass).remove();
        
            var slides = s.wrapper.children('.' + s.params.slideClass);
        
            if(s.params.slidesPerView === 'auto' && !s.params.loopedSlides) s.params.loopedSlides = slides.length;
        
            s.loopedSlides = parseInt(s.params.loopedSlides || s.params.slidesPerView, 10);
            s.loopedSlides = s.loopedSlides + s.params.loopAdditionalSlides;
            if (s.loopedSlides > slides.length) {
                s.loopedSlides = slides.length;
            }
        
            var prependSlides = [], appendSlides = [], i;
            slides.each(function (index, el) {
                var slide = $(this);
                if (index < s.loopedSlides) appendSlides.push(el);
                if (index < slides.length && index >= slides.length - s.loopedSlides) prependSlides.push(el);
                slide.attr('data-swiper-slide-index', index);
            });
            for (i = 0; i < appendSlides.length; i++) {
                s.wrapper.append($(appendSlides[i].cloneNode(true)).addClass(s.params.slideDuplicateClass));
            }
            for (i = prependSlides.length - 1; i >= 0; i--) {
                s.wrapper.prepend($(prependSlides[i].cloneNode(true)).addClass(s.params.slideDuplicateClass));
            }
        };
        s.destroyLoop = function () {
            s.wrapper.children('.' + s.params.slideClass + '.' + s.params.slideDuplicateClass).remove();
            s.slides.removeAttr('data-swiper-slide-index');
        };
        s.reLoop = function (updatePosition) {
            var oldIndex = s.activeIndex - s.loopedSlides;
            s.destroyLoop();
            s.createLoop();
            s.updateSlidesSize();
            if (updatePosition) {
                s.slideTo(oldIndex + s.loopedSlides, 0, false);
            }
        
        };
        s.fixLoop = function () {
            var newIndex;
            //Fix For Negative Oversliding
            if (s.activeIndex < s.loopedSlides) {
                newIndex = s.slides.length - s.loopedSlides * 3 + s.activeIndex;
                newIndex = newIndex + s.loopedSlides;
                s.slideTo(newIndex, 0, false, true);
            }
            //Fix For Positive Oversliding
            else if ((s.params.slidesPerView === 'auto' && s.activeIndex >= s.loopedSlides * 2) || (s.activeIndex > s.slides.length - s.params.slidesPerView * 2)) {
                newIndex = -s.slides.length + s.activeIndex + s.loopedSlides;
                newIndex = newIndex + s.loopedSlides;
                s.slideTo(newIndex, 0, false, true);
            }
        };
        /*=========================
          Append/Prepend/Remove Slides
          ===========================*/
        s.appendSlide = function (slides) {
            if (s.params.loop) {
                s.destroyLoop();
            }
            if (typeof slides === 'object' && slides.length) {
                for (var i = 0; i < slides.length; i++) {
                    if (slides[i]) s.wrapper.append(slides[i]);
                }
            }
            else {
                s.wrapper.append(slides);
            }
            if (s.params.loop) {
                s.createLoop();
            }
            if (!(s.params.observer && s.support.observer)) {
                s.update(true);
            }
        };
        s.prependSlide = function (slides) {
            if (s.params.loop) {
                s.destroyLoop();
            }
            var newActiveIndex = s.activeIndex + 1;
            if (typeof slides === 'object' && slides.length) {
                for (var i = 0; i < slides.length; i++) {
                    if (slides[i]) s.wrapper.prepend(slides[i]);
                }
                newActiveIndex = s.activeIndex + slides.length;
            }
            else {
                s.wrapper.prepend(slides);
            }
            if (s.params.loop) {
                s.createLoop();
            }
            if (!(s.params.observer && s.support.observer)) {
                s.update(true);
            }
            s.slideTo(newActiveIndex, 0, false);
        };
        s.removeSlide = function (slidesIndexes) {
            if (s.params.loop) {
                s.destroyLoop();
                s.slides = s.wrapper.children('.' + s.params.slideClass);
            }
            var newActiveIndex = s.activeIndex,
                indexToRemove;
            if (typeof slidesIndexes === 'object' && slidesIndexes.length) {
                for (var i = 0; i < slidesIndexes.length; i++) {
                    indexToRemove = slidesIndexes[i];
                    if (s.slides[indexToRemove]) s.slides.eq(indexToRemove).remove();
                    if (indexToRemove < newActiveIndex) newActiveIndex--;
                }
                newActiveIndex = Math.max(newActiveIndex, 0);
            }
            else {
                indexToRemove = slidesIndexes;
                if (s.slides[indexToRemove]) s.slides.eq(indexToRemove).remove();
                if (indexToRemove < newActiveIndex) newActiveIndex--;
                newActiveIndex = Math.max(newActiveIndex, 0);
            }
        
            if (s.params.loop) {
                s.createLoop();
            }
        
            if (!(s.params.observer && s.support.observer)) {
                s.update(true);
            }
            if (s.params.loop) {
                s.slideTo(newActiveIndex + s.loopedSlides, 0, false);
            }
            else {
                s.slideTo(newActiveIndex, 0, false);
            }
        
        };
        s.removeAllSlides = function () {
            var slidesIndexes = [];
            for (var i = 0; i < s.slides.length; i++) {
                slidesIndexes.push(i);
            }
            s.removeSlide(slidesIndexes);
        };
        

        /*=========================
          Effects
          ===========================*/
        s.effects = {
            fade: {
                setTranslate: function () {
                    for (var i = 0; i < s.slides.length; i++) {
                        var slide = s.slides.eq(i);
                        var offset = slide[0].swiperSlideOffset;
                        var tx = -offset;
                        if (!s.params.virtualTranslate) tx = tx - s.translate;
                        var ty = 0;
                        if (!s.isHorizontal()) {
                            ty = tx;
                            tx = 0;
                        }
                        var slideOpacity = s.params.fade.crossFade ?
                                Math.max(1 - Math.abs(slide[0].progress), 0) :
                                1 + Math.min(Math.max(slide[0].progress, -1), 0);
                        slide
                            .css({
                                opacity: slideOpacity
                            })
                            .transform('translate3d(' + tx + 'px, ' + ty + 'px, 0px)');
        
                    }
        
                },
                setTransition: function (duration) {
                    s.slides.transition(duration);
                    if (s.params.virtualTranslate && duration !== 0) {
                        var eventTriggered = false;
                        s.slides.transitionEnd(function () {
                            if (eventTriggered) return;
                            if (!s) return;
                            eventTriggered = true;
                            s.animating = false;
                            var triggerEvents = ['webkitTransitionEnd', 'transitionend', 'oTransitionEnd', 'MSTransitionEnd', 'msTransitionEnd'];
                            for (var i = 0; i < triggerEvents.length; i++) {
                                s.wrapper.trigger(triggerEvents[i]);
                            }
                        });
                    }
                }
            },
            flip: {
                setTranslate: function () {
                    for (var i = 0; i < s.slides.length; i++) {
                        var slide = s.slides.eq(i);
                        var progress = slide[0].progress;
                        if (s.params.flip.limitRotation) {
                            progress = Math.max(Math.min(slide[0].progress, 1), -1);
                        }
                        var offset = slide[0].swiperSlideOffset;
                        var rotate = -180 * progress,
                            rotateY = rotate,
                            rotateX = 0,
                            tx = -offset,
                            ty = 0;
                        if (!s.isHorizontal()) {
                            ty = tx;
                            tx = 0;
                            rotateX = -rotateY;
                            rotateY = 0;
                        }
                        else if (s.rtl) {
                            rotateY = -rotateY;
                        }
        
                        slide[0].style.zIndex = -Math.abs(Math.round(progress)) + s.slides.length;
        
                        if (s.params.flip.slideShadows) {
                            //Set shadows
                            var shadowBefore = s.isHorizontal() ? slide.find('.swiper-slide-shadow-left') : slide.find('.swiper-slide-shadow-top');
                            var shadowAfter = s.isHorizontal() ? slide.find('.swiper-slide-shadow-right') : slide.find('.swiper-slide-shadow-bottom');
                            if (shadowBefore.length === 0) {
                                shadowBefore = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'left' : 'top') + '"></div>');
                                slide.append(shadowBefore);
                            }
                            if (shadowAfter.length === 0) {
                                shadowAfter = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'right' : 'bottom') + '"></div>');
                                slide.append(shadowAfter);
                            }
                            if (shadowBefore.length) shadowBefore[0].style.opacity = Math.max(-progress, 0);
                            if (shadowAfter.length) shadowAfter[0].style.opacity = Math.max(progress, 0);
                        }
        
                        slide
                            .transform('translate3d(' + tx + 'px, ' + ty + 'px, 0px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)');
                    }
                },
                setTransition: function (duration) {
                    s.slides.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
                    if (s.params.virtualTranslate && duration !== 0) {
                        var eventTriggered = false;
                        s.slides.eq(s.activeIndex).transitionEnd(function () {
                            if (eventTriggered) return;
                            if (!s) return;
                            if (!$(this).hasClass(s.params.slideActiveClass)) return;
                            eventTriggered = true;
                            s.animating = false;
                            var triggerEvents = ['webkitTransitionEnd', 'transitionend', 'oTransitionEnd', 'MSTransitionEnd', 'msTransitionEnd'];
                            for (var i = 0; i < triggerEvents.length; i++) {
                                s.wrapper.trigger(triggerEvents[i]);
                            }
                        });
                    }
                }
            },
            cube: {
                setTranslate: function () {
                    var wrapperRotate = 0, cubeShadow;
                    if (s.params.cube.shadow) {
                        if (s.isHorizontal()) {
                            cubeShadow = s.wrapper.find('.swiper-cube-shadow');
                            if (cubeShadow.length === 0) {
                                cubeShadow = $('<div class="swiper-cube-shadow"></div>');
                                s.wrapper.append(cubeShadow);
                            }
                            cubeShadow.css({height: s.width + 'px'});
                        }
                        else {
                            cubeShadow = s.container.find('.swiper-cube-shadow');
                            if (cubeShadow.length === 0) {
                                cubeShadow = $('<div class="swiper-cube-shadow"></div>');
                                s.container.append(cubeShadow);
                            }
                        }
                    }
                    for (var i = 0; i < s.slides.length; i++) {
                        var slide = s.slides.eq(i);
                        var slideAngle = i * 90;
                        var round = Math.floor(slideAngle / 360);
                        if (s.rtl) {
                            slideAngle = -slideAngle;
                            round = Math.floor(-slideAngle / 360);
                        }
                        var progress = Math.max(Math.min(slide[0].progress, 1), -1);
                        var tx = 0, ty = 0, tz = 0;
                        if (i % 4 === 0) {
                            tx = - round * 4 * s.size;
                            tz = 0;
                        }
                        else if ((i - 1) % 4 === 0) {
                            tx = 0;
                            tz = - round * 4 * s.size;
                        }
                        else if ((i - 2) % 4 === 0) {
                            tx = s.size + round * 4 * s.size;
                            tz = s.size;
                        }
                        else if ((i - 3) % 4 === 0) {
                            tx = - s.size;
                            tz = 3 * s.size + s.size * 4 * round;
                        }
                        if (s.rtl) {
                            tx = -tx;
                        }
        
                        if (!s.isHorizontal()) {
                            ty = tx;
                            tx = 0;
                        }
        
                        var transform = 'rotateX(' + (s.isHorizontal() ? 0 : -slideAngle) + 'deg) rotateY(' + (s.isHorizontal() ? slideAngle : 0) + 'deg) translate3d(' + tx + 'px, ' + ty + 'px, ' + tz + 'px)';
                        if (progress <= 1 && progress > -1) {
                            wrapperRotate = i * 90 + progress * 90;
                            if (s.rtl) wrapperRotate = -i * 90 - progress * 90;
                        }
                        slide.transform(transform);
                        if (s.params.cube.slideShadows) {
                            //Set shadows
                            var shadowBefore = s.isHorizontal() ? slide.find('.swiper-slide-shadow-left') : slide.find('.swiper-slide-shadow-top');
                            var shadowAfter = s.isHorizontal() ? slide.find('.swiper-slide-shadow-right') : slide.find('.swiper-slide-shadow-bottom');
                            if (shadowBefore.length === 0) {
                                shadowBefore = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'left' : 'top') + '"></div>');
                                slide.append(shadowBefore);
                            }
                            if (shadowAfter.length === 0) {
                                shadowAfter = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'right' : 'bottom') + '"></div>');
                                slide.append(shadowAfter);
                            }
                            if (shadowBefore.length) shadowBefore[0].style.opacity = Math.max(-progress, 0);
                            if (shadowAfter.length) shadowAfter[0].style.opacity = Math.max(progress, 0);
                        }
                    }
                    s.wrapper.css({
                        '-webkit-transform-origin': '50% 50% -' + (s.size / 2) + 'px',
                        '-moz-transform-origin': '50% 50% -' + (s.size / 2) + 'px',
                        '-ms-transform-origin': '50% 50% -' + (s.size / 2) + 'px',
                        'transform-origin': '50% 50% -' + (s.size / 2) + 'px'
                    });
        
                    if (s.params.cube.shadow) {
                        if (s.isHorizontal()) {
                            cubeShadow.transform('translate3d(0px, ' + (s.width / 2 + s.params.cube.shadowOffset) + 'px, ' + (-s.width / 2) + 'px) rotateX(90deg) rotateZ(0deg) scale(' + (s.params.cube.shadowScale) + ')');
                        }
                        else {
                            var shadowAngle = Math.abs(wrapperRotate) - Math.floor(Math.abs(wrapperRotate) / 90) * 90;
                            var multiplier = 1.5 - (Math.sin(shadowAngle * 2 * Math.PI / 360) / 2 + Math.cos(shadowAngle * 2 * Math.PI / 360) / 2);
                            var scale1 = s.params.cube.shadowScale,
                                scale2 = s.params.cube.shadowScale / multiplier,
                                offset = s.params.cube.shadowOffset;
                            cubeShadow.transform('scale3d(' + scale1 + ', 1, ' + scale2 + ') translate3d(0px, ' + (s.height / 2 + offset) + 'px, ' + (-s.height / 2 / scale2) + 'px) rotateX(-90deg)');
                        }
                    }
                    var zFactor = (s.isSafari || s.isUiWebView) ? (-s.size / 2) : 0;
                    s.wrapper.transform('translate3d(0px,0,' + zFactor + 'px) rotateX(' + (s.isHorizontal() ? 0 : wrapperRotate) + 'deg) rotateY(' + (s.isHorizontal() ? -wrapperRotate : 0) + 'deg)');
                },
                setTransition: function (duration) {
                    s.slides.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
                    if (s.params.cube.shadow && !s.isHorizontal()) {
                        s.container.find('.swiper-cube-shadow').transition(duration);
                    }
                }
            },
            coverflow: {
                setTranslate: function () {
                    var transform = s.translate;
                    var center = s.isHorizontal() ? -transform + s.width / 2 : -transform + s.height / 2;
                    var rotate = s.isHorizontal() ? s.params.coverflow.rotate: -s.params.coverflow.rotate;
                    var translate = s.params.coverflow.depth;
                    //Each slide offset from center
                    for (var i = 0, length = s.slides.length; i < length; i++) {
                        var slide = s.slides.eq(i);
                        var slideSize = s.slidesSizesGrid[i];
                        var slideOffset = slide[0].swiperSlideOffset;
                        var offsetMultiplier = (center - slideOffset - slideSize / 2) / slideSize * s.params.coverflow.modifier;
        
                        var rotateY = s.isHorizontal() ? rotate * offsetMultiplier : 0;
                        var rotateX = s.isHorizontal() ? 0 : rotate * offsetMultiplier;
                        // var rotateZ = 0
                        var translateZ = -translate * Math.abs(offsetMultiplier);
        
                        var translateY = s.isHorizontal() ? 0 : s.params.coverflow.stretch * (offsetMultiplier);
                        var translateX = s.isHorizontal() ? s.params.coverflow.stretch * (offsetMultiplier) : 0;
        
                        //Fix for ultra small values
                        if (Math.abs(translateX) < 0.001) translateX = 0;
                        if (Math.abs(translateY) < 0.001) translateY = 0;
                        if (Math.abs(translateZ) < 0.001) translateZ = 0;
                        if (Math.abs(rotateY) < 0.001) rotateY = 0;
                        if (Math.abs(rotateX) < 0.001) rotateX = 0;
        
                        var slideTransform = 'translate3d(' + translateX + 'px,' + translateY + 'px,' + translateZ + 'px)  rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
        
                        slide.transform(slideTransform);
                        slide[0].style.zIndex = -Math.abs(Math.round(offsetMultiplier)) + 1;
                        if (s.params.coverflow.slideShadows) {
                            //Set shadows
                            var shadowBefore = s.isHorizontal() ? slide.find('.swiper-slide-shadow-left') : slide.find('.swiper-slide-shadow-top');
                            var shadowAfter = s.isHorizontal() ? slide.find('.swiper-slide-shadow-right') : slide.find('.swiper-slide-shadow-bottom');
                            if (shadowBefore.length === 0) {
                                shadowBefore = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'left' : 'top') + '"></div>');
                                slide.append(shadowBefore);
                            }
                            if (shadowAfter.length === 0) {
                                shadowAfter = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'right' : 'bottom') + '"></div>');
                                slide.append(shadowAfter);
                            }
                            if (shadowBefore.length) shadowBefore[0].style.opacity = offsetMultiplier > 0 ? offsetMultiplier : 0;
                            if (shadowAfter.length) shadowAfter[0].style.opacity = (-offsetMultiplier) > 0 ? -offsetMultiplier : 0;
                        }
                    }
        
                    //Set correct perspective for IE10
                    if (s.browser.ie) {
                        var ws = s.wrapper[0].style;
                        ws.perspectiveOrigin = center + 'px 50%';
                    }
                },
                setTransition: function (duration) {
                    s.slides.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
                }
            }
        };

        /*=========================
          Images Lazy Loading
          ===========================*/
        s.lazy = {
            initialImageLoaded: false,
            loadImageInSlide: function (index, loadInDuplicate) {
                if (typeof index === 'undefined') return;
                if (typeof loadInDuplicate === 'undefined') loadInDuplicate = true;
                if (s.slides.length === 0) return;
        
                var slide = s.slides.eq(index);
                var img = slide.find('.' + s.params.lazyLoadingClass + ':not(.' + s.params.lazyStatusLoadedClass + '):not(.' + s.params.lazyStatusLoadingClass + ')');
                if (slide.hasClass(s.params.lazyLoadingClass) && !slide.hasClass(s.params.lazyStatusLoadedClass) && !slide.hasClass(s.params.lazyStatusLoadingClass)) {
                    img = img.add(slide[0]);
                }
                if (img.length === 0) return;
        
                img.each(function () {
                    var _img = $(this);
                    _img.addClass(s.params.lazyStatusLoadingClass);
                    var background = _img.attr('data-background');
                    var src = _img.attr('data-src'),
                        srcset = _img.attr('data-srcset'),
                        sizes = _img.attr('data-sizes');
                    s.loadImage(_img[0], (src || background), srcset, sizes, false, function () {
                        if (background) {
                            _img.css('background-image', 'url("' + background + '")');
                            _img.removeAttr('data-background');
                        }
                        else {
                            if (srcset) {
                                _img.attr('srcset', srcset);
                                _img.removeAttr('data-srcset');
                            }
                            if (sizes) {
                                _img.attr('sizes', sizes);
                                _img.removeAttr('data-sizes');
                            }
                            if (src) {
                                _img.attr('src', src);
                                _img.removeAttr('data-src');
                            }
        
                        }
        
                        _img.addClass(s.params.lazyStatusLoadedClass).removeClass(s.params.lazyStatusLoadingClass);
                        slide.find('.' + s.params.lazyPreloaderClass + ', .' + s.params.preloaderClass).remove();
                        if (s.params.loop && loadInDuplicate) {
                            var slideOriginalIndex = slide.attr('data-swiper-slide-index');
                            if (slide.hasClass(s.params.slideDuplicateClass)) {
                                var originalSlide = s.wrapper.children('[data-swiper-slide-index="' + slideOriginalIndex + '"]:not(.' + s.params.slideDuplicateClass + ')');
                                s.lazy.loadImageInSlide(originalSlide.index(), false);
                            }
                            else {
                                var duplicatedSlide = s.wrapper.children('.' + s.params.slideDuplicateClass + '[data-swiper-slide-index="' + slideOriginalIndex + '"]');
                                s.lazy.loadImageInSlide(duplicatedSlide.index(), false);
                            }
                        }
                        s.emit('onLazyImageReady', s, slide[0], _img[0]);
                    });
        
                    s.emit('onLazyImageLoad', s, slide[0], _img[0]);
                });
        
            },
            load: function () {
                var i;
                var slidesPerView = s.params.slidesPerView;
                if (slidesPerView === 'auto') {
                    slidesPerView = 0;
                }
                if (!s.lazy.initialImageLoaded) s.lazy.initialImageLoaded = true;
                if (s.params.watchSlidesVisibility) {
                    s.wrapper.children('.' + s.params.slideVisibleClass).each(function () {
                        s.lazy.loadImageInSlide($(this).index());
                    });
                }
                else {
                    if (slidesPerView > 1) {
                        for (i = s.activeIndex; i < s.activeIndex + slidesPerView ; i++) {
                            if (s.slides[i]) s.lazy.loadImageInSlide(i);
                        }
                    }
                    else {
                        s.lazy.loadImageInSlide(s.activeIndex);
                    }
                }
                if (s.params.lazyLoadingInPrevNext) {
                    if (slidesPerView > 1 || (s.params.lazyLoadingInPrevNextAmount && s.params.lazyLoadingInPrevNextAmount > 1)) {
                        var amount = s.params.lazyLoadingInPrevNextAmount;
                        var spv = slidesPerView;
                        var maxIndex = Math.min(s.activeIndex + spv + Math.max(amount, spv), s.slides.length);
                        var minIndex = Math.max(s.activeIndex - Math.max(spv, amount), 0);
                        // Next Slides
                        for (i = s.activeIndex + slidesPerView; i < maxIndex; i++) {
                            if (s.slides[i]) s.lazy.loadImageInSlide(i);
                        }
                        // Prev Slides
                        for (i = minIndex; i < s.activeIndex ; i++) {
                            if (s.slides[i]) s.lazy.loadImageInSlide(i);
                        }
                    }
                    else {
                        var nextSlide = s.wrapper.children('.' + s.params.slideNextClass);
                        if (nextSlide.length > 0) s.lazy.loadImageInSlide(nextSlide.index());
        
                        var prevSlide = s.wrapper.children('.' + s.params.slidePrevClass);
                        if (prevSlide.length > 0) s.lazy.loadImageInSlide(prevSlide.index());
                    }
                }
            },
            onTransitionStart: function () {
                if (s.params.lazyLoading) {
                    if (s.params.lazyLoadingOnTransitionStart || (!s.params.lazyLoadingOnTransitionStart && !s.lazy.initialImageLoaded)) {
                        s.lazy.load();
                    }
                }
            },
            onTransitionEnd: function () {
                if (s.params.lazyLoading && !s.params.lazyLoadingOnTransitionStart) {
                    s.lazy.load();
                }
            }
        };
        

        /*=========================
          Scrollbar
          ===========================*/
        s.scrollbar = {
            isTouched: false,
            setDragPosition: function (e) {
                var sb = s.scrollbar;
                var x = 0, y = 0;
                var translate;
                var pointerPosition = s.isHorizontal() ?
                    ((e.type === 'touchstart' || e.type === 'touchmove') ? e.targetTouches[0].pageX : e.pageX || e.clientX) :
                    ((e.type === 'touchstart' || e.type === 'touchmove') ? e.targetTouches[0].pageY : e.pageY || e.clientY) ;
                var position = (pointerPosition) - sb.track.offset()[s.isHorizontal() ? 'left' : 'top'] - sb.dragSize / 2;
                var positionMin = -s.minTranslate() * sb.moveDivider;
                var positionMax = -s.maxTranslate() * sb.moveDivider;
                if (position < positionMin) {
                    position = positionMin;
                }
                else if (position > positionMax) {
                    position = positionMax;
                }
                position = -position / sb.moveDivider;
                s.updateProgress(position);
                s.setWrapperTranslate(position, true);
            },
            dragStart: function (e) {
                var sb = s.scrollbar;
                sb.isTouched = true;
                e.preventDefault();
                e.stopPropagation();
        
                sb.setDragPosition(e);
                clearTimeout(sb.dragTimeout);
        
                sb.track.transition(0);
                if (s.params.scrollbarHide) {
                    sb.track.css('opacity', 1);
                }
                s.wrapper.transition(100);
                sb.drag.transition(100);
                s.emit('onScrollbarDragStart', s);
            },
            dragMove: function (e) {
                var sb = s.scrollbar;
                if (!sb.isTouched) return;
                if (e.preventDefault) e.preventDefault();
                else e.returnValue = false;
                sb.setDragPosition(e);
                s.wrapper.transition(0);
                sb.track.transition(0);
                sb.drag.transition(0);
                s.emit('onScrollbarDragMove', s);
            },
            dragEnd: function (e) {
                var sb = s.scrollbar;
                if (!sb.isTouched) return;
                sb.isTouched = false;
                if (s.params.scrollbarHide) {
                    clearTimeout(sb.dragTimeout);
                    sb.dragTimeout = setTimeout(function () {
                        sb.track.css('opacity', 0);
                        sb.track.transition(400);
                    }, 1000);
        
                }
                s.emit('onScrollbarDragEnd', s);
                if (s.params.scrollbarSnapOnRelease) {
                    s.slideReset();
                }
            },
            draggableEvents: (function () {
                if ((s.params.simulateTouch === false && !s.support.touch)) return s.touchEventsDesktop;
                else return s.touchEvents;
            })(),
            enableDraggable: function () {
                var sb = s.scrollbar;
                var target = s.support.touch ? sb.track : document;
                $(sb.track).on(sb.draggableEvents.start, sb.dragStart);
                $(target).on(sb.draggableEvents.move, sb.dragMove);
                $(target).on(sb.draggableEvents.end, sb.dragEnd);
            },
            disableDraggable: function () {
                var sb = s.scrollbar;
                var target = s.support.touch ? sb.track : document;
                $(sb.track).off(s.draggableEvents.start, sb.dragStart);
                $(target).off(s.draggableEvents.move, sb.dragMove);
                $(target).off(s.draggableEvents.end, sb.dragEnd);
            },
            set: function () {
                if (!s.params.scrollbar) return;
                var sb = s.scrollbar;
                sb.track = $(s.params.scrollbar);
                if (s.params.uniqueNavElements && typeof s.params.scrollbar === 'string' && sb.track.length > 1 && s.container.find(s.params.scrollbar).length === 1) {
                    sb.track = s.container.find(s.params.scrollbar);
                }
                sb.drag = sb.track.find('.swiper-scrollbar-drag');
                if (sb.drag.length === 0) {
                    sb.drag = $('<div class="swiper-scrollbar-drag"></div>');
                    sb.track.append(sb.drag);
                }
                sb.drag[0].style.width = '';
                sb.drag[0].style.height = '';
                sb.trackSize = s.isHorizontal() ? sb.track[0].offsetWidth : sb.track[0].offsetHeight;
        
                sb.divider = s.size / s.virtualSize;
                sb.moveDivider = sb.divider * (sb.trackSize / s.size);
                sb.dragSize = sb.trackSize * sb.divider;
        
                if (s.isHorizontal()) {
                    sb.drag[0].style.width = sb.dragSize + 'px';
                }
                else {
                    sb.drag[0].style.height = sb.dragSize + 'px';
                }
        
                if (sb.divider >= 1) {
                    sb.track[0].style.display = 'none';
                }
                else {
                    sb.track[0].style.display = '';
                }
                if (s.params.scrollbarHide) {
                    sb.track[0].style.opacity = 0;
                }
            },
            setTranslate: function () {
                if (!s.params.scrollbar) return;
                var diff;
                var sb = s.scrollbar;
                var translate = s.translate || 0;
                var newPos;
        
                var newSize = sb.dragSize;
                newPos = (sb.trackSize - sb.dragSize) * s.progress;
                if (s.rtl && s.isHorizontal()) {
                    newPos = -newPos;
                    if (newPos > 0) {
                        newSize = sb.dragSize - newPos;
                        newPos = 0;
                    }
                    else if (-newPos + sb.dragSize > sb.trackSize) {
                        newSize = sb.trackSize + newPos;
                    }
                }
                else {
                    if (newPos < 0) {
                        newSize = sb.dragSize + newPos;
                        newPos = 0;
                    }
                    else if (newPos + sb.dragSize > sb.trackSize) {
                        newSize = sb.trackSize - newPos;
                    }
                }
                if (s.isHorizontal()) {
                    if (s.support.transforms3d) {
                        sb.drag.transform('translate3d(' + (newPos) + 'px, 0, 0)');
                    }
                    else {
                        sb.drag.transform('translateX(' + (newPos) + 'px)');
                    }
                    sb.drag[0].style.width = newSize + 'px';
                }
                else {
                    if (s.support.transforms3d) {
                        sb.drag.transform('translate3d(0px, ' + (newPos) + 'px, 0)');
                    }
                    else {
                        sb.drag.transform('translateY(' + (newPos) + 'px)');
                    }
                    sb.drag[0].style.height = newSize + 'px';
                }
                if (s.params.scrollbarHide) {
                    clearTimeout(sb.timeout);
                    sb.track[0].style.opacity = 1;
                    sb.timeout = setTimeout(function () {
                        sb.track[0].style.opacity = 0;
                        sb.track.transition(400);
                    }, 1000);
                }
            },
            setTransition: function (duration) {
                if (!s.params.scrollbar) return;
                s.scrollbar.drag.transition(duration);
            }
        };

        /*=========================
          Controller
          ===========================*/
        s.controller = {
            LinearSpline: function (x, y) {
                this.x = x;
                this.y = y;
                this.lastIndex = x.length - 1;
                // Given an x value (x2), return the expected y2 value:
                // (x1,y1) is the known point before given value,
                // (x3,y3) is the known point after given value.
                var i1, i3;
                var l = this.x.length;
        
                this.interpolate = function (x2) {
                    if (!x2) return 0;
        
                    // Get the indexes of x1 and x3 (the array indexes before and after given x2):
                    i3 = binarySearch(this.x, x2);
                    i1 = i3 - 1;
        
                    // We have our indexes i1 & i3, so we can calculate already:
                    // y2 := ((x2−x1) × (y3−y1)) ÷ (x3−x1) + y1
                    return ((x2 - this.x[i1]) * (this.y[i3] - this.y[i1])) / (this.x[i3] - this.x[i1]) + this.y[i1];
                };
        
                var binarySearch = (function() {
                    var maxIndex, minIndex, guess;
                    return function(array, val) {
                        minIndex = -1;
                        maxIndex = array.length;
                        while (maxIndex - minIndex > 1)
                            if (array[guess = maxIndex + minIndex >> 1] <= val) {
                                minIndex = guess;
                            } else {
                                maxIndex = guess;
                            }
                        return maxIndex;
                    };
                })();
            },
            //xxx: for now i will just save one spline function to to
            getInterpolateFunction: function(c){
                if(!s.controller.spline) s.controller.spline = s.params.loop ?
                    new s.controller.LinearSpline(s.slidesGrid, c.slidesGrid) :
                    new s.controller.LinearSpline(s.snapGrid, c.snapGrid);
            },
            setTranslate: function (translate, byController) {
               var controlled = s.params.control;
               var multiplier, controlledTranslate;
               function setControlledTranslate(c) {
                    // this will create an Interpolate function based on the snapGrids
                    // x is the Grid of the scrolled scroller and y will be the controlled scroller
                    // it makes sense to create this only once and recall it for the interpolation
                    // the function does a lot of value caching for performance
                    translate = c.rtl && c.params.direction === 'horizontal' ? -s.translate : s.translate;
                    if (s.params.controlBy === 'slide') {
                        s.controller.getInterpolateFunction(c);
                        // i am not sure why the values have to be multiplicated this way, tried to invert the snapGrid
                        // but it did not work out
                        controlledTranslate = -s.controller.spline.interpolate(-translate);
                    }
        
                    if(!controlledTranslate || s.params.controlBy === 'container'){
                        multiplier = (c.maxTranslate() - c.minTranslate()) / (s.maxTranslate() - s.minTranslate());
                        controlledTranslate = (translate - s.minTranslate()) * multiplier + c.minTranslate();
                    }
        
                    if (s.params.controlInverse) {
                        controlledTranslate = c.maxTranslate() - controlledTranslate;
                    }
                    c.updateProgress(controlledTranslate);
                    c.setWrapperTranslate(controlledTranslate, false, s);
                    c.updateActiveIndex();
               }
               if (s.isArray(controlled)) {
                   for (var i = 0; i < controlled.length; i++) {
                       if (controlled[i] !== byController && controlled[i] instanceof Swiper) {
                           setControlledTranslate(controlled[i]);
                       }
                   }
               }
               else if (controlled instanceof Swiper && byController !== controlled) {
        
                   setControlledTranslate(controlled);
               }
            },
            setTransition: function (duration, byController) {
                var controlled = s.params.control;
                var i;
                function setControlledTransition(c) {
                    c.setWrapperTransition(duration, s);
                    if (duration !== 0) {
                        c.onTransitionStart();
                        c.wrapper.transitionEnd(function(){
                            if (!controlled) return;
                            if (c.params.loop && s.params.controlBy === 'slide') {
                                c.fixLoop();
                            }
                            c.onTransitionEnd();
        
                        });
                    }
                }
                if (s.isArray(controlled)) {
                    for (i = 0; i < controlled.length; i++) {
                        if (controlled[i] !== byController && controlled[i] instanceof Swiper) {
                            setControlledTransition(controlled[i]);
                        }
                    }
                }
                else if (controlled instanceof Swiper && byController !== controlled) {
                    setControlledTransition(controlled);
                }
            }
        };

        /*=========================
          Hash Navigation
          ===========================*/
        s.hashnav = {
            onHashCange: function (e, a) {
                var newHash = document.location.hash.replace('#', '');
                var activeSlideHash = s.slides.eq(s.activeIndex).attr('data-hash');
                if (newHash !== activeSlideHash) {
                    s.slideTo(s.wrapper.children('.' + s.params.slideClass + '[data-hash="' + (newHash) + '"]').index());
                }
            },
            attachEvents: function (detach) {
                var action = detach ? 'off' : 'on';
                $(window)[action]('hashchange', s.hashnav.onHashCange);
            },
            setHash: function () {
                if (!s.hashnav.initialized || !s.params.hashnav) return;
                if (s.params.replaceState && window.history && window.history.replaceState) {
                    window.history.replaceState(null, null, ('#' + s.slides.eq(s.activeIndex).attr('data-hash') || ''));
                } else {
                    var slide = s.slides.eq(s.activeIndex);
                    var hash = slide.attr('data-hash') || slide.attr('data-history');
                    document.location.hash = hash || '';
                }
            },
            init: function () {
                if (!s.params.hashnav || s.params.history) return;
                s.hashnav.initialized = true;
                var hash = document.location.hash.replace('#', '');
                if (!hash) return;
                var speed = 0;
                for (var i = 0, length = s.slides.length; i < length; i++) {
                    var slide = s.slides.eq(i);
                    var slideHash = slide.attr('data-hash') || slide.attr('data-history');
                    if (slideHash === hash && !slide.hasClass(s.params.slideDuplicateClass)) {
                        var index = slide.index();
                        s.slideTo(index, speed, s.params.runCallbacksOnInit, true);
                    }
                }
                if (s.params.hashnavWatchState) s.hashnav.attachEvents();
            },
            destroy: function () {
                if (s.params.hashnavWatchState) s.hashnav.attachEvents(true);
            }
        };

        /*=========================
          History Api with fallback to Hashnav
          ===========================*/
        s.history = {
            init: function () {
                if (!s.params.history) return;
                if (!window.history || !window.history.pushState) {
                    s.params.history = false;
                    s.params.hashnav = true;
                    return;
                }
                s.history.initialized = true;
                this.paths = this.getPathValues();
                if (!this.paths.key && !this.paths.value) return;
                this.scrollToSlide(0, this.paths.value, s.params.runCallbacksOnInit);
                if (!s.params.replaceState) {
                    window.addEventListener('popstate', this.setHistoryPopState);
                }
            },
            setHistoryPopState: function() {
                s.history.paths = s.history.getPathValues();
                s.history.scrollToSlide(s.params.speed, s.history.paths.value, false);
            },
            getPathValues: function() {
                var pathArray = window.location.pathname.slice(1).split('/');
                var total = pathArray.length;
                var key = pathArray[total - 2];
                var value = pathArray[total - 1];
                return { key: key, value: value };
            },
            setHistory: function (key, index) {
                if (!s.history.initialized || !s.params.history) return;
                var slide = s.slides.eq(index);
                var value = this.slugify(slide.attr('data-history'));
                if (!window.location.pathname.includes(key)) {
                    value = key + '/' + value;
                }
                if (s.params.replaceState) {
                    window.history.replaceState(null, null, value);
                } else {
                    window.history.pushState(null, null, value);
                }
            },
            slugify: function(text) {
                return text.toString().toLowerCase()
                    .replace(/\s+/g, '-')
                    .replace(/[^\w\-]+/g, '')
                    .replace(/\-\-+/g, '-')
                    .replace(/^-+/, '')
                    .replace(/-+$/, '');
            },
            scrollToSlide: function(speed, value, runCallbacks) {
                if (value) {
                    for (var i = 0, length = s.slides.length; i < length; i++) {
                        var slide = s.slides.eq(i);
                        var slideHistory = this.slugify(slide.attr('data-history'));
                        if (slideHistory === value && !slide.hasClass(s.params.slideDuplicateClass)) {
                            var index = slide.index();
                            s.slideTo(index, speed, runCallbacks);
                        }
                    }
                } else {
                    s.slideTo(0, speed, runCallbacks);
                }
            }
        };

        /*=========================
          Keyboard Control
          ===========================*/
        function handleKeyboard(e) {
            if (e.originalEvent) e = e.originalEvent; //jquery fix
            var kc = e.keyCode || e.charCode;
            // Directions locks
            if (!s.params.allowSwipeToNext && (s.isHorizontal() && kc === 39 || !s.isHorizontal() && kc === 40)) {
                return false;
            }
            if (!s.params.allowSwipeToPrev && (s.isHorizontal() && kc === 37 || !s.isHorizontal() && kc === 38)) {
                return false;
            }
            if (e.shiftKey || e.altKey || e.ctrlKey || e.metaKey) {
                return;
            }
            if (document.activeElement && document.activeElement.nodeName && (document.activeElement.nodeName.toLowerCase() === 'input' || document.activeElement.nodeName.toLowerCase() === 'textarea')) {
                return;
            }
            if (kc === 37 || kc === 39 || kc === 38 || kc === 40) {
                var inView = false;
                //Check that swiper should be inside of visible area of window
                if (s.container.parents('.' + s.params.slideClass).length > 0 && s.container.parents('.' + s.params.slideActiveClass).length === 0) {
                    return;
                }
                var windowScroll = {
                    left: window.pageXOffset,
                    top: window.pageYOffset
                };
                var windowWidth = window.innerWidth;
                var windowHeight = window.innerHeight;
                var swiperOffset = s.container.offset();
                if (s.rtl) swiperOffset.left = swiperOffset.left - s.container[0].scrollLeft;
                var swiperCoord = [
                    [swiperOffset.left, swiperOffset.top],
                    [swiperOffset.left + s.width, swiperOffset.top],
                    [swiperOffset.left, swiperOffset.top + s.height],
                    [swiperOffset.left + s.width, swiperOffset.top + s.height]
                ];
                for (var i = 0; i < swiperCoord.length; i++) {
                    var point = swiperCoord[i];
                    if (
                        point[0] >= windowScroll.left && point[0] <= windowScroll.left + windowWidth &&
                        point[1] >= windowScroll.top && point[1] <= windowScroll.top + windowHeight
                    ) {
                        inView = true;
                    }
        
                }
                if (!inView) return;
            }
            if (s.isHorizontal()) {
                if (kc === 37 || kc === 39) {
                    if (e.preventDefault) e.preventDefault();
                    else e.returnValue = false;
                }
                if ((kc === 39 && !s.rtl) || (kc === 37 && s.rtl)) s.slideNext();
                if ((kc === 37 && !s.rtl) || (kc === 39 && s.rtl)) s.slidePrev();
            }
            else {
                if (kc === 38 || kc === 40) {
                    if (e.preventDefault) e.preventDefault();
                    else e.returnValue = false;
                }
                if (kc === 40) s.slideNext();
                if (kc === 38) s.slidePrev();
            }
        }
        s.disableKeyboardControl = function () {
            s.params.keyboardControl = false;
            $(document).off('keydown', handleKeyboard);
        };
        s.enableKeyboardControl = function () {
            s.params.keyboardControl = true;
            $(document).on('keydown', handleKeyboard);
        };
        

        /*=========================
          Mousewheel Control
          ===========================*/
        s.mousewheel = {
            event: false,
            lastScrollTime: (new window.Date()).getTime()
        };
        if (s.params.mousewheelControl) {
            /**
             * The best combination if you prefer spinX + spinY normalization.  It favors
             * the older DOMMouseScroll for Firefox, as FF does not include wheelDelta with
             * 'wheel' event, making spin speed determination impossible.
             */
            s.mousewheel.event = (navigator.userAgent.indexOf('firefox') > -1) ?
                'DOMMouseScroll' :
                isEventSupported() ?
                    'wheel' : 'mousewheel';
        }
        
        function isEventSupported() {
            var eventName = 'onwheel';
            var isSupported = eventName in document;
        
            if (!isSupported) {
                var element = document.createElement('div');
                element.setAttribute(eventName, 'return;');
                isSupported = typeof element[eventName] === 'function';
            }
        
            if (!isSupported &&
                document.implementation &&
                document.implementation.hasFeature &&
                    // always returns true in newer browsers as per the standard.
                    // @see http://dom.spec.whatwg.org/#dom-domimplementation-hasfeature
                document.implementation.hasFeature('', '') !== true ) {
                // This is the only way to test support for the `wheel` event in IE9+.
                isSupported = document.implementation.hasFeature('Events.wheel', '3.0');
            }
        
            return isSupported;
        }
        
        function handleMousewheel(e) {
            if (e.originalEvent) e = e.originalEvent; //jquery fix
            var delta = 0;
            var rtlFactor = s.rtl ? -1 : 1;
        
            var data = normalizeWheel( e );
        
            if (s.params.mousewheelForceToAxis) {
                if (s.isHorizontal()) {
                    if (Math.abs(data.pixelX) > Math.abs(data.pixelY)) delta = data.pixelX * rtlFactor;
                    else return;
                }
                else {
                    if (Math.abs(data.pixelY) > Math.abs(data.pixelX)) delta = data.pixelY;
                    else return;
                }
            }
            else {
                delta = Math.abs(data.pixelX) > Math.abs(data.pixelY) ? - data.pixelX * rtlFactor : - data.pixelY;
            }
        
            if (delta === 0) return;
        
            if (s.params.mousewheelInvert) delta = -delta;
        
            if (!s.params.freeMode) {
                if ((new window.Date()).getTime() - s.mousewheel.lastScrollTime > 60) {
                    if (delta < 0) {
                        if ((!s.isEnd || s.params.loop) && !s.animating) {
                            s.slideNext();
                            s.emit('onScroll', s, e);
                        }
                        else if (s.params.mousewheelReleaseOnEdges) return true;
                    }
                    else {
                        if ((!s.isBeginning || s.params.loop) && !s.animating) {
                            s.slidePrev();
                            s.emit('onScroll', s, e);
                        }
                        else if (s.params.mousewheelReleaseOnEdges) return true;
                    }
                }
                s.mousewheel.lastScrollTime = (new window.Date()).getTime();
        
            }
            else {
                //Freemode or scrollContainer:
                var position = s.getWrapperTranslate() + delta * s.params.mousewheelSensitivity;
                var wasBeginning = s.isBeginning,
                    wasEnd = s.isEnd;
        
                if (position >= s.minTranslate()) position = s.minTranslate();
                if (position <= s.maxTranslate()) position = s.maxTranslate();
        
                s.setWrapperTransition(0);
                s.setWrapperTranslate(position);
                s.updateProgress();
                s.updateActiveIndex();
        
                if (!wasBeginning && s.isBeginning || !wasEnd && s.isEnd) {
                    s.updateClasses();
                }
        
                if (s.params.freeModeSticky) {
                    clearTimeout(s.mousewheel.timeout);
                    s.mousewheel.timeout = setTimeout(function () {
                        s.slideReset();
                    }, 300);
                }
                else {
                    if (s.params.lazyLoading && s.lazy) {
                        s.lazy.load();
                    }
                }
                // Emit event
                s.emit('onScroll', s, e);
        
                // Stop autoplay
                if (s.params.autoplay && s.params.autoplayDisableOnInteraction) s.stopAutoplay();
        
                // Return page scroll on edge positions
                if (position === 0 || position === s.maxTranslate()) return;
            }
        
            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;
            return false;
        }
        s.disableMousewheelControl = function () {
            if (!s.mousewheel.event) return false;
            var target = s.container;
            if (s.params.mousewheelEventsTarged !== 'container') {
                target = $(s.params.mousewheelEventsTarged);
            }
            target.off(s.mousewheel.event, handleMousewheel);
            return true;
        };
        
        s.enableMousewheelControl = function () {
            if (!s.mousewheel.event) return false;
            var target = s.container;
            if (s.params.mousewheelEventsTarged !== 'container') {
                target = $(s.params.mousewheelEventsTarged);
            }
            target.on(s.mousewheel.event, handleMousewheel);
            return true;
        };
        
        /**
         * Mouse wheel (and 2-finger trackpad) support on the web sucks.  It is
         * complicated, thus this doc is long and (hopefully) detailed enough to answer
         * your questions.
         *
         * If you need to react to the mouse wheel in a predictable way, this code is
         * like your bestest friend. * hugs *
         *
         * As of today, there are 4 DOM event types you can listen to:
         *
         *   'wheel'                -- Chrome(31+), FF(17+), IE(9+)
         *   'mousewheel'           -- Chrome, IE(6+), Opera, Safari
         *   'MozMousePixelScroll'  -- FF(3.5 only!) (2010-2013) -- don't bother!
         *   'DOMMouseScroll'       -- FF(0.9.7+) since 2003
         *
         * So what to do?  The is the best:
         *
         *   normalizeWheel.getEventType();
         *
         * In your event callback, use this code to get sane interpretation of the
         * deltas.  This code will return an object with properties:
         *
         *   spinX   -- normalized spin speed (use for zoom) - x plane
         *   spinY   -- " - y plane
         *   pixelX  -- normalized distance (to pixels) - x plane
         *   pixelY  -- " - y plane
         *
         * Wheel values are provided by the browser assuming you are using the wheel to
         * scroll a web page by a number of lines or pixels (or pages).  Values can vary
         * significantly on different platforms and browsers, forgetting that you can
         * scroll at different speeds.  Some devices (like trackpads) emit more events
         * at smaller increments with fine granularity, and some emit massive jumps with
         * linear speed or acceleration.
         *
         * This code does its best to normalize the deltas for you:
         *
         *   - spin is trying to normalize how far the wheel was spun (or trackpad
         *     dragged).  This is super useful for zoom support where you want to
         *     throw away the chunky scroll steps on the PC and make those equal to
         *     the slow and smooth tiny steps on the Mac. Key data: This code tries to
         *     resolve a single slow step on a wheel to 1.
         *
         *   - pixel is normalizing the desired scroll delta in pixel units.  You'll
         *     get the crazy differences between browsers, but at least it'll be in
         *     pixels!
         *
         *   - positive value indicates scrolling DOWN/RIGHT, negative UP/LEFT.  This
         *     should translate to positive value zooming IN, negative zooming OUT.
         *     This matches the newer 'wheel' event.
         *
         * Why are there spinX, spinY (or pixels)?
         *
         *   - spinX is a 2-finger side drag on the trackpad, and a shift + wheel turn
         *     with a mouse.  It results in side-scrolling in the browser by default.
         *
         *   - spinY is what you expect -- it's the classic axis of a mouse wheel.
         *
         *   - I dropped spinZ/pixelZ.  It is supported by the DOM 3 'wheel' event and
         *     probably is by browsers in conjunction with fancy 3D controllers .. but
         *     you know.
         *
         * Implementation info:
         *
         * Examples of 'wheel' event if you scroll slowly (down) by one step with an
         * average mouse:
         *
         *   OS X + Chrome  (mouse)     -    4   pixel delta  (wheelDelta -120)
         *   OS X + Safari  (mouse)     -  N/A   pixel delta  (wheelDelta  -12)
         *   OS X + Firefox (mouse)     -    0.1 line  delta  (wheelDelta  N/A)
         *   Win8 + Chrome  (mouse)     -  100   pixel delta  (wheelDelta -120)
         *   Win8 + Firefox (mouse)     -    3   line  delta  (wheelDelta -120)
         *
         * On the trackpad:
         *
         *   OS X + Chrome  (trackpad)  -    2   pixel delta  (wheelDelta   -6)
         *   OS X + Firefox (trackpad)  -    1   pixel delta  (wheelDelta  N/A)
         *
         * On other/older browsers.. it's more complicated as there can be multiple and
         * also missing delta values.
         *
         * The 'wheel' event is more standard:
         *
         * http://www.w3.org/TR/DOM-Level-3-Events/#events-wheelevents
         *
         * The basics is that it includes a unit, deltaMode (pixels, lines, pages), and
         * deltaX, deltaY and deltaZ.  Some browsers provide other values to maintain
         * backward compatibility with older events.  Those other values help us
         * better normalize spin speed.  Example of what the browsers provide:
         *
         *                          | event.wheelDelta | event.detail
         *        ------------------+------------------+--------------
         *          Safari v5/OS X  |       -120       |       0
         *          Safari v5/Win7  |       -120       |       0
         *         Chrome v17/OS X  |       -120       |       0
         *         Chrome v17/Win7  |       -120       |       0
         *                IE9/Win7  |       -120       |   undefined
         *         Firefox v4/OS X  |     undefined    |       1
         *         Firefox v4/Win7  |     undefined    |       3
         *
         */
        function normalizeWheel( /*object*/ event ) /*object*/ {
            // Reasonable defaults
            var PIXEL_STEP = 10;
            var LINE_HEIGHT = 40;
            var PAGE_HEIGHT = 800;
        
            var sX = 0, sY = 0,       // spinX, spinY
                pX = 0, pY = 0;       // pixelX, pixelY
        
            // Legacy
            if( 'detail' in event ) {
                sY = event.detail;
            }
            if( 'wheelDelta' in event ) {
                sY = -event.wheelDelta / 120;
            }
            if( 'wheelDeltaY' in event ) {
                sY = -event.wheelDeltaY / 120;
            }
            if( 'wheelDeltaX' in event ) {
                sX = -event.wheelDeltaX / 120;
            }
        
            // side scrolling on FF with DOMMouseScroll
            if( 'axis' in event && event.axis === event.HORIZONTAL_AXIS ) {
                sX = sY;
                sY = 0;
            }
        
            pX = sX * PIXEL_STEP;
            pY = sY * PIXEL_STEP;
        
            if( 'deltaY' in event ) {
                pY = event.deltaY;
            }
            if( 'deltaX' in event ) {
                pX = event.deltaX;
            }
        
            if( (pX || pY) && event.deltaMode ) {
                if( event.deltaMode === 1 ) {          // delta in LINE units
                    pX *= LINE_HEIGHT;
                    pY *= LINE_HEIGHT;
                } else {                             // delta in PAGE units
                    pX *= PAGE_HEIGHT;
                    pY *= PAGE_HEIGHT;
                }
            }
        
            // Fall-back if spin cannot be determined
            if( pX && !sX ) {
                sX = (pX < 1) ? -1 : 1;
            }
            if( pY && !sY ) {
                sY = (pY < 1) ? -1 : 1;
            }
        
            return {
                spinX: sX,
                spinY: sY,
                pixelX: pX,
                pixelY: pY
            };
        }

        /*=========================
          Parallax
          ===========================*/
        function setParallaxTransform(el, progress) {
            el = $(el);
            var p, pX, pY;
            var rtlFactor = s.rtl ? -1 : 1;
        
            p = el.attr('data-swiper-parallax') || '0';
            pX = el.attr('data-swiper-parallax-x');
            pY = el.attr('data-swiper-parallax-y');
            if (pX || pY) {
                pX = pX || '0';
                pY = pY || '0';
            }
            else {
                if (s.isHorizontal()) {
                    pX = p;
                    pY = '0';
                }
                else {
                    pY = p;
                    pX = '0';
                }
            }
        
            if ((pX).indexOf('%') >= 0) {
                pX = parseInt(pX, 10) * progress * rtlFactor + '%';
            }
            else {
                pX = pX * progress * rtlFactor + 'px' ;
            }
            if ((pY).indexOf('%') >= 0) {
                pY = parseInt(pY, 10) * progress + '%';
            }
            else {
                pY = pY * progress + 'px' ;
            }
        
            el.transform('translate3d(' + pX + ', ' + pY + ',0px)');
        }
        s.parallax = {
            setTranslate: function () {
                s.container.children('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]').each(function(){
                    setParallaxTransform(this, s.progress);
        
                });
                s.slides.each(function () {
                    var slide = $(this);
                    slide.find('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]').each(function () {
                        var progress = Math.min(Math.max(slide[0].progress, -1), 1);
                        setParallaxTransform(this, progress);
                    });
                });
            },
            setTransition: function (duration) {
                if (typeof duration === 'undefined') duration = s.params.speed;
                s.container.find('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]').each(function(){
                    var el = $(this);
                    var parallaxDuration = parseInt(el.attr('data-swiper-parallax-duration'), 10) || duration;
                    if (duration === 0) parallaxDuration = 0;
                    el.transition(parallaxDuration);
                });
            }
        };
        

        /*=========================
          Zoom
          ===========================*/
        s.zoom = {
            // "Global" Props
            scale: 1,
            currentScale: 1,
            isScaling: false,
            gesture: {
                slide: undefined,
                slideWidth: undefined,
                slideHeight: undefined,
                image: undefined,
                imageWrap: undefined,
                zoomMax: s.params.zoomMax
            },
            image: {
                isTouched: undefined,
                isMoved: undefined,
                currentX: undefined,
                currentY: undefined,
                minX: undefined,
                minY: undefined,
                maxX: undefined,
                maxY: undefined,
                width: undefined,
                height: undefined,
                startX: undefined,
                startY: undefined,
                touchesStart: {},
                touchesCurrent: {}
            },
            velocity: {
                x: undefined,
                y: undefined,
                prevPositionX: undefined,
                prevPositionY: undefined,
                prevTime: undefined
            },
            // Calc Scale From Multi-touches
            getDistanceBetweenTouches: function (e) {
                if (e.targetTouches.length < 2) return 1;
                var x1 = e.targetTouches[0].pageX,
                    y1 = e.targetTouches[0].pageY,
                    x2 = e.targetTouches[1].pageX,
                    y2 = e.targetTouches[1].pageY;
                var distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
                return distance;
            },
            // Events
            onGestureStart: function (e) {
                var z = s.zoom;
                if (!s.support.gestures) {
                    if (e.type !== 'touchstart' || e.type === 'touchstart' && e.targetTouches.length < 2) {
                        return;
                    }
                    z.gesture.scaleStart = z.getDistanceBetweenTouches(e);
                }
                if (!z.gesture.slide || !z.gesture.slide.length) {
                    z.gesture.slide = $(this);
                    if (z.gesture.slide.length === 0) z.gesture.slide = s.slides.eq(s.activeIndex);
                    z.gesture.image = z.gesture.slide.find('img, svg, canvas');
                    z.gesture.imageWrap = z.gesture.image.parent('.' + s.params.zoomContainerClass);
                    z.gesture.zoomMax = z.gesture.imageWrap.attr('data-swiper-zoom') || s.params.zoomMax ;
                    if (z.gesture.imageWrap.length === 0) {
                        z.gesture.image = undefined;
                        return;
                    }
                }
                z.gesture.image.transition(0);
                z.isScaling = true;
            },
            onGestureChange: function (e) {
                var z = s.zoom;
                if (!s.support.gestures) {
                    if (e.type !== 'touchmove' || e.type === 'touchmove' && e.targetTouches.length < 2) {
                        return;
                    }
                    z.gesture.scaleMove = z.getDistanceBetweenTouches(e);
                }
                if (!z.gesture.image || z.gesture.image.length === 0) return;
                if (s.support.gestures) {
                    z.scale = e.scale * z.currentScale;
                }
                else {
                    z.scale = (z.gesture.scaleMove / z.gesture.scaleStart) * z.currentScale;
                }
                if (z.scale > z.gesture.zoomMax) {
                    z.scale = z.gesture.zoomMax - 1 + Math.pow((z.scale - z.gesture.zoomMax + 1), 0.5);
                }
                if (z.scale < s.params.zoomMin) {
                    z.scale =  s.params.zoomMin + 1 - Math.pow((s.params.zoomMin - z.scale + 1), 0.5);
                }
                z.gesture.image.transform('translate3d(0,0,0) scale(' + z.scale + ')');
            },
            onGestureEnd: function (e) {
                var z = s.zoom;
                if (!s.support.gestures) {
                    if (e.type !== 'touchend' || e.type === 'touchend' && e.changedTouches.length < 2) {
                        return;
                    }
                }
                if (!z.gesture.image || z.gesture.image.length === 0) return;
                z.scale = Math.max(Math.min(z.scale, z.gesture.zoomMax), s.params.zoomMin);
                z.gesture.image.transition(s.params.speed).transform('translate3d(0,0,0) scale(' + z.scale + ')');
                z.currentScale = z.scale;
                z.isScaling = false;
                if (z.scale === 1) z.gesture.slide = undefined;
            },
            onTouchStart: function (s, e) {
                var z = s.zoom;
                if (!z.gesture.image || z.gesture.image.length === 0) return;
                if (z.image.isTouched) return;
                if (s.device.os === 'android') e.preventDefault();
                z.image.isTouched = true;
                z.image.touchesStart.x = e.type === 'touchstart' ? e.targetTouches[0].pageX : e.pageX;
                z.image.touchesStart.y = e.type === 'touchstart' ? e.targetTouches[0].pageY : e.pageY;
            },
            onTouchMove: function (e) {
                var z = s.zoom;
                if (!z.gesture.image || z.gesture.image.length === 0) return;
                s.allowClick = false;
                if (!z.image.isTouched || !z.gesture.slide) return;
        
                if (!z.image.isMoved) {
                    z.image.width = z.gesture.image[0].offsetWidth;
                    z.image.height = z.gesture.image[0].offsetHeight;
                    z.image.startX = s.getTranslate(z.gesture.imageWrap[0], 'x') || 0;
                    z.image.startY = s.getTranslate(z.gesture.imageWrap[0], 'y') || 0;
                    z.gesture.slideWidth = z.gesture.slide[0].offsetWidth;
                    z.gesture.slideHeight = z.gesture.slide[0].offsetHeight;
                    z.gesture.imageWrap.transition(0);
                }
                // Define if we need image drag
                var scaledWidth = z.image.width * z.scale;
                var scaledHeight = z.image.height * z.scale;
        
                if (scaledWidth < z.gesture.slideWidth && scaledHeight < z.gesture.slideHeight) return;
        
                z.image.minX = Math.min((z.gesture.slideWidth / 2 - scaledWidth / 2), 0);
                z.image.maxX = -z.image.minX;
                z.image.minY = Math.min((z.gesture.slideHeight / 2 - scaledHeight / 2), 0);
                z.image.maxY = -z.image.minY;
        
                z.image.touchesCurrent.x = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
                z.image.touchesCurrent.y = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;
        
                if (!z.image.isMoved && !z.isScaling) {
                    if (s.isHorizontal() &&
                        (Math.floor(z.image.minX) === Math.floor(z.image.startX) && z.image.touchesCurrent.x < z.image.touchesStart.x) ||
                        (Math.floor(z.image.maxX) === Math.floor(z.image.startX) && z.image.touchesCurrent.x > z.image.touchesStart.x)
                        ) {
                        z.image.isTouched = false;
                        return;
                    }
                    else if (!s.isHorizontal() &&
                        (Math.floor(z.image.minY) === Math.floor(z.image.startY) && z.image.touchesCurrent.y < z.image.touchesStart.y) ||
                        (Math.floor(z.image.maxY) === Math.floor(z.image.startY) && z.image.touchesCurrent.y > z.image.touchesStart.y)
                        ) {
                        z.image.isTouched = false;
                        return;
                    }
                }
                e.preventDefault();
                e.stopPropagation();
        
                z.image.isMoved = true;
                z.image.currentX = z.image.touchesCurrent.x - z.image.touchesStart.x + z.image.startX;
                z.image.currentY = z.image.touchesCurrent.y - z.image.touchesStart.y + z.image.startY;
        
                if (z.image.currentX < z.image.minX) {
                    z.image.currentX =  z.image.minX + 1 - Math.pow((z.image.minX - z.image.currentX + 1), 0.8);
                }
                if (z.image.currentX > z.image.maxX) {
                    z.image.currentX = z.image.maxX - 1 + Math.pow((z.image.currentX - z.image.maxX + 1), 0.8);
                }
        
                if (z.image.currentY < z.image.minY) {
                    z.image.currentY =  z.image.minY + 1 - Math.pow((z.image.minY - z.image.currentY + 1), 0.8);
                }
                if (z.image.currentY > z.image.maxY) {
                    z.image.currentY = z.image.maxY - 1 + Math.pow((z.image.currentY - z.image.maxY + 1), 0.8);
                }
        
                //Velocity
                if (!z.velocity.prevPositionX) z.velocity.prevPositionX = z.image.touchesCurrent.x;
                if (!z.velocity.prevPositionY) z.velocity.prevPositionY = z.image.touchesCurrent.y;
                if (!z.velocity.prevTime) z.velocity.prevTime = Date.now();
                z.velocity.x = (z.image.touchesCurrent.x - z.velocity.prevPositionX) / (Date.now() - z.velocity.prevTime) / 2;
                z.velocity.y = (z.image.touchesCurrent.y - z.velocity.prevPositionY) / (Date.now() - z.velocity.prevTime) / 2;
                if (Math.abs(z.image.touchesCurrent.x - z.velocity.prevPositionX) < 2) z.velocity.x = 0;
                if (Math.abs(z.image.touchesCurrent.y - z.velocity.prevPositionY) < 2) z.velocity.y = 0;
                z.velocity.prevPositionX = z.image.touchesCurrent.x;
                z.velocity.prevPositionY = z.image.touchesCurrent.y;
                z.velocity.prevTime = Date.now();
        
                z.gesture.imageWrap.transform('translate3d(' + z.image.currentX + 'px, ' + z.image.currentY + 'px,0)');
            },
            onTouchEnd: function (s, e) {
                var z = s.zoom;
                if (!z.gesture.image || z.gesture.image.length === 0) return;
                if (!z.image.isTouched || !z.image.isMoved) {
                    z.image.isTouched = false;
                    z.image.isMoved = false;
                    return;
                }
                z.image.isTouched = false;
                z.image.isMoved = false;
                var momentumDurationX = 300;
                var momentumDurationY = 300;
                var momentumDistanceX = z.velocity.x * momentumDurationX;
                var newPositionX = z.image.currentX + momentumDistanceX;
                var momentumDistanceY = z.velocity.y * momentumDurationY;
                var newPositionY = z.image.currentY + momentumDistanceY;
        
                //Fix duration
                if (z.velocity.x !== 0) momentumDurationX = Math.abs((newPositionX - z.image.currentX) / z.velocity.x);
                if (z.velocity.y !== 0) momentumDurationY = Math.abs((newPositionY - z.image.currentY) / z.velocity.y);
                var momentumDuration = Math.max(momentumDurationX, momentumDurationY);
        
                z.image.currentX = newPositionX;
                z.image.currentY = newPositionY;
        
                // Define if we need image drag
                var scaledWidth = z.image.width * z.scale;
                var scaledHeight = z.image.height * z.scale;
                z.image.minX = Math.min((z.gesture.slideWidth / 2 - scaledWidth / 2), 0);
                z.image.maxX = -z.image.minX;
                z.image.minY = Math.min((z.gesture.slideHeight / 2 - scaledHeight / 2), 0);
                z.image.maxY = -z.image.minY;
                z.image.currentX = Math.max(Math.min(z.image.currentX, z.image.maxX), z.image.minX);
                z.image.currentY = Math.max(Math.min(z.image.currentY, z.image.maxY), z.image.minY);
        
                z.gesture.imageWrap.transition(momentumDuration).transform('translate3d(' + z.image.currentX + 'px, ' + z.image.currentY + 'px,0)');
            },
            onTransitionEnd: function (s) {
                var z = s.zoom;
                if (z.gesture.slide && s.previousIndex !== s.activeIndex) {
                    z.gesture.image.transform('translate3d(0,0,0) scale(1)');
                    z.gesture.imageWrap.transform('translate3d(0,0,0)');
                    z.gesture.slide = z.gesture.image = z.gesture.imageWrap = undefined;
                    z.scale = z.currentScale = 1;
                }
            },
            // Toggle Zoom
            toggleZoom: function (s, e) {
                var z = s.zoom;
                if (!z.gesture.slide) {
                    z.gesture.slide = s.clickedSlide ? $(s.clickedSlide) : s.slides.eq(s.activeIndex);
                    z.gesture.image = z.gesture.slide.find('img, svg, canvas');
                    z.gesture.imageWrap = z.gesture.image.parent('.' + s.params.zoomContainerClass);
                }
                if (!z.gesture.image || z.gesture.image.length === 0) return;
        
                var touchX, touchY, offsetX, offsetY, diffX, diffY, translateX, translateY, imageWidth, imageHeight, scaledWidth, scaledHeight, translateMinX, translateMinY, translateMaxX, translateMaxY, slideWidth, slideHeight;
        
                if (typeof z.image.touchesStart.x === 'undefined' && e) {
                    touchX = e.type === 'touchend' ? e.changedTouches[0].pageX : e.pageX;
                    touchY = e.type === 'touchend' ? e.changedTouches[0].pageY : e.pageY;
                }
                else {
                    touchX = z.image.touchesStart.x;
                    touchY = z.image.touchesStart.y;
                }
        
                if (z.scale && z.scale !== 1) {
                    // Zoom Out
                    z.scale = z.currentScale = 1;
                    z.gesture.imageWrap.transition(300).transform('translate3d(0,0,0)');
                    z.gesture.image.transition(300).transform('translate3d(0,0,0) scale(1)');
                    z.gesture.slide = undefined;
                }
                else {
                    // Zoom In
                    z.scale = z.currentScale = z.gesture.imageWrap.attr('data-swiper-zoom') || s.params.zoomMax;
                    if (e) {
                        slideWidth = z.gesture.slide[0].offsetWidth;
                        slideHeight = z.gesture.slide[0].offsetHeight;
                        offsetX = z.gesture.slide.offset().left;
                        offsetY = z.gesture.slide.offset().top;
                        diffX = offsetX + slideWidth/2 - touchX;
                        diffY = offsetY + slideHeight/2 - touchY;
        
                        imageWidth = z.gesture.image[0].offsetWidth;
                        imageHeight = z.gesture.image[0].offsetHeight;
                        scaledWidth = imageWidth * z.scale;
                        scaledHeight = imageHeight * z.scale;
        
                        translateMinX = Math.min((slideWidth / 2 - scaledWidth / 2), 0);
                        translateMinY = Math.min((slideHeight / 2 - scaledHeight / 2), 0);
                        translateMaxX = -translateMinX;
                        translateMaxY = -translateMinY;
        
                        translateX = diffX * z.scale;
                        translateY = diffY * z.scale;
        
                        if (translateX < translateMinX) {
                            translateX =  translateMinX;
                        }
                        if (translateX > translateMaxX) {
                            translateX = translateMaxX;
                        }
        
                        if (translateY < translateMinY) {
                            translateY =  translateMinY;
                        }
                        if (translateY > translateMaxY) {
                            translateY = translateMaxY;
                        }
                    }
                    else {
                        translateX = 0;
                        translateY = 0;
                    }
                    z.gesture.imageWrap.transition(300).transform('translate3d(' + translateX + 'px, ' + translateY + 'px,0)');
                    z.gesture.image.transition(300).transform('translate3d(0,0,0) scale(' + z.scale + ')');
                }
            },
            // Attach/Detach Events
            attachEvents: function (detach) {
                var action = detach ? 'off' : 'on';
        
                if (s.params.zoom) {
                    var target = s.slides;
                    var passiveListener = s.touchEvents.start === 'touchstart' && s.support.passiveListener && s.params.passiveListeners ? {passive: true, capture: false} : false;
                    // Scale image
                    if (s.support.gestures) {
                        s.slides[action]('gesturestart', s.zoom.onGestureStart, passiveListener);
                        s.slides[action]('gesturechange', s.zoom.onGestureChange, passiveListener);
                        s.slides[action]('gestureend', s.zoom.onGestureEnd, passiveListener);
                    }
                    else if (s.touchEvents.start === 'touchstart') {
                        s.slides[action](s.touchEvents.start, s.zoom.onGestureStart, passiveListener);
                        s.slides[action](s.touchEvents.move, s.zoom.onGestureChange, passiveListener);
                        s.slides[action](s.touchEvents.end, s.zoom.onGestureEnd, passiveListener);
                    }
        
                    // Move image
                    s[action]('touchStart', s.zoom.onTouchStart);
                    s.slides.each(function (index, slide){
                        if ($(slide).find('.' + s.params.zoomContainerClass).length > 0) {
                            $(slide)[action](s.touchEvents.move, s.zoom.onTouchMove);
                        }
                    });
                    s[action]('touchEnd', s.zoom.onTouchEnd);
        
                    // Scale Out
                    s[action]('transitionEnd', s.zoom.onTransitionEnd);
                    if (s.params.zoomToggle) {
                        s.on('doubleTap', s.zoom.toggleZoom);
                    }
                }
            },
            init: function () {
                s.zoom.attachEvents();
            },
            destroy: function () {
                s.zoom.attachEvents(true);
            }
        };

        /*=========================
          Plugins API. Collect all and init all plugins
          ===========================*/
        s._plugins = [];
        for (var plugin in s.plugins) {
            var p = s.plugins[plugin](s, s.params[plugin]);
            if (p) s._plugins.push(p);
        }
        // Method to call all plugins event/method
        s.callPlugins = function (eventName) {
            for (var i = 0; i < s._plugins.length; i++) {
                if (eventName in s._plugins[i]) {
                    s._plugins[i][eventName](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                }
            }
        };

        /*=========================
          Events/Callbacks/Plugins Emitter
          ===========================*/
        function normalizeEventName (eventName) {
            if (eventName.indexOf('on') !== 0) {
                if (eventName[0] !== eventName[0].toUpperCase()) {
                    eventName = 'on' + eventName[0].toUpperCase() + eventName.substring(1);
                }
                else {
                    eventName = 'on' + eventName;
                }
            }
            return eventName;
        }
        s.emitterEventListeners = {
        
        };
        s.emit = function (eventName) {
            // Trigger callbacks
            if (s.params[eventName]) {
                s.params[eventName](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
            }
            var i;
            // Trigger events
            if (s.emitterEventListeners[eventName]) {
                for (i = 0; i < s.emitterEventListeners[eventName].length; i++) {
                    s.emitterEventListeners[eventName][i](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                }
            }
            // Trigger plugins
            if (s.callPlugins) s.callPlugins(eventName, arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
        };
        s.on = function (eventName, handler) {
            eventName = normalizeEventName(eventName);
            if (!s.emitterEventListeners[eventName]) s.emitterEventListeners[eventName] = [];
            s.emitterEventListeners[eventName].push(handler);
            return s;
        };
        s.off = function (eventName, handler) {
            var i;
            eventName = normalizeEventName(eventName);
            if (typeof handler === 'undefined') {
                // Remove all handlers for such event
                s.emitterEventListeners[eventName] = [];
                return s;
            }
            if (!s.emitterEventListeners[eventName] || s.emitterEventListeners[eventName].length === 0) return;
            for (i = 0; i < s.emitterEventListeners[eventName].length; i++) {
                if(s.emitterEventListeners[eventName][i] === handler) s.emitterEventListeners[eventName].splice(i, 1);
            }
            return s;
        };
        s.once = function (eventName, handler) {
            eventName = normalizeEventName(eventName);
            var _handler = function () {
                handler(arguments[0], arguments[1], arguments[2], arguments[3], arguments[4]);
                s.off(eventName, _handler);
            };
            s.on(eventName, _handler);
            return s;
        };

        // Accessibility tools
        s.a11y = {
            makeFocusable: function ($el) {
                $el.attr('tabIndex', '0');
                return $el;
            },
            addRole: function ($el, role) {
                $el.attr('role', role);
                return $el;
            },
        
            addLabel: function ($el, label) {
                $el.attr('aria-label', label);
                return $el;
            },
        
            disable: function ($el) {
                $el.attr('aria-disabled', true);
                return $el;
            },
        
            enable: function ($el) {
                $el.attr('aria-disabled', false);
                return $el;
            },
        
            onEnterKey: function (event) {
                if (event.keyCode !== 13) return;
                if ($(event.target).is(s.params.nextButton)) {
                    s.onClickNext(event);
                    if (s.isEnd) {
                        s.a11y.notify(s.params.lastSlideMessage);
                    }
                    else {
                        s.a11y.notify(s.params.nextSlideMessage);
                    }
                }
                else if ($(event.target).is(s.params.prevButton)) {
                    s.onClickPrev(event);
                    if (s.isBeginning) {
                        s.a11y.notify(s.params.firstSlideMessage);
                    }
                    else {
                        s.a11y.notify(s.params.prevSlideMessage);
                    }
                }
                if ($(event.target).is('.' + s.params.bulletClass)) {
                    $(event.target)[0].click();
                }
            },
        
            liveRegion: $('<span class="' + s.params.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>'),
        
            notify: function (message) {
                var notification = s.a11y.liveRegion;
                if (notification.length === 0) return;
                notification.html('');
                notification.html(message);
            },
            init: function () {
                // Setup accessibility
                if (s.params.nextButton && s.nextButton && s.nextButton.length > 0) {
                    s.a11y.makeFocusable(s.nextButton);
                    s.a11y.addRole(s.nextButton, 'button');
                    s.a11y.addLabel(s.nextButton, s.params.nextSlideMessage);
                }
                if (s.params.prevButton && s.prevButton && s.prevButton.length > 0) {
                    s.a11y.makeFocusable(s.prevButton);
                    s.a11y.addRole(s.prevButton, 'button');
                    s.a11y.addLabel(s.prevButton, s.params.prevSlideMessage);
                }
        
                $(s.container).append(s.a11y.liveRegion);
            },
            initPagination: function () {
                if (s.params.pagination && s.params.paginationClickable && s.bullets && s.bullets.length) {
                    s.bullets.each(function () {
                        var bullet = $(this);
                        s.a11y.makeFocusable(bullet);
                        s.a11y.addRole(bullet, 'button');
                        s.a11y.addLabel(bullet, s.params.paginationBulletMessage.replace(/{{index}}/, bullet.index() + 1));
                    });
                }
            },
            destroy: function () {
                if (s.a11y.liveRegion && s.a11y.liveRegion.length > 0) s.a11y.liveRegion.remove();
            }
        };
        

        /*=========================
          Init/Destroy
          ===========================*/
        s.init = function () {
            if (s.params.loop) s.createLoop();
            s.updateContainerSize();
            s.updateSlidesSize();
            s.updatePagination();
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.set();
                if (s.params.scrollbarDraggable) {
                    s.scrollbar.enableDraggable();
                }
            }
            if (s.params.effect !== 'slide' && s.effects[s.params.effect]) {
                if (!s.params.loop) s.updateProgress();
                s.effects[s.params.effect].setTranslate();
            }
            if (s.params.loop) {
                s.slideTo(s.params.initialSlide + s.loopedSlides, 0, s.params.runCallbacksOnInit);
            }
            else {
                s.slideTo(s.params.initialSlide, 0, s.params.runCallbacksOnInit);
                if (s.params.initialSlide === 0) {
                    if (s.parallax && s.params.parallax) s.parallax.setTranslate();
                    if (s.lazy && s.params.lazyLoading) {
                        s.lazy.load();
                        s.lazy.initialImageLoaded = true;
                    }
                }
            }
            s.attachEvents();
            if (s.params.observer && s.support.observer) {
                s.initObservers();
            }
            if (s.params.preloadImages && !s.params.lazyLoading) {
                s.preloadImages();
            }
            if (s.params.zoom && s.zoom) {
                s.zoom.init();
            }
            if (s.params.autoplay) {
                s.startAutoplay();
            }
            if (s.params.keyboardControl) {
                if (s.enableKeyboardControl) s.enableKeyboardControl();
            }
            if (s.params.mousewheelControl) {
                if (s.enableMousewheelControl) s.enableMousewheelControl();
            }
            // Deprecated hashnavReplaceState changed to replaceState for use in hashnav and history
            if (s.params.hashnavReplaceState) {
                s.params.replaceState = s.params.hashnavReplaceState;
            }
            if (s.params.history) {
                if (s.history) s.history.init();
            }
            if (s.params.hashnav) {
                if (s.hashnav) s.hashnav.init();
            }
            if (s.params.a11y && s.a11y) s.a11y.init();
            s.emit('onInit', s);
        };
        
        // Cleanup dynamic styles
        s.cleanupStyles = function () {
            // Container
            s.container.removeClass(s.classNames.join(' ')).removeAttr('style');
        
            // Wrapper
            s.wrapper.removeAttr('style');
        
            // Slides
            if (s.slides && s.slides.length) {
                s.slides
                    .removeClass([
                      s.params.slideVisibleClass,
                      s.params.slideActiveClass,
                      s.params.slideNextClass,
                      s.params.slidePrevClass
                    ].join(' '))
                    .removeAttr('style')
                    .removeAttr('data-swiper-column')
                    .removeAttr('data-swiper-row');
            }
        
            // Pagination/Bullets
            if (s.paginationContainer && s.paginationContainer.length) {
                s.paginationContainer.removeClass(s.params.paginationHiddenClass);
            }
            if (s.bullets && s.bullets.length) {
                s.bullets.removeClass(s.params.bulletActiveClass);
            }
        
            // Buttons
            if (s.params.prevButton) $(s.params.prevButton).removeClass(s.params.buttonDisabledClass);
            if (s.params.nextButton) $(s.params.nextButton).removeClass(s.params.buttonDisabledClass);
        
            // Scrollbar
            if (s.params.scrollbar && s.scrollbar) {
                if (s.scrollbar.track && s.scrollbar.track.length) s.scrollbar.track.removeAttr('style');
                if (s.scrollbar.drag && s.scrollbar.drag.length) s.scrollbar.drag.removeAttr('style');
            }
        };
        
        // Destroy
        s.destroy = function (deleteInstance, cleanupStyles) {
            // Detach evebts
            s.detachEvents();
            // Stop autoplay
            s.stopAutoplay();
            // Disable draggable
            if (s.params.scrollbar && s.scrollbar) {
                if (s.params.scrollbarDraggable) {
                    s.scrollbar.disableDraggable();
                }
            }
            // Destroy loop
            if (s.params.loop) {
                s.destroyLoop();
            }
            // Cleanup styles
            if (cleanupStyles) {
                s.cleanupStyles();
            }
            // Disconnect observer
            s.disconnectObservers();
        
            // Destroy zoom
            if (s.params.zoom && s.zoom) {
                s.zoom.destroy();
            }
            // Disable keyboard/mousewheel
            if (s.params.keyboardControl) {
                if (s.disableKeyboardControl) s.disableKeyboardControl();
            }
            if (s.params.mousewheelControl) {
                if (s.disableMousewheelControl) s.disableMousewheelControl();
            }
            // Disable a11y
            if (s.params.a11y && s.a11y) s.a11y.destroy();
            // Delete history popstate
            if (s.params.history && !s.params.replaceState) {
                window.removeEventListener('popstate', s.history.setHistoryPopState);
            }
            if (s.params.hashnav && s.hashnav)  {
                s.hashnav.destroy();
            }
            // Destroy callback
            s.emit('onDestroy');
            // Delete instance
            if (deleteInstance !== false) s = null;
        };
        
        s.init();
        

    
        // Return swiper instance
        return s;
    };
    

    /*==================================================
        Prototype
    ====================================================*/
    Swiper.prototype = {
        isSafari: (function () {
            var ua = navigator.userAgent.toLowerCase();
            return (ua.indexOf('safari') >= 0 && ua.indexOf('chrome') < 0 && ua.indexOf('android') < 0);
        })(),
        isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent),
        isArray: function (arr) {
            return Object.prototype.toString.apply(arr) === '[object Array]';
        },
        /*==================================================
        Browser
        ====================================================*/
        browser: {
            ie: window.navigator.pointerEnabled || window.navigator.msPointerEnabled,
            ieTouch: (window.navigator.msPointerEnabled && window.navigator.msMaxTouchPoints > 1) || (window.navigator.pointerEnabled && window.navigator.maxTouchPoints > 1),
            lteIE9: (function() {
                // create temporary DIV
                var div = document.createElement('div');
                // add content to tmp DIV which is wrapped into the IE HTML conditional statement
                div.innerHTML = '<!--[if lte IE 9]><i></i><![endif]-->';
                // return true / false value based on what will browser render
                return div.getElementsByTagName('i').length === 1;
            })()
        },
        /*==================================================
        Devices
        ====================================================*/
        device: (function () {
            var ua = navigator.userAgent;
            var android = ua.match(/(Android);?[\s\/]+([\d.]+)?/);
            var ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
            var ipod = ua.match(/(iPod)(.*OS\s([\d_]+))?/);
            var iphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/);
            return {
                ios: ipad || iphone || ipod,
                android: android
            };
        })(),
        /*==================================================
        Feature Detection
        ====================================================*/
        support: {
            touch : (window.Modernizr && Modernizr.touch === true) || (function () {
                return !!(('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch);
            })(),
    
            transforms3d : (window.Modernizr && Modernizr.csstransforms3d === true) || (function () {
                var div = document.createElement('div').style;
                return ('webkitPerspective' in div || 'MozPerspective' in div || 'OPerspective' in div || 'MsPerspective' in div || 'perspective' in div);
            })(),
    
            flexbox: (function () {
                var div = document.createElement('div').style;
                var styles = ('alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient').split(' ');
                for (var i = 0; i < styles.length; i++) {
                    if (styles[i] in div) return true;
                }
            })(),
    
            observer: (function () {
                return ('MutationObserver' in window || 'WebkitMutationObserver' in window);
            })(),
    
            passiveListener: (function () {
                var supportsPassive = false;
                try {
                    var opts = Object.defineProperty({}, 'passive', {
                        get: function() {
                            supportsPassive = true;
                        }
                    });
                    window.addEventListener('testPassiveListener', null, opts);
                } catch (e) {}
                return supportsPassive;
            })(),
    
            gestures: (function () {
                return 'ongesturestart' in window;
            })()
        },
        /*==================================================
        Plugins
        ====================================================*/
        plugins: {}
    };
    

    /*===========================
    Dom7 Library
    ===========================*/
    var Dom7 = (function () {
        var Dom7 = function (arr) {
            var _this = this, i = 0;
            // Create array-like object
            for (i = 0; i < arr.length; i++) {
                _this[i] = arr[i];
            }
            _this.length = arr.length;
            // Return collection with methods
            return this;
        };
        var $ = function (selector, context) {
            var arr = [], i = 0;
            if (selector && !context) {
                if (selector instanceof Dom7) {
                    return selector;
                }
            }
            if (selector) {
                // String
                if (typeof selector === 'string') {
                    var els, tempParent, html = selector.trim();
                    if (html.indexOf('<') >= 0 && html.indexOf('>') >= 0) {
                        var toCreate = 'div';
                        if (html.indexOf('<li') === 0) toCreate = 'ul';
                        if (html.indexOf('<tr') === 0) toCreate = 'tbody';
                        if (html.indexOf('<td') === 0 || html.indexOf('<th') === 0) toCreate = 'tr';
                        if (html.indexOf('<tbody') === 0) toCreate = 'table';
                        if (html.indexOf('<option') === 0) toCreate = 'select';
                        tempParent = document.createElement(toCreate);
                        tempParent.innerHTML = selector;
                        for (i = 0; i < tempParent.childNodes.length; i++) {
                            arr.push(tempParent.childNodes[i]);
                        }
                    }
                    else {
                        if (!context && selector[0] === '#' && !selector.match(/[ .<>:~]/)) {
                            // Pure ID selector
                            els = [document.getElementById(selector.split('#')[1])];
                        }
                        else {
                            // Other selectors
                            els = (context || document).querySelectorAll(selector);
                        }
                        for (i = 0; i < els.length; i++) {
                            if (els[i]) arr.push(els[i]);
                        }
                    }
                }
                // Node/element
                else if (selector.nodeType || selector === window || selector === document) {
                    arr.push(selector);
                }
                //Array of elements or instance of Dom
                else if (selector.length > 0 && selector[0].nodeType) {
                    for (i = 0; i < selector.length; i++) {
                        arr.push(selector[i]);
                    }
                }
            }
            return new Dom7(arr);
        };
        Dom7.prototype = {
            // Classes and attriutes
            addClass: function (className) {
                if (typeof className === 'undefined') {
                    return this;
                }
                var classes = className.split(' ');
                for (var i = 0; i < classes.length; i++) {
                    for (var j = 0; j < this.length; j++) {
                        this[j].classList.add(classes[i]);
                    }
                }
                return this;
            },
            removeClass: function (className) {
                var classes = className.split(' ');
                for (var i = 0; i < classes.length; i++) {
                    for (var j = 0; j < this.length; j++) {
                        this[j].classList.remove(classes[i]);
                    }
                }
                return this;
            },
            hasClass: function (className) {
                if (!this[0]) return false;
                else return this[0].classList.contains(className);
            },
            toggleClass: function (className) {
                var classes = className.split(' ');
                for (var i = 0; i < classes.length; i++) {
                    for (var j = 0; j < this.length; j++) {
                        this[j].classList.toggle(classes[i]);
                    }
                }
                return this;
            },
            attr: function (attrs, value) {
                if (arguments.length === 1 && typeof attrs === 'string') {
                    // Get attr
                    if (this[0]) return this[0].getAttribute(attrs);
                    else return undefined;
                }
                else {
                    // Set attrs
                    for (var i = 0; i < this.length; i++) {
                        if (arguments.length === 2) {
                            // String
                            this[i].setAttribute(attrs, value);
                        }
                        else {
                            // Object
                            for (var attrName in attrs) {
                                this[i][attrName] = attrs[attrName];
                                this[i].setAttribute(attrName, attrs[attrName]);
                            }
                        }
                    }
                    return this;
                }
            },
            removeAttr: function (attr) {
                for (var i = 0; i < this.length; i++) {
                    this[i].removeAttribute(attr);
                }
                return this;
            },
            data: function (key, value) {
                if (typeof value === 'undefined') {
                    // Get value
                    if (this[0]) {
                        var dataKey = this[0].getAttribute('data-' + key);
                        if (dataKey) return dataKey;
                        else if (this[0].dom7ElementDataStorage && (key in this[0].dom7ElementDataStorage)) return this[0].dom7ElementDataStorage[key];
                        else return undefined;
                    }
                    else return undefined;
                }
                else {
                    // Set value
                    for (var i = 0; i < this.length; i++) {
                        var el = this[i];
                        if (!el.dom7ElementDataStorage) el.dom7ElementDataStorage = {};
                        el.dom7ElementDataStorage[key] = value;
                    }
                    return this;
                }
            },
            // Transforms
            transform : function (transform) {
                for (var i = 0; i < this.length; i++) {
                    var elStyle = this[i].style;
                    elStyle.webkitTransform = elStyle.MsTransform = elStyle.msTransform = elStyle.MozTransform = elStyle.OTransform = elStyle.transform = transform;
                }
                return this;
            },
            transition: function (duration) {
                if (typeof duration !== 'string') {
                    duration = duration + 'ms';
                }
                for (var i = 0; i < this.length; i++) {
                    var elStyle = this[i].style;
                    elStyle.webkitTransitionDuration = elStyle.MsTransitionDuration = elStyle.msTransitionDuration = elStyle.MozTransitionDuration = elStyle.OTransitionDuration = elStyle.transitionDuration = duration;
                }
                return this;
            },
            //Events
            on: function (eventName, targetSelector, listener, capture) {
                function handleLiveEvent(e) {
                    var target = e.target;
                    if ($(target).is(targetSelector)) listener.call(target, e);
                    else {
                        var parents = $(target).parents();
                        for (var k = 0; k < parents.length; k++) {
                            if ($(parents[k]).is(targetSelector)) listener.call(parents[k], e);
                        }
                    }
                }
                var events = eventName.split(' ');
                var i, j;
                for (i = 0; i < this.length; i++) {
                    if (typeof targetSelector === 'function' || targetSelector === false) {
                        // Usual events
                        if (typeof targetSelector === 'function') {
                            listener = arguments[1];
                            capture = arguments[2] || false;
                        }
                        for (j = 0; j < events.length; j++) {
                            this[i].addEventListener(events[j], listener, capture);
                        }
                    }
                    else {
                        //Live events
                        for (j = 0; j < events.length; j++) {
                            if (!this[i].dom7LiveListeners) this[i].dom7LiveListeners = [];
                            this[i].dom7LiveListeners.push({listener: listener, liveListener: handleLiveEvent});
                            this[i].addEventListener(events[j], handleLiveEvent, capture);
                        }
                    }
                }
    
                return this;
            },
            off: function (eventName, targetSelector, listener, capture) {
                var events = eventName.split(' ');
                for (var i = 0; i < events.length; i++) {
                    for (var j = 0; j < this.length; j++) {
                        if (typeof targetSelector === 'function' || targetSelector === false) {
                            // Usual events
                            if (typeof targetSelector === 'function') {
                                listener = arguments[1];
                                capture = arguments[2] || false;
                            }
                            this[j].removeEventListener(events[i], listener, capture);
                        }
                        else {
                            // Live event
                            if (this[j].dom7LiveListeners) {
                                for (var k = 0; k < this[j].dom7LiveListeners.length; k++) {
                                    if (this[j].dom7LiveListeners[k].listener === listener) {
                                        this[j].removeEventListener(events[i], this[j].dom7LiveListeners[k].liveListener, capture);
                                    }
                                }
                            }
                        }
                    }
                }
                return this;
            },
            once: function (eventName, targetSelector, listener, capture) {
                var dom = this;
                if (typeof targetSelector === 'function') {
                    targetSelector = false;
                    listener = arguments[1];
                    capture = arguments[2];
                }
                function proxy(e) {
                    listener(e);
                    dom.off(eventName, targetSelector, proxy, capture);
                }
                dom.on(eventName, targetSelector, proxy, capture);
            },
            trigger: function (eventName, eventData) {
                for (var i = 0; i < this.length; i++) {
                    var evt;
                    try {
                        evt = new window.CustomEvent(eventName, {detail: eventData, bubbles: true, cancelable: true});
                    }
                    catch (e) {
                        evt = document.createEvent('Event');
                        evt.initEvent(eventName, true, true);
                        evt.detail = eventData;
                    }
                    this[i].dispatchEvent(evt);
                }
                return this;
            },
            transitionEnd: function (callback) {
                var events = ['webkitTransitionEnd', 'transitionend', 'oTransitionEnd', 'MSTransitionEnd', 'msTransitionEnd'],
                    i, j, dom = this;
                function fireCallBack(e) {
                    /*jshint validthis:true */
                    if (e.target !== this) return;
                    callback.call(this, e);
                    for (i = 0; i < events.length; i++) {
                        dom.off(events[i], fireCallBack);
                    }
                }
                if (callback) {
                    for (i = 0; i < events.length; i++) {
                        dom.on(events[i], fireCallBack);
                    }
                }
                return this;
            },
            // Sizing/Styles
            width: function () {
                if (this[0] === window) {
                    return window.innerWidth;
                }
                else {
                    if (this.length > 0) {
                        return parseFloat(this.css('width'));
                    }
                    else {
                        return null;
                    }
                }
            },
            outerWidth: function (includeMargins) {
                if (this.length > 0) {
                    if (includeMargins)
                        return this[0].offsetWidth + parseFloat(this.css('margin-right')) + parseFloat(this.css('margin-left'));
                    else
                        return this[0].offsetWidth;
                }
                else return null;
            },
            height: function () {
                if (this[0] === window) {
                    return window.innerHeight;
                }
                else {
                    if (this.length > 0) {
                        return parseFloat(this.css('height'));
                    }
                    else {
                        return null;
                    }
                }
            },
            outerHeight: function (includeMargins) {
                if (this.length > 0) {
                    if (includeMargins)
                        return this[0].offsetHeight + parseFloat(this.css('margin-top')) + parseFloat(this.css('margin-bottom'));
                    else
                        return this[0].offsetHeight;
                }
                else return null;
            },
            offset: function () {
                if (this.length > 0) {
                    var el = this[0];
                    var box = el.getBoundingClientRect();
                    var body = document.body;
                    var clientTop  = el.clientTop  || body.clientTop  || 0;
                    var clientLeft = el.clientLeft || body.clientLeft || 0;
                    var scrollTop  = window.pageYOffset || el.scrollTop;
                    var scrollLeft = window.pageXOffset || el.scrollLeft;
                    return {
                        top: box.top  + scrollTop  - clientTop,
                        left: box.left + scrollLeft - clientLeft
                    };
                }
                else {
                    return null;
                }
            },
            css: function (props, value) {
                var i;
                if (arguments.length === 1) {
                    if (typeof props === 'string') {
                        if (this[0]) return window.getComputedStyle(this[0], null).getPropertyValue(props);
                    }
                    else {
                        for (i = 0; i < this.length; i++) {
                            for (var prop in props) {
                                this[i].style[prop] = props[prop];
                            }
                        }
                        return this;
                    }
                }
                if (arguments.length === 2 && typeof props === 'string') {
                    for (i = 0; i < this.length; i++) {
                        this[i].style[props] = value;
                    }
                    return this;
                }
                return this;
            },
    
            //Dom manipulation
            each: function (callback) {
                for (var i = 0; i < this.length; i++) {
                    callback.call(this[i], i, this[i]);
                }
                return this;
            },
            html: function (html) {
                if (typeof html === 'undefined') {
                    return this[0] ? this[0].innerHTML : undefined;
                }
                else {
                    for (var i = 0; i < this.length; i++) {
                        this[i].innerHTML = html;
                    }
                    return this;
                }
            },
            text: function (text) {
                if (typeof text === 'undefined') {
                    if (this[0]) {
                        return this[0].textContent.trim();
                    }
                    else return null;
                }
                else {
                    for (var i = 0; i < this.length; i++) {
                        this[i].textContent = text;
                    }
                    return this;
                }
            },
            is: function (selector) {
                if (!this[0]) return false;
                var compareWith, i;
                if (typeof selector === 'string') {
                    var el = this[0];
                    if (el === document) return selector === document;
                    if (el === window) return selector === window;
    
                    if (el.matches) return el.matches(selector);
                    else if (el.webkitMatchesSelector) return el.webkitMatchesSelector(selector);
                    else if (el.mozMatchesSelector) return el.mozMatchesSelector(selector);
                    else if (el.msMatchesSelector) return el.msMatchesSelector(selector);
                    else {
                        compareWith = $(selector);
                        for (i = 0; i < compareWith.length; i++) {
                            if (compareWith[i] === this[0]) return true;
                        }
                        return false;
                    }
                }
                else if (selector === document) return this[0] === document;
                else if (selector === window) return this[0] === window;
                else {
                    if (selector.nodeType || selector instanceof Dom7) {
                        compareWith = selector.nodeType ? [selector] : selector;
                        for (i = 0; i < compareWith.length; i++) {
                            if (compareWith[i] === this[0]) return true;
                        }
                        return false;
                    }
                    return false;
                }
    
            },
            index: function () {
                if (this[0]) {
                    var child = this[0];
                    var i = 0;
                    while ((child = child.previousSibling) !== null) {
                        if (child.nodeType === 1) i++;
                    }
                    return i;
                }
                else return undefined;
            },
            eq: function (index) {
                if (typeof index === 'undefined') return this;
                var length = this.length;
                var returnIndex;
                if (index > length - 1) {
                    return new Dom7([]);
                }
                if (index < 0) {
                    returnIndex = length + index;
                    if (returnIndex < 0) return new Dom7([]);
                    else return new Dom7([this[returnIndex]]);
                }
                return new Dom7([this[index]]);
            },
            append: function (newChild) {
                var i, j;
                for (i = 0; i < this.length; i++) {
                    if (typeof newChild === 'string') {
                        var tempDiv = document.createElement('div');
                        tempDiv.innerHTML = newChild;
                        while (tempDiv.firstChild) {
                            this[i].appendChild(tempDiv.firstChild);
                        }
                    }
                    else if (newChild instanceof Dom7) {
                        for (j = 0; j < newChild.length; j++) {
                            this[i].appendChild(newChild[j]);
                        }
                    }
                    else {
                        this[i].appendChild(newChild);
                    }
                }
                return this;
            },
            prepend: function (newChild) {
                var i, j;
                for (i = 0; i < this.length; i++) {
                    if (typeof newChild === 'string') {
                        var tempDiv = document.createElement('div');
                        tempDiv.innerHTML = newChild;
                        for (j = tempDiv.childNodes.length - 1; j >= 0; j--) {
                            this[i].insertBefore(tempDiv.childNodes[j], this[i].childNodes[0]);
                        }
                        // this[i].insertAdjacentHTML('afterbegin', newChild);
                    }
                    else if (newChild instanceof Dom7) {
                        for (j = 0; j < newChild.length; j++) {
                            this[i].insertBefore(newChild[j], this[i].childNodes[0]);
                        }
                    }
                    else {
                        this[i].insertBefore(newChild, this[i].childNodes[0]);
                    }
                }
                return this;
            },
            insertBefore: function (selector) {
                var before = $(selector);
                for (var i = 0; i < this.length; i++) {
                    if (before.length === 1) {
                        before[0].parentNode.insertBefore(this[i], before[0]);
                    }
                    else if (before.length > 1) {
                        for (var j = 0; j < before.length; j++) {
                            before[j].parentNode.insertBefore(this[i].cloneNode(true), before[j]);
                        }
                    }
                }
            },
            insertAfter: function (selector) {
                var after = $(selector);
                for (var i = 0; i < this.length; i++) {
                    if (after.length === 1) {
                        after[0].parentNode.insertBefore(this[i], after[0].nextSibling);
                    }
                    else if (after.length > 1) {
                        for (var j = 0; j < after.length; j++) {
                            after[j].parentNode.insertBefore(this[i].cloneNode(true), after[j].nextSibling);
                        }
                    }
                }
            },
            next: function (selector) {
                if (this.length > 0) {
                    if (selector) {
                        if (this[0].nextElementSibling && $(this[0].nextElementSibling).is(selector)) return new Dom7([this[0].nextElementSibling]);
                        else return new Dom7([]);
                    }
                    else {
                        if (this[0].nextElementSibling) return new Dom7([this[0].nextElementSibling]);
                        else return new Dom7([]);
                    }
                }
                else return new Dom7([]);
            },
            nextAll: function (selector) {
                var nextEls = [];
                var el = this[0];
                if (!el) return new Dom7([]);
                while (el.nextElementSibling) {
                    var next = el.nextElementSibling;
                    if (selector) {
                        if($(next).is(selector)) nextEls.push(next);
                    }
                    else nextEls.push(next);
                    el = next;
                }
                return new Dom7(nextEls);
            },
            prev: function (selector) {
                if (this.length > 0) {
                    if (selector) {
                        if (this[0].previousElementSibling && $(this[0].previousElementSibling).is(selector)) return new Dom7([this[0].previousElementSibling]);
                        else return new Dom7([]);
                    }
                    else {
                        if (this[0].previousElementSibling) return new Dom7([this[0].previousElementSibling]);
                        else return new Dom7([]);
                    }
                }
                else return new Dom7([]);
            },
            prevAll: function (selector) {
                var prevEls = [];
                var el = this[0];
                if (!el) return new Dom7([]);
                while (el.previousElementSibling) {
                    var prev = el.previousElementSibling;
                    if (selector) {
                        if($(prev).is(selector)) prevEls.push(prev);
                    }
                    else prevEls.push(prev);
                    el = prev;
                }
                return new Dom7(prevEls);
            },
            parent: function (selector) {
                var parents = [];
                for (var i = 0; i < this.length; i++) {
                    if (selector) {
                        if ($(this[i].parentNode).is(selector)) parents.push(this[i].parentNode);
                    }
                    else {
                        parents.push(this[i].parentNode);
                    }
                }
                return $($.unique(parents));
            },
            parents: function (selector) {
                var parents = [];
                for (var i = 0; i < this.length; i++) {
                    var parent = this[i].parentNode;
                    while (parent) {
                        if (selector) {
                            if ($(parent).is(selector)) parents.push(parent);
                        }
                        else {
                            parents.push(parent);
                        }
                        parent = parent.parentNode;
                    }
                }
                return $($.unique(parents));
            },
            find : function (selector) {
                var foundElements = [];
                for (var i = 0; i < this.length; i++) {
                    var found = this[i].querySelectorAll(selector);
                    for (var j = 0; j < found.length; j++) {
                        foundElements.push(found[j]);
                    }
                }
                return new Dom7(foundElements);
            },
            children: function (selector) {
                var children = [];
                for (var i = 0; i < this.length; i++) {
                    var childNodes = this[i].childNodes;
    
                    for (var j = 0; j < childNodes.length; j++) {
                        if (!selector) {
                            if (childNodes[j].nodeType === 1) children.push(childNodes[j]);
                        }
                        else {
                            if (childNodes[j].nodeType === 1 && $(childNodes[j]).is(selector)) children.push(childNodes[j]);
                        }
                    }
                }
                return new Dom7($.unique(children));
            },
            remove: function () {
                for (var i = 0; i < this.length; i++) {
                    if (this[i].parentNode) this[i].parentNode.removeChild(this[i]);
                }
                return this;
            },
            add: function () {
                var dom = this;
                var i, j;
                for (i = 0; i < arguments.length; i++) {
                    var toAdd = $(arguments[i]);
                    for (j = 0; j < toAdd.length; j++) {
                        dom[dom.length] = toAdd[j];
                        dom.length++;
                    }
                }
                return dom;
            }
        };
        $.fn = Dom7.prototype;
        $.unique = function (arr) {
            var unique = [];
            for (var i = 0; i < arr.length; i++) {
                if (unique.indexOf(arr[i]) === -1) unique.push(arr[i]);
            }
            return unique;
        };
    
        return $;
    })();
    

    /*===========================
     Get Dom libraries
     ===========================*/
    var swiperDomPlugins = ['jQuery', 'Zepto', 'Dom7'];
    for (var i = 0; i < swiperDomPlugins.length; i++) {
    	if (window[swiperDomPlugins[i]]) {
    		addLibraryPlugin(window[swiperDomPlugins[i]]);
    	}
    }
    // Required DOM Plugins
    var domLib;
    if (typeof Dom7 === 'undefined') {
    	domLib = window.Dom7 || window.Zepto || window.jQuery;
    }
    else {
    	domLib = Dom7;
    }

    /*===========================
    Add .swiper plugin from Dom libraries
    ===========================*/
    function addLibraryPlugin(lib) {
        lib.fn.swiper = function (params) {
            var firstInstance;
            lib(this).each(function () {
                var s = new Swiper(this, params);
                if (!firstInstance) firstInstance = s;
            });
            return firstInstance;
        };
    }
    
    if (domLib) {
        if (!('transitionEnd' in domLib.fn)) {
            domLib.fn.transitionEnd = function (callback) {
                var events = ['webkitTransitionEnd', 'transitionend', 'oTransitionEnd', 'MSTransitionEnd', 'msTransitionEnd'],
                    i, j, dom = this;
                function fireCallBack(e) {
                    /*jshint validthis:true */
                    if (e.target !== this) return;
                    callback.call(this, e);
                    for (i = 0; i < events.length; i++) {
                        dom.off(events[i], fireCallBack);
                    }
                }
                if (callback) {
                    for (i = 0; i < events.length; i++) {
                        dom.on(events[i], fireCallBack);
                    }
                }
                return this;
            };
        }
        if (!('transform' in domLib.fn)) {
            domLib.fn.transform = function (transform) {
                for (var i = 0; i < this.length; i++) {
                    var elStyle = this[i].style;
                    elStyle.webkitTransform = elStyle.MsTransform = elStyle.msTransform = elStyle.MozTransform = elStyle.OTransform = elStyle.transform = transform;
                }
                return this;
            };
        }
        if (!('transition' in domLib.fn)) {
            domLib.fn.transition = function (duration) {
                if (typeof duration !== 'string') {
                    duration = duration + 'ms';
                }
                for (var i = 0; i < this.length; i++) {
                    var elStyle = this[i].style;
                    elStyle.webkitTransitionDuration = elStyle.MsTransitionDuration = elStyle.msTransitionDuration = elStyle.MozTransitionDuration = elStyle.OTransitionDuration = elStyle.transitionDuration = duration;
                }
                return this;
            };
        }
        if (!('outerWidth' in domLib.fn)) {
            domLib.fn.outerWidth = function (includeMargins) {
                if (this.length > 0) {
                    if (includeMargins)
                        return this[0].offsetWidth + parseFloat(this.css('margin-right')) + parseFloat(this.css('margin-left'));
                    else
                        return this[0].offsetWidth;
                }
                else return null;
            };
        }
    }

    window.Swiper = Swiper;
})();
/*===========================
Swiper AMD Export
===========================*/
if (typeof(module) !== 'undefined')
{
    module.exports = window.Swiper;
}
else if (typeof define === 'function' && define.amd) {
    define([], function () {
        'use strict';
        return window.Swiper;
    });
}
//# sourceMappingURL=maps/swiper.js.map

