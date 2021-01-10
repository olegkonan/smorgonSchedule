(()=>{"use strict";var e={890:(e,t,a)=>{a.d(t,{Z:()=>o});var n=a(645),r=a.n(n)()((function(e){return e[1]}));r.push([e.id,"* {\r\n  box-sizing: border-box;\r\n  padding: 0;\r\n  margin: 0;\r\n}\r\n\r\n.wrapper {\r\n  height: 100vh;\r\n  display: flex;\r\n  flex-direction: column;\r\n  gap: 10px;\r\n  justify-content: center;\r\n  align-items: center;\r\n}\r\n\r\n.container {\r\n  display: flex;\r\n  gap: 5px;\r\n  justify-content: center;\r\n  align-items: center;\r\n  width: 90%;\r\n  height: 5%;\r\n}\r\n\r\n.select-item {\r\n\r\n}\r\n\r\n.result {\r\n\r\n}",""]);const o=r},645:e=>{e.exports=function(e){var t=[];return t.toString=function(){return this.map((function(t){var a=e(t);return t[2]?"@media ".concat(t[2]," {").concat(a,"}"):a})).join("")},t.i=function(e,a,n){"string"==typeof e&&(e=[[null,e,""]]);var r={};if(n)for(var o=0;o<this.length;o++){var l=this[o][0];null!=l&&(r[l]=!0)}for(var s=0;s<e.length;s++){var i=[].concat(e[s]);n&&r[i[0]]||(a&&(i[2]?i[2]="".concat(a," and ").concat(i[2]):i[2]=a),t.push(i))}},t}},379:(e,t,a)=>{var n,r=function(){var e={};return function(t){if(void 0===e[t]){var a=document.querySelector(t);if(window.HTMLIFrameElement&&a instanceof window.HTMLIFrameElement)try{a=a.contentDocument.head}catch(e){a=null}e[t]=a}return e[t]}}(),o=[];function l(e){for(var t=-1,a=0;a<o.length;a++)if(o[a].identifier===e){t=a;break}return t}function s(e,t){for(var a={},n=[],r=0;r<e.length;r++){var s=e[r],i=t.base?s[0]+t.base:s[0],m=a[i]||0,c="".concat(i," ").concat(m);a[i]=m+1;var u=l(c),d={css:s[1],media:s[2],sourceMap:s[3]};-1!==u?(o[u].references++,o[u].updater(d)):o.push({identifier:c,updater:N(d,t),references:1}),n.push(c)}return n}function i(e){var t=document.createElement("style"),n=e.attributes||{};if(void 0===n.nonce){var o=a.nc;o&&(n.nonce=o)}if(Object.keys(n).forEach((function(e){t.setAttribute(e,n[e])})),"function"==typeof e.insert)e.insert(t);else{var l=r(e.insert||"head");if(!l)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");l.appendChild(t)}return t}var m,c=(m=[],function(e,t){return m[e]=t,m.filter(Boolean).join("\n")});function u(e,t,a,n){var r=a?"":n.media?"@media ".concat(n.media," {").concat(n.css,"}"):n.css;if(e.styleSheet)e.styleSheet.cssText=c(t,r);else{var o=document.createTextNode(r),l=e.childNodes;l[t]&&e.removeChild(l[t]),l.length?e.insertBefore(o,l[t]):e.appendChild(o)}}function d(e,t,a){var n=a.css,r=a.media,o=a.sourceMap;if(r?e.setAttribute("media",r):e.removeAttribute("media"),o&&"undefined"!=typeof btoa&&(n+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(o))))," */")),e.styleSheet)e.styleSheet.cssText=n;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(n))}}var f=null,h=0;function N(e,t){var a,n,r;if(t.singleton){var o=h++;a=f||(f=i(t)),n=u.bind(null,a,o,!1),r=u.bind(null,a,o,!0)}else a=i(t),n=d.bind(null,a,t),r=function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(a)};return n(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap)return;n(e=t)}else r()}}e.exports=function(e,t){(t=t||{}).singleton||"boolean"==typeof t.singleton||(t.singleton=(void 0===n&&(n=Boolean(window&&document&&document.all&&!window.atob)),n));var a=s(e=e||[],t);return function(e){if(e=e||[],"[object Array]"===Object.prototype.toString.call(e)){for(var n=0;n<a.length;n++){var r=l(a[n]);o[r].references--}for(var i=s(e,t),m=0;m<a.length;m++){var c=l(a[m]);0===o[c].references&&(o[c].updater(),o.splice(c,1))}a=i}}}}},t={};function a(n){if(t[n])return t[n].exports;var r=t[n]={id:n,exports:{}};return e[n](r,r.exports,a),r.exports}a.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return a.d(t,{a:t}),t},a.d=(e,t)=>{for(var n in t)a.o(t,n)&&!a.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e=a(379),t=a.n(e),n=a(890);t()(n.Z,{insert:"head",singleton:!1}),n.Z.locals;const r=[{shortName:"koreni",fullName:"микрорайон Корени"},{shortName:"saz",fullName:"САЗ"},{shortName:"polyclinic",fullName:"Поликлиника"},{shortName:"bakery_plant",fullName:"Хлебозавод"},{shortName:"koreni_village",fullName:"Корени"},{shortName:"water_intake",fullName:"Водозабор"},{shortName:"ag_machinery",fullName:"Агропромтехника"},{shortName:"west",fullName:"микрорайон Западный"},{shortName:"school_1",fullName:"СШ №1"},{shortName:"hotel",fullName:"Гостиница"},{shortName:"square",fullName:"Площадь"},{shortName:"сom_center",fullName:"Узел связи"},{shortName:"justice_house",fullName:"Дом правосудия"},{shortName:"hospital",fullName:"Больница"},{shortName:"school_2",fullName:"СШ №2"},{shortName:"sadovaya",fullName:"Садовая"},{shortName:"electricity",fullName:"Электросеть"},{shortName:"east",fullName:"микрорайон Восточный"},{shortName:"school_7",fullName:"СШ №7"},{shortName:"market",fullName:"Вещевой рынок"},{shortName:"red_army",fullName:"Красноармейская"},{shortName:"alesya",fullName:"Алеся"},{shortName:"kolosok",fullName:"Колосок"},{shortName:"szos",fullName:"СЗОС"},{shortName:"spc",fullName:"СПЦ"},{shortName:"school_3",fullName:"СШ №3"},{shortName:"shop_5",fullName:"Магазин №5"},{shortName:"city_forestry",fullName:"Лесное хозяйство"},{shortName:"bus_station",fullName:"Автовокзал"},{shortName:"rw_station",fullName:"ж/д вокзал"},{shortName:"zaslonova_st",fullName:"улица Заслонова"},{shortName:"gas_station",fullName:"АЗС №1"},{shortName:"car_park",fullName:"АТП №17"},{shortName:"hales",fullName:"Халес"},{shortName:"hcs",fullName:"ЖКХ"},{shortName:"veterinary",fullName:"Ветлечебница"},{shortName:"lmz",fullName:"Литейный завод"},{shortName:"gagarina_st",fullName:"улица Гагарина"},{shortName:"molodeznaya_st",fullName:"улица Молодежная"},{shortName:"city_gas",fullName:"Горгаз"},{shortName:"molodezniy",fullName:"микрорайон Молодежный"},{shortName:"shop",fullName:"Магазин"},{shortName:"field",fullName:"Полевая"},{shortName:"green_meadow",fullName:"Зеленый луг"},{shortName:"forestry",fullName:"Лесничество"},{shortName:"cemetery",fullName:"Городское кладбище"},{shortName:"evroopt",fullName:"Евроопт"},{shortName:"brovki_st",fullName:"улица Петруся Бровки"}],o=document.createElement("main"),l=document.createElement("form"),s=document.createElement("select");s.addEventListener("click",(function(){r.forEach((e=>{const t=document.createElement("option");t.value=e.shortName,t.textContent=e.fullName,s.appendChild(t)}))})),function(){o.classList.add("wrapper"),document.body.append(o),l.classList.add("container"),l.action="#",o.appendChild(l),s.classList.add("select-item"),s.name="bus-stop",s.id="busStop",l.appendChild(s);const e=document.createElement("option");e.value="",e.textContent="Выберите остановку",s.appendChild(e);const t=document.createElement("label");t.setAttribute("for","weekDay"),t.textContent="Будни",l.append(t);const a=document.createElement("input");a.classList.add("radio"),a.type="radio",a.checked=!0,a.name="radio",a.id="weekDay",l.appendChild(a);const n=document.createElement("label");n.setAttribute("for","dayOff"),n.textContent="Выходные",l.append(n);const r=document.createElement("input");r.classList.add("radio"),r.type="radio",r.name="radio",r.id="dayOff",l.appendChild(r);const i=document.createElement("div");i.classList.add("result"),o.appendChild(i),i.textContent="Some text"}(),l.addEventListener("change",(function(e){"input"===e.target.localName?console.log(e.target.id):console.log(e.target.value)}))})()})();