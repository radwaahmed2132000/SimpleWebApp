(function(t){function e(e){for(var s,a,o=e[0],l=e[1],c=e[2],h=0,u=[];h<o.length;h++)a=o[h],Object.prototype.hasOwnProperty.call(r,a)&&r[a]&&u.push(r[a][0]),r[a]=0;for(s in l)Object.prototype.hasOwnProperty.call(l,s)&&(t[s]=l[s]);d&&d(e);while(u.length)u.shift()();return n.push.apply(n,c||[]),i()}function i(){for(var t,e=0;e<n.length;e++){for(var i=n[e],s=!0,o=1;o<i.length;o++){var l=i[o];0!==r[l]&&(s=!1)}s&&(n.splice(e--,1),t=a(a.s=i[0]))}return t}var s={},r={app:0},n=[];function a(e){if(s[e])return s[e].exports;var i=s[e]={i:e,l:!1,exports:{}};return t[e].call(i.exports,i,i.exports,a),i.l=!0,i.exports}a.m=t,a.c=s,a.d=function(t,e,i){a.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:i})},a.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},a.t=function(t,e){if(1&e&&(t=a(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(a.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var s in t)a.d(i,s,function(e){return t[e]}.bind(null,s));return i},a.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return a.d(e,"a",e),e},a.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},a.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],l=o.push.bind(o);o.push=e,o=o.slice();for(var c=0;c<o.length;c++)e(o[c]);var d=l;n.push([0,"chunk-vendors"]),i()})({0:function(t,e,i){t.exports=i("56d7")},"034f":function(t,e,i){"use strict";i("85ec")},"1e27":function(t,e,i){"use strict";i("70b1")},"36fc":function(t,e,i){"use strict";i("f36d")},"3f3b":function(t,e,i){},"56d7":function(t,e,i){"use strict";i.r(e);i("e260"),i("e6cf"),i("cca6"),i("a79d");var s=i("2b0e"),r=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{attrs:{id:"app"}},[i("router-view")],1)},n=[],a={name:"App"},o=a,l=(i("034f"),i("2877")),c=Object(l["a"])(o,r,n,!1,null,null,null),d=c.exports,h=i("5f5b"),u=(i("f9e3"),i("2dd8"),i("8c4f")),p=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("div",{staticClass:"container"},[i("div",{staticClass:"row"},[t._m(0),i("div",{staticClass:"col-lg-4"},[i("button",{on:{click:function(e){return t.addProduct()}}},[t._v("Save")]),i("button",{on:{click:function(e){return t.cancelProduct()}}},[t._v("Cancel")])])])]),i("LineProduct"),i("b-container",[i("b-form",{attrs:{id:"product_form"}},[i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"sku"}},[t._v("SKU")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"sku",placeholder:"Enter your SKU",type:"text"},model:{value:t.SKU,callback:function(e){t.SKU=e},expression:"SKU"}})],1)],1),i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"Name"}},[t._v("Name")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"name",placeholder:"Enter your name",type:"text"},model:{value:t.name,callback:function(e){t.name=e},expression:"name"}})],1)],1),i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"price"}},[t._v("Price ($)")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"price",min:"1",placeholder:"Enter your price",type:"number"},model:{value:t.price,callback:function(e){t.price=e},expression:"price"}})],1)],1),i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"productType"}},[t._v("Type Switcher")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-select",{attrs:{options:t.options,id:"productType"},model:{value:t.type,callback:function(e){t.type=e},expression:"type"}})],1)],1),"DVD"==t.type?i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"size"}},[t._v("Size (MB)")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"size",min:"1",placeholder:"Enter your size",type:"number"},model:{value:t.size,callback:function(e){t.size=e},expression:"size"}}),i("br"),i("b-card-text",[t._v(" Please provide DVD size in mega bytes ")])],1)],1):t._e(),"Book"==t.type?i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"weight"}},[t._v("Weight (KG)")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"weight",min:"1",placeholder:"Enter your weight",type:"number"},model:{value:t.weight,callback:function(e){t.weight=e},expression:"weight"}}),i("br"),i("b-card-text",[t._v("Please provide book weight in kilo grams ")])],1)],1):t._e(),"Furniture"==t.type?i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"height"}},[t._v("Height (CM)")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"height",min:"1",placeholder:"Enter your height",type:"number"},model:{value:t.height,callback:function(e){t.height=e},expression:"height"}})],1)],1):t._e(),"Furniture"==t.type?i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"width"}},[t._v("Width (CM)")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"width",min:"1",placeholder:"Enter your width",type:"number"},model:{value:t.width,callback:function(e){t.width=e},expression:"width"}})],1)],1):t._e(),"Furniture"==t.type?i("b-row",{staticClass:"my-3"},[i("b-col",{attrs:{lg:"2"}},[i("label",{attrs:{for:"length"}},[t._v("Length (CM)")])]),i("b-col",{attrs:{lg:"6"}},[i("b-form-input",{attrs:{id:"length",type:"number",min:"1",placeholder:"Enter your length"},model:{value:t.length,callback:function(e){t.length=e},expression:"length"}}),i("br"),i("b-card-text",[t._v(" Please provide dimensions in HxWxL format ")])],1)],1):t._e(),1==t.missinghtml?i("b-row",{staticClass:"my-3"},[t._v(" Please, submit required data ")]):t._e(),1==t.invalidhtml?i("b-row",{staticClass:"my-3"},[t._v(" Please, provide the data of indicated type ")]):t._e()],1)],1),i("LineProduct"),i("h4",[t._v(" Scandiweb Test Assignment ")])],1)},m=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"col-lg-5"},[i("h2",[t._v("Product Add")])])}],f=(i("b0c0"),i("ac1f"),i("466d"),i("e9c4"),function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)}),v=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"container-fluid m-3"},[i("div",{staticClass:"row",attrs:{id:"line"}})])}],g={name:"LineProduct"},b=g,y=(i("1e27"),Object(l["a"])(b,f,v,!1,null,null,null)),w=y.exports,_=i("bc3a"),k=i.n(_),x={name:"AddProduct",components:{LineProduct:w},data:function(){return{SKU:"",name:"",price:1,size:1,weight:1,height:1,width:1,length:1,missing:!1,invalid:!1,missinghtml:!1,invalidhtml:!1,missingerrors:0,invaliderrors:0,type:"",options:[{value:"DVD",text:"DVD"},{value:"Book",text:"Book"},{value:"Furniture",text:"Furniture"}]}},methods:{cancelProduct:function(){this.$router.push("/")},checkMissing:function(){this.missingerrors=0,this.invaliderrors=0,""!=this.SKU&&""!=this.name&&""!=this.price||(this.missing=!0,this.missingerrors++),"DVD"==this.type&&""==this.size||"Book"==this.type&&""==this.weight?(this.missing=!0,this.missingerrors++):"Furniture"!=this.type||""!=this.width&&""!=this.height&&""!=this.length?""==this.type&&(this.missing=!0,this.missingerrors++):(this.missing=!0,this.missingerrors++),0==this.missingerrors&&(this.missing=!1)},checkInvalid:function(){this.invalid=!1,this.invaliderrors=0,this.name.match(/^[A-Za-z0-9\s]+$/)||(this.invalid=!0,this.invaliderrors++),String(this.price).match(/^[0-9.]+$/)?this.price<=0&&(this.invaliderrors++,this.invalid=!0):(this.invaliderrors++,this.invalid=!0),"DVD"==this.type&&(String(this.size).match(/^[0-9.]+$/)?this.size<=0&&(this.invaliderrors++,this.invalid=!0):(this.invaliderrors++,this.invalid=!0)),"Book"==this.type&&(String(this.weight).match(/^[0-9.]+$/)?this.weight<=0&&(this.invaliderrors++,this.invalid=!0):(this.invaliderrors++,this.invalid=!0)),"Furniture"==this.type&&(String(this.width).match(/^[0-9.]+$/)?this.width<=0&&(this.invaliderrors++,this.invalid=!0):(this.invaliderrors++,this.invalid=!0),String(this.height).match(/^[0-9.]+$/)?this.height<=0&&(this.invaliderrors++,this.invalid=!0):(this.invaliderrors++,this.invalid=!0),String(this.length).match(/^[0-9.]+$/)?this.length<=0&&(this.invaliderrors++,this.invalid=!0):(this.invaliderrors++,this.invalid=!0)),console.log(this.invalid)},addProduct:function(){var t=this;this.checkMissing(),this.missing?this.missinghtml=!0:(this.checkInvalid(),this.invalid?this.invalidhtml=!0:this.invalidhtml=!1,this.missinghtml=!1);var e={};this.missing||this.invalid||(e.price=this.price,e.name=this.name,e.type=this.type,e.sku=this.SKU,"DVD"==this.type?e.size=this.size:"Book"==this.type?e.weight=this.weight:"Furniture"==this.type&&(e.width=this.width,e.height=this.height,e.length=this.length),console.log(JSON.stringify(e)),k.a.post("https://newoneagainadkjdkw.azurewebsites.net/index.php/add",JSON.stringify(e)).then((function(e){console.log(e.data.meta.msg),"200"!=e.data.meta.status?t.invalidhtml=!0:(t.invalidhtml=!1,t.$router.push("/"))})))}}},P=x,S=(i("36fc"),Object(l["a"])(P,p,m,!1,null,null,null)),C=S.exports,z=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("div",{staticClass:"container"},[i("div",{staticClass:"row"},[t._m(0),i("div",{staticClass:"col-lg-4 buttons"},[i("button",{on:{click:function(e){return t.addNewProduct()}}},[t._v(" ADD ")]),i("button",{attrs:{id:"delete-product-btn"},on:{click:function(e){return t.deleteProduct()}}},[t._v("MASS DELETE")])])])]),i("LineProduct"),i("div",{staticClass:"container mb-5"},[i("div",{staticClass:"row"},t._l(t.products,(function(e){return i("div",{key:e.id,staticClass:"col-lg-3 my-2"},[i("b-card-group",[i("b-card",[i("b-form-checkbox",{staticClass:"delete-checkbox",attrs:{value:e.id,name:e.name},model:{value:t.ids,callback:function(e){t.ids=e},expression:"ids"}}),i("br"),i("b-card-text",[t._v(t._s(e.SKU))]),i("b-card-text",[t._v(t._s(e.name))]),i("b-card-text",[t._v(t._s(e.price))]),"DVD"==e.type?i("b-card-text",[t._v("Size: "+t._s(e.size)+" MB ")]):t._e(),"Furniture"==e.type?i("b-card-text",[t._v("Dimension: "+t._s(e.width)+"x"+t._s(e.height)+"x"+t._s(e.length))]):t._e(),"Book"==e.type?i("b-card-text",[t._v("Weight: "+t._s(e.weight)+"KG")]):t._e(),i("br")],1)],1)],1)})),0)]),i("LineProduct"),i("h4",[t._v(" Scandiweb Test Assignment ")])],1)},D=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"col-lg-8"},[i("h2",[t._v("Product List")])])}],E={name:"Product",components:{LineProduct:w},data:function(){return{products:[],count:0,ids:[],data:[],status:"",deletedIds:[]}},methods:{getAllProducts:function(){var t=this;this.products=[],k.a.get("https://newoneagainadkjdkw.azurewebsites.net/index.php/products").then((function(e){if(t.data=e.data.response,t.status=e.data.meta.status,"200"==t.status){t.count=t.data.length;for(var i=0;i<t.count;i++)t.products.push({name:t.data[i].name,SKU:t.data[i].sku,type:t.data[i].type,price:t.data[i].price,width:t.data[i].width,height:t.data[i].height,length:t.data[i].length,size:t.data[i].size,weight:t.data[i].weight,id:String(t.data[i].id)})}}))},deleteProduct:function(){console.log(this.ids[0]);for(var t=0;t<this.ids.length;t++)this.deletedIds.push({id:this.ids[t]});k.a.post("https://newoneagainadkjdkw.azurewebsites.net/index.php/del",JSON.stringify(this.deletedIds)),location.reload()},addNewProduct:function(){this.$router.push("/AddProduct")}},mounted:function(){this.getAllProducts()}},$=E,O=(i("e903"),Object(l["a"])($,z,D,!1,null,null,null)),j=O.exports;s["default"].use(u["a"]);var A=[{path:"/AddProduct",name:"AddProduct",component:C,meta:{allowAnonymous:!0}},{path:"/",name:"Product",component:j,meta:{allowAnonymous:!0}}],K=new u["a"]({mode:"history",base:"/",routes:A});K.beforeEach((function(t,e,i){i()}));var M=K,L=i("498a"),U=i("a7e2");s["default"].use(h["a"]),s["default"].use(L["a"]),s["default"].use(U["a"]),s["default"].config.productionTip=!1,new s["default"]({router:M,render:function(t){return t(d)}}).$mount("#app")},"70b1":function(t,e,i){},"85ec":function(t,e,i){},e903:function(t,e,i){"use strict";i("3f3b")},f36d:function(t,e,i){}});
//# sourceMappingURL=app.4e7ad717.js.map